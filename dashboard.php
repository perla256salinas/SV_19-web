<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menú</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI', Arial, sans-serif;
    display:flex;

    /* FONDO */
    background: url('img/descarga.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* SIDEBAR */
.sidebar{
    width:220px;
    background: rgba(75,54,33,0.95); /* café oscuro */
    color:#f5e6d3; /* beige */
    height:100vh;
    padding:20px;
}

.sidebar h2{
    margin-bottom:20px;
    color:#e6ccb2;
}

.sidebar a{
    display:block;
    color:#f5e6d3;
    text-decoration:none;
    margin:10px 0;
    padding:10px;
    border-radius:8px;
    transition:0.3s;
}

.sidebar a:hover{
    background:#a67c52; /* camel */
    color:white;
}

/* CONTENIDO */
.main{
    flex:1;
    padding:20px;
    background: rgba(60,40,20,0.6); /* tamarindo oscuro */
    color:#f5e6d3;
    backdrop-filter: blur(4px);
}

/* HEADER */
.header{
    background: rgba(166,124,82,0.9); /* camel */
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-radius:12px;
    color:white;
}

/* USUARIO */
.user{
    display:flex;
    align-items:center;
    gap:10px;
}

.user img{
    width:42px;
    border-radius:50%;
    border:2px solid #fff;
}

/* TARJETA */
.card{
    margin-top:20px;
    padding:20px;
    background: rgba(255,255,255,0.08);
    border-radius:12px;
    backdrop-filter: blur(6px);
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}


</style>

</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>☰ Menú</h2>

    <a href="dashboard.php">🏠 Inicio</a>
    <a href="usuarios.php">👥 Usuarios</a>
    <a href="login.php">🚪 Salir</a>
</div>

<!-- CONTENIDO -->
<div class="main">

    <div class="header">
        <div>Panel Principal</div>

        <div class="user">
            <img src="img/icono.png">
            <span><?php echo $_SESSION['usuario']['nombre']; ?></span>
        </div>
    </div>

    <div class="card">
        <h2>Bienvenido 👋</h2>
        <p>Esta es la presentación de tu página, como en tu dibujo.</p>
    </div>

</div>

</body>
</html>