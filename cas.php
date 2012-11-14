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
        <title>Contrato Administrativo de Servicios</title>

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

                        <div class="nw-nota cas">

                            <div class="titulo">
                                <h2>Contrato Administrativo de Servicios</h2>
                            </div>

                            <div class="contenido">

                                <select>
                                    <option>Seleccion año</option>
                                </select>

                                <select>
                                    <option>Seleccion mes</option>
                                </select>

                                <article>

                                    <a href="#"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Convocatoria N° 700</strong></p>
                                        <p><strong>Direccion General de Salud de las Peronas</strong></p>
                                        <p>Publicado el 07 de Noviembre del 2012</p>
                                    </div>

                                </article>

                                <article>

                                    <a href="#"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Convocatoria N° 699</strong></p>
                                        <p><strong>Direccion General de Salud de las Peronas</strong></p>
                                        <p>Publicado el 07 de Noviembre del 2012</p>
                                    </div>

                                </article>

                                <article>

                                    <a href="#"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Convocatoria N° 698</strong></p>
                                        <p><strong>Direccion General de Salud de las Peronas</strong></p>
                                        <p>Publicado el 07 de Noviembre del 2012</p>
                                    </div>

                                </article>

                                <article>

                                    <a href="#"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Convocatoria N° 697</strong></p>
                                        <p><strong>Direccion General de Salud de las Peronas</strong></p>
                                        <p>Publicado el 07 de Noviembre del 2012</p>
                                    </div>

                                </article>

                                <article>

                                    <a href="#"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Convocatoria N° 696</strong></p>
                                        <p><strong>Direccion General de Salud de las Peronas</strong></p>
                                        <p>Publicado el 07 de Noviembre del 2012</p>
                                    </div>

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
