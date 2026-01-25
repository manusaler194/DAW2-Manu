/*import React from 'react';
import Curso from './components/Curso';

const App = () => {
  const cursos = [
    {
      name: 'Half Stack application development',
      id: 1,
      parts: [
        { name: 'Fundamentals of React', exercises: 10, id: 1 },
        { name: 'Using props to pass data', exercises: 7, id: 2 },
        { name: 'State of a component', exercises: 14, id: 3 },
        { name: 'Redux', exercises: 11, id: 4 }
      ]
    },
    {
      name: 'Node.js',
      id: 2,
      parts: [
        { name: 'Routing', exercises: 3, id: 1 },
        { name: 'Middlewares', exercises: 7, id: 2 }
      ]
    }
  ];

  return (
    <div>
      <h1>Información de los cursos</h1>
      {cursos.map((curso) => (
        <Curso key={curso.id} course={curso} />
      ))}
    </div>
  );
};

export default App;*/
/*import React, { useState } from 'react';
import Filtro from './components/Filtro';
import FormularioPersona from './components/FormularioPersona';
import Personas from './components/Personas';

const App = () => {
  const [persons, setPersons] = useState([
    { name: 'Arto Hellas', number: '040-123456', id: 1 },
    { name: 'Ada Lovelace', number: '39-44-5323523', id: 2 },
    { name: 'Dan Abramov', number: '12-43-234345', id: 3 },
    { name: 'Mary Poppendieck', number: '39-23-6423122', id: 4 }
  ]);

  const [nuevaPersona, setNuevaPersona] = useState({ nombre: '', numero: '' });
  const [filtro, setFiltro] = useState('');

  const manejarCambio = (evento) => {
    setNuevaPersona({ ...nuevaPersona, nombre: evento.target.value });
  };

  const manejarCambioNumero = (evento) => {
    setNuevaPersona({ ...nuevaPersona, numero: evento.target.value });
  };

  const manejarFiltro = (evento) => {
    setFiltro(evento.target.value);
  };

  const agregarPersona = (evento) => {
    evento.preventDefault();

    const existe = persons.some(
      (persona) => persona.name.toLowerCase() === nuevaPersona.nombre.toLowerCase()
    );

    if (existe) {
      alert(`${nuevaPersona.nombre} is already added to phonebook`);
      return;
    }

    const nuevaEntrada = {
      name: nuevaPersona.nombre,
      number: nuevaPersona.numero,
      id: persons.length + 1
    };

    setPersons(persons.concat(nuevaEntrada));
    setNuevaPersona({ nombre: '', numero: '' });
  };

  const personasAMostrar = filtro
    ? persons.filter((persona) =>
        persona.name.toLowerCase().includes(filtro.toLowerCase())
      )
    : persons;

  return (
    <div>
      <h2>Phonebook</h2>
      <Filtro valorFiltro={filtro} manejarFiltro={manejarFiltro} />

      <h3>Add a new</h3>
      <FormularioPersona
        nuevaPersona={nuevaPersona}
        manejarCambio={manejarCambio}
        manejarCambioNumero={manejarCambioNumero}
        agregarPersona={agregarPersona}
      />

      <h3>Numbers</h3>
      <Personas personas={personasAMostrar} />
    </div>
  );
};

export default App;*/
/*import React, { useState, useEffect } from 'react';
import axios from 'axios';
import Filtro from './components/Filtro';
import FormularioPersona from './components/FormularioPersona';
import Personas from './components/Personas';

const App = () => {
  const [persons, setPersons] = useState([]);
  const [nuevaPersona, setNuevaPersona] = useState({ nombre: '', numero: '' });
  const [filtro, setFiltro] = useState('');

  //UseEffect para obtener datos desde el servidor (ejercicio 2.11)
  useEffect(() => {
    axios.get('http://192.168.0.14:3001/persons')
      .then(response => {
        setPersons(response.data);
      })
      .catch(error => {
        console.error('Error al obtener los datos:', error);
      });
  }, []); // se ejecuta solo una vez al montar el componente

  const manejarCambio = (evento) => {
    setNuevaPersona({ ...nuevaPersona, nombre: evento.target.value });
  };

  const manejarCambioNumero = (evento) => {
    setNuevaPersona({ ...nuevaPersona, numero: evento.target.value });
  };

  const manejarFiltro = (evento) => {
    setFiltro(evento.target.value);
  };

  const agregarPersona = (evento) => {
    evento.preventDefault();

    const existe = persons.some(
      (persona) => persona.name.toLowerCase() === nuevaPersona.nombre.toLowerCase()
    );

    if (existe) {
      alert(`${nuevaPersona.nombre} is already added to phonebook`);
      return;
    }

    const nuevaEntrada = {
      name: nuevaPersona.nombre,
      number: nuevaPersona.numero,
      id: persons.length + 1
    };

    setPersons(persons.concat(nuevaEntrada));
    setNuevaPersona({ nombre: '', numero: '' });
  };

  const personasAMostrar = filtro
    ? persons.filter((persona) =>
        persona.name.toLowerCase().includes(filtro.toLowerCase())
      )
    : persons;

  return (
    <div>
      <h2>Phonebook</h2>
      <Filtro valorFiltro={filtro} manejarFiltro={manejarFiltro} />

      <h3>Add a nee</h3>
      <FormularioPersona
        nuevaPersona={nuevaPersona}
        manejarCambio={manejarCambio}
        manejarCambioNumero={manejarCambioNumero}
        agregarPersona={agregarPersona}
      />

      <h3>Numbers</h3>
      <Personas personas={personasAMostrar} />
    </div>
  );
};

export default App;*/

