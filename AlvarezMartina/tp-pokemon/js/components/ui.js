export function mostrarPokemon(container, pokemon) {
    container.innerHTML = `
        <h3 class="pokemon-name">${pokemon.name}</h3>
        <img class="pokemon-img" src="${pokemon.sprites.other["official-artwork"].front_default}" alt="${pokemon.name}">
    `;
}

export function mostrarError(container, mensaje) {
    container.innerHTML = `<p class="respuestaApiError">${mensaje}</p>`;
}

export function mostrarCarga(loader) {
    loader.classList.remove("hidden");
}

export function ocultarCarga(loader) {
    loader.classList.add("hidden");
}

export function limpiarResultado(container) {
    container.innerHTML = "";
}

export function limpiarInput(input) {
    input.value = "";
}