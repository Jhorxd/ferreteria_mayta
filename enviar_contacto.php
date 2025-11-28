<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

// Validar campos
if (!isset($_POST['apellidos'], $_POST['nombres'], $_POST['correo'], $_POST['celular'], $_POST['mensaje'])) {
    echo "Faltan campos.";
    exit;
}

$apellidos = $_POST['apellidos'];
$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$mensaje = nl2br($_POST['mensaje']);

$mail = new PHPMailer(true);

try {
    // CONFIG SMTP
    $mail->isSMTP();
    $mail->Host = 'mail.ferreteriaindustrialmayta.com'; // SMTP de tu hosting
    $mail->SMTPAuth = true;
    $mail->Username = 'ventas@ferreteriaindustrialmayta.com'; // TU CORREO
    $mail->Password = '.{IsP)#Mowad'; // Contraseña del correo
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465;

    // Remitente
    $mail->setFrom('ventas@ferreteriaindustrialmayta.com', 'Formulario Web');

    // Destino (puede ser tu Gmail o el mismo correo)
    $mail->addAddress('ventas@ferreteriaindustrialmayta.com');

    // Contenido
    $mail->isHTML(true);
    $mail->Subject = "Nuevo mensaje desde el formulario web";
    $mail->Body = "
        <h2>Nuevo mensaje desde la web</h2>
        <p><strong>Apellidos:</strong> $apellidos</p>
        <p><strong>Nombres:</strong> $nombres</p>
        <p><strong>Correo:</strong> $correo</p>
        <p><strong>Celular:</strong> $celular</p>
        <p><strong>Mensaje:</strong><br>$mensaje</p>
    ";

    $mail->send();
    echo "Mensaje enviado correctamente.";
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
}
