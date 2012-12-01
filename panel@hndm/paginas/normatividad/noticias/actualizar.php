<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$tipo=$_POST["tipo"];
$observaciones=$_POST["contenido"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";
$fecha_separacion=explode("-", $_POST["fecha"]);
$fecha_anio=$fecha_separacion[0];
$fecha_mes=$fecha_separacion[0]."-".$fecha_separacion[1];

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_normatividad SET titulo='".htmlspecialchars($titulo)."', 
tipo='".htmlspecialchars($tipo)."', 
observaciones='$observaciones', 
fecha_publicacion='$fecha_pub',
fecha_anio='$fecha_anio', 
fecha_mes='$fecha_mes', 
dato_usuario='$usuario_user' WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}

?>