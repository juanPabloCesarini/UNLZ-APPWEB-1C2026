import { fetchPokemonConDelay } from "./api/pokemon_delay.js";
import { renderPokemon, renderError, toggleLoader } from "./dom/ui.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");

btnBuscar.addEventListener("click", async () => {
  const query = inputBusqueda.value.trim();
  if (!query) return;

  toggleLoader(true); // Aquí el loader se quedará al menos 2 segundos

  try {
    // Usamos la versión con delay artificial
    const data = await fetchPokemonConDelay(query, 2000);
    renderPokemon(data);
  } catch (error) {
    renderError(error.message);
  } finally {
    toggleLoader(false);
  }
});
