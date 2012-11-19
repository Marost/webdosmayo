<?php
include ("../../../conexion/conexion.php");
include ("../../../conexion/funciones.php");

//DATOS USUARIO
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$clave=$_POST["clave"];

//PRIVILEGIOS USUARIO
//--> NOTICIA
$categoria=descativadoCasilla($_POST["categoria"]);
$noticia=descativadoCasilla($_POST["noticia"]);
$noticia_superior=descativadoCasilla($_POST["noticia_superior"]);
$multimedia=descativadoCasilla($_POST["multimedia"]);
$reportero16=descativadoCasilla($_POST["reportero16"]);
$noticia_comentarios=descativadoCasilla($_POST["noticia_comentarios"]);
$noticia_modificar=descativadoCasilla($_POST["noticia_modificar"]);
$noticia_eliminar=descativadoCasilla($_POST["noticia_eliminar"]);

//--> USUARIO
$usuarios=descativadoCasilla($_POST["usuarios"]);
$usuarios_modificar=descativadoCasilla($_POST["usuarios_modificar"]);
$usuarios_eliminar=descativadoCasilla($_POST["usuarios_eliminar"]);

$data=mysql_query("INSERT INTO ".$tabla_suf."_usuario (usuario, clave, nombre, apellidos, email) VALUES ('$usuario', '$clave', '$nombre', '$apellidos', '$email');",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>