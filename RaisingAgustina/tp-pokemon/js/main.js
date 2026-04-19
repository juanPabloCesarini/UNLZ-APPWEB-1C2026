import { getPokemon } from "./api/api.js";
import { drawCard } from "../components/ui/card.js";
import { errorMessage } from "../components/ui/errorMessage.js";
import { loader } from "../components/ui/loader.js";

const app = document.querySelector("#app");
const button = document.querySelector("#buttonQuery");
const input = document.querySelector("#inputQuery");

button.addEventListener("click", async () => {
    const name = input.value.toLowerCase().trim();

    if (!name) {
        app.innerHTML = errorMessage("Escribí un Pokémon");
        return;
    }

    app.innerHTML = loader();

    setTimeout(async () => {
        try {
            const pokemon = await getPokemon(name);
            app.innerHTML = drawCard(pokemon);

            setTimeout(() => {
                app.innerHTML = "";
            }, 5000);

        } catch (e) {
            app.innerHTML = errorMessage("No encontrado");
        }
    }, 2000);
});