import { fetchPokemon } from "./services/pokemon.js";
import { renderPokemon, renderError, toggleLoader } from "./components/ui.js";


const delay = (ms) => new Promise(resolve => setTimeout(resolve, ms));

const btn = document.querySelector("#btnBuscar");
const input = document.querySelector("#busqueda");

btn.addEventListener("click", async () => {
  const query = input.value.trim().toLowerCase();


  if (!query) {
    renderError("Escribe un Pokemon");

    setTimeout(() => {
      document.querySelector("#resultado").innerHTML = "";
    }, 5000);

    return;
  }

  toggleLoader(true);

  try {
    
    await delay(2000);

    const data = await fetchPokemon(query);
    renderPokemon(data);

  } catch (error) {
    renderError(error.message);


    setTimeout(() => {
      document.querySelector("#resultado").innerHTML = "";
    }, 5000);

  } finally {
    toggleLoader(false);
  }
});