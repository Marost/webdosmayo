<?php 
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*SCRIPTS*/
$script_slide_noticia=true;
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
                                
                                <article style="float:left;">
                                    <h4>Misión</h4>
                                    <p>Brindar servicios de salud de alta complejidad, desarrollando actividades de prevención de riesgos, promoción, recuperación y rehabilitación en salud, a la población en todas las etapas de su vida con equidad y calidad.</p>
                                    <p style="text-align:center;"><img src="imagenes/upload/mision.jpg" width="400" style="border: 5px solid #999;"></p>
                                </article>

                                <article style="float:left;">
                                    <h4>Visión</h4>
                                    <p>Ser al 2013, un hospital acreditado, de alta capacidad resolutiva con tecnología de punta, que brinde servicios integrales de salud, de calidad, en forma humanística que incentive la investigación, docencia y desarrollo tecnológico, con personas comprometidas, solidarias, competentes que trabajen en equipo y con ética, garantizando a la población atención oportuna, equitativa, respetando sus derechos.</p>
                                    <p style="text-align:center;"><img src="imagenes/upload/vision.jpg" width="400" style="border: 5px solid #999;"></p>
                                </article>

                                <div class="imagen_slide" style="display:none;">
                                    <ul class="allinone_bannerWithPlaylist_list">
                                        <li data-bottom-thumb="/imagenes/mision-vision/thumb/img1.jpg">
                                          <img src="/imagenes/mision-vision/img1.jpg" alt="" /></li>
                                        <li data-bottom-thumb="/imagenes/mision-vision/thumb/img2.jpg">
                                          <img src="/imagenes/mision-vision/img2.jpg" alt="" /></li>
                                        <li data-bottom-thumb="/imagenes/mision-vision/thumb/img3.jpg">
                                          <img src="/imagenes/mision-vision/img3.jpg" alt="" /></li>
                                        <li data-bottom-thumb="/imagenes/mision-vision/thumb/img4.jpg">
                                          <img src="/imagenes/mision-vision/img4.jpg" alt="" /></li>
                                        <li data-bottom-thumb="/imagenes/mision-vision/thumb/img5.jpg">
                                          <img src="/imagenes/mision-vision/img5.jpg" alt="" /></li>
                                        <li data-bottom-thumb="/imagenes/mision-vision/thumb/img6.jpg">
                                          <img src="/imagenes/mision-vision/img6.jpg" alt="" /></li>
                                    </ul>
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
