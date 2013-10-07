<?php
include ("../../../conexion/conexion.php");

//VARIABLE URL
$Url_TranspID=$_REQUEST["transp"];

mysql_query("DELETE FROM ".$tabla_suf."_transp_sub WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&mensaje=6");
} else {
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&mensaje=3");
}

?>