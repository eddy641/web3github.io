<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $razon = $_POST['razon'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
    $to = "tu_correo@ejemplo.com";
    $subject = "Nuevo mensaje de contacto: $asunto";
    $body = "Nombre: $nombre $apellido\nCorreo: $email\nTeléfono: $telefono\nRazón: $razon\nMensaje:\n$mensaje";
    $headers = "From: $email";

    // Enviar correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
