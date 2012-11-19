<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES - SCRIPTS*/
$script_historia=true;

/*HISTORIA - CABECERA*/
$historia=seleccionTabla(1, "id", "DM_historia", $conexion);
$quienes_somos=seleccionTabla(2, "id", "DM_historia", $conexion);
$daniel_carrion=seleccionTabla(3, "id", "DM_historia", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tarifario</title>

        <?php require_once("w-header-scripts.php"); ?>

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

                            <div class="contenido">
                                
                                <div id="tarifario_cabecera">
                                  <ul>
                                    
                                    <li class="selected"><a id="historia" rel="1" href="javascript:;"><?php echo $historia["titulo"]; ?></a></li>
                                    <li><a id="quienes_somos" rel="2" href="javascript:;"><?php echo $quienes_somos["titulo"]; ?></a></li>
                                    <li><a id="daniel_carrion" rel="3" href="javascript:;"><?php echo $daniel_carrion["titulo"]; ?></a></li>
                                    
                                  </ul>
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
