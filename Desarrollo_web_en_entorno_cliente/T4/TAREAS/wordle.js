// --- Configuración del Juego ---
const PALABRAS = ["PLUMA", "CINCO", "JUEGO", "LIBRO", "MANTE"];
const PALABRA_SECRETA = PALABRAS[1]; // Palabra aleatoria
const LONGITUD_PALABRA = 5;
const MAX_INTENTOS = 6;

// --- Estado del Juego ---
let intentoActual = 0;
let letraActual = 0;
let juegoTerminado = false;

// --- Referencias al DOM ---
const grid = document.getElementById("grid");
const messageContainer = document.getElementById("message-container");

// --- Inicialización ---

function crearGrid() {
  for (let i = 0; i < MAX_INTENTOS; i++) {
    const row = document.createElement("div");
    row.classList.add("row");
    row.id = `row-${i}`;

    for (let j = 0; j < LONGITUD_PALABRA; j++) {
      const tile = document.createElement("div");
      tile.classList.add("tile");
      tile.id = `tile-${i}-${j}`;
      row.appendChild(tile);
    }
    grid.appendChild(row);
  }
}

function mostrarMensaje(mensaje) {
  messageContainer.textContent = mensaje;
  messageContainer.textContent = "";
}

// --- Lógica de Entrada ---

function handleKey(key) {
  if (juegoTerminado) return;

  if (key.length === 1 && key.match(/[A-Z]/)) {
    if (letraActual < LONGITUD_PALABRA) {
      const tile = document.getElementById(
        `tile-${intentoActual}-${letraActual}`
      );
      tile.textContent = key;
      letraActual++;
    }
  } else if (key === "BACKSPACE") {
    if (letraActual > 0) {
      letraActual--;
      const tile = document.getElementById(
        `tile-${intentoActual}-${letraActual}`
      );
      tile.textContent = "";
    }
  } else if (key === "ENTER") {
    if (letraActual === LONGITUD_PALABRA) {
      verificarIntento();
    } else {
      mostrarMensaje("Faltan letras.");
    }
  }
}

// --- Lógica del Juego (Verificación de colores) ---

function verificarIntento() {
  const filaActual = document.getElementById(`row-${intentoActual}`);
  let intento = "";
  for (const tile of filaActual.children) {
    intento += tile.textContent;
  }

  const resultados = new Array(LONGITUD_PALABRA);
  const conteoLetras = {};
  for (const letra of PALABRA_SECRETA) {
    conteoLetras[letra] = (conteoLetras[letra] || 0) + 1;
  }

  // 1. Identificar VERDES
  for (let i = 0; i < LONGITUD_PALABRA; i++) {
    if (intento[i] === PALABRA_SECRETA[i]) {
      resultados[i] = "verde";
      conteoLetras[intento[i]]--;
    }
  }

  // 2. Identificar AMARILLOS y GRISES
  for (let i = 0; i < LONGITUD_PALABRA; i++) {
    if (resultados[i] === "verde") continue;

    const letra = intento[i];

    if (PALABRA_SECRETA.includes(letra) && conteoLetras[letra] > 0) {
      resultados[i] = "amarillo";
      conteoLetras[letra]--;
    } else {
      resultados[i] = "gris";
    }
  }

  aplicarColores(intento, resultados);

  // Comprobar fin del juego
  if (intento === PALABRA_SECRETA) {
    mostrarMensaje("¡Ganaste! 🎉");
    juegoTerminado = true;
  } else if (intentoActual === MAX_INTENTOS - 1) {
    mostrarMensaje(`¡Perdiste! Era: ${PALABRA_SECRETA}`);
    juegoTerminado = true;
  } else {
    intentoActual++;
    letraActual = 0;
  }
}

function aplicarColores(intento, resultados) {
  const fila = document.getElementById(`row-${intentoActual}`);

  for (let i = 0; i < LONGITUD_PALABRA; i++) {
    const color = resultados[i];
    // Aplicar clase a la casilla
    fila.children[i].classList.add(color);

    // Actualizar el color del teclado
    const keyButton = document.querySelector(
      `#keyboard button[data-key="${intento[i]}"]`
    );
    if (keyButton) {
      const clases = keyButton.classList;
      // Lógica para aplicar el color más relevante
      if (clases.contains("verde")) continue;
      if (clases.contains("amarillo") && color !== "verde") continue;

      clases.remove("gris", "amarillo");
      clases.add(color);
    }
  }
}

// --- Event Listeners ---
document.addEventListener("keydown", (e) => {
  let key = e.key.toUpperCase();
  if (key.length === 1 && key.match(/[A-Z]/)) {
    handleKey(key);
  } else if (key === "BACKSPACE" || key === "ENTER") {
    handleKey(key);
  }
});

document.getElementById("keyboard").addEventListener("click", (e) => {
  if (e.target.tagName === "BUTTON") {
    handleKey(e.target.getAttribute("data-key"));
  }
});

crearGrid();
