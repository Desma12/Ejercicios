
<?php

/* Programa que permita a una tienda saber el valor que pagara un cliente 
por la compra de varios elementos de la misma referencia. Debe tener como 
entradas el valor unitario, la cantidad de productos comprados y al valor 
final se debe adicionar el 16% correspondiente al IVA.*/

$valor_unitario = floatval(readline("Ingrese el valor unitario del producto: "));
$cantidad = intval(readline("Ingrese la cantidad de productos comprados: "));

$subtotal = $valor_unitario * $cantidad;
$iva = $subtotal * 0.16;
$total = $subtotal + $iva;

echo "El valor a pagar es: $" . number_format($total, 2) . "\n";
?>