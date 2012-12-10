<?php
/*include("../../panel@hndm/conexion/conexion.php");*/

//VARIABLES - DATOS DE LA ASOCIACIÓN
$rec_fecha=date("d")."/".date("m")."/".date("Y")." ".date("H:m");
$rec_nombre=$_POST["nombre"];
$rec_domicilio=$_POST["domicilio"];
$rec_distrito=$_POST["distrito"];
$rec_dni=$_POST["dni"];
$rec_edad=$_POST["edad"];
$rec_sexo=$_POST["sexo"];
$rec_telefono=$_POST["telefono"];
$rec_email=$_POST["email"];
$rec_identificacion=$_POST["identificacion"];
$rec_queja_sugerencia=$_POST["queja-sugerencia"];
$rec_atencion_brindada=$_POST["atencion-brindada"];
$rec_tipo_atencion=$_POST["tipo-atencion"];
$rec_presenta_queja=$_POST["presenta-queja"];
$rec_tipo_personal=$_POST["tipo-personal"];
$rec_tipo_via=$_POST["tipo-via"];
$rec_motivo_queja=$_POST["motivo-queja"];
$rec_unidad_servicio=$_POST["unidad-servicio"];
$rec_datos_personal=$_POST["datos-personal"];
$rec_dt_personal=$_POST["dt-personal"];
$rec_descripcion=$_POST["rec_descripcion"];
$rec_detalle=$_POST["rec_detalle"];

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
<p><strong>Fecha y Hora:</strong> '.$rec_fecha.'</p>
<p></p>
<h3>Identificación de Usuario</h3>
<p><strong>Nombres de la persona natural o razón social de la persona jurídica:</strong> '.$rec_nombre.'</p>
<p><strong>Domicilio:</strong> '.$rec_domicilio.'</p>
<p><strong>Distrito:</strong> '.$rec_distrito.'</p>
<p><strong>DNI / CE:</strong> '.$rec_dni.'</p>
<p><strong>Edad:</strong> '.$rec_edad.'</p>
<p><strong>Sexo:</strong> '.$rec_sexo.'</p>
<p><strong>Teléfono:</strong> '.$rec_telefono.'</p>
<p><strong>E-mail:</strong> '.$rec_email.'</p>
<p><strong>Identificación del bien contratado:</strong> '.$rec_identificacion.'</p>
<p><strong>Motivo de la Queja o Sugerencia:</strong> '.$rec_queja_sugerencia.'</p>
<p><strong>Identificación de la Atención Brindada:</strong> '.$rec_atencion_brindada.'</p>
<p><strong>Tipo Atencion:</strong> '.$rec_tipo_atencion.'</p>
<p><strong>Presenta Queja:</strong> '.$rec_presenta_queja.'</p>
<p><strong>Tipo Personal:</strong> '.$rec_tipo_personal.'</p>
<p><strong>Tipo Vía:</strong> '.$rec_tipo_via.'</p>
<p><strong>Motivo de Queja:</strong> '.$rec_motivo_queja.'</p>
<p><strong>Unidad, Servicio:</strong> '.$rec_unidad_servicio.'</p>
<p><strong>Datos del personal a quien dirigen el reclamo:</strong> '.$rec_datos_personal.'</p>
<p>'.$rec_dt_personal.'</p>

</body>
</html>';
	
$from="librodereclamaciones@hdosdemayo.gob.pe";
//$from="marcolopez49@hotmail.com";
$asunto="HNDM | Mensaje";
$headers= "From: HNDM <".strip_tags($from)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

header("Location: ../../libro-reclamaciones-form.php");

?>