<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "hola@devs.com.pe";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['email']) ||
!isset($_POST['nombre']) ||
!isset($_POST['celular']) ||
!isset($_POST['mensaje'])) {

echo "
	<html>
		<head>
			<title>DEVS</title>
			<link href='css/bootstrap.css' rel='stylesheet'>
		</head>
		<body>
			<div style='margin:40vh;text-align:center'>
				<p>Ocurrió un error, por favor revisa los campos</p><br>
				<a href='form.html'>
					<button type='submit' class='btn btn-default center-block'>Regresar</button>
				</a>
			</div>
		</body>
	</html>";
	die();
}
if($_POST['email'] == null || $_POST['nombre'] == null || $_POST['celular'] == null){
	echo "
	<html>
		<head>
			<title>DEVS</title>
			<link href='css/bootstrap.css' rel='stylesheet'>
		</head>
		<body>
			<div style='margin:40vh;text-align:center'>
				<p>Por favor Rellena los campos obligatorios (*)</p><br>
				<a href='form.html'>
					<button type='submit' class='btn btn-default center-block'>Regresar</button>
				</a>
			</div>
		</body>
	</html>";
	die();
}

$email_message = "CONTACTO DESDE WEB DEVS:\n\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Celular: " . $_POST['celular'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "
<html>
<head>
	<title>DEVS</title>
	<link href='css/bootstrap.css' rel='stylesheet'>
</head>
<body>
	<div style='margin:40vh;text-align:center'>
		<p>¡Gracias por contactarnos!</p><br>
		<p>¡Un asesor se comunicará contigo a la brevedad!</><br>
		<a href='index.html'>
			<button type='submit' class='btn btn-default center-block'>Regresar</button>
		</a>
	</div>
</body>
</html>";
}
?>