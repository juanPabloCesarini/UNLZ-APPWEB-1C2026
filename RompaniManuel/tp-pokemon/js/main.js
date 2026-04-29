import { buscarPokemon } from "./api/pokemon.js";
import { mostrarPokemon, toggleLoader, renderError } from "./dom/ui.js";

console.log("main cargado");

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");

const esperar = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

btnBuscar.addEventListener("click", async () => {
  const query = inputBusqueda.value.trim();

  toggleLoader(true);

  try {
    await esperar(2000);

    if (!query) {
      renderError("El campo no puede quedar vacío!");
      return;
    }

    const data = await buscarPokemon(query);

    mostrarPokemon(data);
  } catch (error) {
    renderError(error.message);
  } finally {
    toggleLoader(false);
  }
});