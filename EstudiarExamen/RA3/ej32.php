<?php

/*Crea una página PHP que permita elegir una serie de artículos de una tienda online mediante checkbox.
Cada checkbox permite seleccionar un artículo, en el que se indica su precio .
Tras pulsar el botón Enviar del formulario, se nos indicará el detalle de la compra, así como el total de lo que hemos comprado.*/

if(isset($_GET["articulos"])){
    $articulos = $_GET["articulos"];
    $total = 0;

    foreach($articulos as $articulo){
        switch($articulo){
            case 1:
                $total += 10;
                break;
            case 2:
                $total += 20;
                break;
            case 3:
                $total += 30;
                break;
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<body>
    <h2>Tienda online</h2>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method = "GET">

        <label for="number">
            <input type="checkbox" name = "articulos[]" value = "1">
            producto 1 - 10€
        </label>
        <label for="number">
            <input type="checkbox" name = "articulos[]" value = "2">
            producto 2 - 20€
        </label>
        <label for="number">
            <input type="checkbox" name = "articulos[]" value = "3">
            producto 3 - 30€
        </label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <h3>Total de la compra</h3>
    <?php if(isset($total)){
        echo "<p>El total de la compra es: $total</p>";   
    }else{
        echo "<p>No has seleccionado ningún producto</p>";
    } ?>
    
</body>
</html>