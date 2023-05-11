<?php

//clase

class Libro {
    private $autor;
    private $titulo;
    private $paginas;
    
    public function __construct($autor, $titulo, $paginas) {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
    }

    // argumentos
    
    public function getAutor() {
        return $this->autor;
    }
    
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function getPaginas() {
        return $this->paginas;
    }
    
    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }
    
    public function mostrarLibro() {
        echo "El libro " . $this->titulo . ", del autor " . $this->autor . ", tiene " . $this->paginas . " páginas.";
    }
    
    // tiene que ser estatica o si no no funciona :( se llama a una función estática sin necesidad de crear un objeto de la clase, es como super util

    //metodo
    public static function compararLibros($paginasLibro1, $paginasLibro2, $tituloLibro1, $tituloLibro2) {
        if ($paginasLibro1 > $paginasLibro2) {
            return "El libro '$tituloLibro1' tiene más páginas.";
        } elseif ($paginasLibro1 < $paginasLibro2) {
            return "El libro '$tituloLibro2' tiene más páginas.";
        } else {
            return "Ambos libros tienen la misma cantidad de páginas.";
        }
    }
}

?>