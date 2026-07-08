<?php
include("conexion.php");

$token = $_GET['token'];
?>

<h3>Nueva contraseña</h3>

<form method="POST">
    <input type="password" name="nueva" placeholder="Nueva contraseña" required>
    <button type="submit">Actualizar</button>
</form>

<?php
if ($_POST) {
    $nueva = password_hash($_POST['nueva'], PASSWORD_DEFAULT);

    $conexion->query("UPDATE usuarios SET password='$nueva', token=NULL WHERE token='$token'");

    echo "✅ Contraseña actualizada";
}
?>