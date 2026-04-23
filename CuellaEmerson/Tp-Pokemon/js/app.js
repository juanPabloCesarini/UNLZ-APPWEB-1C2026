
const formulario = document.getElementById("formulario");

formulario.addEventListener("submit", async function (event) {
  event.preventDefault();

  const input = document.getElementById("pokemonInput");//guarda el elemto completo pokemon inpuit
  const valor = input.value; //de imput guarda solo lo que esta escrito adentro

  const resultado = document.getElementById("resultado"); //resultado es el nombre de un espacio en el index 


  //este try trata de buscar la info, conecta con la api
  try {
    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${valor}`); //busca lo que esta en el cuadro de texto en la api
    //  el await basicamente espera a que la api responda
    //lo guarda en response

    const data = await response.json();// convierte lo traido de la appi a un objeto de javascrip utilizavle sino no sirve

    await delay(2000);//funcion delay
    
    ///esto de abajo miestra los datos en el index o base en el div llamado resultado ccon el .innerHTML importante la comilla invertida
    resultado.innerHTML = `
      <h2>${data.name.toUpperCase()}</h2>
      <img src="${data.sprites.front_default}" alt="${data.name}">
    `;

    setTimeout(() => { //esto sirve para borrar lo que muestra lo de arriba, basicamente lo sobreescribe
      resultado.innerHTML = "";
    }, 5000);


  } catch (error) {
    resultado.innerHTML = `<p>No se encontró el Pokémon</p>`;
  }
});
function delay(ms) {//esta funcion da el delay despues de buscar
  return new Promise(resolve => setTimeout(resolve, ms));
}// muy importante prender el apache o no anda