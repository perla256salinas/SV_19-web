<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>

<h2>Bienvenida <?php echo $_SESSION['usuario']; ?></h2>
<a href="logout.php">Cerrar sesión</a>