<?php
include("../../../../conexion/conexion.php");
include("../../../../conexion/funciones.php");
require_once('../../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$idnoticia=$_REQUEST["noticia"];
$fecha=fechaPost();
$hora=date("H:i");

/*EXTRAER CARPETA DE DOCUMENTOS*/
$documentos=seleccionTabla($idnoticia, "id", "DM_cas", $conexion);
$carpeta_archivo=$documentos["carpeta_documentos"];

if($_POST['flash_uploader_0_tmpname']<>""){
	$archivo_tmp=$_POST['flash_uploader_0_tmpname'];
	$archivo_tmp_extension=end(explode('.',$archivo_tmp));
	$archivo_tmp_nombre=substr($archivo_tmp,0,strlen($archivo_tmp)-(strlen($archivo_tmp_extension)+1));
	
	$archivo_name=$_POST['flash_uploader_0_name'];	
	$archivo_name_extension=end(explode('.',$archivo_name));
	$archivo_name_nombre=substr($archivo_name,0,strlen($archivo_name)-(strlen($archivo_name_extension)+1));
	$archivo_name_prmlnk=getUrlAmigable($archivo_name_nombre);
	$archivo_name_total=$archivo_name_prmlnk.".".$archivo_name_extension;
	
	$ruta_archivo="../../../../../documentos/".$carpeta_archivo;
	if(file_exists($ruta_archivo.$archivo_tmp)){
		rename($ruta_archivo.$archivo_tmp, $ruta_archivo.$archivo_name_total);
	}
}else{
	$archivo_name=$_POST["documento"];
	$archivo_name_extension=$_POST["documento_tipo"];
}

mysql_query("UPDATE ".$tabla_suf."_campania_material SET titulo='".htmlspecialchars($titulo)."', documento='$archivo_name', 
	documento_tipo='$archivo_name_extension', cas=$idnoticia WHERE id=". $_REQUEST["id"].";", $conexion);
	
if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2&campania=$idnoticia");
}

?>