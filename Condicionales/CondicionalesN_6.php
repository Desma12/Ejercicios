<?php

/*Crear un programa con un menú de opciones, que permita calcular las áreas de 
figuras geométricas (cuadrado, rectángulo, triángulo, círculo, rombo y trapecio). 
*/

//                                    operacion área cuadrado
function areaCuadrado($lado) {
  return $lado * $lado;
}

//                                    operacion área rectángulo
function areaRectangulo($base, $altura) {
  return $base * $altura;
}

//                                    operacion área triángulo
function areaTriangulo($base, $altura) {
  return ($base * $altura) / 2;
}

//                                    operacion área círculo
function areaCirculo($radio) {
  return pi() * $radio * $radio;
}

//                                    operacion área rombo
function areaRombo($diagonalMayor, $diagonalMenor) {
  return ($diagonalMayor * $diagonalMenor) / 2;
}

//                                    operacion área trapecio
function areaTrapecio($baseMayor, $baseMenor, $altura) {
  return (($baseMayor + $baseMenor) * $altura) / 2;
}

//                                               Menú
echo "Selecciona la figura geométrica para calcular su área:\n";
echo "1. Cuadrado\n";
echo "2. Rectángulo\n";
echo "3. Triángulo\n";
echo "4. Círculo\n";
echo "5. Rombo\n";
echo "6. Trapecio\n";


$opcion = readline("Opción: ");

//                                             cálculo
switch ($opcion) {
  case 1:
    $lado = readline("Ingresa el valor del lado: ");
    echo "El área del cuadrado es: " . areaCuadrado($lado) . "\n";
    break;
  case 2:
    $base = readline("Ingresa el valor de la base: ");
    $altura = readline("Ingresa el valor de la altura: ");
    echo "El área del rectángulo es: " . areaRectangulo($base, $altura) . "\n";
    break;
  case 3:
    $base = readline("Ingresa el valor de la base: ");
    $altura = readline("Ingresa el valor de la altura: ");
    echo "El área del triángulo es: " . areaTriangulo($base, $altura) . "\n";
    break;
  case 4:
    $radio = readline("Ingresa el valor del radio: ");
    echo "El área del círculo es: " . areaCirculo($radio) . "\n";
    break;
  case 5:
    $diagonalMayor = readline("Ingresa el valor de la diagonal mayor: ");
    $diagonalMenor = readline("Ingresa el valor de la diagonal menor: ");
    echo "El área del rombo es: " . areaRombo($diagonalMayor, $diagonalMenor) . "\n";
    break;
  case 6:
    $baseMayor = readline("Ingresa el valor de la base mayor: ");
    $baseMenor = readline("Ingresa el valor de la base menor: ");
    $altura = readline("Ingresa el valor de la altura: ");
    echo "El área del trapecio es: " . areaTrapecio($baseMayor, $baseMenor, $altura) . "\n";
    break;
  }
?>