<?php

//Conversión de temperaturas. Crear un menú de opciones. 

function celsiusToFahrenheit($temp) {
  return ($temp * 9/5) + 32;
}

function fahrenheitToCelsius($temp) {
  return ($temp - 32) * 5/9;
}

function celsiusToKelvin($temp) {
  return $temp + 273.15;
}

function kelvinToCelsius($temp) {
  return $temp - 273.15;
}

function celsiusToRankine($temp) {
  return ($temp + 273.15) * 9/5;
}

function rankineToCelsius($temp) {
  return ($temp - 491.67) * 5/9;
}

function celsiusToReaumur($temp) {
  return $temp * 4/5;
}

function reaumurToCelsius($temp) {
  return $temp * 5/4;
}

echo "Bienvenido al conversor de temperaturas de Santiago ajsjajs\n";
echo "Ingrese el numero de la temperatura a convertir: ";

$temperatura = (float) readline();

echo "Seleccione la unidad de temperatura actual:\n";
echo "1. Celsius\n";
echo "2. Fahrenheit\n";
echo "3. Kelvin\n";
echo "4. Rankine\n";
echo "5. Reaumur\n";

$unidadActual = (int) readline();

echo "Seleccione la unidad de temperatura a la que desea convertir:\n";
echo "1. Celsius\n";
echo "2. Fahrenheit\n";
echo "3. Kelvin\n";
echo "4. Rankine\n";
echo "5. Reaumur\n";

$unidadNueva = (int) readline();

switch ($unidadActual) {
  case 1: // Celsius
    $tempCelsius = $temperatura;
    break;
  case 2: // Fahrenheit
    $tempCelsius = fahrenheitToCelsius($temperatura);
    break;
  case 3: // Kelvin
    $tempCelsius = kelvinToCelsius($temperatura);
    break;
  case 4: // Rankine
    $tempCelsius = rankineToCelsius($temperatura);
    break;
  case 5: // Reaumur
    $tempCelsius = reaumurToCelsius($temperatura);
    break;
  default:
    echo "Opción inválida";
    exit();
}

switch ($unidadNueva) {
  case 1: // Celsius
    $tempFinal = $tempCelsius;
    break;
  case 2: // Fahrenheit
    $tempFinal = celsiusToFahrenheit($tempCelsius);
    break;
  case 3: // Kelvin
    $tempFinal = celsiusToKelvin($tempCelsius);
    break;
  case 4: // Rankine
    $tempFinal = celsiusToRankine($tempCelsius);
    break;
  case 5: // Reaumur
    $tempFinal = celsiusToReaumur($tempCelsius);
    break;
  default:
    echo "Opción inválida";
    exit();
}

echo "La temperatura convertida es: " . $tempFinal . "\n";

?>