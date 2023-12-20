<?php
/*Crea un formulario que pida al usuario un número.
Recoge ese número y muestra la suma de todos los números pares anteriores a él.
Por ejemplo, si el usuario escribe el número 9 saldría por pantalla el número 20, resultado de sumar 2 + 4 + 6 + 8
Mejorar el resultado para que la página que muestra la suma, después muestre un enlace con el que regresar al formulario de modo que,
al hacer clic en él, el cuadro de entrada del número muestre el último número introducido*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
    <h2>Suma de números pares</h2>
    <form action="ej30_2.php" method = "POST">
    <label for="number">Introduce un numero</label>
    <input type="text" name = "numero">
    <button type="submit">Calcular</button>
    </form>
</body>
</html>