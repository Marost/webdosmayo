<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//VARIABLES URL
$Url_TranspID=$_REQUEST["transp"];
$Url_NotID=$_REQUEST["not"];

mysql_query("DELETE FROM ".$tabla_suf."_transp_s_archivo WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&not=$Url_NotID&mensaje=6");
} else {
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&not=$Url_NotID&mensaje=3");
}

?>