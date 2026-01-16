"use strict";


//MODIFICA EL CÓDIGO --------------------
class Libro {

  constructor({titulo,autor,genero,paginas}) {

    this.titulo = titulo;
    this.autor = autor;
    this.genero = genero;
    this.paginas = paginas;

  }
  info () {
    return `${this.titulo}  ${this.autor} ${this.genero} ${this.paginas}`
  }
}

class ClubLectura {
#biblioteca;
  constructor() {
    this.#biblioteca= [];
  }
    
  agregarLibro(libro) {
    this.#biblioteca.push(libro);
   
    
  }
  eliminarLibro(titulo) {
    this.#biblioteca.splice(this.#biblioteca.findIndex(libro => libro.titulo === titulo),1);
    
  }
  filtrarPorGenero(g) {
    return this.#biblioteca.filter(libro => libro.genero===g);
  }
  listar() {
    return this.#biblioteca.map(libro =>libro.info())
  }
}

// FIN MODIFICA EL CÓDIGO ---------------------

//Array de libros
const librosIniciales = [
  { titulo: "El Bug que Nunca Existió", autor: "Lucía Byte", genero: "novela", paginas: 312 },
  { titulo: "Pensar en Recursivo sin Llorar", autor: "Dr. Álvaro Stackframe", genero: "ensayo", paginas: 228 },
  { titulo: "JavaScript: Una Historia de Terror", autor: "Marta Callback", genero: "ciencia", paginas: 410 },
  { titulo: "Compila en Mi Máquina, Juro por Dios", autor: "Sergio DevOps", genero: "ensayo", paginas: 355 },
  { titulo: "Romance en Tiempos de Segmentation Fault", autor: "Elena Pointer", genero: "novela", paginas: 289 }
];

console.log("=== INICIANDO PROGRAMA DEL CLUB DE LECTURA ===");

const club = new ClubLectura();

librosIniciales.forEach(libroJSON => {
club.agregarLibro(new Libro(libroJSON));
});

// Salidas por consola
console.log("\n--- LISTA COMPLETA ---");
console.log(club.listar());

club.eliminarLibro("El Bug que Nunca Existió");
console.log(club.listar());

console.log("\n--- FILTRADO POR GÉNERO: 'ensayo' ---");
console.log(club.filtrarPorGenero("ensayo"));

console.log("\n=== FIN DEL PROGRAMA ===");

