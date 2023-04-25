
<?php

/*El precio que debe pagar un cliente por una pizza depende del tamaño seleccionado, 
como se muestra a continuación:
Si cada ingrediente adicional cuesta $4.000. 
Escribir un programa que solicite al empleado encargado de registrar las ventas, 
el tamaño de la pizza y el número de ingredientes adicionales y muestre al cliente 
el precio que debe pagar.
*/


$tamano = readline("Ingrese el tamaño de la pizza (1 = pequeña, 2 = mediana, 3 = grande): ");


if ($tamano != 1 && $tamano != 2 && $tamano != 3) {
  echo "Error: tamaño de pizza no válido\n";
  exit();
}

//                                     adicional
$num_ingredientes = readline("Ingrese el número de ingredientes adicionales: ");

//                              tamaño = precio = felicidad
if ($tamano == 1) {
  $precio_base = 15000;
} else if ($tamano == 2) {
  $precio_base = 24000;
} else {
  $precio_base = 36000;
}


$precio_total = $precio_base + $num_ingredientes * 4000;


echo "El precio total de la pizza es: " . $precio_total . "\n";
?>