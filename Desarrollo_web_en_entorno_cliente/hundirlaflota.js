<<<<<<< HEAD
// Tamaño del tablero
const FILAS = 5;
const COLUMNAS = 5;

// Estado del juego
let tablero = []; // matriz 5x5: -1 = vacío, 0 = barco
let partesBarco = 3; // tamaño del barco
let impactos = 0;    // cuántas partes del barco han sido tocadas
let juegoTerminado = false;

const tableroEl = document.getElementById("tablero");
const mensajeEl = document.getElementById("mensaje");

// 1. Crear tablero HTML
function crearTableroDOM() {
  tableroEl.innerHTML = ""; // limpiar por si acaso

  for (let fila = 0; fila < FILAS; fila++) {
    for (let col = 0; col < COLUMNAS; col++) {
      const celda = document.createElement("div");
      celda.classList.add("celda");
      celda.dataset.fila = fila;
      celda.dataset.col = col;

      celda.addEventListener("click", manejarClickCelda);

      tableroEl.appendChild(celda);
    }
  }
}

// 2. Crear matriz del tablero y colocar barco
function inicializarTablero() {
  // matriz llena de -1 (sin barco)
  tablero = Array.from({ length: FILAS }, () => Array(COLUMNAS).fill(-1));

  // Colocar un barco de tamaño 3 en horizontal o vertical
  colocarBarco();
}

// Colocar un barco de tamaño 3 sin salir del tablero
function colocarBarco() {
  const horizontal = Math.random() < 0.5; // true = horizontal, false = vertical

  if (horizontal) {
    // fila aleatoria, columna inicial entre 0 y 2
    const fila = Math.floor(Math.random() * FILAS);
    const colInicio = Math.floor(Math.random() * (COLUMNAS - partesBarco + 1));

    for (let i = 0; i < partesBarco; i++) {
      tablero[fila][colInicio + i] = 0; // 0 indica barco
    }
  } else {
    // columna aleatoria, fila inicial entre 0 y 2
    const col = Math.floor(Math.random() * COLUMNAS);
    const filaInicio = Math.floor(Math.random() * (FILAS - partesBarco + 1));

    for (let i = 0; i < partesBarco; i++) {
      tablero[filaInicio + i][col] = 0; // 0 indica barco
    }
  }
}

// 3. Manejar click en una celda
function manejarClickCelda(evento) {
  if (juegoTerminado) return;

  const celda = evento.currentTarget;
  const fila = parseInt(celda.dataset.fila);
  const col = parseInt(celda.dataset.col);

  // Si ya se había disparado aquí, no hacemos nada
  if (
    celda.classList.contains("agua") ||
    celda.classList.contains("tocado") ||
    celda.classList.contains("hundido")
  ) {
    mensajeEl.textContent = "Ya has disparado en esa casilla. ¡Elige otra!";
    return;
  }

  // Comprobar si hay barco en esa posición
  if (tablero[fila][col] === 0) {
    // Es un impacto
    impactos++;
    celda.classList.add("tocado");
    mensajeEl.textContent = "¡Tocado!";

    // Si hemos alcanzado todas las partes del barco
    if (impactos === partesBarco) {
      mensajeEl.textContent = "¡Hundido! Has hundido el barco.";
      juegoTerminado = true;
      // Opcional: marcar todas las celdas con barco como hundido
      marcarBarcoHundido();
    }
  } else {
    // Agua
    celda.classList.add("agua");
    mensajeEl.textContent = "Agua...";
  }
}

// Marcar todas las partes del barco como "hundido" (rojo)
function marcarBarcoHundido() {
  const celdas = document.querySelectorAll(".celda");
  celdas.forEach(celda => {
    const fila = parseInt(celda.dataset.fila);
    const col = parseInt(celda.dataset.col);

    if (tablero[fila][col] === 0) {
      celda.classList.remove("tocado");
      celda.classList.add("hundido");
    }
  });
}

// Inicializamos el juego
inicializarTablero();
crearTableroDOM();
mensajeEl.textContent = "Haz click en una casilla para disparar.";
=======
// Tamaño del tablero
const FILAS = 5;
const COLUMNAS = 5;

