<?php
session_start();
include("conexion.php");

// Obtener datos del formulario
$correo = $_POST['correo'];
$password = $_POST['password'];

// Consulta a la base de datos
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si existe el usuario
if(mysqli_num_rows($resultado) > 0){
    
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Guardar datos en sesión
    $_SESSION['usuario'] = $usuario;

    // Redirigir al dashboard
    header("Location: dashboard.php");
    exit();

} else {
    echo "Correo o contraseña incorrectos";
}
?>