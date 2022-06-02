<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);


include('db-registro.php');

$nombre = $_REQUEST['txtNombre'];
$apellido = $_REQUEST['txtApellido'];
$correo = $_REQUEST['txtCorreo'];
$petname = $_REQUEST['txtPetname'];
$usuario = $_REQUEST['txtUsuario'];
$password = $_REQUEST['txtPassword'];


$consulta = "INSERT INTO users (`Nombre`, `Apellido`, `Correo`, `Petname`, `Usuario`, `Password`) VALUES ('$nombre', '$apellido', '$correo', '$petname', '$usuario', '$password');";

$resultado = mysqli_query($conexion, $consulta) or die("error de registro");


echo "registro exitoso";

if ($resultado) {
    header("location:index.html");
} else {
    include("registro.html");
    ?>
    <h1>ERROR DE REGISTRO</h1>
    <?php
}



mysqli_close($conexion);



?>