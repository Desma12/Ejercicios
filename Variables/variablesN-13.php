
<?php

// Solicitar tiempo en segundos y transformar a horas y minutos. 

$tiempoSegundos = intval(readline("Ingrese el tiempo en segundos: "));

$horas = intval($tiempoSegundos / 3600);
$minutos = intval(($tiempoSegundos % 3600) / 60);

echo "El tiempo ingresado equivale a " . $horas . " horas y " . $minutos . " minutos." . PHP_EOL;

?>