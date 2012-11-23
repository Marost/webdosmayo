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
        <title>Campañas Especiales</title>

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

                        <div class="nw-nota campania">

                            <div class="titulo">
                                <h2>Campañas Especiales</h2>
                            </div>

                            <div class="contenido">

                                <div id="tarifario_cabecera">
                                  
                                  <ul>
                                    <li rel="1" id="proposito" class="selected"><a href="javascript:;">Proposito de la Campaña</a></li>
                                    <li rel="2" id="material"><a href="javascript:;">Material Comunicacional</a></li>
                                    <li rel="3" id="nota-prensa"><a href="javascript:;">Nota de Prensa</a></li>
                                    <li rel="4" id="rebote-medios"><a href="javascript:;">Rebote en Medios</a></li>
                                  </ul>

                                  <div>
                                        <img  id="progressbar" src="/imagenes/progressbar.gif" width="220" height="19" class="ocultar">
                                  </div>

                                </div>

                                <div id="tarifario_contenido"></div>
                            
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
