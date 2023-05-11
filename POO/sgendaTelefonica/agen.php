<?php
require_once 'contacto.php';

class Agenda {
    private $contactos;

    public function __construct() {
        $this->contactos = array();
    }

    public function registrarContacto($contacto) {
        $this->contactos[] = $contacto;
    }

    public function listarContactos() {
        foreach ($this->contactos as $contacto) {
            echo "Contacto: " . $contacto->getNombre() . ", Número: " . $contacto->getNumero() . "\n";
        }
    }

    public function buscarContacto($nombre) {
        foreach ($this->contactos as $contacto) {
            if ($contacto->getNombre() === $nombre) {
                return $contacto->getNumero();
            }
        }
        return "No encontrado :(";
    }
}

?>