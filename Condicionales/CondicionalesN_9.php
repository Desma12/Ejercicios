
<?php

/*Programa que permita a un usuario tomar una decisión del tipo de pago a usar. Si 
la cuenta es menor a $150000 pago en efectivo. Si no, si es de $150000 hasta $300000 
pago con el celular (dinero electrónico). Si es mayor a $300000 hasta $600000, pago 
con la tarjeta de débito. Caso contrario, pago con la tarjeta de crédito.*/


$cuenta = readline("Ingresa el valor de la cuenta: ");

if ($cuenta < 150000) {
    echo "Se le recomienda el pago en efectivo.\n";
} elseif ($cuenta >= 150000 && $cuenta <= 300000) {
    echo "Se le recomienda el pago con celular (dinero electrónico).\n";
} elseif ($cuenta > 300000 && $cuenta <= 600000) {
    echo "Se le recomienda el pago con tarjeta de débito.\n";
} else {
    echo "Se le recomienda el pago con tarjeta de crédito.\n";
}

?>