
// ej01.js

//## MODIFICA DESDE AQUÍ

// =======================
// Clase Articulo
// =======================
class Articulo {
  
  constructor(id,nombre,precio) {
    this.id = id;
    this.nombre = nombre;
    this.precio = precio;
   // setFechaEpochMs();
  }
  calcularPrecioFinal() {
    return this.precio * 21 + this.precio;
  }
/*  setFechaEpochMs(fecha) {
    this.fecha = fecha;
  }*/
}

// =======================
// Clase ArticuloFisico
// =======================
class ArticuloFisico extends Articulo {
  
  constructor(id,nombre,precio,pesoKG) {
    super(id,nombre,precio);
    this.pesoKG = pesoKG;
  }
  calcularPrecioFinal() {
    return ((this.pesoKG*0.5)+this.precio)*21+this.precio;
  }
  
}

// =======================
// Clase Pedido
// =======================
 class Pedido {

constructor(id,nombreCliente) {
    this.id = id;
    this.nombreCliente = nombreCliente;
    this.entregado = false;
    this.articulos = []
  }
  agregarArticulos(nuevosArticulos) {
    nuevosArticulos.forEach(element => {
      
      this.articulos.push(element);
    });
  }
  printArticulos() {
    return this.articulos
  }
  eliminarArticuloPorId(idArticulo){
    let elim = this.articulos.find(a => a.id === idArticulo);
    console.log(elim)
    this.articulos.splice(elim.id,1);
  }
  calcularTotal() {
    return this.articulos.reduce((acumular, n) => acumular + n.precio,0)
  }
  /*ordenarArticulosPrioritarios(){
    this.articulos.sort(a,b => a instanceof ArticuloFisico)
  }  */
}
  
// =======================
// Clase TiendaOnline
// =======================
class TiendaOnline {
  
  constructor(){
    this.pedidos = [];
  }
  addPedido(pedido){
    this.pedidos.push(pedido);
  }
  buscarPedidoPorId(id){
    return this.pedidos.find(p => p.id == id);
  }
  procesarPedido(id) {
    let num =this.pedidos.findIndex(p => p.id ===id);
    this.pedidos[num].entregado = true;
  }
}

//## MODIFICA HASTA AQUÍ



// ########################

// =======================
// Programa principal
// =======================
function main() {
  console.log("=== INICIO PROGRAMA TIENDA ONLINE ===");

  // Crear artículos
  const art1 = new Articulo(1, "Libro", 20);
  const art2 = new Articulo(2, "Curso Online", 50);
  const art3 = new ArticuloFisico(3, "Portátil", 800, 2.5);
  const art4 = new ArticuloFisico(4, "Monitor", 200, 4);

  // Crear pedido
  const pedido1 = new Pedido(1001, "Juan Pérez");
  pedido1.agregarArticulos([art1, art2, art3, art4]);

  const pedido2 = new Pedido(1003, "Pepita López");
  pedido2.agregarArticulos([art3, art4]);

  console.log("Artículos antes de ordenar:");
  pedido1.printArticulos();

  //pedido1.ordenarArticulosPrioritarios();

  console.log("Artículos después de ordenar:");
  pedido1.printArticulos();

  // Eliminar un artículo
  pedido1.eliminarArticuloPorId(2);

  console.log("Artículos tras eliminar uno:");
  pedido1.printArticulos();

  // Crear tienda y añadir pedido
  const tienda = new TiendaOnline();
  tienda.addPedido(pedido1);
  tienda.addPedido(pedido2);

  // Procesar pedido
  const total = tienda.procesarPedido(1001);

  console.log("Pedido procesado. Total: " + total );
  console.log("Pedido entregado: " + pedido1.entregado);

  console.log("=== FIN PROGRAMA TIENDA ONLINE ===");

  //Busca pedido
  const auxId = 1003;
  const pedidoEncontrado = tienda.buscarPedidoPorId(1003);
  console.log("Encontrado pedido 1003: ")
  pedidoEncontrado.printArticulos()
}

// Ejecutar programa principal
main();