/*import React, { useState, useEffect } from 'react';
import { getAll, create } from './services/persons';

const App = () => {
  const [persons, setPersons] = useState([]);
  const [newName, setNewName] = useState('');
  const [newNumber, setNewNumber] = useState('');

  useEffect(() => {
    getAll().then(initialPersons => setPersons(initialPersons));
  }, []);

  const addPerson = (e) => {
    e.preventDefault();
    const personObject = { name: newName, number: newNumber };

    create(personObject).then(returnedPerson => {
      setPersons(persons.concat(returnedPerson));
      setNewName('');
      setNewNumber('');
    });
  };

  return (
    <div>
      <h2>Agenda telefónica</h2>
      <form onSubmit={addPerson}>
        <input value={newName} onChange={e => setNewName(e.target.value)} placeholder="Nombre"/>
        <input value={newNumber} onChange={e => setNewNumber(e.target.value)} placeholder="Número"/>
        <button type="submit">Agregar</button>
      </form>
      <ul>
        {persons.map(p => <li key={p.id}>{p.name}: {p.number}</li>)}
      </ul>
    </div>
  );
};

export default App;*/

/*import React, { useState, useEffect } from 'react';
import personsService from './services/persons';
const Notification = ({ message, type }) => {
  if (!message) return null;

  

  return <div>{message}</div>;
};

const App = () => {
  const [persons, setPersons] = useState([]);
  const [newName, setNewName] = useState('');
  const [newNumber, setNewNumber] = useState('');
  const [successMessage, setSuccessMessage] = useState(null);
  const [errorMessage, setErrorMessage] = useState(null);

  // 2.12: obtener datos del backend
  useEffect(() => {
    personsService.getAll()
      .then(initialPersons => setPersons(initialPersons))
      .catch(err => console.log("Error al obtener personas:", err));
  }, []);

  const showMessage = (message, type) => {
  if (type === 'success') setSuccessMessage(message);
  else setErrorMessage(message);

  setTimeout(() => {
    if (type === 'success') setSuccessMessage(null);
    else setErrorMessage(null);
  }, 5000);
};


  // 2.12 + 2.15: agregar o actualizar contacto
  const addPerson = (e) => {
  e.preventDefault();
  const existingPerson = persons.find(p => p.name === newName);

  if (existingPerson) {
    if (window.confirm(`${newName} ya está en la agenda. ¿Reemplazar número?`)) {
      const updatedPerson = { ...existingPerson, number: newNumber };
      personsService.update(existingPerson.id, updatedPerson)
        .then(returnedPerson => {
          setPersons(persons.map(p => p.id !== existingPerson.id ? p : returnedPerson));
          setNewName('');
          setNewNumber('');
          showMessage(`Número de ${newName} actualizado`, 'success');
        })
        .catch(err => {
          showMessage(
            `Información de ${newName} ya no está en el servidor`,
            'error'
          );
          setPersons(persons.filter(p => p.id !== existingPerson.id));
        });
    }
  } else {
    const personObject = { name: newName, number: newNumber };
    personsService.create(personObject)
      .then(returnedPerson => {
        setPersons(persons.concat(returnedPerson));
        setNewName('');
        setNewNumber('');
        showMessage(`Agregado ${newName}`, 'success');
      })
      .catch(err => {
        showMessage(`Error al agregar ${newName}`, 'error');
      });
  }
};


  // 2.14: eliminar contacto
  const deletePerson = (id, name) => {
  if (window.confirm(`¿Eliminar a ${name}?`)) {
    personsService.remove(id)
      .then(() => {
        setPersons(persons.filter(p => p.id !== id));
        showMessage(`Eliminado ${name}`, 'success');
      })
      .catch(err => {
        showMessage(`Error al eliminar ${name}`, 'error');
      });
  }
};


  return (
    <div>
  <h2>Agenda telefónica</h2>

  <Notification message={successMessage} type="success" />
  <Notification message={errorMessage} type="error" />

  <form onSubmit={addPerson}>
    <input
      value={newName}
      onChange={e => setNewName(e.target.value)}
      placeholder="Nombre"
    />
    <input
      value={newNumber}
      onChange={e => setNewNumber(e.target.value)}
      placeholder="Número"
    />
    <button type="submit">Agregar</button>
  </form>


      <ul>
        {persons.map(p => (
          <li key={p.id}>
            {p.name}: {p.number}{' '}
            <button onClick={() => deletePerson(p.id, p.name)}>Eliminar</button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default App;*/
