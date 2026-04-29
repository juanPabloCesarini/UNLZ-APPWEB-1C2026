export const buscarPokemon = async (nombre) => {
  const respuesta = await fetch(
    `https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`
  );

  if (!respuesta.ok) {
    throw new Error("Pokémon no encontrado");
  }

  return await respuesta.json();
};