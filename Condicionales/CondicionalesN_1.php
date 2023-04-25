
<?php

// Solicitar número al usuario y determinar si es par, impar o es cero. 

  echo "Ingresa un número: ";
  $numero = readline();


  if ($numero == 0) {
    echo "El número es cero.";
  } elseif ($numero % 2 == 0) {
    echo "El número es par.";
  } else {
    echo "El número es impar.";
  }
?>