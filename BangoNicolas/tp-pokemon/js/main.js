import { fetchPokemonConDelay} from "./api/pokemon_delay.js";
import {renderPokemon,renderError,toggleLoader,limpiarResultado} from "./dom/ui.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");

let tiempoResult;

btnBuscar.addEventListener("click", async () => {
  const query = inputBusqueda.value.trim();

  if (!query) {
    renderError("Debes ingresar un nombre de Pokémon");
    tiempoResult = setTimeout(() => { limpiarResultado();}, 5000);
    return;
  }

  toggleLoader(true); // Aquí el loader se quedará al menos 2 segundos
  limpiarResultado();

  try {
    // Usamos la versión con delay artificial
    const data = await fetchPokemonConDelay(query);
    renderPokemon(data);

    tiempoResult = setTimeout(() => {limpiarResultado();}, 5000);
  } catch (error) {
    renderError(error.message);
    tiempoResult = setTimeout(() => {limpiarResultado();}, 5000);
  } finally {
    toggleLoader(false);
  }
});