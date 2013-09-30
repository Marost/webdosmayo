<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$categoria=$_POST["categoria"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_transp_sub (url,
titulo, 
fecha_publicacion,
dato_usuario,
categoria) VALUES('$url',
'".htmlspecialchars($titulo)."',
'$fecha_pub',
'$usuario_user',
'$categoria');",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>