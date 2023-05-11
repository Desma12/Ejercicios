<?php

include('ClaseLibro.php');


echo "Ingrese los datos del libro 1:\n";
echo "Título: ";
$tituloLibro1 = readline();
echo "Autor: ";
$autorLibro1 = readline();
echo "Número de páginas: ";
$paginasLibro1 = readline();

//objetos

$libro1 = new Libro($autorLibro1, $tituloLibro1, $paginasLibro1);


echo "\nIngrese los datos del libro 2:\n";
echo "Título: ";
$tituloLibro2 = readline();
echo "Autor: ";
$autorLibro2 = readline();
echo "Número de páginas: ";
$paginasLibro2 = readline();


$libro2 = new Libro($autorLibro2, $tituloLibro2, $paginasLibro2);


$libro1->mostrarLibro();
echo "\n";
$libro2->mostrarLibro();
echo "\n";

$compa = new libro($libro1, $libro2, $tituloLibro1, $tituloLibro2);

$compa->compararLibros($libro2);

?>