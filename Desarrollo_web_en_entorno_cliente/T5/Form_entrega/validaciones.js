let form = document.getElementById("registro");



function validarNombre() {
  let nombre = document.getElementById("nombre").value.trim();
  return nombre !== "";
}

function validarApellido1() {
  let apellido = document.getElementById("apellido1").value.trim();
  return apellido !== "";
}

function validarFechaNacimiento() {
  let fecha = document.getElementById("fechaNacimiento").value;
  if (!fecha) return false;

  let nacimiento = new Date(fecha);
  let hoy = new Date();

  let edad = hoy.getFullYear() - nacimiento.getFullYear();
  let m = hoy.getMonth() - nacimiento.getMonth();

  if (m < 0 || (m === 0 && hoy.getDate() < nacimiento.getDate())) {
    edad--;
  }

  
  return edad >= 18;
}

function validarDni() {
  let tipo = document.getElementById("tipoDocumento").value;
  let dni = document.getElementById("dni").value.trim().toUpperCase();

  if (tipo === "DNI") {
    /*
      ^        → inicio de la cadena
      \d{8}    → exactamente 8 números
      [A-Z]    → una letra mayúscula
      $        → fin de la cadena
      Ejemplo válido: 12345678Z
    */
    return /^\d{8}[A-Z]$/.test(dni);
  }

  if (tipo === "NIE") {
    /*
      ^        → inicio de la cadena
      [XYZ]    → empieza por X, Y o Z
      \d{7}    → 7 números
      [A-Z]    → una letra final
      $        → fin de la cadena
      Ejemplo válido: X1234567L
    */
    return /^[XYZ]\d{7}[A-Z]$/.test(dni);
  }

  return false;
}

function validarPassword() {
  let pass = document.getElementById("contrasena").value;
  let pass2 = document.getElementById("repetirContrasena").value;

  /*
    ^               → inicio
    (?=.*\d)        → al menos un número
    (?=.*[!@#%^&*]) → al menos un símbolo permitido
    .{13,}          → mínimo 13 caracteres
    $               → fin
  */
  let regex = /^(?=.*\d)(?=.*[!@#%^&*]).{13,}$/;

 
  return regex.test(pass) && pass === pass2;
}

function validarEmail() {
  let email = document.getElementById("email").value;
  let email2 = document.getElementById("repetirEmail").value;

  /*
    ^[^\s@]+   → texto antes del @ (sin espacios ni @)
    @          → símbolo @ obligatorio
    [^\s@]+    → dominio
    \.         → punto
    [^\s@]+$   → extensión
    Ejemplo válido: usuario@email.com
  */
  let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  return regex.test(email) && email === email2;
}

function validarTelefono() {
  let tel = document.getElementById("telefono").value;

  /*
    ^          → inicio
    [6789+]    → empieza por 6, 7, 8, 9 o +
    \d{8,}     → al menos 8 dígitos más
    $          → fin
    Ejemplo válido: 600123456 o +34600123456
  */
  return /^[6789+]\d{8,}$/.test(tel);
}

function validarCheckbox(id) {
  return document.getElementById(id).checked;
}

// ---------- ENVÍO FORMULARIO ----------

form.addEventListener("submit", function (e) {
  e.preventDefault();
  let correcto = true;

  // Limpia errores
  document.querySelectorAll(".error").forEach((e) => (e.textContent = ""));

  if (!validarNombre()) {
    errorNombre.textContent = "El campo Nombre es obligatorio.";
    correcto = false;
  }

  if (!validarApellido1()) {
    errorApellido1.textContent = "Debe rellenar el campo primer apellido.";
    correcto = false;
  }

  if (!validarFechaNacimiento()) {
    errorFechaNacimiento.textContent = "Debe ser mayor de edad.";
    correcto = false;
  }

  if (!validarDni()) {
    errorDni.textContent = "El documento debe tener 8 numeros y una letra.";
    correcto = false;
  }

  if (!validarPassword()) {
    errorContrasena.textContent =
      "La contraseña debe tener más de 12 caracteres, un número y un símbolo.";
    correcto = false;
  }

  if (!validarEmail()) {
    errorEmail.textContent =
      "El correo electrónico no es válido o no coincide.";
    correcto = false;
  }

  if (!validarTelefono()) {
    errorTelefono.textContent = "El teléfono móvil no es válido.";
    correcto = false;
  }

  if (!validarCheckbox("consentimiento")) {
    errorConsentimiento.textContent = "Debe dar su consentimiento.";
    correcto = false;
  }

  if (!validarCheckbox("ciertos")) {
    errorCierto.textContent = "Debe aceptar la declaración.";
    correcto = false;
  }

  if (correcto) {
    if (confirm("¿Desea enviar el formulario?")) {
      form.submit();
    }
  }
});
