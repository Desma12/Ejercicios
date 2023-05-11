<?php 

class Contra {
    private $longitud;
    private $contra;
  
    public function __construct($longitud) {
      $this->longitud = $longitud;
    }
  
    public function getLongitud() {
      return $this->longitud;
    }
  
    public function setLongitud($longitud) {
      $this->longitud = $longitud;
    }
  
    public function getContra() {
      return $this->contra;
    }
  
    public function generar() {
      $this->contra = '';
      $numeros = 0;
      $minusculas = 0;
      $mayusculas = 0;
  
    }

?>