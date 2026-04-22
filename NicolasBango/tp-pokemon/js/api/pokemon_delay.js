// js/api/pokemon_latencia.js

export const fetchPokemonConDelay = async (nombre, ms = 2000) => {
  // 1. Creamos una promesa que solo sirve para esperar
  const delay = new Promise((resolve) => setTimeout(resolve, ms));

  // 2. Esperamos a que el delay termine Y a que el fetch termine
  // Usamos Promise.all para que ambos corran en paralelo,
  // pero que el código no avance hasta que el más lento termine.
  const [respuesta] = await Promise.all([
    fetch(`https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`),
    delay,
  ]);

  if (!respuesta.ok) throw new Error("Pokémon no encontrado, reintente");

  return await respuesta.json();
};
