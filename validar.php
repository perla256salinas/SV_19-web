<?php
session_start();
include("conexion.php");

$user = $_POST['correo'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo='$user'";
$result = $conexion->query($sql);

if($result->num_rows > 0){
    $datos = $result->fetch_assoc();

    if($pwd === $datos['password']){
        $_SESSION['usuario'] = $datos;
        header("Location: dashboard.php"); // 🔥 AQUÍ TE MANDA AL MENÚ
    } else {
        echo "Contraseña incorrecta";
    }

} else {
    echo "Usuario no encontrado";
}
?>
?>