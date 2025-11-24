let taskInput = document.getElementById("taskInput");
let addBtn = document.getElementById("addBtn");
let taskList = document.getElementById("taskList");

// cargar tareas guardadas
taskList.innerHTML = localStorage.getItem("tareas") || "";

addBtn.onclick = function () {
  let text = taskInput.value.trim();
  if (text === "") return;

  let li = document.createElement("li");

  let checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkbox.onchange = save;

  let span = document.createElement("span");
  span.textContent = text;

  let editBtn = document.createElement("button");
  editBtn.textContent = "Editar";
  editBtn.onclick = function () {
    let nuevo = prompt("Editar tarea:", span.textContent);
    if (nuevo && nuevo.trim() !== "") {
      span.textContent = nuevo.trim();
      save();
    }
  };

  let delBtn = document.createElement("button");
  delBtn.textContent = "Borrar";
  delBtn.onclick = function () {
    taskList.removeChild(li);
    save();
  };

  li.appendChild(checkbox);
  li.appendChild(span);
  li.appendChild(editBtn);
  li.appendChild(delBtn);
  taskList.appendChild(li);

  taskInput.value = "";
  save();
};

function save() {
  localStorage.setItem("tareas", taskList.innerHTML);
}
