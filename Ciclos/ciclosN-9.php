<?php

//                           Ejercicio N-9



// Escriba un programa para calcular el factorial de un número dado.

$numero = readline("NUMIIIII: ");
$factorial = 1;
for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}
echo "factorial de $numero es $factorial";

?>