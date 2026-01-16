const persona = {
  nombre: 'Pepe',
  apellido: 'García',
  
  // Función regular
  consulta: function() {
    return `${this.nombre} ${this.apellido}`;
  },
  
  // Función flecha
  consultar: () => {
    // En este contexto, `this` no se refiere al objeto persona
    return `${this.nombre} ${this.apellido}`;
  }
};

console.log(persona.consulta());   // Salida: Pepe García
console.log(persona.consultar());  // Salida: undefined undefined