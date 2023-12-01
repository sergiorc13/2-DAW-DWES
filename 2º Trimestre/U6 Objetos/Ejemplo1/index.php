<?php

class Alumno {
    // Atributos
    private $nombre;
    private static $curso; 
    
    //Métodos
    public  function __construct($nombre = null, $curso = null){
        if($nombre == null && $curso == null){
            echo "constructor por defecto <br>";
        }
        if($nombre != null && $curso == null){
            echo "constructor con un parametro: nombre <br>";
        }   

        if($nombre == null && $curso != null){
            echo "constructor con un parametro: curso <br>";
        } 

        if($nombre != null && $curso != null){
            echo "constructor con dos parametros<br>";
        }            
    }

    public function __destruct(){
        echo "objeto eliminado ";
    }

    
    //Metodos Getter y Setter
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getCurso(){
        return self::$curso;
    }

    public function setCurso($curso){
        self::$curso = $curso;
    }

}


//Creamos un objeto de la clase Alumno
//$alumno = new Alumno();
new Alumno();
new Alumno("sergio");
new Alumno(null, "DAW2");
new Alumno("sergio", "DAW2");

/*
$alumno->setNombre("Sergio");
echo $alumno->getNombre();
echo "<br>";   

$alumno->setCurso("DAW2");                          //Si los miembros, son estáticso, se utilizan dos puntos ::, sino, la flecha ->
echo $alumno->getCurso();
*/

?>