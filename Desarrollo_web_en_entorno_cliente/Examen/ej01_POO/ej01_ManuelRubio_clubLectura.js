"use strict";


//MODIFICA EL CÓDIGO --------------------
class Libro {
  
  constructor(titulo,autor,genero,paginas){
    
    this.titulo = titulo;
    this.autor = autor;
    this.genero = genero;
    this.paginas = paginas;
    
  }
  info (){
    return "El titulo es "+this.titulo + " el autor es "+ this.autor+ " el genero es "+ this.genero+ " las paginas son "+ this.paginas;
  }


  
}

class ClubLectura {
  
    constructor(biblioteca){
      biblioteca = [];
      this.biblioteca = biblioteca;
      
    }
    agregarLibro(libro){
      this.biblioteca.push(libro);
      console.log(libro)
    }
    eliminarLibro(titulo){

      for (let i = 0; i < this.biblioteca.length; i++) {
        if (this.biblioteca[i][0] == titulo){
          this.biblioteca.splice(i,1)
        }
        
      }
    }
    filtrarPorGenero(g){
      return this.biblioteca.filter(l => l ==g)
    }
    listar(){
      for (let i = 0; i < this.biblioteca.length; i++) {
        
        console.log(this.biblioteca[i].info())
      }
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

