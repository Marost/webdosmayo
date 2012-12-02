<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/* VARIABLES */
$url_web=$web."normatividad";

################################################################
//PAGINACION DE NOTICIAS
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_cas        = mysql_query("SELECT COUNT(*) as count FROM DM_normatividad ORDER BY fecha_publicacion DESC", $conexion);
$fila_cas       = mysql_fetch_assoc($rst_cas);
$generated      = intval($fila_cas['count']);
$pagination     = new Pagination("5", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_cas        = mysql_query("SELECT * FROM DM_normatividad ORDER BY fecha_publicacion DESC LIMIT $start, 5", $conexion);

################################################################
/*SELECCION DE AÑO*/
$rst_selectanio=mysql_query("SELECT DISTINCT fecha_anio FROM DM_normatividad", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Normatividad</title>

        <?php require_once("w-header-scripts.php"); ?>

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

                        <div class="nw-nota cas">

                            <div class="titulo">
                                <h2>Normatividad</h2>
                            </div>

                            <div class="contenido">

                                <select>
                                    <option>Seleccion año</option>
                                    <?php while($fila_selectanio=mysql_fetch_array($rst_selectanio)){
                                        $fechaAnio=$fila_selectanio["fecha_anio"];
                                    ?>
                                    <option><?php echo $fechaAnio; ?></option>
                                    <?php } ?>
                                </select>

                                <select>
                                    <option>Seleccion mes</option>
                                    <option value="01">Enero</option>
                                    <option value="02">Febrero</option>
                                    <option value="03">Marzo</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Mayo</option>
                                    <option value="06">Junio</option>
                                    <option value="07">Julio</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>


                                <table class="tabla_cas" width="710" border="0">
                                    <tbody>

                                        <?php while($fila_cas=mysql_fetch_array($rst_cas)){
                                            $cas_id=$fila_cas["id"];
                                            $cas_titulo=$fila_cas["titulo"];
                                            $cas_tipo=$fila_cas["tipo"];
                                            $cas_carpetas=$fila_cas["carpeta_documentos"];
                                            $cas_observaciones=$fila_cas["observaciones"];
                                            $cas_fecha_total=explode(" ", $fila_cas["fecha_publicacion"]);
                                            $cas_fecha=explode("-", $cas_fecha_total[0]);

                                            /*DOCUMENTOS*/
                                            $rst_cas_docs=mysql_query("SELECT * FROM DM_normatividad_documentos WHERE cas=$cas_id ORDER BY orden ASC;", $conexion);
                                        ?>
                                        <tr>
                                            <td class="dato_cabecera tdcab-sup">Fecha</td>
                                            <td class="dato_contenido tdcont-sup"><?php echo nombreFecha($cas_fecha[0],$cas_fecha[1],$cas_fecha[2]); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="dato_cabecera" width="104" height="25">Tipo</td>
                                            <td class="dato_contenido"><?php echo $cas_tipo; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="dato_cabecera">Nombre</td>
                                            <td class="dato_contenido"><?php echo $cas_titulo; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="dato_cabecera">Documentos</td>
                                            <td class="dato_contenido">
                                                <ul>
                                                    <?php while($fila_cas_docs=mysql_fetch_array($rst_cas_docs)){
                                                        $docs_titulo=$fila_cas_docs["titulo"];
                                                        $docs_documento=$fila_cas_docs["documento"];
                                                        $docs_documento_tipo=$fila_cas_docs["documento_tipo"];
                                                    ?>
                                                        <li>

                                                            <a title="<?php echo $docs_titulo; ?>" target="_blank" 
                                                            href="/documentos/<?php echo $cas_carpetas."".$docs_documento; ?>">
                                                            <span
                                                                <?php if($docs_documento_tipo=="doc" or $docs_documento_tipo=="docx"){ ?>
                                                                    class="word"     
                                                                <?php }elseif($docs_documento_tipo=="xls" or $docs_documento_tipo=="xlsx"){ ?>
                                                                    class="excel" 
                                                                <?php }elseif($docs_documento_tipo=="ppt" or $docs_documento_tipo=="pptx" or $docs_documento_tipo=="pps" or $docs_documento_tipo=="ppsx"){ ?>
                                                                    class="pwpt" 
                                                                <?php }elseif($docs_documento_tipo=="pdf"){ ?>
                                                                    class="pdf" 
                                                                <?php }elseif($docs_documento_tipo=="gif"){ ?>
                                                                    class="gif" 
                                                                <?php }elseif($docs_documento_tipo=="png"){ ?>
                                                                    class="png" 
                                                                <?php }elseif($docs_documento_tipo=="bmp"){ ?>
                                                                    class="bmp" 
                                                                <?php }elseif($docs_documento_tipo=="jpg" or $docs_documento_tipo=="jpeg" or $docs_documento_tipo=="JPG" or $docs_documento_tipo=="JPEG"){ ?>
                                                                    class="jpg" 
                                                                <?php }elseif($docs_documento_tipo=="zip" or $docs_documento_tipo=="rar"){ ?>
                                                                    class="zip" 
                                                                <?php } ?>
                                                            >
                                                            </span><p><?php echo $docs_titulo; ?></p></a>

                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                        </tr>                                  
                                        <tr>
                                            <td class="dato_cabecera tdcab-inf">Observaciones</td>
                                            <td class="dato_contenido">
                                                <?php echo $cas_observaciones; ?>
                                            </td>
                                        </tr>
                                        <tr><td></td><td></td></tr>
                                        <?php } ?>
                                    </tbody>
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
