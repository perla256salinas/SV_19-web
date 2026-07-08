<?php
$conexion = new mysqli("localhost","root","","sistema_login");
if($conexion->connect_error){
    die("Error: ".$conexion->connect_error);
}
?>