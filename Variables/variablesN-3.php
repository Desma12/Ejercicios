
<?php

/* Programa para calcular la distancia recorrida en un movimiento rectilíneo. 
Solicitar al usuario velocidad en kilómetros por hora (Km/h) y tiempo en horas (h) 
para obtener la distancia en kilómetros (Km). y de un ejemplo de como funciona*/

$velocidad = floatval(readline("Ingrese la velocidad en Km/h: "));
  $tiempo = floatval(readline("Ingrese el tiempo en horas: "));

  $distancia = $velocidad * $tiempo;

  echo "La distancia recorrida es: " . $distancia . " Km\n";
?>