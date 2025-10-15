// Variable de entrada: la edad de la persona
const edad = 20; // Puedes cambiar este valor para probar diferentes escenarios (e.g., 17, 25, 30)

// 1. ¿Puedes votar? (Usando el Operador de Comparación: >=)
// En la mayoría de los países, la edad mínima para votar es 18 años.
const puedeVotar = edad >= 18;

// 2. ¿Eres un "joven votante"? (Usando Operadores Lógicos y de Comparación: &&, >=, <)
// Definimos "joven votante" como alguien que tiene 18 años o más Y menos de 26 años.
const esJovenVotante = (edad >= 18) && (edad < 26);

// Muestra los resultados en la consola (serán booleanos: true o false)
console.log(`Con ${edad} años:`);
console.log(`¿Puedes votar (>= 18)? ${puedeVotar}`);
console.log(`¿Eres un "joven votante" (18 <= edad < 26)? ${esJovenVotante}`);