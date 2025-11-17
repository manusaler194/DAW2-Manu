
export class ThemeStore {
  static #instance = null;
  constructor() {
    //implementar
   if (ThemeStore.#instance) {
      return ThemeStore.#instance;
    }
    this.state = {
      theme: 'light',
    };
    this.events = {
      themeChange: [], 
    };
     ThemeStore.#instance = this;
  }

  subscribe(eventName, newSubscirber) {
    //implementar
    if (!this.events[eventName]) {
      this.events[eventName] = [];

    }
    this.events[eventName].push(newSubscirber);
  }

  notify(eventName = 'themeChange', data = this.state) {
    // implementar 
    if (!this.events[eventName]) return;
    this.events[eventName].forEach(sub => sub.update(data));
  }

  toggleTheme() {
    this.state.theme = this.state.theme === 'light' ? 'dark' : 'light';
    this.notify('themeChange', this.state);
  }

}


export class StoreSub {
  // recibe un nodo del DOM
  constructor(nodo) {
    this.nodo = nodo;
  }

  // recibe el estado state, que contiene { theme: 'light' } o {theme: 'dark'}
  update(state) {
    //implementar
    const { theme } = state;
     this.nodo.classList.remove('light', 'dark');
    this.nodo.classList.add(theme);
  }
}
