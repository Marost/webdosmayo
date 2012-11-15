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
        <title>Atención al Asegurado</title>
        
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

                        <div class="nw-nota borde-bottom">

                            <div class="titulo">
                                <h2>Atención al Asegurado</h2>
                            </div>

                            <div class="contenido">

                                <p style="text-align:center;"><img src="imagenes/upload/atencion-asegurado.jpg"></p>

                                <p><strong>&iquest;C&Oacute;MO&nbsp; ME AFILIO AL SEGURO INTEGRAL DE SALUD- SIS?</strong></p>
                                <ol>
                                    <li>
                                        El interesado solicita la afiliaci&oacute;n en el establecimiento de salud m&aacute;s cercano a su domicilio.</li>
                                    <li>
                                        El responsable de la afiliaci&oacute;n brinda informaci&oacute;n sobre la cobertura y beneficios al solicitante.
                                        <ul style="">
                                            <li>
                                                Solicita el DNI y/o el CE, para iniciar el proceso de afiliaci&oacute;n al o los interesados.</li>
                                            <li>
                                                Consulta el enlace del SISFOH, ubicado en el modulo de afiliaci&oacute;n de la p&aacute;gina web del SIASIS.</li>
                                            <li>
                                                Verifica las condiciones para la afiliaci&oacute;n al seguro SUBSIDIADO del SIS:</li>
                                        </ul>
                                        <ol style="margin-left: 40px;">
                                            <li>
                                                Elegibilidad en el SISFOH</li>
                                            <li>
                                                No contar con otro seguro de salud (ESSALUD u otro seguro de salud).</li>
                                        </ol>
                                    </li>
                                </ol>

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
