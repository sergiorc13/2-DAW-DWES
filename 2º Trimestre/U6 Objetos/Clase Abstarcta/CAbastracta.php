<?php

abstract class CAbstracta {
    
    //metodos
    abstract public function saludo();
    public function despedida(){
        echo "adios";
    }
}

class MiClase extends CAbstracta{
    public function saludo(){
        echo "hola";
    }
}

$obj = new MiClase();
$obj->despedida();
?>