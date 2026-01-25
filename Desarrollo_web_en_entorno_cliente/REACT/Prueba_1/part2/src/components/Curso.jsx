import React from 'react';

// Componente para el encabezado del curso
const Encabezado = ({ nombre }) => {
  return <h2>{nombre}</h2>;
};

// Componente para mostrar una parte del curso
const Parte = ({ nombre, ejercicios }) => {
  return (
    <p>
      {nombre} {ejercicios}
    </p>
  );
};

// Componente para el contenido del curso (todas las partes)
const Contenido = ({ partes }) => {
  return (
    <div>
      {partes.map((parte) => (
        <Parte key={parte.id} nombre={parte.name} ejercicios={parte.exercises} />
      ))}
    </div>
  );
};

// Componente principal para un curso
const Curso = ({ course }) => {
  // Suma de ejercicios usando reduce (ejercicio 2.3)
  const totalEjercicios = course.parts.reduce((suma, parte) => suma + parte.exercises, 0);

  return (
    <div>
      <Encabezado nombre={course.name} />
      <Contenido partes={course.parts} />
      <strong>Total de ejercicios: {totalEjercicios}</strong>
    </div>
  );
};

export default Curso;
