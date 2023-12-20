<?php

/* Crear una página web en la que se pregunten datos del usuario, concretamente:
Nombre y apellidos
Color deseado para el fondo
Color deseado para la letra
Elegir una de entre tres tipos de letra
Tras aceptar los datos, una segunda página saluda al usuario, por ejemplo, con el mensaje Hola Ana Fernández, utilizando el tipo de letra y colores elegidos.
La siguiente vez que accedamos a la página inicial, ya no nos preguntará las preferencias porque se dará cuenta que tiene los datos en cookies y nos llevará a la segunda 
página.

Si intentamos acceder directamente a la página del saludo y no hemos grabado las preferencias, esta página nos llevará a la página con e! formulario.
En la página del saludo, un enlace nos permitirá borrar las preferencias.*/

if (isset($_POST["nombre"]) && isset($_POST["colorFondo"]) && isset($_POST["colorLetra"]) && isset($_POST["tipoLetra"])) {
    setcookie("nombre", $_POST["nombre"], time() + 30);
    setcookie("colorFondo", $_POST["colorFondo"], time() + 30);
    setcookie("colorLetra", $_POST["colorLetra"], time() + 30);
    setcookie("tipoLetra", $_POST["tipoLetra"], time() + 30);
    header("Location: ejercicio1.php");
   
} else {
    if (isset($_COOKIE["nombre"]) && isset($_COOKIE["colorFondo"]) && isset($_COOKIE["colorLetra"]) && isset($_COOKIE["tipoLetra"])) {
        echo "<body style='background-color: " . $_COOKIE["colorFondo"] . "; color: " . $_COOKIE["colorLetra"] . "; font-family: " . $_COOKIE["tipoLetra"] . ";'>";
        echo "</body>"; 
    } else {
        echo "<h1>Introduce tus preferencias</h1>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Cookies</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method = "POST">
        <label for="nombre">Nombre y apelidos</label><br>
        <input type="text" name="nombre"><br><br>
        <label for="colorFondo">Color de fondo</label><br>
        <input type="color" name="colorFondo"><br><br>
        <label for="colorLetra">Color de letra</label><br>
        <input type="color" name="colorLetra"><br><br>

        <select name="tipoLetra">
            <option value="arial">Arial</option>
            <option value="times">Times</option>
            <option value="courier">Courier</option>
        </select><br><br>

        <input type="submit" value="Aceptar">

    </form>
    
</body>
</html>