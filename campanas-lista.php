<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE URL*/
$url_web=$web."campanias";

################################################################
//PAGINACION
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_noticias   = mysql_query("SELECT COUNT(*) as count FROM DM_campania ORDER BY fecha_publicacion DESC", $conexion);
$fila_noticias  = mysql_fetch_assoc($rst_noticias);
$generated      = intval($fila_noticias['count']);
$pagination     = new Pagination("6", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_noticias   = mysql_query("SELECT * FROM DM_campania ORDER BY fecha_publicacion DESC LIMIT $start, 6", $conexion);


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

        <!-- ALTO DE DIV -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
        var jald = jQuery.noConflict();
        function equalHeight(group) {
           tallest = 0;
           group.each(function() {
              thisHeight = jald(this).height();
              if(thisHeight > tallest) {
                 tallest = thisHeight;
              }
           });
           group.height(tallest);
        }

        jald(document).ready(function() {
           equalHeight(jald(".categoria_noticias"));
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

                        <div class="nw-nota salapr">

                            <div class="titulo">
                                <h2>Campañas Especiales</h2>
                            </div>

                            <div class="contenido">

                                <?php while($fila_noticias=mysql_fetch_assoc($rst_noticias)){
                                    $noticias_id=$fila_noticias["id"];
                                    $noticias_url=$fila_noticias["url"];
                                    $noticias_titulo=$fila_noticias["titulo"];
                                    $noticias_imagen=$fila_noticias["imagen"];
                                    $noticias_imagen_carpeta=$fila_noticias["carpeta_imagen"];
                                    $noticias_fecha_total=explode(" ",$fila_noticias["fecha_publicacion"]);
                                    $noticias_fecha=explode("-", $noticias_fecha_total[0]);

                                    /*ANCHO Y ALTO*/
                                    $noticias_imagen_url=$web."imagenes/upload/".$noticias_imagen_carpeta."".$noticias_imagen;
                                    $noticias_imagen_dimensiones=getimagesize($noticias_imagen_url);
                                    $noticias_imagen_ancho=$noticias_imagen_dimensiones[0];
                                    $noticias_imagen_alto=$noticias_imagen_dimensiones[1];
                                    $ancho_final = 250;
                                    $alto_final = ($ancho_final / $noticias_imagen_ancho) * $noticias_imagen_alto;

                                ?>

                                <article class="categoria_noticias">

                                    <div class="datos">
                                        <p class="categoria"><?php echo nombreFecha($noticias_fecha[0],$noticias_fecha[1],$noticias_fecha[2]); ?></p>
                                        <h3><a href="campanias/<?php echo $noticias_id."/".$noticias_url; ?>">
                                            <?php echo $noticias_titulo; ?></a></h3>
                                        <div class="imagen">
                                            <a href="campanias/<?php echo $noticias_id."/".$noticias_url; ?>">
                                            <img src="imagenes/upload/<?php echo $noticias_imagen_carpeta."".$noticias_imagen; ?>" width="250" height="<?php echo $alto_final; ?>" alt="<?php echo $noticias_titulo; ?>">
                                            </a>
                                        </div>
                                        <a href="campanias/<?php echo $noticias_id."/".$noticias_url; ?>">Más...</a>
                                    </div>

                                </article>
                                <?php } ?>

                                <div style="width=100%; float:left;">
                                    <?php $pagination->pagination(); ?>
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
