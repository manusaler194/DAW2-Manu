<<<<<<< HEAD
// Obtener referencias a los elementos
const num1Input = document.getElementById("num1");
const num2Input = document.getElementById("num2");
const resultadoEl = document.getElementById("resultado");
const errorEl = document.getElementById("error");

const btnSumar = document.getElementById("btnSumar");
const btnRestar = document.getElementById("btnRestar");
const btnMultiplicar = document.getElementById("btnMultiplicar");
const btnDividir = document.getElementById("btnDividir");
const btnPotencia = document.getElementById("btnPotencia");
const btnRaiz = document.getElementById("btnRaiz");

// Función para limpiar mensaje de error
function limpiarError() {
  errorEl.textContent = "";
}

// Función para mostrar error
function mostrarError(msg) {
  errorEl.textContent = msg;
  resultadoEl.textContent = "---";
}

// Función para obtener y validar los números
function obtenerNumeros(dosNumeros = true) {
  limpiarError();

  const valor1 = num1Input.value.trim();
  const valor2 = num2Input.value.trim();

  const n1 = parseFloat(valor1);
  const n2 = parseFloat(valor2);

  // Validar num1
  if (valor1 === "" || isNaN(n1)) {
    mostrarError("Número 1 no es válido");
    return null;
  }

  // Si la operación solo necesita un número
  if (!dosNumeros) {
    return { n1 };
  }

  // Validar num2
  if (valor2 === "" || isNaN(n2)) {
    mostrarError("Número 2 no es válido");
    return null;
  }

  return { n1, n2 };
}

// Operaciones
btnSumar.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = n1 + n2;
  resultadoEl.textContent = res;
});

btnRestar.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = n1 - n2;
  resultadoEl.textContent = res;
});

btnMultiplicar.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = n1 * n2;
  resultadoEl.textContent = res;
});

btnDividir.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;

  // Comprobar división entre 0
  if (n2 === 0) {
    mostrarError("Error: no se puede dividir entre 0");
    return;
  }

  const res = n1 / n2;
  resultadoEl.textContent = res;
});

btnPotencia.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = Math.pow(n1, n2); // n1 elevado a n2
  resultadoEl.textContent = res;
});

btnRaiz.addEventListener("click", () => {
  const nums = obtenerNumeros(false); // solo num1
  if (!nums) return;
  const { n1 } = nums;

  if (n1 < 0) {
    mostrarError("Error: no se puede hacer raíz cuadrada de un número negativo (real)");
    return;
  }

  const res = Math.sqrt(n1);
  resultadoEl.textContent = res;
});
=======
// Obtener referencias a los elementos
const num1Input = document.getElementById("num1");
const num2Input = document.getElementById("num2");
const resultadoEl = document.getElementById("resultado");
const errorEl = document.getElementById("error");

const btnSumar = document.getElementById("btnSumar");
const btnRestar = document.getElementById("btnRestar");
const btnMultiplicar = document.getElementById("btnMultiplicar");
const btnDividir = document.getElementById("btnDividir");
const btnPotencia = document.getElementById("btnPotencia");
const btnRaiz = document.getElementById("btnRaiz");

// Función para limpiar mensaje de error
function limpiarError() {
  errorEl.textContent = "";
}

// Función para mostrar error
function mostrarError(msg) {
  errorEl.textContent = msg;
  resultadoEl.textContent = "---";
}

// Función para obtener y validar los números
function obtenerNumeros(dosNumeros = true) {
  limpiarError();

  const valor1 = num1Input.value.trim();
  const valor2 = num2Input.value.trim();

  const n1 = parseFloat(valor1);
  const n2 = parseFloat(valor2);

  // Validar num1
  if (valor1 === "" || isNaN(n1)) {
    mostrarError("Número 1 no es válido");
    return null;
  }

  // Si la operación solo necesita un número
  if (!dosNumeros) {
    return { n1 };
  }

  // Validar num2
  if (valor2 === "" || isNaN(n2)) {
    mostrarError("Número 2 no es válido");
    return null;
  }

  return { n1, n2 };
}

// Operaciones
btnSumar.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = n1 + n2;
  resultadoEl.textContent = res;
});

btnRestar.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = n1 - n2;
  resultadoEl.textContent = res;
});

btnMultiplicar.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = n1 * n2;
  resultadoEl.textContent = res;
});

btnDividir.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;

  // Comprobar división entre 0
  if (n2 === 0) {
    mostrarError("Error: no se puede dividir entre 0");
    return;
  }

  const res = n1 / n2;
  resultadoEl.textContent = res;
});

btnPotencia.addEventListener("click", () => {
  const nums = obtenerNumeros(true);
  if (!nums) return;
  const { n1, n2 } = nums;
  const res = Math.pow(n1, n2); // n1 elevado a n2
  resultadoEl.textContent = res;
});

btnRaiz.addEventListener("click", () => {
  const nums = obtenerNumeros(false); // solo num1
  if (!nums) return;
  const { n1 } = nums;

  if (n1 < 0) {
    mostrarError("Error: no se puede hacer raíz cuadrada de un número negativo (real)");
    return;
  }

  const res = Math.sqrt(n1);
  resultadoEl.textContent = res;
});
>>>>>>> fdff496132b419298eeac5c28c4a958f3fcf748b
