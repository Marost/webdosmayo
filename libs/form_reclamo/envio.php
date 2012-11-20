<?php
include("../../panel@hndm/conexion/conexion.php");

//VARIABLES - DATOS DE LA ASOCIACIÓN
$rec_nombre=$_POST["rec_nombre"];
$rec_apellidos=$_POST["rec_apellidos"];
$rec_dni=$_POST["rec_dni"];
$rec_edad=$_POST["rec_edad"];
$rec_ocupacion=$_POST["rec_ocupacion"];
$rec_email=$_POST["rec_email"];
$rec_telmovil=$_POST["rec_telmovil"];
$rec_telfijo=$_POST["rec_telfijo"];
$rec_direccion=$_POST["rec_direccion"];
$rec_prov_nombre=$_POST["rec_prov_nombre"];
$rec_prov_apellidos=$_POST["rec_prov_apellidos"];
$rec_prov_dni=$_POST["rec_prov_dni"];
$rec_prov_email=$_POST["rec_prov_email"];
$rec_prov_telefono=$_POST["rec_prov_telefono"];
$rec_prov_direccion=$_POST["rec_prov_direccion"];
$rec_fecha=$_POST["rec_fecha"];
$rec_caso=$_POST["rec_caso"];
$rec_solicita=$_POST["rec_solicita"];

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
<h2>Reclamo</h2>
<h3>DATOS DEL RECLAMANTE</h3>
<p><strong>Nombre:</strong> '.$rec_nombre.'</p>
<p><strong>Apellidos:</strong> '.$rec_apellidos.'</p>
<p><strong>DNI:</strong> '.$rec_dni.'</p>
<p><strong>Edad:</strong> '.$rec_edad.'</p>
<p><strong>Ocupación:</strong> '.$rec_ocupacion.'</p>
<p><strong>Email:</strong> '.$rec_email.'</p>
<p><strong>Telefono Movil:</strong> '.$rec_telmovil.'</p>
<p><strong>Telefono Fijo:</strong> '.$rec_telfijo.'</p>
<p><strong>Dirección:</strong> '.$rec_direccion.'</p>
<p></p>
<h3>DATOS DEL PROVEEDOR RECLAMADO</h3>
<p><strong>Nombres:</strong> '.$rec_prov_nombre.'</p>
<p><strong>Apellidos:</strong> '.$rec_prov_apellidos.'</p>
<p><strong>DNI:</strong> '.$rec_prov_dni.'</p>
<p><strong>Email:</strong> '.$rec_prov_email.'</p>
<p><strong>Telefono:</strong> '.$rec_prov_telefono.'</p>
<p><strong>Dirección:</strong> '.$rec_prov_direccion.'</p>
<p></p>
<h3>MOTIVO DE RECLAMO</h3>
<p><strong>Fecha de ocurrencia:</strong> '.$rec_fecha.'</p>
<p><strong>Cuéntenos su caso:</strong> '.$rec_caso.'</p>
<p><strong>Solicita:</strong> '.$rec_solicita.'</p>

</body>
</html>';
	
$from="marcolopez49@hotmail.com";
$asunto="HNDM | Mensaje";
$headers= "From: HNDM <".strip_tags($from)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>