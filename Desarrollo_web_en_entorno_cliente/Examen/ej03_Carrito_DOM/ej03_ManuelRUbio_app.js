"use sctrict";




let dineroGastado = 0;

let cafe = {nombre: "Manzana", precio: 1.5};
let pan = {nombre: "Pan", precio: 2.10};
let queso = {nombre: "Queso", precio: 3.8};
let manzana = {nombre: "Manzana", precio: 4.5};

// modifica tu código aquí
let total =0;
let span = document.getElementById('total');

const productos = document.getElementById('productos');
let carrito = document.getElementById("carrito");
let comprado = document.getElementById("comprados");
productos.addEventListener('click', agregaCarrito);
function agregaCarrito (evento) {
    let boton = evento.target;
    let nombre = boton.dataset.nombre;
    let precio = boton.dataset.precio;
    let li = document.createElement("li");
    li.className = "item";
    li.innerHTML = `${nombre} ${precio}`;
    let boton_compra= document.createElement('button')
    let boton_borrar= document.createElement('button')
    boton_compra.innerHTML = "COMPRAR";
    boton_borrar.innerHTML = "BORRAR";
    boton_compra.className = "btn-comprar";
    boton_compra.dataset.nombre = nombre;
    boton_compra.dataset.precio = precio;
    boton_borrar.className = "btn-eliminar";
    carrito.appendChild(li);
    li.appendChild(boton_compra);
    li.appendChild(boton_borrar);
    boton_compra.addEventListener('click', botonCompra);
    boton_borrar.addEventListener('click', eliminaProducto)
    setTimeout((li) => {
     li.classList.add('urgente');   
    }, 3000,li)
}
function botonCompra (evento) {
    let boton = evento.target;
    let li2 = boton.parentElement;
    let li = document.createElement('li');
    let nombre = boton.dataset.nombre;
    let precio = boton.dataset.precio;
    li.className = "item";
    li.innerHTML = `${nombre} ${precio}`; 
    comprado.appendChild(li);
    li2.remove();
    actualizaGastos(Number(precio))
}
function actualizaGastos (precio) {
    
    total +=precio;
    span.innerHTML="";
    span.innerHTML = total;
}
function eliminaProducto(evento) {
let boton = evento.target;
let li = boton.parentElement;
li.remove();
}