import React, { useState, useEffect } from 'react';
import countriesService from './services/countries';
import weatherService from './services/clima';

const App = () => {
  const [allCountries, setAllCountries] = useState([]);
  const [filter, setFilter] = useState('');
  const [selectedCountry, setSelectedCountry] = useState(null);
  const [weather, setWeather] = useState(null);

  // Obtener todos los países al cargar la app
  useEffect(() => {
    countriesService.getAll()
      .then(data => setAllCountries(data))
      .catch(err => console.log('Error cargando países:', err));
  }, []);

  // Filtrar países según la búsqueda
  const countriesToShow = filter
    ? allCountries.filter(c => c.name.common.toLowerCase().includes(filter.toLowerCase()))
    : [];

  // Obtener clima cuando se selecciona un país
  useEffect(() => {
    if (selectedCountry && selectedCountry.capital?.[0]) {
      weatherService.getWeather(selectedCountry.capital[0])
        .then(data => setWeather(data))
        .catch(err => console.log('Error obteniendo clima:', err));
    } else {
      setWeather(null);
    }
  }, [selectedCountry]);

  const handleShowCountry = (country) => setSelectedCountry(country);

  return (
    <div style={{ padding: '20px', fontFamily: 'Arial' }}>
      <h2>Buscar país</h2>
      <input
        value={filter}
        onChange={e => { setFilter(e.target.value); setSelectedCountry(null); }}
        placeholder="Escribe el nombre del país"
        style={{ padding: '5px', width: '300px', marginBottom: '20px' }}
      />

      {/* Mensaje si hay demasiados resultados */}
      {countriesToShow.length > 10 && <p>Demasiados países, haz la búsqueda más específica.</p>}

      {/* Lista de países con botón “Mostrar” */}
      {countriesToShow.length > 1 && countriesToShow.length <= 10 && (
        <ul>
          {countriesToShow.map(c => (
            <li key={c.cca3}>
              {c.name.common}{' '}
              <button onClick={() => handleShowCountry(c)}>Mostrar</button>
            </li>
          ))}
        </ul>
      )}

      {/* Si solo hay un país, seleccionarlo automáticamente */}
      {countriesToShow.length === 1 && !selectedCountry &&
        handleShowCountry(countriesToShow[0])
      }

      {/* Vista de un país seleccionado */}
      {selectedCountry && (
        <div style={{ marginTop: '20px' }}>
          <h3>{selectedCountry.name.common}</h3>
          <p><strong>Capital:</strong> {selectedCountry.capital?.[0]}</p>
          <p><strong>Área:</strong> {selectedCountry.area} km²</p>
          <p><strong>Idiomas:</strong> {selectedCountry.languages ? Object.values(selectedCountry.languages).join(', ') : 'N/A'}</p>
          <img src={selectedCountry.flags.png} alt={`Bandera de ${selectedCountry.name.common}`} width="150" style={{ border: '1px solid #ccc' }}/>

          {/* Clima de la capital */}
          {weather && (
            <div style={{ marginTop: '20px' }}>
              <h4>Clima en {selectedCountry.capital[0]}</h4>
              <p>Temperatura: {weather.main.temp} °C</p>
              <p>Viento: {weather.wind.speed} m/s</p>
              {weather.weather[0] && (
                <img
                  src={`http://openweathermap.org/img/wn/${weather.weather[0].icon}@2x.png`}
                  alt={weather.weather[0].description}
                />
              )}
            </div>
          )}
        </div>
      )}
    </div>
  );
};

export default App;
