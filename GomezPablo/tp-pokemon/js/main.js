import { getPokemon } from "./api/api.js";
import { drawCard } from "../components/ui/card.js";
import { errorMessage } from "../components/ui/errorMessage.js";
import { loader } from "../components/ui/loader.js";

const app = document.querySelector('#app');
const button = document.querySelector('#buttonQuery');
const inputQuery = document.querySelector('#inputQuery');


button.addEventListener('click', async () => {
    try {
        let pokemonName = inputQuery.value.toLowerCase().trim();

        if (pokemonName === '' || pokemonName === null) {
            alert('El nombre del pokemon no puede estar vacío.')
            return
        }

        showLoader()


        setTimeout(async () => {
            try {
                const pokemon = await getPokemon(pokemonName);
                drawCardHTML(pokemon);
            } catch (error) {
                console.error(error);
                drawErrorMessage(error);
            }
        }, 2000);

    } catch (error) {
       drawErrorMessage(error);
    }

})

/* probando commit */

function drawErrorMessage(error) {
     app.innerHTML = errorMessage(error);
}

function drawCardHTML(pokemon) {
    app.innerHTML = drawCard(pokemon);
    setTimeout(() => {
        app.innerHTML = '';
    }, 5000);
}

function showLoader() {
    app.innerHTML = loader();
}