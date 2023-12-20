<?php

/*
Crear una página PHP llamada Ejercicio03-retringida.php, bastará con que simplemente muestre el mensaje Zona restringida. 
Dicha página no se podrá ver por parte de ningún usuario que no se haya autentificado en la página Ejercicio03-autentificacion.php, 
la cual pedirá una contraseña.
Cuando entramos en Ejercicio03-autentificacion.php y escribimos la contraseña correcta, se nos enviará automáticamente a la página 
Ejercicio03-restringida.php.
Si intentamos acceder directamente a la zona restringida sin haber pasado nunca por la autentificación, no se nos permitirá entrar y 
se nos enviará a Ejercicio03-autentificacion.php para que escribamos la contraseña.
Tras habernos autentificado, durante la sesión podremos acceder directamente a la zona restringida y no se nos pedirá la contraseña.

Nota. Se pueden utilizar cookies o sesiones, pero la contraseña se deberá almacenar 
cifrada para una mayor seguridad, especialmente si se utilizan cookies.
 */

 
session_start();

if(isset($_SESSION['autenticado']) && ($_SESSION["autenticado"])){
    header('Location: Ejercicio03-restringida.php');
    exit;   
}

$contrasena = password_hash("1234", PASSWORD_BCRYPT);

if(isset($_POST["enviar"])){
    if(password_verify($_POST["contrasena"], $contrasena)){
        $_SESSION['autenticado'] = true;
        header("Location: Ejercicio03-restringida.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificación</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method = "POST">
        <label for="constrasena">Introduce la contraseña: </label>
        <input type="password" id = "contrasena" name = "contrasena"><br>
        <input type="submit" name="enviar" id="enviar">
    </form>
</body>
</html>