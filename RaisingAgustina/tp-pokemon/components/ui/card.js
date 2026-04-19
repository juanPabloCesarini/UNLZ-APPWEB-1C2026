export const drawCard = (pokemon) => {
    return `
    <div class="card">
        <h2>${pokemon.name.charAt(0).toUpperCase() + pokemon.name.slice(1)}</h2>

        <div class="img-container">
            <img class="pokemon-img" src="${pokemon.sprites.front_default}">
        </div>

        <p><b>ID:</b> ${pokemon.id}</p>
        <p><b>Altura:</b> ${pokemon.height}</p>
        <p><b>Peso:</b> ${pokemon.weight}</p>
    </div>
    `;
};