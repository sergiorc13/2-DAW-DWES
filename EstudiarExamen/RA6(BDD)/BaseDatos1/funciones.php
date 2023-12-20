<?php

include('./config/database.inc.php');

function conectarse(){
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
    if (!$mysqli) {
        exit("Error " . mysqli_connect_errno() . " en la base de datos: " . mysqli_connect_error());
    }
    return $mysqli;
}

function desconectar($mysqli){
    if($mysqli)     mysqli_close($mysqli);
}

function obtenerProductosPrecioMayor($precio){
    try {
    $mysqli = conectarse();
    $consulta = mysqli_query($mysqli, "SELECT * FROM productos WHERE precio > $precio");
    // Devuelve un array asociativo con los datos de la consulta
    return mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    } catch(Exception $e){
        return false ;
    } finally {
        desconectar($mysqli);
    }
}

function obtenerProductoID($id){
    try{
        $mysqli = conectarse();
        $consulta2 = mysqli_query($mysqli, "SELECT * FROM productos WHERE id = $id");

        //Devolver el array (aunque sea uno)
        return  mysqli_fetch_all($consulta2, MYSQLI_ASSOC);

    } catch(Exception $e){
        return false;
    } finally {
        desconectar($mysqli);
    }
}

function insercionElementos(){
    try {
        $mysqli = conectarse();
        
        return mysqli_query($mysqli, "INSERT INTO productos (nombre, precio, stock) VALUES ('CocaCola', 2.99, 40)");
    } catch(Exception $e){
        return false;
    } finally {
        desconectar($mysqli);
    }
}


?>