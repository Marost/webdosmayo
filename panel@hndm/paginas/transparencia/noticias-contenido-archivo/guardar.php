<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//VARIABLES URL
$Url_TranspID=$_REQUEST["transp"];
$Url_NotID=$_REQUEST["not"];

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$archivo_carpeta=fechaCarpeta();

//CAMBIAR NOMBRE DE ARCHIVO
if($_POST['uploader_archivo_0_tmpname']<>""){
	$archivo_tmp=$_POST['uploader_archivo_0_tmpname'];
	$archivo_tmp_extension=end(explode('.',$archivo_tmp));
	$archivo_tmp_nombre=substr($archivo_tmp,0,strlen($archivo_tmp)-(strlen($archivo_tmp_extension)+1));

	$archivo_name=$_POST['uploader_archivo_0_name'];
	$archivo_name_extension=end(explode('.',$archivo_name));
	$archivo_name_nombre=substr($archivo_name,0,strlen($archivo_name)-(strlen($archivo_name_extension)+1));
	$archivo_name_prmlnk=getUrlAmigable($archivo_name_nombre);
	$archivo_name_total=$archivo_name_prmlnk.".".$archivo_name_extension;

	$ruta_archivo="../../../../archivos/".fechaCarpeta();
	if(file_exists($ruta_archivo.$archivo_tmp)){
		rename($ruta_archivo.$archivo_tmp, $ruta_archivo.$archivo_name_total);
	}
}

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_transp_s_archivo (url,
titulo, 
archivo,
archivo_carpeta, 
dato_usuario, 
fecha_publicacion,
noticia_sub) VALUES('$url',
'".htmlspecialchars($titulo)."',
'$archivo_tmp',
'$archivo_carpeta',
'$usuario_user', 
'$fecha_pub',
$Url_NotID);",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&not=$Url_NotID&mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?transp=$Url_TranspID&not=$Url_NotID&mensaje=1");
}

?>