<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Libro de Reclamaciones</title>
        
        <?php require_once("w-header-scripts.php") ?>

        <!-- LIBRO DE RECLAMACIONES -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="/libs/form_reclamo/envio.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <div class="header-container">
                
                <?php require_once("w-header.php") ?>

            </div>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Libro de Reclamaciones</h2>
                            </div>

                            <div class="contenido">

                                <p class="reclamo_mensaje ocultar">Gracias por escribirnos</p>
                                <p class="reclamo_mensaje ocultar">Nos estaremos comunicando contigo a la brevedad posible.</p>

                                <form id="form_reclamo" name="form_reclamo" method="post">
                                  <table width="710" border="2" cellpadding="2" cellspacing="2" class="libro-reclamaciones">
                                    <tr>
                                      <td class="titulo" width="97"><p>&nbsp;</p></td>
                                      <td class="titulo" width="65" align="center"><p>DIA</p></td>
                                      <td class="titulo" width="64" align="center"><p>MES</p></td>
                                      <td class="titulo" width="65" align="center"><p>AÑO</p></td>
                                      <td class="titulo" colspan="4" align="center"><p>HOJA DE RECLAMACIÓN</p></td>
                                    </tr>
                                    <tr>
                                      <td class="titulo"><p>Fecha</p></td>
                                      <td width="65" align="center"><p><?php echo date("d"); ?></p></td>
                                      <td width="64" align="center"><p><?php echo date("m"); ?></p></td>
                                      <td width="65" align="center"><p><?php echo date("Y"); ?></p></td>
                                      <td colspan="4" align="center"><p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8"><p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8"><h3>IDENTIFICACION DE USUARIO</h3></td>
                                    </tr>
                                    <tr>
                                      <td class="titulo"><p>Nombre</p></td>
                                      <td colspan="7"><p>
                                        <input name="reclamo_nombre" type="text" id="reclamo_nombre" size="60">
                                      </p></td>
                                    </tr>
                                    <tr>
                                      <td class="titulo"><p>Domicilio</p></td>
                                      <td colspan="7"><p>
                                        <input name="reclamo_domicilio" type="text" id="reclamo_domicilio" size="80">
                                      </p></td>
                                    </tr>
                                    <tr>
                                      <td class="titulo"><p>DNI / CE</p></td>
                                      <td colspan="3"><p>
                                        <input type="text" name="reclamo_dni" id="reclamo_dni">
                                      </p></td>
                                      <td class="titulo" width="80"><p>Telf.</p></td>
                                      <td width="140"><p>
                                        <input type="text" name="reclamo_telefono" id="reclamo_telefono">
                                      </p></td>
                                      <td class="titulo" width="80"><p>E-mail</p></td>
                                      <td width="140"><p>
                                        <input type="text" name="reclamo_email" id="reclamo_email">
                                      </p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8"><h3>IDENTIFICACION DE LA ATENCIÓN</h3></td>
                                    </tr>
                                    <tr>
                                      <td class="titulo" colspan="8"><p>Descripción:</p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8"><p>
                                        <textarea name="reclamo_descripcion" id="reclamo_descripcion" cols="45" rows="5"></textarea>
                                      </p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8"><h3>ACCIONES ADOPTADAS POR LA ENTIDAD</h3></td>
                                    </tr>
                                    <tr>
                                      <td class="titulo" colspan="8"><p>Detalle:</p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8"><p>
                                        <textarea name="reclamo_detelle" id="reclamo_detalle" cols="45" rows="5"></textarea>
                                      </p></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8" align="center"><p>
                                          <img src="imagenes/progressbar.gif" alt="Cargando..." class="ocultar" id="progressbar">
                                            <button class="reclamo_boton" id="reclamo_enviar">Enviar reclamo</button>
                                            <button class="reclamo_boton" id="reclamo_cancelar">Cancelar</button>
                                      </p></td>
                                    </tr>
                                  </table>
                                </form>

                            </div>

                            <div class="contenido">
                                <a href="libro-reclamaciones">Volver</a>
                            </div>

                        </div>

                    </section>

                    <?php require_once("w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

<?php require_once("w-popup.php") ?>

    </body>
</html>
