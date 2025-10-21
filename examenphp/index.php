1️⃣ Contador de Pares e Impares
Este script itera sobre el rango del 1 al 50 y usa el operador módulo (%) para determinar si un número es par o impar.

PHP

<?php
// Inicializamos los contadores
$pares = 0;
$impares = 0;

// Recorremos el rango del 1 al 50
for ($i = 1; $i <= 50; $i++) {
    // Si el residuo de la división por 2 es 0, es PAR
    if ($i % 2 == 0) {
        $pares++;
    } else {
        // De lo contrario, es IMPAR
        $impares++;
    }
}

// Mostramos los resultados
echo "--- Contador de Pares e Impares (1-50) ---\n";
echo "Cantidad de números pares: " . $pares . "\n";
echo "Cantidad de números impares: " . $impares . "\n";
echo "------------------------------------------\n";
?>
2️⃣ Tabla de Multiplicar del 8
Usamos un bucle for para multiplicar el número 8 por los valores del 1 al 10.

PHP

<?php
// Definimos el número para la tabla
$numero = 8;

echo "--- Tabla de Multiplicar del " . $numero . " ---\n";

// Recorremos desde 1 hasta 10
for ($i = 1; $i <= 10; $i++) {
    // Calculamos el resultado
    $resultado = $numero * $i;
    // Imprimimos la operación y el resultado
    echo $numero . " x " . $i . " = " . $resultado . "\n";
}

echo "--------------------------------------\n";
?>
3️⃣ Juego: Adivina el Número
Este script define un número secreto y luego usa un bucle while para incrementar un contador hasta que el valor del contador coincida con el secreto.

PHP

<?php
// Definimos el número secreto
$numero_secreto = 27; 

// Inicializamos el contador de intentos
$intento = 1;

echo "--- Juego: Adivina el Número ---\n";
echo "Buscando el número secreto: " . $numero_secreto . "\n";

// Bucle 'while' que se ejecuta mientras el intento NO sea igual al número secreto
while ($intento != $numero_secreto) {
    // Mostramos el intento actual
    echo "Intento N°: " . $intento . "\n";
    
    // Incrementamos el contador para el siguiente intento
    $intento++;
}

// Una vez que sale del bucle, el número ha sido adivinado
echo "¡Adivinado! El número secreto " . $numero_secreto . " fue encontrado en el intento N°: " . $intento . "\n";
echo "--------------------------------------\n";
?>
4️⃣ Suma de Impares del 1 al 100
Usamos un bucle for y una variable acumuladora para sumar solo los números que son impares dentro del rango.

PHP

<?php
// Inicializamos la variable para almacenar la suma
$suma_impares = 0;

// Recorremos el rango del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    // Verificamos si el número es impar (residuo de la división por 2 es diferente de 0)
    if ($i % 2 != 0) {
        // Sumamos el número impar a la variable acumuladora
        $suma_impares += $i;
    }
}

// Mostramos el resultado
echo "--- Suma de Impares del 1 al 100 ---\n";
echo "La suma total de los números impares es: " . $suma_impares . "\n";
echo "--------------------------------------\n";
?>
5️⃣ Verificación para Licencia de Conducir
El script utiliza una variable para la edad y una estructura condicional if-else para verificar si cumple con los criterios de mayor o igual a 18 Y menor o igual a 65.

PHP

<?php
// Definimos la edad a verificar (puedes cambiar este valor para probar)
$edad = 25; 

echo "--- Verificación para Licencia de Conducir ---\n";
echo "Edad a verificar: " . $edad . " años\n";

// Verificamos si la edad está en el rango [18, 65]
if ($edad >= 18 && $edad <= 65) {
    echo "✅ ¡Felicidades! Usted CUMPLE con los requisitos de edad para obtener una licencia de conducir.\n";
} else {
    echo "❌ Lo siento, usted NO CUMPLE con los requisitos de edad (debe tener entre 18 y 65 años).\n";
}

echo "--------------------------------------------------\n";
?>
6️⃣ Dibujo de un Cuadrado con
Se usan bucles anidados (for dentro de otro for): el bucle exterior maneja las filas y el interior, las columnas.

