export const fetchPokemon = async (nombre, ms = 2000) => {
    const delay = new Promise((resolve) => setTimeout(resolve, ms));
    const [respuesta] = await Promise.all([
        fetch(`https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`),
        delay,
    ]);

    if (!respuesta.ok) throw new Error("Pokémon no encontrado ☹");

    return await respuesta.json();
};
