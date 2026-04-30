// Este módulo solo se encarga de ir a buscar datos a la red
export const fetchPokemon = async (nombre) => {
  const response = await fetch(
    `https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`,
  );

  // Si la respuesta no es 200-299, arrojamos un error que capturará el try/catch
  if (!response.ok) {
    throw new Error("Pokémon no encontrado");
  }

  return await response.json();
};
