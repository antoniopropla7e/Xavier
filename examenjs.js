const nombreProducto = "Tablet 10 pulgadas";
let precio = 450.99;
let stock = 25;
const envioGratis = true;

console.log(`Nombre del producto: ${nombreProducto}`);
console.log(`Precio: ${precio}`);
console.log(`Cantidad en stock: ${stock}`);
console.log(`Envío gratis: ${envioGratis}`);

const precioProducto = 450.99; 
const cantidadComprada = 2;
const impuesto = 0.07;

const subtotal = precioProducto * cantidadComprada;

const totalFinal = subtotal * (1 + impuesto);

console.log(`Subtotal: ${subtotal.toFixed(2)}`);
console.log(`Total Final (con 7% de impuesto): ${totalFinal.toFixed(2)}`);

const edadUsuario = 20;
const edadMinima = 18;

if (edadUsuario >= edadMinima) {
    console.log("Puedes obtener tu licencia de conducir.");
} else {
    console.log("Aún no tienes la edad para obtener la licencia.");
}
const colorSemaforo = "amarillo"; 

if (colorSemaforo === "verde") {
    console.log("Puede avanzar.");
} else if (colorSemaforo === "amarillo") {
    console.log("Reduzca la velocidad, precaución.");
} else if (colorSemaforo === "rojo") {
    console.log("Debe detenerse.");
} else {
    console.log("Color no válido.");
}

const diaSemana = 3;
let platoDelDia = "";

switch (diaSemana) {
    case 1:
        platoDelDia = "Lentejas";
        break;
    case 2:
        platoDelDia = "Pollo al horno";
        break;
    case 3:
        platoDelDia = "Pescado a la plancha";
        break;
    case 4:
        platoDelDia = "Pasta";
        break;
    case 5:
        platoDelDia = "Paella";
        break;
    default:
        platoDelDia = "Día no válido para menú.";
        break;
}

console.log(platoDelDia);

console.log("Números pares del 2 al 20:");
for (let i = 2; i <= 20; i += 2) {
    console.log(i);
}

let contador = 10;

console.log("Iniciando cuenta regresiva...");
while (contador >= 1) {
    console.log(contador);
    contador--;
}

console.log("¡Despegue!");

console.log("Resultado del reto FizzBuzz (1 al 50):");
for (let i = 1; i <= 50; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
        console.log("FizzBuzz");
    } else if (i % 3 === 0) {
        console.log("Fizz");
    } else if (i % 5 === 0) {
        console.log("Buzz");
    } else {
        console.log(i);
    }
}

let sumaTotal = 0;

for (let i = 1; i <= 100; i++) {
    sumaTotal += i;
}

console.log(`La suma de los primeros 100 números es: ${sumaTotal}`);

let edad = 19;
let tieneEntrada = false;

if (edad >= 18 && tieneEntrada) {
    console.log("Acceso concedido");
} else {
    console.log("Acceso denegado"); 
}

edad = 25;
tieneEntrada = true;

if (edad >= 18 && tieneEntrada) {
    console.log("Acceso concedido");
} else {
    console.log("Acceso denegado");
}