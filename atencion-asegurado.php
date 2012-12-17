<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*ATENCION AL ASEGURADO*/
$rst_atencion=mysql_query("SELECT * FROM DM_atencion_asegurado ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_atencion=mysql_fetch_array($rst_atencion);

/*VARIABLES*/
$atencion_id=$fila_atencion["id"];
$atencion_titulo=$fila_atencion["titulo"];
$atencion_contenido=$fila_atencion["contenido"];

/*NOTICIA - SLIDE*/
$rst_noticia_slide=mysql_query("SELECT * FROM DM_atencion_asegurado_slide WHERE noticia=$atencion_id ORDER BY orden ASC;", $conexion);
$num_noticia_slide=mysql_num_rows($rst_noticia_slide);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Atención al Asegurado</title>
        
        <?php require_once("w-header-scripts.php") ?>

        <?php if($num_noticia_slide>0){ ?>
        <!-- SLIDE NOTICIA -->
        <link href="/libs/allinone_banner/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
        <script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
        <script src="/libs/allinone_banner/allinone_thumbnailsBanner.js"></script>
        <script src="/libs/allinone_banner/reflection.js" type="text/javascript"></script>
        <!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
        <script>
        var jNotSld=jQuery.noConflict();

        jNotSld(document).on("ready", startSlide);

        function startSlide(){
            jNotSld('.imagen_slide div').allinone_thumbnailsBanner({
                skin: 'cool',
                numberOfThumbsPerScreen:4,
                width: 620,
                height: 360,
                thumbsWrapperMarginTop:0
            });
        }
        </script>
        <?php } ?>

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

                        <div class="nw-nota borde-bottom">

                            <div class="titulo">
                                <h2>Atención al Asegurado</h2>
                            </div>

                            <div class="contenido">

                                <?php echo $atencion_contenido; ?>

                            </div>

                            <?php if($num_noticia_slide>0){ ?>
                            <div class="imagen_slide">

                                <div style="display:none;">
                                
                                    <ul class="allinone_carousel_list">   
                                        <?php while ($fila_noticia_slide=mysql_fetch_array($rst_noticia_slide)){
                                            /*VARIABLES DE SLIDE*/
                                            $noticia_slide_id=$fila_noticia_slide["id"];
                                            $noticia_slide_imagen=$fila_noticia_slide["imagen"];
                                            $noticia_slide_imagen_carpeta=$fila_noticia_slide["carpeta"];
                                        ?>
                                            <li data-bottom-thumb="/imagenes/upload/<?php echo $noticia_slide_imagen_carpeta."thumb/".$noticia_slide_imagen; ?>">
                                          <img src="/imagenes/upload/<?php echo $noticia_slide_imagen_carpeta."".$noticia_slide_imagen; ?>" alt="" /></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </div>
                            <?php } ?>

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
