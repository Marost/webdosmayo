<?php 
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/* VARIABLES */
$url_web=$web."directorio-telefonico";

################################################################
//PAGINACION DE NOTICIAS
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_cas        = mysql_query("SELECT COUNT(*) as count FROM DM_dirtelefono ORDER BY id ASC", $conexion);
$fila_cas       = mysql_fetch_assoc($rst_cas);
$generated      = intval($fila_cas['count']);
$pagination     = new Pagination("5", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_cas        = mysql_query("SELECT * FROM DM_dirtelefono ORDER BY id ASC LIMIT $start, 5", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hospital Nacional Dos de Mayo</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

        <!-- PAGINACION -->
        <link rel="stylesheet" href="/libs/pagination/pagination.css" media="screen">

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
                                <h2>Directorio Interno</h2>
                            </div>

                            <div class="contenido">

                                <table width="450" border="0" align="center" cellpadding="3" cellspacing="3">
                                  <tr>
                                    <td width="46" align="center" bgcolor="#2D65AE"><strong>N°</strong></td>
                                    <td width="134" align="center" bgcolor="#2D65AE"><strong>Nº DE TELEF</strong></td>
                                    <td width="268" bgcolor="#2D65AE"><strong>OFICINA </strong></td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">1</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281420</td>
                                    <td width="268" bgcolor="#DADADA">Central    Telefónica</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">2</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3280028</td>
                                    <td width="268" bgcolor="#DADADA">Central    Telefónica</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">3</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281414</td>
                                    <td width="268" bgcolor="#DADADA">Dirección    General (telefax)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">4</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281421</td>
                                    <td width="268" bgcolor="#DADADA">Dirección    General Adjunta</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">5</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281434</td>
                                    <td width="268" bgcolor="#DADADA">Dirección    Ejecutiva de Administración</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">6</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281488</td>
                                    <td width="268" bgcolor="#DADADA">Oficina de    Seguros</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">7</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3287676</td>
                                    <td width="268" bgcolor="#DADADA">Oficina de    Seguros (2° piso)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">8</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3284444</td>
                                    <td width="268" bgcolor="#DADADA">Logística    (Programación)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">9</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281330</td>
                                    <td width="268" bgcolor="#DADADA">Logística    (Adqusisiciones)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">10</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3287272</td>
                                    <td width="268" bgcolor="#DADADA">Personal</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">11</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281340</td>
                                    <td width="268" bgcolor="#DADADA">Economía</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">12</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3288960</td>
                                    <td width="268" bgcolor="#DADADA">Epidemiología</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">13</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3287474</td>
                                    <td width="268" bgcolor="#DADADA">Planeamiento</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">14</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3280124</td>
                                    <td width="268" bgcolor="#DADADA">Capacitación</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">15</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281424</td>
                                    <td width="268" bgcolor="#DADADA">Emergencia</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">16</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3280887</td>
                                    <td width="268" bgcolor="#DADADA">Comunicaciones</td>
                                  </tr>
                                </table><br><br>

                                <table width="712" border="0" align="center" cellpadding="3" cellspacing="3">
                                  <?php while($fila_cas=mysql_fetch_array($rst_cas)){
                                      $cas_id=$fila_cas["id"];
                                      $cas_titulo=$fila_cas["titulo"];
                                      
                                      /*ANEXOS*/
                                      $rst_cas_docs=mysql_query("SELECT * FROM DM_dirtelefono_doctor WHERE directorio=$cas_id ORDER BY id ASC;", $conexion);
                                  ?>
                                  <tr>
                                    <td width="52" bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong><?php echo $cas_titulo; ?></strong></td>
                                  </tr>
                                  <?php while($fila_cas_docs=mysql_fetch_array($rst_cas_docs)){
                                    $cas_docs_anexo=$fila_cas_docs["anexo"];
                                    $cas_docs_seccion=$fila_cas_docs["seccion"];
                                    $cas_docs_doctor=$fila_cas_docs["doctor"];
                                  ?>
                                  <tr>
                                    <td bgcolor="#DADADA"><?php echo $cas_docs_anexo; ?></td>
                                    <td bgcolor="#DADADA" width="363"><?php echo $cas_docs_seccion; ?></td>
                                    <td bgcolor="#DADADA" width="267"><?php echo $cas_docs_doctor; ?></td>
                                  </tr>
                                  <?php }} ?>

                                </table>

                                <div style="width=100%; float:left;">
                                    <?php $pagination->pagination(); ?>
                                </div>

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
