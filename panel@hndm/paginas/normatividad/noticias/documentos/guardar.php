<?php
include("../../../../conexion/conexion.php");
include("../../../../conexion/funciones.php");
require_once('../../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["noticia"];
$fecha=fechaPost();
$hora=date("H:i");
$carpeta=fechaCarpeta()."/";

//CONSULTA PARA SABER SI EXISTEN IMAGENES DE LA NOTICIA
$rst_notgaleria=mysql_query("SELECT * FROM ".$tabla_suf."_normatividad_documentos WHERE cas=$idnoticia", $conexion);
$num_notgaleria=mysql_num_rows($rst_notgaleria);
$fila_notgaleria=mysql_fetch_array($rst_notgaleria);

/*EXTRAER CARPETA DE DOCUMENTOS*/
$documentos=seleccionTabla($idnoticia, "id", "DM_normatividad", $conexion);
$carpeta_archivo=$documentos["carpeta_documentos"];

//DOCUMENTO
if($num_notgaleria>0){
	$cont=0;
	$cont_img=$num_notgaleria;

	while($_POST['flash_uploader_'.$cont.'_tmpname']<>""){
		$archivo_tmp{$cont}=$_POST['flash_uploader_'.$cont.'_tmpname'];
		$archivo_tmp_extension{$cont}=end(explode('.',$archivo_tmp{$cont}));
		$archivo_tmp_nombre{$cont}=substr($archivo_tmp{$cont},0,strlen($archivo_tmp{$cont})-(strlen($archivo_tmp_extension{$cont})+1));
		
		$archivo_name{$cont}=$_POST['flash_uploader_'.$cont.'_name'];	
		$archivo_name_extension{$cont}=end(explode('.',$archivo_name{$cont}));
		$archivo_name_nombre{$cont}=substr($archivo_name{$cont},0,strlen($archivo_name{$cont})-(strlen($archivo_name_extension{$cont})+1));
		$archivo_name_prmlnk{$cont}=getUrlAmigable($archivo_name_nombre{$cont});
		$archivo_name_total{$cont}=$archivo_name_prmlnk{$cont}.".".$archivo_name_extension{$cont};
		
		$ruta_archivo{$cont}="../../../../../documentos/".$carpeta_archivo;
		if(file_exists($ruta_archivo{$cont}.$archivo_tmp{$cont})){
			rename($ruta_archivo{$cont}.$archivo_tmp{$cont}, $ruta_archivo{$cont}.$archivo_name_total{$cont});
		}

		mysql_query("INSERT INTO ".$tabla_suf."_normatividad_documentos (titulo, documento, documento_tipo, cas, orden)
			VALUES('".htmlspecialchars($archivo_name_nombre{$cont})."', '".$archivo_name_total{$cont}."', '".$archivo_name_extension{$cont}."', $idnoticia, $cont_img)", $conexion);

		$cont++; $cont_img++;
	}

}elseif($num_notgaleria==0){
	$cont=0;

	while($_POST['flash_uploader_'.$cont.'_tmpname']<>""){
		$archivo_tmp{$cont}=$_POST['flash_uploader_'.$cont.'_tmpname'];
		$archivo_tmp_extension{$cont}=end(explode('.',$archivo_tmp{$cont}));
		$archivo_tmp_nombre{$cont}=substr($archivo_tmp{$cont},0,strlen($archivo_tmp{$cont})-(strlen($archivo_tmp_extension{$cont})+1));
		
		$archivo_name{$cont}=$_POST['flash_uploader_'.$cont.'_name'];	
		$archivo_name_extension{$cont}=end(explode('.',$archivo_name{$cont}));
		$archivo_name_nombre{$cont}=substr($archivo_name{$cont},0,strlen($archivo_name{$cont})-(strlen($archivo_name_extension{$cont})+1));
		$archivo_name_prmlnk{$cont}=getUrlAmigable($archivo_name_nombre{$cont});
		$archivo_name_total{$cont}=$archivo_name_prmlnk{$cont}.".".$archivo_name_extension{$cont};
		
		$ruta_archivo{$cont}="../../../../../documentos/".$carpeta_archivo;
		if(file_exists($ruta_archivo{$cont}.$archivo_tmp{$cont})){
			rename($ruta_archivo{$cont}.$archivo_tmp{$cont}, $ruta_archivo{$cont}.$archivo_name_total{$cont});
		}

		mysql_query("INSERT INTO ".$tabla_suf."_normatividad_documentos (titulo, documento, documento_tipo, cas, orden)
			VALUES('".htmlspecialchars($archivo_name_nombre{$cont})."', '".$archivo_name_total{$cont}."', '".$archivo_name_extension{$cont}."', $idnoticia, $cont)", $conexion);

		$cont++;
	}

}

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1&noticia=$idnoticia");
}

?>