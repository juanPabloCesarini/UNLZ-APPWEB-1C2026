export const renderPokemon = (pokemon) => { //muestra el pokemon en pantalla
    const app = document.getElementById("app");

    app.innerHTML = `
        <div class="card">
            <h2>${pokemon.name.toUpperCase()}</h2>

            <div class="img-container">
                <img class="pokemon-img" 
                src="${pokemon.sprites.front_default}">
            </div>
        </div>
    `;
}; 

//muestra un mensaje si algo falla

export const renderError = (mensaje) => {
    const app = document.getElementById("app");
    app.innerHTML = `<p class="error">${mensaje}</p>`;
};

export const showLoader = (estado) => { 
    //muestra u oculta el loader dependiendo de su estado si es falso o verdadero
    const loader = document.getElementById("loader");

    if (estado) {
        loader.classList.remove("hidden");
    } else {
        loader.classList.add("hidden");
    }
};
export const clearApp = () => { 
    //limpio
    const app = document.getElementById("app");
    app.innerHTML = "";
};