<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$tipo=$_POST["tipo"];
$observaciones=$_POST["contenido"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";
$fecha_anio=date("Y");
$fecha_mes=date("Y-m");

//CREACION DE CARPETA PARA GUARDAR DOCUMENTOS
$nombre_carpeta=getUrlAmigable(eliminarTextoURL($titulo))."-".$fecha_mes;
mkdir("../../../../documentos/".$nombre_carpeta, 0777);
$nombre_carpeta_final=getUrlAmigable(eliminarTextoURL($titulo))."-".$fecha_mes."/";

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_sala_situacional (titulo, 
tipo, 
observaciones,
carpeta_documentos,
fecha_publicacion, 
fecha_anio, 
fecha_mes, 
dato_usuario) VALUES('".htmlspecialchars($titulo)."',
'$tipo',
'$observaciones', 
'$nombre_carpeta_final',
'$fecha_pub', 
'$fecha_anio', 
'$fecha_mes',
'$usuario_user');",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>