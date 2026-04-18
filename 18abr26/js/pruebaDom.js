const uno = document.getElementById("uno");

uno.innerText = "este es el div uno";

const dos = document.getElementById("dos");

console.log(dos.innerText.toUpperCase());
dos.innerText = "";
tres = [1, 2, 3];
const cant_car = tres.length;
console.log("cantidad elementos: " + cant_car);
console.log("primer elemento:  " + tres[0]);

const obj = {
  nombre: "juan",
  edad: 25,
  lenguajes: {
    backend: 'php',
    frontend: 'js'
    },
};

const edad = obj.edad;
const nombreMayuscula =obj.nombre.toUpperCase();
if (edad > 10) {
  console.log("ok");
  console.log(nombreMayuscula);
} else {
  console.log("ese menor");
}
console.log(obj);

dos.innerText = nombreMayuscula;

const html = `<div class="nombre">${nombreMayuscula}</div>
                <div class="loader">${obj.edad}</div>
                <hr>
                <h1>El luenguaje backend que usa ${nombreMayuscula} es: ${obj.lenguajes.backend}</h1>`;

const nombre = document.getElementById("nombre");

nombre.innerHTML = html;
