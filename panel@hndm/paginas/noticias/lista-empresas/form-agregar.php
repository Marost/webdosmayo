<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/verificar_sesion.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración | </title>
<link rel="stylesheet" type="text/css" href="../../../css/estilo-panel.css"/>
<link rel="stylesheet" type="text/css" href="../../../css/style-listas.css" />

<!-- SPRY -->
<script src="/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<!-- PLUPLOAD -->
<link rel="stylesheet" type="text/css" href="../../../js/plupload/plupload.queue.css"/>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("jquery", "1.3");
</script>
<script type="text/javascript" src="../../../js/plupload/gears_init.js"></script>
<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script type="text/javascript" src="../../../js/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="../../../js/plupload/jquery.plupload.queue.min.js"></script>
<script type="text/javascript">
var jq = jQuery.noConflict();
jq(function() {
	jq("#flash_uploader").pluploadQueue({
		runtimes: 'flash', url: 'upload.php', max_file_size: '10mb',
		chunk_size: '1mb', unique_names: true,
		filters: [ {title: "Image files", extensions: "jpg,gif,png"}],
		resize: {quality: 100},
		flash_swf_url: '../../../js/plupload/plupload.flash.swf'
	});	
});
</script>

</head>

<body>
<div id="contenedor" class="limpiar">
	<?php include("../../../cabecera.php") ?>
    <div id="cuerpo" class="limpiar">
    	<div class="interior">
        	<div id="panel-izq">
				<?php include("../../../menu-izq.php"); ?>
            </div><!--FIN PANEL IZQ-->
            <div id="panel-der">
            	<h2>Agregar - Lista de Empresas</h2>
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="guardar.php" method="post" enctype="multipart/form-data" id="form1" >
            	  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td width="20%" height="30" align="right" ><p><strong>Titulo:</strong></p></td>
            	      <td width="80%" height="30" align="left"><input name="titulo" type="text" id="titulo" size="50" /></td>
          	      </tr>
           	      <tr>
            	      <td colspan="2"><div id="TabbedPanels1" class="TabbedPanels">
            	        <ul class="TabbedPanelsTabGroup">
            	          <li class="TabbedPanelsTab" tabindex="0">Imagen</li>
            	        </ul>
            	        <div class="TabbedPanelsContentGroup">
            	          <div class="TabbedPanelsContent">
                          <p align="left"><strong>Selecciona una imagen para la noticia:</strong></p>
                          <div>
                            <div id="flash_uploader" style="width: 450px; height: 330px;">
                              You browser doesn't have Flash installed.</div>
                          </div>
                        </div>
            	        </div>
          	        </div></td>
           	        </tr>
                  <tr>
                    <td width="20%" height="30" align="right" ><p><strong>Enlace:</strong></p></td>
                    <td width="80%" height="30" align="left"><input name="Enlace" type="text" id="Enlace" size="50" /></td>
                  </tr>
                <tr>
                  <td colspan="2" align="center">
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                    <input type="reset" name="borrar" id="borrar" value="Limpiar Datos" />
                  </td>
                  </tr>
              </table>
                </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
          </div><!--FIN PANEL DER-->
        </div><!--FIN INTERIOR-->
    </div><!--FIN CUERPO-->
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>