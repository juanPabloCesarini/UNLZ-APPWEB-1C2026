let timeoutId;

const limpiar = (contenedor) => {
  clearTimeout(timeoutId);
  timeoutId = setTimeout(() => {
    contenedor.innerHTML = "";
  }, 5000); // 
};

export const renderPokemon = (data) => {
  const contenedor = document.querySelector("#resultado");

  contenedor.innerHTML = `
    <div class="pokemon-display">
        <img src="${data.sprites.front_default}" alt="${data.name}">
        <h3>${data.name}</h3>
    </div>
  `;

  limpiar(contenedor);
};

export const renderError = (mensaje) => {
  const contenedor = document.querySelector("#resultado");

  contenedor.innerHTML = `
    <div class="error">
        ${mensaje}
    </div>
  `;

  limpiar(contenedor);
};

export const toggleLoader = (visible) => {
  const loader = document.querySelector("#loader");

 if (visible) {
  loader.classList.remove("hidden");
} else {
  loader.classList.add("hidden");
}

};