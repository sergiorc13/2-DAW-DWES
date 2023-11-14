
<?php include_once "estructuraWeb/menu.inc.php";  ?>

<div>
    <br><br>
<!-- Aquí se muestran los resultados de la búsqueda -->
<?php
require_once("conexion/establecerConexionBD.php");

if(isset($_POST["searchlibro"])) {
    $libro = $_POST["query"];
    header("Location: ?ruta=busqueda&query=". $libro);
    exit;
}else {
    //echo 'u';
}
$mysqli = mysqli_connect($host, $usuarioBD, $passwordBD, $nombreBD);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["query"])) {
    $query = $_GET["query"];
    $resultados = buscarLibros($mysqli, $query);
}

// Cerrar la conexión cuando hayas terminado
mysqli_close($mysqli);
?>
</div>
    



