<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $mensaje = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $_POST['mensaje'];

        if (mail('12782@utl.edu.mx', 'Formulario Rellenado', $mensaje)) {
            echo "Correo enviado";
        } else {
            echo "Error al enviar el correo";
        }
    } else {
        echo "Error: Acceso no autorizado";
    }
?>