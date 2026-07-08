<?php
include("conexion.php");

if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, password)
            VALUES ('$nombre', '$correo', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <h2>Registro</h2>
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="email" name="correo" placeholder="Correo" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <button type="submit">Registrar</button>
</form>