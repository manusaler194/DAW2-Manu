import React from 'react';

const Filtro = ({ valorFiltro, manejarFiltro }) => {
  return (
    <div>
      filtro: <input value={valorFiltro} onChange={manejarFiltro} />
    </div>
  );
};

export default Filtro;
