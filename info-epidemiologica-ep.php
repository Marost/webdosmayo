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
        <title>Boletín Epidemiológico</title>

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

                        <div class="nw-nota info-epidemiologico">

                            <div class="titulo">
                                <h2>Boletín Epidemiológico</h2>
                            </div>

                            <div class="contenido">
                                
                                <h3>Documentos Adjuntos</h3>

                                <article class="down-item">
                                    <a href="/documentos/boletin-julio-2012.pdf" target="_blank"><img src="/imagenes/download.png" width="32" height="32"></a>
                                    <h4><a href="/documentos/boletin-julio-2012.pdf" target="_blank">Boletín Epidemiológico HNDM - Julio 2012</a></h4>
                                </article>

                                <article class="down-item">
                                    <a href="/documentos/boletin-agosto-2012.pdf" target="_blank"><img src="/imagenes/download.png" width="32" height="32"></a>
                                    <h4><a href="/documentos/boletin-agosto-2012.pdf" target="_blank">Boletín Epidemiológico HNDM - Agosto 2012</a></h4>
                                </article>

                                <a class="regresar" href="info-epidemiologica.php">Regresar</a>

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
        <title>Información Epidemiológica</title>

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
                                <h2>Información Epidemiológica</h2>
                            </div>

                            <div class="contenido info-epidemiologico">
                                
                                <article>
                                    <h3><a href="info-epidemiologica-ep.php">Boletín Epidemiológico</a></h3>
                                    <p>En los archivos de este link presentamos los Boletines Epidemiológicos del Hospital Nacional "Dos de Mayo", correspondiente al 2012.</p>
                                </article>

                                <article>
                                    <h3><a href="info-epidemiologica-ss.php">Sala Situacional</a></h3>
                                    <p>En los archivos de este link presentamos las Salas Situacionales del Hospital Nacional "Dos de Mayo", correspondiente al 2012.</p>
                                </article>

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