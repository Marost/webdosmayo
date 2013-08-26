<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$tipo=2;
$handle=fopen($_FILES["uploaded"]["tmp_name"],"r") ;

mysql_query("DELETE FROM  DM_tarifario WHERE tipo=$tipo");

while(feof($handle) == false ){
    $data = fgetcsv($handle,1000,",");
    mysql_query ("INSERT INTO DM_tarifario(titulo, precio, tipo) VALUES ('".htmlspecialchars(mysql_real_escape_string($data[0]))."', '".mysql_real_escape_string($data[1])."', $tipo)") or die (mysql_error());
}

mysql_query("DELETE FROM  DM_tarifario WHERE precio=0");
mysql_query("DELETE FROM  DM_tarifario WHERE tipo=0");

fclose ($handle) ;

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}


?>