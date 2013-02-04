<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE URL*/
$url_categoria=$_REQUEST["cat"];
$url_web=$web."videos";

/*LISTA DE NOTICIAS*/
$rst_noticias=mysql_query("SELECT * FROM DM_videos ORDER BY titulo ASC;", $conexion);

################################################################
//PAGINACION DE NOTICIAS
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$query     = mysql_query("SELECT COUNT(*) as count FROM DM_videos ORDER BY fecha_publicacion DESC;", $conexion);
$row       = mysql_fetch_assoc($query);
$generated = intval($row['count']);
$pagination = new Pagination("6", $generated, $page, $url_web."&page", 1, 0);
$start = $pagination->prePagination();
$query  = mysql_query("SELECT * FROM DM_videos ORDER BY fecha_publicacion DESC LIMIT $start, 6", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Videos</title>

        <?php require_once("w-header-scripts.php") ?>

        <!-- PAGINACION -->
        <link rel="stylesheet" href="/libs/pagination/pagination.css" media="screen">

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
                                <h2>Videos</h2>
                            </div>

                            <div class="contenido">

                                <?php while($row = mysql_fetch_assoc($query)){
                                    $noticiacat_id=$row["id"];
                                    $noticiacat_url=$row["url"];
                                    $noticiacat_titulo=$row["titulo"];
                                    $noticiacat_contenido=soloDescripcion($row["contenido"]);
                                    $noticiacat_video=$row["video"];
                                    
                                ?>
                                
                                    <article class="categoria_noticias">

                                        <div class="datos">
                                            <h3><a href="video/<?php echo $noticiacat_id."/".$noticiacat_url; ?>">
                                                <?php echo $noticiacat_titulo; ?></a></h3>
                                            <div class="imagen">
                                                <iframe width="300" height="169" src="http://www.youtube.com/embed/<?php echo $noticiacat_video; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <p><?php echo $noticiacat_contenido; ?></p>
                                            <a href="video/<?php echo $noticiacat_id."/".$noticiacat_url; ?>">Más...</a>
                                        </div>

                                    </article>

                                    <?php } ?>
                                
                                    <div style="width=100%; float:left;">
                                        <?php $pagination->pagination(); ?>
                                    </div>

                                <?php } ?>

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
