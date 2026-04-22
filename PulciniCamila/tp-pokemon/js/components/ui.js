export function mostrar(poke) {
    return `
        <h3>${poke.name}</h3>
        <img src="${poke.sprites.front_default}">
    `;
}

export function mostrarError(texto) {
    return `<p class="error">${texto}</p>`;
}