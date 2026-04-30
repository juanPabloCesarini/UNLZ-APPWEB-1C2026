// obtengo el "visor" de la calculadora
const pantalla = document.querySelector("#pantalla");

// obtengo todos los botones de la calculadora
const botones = document.querySelectorAll(".btn-calculadora");

// en este array se almacenan los caracteres que vaya ingresando el usuario
let caracteres = [];

// como la calculadora solo permite una operacion valido con este contador la cantidad de operadores
let cantidadOperadores = 0;

// le asigno a cada boton su funcion
botones.forEach((boton) => {
  boton.addEventListener("click", () => {
    const valor = boton.value;

    if (valor === "AC") {
      borrarTodo();
      return;
    }

    if (valor === "BORRAR") {
      borrarUltimo();
      return;
    }

    // como el resultado se trabaja con PHP simplemente retorno
    if (valor === "=") {
      return;
    }

    agregarCaracter(valor);
  });
});

function borrarTodo() {
  caracteres = [];
  cantidadOperadores = 0;
  pantalla.value = "0";
}

function borrarUltimo() {
  let ultimo = caracteres.pop();

  if (ultimo === "+" || ultimo === "-" || ultimo === "x" || ultimo === "÷") {
    cantidadOperadores--;
  }

  if (caracteres.length === 0) {
    pantalla.value = "0";
  } else {
    pantalla.value = caracteres.join("");
  }
}

// al agregar un caracter se valida que si es operador y ya esxiste uno o aun no hay numeros que no se agregue dicho caracter
function agregarCaracter(caracter) {
  if (esOperador(caracter)) {
    if(cantidadOperadores > 0 || caracteres.length == 0){
      return;
    }
    else {
      cantidadOperadores++;
    }
  }
  caracteres.push(caracter);
  pantalla.value = caracteres.join("");
}

function esOperador(caracter){
  return (caracter === "+" || caracter === "-" || caracter === "x" || caracter === "÷");
}