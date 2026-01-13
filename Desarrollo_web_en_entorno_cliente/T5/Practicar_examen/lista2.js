let lista = document.getElementById("listaDelegacion");
let btnAgregarLi = document.getElementById("btnAgregarLi");
let contador_li =0;

btnAgregarLi.addEventListener("click", ()=>{
    
    contador_li ++;

    let li = document.createElement("li");
    li.textContent = "Elemento "+contador_li;
    lista.appendChild(li);
    
})