<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE URL*/
$idnota=$_REQUEST["id"];

/*CAMPAÑAS*/
$rst_campanias=mysql_query("SELECT * FROM DM_campania WHERE id=$idnota;", $conexion);
$fila_campanias=mysql_fetch_array($rst_campanias);

/*VARIABLES*/
$campania_titulo=$fila_campanias["titulo"];

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $campania_titulo; ?></title>

        <?php require_once("w-header-scripts.php") ?>

        <!-- CAMPAÑA -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>
            var jHist = jQuery.noConflict();
            jHist(document).ready(function(){
                jHist.post("campanas-datos.php", {tipo: "proposito", id: <?php echo $idnota; ?>},
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
                    jHist.post("historia-datos.php", {tipo: tipo, id: <?php echo $idnota; ?>},
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

                        <div class="nw-nota campania">

                            <div class="titulo">
                                <h2><?php echo $campania_titulo; ?></h2>
                            </div>

                            <div class="contenido">

                                <div id="tarifario_cabecera">
                                  
                                  <ul>
                                    <li rel="proposito" id="proposito" class="selected"><a href="javascript:;">Proposito de la Campaña</a></li>
                                    <li rel="material" id="material"><a href="javascript:;">Material Comunicacional</a></li>
                                    <li rel="nota-prensa" id="nota-prensa"><a href="javascript:;">Nota de Prensa</a></li>
                                    <li rel="rebote" id="rebote"><a href="javascript:;">Rebote en Medios</a></li>
                                  </ul>

                                </div>

                                <div>
                                    <img  id="progressbar" src="/imagenes/progressbar.gif" width="220" height="19" class="ocultar">
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
