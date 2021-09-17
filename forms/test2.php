<?php

// error_reporting(0);
ini_set( 'display_errors', 1 );
error_reporting( 0 );
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = 'From: ' . $correo_electronico . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por :" . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "Asunto: " . $subject . " \r\n";
$mensaje .= "Mensaje: " . $message . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

// $para = 'Rodrigo.Gabriel.Reynoso@gmail.com';
$para = 'Francoadusso@hotmail.com';
$asunto = 'DE LA PAGINA WEB';

if(mail($para, $asunto, utf8_decode($mensaje), $header)){
echo 'Mensaje enviado correctamente, pronto nos pondremos en contacto contigo!';
echo "<br>";
echo 'Recorda que podes consultarnos por Whatsapp.';
}else{
    echo 'Error, por favor volver a completar el formulario o intentar con otro medio de comunicacion.';
}

?>