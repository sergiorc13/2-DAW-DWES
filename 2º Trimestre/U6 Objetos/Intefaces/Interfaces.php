<?php

//Declarar la interfaz 'i1'
interface i1
{
    public function m1();
    public function m2();
}

//Declarar la interfaz 'i2'
interface i2
{
    public function m1($parameto);
    public function m2();
}


//Declaramos la clase que implementa las dos interfaces
class c1 implements i1, i2 {
    
    public function m1(){
        echo "m1 <br>";
    }

    public function m1($parametro){
        echo "m1 con parametro <br>";
    }   

    public function m2(){
        echo "m2 <br>";
    }

    
}

//Creamos un objeto de la clase c1
$obj = new c1();

//Llamamos a los métodos de las interfaces
$obj->m1();
$obj->m2();



?>