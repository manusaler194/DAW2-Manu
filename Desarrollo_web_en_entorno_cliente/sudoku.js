<<<<<<< HEAD
// Solución correcta del sudoku 4x4
// Representamos el tablero como matriz [fila][columna]
const solucion = [
  [1, 2, 3, 4],
  [2, 3, 4, 1],
  [3, 4, 1, 2],
  [4, 1, 2, 2] // OJO: esto está mal adrede para explicar? NO -> lo corrijo:
];

// CORRIJO la solución correcta (cada fila 1..4 sin repetir):
const solucionCorregida = [
  [1, 2, 3, 4],
  [2, 3, 4, 1],
  [3, 4, 1, 2],
  [4, 1, 2, 3]
];

// Lista de ids de las celdas editables y su posición en la solución
const celdas = [
  { id: "c0_1", fila: 0, col: 1 },
  { id: "c0_2", fila: 0, col: 2 },

  { id: "c1_0", fila: 1, col: 0 },
  { id: "c1_3", fila: 1, col: 3 },

  { id: "c2_0", fila: 2, col: 0 },
  { id: "c2_3", fila: 2, col: 3 },

  { id: "c3_1", fila: 3, col: 1 },
  { id: "c3_2", fila: 3, col: 2 }
];

const btnComprobar = document.getElementById("btnComprobar");
const mensajeEl = document.getElementById("mensaje");

// Al pulsar el botón, comprobamos
btnComprobar.addEventListener("click", () => {
  let todoCorrecto = true;

  for (const celda of celdas) {
    const input = document.getElementById(celda.id);
    const valorTexto = input.value.trim();

    // Si está vacío o no es número válido, ya es incorrecto
    if (valorTexto === "") {
      todoCorrecto = false;
      break;
    }

    const valor = parseInt(valorTexto, 10);

    // Comparar con la solución
    if (valor !== solucionCorregida[celda.fila][celda.col]) {
      todoCorrecto = false;
      break;
    }
  }

  if (todoCorrecto) {
    mensajeEl.textContent = "Sudoku correcto";
  } else {
    mensajeEl.textContent = "Sudoku incorrecto";
  }
});
=======
// Solución correcta del sudoku 4x4
// Representamos el tablero como matriz [fila][columna]
const solucion = [
  [1, 2, 3, 4],
  [2, 3, 4, 1],
  [3, 4, 1, 2],
  [4, 1, 2, 2] // OJO: esto está mal adrede para explicar? NO -> lo corrijo:
];

// CORRIJO la solución correcta (cada fila 1..4 sin repetir):
const solucionCorregida = [
  [1, 2, 3, 4],
  [2, 3, 4, 1],
  [3, 4, 1, 2],
  [4, 1, 2, 3]
];

// Lista de ids de las celdas editables y su posición en la solución
const celdas = [
  { id: "c0_1", fila: 0, col: 1 },
  { id: "c0_2", fila: 0, col: 2 },

  { id: "c1_0", fila: 1, col: 0 },
  { id: "c1_3", fila: 1, col: 3 },

  { id: "c2_0", fila: 2, col: 0 },
  { id: "c2_3", fila: 2, col: 3 },

  { id: "c3_1", fila: 3, col: 1 },
  { id: "c3_2", fila: 3, col: 2 }
];

const btnComprobar = document.getElementById("btnComprobar");
const mensajeEl = document.getElementById("mensaje");

// Al pulsar el botón, comprobamos
btnComprobar.addEventListener("click", () => {
  let todoCorrecto = true;

  for (const celda of celdas) {
    const input = document.getElementById(celda.id);
    const valorTexto = input.value.trim();

    // Si está vacío o no es número válido, ya es incorrecto
    if (valorTexto === "") {
      todoCorrecto = false;
      break;
    }

    const valor = parseInt(valorTexto, 10);

    // Comparar con la solución
    if (valor !== solucionCorregida[celda.fila][celda.col]) {
      todoCorrecto = false;
      break;
    }
  }

  if (todoCorrecto) {
    mensajeEl.textContent = "Sudoku correcto";
  } else {
    mensajeEl.textContent = "Sudoku incorrecto";
  }
});
>>>>>>> fdff496132b419298eeac5c28c4a958f3fcf748b
