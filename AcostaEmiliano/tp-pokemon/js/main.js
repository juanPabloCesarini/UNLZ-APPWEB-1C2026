import { fetchPokemonConDelay } from "./api/pokemon_delay.js";
import { renderPokemon, renderError, toggleLoader, clearUi } from "./dom/ui.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");
let timeoutVisibilidad;

btnBuscar.addEventListener("click", async () => {
  const query = inputBusqueda.value.trim();

  clearTimeout(timeoutVisibilidad);

  //No se puede buscar un campo vacío
  if (!query){
    renderError("El campo de búsqueda no puede estar vacío");
    return;
  };

  clearUi();
  toggleLoader(true); // Aquí el loader se quedará al menos 2 segundos

  try {

    // Usamos la versión con delay artificial
    const data = await fetchPokemonConDelay(query, 2000);
    renderPokemon(data);

    //Visualizar resultado por 5 segundos
    timeoutVisibilidad = setTimeout(() => {
        clearUi();
    }, 5000);
  } catch (error) {
    renderError(error.message);
  } finally {
    toggleLoader(false);
  }
});
