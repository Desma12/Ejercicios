<?php

require_once('Password.php');

$longitud = 12;
$contra = new Contra($longitud);

$contra->generar();

?>