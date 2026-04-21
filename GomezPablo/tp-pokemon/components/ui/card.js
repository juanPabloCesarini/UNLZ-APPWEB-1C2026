export const drawCard = (pokemon) => {
    return `
    <div class="card" >
        <h2 class="card-title">${pokemon.name}</h2>
        <img class="card-img" width="128px"
            src="${pokemon.sprites.front_default}" alt="">
        <ul class="card-info">
            <li><b>ID:</b> ${pokemon.id} </li>
            <li><b>Altura:</b> ${pokemon.height} inches</li>
            <li><b>Peso:</b> ${pokemon.weight} lbs</li>
        </ul>
    </div>
    `
} 