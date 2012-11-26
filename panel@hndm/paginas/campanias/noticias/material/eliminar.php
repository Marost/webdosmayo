<?php
include ("../../../../conexion/conexion.php");

//VARIABLES
$tipo=$_REQUEST["tipo"];
$idnoticia=$_REQUEST["noticia"];

if($tipo=="all"){
	mysql_query("DELETE FROM ".$tabla_suf."_campania_material WHERE campania=$idnoticia;",$conexion);
}else{
	mysql_query("DELETE FROM ".$tabla_suf."_campania_material WHERE id=".$_REQUEST["id"].";",$conexion);
}

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=6&campania=$idnoticia");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=3&campania=$idnoticia");
}

?>