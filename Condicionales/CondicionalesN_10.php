
<?php

/*Leer el número de llantas de una compra y mostrar el valor que debe pagarse. 
El almacén las vende con la siguiente política: Si se compran menos de 6 llantas, 
el precio unitario es $240000. Si se compran 6 o 7, el precio unitario es $221000, 
y si se compran más de 7 llantas, el precio unitario es $180000.*/

// Leer el número de llantas de la compra
$numLlantas = readline("Ingrese el número de llantas a comprar: ");

// Calcular el precio unitario y el valor total de la compra
if ($numLlantas < 6) {
  $precioUnitario = 240000;
} else if ($numLlantas <= 7) {
  $precioUnitario = 221000;
} else {
  $precioUnitario = 180000;
}

$valorCompra = $numLlantas * $precioUnitario;

// Mostrar el valor a pagar
echo "El valor a pagar por " . $numLlantas . " llantas es: $" . number_format($valorCompra, 0, ',', '.') . "\n";
?>