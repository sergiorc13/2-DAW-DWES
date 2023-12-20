<?php

// Verificar si la clave 'numero' está presente en $_GET
if (isset($_GET['numero'])) {
    // Obtener el valor del formulario
    $numero = $_GET['numero'];

    // Verificar si es un número o un número con decimales
    if (is_numeric($numero)) {
        if (is_int($numero)) {
            echo "El número es entero";
        } else {
            echo "El número es decimal";
        }
    } else {
        echo "No ingresaste un número válido";
    }
} else {
    echo "Por favor, ingresa un número a través del formulario.";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
    <h2>Número o número con decimales</h2>

    <form action="ej26.php" method="get">
        <label for="numero">Ingresa un número: </label>
        <input type="text" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
