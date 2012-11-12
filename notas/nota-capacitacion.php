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
                                <h2>Trabajadores del HNDM son capacitados en los beneficios de la lactancia materna</h2>
                            </div>

                            <div class="imagen">
                                <img alt="" title=" " src="/imagenes/upload/nota-capacitacion.jpg">
                            </div>

                            <div class="contenido">
                                <p>El Comité Institucional de Lactancia Materna del Hospital Nacional “Dos de Mayo” viene capacitando, promoviendo y difundiendo los beneficios de la leche materna entre los trabajadores del nosocomio, con la organización permanente de charlas en las principales Oficinas, Departamentos y Servicios de la institución.</p>
                                <p>Se viene realizando 21 charlas al personal del HNDM, Dirección General, Servicio Social, Farmacia, Costura, Contabilidad, Logística, Nutrición, Cuna, Personal, Obstetricia, Vigilancia, Limpieza, Ropería, Neonatología, entre otros. En esta actividad, se resalta la importancia de la lactancia materna exclusiva (hasta los 6 meses de edad) y complementaria (a partir de los 6 meses hasta los 2 años) en la salud y desarrollo de los niños.</p>
                            </div>

                            <div class="imagen">
                                <img width="330" alt="" title=" " src="/imagenes/upload/nota-capacitacion-2.jpg">
                                <img width="330" alt="" title=" " src="/imagenes/upload/nota-capacitacion-3.jpg">
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
