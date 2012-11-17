<?php
//VALORES PARA CONEXION
$bd_servidor="localhost";
$bd_usuario="marost2_admin";
$bd_pass="master@18073";
$bd_basedatos="marost2_hndmWP";

//CONEXION CON EL SERVIDOR
$conexion=mysql_connect($bd_servidor,$bd_usuario,$bd_pass);
mysql_select_db($bd_basedatos,$conexion);

//ZONA HORARIA
date_default_timezone_set('America/Lima');

//VARIABLES GLOBALES BD
global $bd_servidor;
global $bd_usuario;
global $bd_pass;
global $bd_basedatos;

//VARIABLES GLOBALES
global $carpeta_admin;
global $tabla_suf;
global $sesion_pre;
global $rst_empresa;
global $fila_empresa;
global $rst_prv_user;
global $fila_prv_user;
global $usuario_user;
global $usuario_nombre;
global $usuario_apellido;
global $usuario_email;
global $web;
global $web_nombre;
global $fechaActual;

//VARIABLES
$carpeta_admin="panel@hndm";
$tabla_suf="DM";
$sesion_pre="DMs";
$fechaActual=date("Y-m-d H:i:s");

//EMPRESA
$rst_empresa=mysql_query("SELECT * FROM ".$tabla_suf."_empresa WHERE id=1;", $conexion);
$fila_empresa=mysql_fetch_array($rst_empresa);
$web=$fila_empresa["web"];
$web_nombre=$fila_empresa["nombre"];

if ($_SESSION["user-".$sesion_pre.""]<>""){
	$usuario_user=$_SESSION["user-".$sesion_pre.""];
	$usuario_nombre=$_SESSION["user_nombre-".$sesion_pre.""];
	$usuario_apellido=$_SESSION["user_apellido-".$sesion_pre.""];
	$usuario_email=$_SESSION["user_email-".$sesion_pre.""];
	
	//PRIVILEGIOS
	//$rst_prv_user=mysql_query("SELECT * FROM ".$tabla_suf."_usuario_privilegios WHERE usuario='".$usuario_user."'", $conexion);
	//$fila_prv_user=mysql_fetch_array($rst_prv_user);	
}
?>