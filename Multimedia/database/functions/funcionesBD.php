<?php
include('./config/database.inc.php');


//Funcion para conectarse a la base de datos
function conectarse(){
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
    if (!$mysqli) {
        exit("Error " . mysqli_connect_errno() . " en la base de datos: " . mysqli_connect_error());
    }
    return $mysqli;
}


//Funcion para desconectarse de la base de datos
function desconectar($mysqli){
    if($mysqli)     mysqli_close($mysqli);
}


//Funcion para mostrar los discos
function mostarDiscos(){
    try{
        $mysqli = conectarse();
        $consulta = mysqli_query($mysqli, "SELECT * FROM Disco INNER JOIN Multimedia ON Disco.multimedia_id = Multimedia.id");

        //Devolver el array de discos
        return mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    } catch (Exception $e){
        return false;
    } finally {
        desconectar($mysqli);
    }
}

//Funcion para mostrar las peliculas
function mostarPeliculas(){
    try{
        $mysqli = conectarse();
        $consulta = mysqli_query($mysqli, "SELECT * FROM Pelicula INNER JOIN Multimedia ON Pelicula.multimedia_id = Multimedia.id");

        //Devolver el array de discos
        return mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    } catch (Exception $e){
        return false;
    } finally {
        desconectar($mysqli);
    }
}
    
//Funcion para mostrar los libros
function mostarLibros(){
    try{
        $mysqli = conectarse();
        $consulta = mysqli_query($mysqli, "SELECT * FROM Libro INNER JOIN Multimedia ON Libro.multimedia_id = Multimedia.id");

        //Devolver el array de discos
        return mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    } catch (Exception $e){
        return false;
    } finally {
        desconectar($mysqli);
    }
}




?>