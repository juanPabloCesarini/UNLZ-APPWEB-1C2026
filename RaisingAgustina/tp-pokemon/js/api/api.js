export const getPokemon = async (name) => {
    const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${name.toLowerCase()}`);
//se conecta con la API de pokemon y busca por el name
    
    if (!res.ok) { 
        //si falla lanza error
        throw new Error("Pokemon no encontrado.");
    }

    const data = await res.json();
    return data;
};