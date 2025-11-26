const inputTarea = document.getElementById("tarea");
const btnAdd = document.getElementById("btnAdd");
const listaTareas = document.getElementById("listaTareas");

btnAdd.addEventListener("click", () => {
  const texto = inputTarea.value.trim();
  if (texto === "") return;

  const li = document.createElement("li");
  li.textContent = texto;

  li.addEventListener("click", () => {
    li.classList.toggle("completada");
  });

  li.addEventListener("dblclick", () => {
    listaTareas.removeChild(li);
  });

  listaTareas.appendChild(li);
  inputTarea.value = "";
});
