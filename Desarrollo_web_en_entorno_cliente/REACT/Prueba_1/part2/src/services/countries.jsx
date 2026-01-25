import axios from 'axios';

// URL correcta con solo los campos necesarios
const baseUrl = 'https://restcountries.com/v3.1/all?fields=name,capital,area,flags,languages';

const getAll = () => axios.get(baseUrl).then(res => res.data);

export default { getAll };
