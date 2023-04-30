<?php

//                           Ejercicio N-4


$entre = array();
for ($i = 0; $i < 10; $i++) {
  echo "Ingresa el número ", ($i+1), ": ";
  $entre[$i] = (int)readline();
}
$suma = array_sum($entre);
$promedio = $suma / count($entre);
echo "La suma: ", $suma, "\n";
echo "El promedio: ", $promedio;


?>