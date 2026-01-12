"use sctrict";


let dineroGastado = 0;

let cafe = {nombre: "Manzana", precio: 1.5};
let pan = {nombre: "Pan", precio: 2.10};
let queso = {nombre: "Queso", precio: 3.8};
let manzana = {nombre: "Manzana", precio: 4.5};

// modifica tu código aquí
const carrito = document.getElementById('carrito');
const comprados = document.getElementById('comprados');
const productos = document.getElementById('productos');
const total = document.getElementById('total');

// generador de botones comprar
const btnComprar = function() {
    let btn = document.createElement('button');
    btn.classList.add('btn-comprar');
    btn.dataset.tipo = 'c';
    btn.textContent = 'Comprar';
    return btn;
};
// generador de botones eliminar
const btnEliminar = function() {
    let btn = document.createElement('button');
    btn.classList.add('btn-eliminar');
    btn.dataset.tipo = 'e';
    btn.textContent = 'Eliminar';
    return btn;
};

productos.addEventListener('click', agregaAlCarrito,true);

carrito.addEventListener('click', function(event) {
    let boton = event.target;
    let tipo = boton.dataset?.tipo;
    if (tipo) { // si es un boton, comparo dataset para llamar la funcion que toque
        let li = boton.parentElement;
        li.dataset.tocado = true; // para desactivar el temporizador
        if (tipo === 'c') compraProducto(li);
        else if (tipo === 'e') eliminaProducto(li);
    }
},true);
// event: el evento de click, lo gestiono dentro
function agregaAlCarrito(event) {
    let boton = event.target;
    let nombre = boton.dataset?.nombre;
    if (nombre) { // si es un boton de la lista
        let precio = boton.dataset.precio;
        let li = document.createElement('li');
        li.classList.add('item');
        li.textContent = `${nombre} ${precio} €`;
        li.appendChild(btnComprar());
        li.appendChild(btnEliminar());
        li.dataset.tocado = false; // para controlar el temporizador
        li.dataset.precio = precio; // para sumarlo al total
        iniciaTemporizador(li);
        carrito.appendChild(li);
    }
}
// li: el item de la lista
function iniciaTemporizador(li) {
    setTimeout((elem) => {
        if (elem.dataset.tocado === 'false')
            elem.classList.add('urgente');
    }, 3000, li);
}
// li: el item de la lista
function compraProducto(li) {
    li.classList.remove('urgente'); // por si lo tiene
    li.removeChild(li.children[0]); // iba mal con bucle for of porque disminuia el array
    li.removeChild(li.children[0]);
    comprados.appendChild(li);
    actualizaGastos(Number(li.dataset.precio));
}
// li: el item de la lista
function eliminaProducto(li) {
    li.parentElement.removeChild(li);
}
// precio: el precio del producto
function actualizaGastos(precio) {
    dineroGastado += precio;
    total.textContent = dineroGastado;
}