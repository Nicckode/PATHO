<?php

include('db.php');

$USUARIO = $_POST['username'];
$PASSWORD = $_POST['password'];

$consulta = "SELECT* FROM users where username = '$USUARIO' and password ='$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:index.html");
} else {
    include("ingreso.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>