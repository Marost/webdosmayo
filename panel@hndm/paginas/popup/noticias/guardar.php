<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//IMAGEN O VIDEO
if($_POST['flash_uploader_0_tmpname']<>""){
	$imagen=$_POST['flash_uploader_0_tmpname'];
	$imagen_carpeta=fechaCarpeta()."/";	
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_popup (titulo, 
imagen, 
imagen_carpeta,
dato_usuario, 
fecha_publicacion) VALUES('".htmlspecialchars($titulo)."',
'$imagen', 
'$imagen_carpeta',
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