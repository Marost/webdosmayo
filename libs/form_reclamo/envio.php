<?php
/*include("../../panel@hndm/conexion/conexion.php");*/

//VARIABLES - DATOS DE LA ASOCIACIÓN
$rec_nombre=$_POST["rec_nombre"];
$rec_domicilio=$_POST["rec_domicilio"];
$rec_dni=$_POST["rec_dni"];
$rec_telefono=$_POST["rec_telefono"];
$rec_email=$_POST["rec_email"];
$rec_descripcion=$_POST["rec_descripcion"];
$rec_detalle=$_POST["rec_detalle"];
$rec_fecha=date("d")."/".date("m")."/".date("Y");

//GUARDAR EN LA BASE DE DATOS
/*mysql_query("INSERT INTO DM_escribanos (nombre,
email,
tipo_mensaje,
mensaje) VALUES ('$nombre',
'$email',
'$mensaje_tipo',
'".htmlspecialchars($mensaje)."')", $conexion);*/
	
$body = '<!DOCTYPE HTML> <html lang="es"> <head> <meta charset="utf-8">
<title>Mensaje</title>
<style type="text/css">
	body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
	body{ margin:0;}
</style>
</head>
<body>
<h2>Libro de Reclamaciones</h2>
<p><strong>Fecha:</strong> '.$rec_fecha.'</p>
<p></p>
<h3>Identificación de Usuario</h3>
<p><strong>Nombre:</strong> '.$rec_nombre.'</p>
<p><strong>Domicilio:</strong> '.$rec_domicilio.'</p>
<p><strong>DNI / CE:</strong> '.$rec_dni.'</p>
<p><strong>Teléfono:</strong> '.$rec_telefono.'</p>
<p><strong>E-mail:</strong> '.$rec_email.'</p>
<p></p>
<h3>Identificación de la Atención</h3>
<p><strong>Descripción:</strong> '.$rec_descripcion.'</p>
<p></p>
<h3>Acciones Adoptadas por la Entidad</h3>
<p><strong>Detalle:</strong> '.$rec_detalle.'</p>

</body>
</html>';
	
$from="librodereclamaciones@hdosdemayo.gob.pe";
$asunto="HNDM | Mensaje";
$headers= "From: HNDM <".strip_tags($from)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>