<?php

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['comentarios'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];

    // Set the SMTP settings
    ini_set("smtp_server", "localhost");
    ini_set("smtp_port", 25);

    $destinatario = "jodacr2004@gmail.com"; // Replace with your email address
    $asunto = "Contacto desde el formulario";
    $mensaje = "Nombre: $nombre\nCorreo electrónico: $email\nComentarios: $comentarios";

    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Gracias por su mensaje. Nos pondremos en contacto con usted pronto.";
    } else {
        echo "Se produjo un error al enviar el correo electrónico. Por favor, intente nuevamente más tarde.";
    }
} else {
    echo "El formulario no se envió correctamente. Por favor, complete todos los campos.";
}

?>

