"use strict";


//MODIFICA EL CÓDIGO --------------------
class Libro {

  
}

class ClubLectura {

  
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

