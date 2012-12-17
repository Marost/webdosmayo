<?php
session_start();
include("../../../../conexion/conexion.php");
include("../../../../conexion/funciones.php");
include("../../../../conexion/verificar_sesion.php");

$id_anexo=$_REQUEST["anx"];

//NOTICIA
$rst_query=mysql_query("SELECT * FROM ".$tabla_suf."_dirtelefono_doctor WHERE id=". $_REQUEST["id"].";", $conexion);
$fila_query=mysql_fetch_array($rst_query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración</title>
<link rel="stylesheet" type="text/css" href="../../../../css/estilo-panel.css"/>
<link rel="stylesheet" type="text/css" href="../../../../css/style-listas.css" />

<!-- SPRY -->
<script src="/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

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
            	<h2>Modificar - Anexo</h2>
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
                    <td width="20%" height="30" align="right" ><p><strong>Anexo:</strong></p></td>
                    <td width="80%" height="30" align="left">
                      <input name="anexo" type="text" id="anexo" size="50" value="<?php echo $fila_query["anexo"]; ?>" /></td>
                  </tr>
                  <tr>
                    <td width="20%" height="30" align="right" ><p><strong>Sección:</strong></p></td>
                    <td width="80%" height="30" align="left">
                      <input name="seccion" type="text" id="seccion" size="50" value="<?php echo $fila_query["seccion"]; ?>" /></td>
                  </tr>
                  <tr>
                    <td width="20%" height="30" align="right"><p><strong>Doctor:</strong></p></td>
                    <td width="80%" height="30" align="left">
                      <input name="doctor" type="text" id="doctor" size="50" value="<?php echo $fila_query["doctor"] ?>" /></td>
                  </tr>
            	    <tr>
            	      <td colspan="2" align="center">
            	        <input type="submit" name="guardar" id="guardar" value="Guardar" />
            	        <input type="reset" name="borrar" id="borrar" value="Limpiar Datos" />
                      <input type="hidden" name="anx" value="<?php echo $id_anexo; ?>">
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

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "time");
</script>
</body>
</html>