import { getPokemon } from "./services/pokemonApi.js";
import { mostrarPokemon, mostrarError, ocultarCarga, mostrarCarga,limpiarResultado,limpiarInput } from "./components/ui.js";

const input = document.getElementById("pokemonInput");
const boton = document.getElementById("btnBuscar");
const resultado = document.getElementById("resultado");
const loader = document.querySelector(".loader-wrapper");


let timeoutLimpiar = null;

function buscarPokemon(nombre) {
    mostrarCarga(loader);
    limpiarResultado(resultado);
    if (timeoutLimpiar) {
        clearTimeout(timeoutLimpiar);
    }

    setTimeout(async () => {
        try {
            const data = await getPokemon(nombre.toLowerCase());

            ocultarCarga(loader);
            mostrarPokemon(resultado, data);
            limpiarInput(input);
            timeoutLimpiar = setTimeout(() => {
                limpiarResultado(resultado);
            }, 5000);

        } catch (error) {
            ocultarCarga(loader);
            mostrarError(resultado, error.message);
            limpiarInput(input);
            timeoutLimpiar = setTimeout(() => {
                limpiarResultado(resultado);
            }, 5000);
        }
    }, 2000);
}

boton.addEventListener("click", () => {
    const nombre = input.value.trim();

    if (nombre === "") {
        mostrarError(resultado, "Ingrese un Pokemon!");
        timeoutLimpiar = setTimeout(() => {
                limpiarResultado(resultado);
            }, 5000);
        return;
    }

    buscarPokemon(nombre);
});