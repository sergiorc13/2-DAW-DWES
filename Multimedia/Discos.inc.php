<?php

//Incluir la clase padre
include_once 'Multimedia.inc.php';


// Clase Disco
class Disco extends Multimedia {
    private $grupoOMusico;
    private $duracion;
    private $iswc;

    // Constructor sobrecargado
    public function __construct($titulo, $grupoOMusico, $publicacion, $año, $duracion, $iswc, $genero) {
        parent::__construct($titulo, $publicacion, $año, $genero);
        $this->grupoOMusico = $grupoOMusico;
        $this->duracion = $duracion;
        $this->iswc = $iswc;
    }

    // Getters y Setters

    public function getGrupoOMusico() {
        return $this->grupoOMusico;
    }

    public function setGrupoOMusico($grupoOMusico) {
        $this->grupoOMusico = $grupoOMusico;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function getIswc() {
        return $this->iswc;
    }

    public function setIswc($iswc) {
        $this->iswc = $iswc;
    }

    // Metodo to String y mostrarDiscos
    public function __toString() {
        return parent::__toString() . "Grupo o Musico: " . $this->grupoOMusico . "<br>" . "Duracion: " . $this->duracion . "<br>" . "ISWC: " . $this->iswc . "<br>";
    }

    public function mostrarDiscos() {
        echo $this->__toString();
    }
    
}

$disco = new Disco("The Dark Side of the Moon", "Pink Floyd", "Inglaterra", 1973, "43:00", "ISWC-0000012345", "Rock");

echo "<h1>Disco</h1>";
$disco->mostrarDiscos();
  
?>