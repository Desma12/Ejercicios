<?php

//                           Ejercicio N-2


$suma = 0;

for ($i = 1; $i <= 20; $i++) {
  $suma += $i;
}
if ($suma == 210) {
  echo "210 como esperado";
} else {
  echo "por?" . $suma;
}

?>