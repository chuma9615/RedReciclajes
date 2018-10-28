<?php
$remitente = $_POST['email'];
$destinatario = 'bgimenez@redreciclajes.cl'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta'; // acá se puede modificar el asunto del mail
$recaptcha = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';

$data = array(
  'secret' => 'OJO',
  'response' => $recaptcha
);

$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);

if ($captcha_success->success) {
  $cuerpo = "Nombre y apellido: " . $_POST["name"] . "\r\n";
  $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["message"] . "\r\n";
//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo.
// Si se agrega un campo al formulario, hay que agregarlo acá.


  $headers .= "From: ".$_POST['name'];

  mail($destinatario, $asunto, $cuerpo, $headers);
	echo "<script type='text/javascript'>alert('Mensaje enviado!');</script>";

  exit;

} else {
  echo "<script type='text/javascript'>alert('Reintenta usar el captcha!');</script>";
  exit;
}


?>
