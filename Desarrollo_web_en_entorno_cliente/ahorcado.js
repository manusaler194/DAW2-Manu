<<<<<<< HEAD
// Lista de palabras posibles
const palabras = ["JAVASCRIPT", "AHORCADO", "PROGRAMACION", "WEB", "CODIGO", "DOM"];

// Estado del juego
let palabraSecreta = "";
let palabraMostrar = [];  // array de letras o "_"
let letrasUsadas = [];
let fallos = 0;
const maxFallos = 6;

// Referencias al DOM
const palabraOcultaEl   = document.getElementById("palabraOculta");
const fallosEl          = document.getElementById("fallos");
const maxFallosEl       = document.getElementById("maxFallos");
const letrasUsadasEl    = document.getElementById("letrasUsadas");
const entradaLetraEl    = document.getElementById("entradaLetra");
const btnProbarEl       = document.getElementById("btnProbar");
const mensajeEl         = document.getElementById("mensaje");
const btnReiniciarEl    = document.getElementById("btnReiniciar");

// Inicializar max fallos en el HTML
maxFallosEl.textContent = maxFallos;

// Función para elegir una palabra y reiniciar el estado
function iniciarJuego() {
  // Elegir una palabra al azar
  const indice = Math.floor(Math.random() * palabras.length);
  palabraSecreta = palabras[indice];

  // Crear el array de "_" de la misma longitud
  palabraMostrar = Array(palabraSecreta.length).fill("_");

  letrasUsadas = [];
  fallos = 0;

  // Actualizar el DOM
  actualizarPantalla();

  mensajeEl.textContent = "Introduce una letra y pulsa 'Probar letra'.";
}

// Actualizar pantallas de palabra, fallos y letras usadas
function actualizarPantalla() {
  palabraOcultaEl.textContent = palabraMostrar.join(" ");
  fallosEl.textContent = fallos;
  letrasUsadasEl.textContent = letrasUsadas.join(", ");
}

// Manejar el intento de una letra
function probarLetra() {
  const entrada = entradaLetraEl.value.toUpperCase().trim();
  entradaLetraEl.value = "";
  mensajeEl.textContent = "";

  // Validaciones básicas
  if (entrada === "") {
    mensajeEl.textContent = "Escribe una letra.";
    return;
  }
  if (!/^[A-ZÑ]$/.test(entrada)) {
    mensajeEl.textContent = "Solo se acepta una letra.";
    return;
  }
  if (letrasUsadas.includes(entrada)) {
    mensajeEl.textContent = "Esa letra ya la has usado.";
    return;
  }

  // Añadimos a letras usadas
  letrasUsadas.push(entrada);

  // Comprobar si la letra está en la palabra
  if (palabraSecreta.includes(entrada)) {
    // Reemplazar los "_" por la letra en las posiciones correctas
    for (let i = 0; i < palabraSecreta.length; i++) {
      if (palabraSecreta[i] === entrada) {
        palabraMostrar[i] = entrada;
      }
    }
    mensajeEl.textContent = "¡Bien! La letra está en la palabra.";
  } else {
    // No está, sumamos fallo
    fallos++;
    mensajeEl.textContent = "Fallaste...";
  }

  actualizarPantalla();
  comprobarFinJuego();
}

// Comprobar si el juego ha terminado (ganar o perder)
function comprobarFinJuego() {
  // ¿Has ganado? (ya no quedan "_")
  if (!palabraMostrar.includes("_")) {
    mensajeEl.textContent = `¡Has ganado! La palabra era "${palabraSecreta}".`;
    desactivarEntrada();
  }

  // ¿Has perdido? (demasiados fallos)
  if (fallos >= maxFallos) {
    mensajeEl.textContent = `Has perdido. La palabra era "${palabraSecreta}".`;
    // Mostrar la palabra completa
    palabraMostrar = palabraSecreta.split("");
    actualizarPantalla();
    desactivarEntrada();
  }
}

// Desactivar el input y el botón de probar
function desactivarEntrada() {
  entradaLetraEl.disabled = true;
  btnProbarEl.disabled = true;
}

// Activar de nuevo el input (al reiniciar)
function activarEntrada() {
  entradaLetraEl.disabled = false;
  btnProbarEl.disabled = false;
}

// Eventos
btnProbarEl.addEventListener("click", probarLetra);

// Permitir pulsar Enter para probar la letra
entradaLetraEl.addEventListener("keyup", (event) => {
  if (event.key === "Enter") {
    probarLetra();
  }
});

btnReiniciarEl.addEventListener("click", () => {
  activarEntrada();
  iniciarJuego();
});

