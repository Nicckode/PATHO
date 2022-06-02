<?php

include('db.php');

$USUARIO = $_POST['username'];
$PASSWORD = $_POST['password'];

$consulta = "SELECT* FROM users where Usuario = '$USUARIO' and Password ='$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:index.html");
} else {
    include("ingreso.html");
    ?>
    <br>
    <h1 style="background-color: red; color: white; display: flex;
    justify-content: center;">Usuario o contraseña incorrectos</h1>
    
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>