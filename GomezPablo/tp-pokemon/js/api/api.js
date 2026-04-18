export const getPokemon = async (nombre) => {
    const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${nombre}`);
    if(!res.ok){
        throw new Error(`No se encontró el pokemon: ${nombre}`);
    }
    return await res.json();
}