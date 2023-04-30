<?php

//                           Ejercicio N-6



// de 1 a 5, lo mismo pero al revez, for anidado, /n que cambie de linea, no olvidar el contador, 1-for controla el número de filas, 2-for asteriscos por fila.


for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "\n";
  }
  
  // de 4 a 1
  for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "\n";
  }


?>