export const renderPokemon = (data) => {
  const contenedor = document.querySelector("#resultado");

  contenedor.innerHTML = `
    <img src="${data.sprites.front_default}" alt="${data.name}">
    <h3>${data.name.toUpperCase()}</h3>
  `;


  setTimeout(() => {
    contenedor.innerHTML = "";
  }, 5000);
};

export const renderError = (mensaje) => {
  const contenedor = document.querySelector("#resultado");

  contenedor.innerHTML = `
    <p style="color:red;"> ${mensaje}</p>
  `;
};

export const toggleLoader = (visible) => {
  const loader = document.querySelector("#loader");
  loader.style.display = visible ? "block" : "none";
};