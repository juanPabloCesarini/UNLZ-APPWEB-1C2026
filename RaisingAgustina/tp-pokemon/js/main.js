import { getPokemon } from "./api/api.js";
import { renderPokemon, renderError, showLoader, clearApp } from "./dom/ui.js";

//traigo los elementos del html
const input = document.getElementById("inputQuery");
const button = document.getElementById("buttonQuery");


button.addEventListener("click", async () => {

    console.log("Buscando pokemon...");

    const name = input.value.trim();

    //valido
    if (name === "") {
        renderError("La busqueda no debe estar vacia.");
        return;
    }

    //muestro loader y limpio pantalla
    showLoader(true);
    clearApp();

    try {
        //creo delay de 2 segundos
        const delay = new Promise(resolve => setTimeout(resolve, 2000));

     
        const [pokemon] = await Promise.all([
            getPokemon(name),
            delay
        ]);

        //muestro pokemon
        renderPokemon(pokemon);

        //limpio 
        input.value = "";

        //borro resultado a los 5 segundos
        setTimeout(() => {
            clearApp();
        }, 5000);

    } catch (error) {
        //si hay error lo muestro
        renderError(error.message);

        setTimeout(() => {
            clearApp();
        }, 5000);
    }finally{
        //oculto loader
        showLoader(false);}
});