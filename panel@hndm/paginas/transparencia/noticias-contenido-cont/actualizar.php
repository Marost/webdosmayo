<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//VARIABLES URL
$Url_NotID=$_REQUEST["not"];

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_transp_s_cont SET titulo='".htmlspecialchars($titulo)."', 
contenido='$contenido', 
dato_usuario='$usuario_user', 
fecha_publicacion='$fecha_pub' WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?not=$Url_NotID&mensaje=2");
}

?>