<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link rel="stylesheet" href="estilos.css">

<style>
body{
    margin:0;
    font-family:'Segoe UI', Arial, sans-serif;
    background:#9CAF88; /* 🌿 Sage */
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

/* CONTENEDOR */
.login-box{
    background:#F1F8E9; /* 🍃 Pale Lime */
    padding:40px 30px;
    width:320px;
    border-radius:18px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.12);
    animation:fade 0.6s ease;
}

/* ANIMACIÓN */
@keyframes fade{
    from{opacity:0; transform:translateY(25px);}
    to{opacity:1;}
}

/* LOGO */
.logo{
    width:130px;
    border-radius:25px;
    margin-bottom:15px;
}

/* TÍTULO */
h2{
    margin-bottom:15px;
    color:#2f3e2f;
    font-weight:600;
}

/* INPUTS */
input{
    width:100%;
    padding:13px;
    margin:10px 0;
    border:1px solid #c5d6b4;
    border-radius:10px;
    background:#ffffff;
    transition:all 0.3s ease;
    font-size:14px;
}

input:focus{
    outline:none;
    border-color:#4A7C59;
    box-shadow:0 0 0 2px rgba(74,124,89,0.15);
}

/* BOTÓN */
button{
    width:100%;
    padding:13px;
    margin-top:10px;
    background:#1B4332; /* 🌲 Dark Forest */
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-weight:600;
    transition:all 0.3s ease;
}

button:hover{
    background:#163d2a;
    transform:translateY(-1px);
}

/* LINK */
a{
    display:block;
    margin-top:15px;
    font-size:13px;
    text-decoration:none;
    color:#4A7C59;
}

a:hover{
    color:#1B4332;
}

</style>

</head>
<body>

<div class="login-box">

    <!-- TU IMAGEN -->
    <img src="img/icono.png" class="logo">

    <h2>Inicio de Sesión</h2>

    <form action="validar.php" method="POST">

        <input type="text" name="correo" placeholder="Correo" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Ingresar</button>

    </form>

    <a href="recuperar.php">¿Olvidaste tu contraseña?</a>

</div>

</body>
</html>