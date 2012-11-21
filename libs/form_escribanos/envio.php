<?php
include("../../panel@hndm/conexion/conexion.php");

//VARIABLES - DATOS DE LA ASOCIACIÓN
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];
$mensaje_tipo=$_POST["mensaje_tipo"];

//GUARDAR EN LA BASE DE DATOS
mysql_query("INSERT INTO DM_escribanos (nombre,
email,
tipo_mensaje,
mensaje) VALUES ('$nombre',
'$email',
'$mensaje_tipo',
'".htmlspecialchars($mensaje)."')", $conexion);
	
$body = '<!DOCTYPE HTML> <html lang="es"> <head> <meta charset="utf-8">
<title>Mensaje</title>
<style type="text/css">
	body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
	body{ margin:0;}
</style>
</head>
<body>
<h2>Escribanos</h2>
<p><strong>Nombre:</strong> '.$nombre.'</p>
<p><strong>E-mail:</strong> '.$email.'</p>
<p><strong>Tipo:</strong> '.$mensaje_tipo.'</p>
<p><strong>Mensaje:</strong> '.$mensaje.'</p>

</body>
</html>';
	
$from="centraldeconsultas@hdosdemayo.gob.pe";
$asunto="HNDM | Mensaje";
$headers= "From: HNDM <".strip_tags($from)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>