import { fetchPokemon } from "./api/pokemon.js";
import { renderPokemon, renderError, toggleLoader } from "./dom/ui.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");

btnBuscar.addEventListener("click", async () => {
  const queryy = inputBusqueda.value.trim();
  if (!queryy || queryy.value == "")  {
    alert("El cuadro de busqueda no puede estar vacio.")
    return;
  };

  toggleLoader(true); // Aquí el loader se quedará al menos 2 segundos


  setTimeout(async() => {
    try {
      // Usamos la versión con delay artificial
      const data = await fetchPokemon(queryy);
      renderPokemon(data);
    } catch (error) {
      renderError(error.message);
    } finally {
      toggleLoader(false);
    }
  }, 2000)
});
