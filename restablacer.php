<?php
include("conexion.php");

$token = $_GET['token'];
?>

<form action="actualizar_password.php" method="POST">
    <input type="hidden" name="token" value="<?php echo $token; ?>">
    <input type="password" name="password" placeholder="Nueva contraseña" required>
    <button>Cambiar contraseña</button>
</form>