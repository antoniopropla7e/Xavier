JavaScript

const precioOriginal = 100;
const descuentoPorcentaje = 20;

const montoDescuento = precioOriginal * (descuentoPorcentaje / 100);
const precioFinal = precioOriginal - montoDescuento;

console.log(`El precio original es: $${precioOriginal}`);
console.log(`El monto del descuento es: $${montoDescuento}`);
console.log(`El precio final con descuento es: $${precioFinal}`);


let edad = 15;
const mayoriaDeEdad = 18;

if (edad >= mayoriaDeEdad) {
    console.log(`Con ${edad} años, la persona es mayor de edad.`);
} else {
    console.log(`Con ${edad} años, la persona es menor de edad.`);
}

JavaScript

const numero = 7;

console.log(`--- Tabla de Multiplicar del ${numero} ---`);

for (let i = 1; i <= 10; i++) {
    const resultado = numero * i;
    console.log(`${numero} x ${i} = ${resultado}`);
}

JavaScript

const N = 20;
let contador = 1;
let paresEncontrados = 0;

while (contador <= N) {
    if (contador % 2 === 0) {
        paresEncontrados++;
    }
    contador++;
}

console.log(`Entre 1 y ${N}, hay ${paresEncontrados} números pares.`);

JavaScript

const Numero = 29;
s
if (numero <= 1) {
    console.log(`${numero} no es un número primo.`);
} else {
    let esPrimo = true;

    for (let i = 2; i < numero; i++) {

        if (numero % i === 0) {
            esPrimo = false;
            
            break;
        }
    }

    if (esPrimo) {
        console.log(`${numero} es un número primo.`);
    } else {
        console.log(`${numero} no es un número primo.`);
    }
}