// Estado del juego
let tablero = []; // matriz 5x5: -1 = vacío, 0 = barco
let partesBarco = 3; // tamaño del barco
let impactos = 0;    // cuántas partes del barco han sido tocadas
let juegoTerminado = false;

const tableroEl = document.getElementById("tablero");
const mensajeEl = document.getElementById("mensaje");

// 1. Crear tablero HTML
function crearTableroDOM() {
  tableroEl.innerHTML = ""; // limpiar por si acaso

  for (let fila = 0; fila < FILAS; fila++) {
    for (let col = 0; col < COLUMNAS; col++) {
      const celda = document.createElement("div");
      celda.classList.add("celda");
      celda.dataset.fila = fila;
      celda.dataset.col = col;

      celda.addEventListener("click", manejarClickCelda);

      tableroEl.appendChild(celda);
    }
  }
}

// 2. Crear matriz del tablero y colocar barco
function inicializarTablero() {
  // matriz llena de -1 (sin barco)
  tablero = Array.from({ length: FILAS }, () => Array(COLUMNAS).fill(-1));

  // Colocar un barco de tamaño 3 en horizontal o vertical
  colocarBarco();
}

// Colocar un barco de tamaño 3 sin salir del tablero
function colocarBarco() {
  const horizontal = Math.random() < 0.5; // true = horizontal, false = vertical

  if (horizontal) {
    // fila aleatoria, columna inicial entre 0 y 2
    const fila = Math.floor(Math.random() * FILAS);
    const colInicio = Math.floor(Math.random() * (COLUMNAS - partesBarco + 1));

    for (let i = 0; i < partesBarco; i++) {
      tablero[fila][colInicio + i] = 0; // 0 indica barco
    }
  } else {
    // columna aleatoria, fila inicial entre 0 y 2
    const col = Math.floor(Math.random() * COLUMNAS);
    const filaInicio = Math.floor(Math.random() * (FILAS - partesBarco + 1));

    for (let i = 0; i < partesBarco; i++) {
      tablero[filaInicio + i][col] = 0; // 0 indica barco
    }
  }
}

// 3. Manejar click en una celda
function manejarClickCelda(evento) {
  if (juegoTerminado) return;

  const celda = evento.currentTarget;
  const fila = parseInt(celda.dataset.fila);
  const col = parseInt(celda.dataset.col);

  // Si ya se había disparado aquí, no hacemos nada
  if (
    celda.classList.contains("agua") ||
    celda.classList.contains("tocado") ||
    celda.classList.contains("hundido")
  ) {
    mensajeEl.textContent = "Ya has disparado en esa casilla. ¡Elige otra!";
    return;
  }

  // Comprobar si hay barco en esa posición
  if (tablero[fila][col] === 0) {
    // Es un impacto
    impactos++;
    celda.classList.add("tocado");
    mensajeEl.textContent = "¡Tocado!";

    // Si hemos alcanzado todas las partes del barco
    if (impactos === partesBarco) {
      mensajeEl.textContent = "¡Hundido! Has hundido el barco.";
      juegoTerminado = true;
      // Opcional: marcar todas las celdas con barco como hundido
      marcarBarcoHundido();
    }
  } else {
    // Agua
    celda.classList.add("agua");
    mensajeEl.textContent = "Agua...";
  }
}

// Marcar todas las partes del barco como "hundido" (rojo)
function marcarBarcoHundido() {
  const celdas = document.querySelectorAll(".celda");
  celdas.forEach(celda => {
    const fila = parseInt(celda.dataset.fila);
    const col = parseInt(celda.dataset.col);

    if (tablero[fila][col] === 0) {
      celda.classList.remove("tocado");
      celda.classList.add("hundido");
    }
  });
}

// Inicializamos el juego
inicializarTablero();
crearTableroDOM();
mensajeEl.textContent = "Haz click en una casilla para disparar.";
>>>>>>> fdff496132b419298eeac5c28c4a958f3fcf748b