// Iniciar el juego la primera vez
iniciarJuego();
=======
// Lista de palabras posibles
const palabras = ["JAVASCRIPT", "AHORCADO", "PROGRAMACION", "WEB", "CODIGO", "DOM"];

// Estado del juego
let palabraSecreta = "";
let palabraMostrar = [];  // array de letras o "_"
let letrasUsadas = [];
let fallos = 0;
const maxFallos = 6;

// Referencias al DOM
const palabraOcultaEl   = document.getElementById("palabraOculta");
const fallosEl          = document.getElementById("fallos");
const maxFallosEl       = document.getElementById("maxFallos");
const letrasUsadasEl    = document.getElementById("letrasUsadas");
const entradaLetraEl    = document.getElementById("entradaLetra");
const btnProbarEl       = document.getElementById("btnProbar");
const mensajeEl         = document.getElementById("mensaje");
const btnReiniciarEl    = document.getElementById("btnReiniciar");

// Inicializar max fallos en el HTML
maxFallosEl.textContent = maxFallos;

// Función para elegir una palabra y reiniciar el estado
function iniciarJuego() {
  // Elegir una palabra al azar
  const indice = Math.floor(Math.random() * palabras.length);
  palabraSecreta = palabras[indice];

  // Crear el array de "_" de la misma longitud
  palabraMostrar = Array(palabraSecreta.length).fill("_");

  letrasUsadas = [];
  fallos = 0;

  // Actualizar el DOM
  actualizarPantalla();

  mensajeEl.textContent = "Introduce una letra y pulsa 'Probar letra'.";
}

// Actualizar pantallas de palabra, fallos y letras usadas
function actualizarPantalla() {
  palabraOcultaEl.textContent = palabraMostrar.join(" ");
  fallosEl.textContent = fallos;
  letrasUsadasEl.textContent = letrasUsadas.join(", ");
}

// Manejar el intento de una letra
function probarLetra() {
  const entrada = entradaLetraEl.value.toUpperCase().trim();
  entradaLetraEl.value = "";
  mensajeEl.textContent = "";

  // Validaciones básicas
  if (entrada === "") {
    mensajeEl.textContent = "Escribe una letra.";
    return;
  }
  if (!/^[A-ZÑ]$/.test(entrada)) {
    mensajeEl.textContent = "Solo se acepta una letra.";
    return;
  }
  if (letrasUsadas.includes(entrada)) {
    mensajeEl.textContent = "Esa letra ya la has usado.";
    return;
  }

  // Añadimos a letras usadas
  letrasUsadas.push(entrada);

  // Comprobar si la letra está en la palabra
  if (palabraSecreta.includes(entrada)) {
    // Reemplazar los "_" por la letra en las posiciones correctas
    for (let i = 0; i < palabraSecreta.length; i++) {
      if (palabraSecreta[i] === entrada) {
        palabraMostrar[i] = entrada;
      }
    }
    mensajeEl.textContent = "¡Bien! La letra está en la palabra.";
  } else {
    // No está, sumamos fallo
    fallos++;
    mensajeEl.textContent = "Fallaste...";
  }

  actualizarPantalla();
  comprobarFinJuego();
}

// Comprobar si el juego ha terminado (ganar o perder)
function comprobarFinJuego() {
  // ¿Has ganado? (ya no quedan "_")
  if (!palabraMostrar.includes("_")) {
    mensajeEl.textContent = `¡Has ganado! La palabra era "${palabraSecreta}".`;
    desactivarEntrada();
  }

  // ¿Has perdido? (demasiados fallos)
  if (fallos >= maxFallos) {
    mensajeEl.textContent = `Has perdido. La palabra era "${palabraSecreta}".`;
    // Mostrar la palabra completa
    palabraMostrar = palabraSecreta.split("");
    actualizarPantalla();
    desactivarEntrada();
  }
}

// Desactivar el input y el botón de probar
function desactivarEntrada() {
  entradaLetraEl.disabled = true;
  btnProbarEl.disabled = true;
}

// Activar de nuevo el input (al reiniciar)
function activarEntrada() {
  entradaLetraEl.disabled = false;
  btnProbarEl.disabled = false;
}

// Eventos
btnProbarEl.addEventListener("click", probarLetra);

// Permitir pulsar Enter para probar la letra
entradaLetraEl.addEventListener("keyup", (event) => {
  if (event.key === "Enter") {
    probarLetra();
  }
});

btnReiniciarEl.addEventListener("click", () => {
  activarEntrada();
  iniciarJuego();
});

// Iniciar el juego la primera vez
iniciarJuego();
>>>>>>> fdff496132b419298eeac5c28c4a958f3fcf748b
