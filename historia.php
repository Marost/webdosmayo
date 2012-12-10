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
$cetide=seleccionTabla(4, "id", "DM_historia", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Historia</title>

        <?php require_once("w-header-scripts.php"); ?>

        <!-- HISTORIA -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>
            var jHist = jQuery.noConflict();
            jHist(document).ready(function(){
                jHist.post("historia-datos.php", {tipo: 1},
                function(data){
                    jHist("#progressbar").removeClass("ocultar");
                    jHist("#tarifario_contenido").html(data);
                    jHist("#progressbar").addClass("ocultar");
                });
                
                jHist("#tarifario_cabecera ul li").click(function(){
                    jHist("#progressbar").removeClass("ocultar");
                    jHist("#tarifario_cabecera ul li").removeClass("selected");
                    jHist(this).addClass("selected");
                    var tipo = jHist(this).attr("rel");
                    jHist.post("historia-datos.php", {tipo: tipo},
                    function(data){
                        jHist("#tarifario_contenido").html(data);
                        jHist("#progressbar").addClass("ocultar");
                    });
                })
                
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

                            <div class="contenido">
                                
                                <div id="tarifario_cabecera">
                                  
                                  <ul>
                                    <li rel="1" id="historia" class="selected"><a href="javascript:;"><?php echo $historia["titulo"]; ?></a></li>
                                    <li rel="2" id="quienes_somos"><a href="javascript:;"><?php echo $quienes_somos["titulo"]; ?></a></li>
                                    <li rel="3" id="daniel_carrion"><a href="javascript:;"><?php echo $daniel_carrion["titulo"]; ?></a></li>
                                    <li rel="4" id="cetide"><a href="javascript:;"><?php echo $cetide["titulo"]; ?></a></li>
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
