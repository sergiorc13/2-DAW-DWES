
<?php
/*
Mostrar una página web en la que dispongamos inicialmente de un formulario en el que tenemos un cuadro de texto y un botón con el texto Añadir tarea.
Ese formulario nos permitirá escribir el nombre de una tarea y al pulsar añadir, aparecerá la página mostrando una lista de tareas donde ya aparece la que hemos añadido.
Podemos seguir añadiendo tareas y cada vez que lo hacemos, la lista va creciendo.
Al lado de la lista de tareas añadidas, cada una de ellas tendrá un enlace que diga Quitar tarea, dicho enlace nos permitirá quitar la tarea de la lista.
En todo momento el usuario tiene que ver la misma página en la que la lista muestra las tareas que ha ido añadiendo y donde ya no aparecerán las que ha ido eliminando
*/

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevaTarea = $_POST["nuevaTarea"];

    if (!empty($nuevaTarea)) {
        
        $tareas = isset($_SESSION["tareas"]) ? $_SESSION["tareas"] : [];
        
        $tareas[] = $nuevaTarea;

        $_SESSION["tareas"] = $tareas;
    }
}

$tareas = isset($_SESSION["tareas"]) ? $_SESSION["tareas"] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Lista de tareas</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="tarea">Nueva tarea</label>
        <input type="text" name="nuevaTarea">
        <br><br>    
        <input type="submit" value="Añadir tarea">
    </form><br><br>

    <ul>
        <?php foreach ($tareas as $el => $tarea){ ?>
            <li><?php echo $tarea; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
