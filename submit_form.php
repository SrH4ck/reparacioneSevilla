<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario y sanitizarlos
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar los datos
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Configurar el correo
        $para = "antonio.iesgerena@gmail.com";  // Reemplaza con tu dirección de correo
        $asunto = "Nuevo mensaje del formulario de contacto";
        $cabeceras = "From: $email\r\n";
        $cabeceras .= "Reply-To: $email\r\n";
        $cabeceras .= "Content-Type: text/plain; charset=utf-8\r\n";
        
        // Cuerpo del correo
        $cuerpo = "Nombre: $nombre\n";
        $cuerpo .= "Correo: $email\n";
        $cuerpo .= "Mensaje:\n$mensaje\n";

        // Enviar el correo
        if (mail($para, $asunto, $cuerpo, $cabeceras)) {
            echo "Correo enviado exitosamente.";
        } else {
            echo "Hubo un error al enviar el correo.";
        }
    } else {
        echo "Correo electrónico no válido.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
