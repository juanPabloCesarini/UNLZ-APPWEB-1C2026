import { traerPokemon } from "./services/api.js";
import { mostrar, mostrarError } from "./components/ui.js";

const boton = document.getElementById("btnBuscar");
const input = document.getElementById("nombre");
const resultado = document.getElementById("resultado");

boton.addEventListener("click", async () => {

    let nombre = input.value;

    if (nombre === "") {
        resultado.innerHTML = mostrarError("este campo se encuentra vacio");
        return;
    }

    resultado.innerHTML = "";

    try {
        await new Promise(r => setTimeout(r, 2000));

        let data = await traerPokemon(nombre.toLowerCase());

        resultado.innerHTML = mostrar(data);

        setTimeout(() => {
            resultado.innerHTML = "";
        }, 5000);

    } catch (error) {
        resultado.innerHTML = mostrarError(error);
    }
});