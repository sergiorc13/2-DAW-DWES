<?php

//Incluir la clase padre
include_once 'Multimedia.inc.php';


//Clase Libro
class Libro extends Multimedia {

    private $autor;
    private $extension;
    private $isbn;

    //Contructor
    public function __construct($titulo, $publicacion, $ano, $genero, $autor, $extension, $isbn) {
        parent::__construct($titulo, $publicacion, $ano, $genero);
        $this->autor = $autor;
        $this->extension = $extension;
        $this->isbn = $isbn;
    }

    //Getters y Setters específcos para libro
    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getExtension() {
        return $this->extension;
    }

    public function setExtension($extension) {
        $this->extension = $extension;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }


    //Metodo to String y mostrarLibros
    public function __toString() {
        return parent::__toString() . "Autor: " . $this->autor . "<br>" . "Extension: " . $this->extension . "<br>" . "ISBN: " . $this->isbn . "<br>";
    }

    public function mostrarLibros() {
        echo $this->__toString();
    }


}

$libro = new Libro("El señor de los anillos", "España", 2001, "Fantasia", "J.R.R. Tolkien", "1000 paginas", "978-84-450-7559-2");
echo "<h1>Libro</h1>";
$libro->mostrarLibros();


?>