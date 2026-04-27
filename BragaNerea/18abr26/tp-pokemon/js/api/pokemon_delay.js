export const fetchPokemonConDelay = async (nombre, ms = 2000) => {
    const delay = new Promise((resolve) => setTimeout(resolve, ms));

const [respuesta] = await Promise.all([
    //llamada a la api, la url nos ayuda a encontrar los datos de los pokemones
    fetch(`https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`),
    delay,
])
     
if(!respuesta.ok) throw new Error ("Pokemon no encontrado.")

    return await respuesta.json();

};