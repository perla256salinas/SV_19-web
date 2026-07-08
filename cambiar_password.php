<?php
include("conexion.php");

$token = $_GET['token'];

$sql = "SELECT * FROM usuarios WHERE reset_token='$token'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Token inválido o expirado");
}

if ($_POST) {
    $nueva = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("UPDATE usuarios SET password='$nueva', reset_token=NULL WHERE reset_token='$token'");

    echo "Contraseña actualizada correctamente";
    exit();
}
?>

<form method="POST">
    <h2>Cambiar contraseña</h2>
    <input type="password" name="password" placeholder="Nueva contraseña" required>
    <button type="submit">Actualizar</button>
</form>