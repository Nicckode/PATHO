<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);


include('db-registroPetsitters.php');

$nombres = $_REQUEST['txtNombre'];
$apodo = $_REQUEST['txtApodo'];
$correo = $_REQUEST['txtCorreo'];
$pais = $_REQUEST['txtPais'];
$ciudad = $_REQUEST['txtCiudad'];
$edad = $_REQUEST['nEdad'];
$cell = $_REQUEST['nCell'];
$address = $_REQUEST['txtDireccion'];
$usuario = $_REQUEST['txtUsuario'];
$password = $_REQUEST['txtPassword'];


$consulta = "INSERT INTO `petsitters` (`Nombre Completo`, `Apodo`, `Correo`, `Pais`, `Ciudad`, `Edad`, `Telefono`, `Direccion`, `Usuario`, `Password`) VALUES ('$nombres', '$apodo', '$correo', '$pais', '$ciudad', '$edad', '$cell', '$address', '$usuario', '$password');";

$resultado = mysqli_query($conexion, $consulta) or die("error de registro");


echo "registro exitoso";

if ($resultado) {
    header("location:index.html");
} else {
    include("cuidadores.html");
    ?>
    <h1>ERROR DE REGISTRO</h1>
    <?php
}



mysqli_close($conexion);



?>