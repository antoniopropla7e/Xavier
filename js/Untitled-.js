const colorSemaforo = "amarillo";

if (colorSemaforo === "verde") {
   
    console.log("🚦 ¡VERDE! Es seguro CRUZAR la calle. Adelante.");
} else if (colorSemaforo === "amarillo") {
    
    console.log("🚦 ¡AMARILLO! Precaución, la luz va a cambiar. Disminuya la velocidad o prepárese para detenerse.");
} else if (colorSemaforo === "rojo") {
    
    console.log("🚦 ¡ROJO! Deténgase y ESPERE. Está prohibido cruzar.");
} else {
    
    console.error(`❌ Error: El color "${colorSemaforo}" no es un color válido del semáforo.`);
}