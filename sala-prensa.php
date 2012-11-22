<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES*/
$url_web=$web."sala-prensa";

################################################################
//PAGINACION DE NOTICIAS
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_noticias   = mysql_query("SELECT COUNT(*) as count FROM DM_noticia WHERE categoria<>2 AND categoria<>5 AND categoria<>9 ORDER BY fecha_publicacion DESC", $conexion);
$fila_noticias  = mysql_fetch_assoc($rst_noticias);
$generated      = intval($fila_noticias['count']);
$pagination     = new Pagination("7", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_noticias   = mysql_query("SELECT * FROM DM_noticia WHERE categoria<>2 AND categoria<>5 AND categoria<>9 ORDER BY fecha_publicacion DESC LIMIT $start, 7", $conexion);

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
                                <h2>Sala de Prensa</h2>
                            </div>

                            <div class="contenido">
                                
                                <?php while($fila_noticias=mysql_fetch_assoc($rst_noticias)){
                                    $noticias_id=$fila_noticias["id"];
                                    $noticias_url=$fila_noticias["url"];
                                    $noticias_categoria=seleccionTabla($fila_noticias["categoria"], "id", "DM_noticia_categoria", $conexion);
                                    $noticias_titulo=$fila_noticias["titulo"];
                                    $noticias_contenido=$fila_noticias["contenido"];
                                    $noticias_imagen=$fila_noticias["imagen"];
                                    $noticias_imagen_carpeta=$fila_noticias["carpeta_imagen"];
                                    $noticias_fecha=$fila_noticias["fecha_publicacion"];
                                ?>

                                <article class="categoria_noticias">

                                    <?php if($noticias_imagen<>""){ ?>
                                    <div class="imagen">
                                        <img src="imagenes/upload/<?php echo $noticias_imagen_carpeta."thumb200/".$noticias_imagen; ?>" width="200" height="135" alt="<?php echo $noticias_titulo; ?>">
                                    </div>

                                    <div class="datos">
                                        <p class="categoria"><?php echo $noticias_categoria["categoria"] ?></p>
                                        <h3><a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></h3>
                                        <p><?php echo $noticias_contenido; ?></p>
                                    </div>
                                    <?php }else{ ?>
                                    
                                    <div class="datos an100">
                                        <p class="categoria"><?php echo $noticias_categoria["categoria"] ?></p>
                                        <h3><a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></h3>
                                        <p><?php echo $noticias_contenido; ?></p>
                                    </div>

                                    <?php } ?>

                                </article>

                                <?php } $pagination->pagination(); ?>

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