import { ThemeStore , StoreSub } from './Store.js';

// Aquí inicializamos directamente el singleton
const store = new ThemeStore();
const body = document.body;
const header = document.getElementById('mainHeader');
const toggleBtn = document.getElementById('toggleThemeBtn');
const container = document.querySelector('.container');
const boxes = document.querySelectorAll('.box');
// Creamos los subscribers para cada elemento
const bodySub = new StoreSub(body);
const headerSub = new StoreSub(header);
const buttonSub = new StoreSub(toggleBtn);
const containerSub = new StoreSub(container);
const boxesSubs = Array.from(boxes).map(box => new StoreSub(box));
// Suscribimos al store
store.subscribe('themeChange', bodySub);
store.subscribe('themeChange', headerSub);
store.subscribe('themeChange', buttonSub);
store.subscribe('themeChange', containerSub);
boxesSubs.forEach(sub => store.subscribe('themeChange', sub));
// Evento del botón
toggleBtn.addEventListener('click', () => store.toggleTheme());
// Inicializamos la vista la primera vez con el tema por defecto
store.notify('themeChange');
