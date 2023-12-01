<?php

include_once 'coche.php';

class Coche extends Vehiculo {
    //Atributos

    //Metodo contructor

    //Metodos Getter y Setter

    //Metodos
    public function verAtributosPadre(){
        echo $this->color;
        echo $this->marca;
        echo $this->matricula;
    }
}

$c1 = new Coche();
$c1->verAtributosPadre();
?>