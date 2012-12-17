<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$enlace=$_POST["enlace"];

//SELECCIONAR REGISTRO PARA VERIFICAR IMAGEN
$rst_query=mysql_query("SELECT * FROM ".$tabla_suf."_lista_empresas WHERE id=$idnoticia LIMIT 1;", $conexion);
$fila_query=mysql_fetch_array($rst_query);

if($_POST['flash_uploader_0_tmpname']==""){
	$imagen=$_POST["imagen_actual"];
	$carpeta_imagen=$_POST["carpeta_imagen"];
}elseif($_POST['flash_uploader_0_tmpname']<>""){
	$imagen=$_POST['flash_uploader_0_tmpname'];
	$carpeta_imagen=fechaCarpeta()."/";
}

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_lista_empresas SET titulo='".htmlspecialchars($titulo)."',
imagen='$imagen',
carpeta_imagen='$carpeta_imagen',
enlace='$enlace' WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}

?>