<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

include("conexion.php");

// 🔥 IMPORTANTE
$correo = strtolower(trim($_POST['correo']));

// Buscar usuario
$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$result = $conexion->query($sql);

if($result->num_rows > 0){

    $token = bin2hex(random_bytes(16));

    $conexion->query("UPDATE usuarios SET token='$token' WHERE correo='$correo'");

    $link = "http://localhost/mi_sistema/restablecer.php?token=$token";

    $mail = new PHPMailer(true);

    try {
       $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'perlaesperanzasalinasvazquez@gmail.com';
$mail->Password = 'bdlcqhviwerfceew'; // ✅ SIN espacios
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

        $mail->setFrom('perlaesperanzasalinasvazquez@gmail.com', 'Sistema');
        $mail->addAddress($correo);

        $mail->isHTML(true);
        $mail->Subject = 'Recuperar contraseña';
        $mail->Body = "Haz clic aquí para cambiar tu contraseña: <a href='$link'>$link</a>";

        $mail->send();
        echo "✅ Correo enviado correctamente";

    } catch (Exception $e) {
        echo "❌ Error al enviar: " . $mail->ErrorInfo;
    }

}else{
    echo "❌ Correo no encontrado";
}
?>