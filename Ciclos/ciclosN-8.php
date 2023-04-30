<?php

//                           Ejercicio N-8



// Escriba un programa para hacer un patrón como una pirámide con números aumentados en 1.

$numero = 1;
$niveles = 4;
for ($i = 1; $i <= $niveles; $i++) {
    for ($j = 1; $j <= ($niveles - $i); $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $numero . " ";
        $numero++;
    }
    echo "\n";
}

?>