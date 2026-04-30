import { fetchPokemon } from "./services/pokemon.js";
import { renderPokemon, renderError, toggleLoader } from "./components/ui.js";

const delay = (ms) => new Promise(resolve => setTimeout(resolve, ms));

const btn = document.querySelector("#btnBuscar");
const input = document.querySelector("#busqueda");
const resultado = document.querySelector("#resultado");

btn.addEventListener("click", async () => {
    const query = input.value.trim().toLowerCase();

    if (!query) {
        renderError("Por favor, escribi el nombre de un Pokemon");
        return;
    }

    if (!isNaN(query)) {
        renderError("Ingrese un nombre válido");
        return;
    }

    toggleLoader(true);
    resultado.innerHTML = "";

    try {
        const [data] = await Promise.all([
            fetchPokemon(query),
            delay(1000)
        ]);

        renderPokemon(data);

    } catch (error) {
        renderError("No se encontró el Pokemon. Intente nuevamente");

    } finally {
        toggleLoader(false);
    }
});