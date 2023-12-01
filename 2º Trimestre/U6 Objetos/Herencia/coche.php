<?php

class Vehiculo {
    //Atributos
    public $color;
    protected $marca;
    protected $matricula;


    //Metodo contructor
    public function __construct(){
        $this->color = 'rojo';
        $this->marca = 'm1';
        $this->matricula = '1234ABC';
    }   

    //Metodos Getter y Setter
    public function imprimeAtributos(){
        echo $this->color." ". $this->marca." ".$this->matricula."<br>" ;
    }

    //Metodos
}

$v1 = new Vehiculo();
$v1->imprimeAtributos();
?>