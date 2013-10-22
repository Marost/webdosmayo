<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//VARIABLES URL
$Url_TranspID=$_REQUEST["transp"];
$Url_NotID=$_REQUEST["not"];

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$enlace=$_POST["enlace"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_transp_s_enlace (url,
titulo, 
enlace, 
dato_usuario, 
fecha_publicacion,
noticia_sub) VALUES('$url',
'".htmlspecialchars($titulo)."',
'$enlace',
'$usuario_user', 
'$fecha_pub',
$Url_NotID);",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&not=$Url_NotID&mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&not=$Url_NotID&mensaje=1");
}

?>