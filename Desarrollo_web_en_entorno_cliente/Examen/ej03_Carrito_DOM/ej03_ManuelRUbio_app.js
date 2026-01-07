"use sctrict";


let dineroGastado = 0;

let cafe = {nombre: "Manzana", precio: 1.5};
let pan = {nombre: "Pan", precio: 2.10};
let queso = {nombre: "Queso", precio: 3.8};
let manzana = {nombre: "Manzana", precio: 4.5};

// modifica tu código aquí
let productos = document.getElementsByClassName("boton-producto")
console.log(productos)
    productos[0].addEventListener("click",agregaAlCarrito => {
       let carrito = document.getElementById("carrito")
        let precio = Number(productos[0].dataset.precio); 
        let nombre = productos[0].dataset.nombreProducto; 
        console.log(nombre, precio);
        console.log("hola")
        let li = document.createElement("li")
        li.className = "item"
        let btncompra = document.createElement("button")
        btncompra.className = "btn-comprar"
        let btneliminar = document.createElement("button")
        btncompra.className = "btn-eliminar"
        btneliminar.addEventListener("click", borrarProducto =>{
            li.remove()
        } )
        li.appendChild(btncompra)
        li.appendChild(btneliminar)
        carrito.appendChild(li)

    })
    productos[1].addEventListener("click",agregaAlCarrito => {
       let carrito = document.getElementById("carrito")
        let precio = Number(productos[1].dataset.precio); 
        let nombre = productos[1].dataset.nombreProducto; 
        console.log(nombre, precio);
        console.log("hola")
        let li = document.createElement("li")
        li.className = "item"
        li.innerHTML = nombre +" " + precio
        let btncompra = document.createElement("button")
        btncompra.className = "btn-comprar"
        let btneliminar = document.createElement("button")
        btncompra.className = "btn-eliminar"
        btneliminar.addEventListener("click", borrarProducto =>{
            li.remove()
        } )
        li.appendChild(btncompra)
        li.appendChild(btneliminar)
        carrito.appendChild(li)

    })
    productos[2].addEventListener("click",agregaAlCarrito => {
       let carrito = document.getElementById("carrito")
        let precio = Number(productos[2].dataset.precio); 
        let nombre = productos[2].dataset.nombreProducto; 
        console.log(nombre, precio);
        console.log("hola")
        let li = document.createElement("li")
        li.className = "item"
        li.innerHTML = nombre +" " + precio
        let btncompra = document.createElement("button")
        btncompra.className = "btn-comprar"
        let btneliminar = document.createElement("button")
        btncompra.className = "btn-eliminar"
        btneliminar.addEventListener("click", borrarProducto =>{
            li.remove()
        } )
        li.appendChild(btncompra)
        li.appendChild(btneliminar)
        carrito.appendChild(li)

    })
    productos[3].addEventListener("click",agregaAlCarrito => {
       let carrito = document.getElementById("carrito")
        let precio = Number(productos[3].dataset.precio); 
        let nombre = productos[3].dataset.nombreProducto; 
        console.log(nombre, precio);
        console.log("hola")
        let li = document.createElement("li")
        li.className = "item"
        li.innerHTML = nombre +" " + precio
        let btncompra = document.createElement("button")
        btncompra.className = "btn-comprar"
        let btneliminar = document.createElement("button")
        btncompra.className = "btn-eliminar"
        btneliminar.addEventListener("click", borrarProducto =>{
            li.remove()
        } )
        li.appendChild(btncompra)
        li.appendChild(btneliminar)
        carrito.appendChild(li)

    })

    let carrito = document.getElementById("carrito")
    
    function agregaAlCarrito(){
        console.log("hola")
        let li = document.createElement("li")
        li.className = "item"
        li.innerHTML = nombre +" " + precio
        let btncompra = document.createElement("button")
        btncompra.className = "btn-comprar"
        let btneliminar = document.createElement("button")
        btncompra.className = "btn-eliminar"
        btneliminar.addEventListener("click", addEventListener )
    }




