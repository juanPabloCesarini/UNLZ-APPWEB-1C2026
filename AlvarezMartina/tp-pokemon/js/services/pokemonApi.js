export const getPokemon = async (nombre) => {
    const respuestaApi = await fetch(`https://pokeapi.co/api/v2/pokemon/${nombre}`);

    if (!respuestaApi.ok) {
        throw new Error("El nombre ingresado no corresponde a un Pokemon!");
    }

    return await respuestaApi.json();
}