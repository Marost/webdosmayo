<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE URL*/
$url_categoria=$_REQUEST["cat"];
$url_noticia_id=$_REQUEST["id"];
$url_noticia_url=$_REQUEST["url"];
$url_web=$web."".$url_categoria."/".$url_noticia_id."-".$url_noticia_url;

/*NOTICIA*/
$rst_noticia=mysql_query("SELECT * FROM DM_noticia WHERE id=$url_noticia_id;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

/*VARIABLES DE NOTICIA*/
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];
$noticia_imagen=$fila_noticia["imagen"];
$noticia_imagen_carpeta=$fila_noticia["carpeta_imagen"];
$noticia_categoria=$fila_noticia["categoria"];

/*NOTICIA - SLIDE*/
$rst_noticia_slide=mysql_query("SELECT * FROM DM_noticia_slide WHERE noticia=$url_noticia_id ORDER BY orden ASC;", $conexion);
$num_noticia_slide=mysql_num_rows($rst_noticia_slide);

/*NOTICIAS ANTERIORES*/
$rst_noticias_ant=mysql_query("SELECT * FROM DM_noticia WHERE categoria=$noticia_categoria AND id<>$url_noticia_id ORDER BY fecha_publicacion DESC LIMIT 5;", $conexion);

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
        <meta property="og:image" content="<?php echo $web.""."/imagenes/upload/".$noticia_imagen_carpeta."".$noticia_imagen; ?>" />
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

                            <?php if($noticia_imagen<>""){ ?>
                            <div class="imagen">
                                <img alt="<?php echo $noticia_titulo; ?>" title=" " src="/imagenes/upload/<?php echo $noticia_imagen_carpeta."".$noticia_imagen; ?>">
                            </div>
                            <?php } ?>

                            <div class="contenido">
                                <?php echo $noticia_contenido; ?>
                            </div>

                            <?php if($num_noticia_slide>0){ ?>
                            <div class="imagen_slide" style="display:none;">
                                <ul class="allinone_bannerWithPlaylist_list">   
                                    <?php while ($fila_noticia_slide=mysql_fetch_array($rst_noticia_slide)){
                                        /*VARIABLES DE SLIDE*/
                                        $noticia_slide_id=$fila_noticia_slide["id"];
                                        $noticia_slide_imagen=$fila_noticia_slide["imagen"];
                                        $noticia_slide_imagen_carpeta=$fila_noticia_slide["carpeta"];
                                    ?>
                                        <li data-bottom-thumb="/imagenes/upload/<?php echo $noticia_slide_imagen_carpeta."thumb/".$noticia_slide_imagen; ?>">
                                      <img src="/imagenes/upload/<?php echo $noticia_slide_imagen_carpeta."".$noticia_slide_imagen; ?>" alt="" /></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>

                            <?php if($noticia_categoria==1 or $noticia_categoria==3 or $noticia_categoria==4 or $noticia_categoria==6 or $noticia_categoria==7 or $noticia_categoria==8){ ?>
                            <div style="float:left; margin: 10px 0;">
                                <a href="nota-ant.php" style="font-weight: bold; font-size: 14px;">Regresar</a>
                            </div>
                            <?php }else{ ?>
                            <div style="float:left; margin: 10px 0;">
                                <a href="<?php echo $url_categoria; ?>" style="font-weight: bold; font-size: 14px;">Regresar</a>
                            </div>
                            <?php } ?>

                        </div>

                        <?php if($noticia_categoria==1 or $noticia_categoria==3 or $noticia_categoria==4 or $noticia_categoria==6 or $noticia_categoria==7 or $noticia_categoria==8){ ?>

                        <div class="nw-nota">

                            <h4>Noticias anteriores</h4>

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

                        </div>

                        <?php } ?>

                    </section>

                    <?php require_once("w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

<?php require_once("w-popup.php") ?>

    </body>
</html>
