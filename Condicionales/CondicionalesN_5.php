
<?php

/*Solicitar notas de 0.0 a 5.0 a un estudiante y calcular promedio.  
Mostrar como "Aprobó" si el promedio es mayor o igual a 3.0, o mostrar 
"No aprobó" si su nota es menor a 3.0. */

  echo "Ingrese la primera nota: ";
  $nota1 = readline();
  echo "Ingrese la segunda nota: ";
  $nota2 = readline();
  echo "Ingrese la tercera nota: ";
  $nota3 = readline();

  $promedio = ($nota1 + $nota2 + $nota3) / 3;

  if ($promedio >= 3.0) {
    echo "El estudiante aprobó con un promedio de " . $promedio;
  } else {
    echo "El estudiante no aprobó con un promedio de " . $promedio;
  }
?>