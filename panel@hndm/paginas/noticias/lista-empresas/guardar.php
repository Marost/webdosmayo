<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$enlace=$_POST["enlace"];

//IMAGEN O VIDEO
if($_POST['flash_uploader_0_tmpname']<>""){
	$imagen=$_POST['flash_uploader_0_tmpname'];
	$carpeta_imagen=fechaCarpeta()."/";	
}else{
	$imagen=="";
	$carpeta_imagen="";
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_lista_empresas (titulo,
	imagen,
	carpeta_imagen,
	enlace) VALUES('".htmlspecialchars($titulo)."',
	'$imagen',
	'$carpeta_imagen',
	'$enlace');",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>