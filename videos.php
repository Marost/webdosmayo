<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*SCRIPT*/
$script_slide_noticia=true;

/*VARIABLES DE URL*/
$url_categoria=$_REQUEST["cat"];
$url_noticia_id=$_REQUEST["id"];
$url_noticia_url=$_REQUEST["url"];
$url_web=$web."".$url_categoria."/".$url_noticia_id."-".$url_noticia_url;

/*NOTICIA*/
$rst_noticia=mysql_query("SELECT * FROM DM_videos WHERE id=$url_noticia_id;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

/*VARIABLES DE NOTICIA*/
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];
$noticia_video=$fila_noticia["video"];

/*NOTICIAS ANTERIORES*/
$rst_noticias_ant=mysql_query("SELECT * FROM DM_videos WHERE id<>$url_noticia_id ORDER BY fecha_publicacion DESC LIMIT 5;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $noticia_titulo; ?></title>
        
        <!-- OPEN GRAPH -->
        <meta property="og:title" content="<?php echo $noticia_titulo; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $url_web; ?>" />
        <meta property="og:site_name" content="<?php echo $web_nombre; ?>" />
        <meta property="og:description" content="<?php echo soloDescripcion($noticia_contenido); ?>"/>
        <meta property="fb:admins" content="1376286793" />

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
                                <h2><?php echo $noticia_titulo; ?></h2>
                            </div>

                            <div class="contenido">
                                <p><?php echo soloDescripcion($noticia_contenido); ?></p>
                            </div>

                            <div class="imagen">
                                <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $noticia_video; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <div class="contenido">
                                <?php echo $noticia_contenido_comp[1]; ?>
                            </div>

                        </div>

                        <div class="nw-nota">

                            <h4>Videos anteriores</h4>

                            <div class="contenido">
                                <ul>
                                    <?php while($fila_noticia_ant=mysql_fetch_array($rst_noticias_ant)){
                                        $notant_id=$fila_noticia_ant["id"];
                                        $notant_titulo=$fila_noticia_ant["titulo"];
                                        $notant_url=$fila_noticia_ant["url"];
                                        $notant_url_final=$web."".$url_categoria."/".$notant_id."-".$notant_url;
                                    ?>
                                    <li><a href="<?php echo $notant_url_final; ?>"><?php echo $notant_titulo; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div style="float:left; margin: 10px 0;">
                                <a href="cat/<?php echo $url_categoria; ?>" style="font-weight: bold; font-size: 14px;">Más...</a>
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
