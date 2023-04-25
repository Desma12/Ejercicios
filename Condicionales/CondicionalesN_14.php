
<?php

/*14. El número de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio 
    aeróbico se calcula con la fórmula:
    Género femenino (1): número de pulsaciones = (220 - edad en años)/10
    Género masculino (2): número de pulsaciones = (210 - edad en años)/10
    Lea la edad y el género y muestre el número de pulsaciones.
*/

$edad = intval(readline("Ingrese su edad: "));
$genero = intval(readline("Ingrese su género (1 para femenino, 2 para masculino): "));

if ($genero == 1) {
    $pulsaciones = (220 - $edad) / 10;
} elseif ($genero == 2) {
    $pulsaciones = (210 - $edad) / 10;
} else {
    echo "Género no válido";
    exit();
}

echo "Número de pulsaciones: " . $pulsaciones . "\n";

?>