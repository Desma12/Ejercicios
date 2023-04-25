<?php

// Solicitar tres números al usuario e imprimirlos en orden ascendente y descendente. 


$num1 = readline("Ingrese el primer número: ");
$num2 = readline("Ingrese el segundo número: ");
$num3 = readline("Ingrese el tercer número: ");


$ascendente = [$num1, $num2, $num3];
sort($ascendente);
$descendente = [$num3, $num2, $num1];
rsort($descendente);


echo "Los números en orden ascendente son: " . implode(", ", $ascendente) . "\n";
echo "Los números en orden descendente son: " . implode(", ", $descendente) . "\n";
?>