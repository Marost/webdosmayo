<?php
session_start();
include("../../../../conexion/conexion.php");
include("../../../../conexion/funciones.php");
require_once('../../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$anexo=$_POST["anexo"];
$seccion=$_POST["seccion"];
$doctor=$_POST["doctor"];
$id_anexo=$_POST["anx"];

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_dirtelefono_doctor (anexo,
	seccion,
	doctor,
	directorio) VALUES('$anexo',
	'$seccion',
	'$doctor',
	$id_anexo);",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4&anx=$id_anexo");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1&anx=$id_anexo");
}

?>