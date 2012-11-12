<?php 
/*CONEXION Y FUNCIONES*/
require_once("../panel@hndm/conexion/conexion.php");
require_once("../panel@hndm/conexion/funciones.php");
require_once("../panel@hndm/conexion/funcion-paginacion.php");
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

        <?php require_once("../w-header-scripts.php") ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <div class="header-container">
                
                <?php require_once("../w-header.php") ?>

            </div>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Un resonador magnético de última tecnología posee el Hospital Nacional Dos de Mayo</h2>
                            </div>

                            <div class="imagen">
                                <img width="500" height="320" alt="" title=" " src="/imagenes/upload/angiografia-digital-1.jpg">
                            </div>

                            <div class="contenido">
<p>Al servicio de la población se encuentra el resonador magnético que posee el Hospital Nacional “Dos de Mayo”, a través del cual se pueden realizar estudios de alta complejidad a nivel del cerebro (encéfalo), corazón, abdomen, pelvis, articulaciones y demás órganos.</p>

<p>Se trata de un equipo de última generación de 3T (alto campo magnético) adquirido por el establecimiento en el año 2010.</p>

<p>Con este moderno resonador magnético se puede realizar estudios especializados como angiografías en general, tractografías, espectroscopias, difusión y perfusión de encéfalo, análisis morfológicos y funcionales al corazón, difusión  de cuerpo entero para estudios oncológicos.</p>

<p>Cada análisis puede demorar un máximo de 30 minutos, por ello diariamente se realizan en promedio 10 pruebas. Para acceder a este equipo, las personas interesadas tan sólo deben acercarse con la orden médica a la recepción del servicio, ubicado en el sótano del Centro de Tratamiento Intensivo y Diagnóstico Especializado (CETIDE) de nuestra institución.</p>

<p>A cargo de este equipo están siete especialistas altamente calificados del Departamento de Diagnóstico por Imágenes.</p>
                            </div>

                            <div class="imagen">
                                <img width="330" alt="" title=" " src="/imagenes/upload/resonador.jpg">
                            </div>

                        </div>

                    </section>

                    <?php require_once("../w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("../w-footer.php") ?>

        </div>

<?php require_once("../w-popup.php") ?>
        
    </body>
</html>
