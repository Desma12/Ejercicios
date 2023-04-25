
<?php

// Programa que permita calcular el 30%, el 60% y el 90% de cualquier número.


$num = floatval(readline("Ingrese un número: "));

$porcentaje_30 = $num * 0.3;
$porcentaje_60 = $num * 0.6;
$porcentaje_90 = $num * 0.9;

echo "El 30% de " . $num . " es: " . $porcentaje_30 . "\n";
echo "El 60% de " . $num . " es: " . $porcentaje_60 . "\n";
echo "El 90% de " . $num . " es: " . $porcentaje_90 . "\n";

?>