<?php
include("conexion.php");

$token = $_POST['token'];
$password = $_POST['password'];

$sql = "UPDATE usuarios SET password='$password', token=NULL WHERE token='$token'";

$conexion->query($sql);

echo "Contraseña actualizada. <a href='login.php'>Iniciar sesión</a>";
?>