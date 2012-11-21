<?php 
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*INFORMACION INSTITUCIONAL*/
$rst_info_inst=mysql_query("SELECT * FROM DM_informacion_institucional ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_info_inst=mysql_fetch_array($rst_info_inst);

/*VARIABLES*/
$infoinst_id=$fila_info_inst["id"];
$infoinst_titulo=$fila_info_inst["titulo"];
$infoinst_contenido=$fila_info_inst["contenido"];

/*INFORMACION INSTITUCIONAL*/
$rst_info_inst_slide=mysql_query("SELECT * FROM DM_informacion_institucional_slide WHERE noticia=$infoinst_id ORDER BY orden ASC;", $conexion);
$num_info_inst_slide=mysql_num_rows($rst_info_inst_slide);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Información Institucional</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

        <!-- SLIDE NOTICIA -->
        <link href="/libs/allinone_banner/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
        <script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
        <script src="/libs/allinone_banner/allinone_thumbnailsBanner.js"></script>
        <script src="/libs/allinone_banner/reflection.js" ></script>
        <!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" ></script><![endif]-->
        <script>
        var jNotSld=jQuery.noConflict();
        jNotSld(document).ready(function(){
            jNotSld('.imagen_slide div').allinone_thumbnailsBanner({
                skin: 'cool',
                numberOfThumbsPerScreen:4,
                width: 620,
                height: 360,
                thumbsWrapperMarginTop:0
            });
        });
        </script>

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
                                <h2>Información Institucional</h2>
                            </div>

                            <div class="contenido">
                                
                                <?php echo $infoinst_contenido; ?>

                                <?php if($num_info_inst_slide>0){ ?>
                                <div class="imagen_slide">

                                    <div style="display:none;">
                                    
                                        <ul class="allinone_bannerWithPlaylist_list">   
                                            <?php while ($fila_info_inst_slide=mysql_fetch_array($rst_info_inst_slide)){
                                                /*VARIABLES DE SLIDE*/
                                                $infoinst_slide_id=$fila_info_inst_slide["id"];
                                                $infoinst_slide_imagen=$fila_info_inst_slide["imagen"];
                                                $infoinst_slide_imagen_carpeta=$fila_info_inst_slide["carpeta"];
                                            ?>
                                                <li data-bottom-thumb="/imagenes/upload/<?php echo $infoinst_slide_imagen_carpeta."thumb/".$infoinst_slide_imagen; ?>">
                                              <img src="/imagenes/upload/<?php echo $infoinst_slide_imagen_carpeta."".$infoinst_slide_imagen; ?>" alt="" /></li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                                </div>
                                <?php } ?>

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
