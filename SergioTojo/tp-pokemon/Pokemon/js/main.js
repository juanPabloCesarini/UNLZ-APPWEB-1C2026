import { renderPokemon, renderError, toggleLoader, togglecatcher } from "./dom/ui.js";
import { getPKM } from "./api/pokemon.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");
const btnAtrapar = document.querySelector("#btnAtrapar");

btnBuscar.addEventListener("click", async () => {
  const query = inputBusqueda.value.trim();
  
  if (!query) {
    return;
  }
  toggleLoader(true);
  try {
  
    // Uso de delay
    const data = await getPKM(query);
    renderPokemon(data);
  } catch (error) {
    renderError(error.message);
  } finally {
    toggleLoader(false);
  }
});

btnAtrapar.addEventListener("click", () => {
  const query = inputBusqueda.value.trim();
  const contenedor = document.querySelector("#resultado");

  if (!query) {
    contenedor.innerHTML = `<h2>⚠️ Debes buscar un Pokémon antes de atraparlo⚠️</h2>`;
    return;
  }

  contenedor.innerHTML = `
    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-ball.png" width="100">
    <p>Lanzando Pokébola...</p>`;

  setTimeout(() => {
    const atrapado = Math.random() < 0.5;

    if (atrapado) {
      contenedor.innerHTML = `
        <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-ball.png" width="100">
        <h2>¡Pokémon atrapado! 🎉</h2>`;
    } else {
      contenedor.innerHTML = `<h2>⚠️ ¡Casi lo atrapas! Sigue intentando⚠️</h2>`;
  setTimeout(() => {
    btnBuscar.click();
  }, 3000); 
    }
  }, 5000);
});