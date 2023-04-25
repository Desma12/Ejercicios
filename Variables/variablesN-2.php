
<?php

// Solicitar al usuario un número y calcular cuál es el cuadrado del número

$num = intval(readline("Ingrese un número: "));
$square = $num * $num;
echo "El cuadrado de " . $num . " es " . $square;
?>