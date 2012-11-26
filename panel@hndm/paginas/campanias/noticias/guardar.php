<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$contenido=$_POST["contenido"];
$fecha=fechaLarga();
$hora=date("H:i");
$carpeta_imagen=fechaCarpeta()."/";

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//IMAGEN O VIDEO
if($_POST['flash_uploader_0_tmpname']<>""){
	$imagen=$_POST['flash_uploader_0_tmpname'];
	$thumb=PhpThumbFactory::create("../../../../imagenes/upload/".$carpeta_imagen."".$imagen."");
	$thumb->adaptiveResize(110,65);
	$thumb->save("../../../../imagenes/upload/".$carpeta_imagen."thumb200/".$imagen."", "jpg");
}

if($_POST['flash_uploader_1_tmpname']<>""){
	$imagen_portada=$_POST['flash_uploader_1_tmpname'];
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_campania (url,
titulo, 
contenido, 
imagen,
imagen_portada,
carpeta_imagen,
dato_fecha, 
dato_hora, 
dato_usuario, 
fecha_publicacion) VALUES('$url',
'".htmlspecialchars($titulo)."',
'$contenido',
'$imagen',
'$imagen_portada',
'$carpeta_imagen',
'$fecha', 
'$hora',
'$usuario_user', 
'$fecha_pub');",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>