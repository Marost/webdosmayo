<?php
session_start();
include("../../../../conexion/conexion.php");
include("../../../../conexion/verificar_sesion.php");
include("../../../../conexion/funciones.php");
include("../../../../conexion/funcion-paginacion.php");

$cebra=1;
$url="listar.php";
$buscar=$_REQUEST["busqueda"];
$id_anexo=$_REQUEST["anx"];

if ($_REQUEST["btnbuscar"]=="")
{
	$rst_query=mysql_query("SELECT * FROM ".$tabla_suf."_dirtelefono_doctor WHERE directorio=$id_anexo ORDER BY id DESC;", $conexion);
	$num_registros=mysql_num_rows($rst_query);
		
	$registros=20;	
	$pagina=$_GET["pag"];
	if (is_numeric($pagina))
	$inicio=(($pagina-1)*$registros);
	else
	$inicio=0;
	
	$rst_query=mysql_query("SELECT * FROM ".$tabla_suf."_dirtelefono_doctor WHERE directorio=$id_anexo ORDER BY id DESC LIMIT $inicio, $registros;", $conexion);
	$paginas=ceil($num_registros/$registros);
}

//------- MENSAJE DE ERROR
if($_REQUEST["mensaje"]==1)
{
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
$rst_anexo=mysql_query("SELECT * FROM ".$tabla_suf."_dirtelefono WHERE id=$id_anexo;", $conexion);
$fila_anexo=mysql_fetch_array($rst_query);
$anexo_titulo=$fila_anexo["titulo"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración | </title>
<link rel="stylesheet" type="text/css" href="../../../../css/estilo-panel.css"/>
<link rel="stylesheet" type="text/css" href="../../../../css/style-listas.css">
<script type="text/javascript">
function eliminarRegistro(registro, nombre, anexo) {
if(confirm("¿Está seguro de borrar este registro?\n"+nombre)) {
	document.location.href="eliminar.php?id="+registro+"&anx="+anexo;
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
            	<h2>Lista - Anexo: <?php echo $anexo_titulo; ?></h2>
    <div id="contenido_total">
    	<div id="mensaje" >        
        	<p class="mensaje"><?php echo $mensaje; ?></p>
        </div>
        <div id="contenido">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2"><p><a href="form-agregar.php"><strong>AGREGAR</strong></a></p></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <table width="100%" align="center" cellpadding="5" cellspacing="0" id="cebreado-php">
                        <thead>
                          <tr class="titulo-campo">
                            <th width="10%" height="22" align="left">Anexo</th>
                            <th width="50%" height="22" align="left">Seccion</th>
                            <th width="25%" height="22" align="left">Doctor</th>
                            <th width="15%" height="22" align="center">acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($fila=mysql_fetch_array($rst_query)){ ?>
                          <tr<?php echo alt($zebra); $zebra++; ?>>
                            <td width="85%">
                              <?php echo $fila["anexo"] ?>
                            </td>
                            <td width="50%">
                              <?php echo $fila["seccion"] ?>
                            </td>
                            <td width="25%">
                              <?php echo $fila["doctor"] ?>
                            </td>
                            <td width="15%" align="center">
                            
                                <a onclick="eliminarRegistro(<?php echo $fila["id"] ?>, '<?php echo $fila["titulo"] ?>', <?php echo $id_anexo; ?>);" href="javascript:;">
                                    <img src="../../../../images/eliminar_16.png" width="16" height="16" title="Eliminar registro" /></a>
                            
                           		<a href="form-modificar.php?id=<?php echo $fila["id"] ?>&anx=<?php echo $id_anexo; ?>">
                                	<img src="../../../../images/editar_16.png" width="16" height="16" title="Modiciar registro" /></a>

                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="30" colspan="2" align="center">
                    <?php 
                    if ($_REQUEST["btnbuscar"]=="")
                    {
                    if (!isset($_GET["pag"]))
                    $pag = 1;
                    else
                    $pag = $_GET["pag"];
                    echo paginar($pag, $num_registros, $registros, "$url?pag=", 10);
                    }
                    ?>
                    </td>
                  </tr>
                  <tr>
                    <td height="30" colspan="2" align="center"><p><?php echo $mensaje2; ?></p></td>
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