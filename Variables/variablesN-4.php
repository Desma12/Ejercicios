
<?php

/* Programa que permita calcular la edad de una persona conociendo el 
año actual y el usuario digita su año de nacimiento.*/

$anio_actual = date('Y');
$anio_nacimiento = intval(readline('Ingrese su año de nacimiento: '));
$edad = $anio_actual - $anio_nacimiento;

echo 'Su edad es: ' . $edad . ' años.' . "\n";
?>