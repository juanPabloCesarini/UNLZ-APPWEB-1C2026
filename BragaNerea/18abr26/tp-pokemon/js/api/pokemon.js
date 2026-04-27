//Modelo que va a buscar los datos en la red 
export const fetchPokemon = async (nombre) => {
    const response = await fetch(
        `https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`,
  );


  if(!response.ok){
    throw new Error("Pokemon no encontrado.");
  }

  return await response.json();
};