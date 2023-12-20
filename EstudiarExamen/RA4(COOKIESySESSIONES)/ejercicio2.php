<?php
//Realiza el ejercicio anterior pero ahora utilizando sesiones.
session_start();

if(isset($_POST["nombre"]) && isset($_POST["colorFondo"]) && isset($_POST["colorLetra"]) && isset($_POST["tipoLetra"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["colorFondo"] = $_POST["colorFondo"];
    $_SESSION["colorLetra"] = $_POST["colorLetra"];
    $_SESSION["tipoLetra"] = $_POST["tipoLetra"];
    header("Location: ejercicio2.php");
} else{
    if(isset($_SESSION["nombre"]) && isset($_SESSION["colorFondo"]) && isset($_SESSION["colorLetra"]) && isset($_SESSION["tipoLetra"])) {
        echo "<body style='background-color: " . $_SESSION["colorFondo"] . "; color: " . $_SESSION["colorLetra"] . "; font-family: " . $_SESSION["tipoLetra"] . ";'>";
    } 
} 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Sesiones</h1>
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