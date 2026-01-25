import axios from 'axios';

const api_key = import.meta.env.VITE_SOME_KEY;

if (!api_key) console.error('⚠️ API Key de OpenWeatherMap no definida');

const getWeather = (city) => {
  const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${api_key}`;
  return axios.get(url).then(res => res.data);
};

export default { getWeather };
