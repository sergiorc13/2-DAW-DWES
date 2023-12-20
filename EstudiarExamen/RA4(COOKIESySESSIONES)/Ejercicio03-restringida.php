<?php

session_start();

if(!isset($_SESSION['autenticado']) &&  (!$_SESSION['autenticado'])){
    header("Location: Ejercicio03-autentificacion.php");
    exit;
} else{
    if(isset($_GET["borrarSesion"]) && $_GET["borrarSesion"] == "si"){
        session_unset();
        session_destroy();
        header("Location: Ejercicio03-autentificacion.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03 Zona restringida</title>
</head>
<body>
    <h1>ZONA RESTRINGIDA</h1>
    <a href="<?php echo $_SERVER["PHP_SELF"]. "?borrarSesion=si" ?>"> Cerrar Sesion</a>
</body>
</html>