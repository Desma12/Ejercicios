
// Solicitar dos números al usuario y calcular cuál es el mayor y cuál el menor, e imprimir el resultado.

<?php

  echo "Ingrese el primer número: ";
  $num1 = readline();
  echo "Ingrese el segundo número: ";
  $num2 = readline();

  if ($num1 > $num2) {
    $mayor = $num1;
    $menor = $num2;
  } else {
    $mayor = $num2;
    $menor = $num1;
  }

  echo "El número mayor es: " . $mayor . "\n";
  echo "El número menor es: " . $menor . "\n";
?>