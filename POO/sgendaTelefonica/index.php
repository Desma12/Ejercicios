<?php
    require_once 'agen.php';

    $agenda = new Agenda();
    
    echo "Ingrese los datos del contacto 1:\n";
    $nomcon1 = readline("Nombre del contacto: ");
    $num1 = intval(readline("Numero: "));

    $contacto1 = new Contacto($nomcon1, $num1);
    $agenda->registrarContacto($contacto1);
    
    echo "Ingrese los datos del contacto 2:\n";
    $nomcon2 = readline("Nombre del contacto: ");
    $num2 = intval(readline("Numero: "));

    $contacto2 = new Contacto($nomcon2, $num2);
    $agenda->registrarContacto($contacto2);
    
    echo "Ingrese los datos del contacto 3:\n";
    $nomcon3 = readline("Nombre del contacto: ");
    $num3 = intval(readline("Numero: "));

    $contacto3 = new Contacto($nomcon3, $num3);
    $agenda->registrarContacto($contacto3);
    

    echo "Contactos registrados:\n";
    $agenda->listarContactos();
    

    $nombreBusqueda = readline("Que contacto quiere buscar?: ");
    $numeroEncontrado = $agenda->buscarContacto($nombreBusqueda);
    echo "El número de " . $nombreBusqueda . " es: " . $numeroEncontrado . "\n";
?>