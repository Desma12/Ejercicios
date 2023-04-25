
// Solicitar número al usuario y determinar si es negativo, positivo o cero.

<?php

  echo "Ingrese un número: ";
  $numero = readline();


  if ($numero < 0) {
    echo "El número ingresado es negativo.";
  } elseif ($numero > 0) {
    echo "El número ingresado es positivo.";
  } else {
    echo "El número ingresado es cero.";
  }
?>