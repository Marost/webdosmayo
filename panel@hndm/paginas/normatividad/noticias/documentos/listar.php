<?php
session_start();
include("../../../../conexion/conexion.php");
include("../../../../conexion/verificar_sesion.php");
include("../../../../conexion/funciones.php");
include("../../../../conexion/funcion-paginacion.php");

$cebra=1;
$url="listar.php";
$idnoticia=$_REQUEST["noticia"];

$rst_galeria=mysql_query("SELECT * FROM ".$tabla_suf."_normatividad_documentos WHERE cas=$idnoticia ORDER BY orden ASC;", $conexion);
$num_galeria=mysql_num_rows($rst_galeria);
	
if ($num_galeria==0){ $mensaje2="No hay registros en la base de datos";}

// MENSAJE DE ERROR
if($_REQUEST["mensaje"]==1){
	$mensaje="El registro fue agregado exitosamente";
}elseif($_REQUEST["mensaje"]==2)
		$mensaje="El registro fue modificado exitosamente";
elseif($_REQUEST["mensaje"]==3)
		$mensaje="El registro fue eliminado exitosamente";
elseif($_REQUEST["mensaje"]==4)
		$mensaje="Se ha producido un error al ingresar el nuevo registro";
elseif($_REQUEST["mensaje"]==5)
		$mensaje="Se ha producido un error al modificar el registro";
elseif($_REQUEST["mensaje"]==6)
		$mensaje="Se ha producido un error al eliminar el registro";

//NOTICIA
$rst_noticia=mysql_query("SELECT * FROM ".$tabla_suf."_noticia WHERE id=$idnoticia LIMIT 1;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración | </title>
<link rel="stylesheet" type="text/css" href="../../../../css/estilo-panel.css"/>
<link rel="stylesheet" type="text/css" href="../../../../css/style-listas.css">
<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.8.5.custom.min.js"></script>
<script type="text/javascript">
var jq = jQuery.noConflict();
jq(document).ready(function() {
	jq("#test-list").sortable({
	  handle : '.handle',
	  update : function () {
		var order = jq('#test-list').sortable('serialize');
		jq("#info").load("ordenar.php?"+order);
	  }
	});
});
</script>

<script type="text/javascript">
function eliminarRegistro(registro, noticia) {
if(confirm("¿Está seguro de borrar este registro?")) {
	document.location.href="eliminar.php?id="+registro+"&noticia="+noticia;
	}
}
function eliminarTodo(noticia, tipo) {
if(confirm("¿Está seguro de borrar todos los registros?")) {
	document.location.href="eliminar.php?noticia="+noticia+"&tipo="+tipo;
	}
}
</script>

</head>

<body>
<div id="contenedor" class="limpiar">
	<?php include("../../../../cabecera.php") ?>
    <div id="cuerpo" class="limpiar">
    	<div class="interior">
        	<div id="panel-izq">
				<?php include("../../../../menu-izq.php"); ?>
            </div><!--FIN PANEL IZQ-->
            <div id="panel-der">
            	  <h2>Lista - Documentos: <?php echo $fila_noticia["titulo"] ?></h2>
    <div id="contenido_total">
    	<div id="mensaje" >
    	  <p class="mensaje"><?php echo $mensaje; ?></p>
        </div>
        <div id="contenido">

              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td width="71%" ><p><a href="form-agregar.php?noticia=<?php echo $idnoticia; ?>">
                    <strong>AGREGAR</strong></a></p></td>
                    <td width="29%" ></td>
                  </tr>
                  <tr>
                    <td colspan="2">
<ul id="test-list">
	<?php while($fila_galeria=mysql_fetch_array($rst_galeria)){
      $documento_titulo=$fila_galeria["titulo"];
      $documento_tipo=$fila_galeria["documento_tipo"];
  ?>
        <li id="listItem_<?php echo $fila_galeria["id"] ?>" class="alto">
            <img src="../../../../images/arrow.png" alt="move" width="16" height="16" class="handle" />
            
            <a onclick="eliminarRegistro(<?php echo $fila_galeria["id"] ?>, <?php echo $idnoticia ?>);" href="javascript:;">
            <img src="../../../../images/eliminar_16.png" width="16" height="16" title="Eliminar registro" /></a>

            <a href="form-modificar.php?id=<?php echo $fila_galeria["id"] ?>&amp;noticia=<?php echo $idnoticia ?>">
            <img src="../../../../images/editar_16.png" width="16" height="16" /></a>

            <?php if($documento_tipo=="doc" or $documento_tipo=="docx"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-docx.png" width="150" />
            <?php }elseif($documento_tipo=="xls" or $documento_tipo=="xlsx"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-xlsx.png" width="150" />
            <?php }elseif($documento_tipo=="ppt" or $documento_tipo=="pptx" or $documento_tipo=="pps" or $documento_tipo=="ppsx"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-pptx.png" width="150" />
            <?php }elseif($documento_tipo=="pdf"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-pdf.png" width="150" />
            <?php }elseif($documento_tipo=="gif"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-gif.png" width="150" />
            <?php }elseif($documento_tipo=="png"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-png.png" width="150" />
            <?php }elseif($documento_tipo=="bmp"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-bmp.png" width="150" />
            <?php }elseif($documento_tipo=="jpg" or $documento_tipo=="jpeg" or $documento_tipo=="JPG" or $documento_tipo=="JPEG"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-jpg.png" width="150" />
            <?php }elseif($documento_tipo=="zip" or $documento_tipo=="rar"){ ?>
                <img title="<?php echo $documento_titulo; ?>" src="../../../../images/icons/icon-file-zip.png" width="150" />
            <?php } ?>

        </li>
    <?php } ?>
</ul>
                    </td>
                  </tr>
          </table>

      </div><!-- FIN CONTENIDO -->
  </div>
          </div><!--FIN PANEL DER-->
        </div><!--FIN INTERIOR-->
    </div><!--FIN CUERPO-->
</div>
</body>
</html>