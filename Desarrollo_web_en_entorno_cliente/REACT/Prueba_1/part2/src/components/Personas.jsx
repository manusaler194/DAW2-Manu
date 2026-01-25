import React from 'react';

const Personas = ({ personas }) => {
  return (
    <div>
      {personas.map((persona) => (
        <p key={persona.id}>
          {persona.name} {persona.number}
        </p>
      ))}
    </div>
  );
};

export default Personas;
