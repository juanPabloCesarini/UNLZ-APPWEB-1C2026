// Este módulo solo se encarga de manipular lo que el usuario ve
export const renderPokemon = (data) => {
  const contenedor = document.querySelector("#resultado");

  contenedor.innerHTML = `
        <img src="${data.sprites.front_default}" alt="${data.name}">
        <h3>${data.name.toUpperCase()}</h3>
    `;
};

export const renderError = (mensaje) => {
  const contenedor = document.querySelector("#resultado");
  contenedor.innerHTML = `       <div class="error">⚠️ ${mensaje}</div>`;
};

export const toggleLoader = (visible) => {
  const loader = document.querySelector("#loader");
  if (visible) {
    loader.classList.remove("hidden");
  } else {
    loader.classList.add("hidden");
  }
};

export const limpiarResultado = () => {
  const contenedor = document.querySelector("#resultado");
  contenedor.innerHTML = "";
};