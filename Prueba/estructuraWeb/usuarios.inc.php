<div>
    <a href="?ruta=perfil" class = "boton-volver">Volver</a>
</div>
<div>
<br> <p class = "usuarios">Estos son todos los usuarios de la aplicación</p><br> 
</div>

    <section  class ="section-usuarios">
        <?php
            require_once("./conexion/establecerConexionBD.php");

            $mysqli = mysqli_connect($host, $usuarioBD, $passwordBD, $nombreBD);

            mostrarUsuarios($mysqli);

            mysqli_close($mysqli);
        ?>
    </section>
    

<?php include_once "estructuraWeb/pie.inc.php"; ?>