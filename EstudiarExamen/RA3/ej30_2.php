<?php
// Verificar si la clave 'numero' está presente en $_POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $suma = 0;

        for ($i = 0; $i < $numero; $i++) {
            if ($i % 2 == 0) {
                $suma += $i;
            }
        }
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
    <h2>Resultado de la suma</h2>
    <p>La suma de los números pares anteriores a <?php echo $numero ?> es: <?php echo $suma ?></p>
    <a href="ej30_1.php">Volver al formulario</a>
</body>
</html>