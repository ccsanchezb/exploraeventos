<?php 

if ($_POST) {
    $contenido = "Nombre Cotizante: ".$_POST['nombre'];
    $contenido .= "Correo Electronico: ".$_POST['email'];
    $contenido .= "Telefono Fijo: ".$_POST['fijo'];
    $contenido .= "Telefono Movil: ".$_POST['movil'];
    $contenido .= "Ciudad de residencia: ".$_POST['ciudad'];
    $contenido .= "Referido por: ".$_POST['referidos'];
    $contenido .= "Comentarios: ".$_POST['comentarios'];
    $contenido .= "Opciones para el menu del evento: ".$_POST['menu'];
    $contenido .= "Logistica para el evento: ".$_POST['logistica'];
    $contenido .= "Alquiler de menage: ".$_POST['menaje'];
    $contenido .= "Servicios Tecnicos: ".$_POST['tecnico'];
}
else
{
    echo "No esta llegando nada";
}

//incluimos la clase PHPMailer
require_once('phpmailer/class.phpmailer.php');


//instancio un objeto de la clase PHPMailer
$mail = new PHPMailer(); // defaults to using php "mail()"

//defino el cuerpo del mensaje en una variable $body
//se trae el contenido de un archivo de texto
//también podríamos hacer $body="contenido...";
$body = $contenido;
//Esta línea la he tenido que comentar
//porque si la pongo me deja el $body vacío
// $body = preg_replace('/[]/i','',$body);

//defino el email y nombre del remitente del mensaje
$mail->SetFrom($_POST['email'], $_POST['nombre']);

//Defino la dirección de correo a la que se envía el mensaje
//la añado a la clase, indicando el nombre de la persona destinatario
$mail->AddAddress("ccsanchez80@misena.edu.co", "Prueba");

//Añado un asunto al mensaje
$mail->Subject = "Nueva Cotizacion para evento";

//inserto el texto del mensaje en formato HTML
$mail->MsgHTML($body);


//envío el mensaje, comprobando si se envió correctamente
if(!$mail->Send()) {
echo "Error al enviar el mensaje: " . $mail->ErrorInfo;
} else {
echo "<script>";
echo "alert(Mensaje enviado con exito!!)";
echo "window.location.relapce('index.php')";
echo "</script>";
}

?>