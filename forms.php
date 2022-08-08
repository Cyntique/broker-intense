<?php  

// Llamando a los campos
    $name = $_POST['name'];
    $apellido  = $_POST['apellido'];
    $dni = $_POST['dni'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];
    $patente = $_POST['patente'];
    $gnc = $_POST['gnc'];
    $comercial = $_POST['comercial'];
    $alarma = $_POST['alarma'];


// Datos para el correo
$destinatario = "jose@intensebroker.com";
$asunto = "Solicitud de cotización";
$encabezados = "Enviado: jose@intensebroker.com\r\n"; 

$carta = "De: $name \nApellido: $apellido\n";
$carta .= "DNI: $dni \n";
$carta .= "Email: $email \n";
$carta .= "Patente: $patente \n";
$carta .= "¿Tiene GNC?: $gnc \n";
$carta .= "¿Uso comercial?: $comercial \n";
$carta .= "¿Alarma?: $alarma \n";

// Enviando Mensaje
mail($destinatario, $asunto, $carta, $encabezados);
header('Location:/scripts/envio.html');

?>