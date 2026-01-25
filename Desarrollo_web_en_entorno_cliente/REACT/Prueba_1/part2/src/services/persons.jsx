import axios from 'axios';
const baseUrl = 'http://192.168.0.14:3001/persons';

const getAll = () => axios.get(baseUrl).then(res => res.data);
const create = (newPerson) => axios.post(baseUrl, newPerson).then(res => res.data);
const update = (id, updatedPerson) => axios.put(`${baseUrl}/${id}`, updatedPerson).then(res => res.data);
const remove = (id) => axios.delete(`${baseUrl}/${id}`);

export default { getAll, create, update, remove };
