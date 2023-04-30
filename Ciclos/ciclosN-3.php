<?php

//                           Ejercicio N-3


$cero = 0;
$uno = 1;
$suma = $cero + $uno;
echo "$cero $uno ";
for ($i = 2; $i < 10; $i++) {
  $otro = $cero + $uno;
  $suma += $otro;
  echo "$otro ";
  list($cero, $uno) = array($uno, $otro);
}
echo "La suma de los primeros 10 términos es: $suma";


?>