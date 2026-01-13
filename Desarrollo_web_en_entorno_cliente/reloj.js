<<<<<<< HEAD
// Seleccionamos el elemento donde mostraremos la hora
const relojEl = document.getElementById("reloj");

// Función que obtiene la hora actual y la muestra en el <p>
function actualizarReloj() {
  const ahora = new Date();

  let horas = ahora.getHours();
  let minutos = ahora.getMinutes();
  let segundos = ahora.getSeconds();

  // Añadimos un 0 delante si es menor que 10 (para que se vea 08:05:03)
  if (horas < 10) horas = "0" + horas;
  if (minutos < 10) minutos = "0" + minutos;
  if (segundos < 10) segundos = "0" + segundos;

  const horaFormateada = `${horas}:${minutos}:${segundos}`;

  // Mostramos la hora en el elemento
  relojEl.textContent = horaFormateada;
}

// Llamamos una vez para que aparezca la hora nada más cargar
actualizarReloj();

// Y después la actualizamos cada 1000 ms (1 segundo)
=======
// Seleccionamos el elemento donde mostraremos la hora
const relojEl = document.getElementById("reloj");

// Función que obtiene la hora actual y la muestra en el <p>
function actualizarReloj() {
  const ahora = new Date();

  let horas = ahora.getHours();
  let minutos = ahora.getMinutes();
  let segundos = ahora.getSeconds();

  // Añadimos un 0 delante si es menor que 10 (para que se vea 08:05:03)
  if (horas < 10) horas = "0" + horas;
  if (minutos < 10) minutos = "0" + minutos;
  if (segundos < 10) segundos = "0" + segundos;

  const horaFormateada = `${horas}:${minutos}:${segundos}`;

  // Mostramos la hora en el elemento
  relojEl.textContent = horaFormateada;
}

// Llamamos una vez para que aparezca la hora nada más cargar
actualizarReloj();

// Y después la actualizamos cada 1000 ms (1 segundo)
>>>>>>> fdff496132b419298eeac5c28c4a958f3fcf748b
setInterval(actualizarReloj, 1000);