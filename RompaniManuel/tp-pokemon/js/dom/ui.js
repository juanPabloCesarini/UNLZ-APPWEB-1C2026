const tarjetaPokemon = document.querySelector("#tarjetaPokemon");
const imagenPokemon = document.querySelector("#imagenPokemon");
const nombrePokemon = document.querySelector("#nombrePokemon");
const resultado = document.querySelector("#resultado");
const loader = document.querySelector("#loader");

let temporizadorOcultar = null;

export function mostrarPokemon(data) {
  clearTimeout(temporizadorOcultar);

  resultado.textContent = "";
  imagenPokemon.src = data.sprites.front_default || "";
  imagenPokemon.alt = `Imagen de ${data.name}`;
  nombrePokemon.textContent = data.name;

  tarjetaPokemon.classList.remove("d-none");

  temporizadorOcultar = setTimeout(() => {
    limpiarSalida();
  }, 5000);
}

export function mostrarMensaje(mensaje) {
  clearTimeout(temporizadorOcultar);

  tarjetaPokemon.classList.add("d-none");
  imagenPokemon.src = "";
  imagenPokemon.alt = "Imagen del Pokémon encontrado";
  nombrePokemon.textContent = "";

  resultado.textContent = mensaje;

  temporizadorOcultar = setTimeout(() => {
    limpiarSalida();
  }, 5000);
}

export function renderError(mensaje) {
  clearTimeout(temporizadorOcultar);

  tarjetaPokemon.classList.add("d-none");
  imagenPokemon.src = "";
  imagenPokemon.alt = "Imagen del Pokémon encontrado";
  nombrePokemon.textContent = "";

  resultado.innerHTML = `
    <div class="error">⚠️ ${mensaje}</div>
  `;

  alert(mensaje);

  temporizadorOcultar = setTimeout(() => {
    limpiarSalida();
  }, 5000);
}

export function toggleLoader(estado) {
  if (!loader) return;

  if (estado) {
    loader.classList.remove("d-none");
  } else {
    loader.classList.add("d-none");
  }
}

export function limpiarSalida() {
  tarjetaPokemon.classList.add("d-none");
  imagenPokemon.src = "";
  imagenPokemon.alt = "Imagen del Pokémon encontrado";
  nombrePokemon.textContent = "";
  resultado.textContent = "";
}