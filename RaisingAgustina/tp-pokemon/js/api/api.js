export const getPokemon = async (name) => {
    const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${name}`);

    if (!res.ok) {
        throw new Error("No se encontró a ese Pokémon");
    }

    return await res.json();
};