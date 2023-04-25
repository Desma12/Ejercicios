
<?php

/* Programa que permita ingresar 5 números y calcular el promedio.*/

$num1 = floatval(readline("Ingrese el primer número: "));
$num2 = floatval(readline("Ingrese el segundo número: "));
$num3 = floatval(readline("Ingrese el tercer número: "));
$num4 = floatval(readline("Ingrese el cuarto número: "));
$num5 = floatval(readline("Ingrese el quinto número: "));

$promedio = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;

echo "El promedio de los números ingresados es: " . number_format($promedio, 2);
?>