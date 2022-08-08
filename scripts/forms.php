<?php

    // Submitted form data
    $name   = $_POST['name'];
    $apellido  = $_POST['apellido'];
    $dni = $_POST['dni'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];
    $patente = $_POST['patente'];
    $gnc = $_POST['gnc'];
    $comercial = $_POST['comercial'];
    $alarma = $_POST['alarma'];

    $correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
        if (!$correo) {
    echo "Correo inválido. Intente con otro correo.";
    exit;
    }
    
    /*
     * Send email to admin
     */
    $to     = "info@netcy.ar";
    $asunto= "Solicitud de cotización";

    $datos = "De: $name\nApellido: $apellido\nDNI: $dni\nCodigo Postal: $cp\nEmail: $email\nPatente: $patente\nEquipo GNC: $gnc\n¿Uso Comercial?: $comercial\n¿Alarma?: $alarma\n";
    $mensaje: "Recibiste una solicitud de cotización aqui los detalles: \n$datos";
    
   $headers= "Enviado desde: info@netcy.ar";
   $headers .= "Desde $name  <" . $correo . ">\r\n";

   $resultado = mail($to, $asunto, $mensaje, $headers);

   if ($resultado) {
    echo "<h1>Mensaje enviado, ¡Gracias por contactarme!</h1>";
    echo "<p>Tu mensaje se ha enviado correctamente.</p><h2>Importante</h2><p>Revisa tu bandeja de SPAM, en ocasiones mis respuestas quedan ahí. </p>";
} else {
    echo "Tu mensaje no se ha enviado. Intenta de nuevo.";
}