PHP

<?php
// Definimos el tamaño del lado del cuadrado
$lado = 5;

echo "--- Dibujo de un Cuadrado de " . $lado . "x" . $lado . " con # ---\n";

// Bucle exterior para las filas (controla las 5 líneas verticales)
for ($fila = 1; $fila <= $lado; $fila++) {
    
    // Bucle interior para las columnas (controla los 5 caracteres horizontales)
    for ($columna = 1; $columna <= $lado; $columna++) {
        // Imprimimos el carácter sin un salto de línea
        echo "#";
    }
    
    // Al finalizar cada fila, agregamos un salto de línea
    echo "\n"; 
}

echo "------------------------------------------------\n";
?>
7️⃣ Clasificación de un Número
Este script utiliza una estructura if-elseif-else para clasificar un número como positivo, negativo, o cero.

PHP

<?php
// Definimos el número a clasificar (puedes cambiar este valor)
$numero_a_clasificar = -10; 

echo "--- Clasificación de un Número ---\n";
echo "Número: " . $numero_a_clasificar . "\n";

// Verificamos si es positivo
if ($numero_a_clasificar > 0) {
    echo "El número es POSITIVO.\n";
} 
// Verificamos si es negativo
elseif ($numero_a_clasificar < 0) {
    echo "El número es NEGATIVO.\n";
} 
// Si no es ni positivo ni negativo, debe ser cero
else {
    echo "El número es CERO.\n";
}

echo "----------------------------------\n";
?>
8️⃣ Impresión Condicional: Mar y Tierra
Este problema usa un bucle for y una estructura if-elseif-else anidada que aplica el criterio de los múltiplos de 3, 5, y 15 (ambos) en orden descendente de especificidad para asegurar que la condición "MarTierra" se evalúe primero.

PHP

<?php
echo "--- Impresión Condicional: Mar y Tierra (1-30) ---\n";

for ($i = 1; $i <= 30; $i++) {
    
    // Verificamos primero el múltiplo de ambos (3 * 5 = 15)
    if ($i % 15 == 0) {
        echo "MarTierra\n";
    } 
    // Luego verificamos el múltiplo de 3
    elseif ($i % 3 == 0) {
        echo "Mar\n";
    } 
    // Luego verificamos el múltiplo de 5
    elseif ($i % 5 == 0) {
        echo "Tierra\n";
    } 
    // Si no cumple ninguna condición, imprimimos el número
    else {
        echo $i . "\n";
    }
}

echo "--------------------------------------------------\n";
?>
9️⃣ Clasificación de Temperatura
Se utiliza una estructura if-elseif-else para clasificar la temperatura según los rangos establecidos: menor de 10, entre 10 y 25 (ambos inclusive), y mayor de 25.

PHP

<?php
// Definimos la temperatura en grados Celsius (puedes cambiar este valor)
$temperatura = 28; 

echo "--- Clasificación de Temperatura ---\n";
echo "Temperatura: " . $temperatura . "°C\n";

// 1. Condición Fría: menor de 10°C
if ($temperatura < 10) {
    echo "❄️ Fría\n";
} 
// 2. Condición Templada: entre 10°C y 25°C (incluidos)
elseif ($temperatura >= 10 && $temperatura <= 25) {
    echo "🌤️ Templada\n";
} 
// 3. Condición Calurosa: mayor de 25°C (el único caso restante)
else {
    echo "🔥 Calurosa\n";
}

echo "----------------------------------\n";
?>
🔟 Cuenta Regresiva de Año Nuevo
Se implementa un bucle for de forma decremental (usando $i--) para contar desde 10 hasta 1, y un mensaje final.

PHP

<?php
echo "--- Cuenta Regresiva de Año Nuevo ---\n";

// Bucle for que comienza en 10 y decrementa hasta 1
for ($i = 10; $i >= 1; $i--) {
    echo $i . "...\n";
    // Nota: En un entorno real, se podría usar sleep() aquí para una pausa
}

// Mensaje final al terminar la cuenta
echo "¡Feliz Año Nuevo! 🎉\n";
echo "--------------------------------------\n";
?>