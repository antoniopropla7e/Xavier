<?php

echo "<h2>1. Array Indexado (Días de la Semana)</h2>";
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

echo "<h3>Array Completo:</h3>";
print_r($dias);

echo "<h3>Día Accedido por Índice (Miércoles):</h3>";
echo $dias[2] . "\n";


echo "<h2>2. Array Asociativo (Información de Usuario)</h2>";
$usuario = [
    'nombre' => 'Juan Perez',
    'email' => 'juan@correo.com',
    'edad' => 30
];

echo "<h3>Email del Usuario:</h3>";
echo $usuario['email'] . "\n";


echo "<h2>3. Recorrer Array Indexado (Lista de Precios)</h2>";
$precios = [150.50, 45.99, 88.00, 230.15];

echo "<h3>Lista de Precios:</h3>";
echo "<ul>\n";
foreach ($precios as $precio) {
    echo "<li>$" . number_format($precio, 2) . "</li>\n";
}
echo "</ul>\n";



echo "<h2>4. Recorrer Array Asociativo (Configuración)</h2>";
$config = [
    'host' => 'localhost',
    'db_user' => 'root',
    'port' => 3306,
    'charset' => 'utf8mb4'
];

echo "<h3>Datos de Configuración:</h3>";
foreach ($config as $clave => $valor) {
    
    echo strtoupper($clave) . ": " . $valor . "<br>\n";
}

echo "<h2>5. Filtrado y Promedio de Notas Aprobadas</h2>";
$notas = [8, 4, 10, 3, 7, 5];
$aprobadas = [];
$suma_aprobadas = 0;

foreach ($notas as $nota) {
    if ($nota >= 5) {
        $aprobadas[] = $nota; 
        $suma_aprobadas += $nota; 
    }
}

$cantidad_aprobadas = count($aprobadas);
$promedio_aprobadas = 0;

if ($cantidad_aprobadas > 0) {
    $promedio_aprobadas = $suma_aprobadas / $cantidad_aprobadas;
}

echo "Notas Originales: " . implode(", ", $notas) . "<br>";
echo "Notas Aprobadas (>= 5): " . implode(", ", $aprobadas) . "<br>";
echo "Promedio de las notas aprobadas: " . number_format($promedio_aprobadas, 2) . "\n";
?>