import React from 'react';

const FormularioPersona = ({ nuevaPersona, manejarCambio, manejarCambioNumero, agregarPersona }) => {
  return (
    <form onSubmit={agregarPersona}>
      <div>
        nombre: <input value={nuevaPersona.nombre} onChange={manejarCambio} />
      </div>
      <div>
        número: <input value={nuevaPersona.numero} onChange={manejarCambioNumero} />
      </div>
      <div>
        <button type="submit">Añadir</button>
      </div>
    </form>
  );
};

export default FormularioPersona;
