<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_dirtelefono SET titulo='".htmlspecialchars($titulo)."' 
	WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0){
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}

?>