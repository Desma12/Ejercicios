
<?php

// Programa para calcular el área de un cuadrado, la longitud de un lado la ingresa el usuario.


$lado = floatval(readline("Ingrese la longitud del lado del cuadrado en metros: "));

$area = $lado * $lado;

echo "El área del cuadrado es: " . $area . " metros cuadrados.\n";
?>