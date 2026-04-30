export async function traerPokemon(nombre) {
    const res = await fetch("https://pokeapi.co/api/v2/pokemon/" + nombre);

    if (!res.ok) {
        throw "pokemon inexistente";
    }

    return await res.json();
}