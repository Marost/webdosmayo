<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$precio=$_POST["precio"];
$tipo=$_POST["categoria"];

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_tarifario SET titulo='".htmlspecialchars($titulo)."', 
precio=$precio, 
tipo=$tipo WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}

?>