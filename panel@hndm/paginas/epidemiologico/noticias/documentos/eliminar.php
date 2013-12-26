<?php
include ("../../../../conexion/conexion.php");

//VARIABLES
$tipo=$_REQUEST["tipo"];
$idnoticia=$_REQUEST["noticia"];
$idselect=$_REQUEST["id"];

//SELECCIONAR NOTA PRINCIPAL
$rst_nota=mysql_query("SELECT * FROM ".$tabla_suf."_epidemiologico WHERE id=$idnoticia", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$nota_carpeta=$fila_nota["carpeta_documentos"];

//SELECCIONAR ARCHIVO
$rst_archivo=mysql_query("SELECT * FROM ".$tabla_suf."_epidemiologico_documentos WHERE id=$idselect", $conexion);
$fila_archivo=mysql_fetch_array($rst_archivo);

//VARIABLES
$archivo_nombre=$fila_archivo["documento"];

//URL ARCHIVO
$UrlArchivo="../../../../../documentos/".$nota_carpeta."".$archivo_nombre;

unlink($UrlArchivo);

mysql_query("DELETE FROM ".$tabla_suf."_epidemiologico_documentos WHERE id=$idselect;",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=6&noticia=$idnoticia");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=3&noticia=$idnoticia");
}

?>