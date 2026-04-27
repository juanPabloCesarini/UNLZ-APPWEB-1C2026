import { fetchPokemonConDelay } from "./api/pokemon_delay.js";
import { renderPokemon, renderError, toggleLoader } from "./dom/ui.js";

const btnBuscar = document.querySelector("#btnBuscar");
const inputBusqueda = document.querySelector("#busqueda");


btnBuscar.addEventListener("click", async () => {
     console.log("CLICK FUNCIONA");


    const query = inputBusqueda.value.trim();
    if(!query) {
        renderError("No podes buscar, esta vacio...");
        return;
    }

    toggleLoader(true); //delay de 2 segundos cargando 

    try{
        const data = await fetchPokemonConDelay(query, 2000);
        renderPokemon(data);

        setTimeout(() => {
        const contenedor = document.querySelector("#resultado");
        contenedor.innerHTML = "";
        }, 5000);


    }catch(error){
        renderError(error.message);
    }finally{
        toggleLoader(false);
    }

})