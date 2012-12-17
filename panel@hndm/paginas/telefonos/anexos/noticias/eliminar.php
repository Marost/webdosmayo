<?php
include ("../../../../conexion/conexion.php");

$id_anexo=$_REQUEST["anx"];

mysql_query("DELETE FROM ".$tabla_suf."_dirtelefono_doctor WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=6&anx=$id_anexo");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=3&anx=$id_anexo");
}

?>