<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);


include('db-registro.php');

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$correo = $_POST['txtCorreo'];
$petname = $_POST['txtPetname'];
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];

$consulta = "INSERT INTO users (`Nombre`, `Apellido`, `Correo`, `Petname`, `Usuario`, `Password`) VALUES ('$nombre', '$apellido', '$correo', '$petname', '$usuario', '$password');";

$resultado = mysqli_query($conexion, $consulta) or die("error de registro");


echo "registro exitoso";


mysqli_close($conexion);



?>