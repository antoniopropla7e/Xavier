let ladoA = 5;
let ladoB = 5;
let ladoC = 5; 

console.log(`Lados del triángulo: A=${ladoA}, B=${ladoB}, C=${ladoC}`);

if (ladoA === ladoB && ladoB === ladoC) {
   
    console.log("El triángulo es Equilátero.");
    
} 

else if (ladoA === ladoB || ladoA === ladoC || ladoB === ladoC) {
    console.log("El triángulo es Isósceles.");

} 
   
    console.log("El triángulo es Escaleno.");
