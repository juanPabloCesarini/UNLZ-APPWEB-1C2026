export const fetchPokemon = async (nombre) => {
  const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${nombre}`);

  if (!res.ok) {
    throw new Error("Pokemon no encontrado");
  }

  return await res.json();
};