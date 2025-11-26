// Arrays y variables
let bombo = [];
let carton = [];
let aciertos = 0;
let juegoTerminado = false;

// Referencias al DOM
const btnBombo = document.getElementById("btnBombo");
const numeroActualEl = document.getElementById("numeroActual");
const cartonEl = document.getElementById("carton");
const numerosExtraidosEl = document.getElementById("numerosExtraidos");
const mensajeEl = document.getElementById("mensaje");

// Función para iniciar el juego
function iniciarJuego() {
    bombo = [];
    for (let i = 1; i <= 90; i++) bombo.push(i);

    carton = [];
    while (carton.length < 15) {
        const n = Math.floor(Math.random() * 90) + 1;
        if (!carton.includes(n)) carton.push(n);
    }

    aciertos = 0;
    juegoTerminado = false;
    numeroActualEl.textContent = "-";
    numerosExtraidosEl.textContent = "";
    mensajeEl.textContent = "";

    // Pintar cartón
    cartonEl.innerHTML = "";
    carton.forEach(n => {
        const span = document.createElement("span");
        span.textContent = n;
        span.dataset.numero = n;
        span.style.margin = "5px";
        span.style.display = "inline-block";
        span.style.width = "30px";
        span.style.textAlign = "center";
        span.style.border = "1px solid #000";
        span.style.padding = "3px";
        cartonEl.appendChild(span);
    });

    btnBombo.disabled = false;
}

// Función para sacar número
function sacarNumero() {
    if (juegoTerminado) return;

    if (bombo.length === 0) {
        mensajeEl.textContent = "No quedan más bolas.";
        btnBombo.disabled = true;
        return;
    }

    const indice = Math.floor(Math.random() * bombo.length);
    const numero = bombo[indice];
    bombo.splice(indice, 1);

    numeroActualEl.textContent = numero;

    // Añadir a números extraídos
    const spanExtraido = document.createElement("span");
    spanExtraido.textContent = numero;
    spanExtraido.style.margin = "3px";
    numerosExtraidosEl.appendChild(spanExtraido);

    // Comprobar si el número está en el cartón
    const celdas = cartonEl.querySelectorAll("span");
    celdas.forEach(celda => {
        if (parseInt(celda.dataset.numero) === numero) {
            celda.style.textDecoration = "line-through";
            aciertos++;
        }
    });

    // Comprobar bingo
    if (aciertos === 15) {
        mensajeEl.textContent = "¡BINGO! Has completado tu cartón.";
        juegoTerminado = true;
        btnBombo.disabled = true;
    }
}

// Eventos
btnBombo.addEventListener("click", sacarNumero);

// Inicializar juego al cargar
iniciarJuego();
