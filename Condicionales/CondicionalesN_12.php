
<?php

/*Un local vende sus productos con la siguiente promoción. 
Si compra hasta 5 artículos, no hay descuento. Si compra más de 
5 artículos, pero menos de 10, el precio unitario se reduce en 5%. 
Si compra 10 o más artículos, el precio unitario se reduce en 8%. 
Ingrese un dato de cantidad y el valor del precio unitario original. 
Calcule y muestre el valor total a pagar.
*/

$cantidad = readline("Ingrese la cantidad de artículos: ");
$precio_unitario = readline("Ingrese el precio unitario: ");

if ($cantidad <= 5) {
  $precio_total = $cantidad * $precio_unitario;
} elseif ($cantidad < 10) {
  $descuento = 0.05;
  $precio_total = $cantidad * $precio_unitario * (1 - $descuento);
} else {
  $descuento = 0.08;
  $precio_total = $cantidad * $precio_unitario * (1 - $descuento);
}

echo "El precio total a pagar es: " . $precio_total;

?>