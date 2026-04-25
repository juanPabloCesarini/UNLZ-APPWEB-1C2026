// Búsqueda de pokemones

export const getPKM = async (nombre) => {
  const resp = await fetch(
    `https://pokeapi.co/api/v2/pokemon/${nombre.toLowerCase()}`,
  );

  // Si la respuesta no es 200-299, arrojamos un error que capturará el try/catch
  if (!resp.ok) {
    throw new Error(`El pokemón ${nombre} no se ha encontrado. Intente devuelta.`);
  }

  return await resp.json();
};
