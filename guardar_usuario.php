<?php
include("config/db.php");
$n=$_POST['nombre'];
$c=$_POST['correo'];
$p=password_hash($_POST['password'], PASSWORD_DEFAULT);
$conn->query("INSERT INTO usuarios(nombre,correo,password) VALUES('$n','$c','$p')");
header("Location: usuarios.php");
?>