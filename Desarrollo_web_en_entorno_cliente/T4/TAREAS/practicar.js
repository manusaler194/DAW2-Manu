let boton = document.getElementById("boton");
boton.addEventListener("click" , insertarTarea);
let input = document.getElementById("texto")

let tareas = [];
let guardadado = localStorage.getItem("tareas", JSON.stringify("tareas"))
if (guardadado){
  tareas = JSON.parse(guardadado)
  render()
}
function guardar(){
  localStorage.setItem("tareas",JSON.stringify(tareas));
}


function render(){
    lista.innerHTML =""
  tareas.forEach((tarea, indice) => {
  let li = document.createElement("li")
  li.innerHTML = tarea;
  let borrar = document.createElement("button")
  borrar.innerHTML = "Borrar"
  
  borrar.addEventListener("click" , ()=>{
    li.remove()
    tareas.splice(indice,1)
    guardar()
    render()
  })
  li.appendChild(borrar)
  lista.appendChild(li)
  })


}


function insertarTarea(){
  texto = input.value.trim()
  if (texto == "") return;
tareas.push(texto)
guardar()
render()
}
