

let input = document.getElementById("nuevaTarea");
let btnagregar = document.getElementById("btnAgregar");
let lista = document.getElementById("lista");

let tareas= [];
let cargado = localStorage.getItem("tareas");
if (cargado){
    tareas = JSON.parse(cargado);
    render();
}
btnagregar.addEventListener("click",()=>{

    
    let valor = input.value.trim();
    if (valor ==""){
        alert("Necesita poner un valor en la casilla input");
        return;
    }

    tareas.push(valor);
    input.value = "";

    guardar();
    render();
}) 


function render() {
    lista.innerHTML = "";
    tareas.forEach((valor,indice) => {
        let li = document.createElement("li")
        li.textContent = valor;

        let btnBorrar = document.createElement("button");
        btnBorrar.textContent = "Borrar";
        btnBorrar.addEventListener("click",()=> {
            tareas.splice(indice,1);
            guardar();
            render();
        })
        li.appendChild(btnBorrar);
        lista.appendChild(li);
    })
}
function guardar(){
    localStorage.setItem("tareas",JSON.stringify(tareas));
}