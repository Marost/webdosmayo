<?php
include ("../../../conexion/conexion.php");

$idcampania=$_REQUEST["campania"];

mysql_query("DELETE FROM ".$tabla_suf."_campania_noticia WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=6&campania=$idcampania");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=3&campania=$idcampania");
}

?>