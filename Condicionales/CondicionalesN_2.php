
<?php

/*Preguntar al usuario el nombre y la edad, si es mayor o igual a 18 años mostrar el 
mensaje "Usted es mayor de edad", de lo contrario "Usted es menor de edad". Si el número 
ingresado es negativo o la edad ingresada es mayor a 100 años, mostrar al usuario un 
mensaje de ingresar una edad válida.*/


  echo "Ingrese su nombre: ";
  $nombre = readline();
  echo "Ingrese su edad: ";
  $edad = readline();



  if ($edad < 0 || $edad > 100) {
    echo "Por favor, ingrese una edad válida.";
  } else {


    if ($edad >= 18) {
      echo "Hola, " . $nombre . ". Usted es mayor de edad.";
    } else {
      echo "Hola, " . $nombre . ". Usted es menor de edad.";
    }
  }
?>