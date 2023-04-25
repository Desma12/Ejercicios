
<?php

/*Un reporte de salud muestra una tabla diferente del índice de 
masa corporal IMC de una persona que se calcula con la fórmula 
IMC=P/T en donde P es el peso en Kg. y T es la talla en metros. 
Lea un valor de P y de T, calcule el IMC y muestre su estado según 
la siguiente tabla:
*/

$p = floatval(readline("Ingrese el peso en kg: "));
// por ejemplo 170cm = 1.7 asi jasj
$t = floatval(readline("Ingrese la talla en metros: "));

$imc = $p / ($t * $t);
$estado = "";

if ($imc < 18.5) {
  $estado = "Desnutrido";
} elseif ($imc >= 18.5 && $imc < 25) {
  $estado = "Normal";
} elseif ($imc >= 25 && $imc < 30) {
  $estado = "Sobrepeso";
} elseif ($imc >= 30 && $imc < 35) {
  $estado = "Obesidad Grado 1";
} elseif ($imc >= 35 && $imc < 40) {
  $estado = "Obesidad Grado 2";
} else {
  $estado = "Obesidad Grado 3";
}

echo "El IMC es: " . number_format($imc, 2) . "\n";
echo "El estado es: " . $estado . "\n";
?>