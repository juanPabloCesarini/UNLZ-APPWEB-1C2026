import { fetchPokemon } from "./api/fetchpokemon.js";
import { renderPokemon, renderError, toggleLoader, clearResult } from "./dom/ui.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");

let timeoutId;

btnBuscar.addEventListener("click", async () => {
    const query = inputBusqueda.value.trim();

    if (timeoutId) clearTimeout(timeoutId);

    if (!query) {
        renderError("Por favor, ingrese el nombre de un Pokémon");

        timeoutId = setTimeout(() => {
            clearResult();
            inputBusqueda.value = "";
        }, 5000);

        return;
    }

    toggleLoader(true);
    clearResult();

    try {
        const data = await fetchPokemon(query);
        renderPokemon(data);

        timeoutId = setTimeout(() => {
            clearResult();
            inputBusqueda.value = "";
        }, 5000);

    } catch (error) {
        renderError(error.message);

        timeoutId = setTimeout(() => {
            clearResult();
            inputBusqueda.value = "";
        }, 5000);

    } finally {
        toggleLoader(false);
    }
});