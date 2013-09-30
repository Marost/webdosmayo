<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//VARIABLES URL
$Url_NotID=$_REQUEST["not"];

mysql_query("DELETE FROM ".$tabla_suf."_transp_s_cont WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?not=$Url_NotID&mensaje=6");
} else {
	mysql_close($conexion);
	header("Location:listar.php?not=$Url_NotID&mensaje=3");
}

?>