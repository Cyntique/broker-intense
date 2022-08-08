<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$mensaje = $_POST['message'];

// Datos para el correo
$destinatario = "jose@intensebroker.com";
$asunto = "Mensaje de la página de contacto";

$carta = "De: $nombre \n"; 
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:envio.html');

?>