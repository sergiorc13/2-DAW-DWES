<?php
include "./funciones.php";
$lista=obtenerProductosPrecioMayor(1);
$lista2 = obtenerProductoID (3);
$insercion = insercionElementos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA</title>
</head>
<body>
    <!-- EJERCICIO 1 -->
    <h2>PRODUCTOS MAYORES QUE 1€</h2>
    <ul>
            <?php foreach($lista as $el => $key) {?>
                <li> <?php echo $key['nombre']; ?> - Precio: <?php echo $key['precio']; ?>€</li>
            <?php } ?>
    </ul>

    <!-- EJERCICIO 2 -->
    <h2>OBTENER PRODUCTOS POR ID</h2>
    <ul>
        <?php foreach($lista2 as $el => $key){ ?>
            <li> <?php echo $key['nombre']; ?> - Precio : <?php echo $key['precio']; ?></li>
            <?php } ?>
    </ul>

    <!-- EJERCICIO 3 -->
    <h2>INSERTAR ELEMENTOS</h2>
    <p><?php echo $insercion ?"Se han insertado los elementos": "No se han insertado elementos" ?></p>


</body>
</html>