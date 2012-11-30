<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES*/
$url_web=$web."sala-prensa";
$videos_sidebar=true;

################################################################
//PAGINACION DE NOTICIAS
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_noticias   = mysql_query("SELECT COUNT(*) as count FROM DM_noticia WHERE categoria<>2 AND categoria<>5 AND categoria<>9 ORDER BY fecha_publicacion DESC", $conexion);
$fila_noticias  = mysql_fetch_assoc($rst_noticias);
$generated      = intval($fila_noticias['count']);
$pagination     = new Pagination("6", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_noticias   = mysql_query("SELECT * FROM DM_noticia WHERE categoria<>2 AND categoria<>5 AND categoria<>9 ORDER BY fecha_publicacion DESC LIMIT $start, 6", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sala de Prensa</title>
        
        <?php require_once("w-header-scripts.php") ?>

        <!-- PAGINACION -->
        <link rel="stylesheet" href="/libs/pagination/pagination.css" media="screen">

        <!-- VIDEOS -->
        <script src="/js/jquery.tools.min.1.2.5.js"></script>
        <script type="text/javascript">
        var jcv = jQuery.noConflict();
        jcv(function(){
            jcv("#video_items ul").tabs("#video_select > div", {effect: 'fade', fadeOutSpeed: 400});
        });
        </script>

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

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Sala de Prensa</h2>
                            </div>

                            <div class="contenido">

<div id="tarifario_cabecera">
  
    <ul>
        <li class="selected"><a href="javascript:;">Alianzas</a></li>
        <li ><a href="javascript:;">Capacitación</a></li>
        <li ><a href="javascript:;">Equipos de Última Tecnología</a></li>
        <li ><a href="javascript:;">Noticias</a></li>
        <li ><a href="javascript:;">Proezas Médicas</a></li>
        <li ><a href="javascript:;">Reconocimientos Institucionales</a></li>
    </ul>

    <div>
        <img  id="progressbar" src="/imagenes/progressbar.gif" width="220" height="19" class="ocultar">
    </div>

</div>
                                
                                <?php while($fila_noticias=mysql_fetch_assoc($rst_noticias)){
                                    $noticias_id=$fila_noticias["id"];
                                    $noticias_url=$fila_noticias["url"];
                                    $noticias_categoria_id=$fila_noticias["categoria"];
                                    $noticias_categoria=seleccionTabla($noticias_categoria_id, "id", "DM_noticia_categoria", $conexion);
                                    $noticias_titulo=$fila_noticias["titulo"];
                                    $noticias_contenido=soloDescripcion($fila_noticias["contenido"]);
                                    $noticias_imagen=$fila_noticias["imagen"];
                                    $noticias_imagen_carpeta=$fila_noticias["carpeta_imagen"];
                                    $noticias_fecha_total=explode(" ",$fila_noticias["fecha_publicacion"]);
                                    $noticias_fecha=explode("-", $noticias_fecha_total[0]);
                                ?>

                                <article class="categoria_noticias">

                                    <?php if($noticias_imagen<>""){ ?>
                                    <div class="datos">
                                        <p class="categoria"><?php echo $noticias_categoria["categoria"] ?></p>
                                        <h3><a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></h3>
                                        <div class="imagen">
                                            <img src="imagenes/upload/<?php echo $noticias_imagen_carpeta."thumb200/".$noticias_imagen; ?>" width="300" height="200" alt="<?php echo $noticias_titulo; ?>">
                                        </div>
                                        <p><?php echo $noticias_contenido; ?></p>
                                        <a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>">Más...</a>
                                    </div>
                                    <?php }else{ ?>
                                    
                                    <div class="datos an100">
                                        <p class="categoria"><?php echo $noticias_categoria["categoria"] ?></p>
                                        <h3><a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></h3>
                                        <p><?php echo $noticias_contenido; ?></p>
                                        <a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>">Más...</a>
                                    </div>

                                    <?php } ?>

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