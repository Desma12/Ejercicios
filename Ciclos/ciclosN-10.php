<?php

//                           Ejercicio N-10



// Escriba un programa para mostrar un patrón como Z con asteriscos. 

for ($fila = 1; $fila <= 7; $fila++) {
    for ($columna = 1; $columna <= 7; $columna++) {
        if ($fila == 1 || $fila == 7) {
            echo "*";
        } elseif ($fila + $columna == 8) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}

?>