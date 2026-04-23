import { buscarPokemon } from "./api/pokemon.js";
import { mostrarPokemon, mostrarError, toggleLoader } from "./dom/ui.js";

console.log("main cargado");

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");

btnBuscar.addEventListener("click", async () => {
  const query = inputBusqueda.value.trim();
  console.log("1");

  if (!query) {
    console.log("vacío");
    mostrarError("Ingresá el nombre de un Pokémon.");
    return;
  }

  toggleLoader(true);
  console.log("2");

  try {
    const data = await buscarPokemon(query);
    console.log("3", data);
    mostrarPokemon(data);
    console.log("4");
  } catch (error) {
    console.log("5", error.message);
    mostrarError(error.message);
  } finally {
    console.log("6");
    toggleLoader(false);
  }
});