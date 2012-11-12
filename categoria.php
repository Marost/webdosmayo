<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE URL*/
$url_categoria=$_REQUEST["cat"];
$url_web=$web."".$url_categoria;

/*CATEGORIA*/
$rst_categoria=mysql_query("SELECT * FROM DM_noticia_categoria WHERE url='$url_categoria';", $conexion);
$fila_categoria=mysql_fetch_array($rst_categoria);

/*VARIABLES DE CATEGORIA*/
$categoria_id=$fila_categoria["id"];
$categoria_titulo=$fila_categoria["titulo"];

/*LISTA DE NOTICIAS*/
$rst_noticias=mysql_query("SELECT * FROM DM_noticia WHERE categoria=$categoria_id;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $categoria_titulo; ?></title>
        <meta name="description" content="">

        <?php require_once("../w-header-scripts.php") ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <div class="header-container">
                <?php require_once("../w-header.php") ?>

            </div>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Especialidades</h2>
                            </div>

                            <div class="contenido">
                                <ul>

                                    <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
                                            $noticias_id=$fila_noticias["id"];
                                            $noticias_titulo=$fila_noticias["titulo"];
                                            $noticias_url=$fila_noticias["url"];
                                    ?>
                                        <li><a href="/<?php echo $url_categoria."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></li>
                                    <?php } ?>

                                    <li><a href="#">Medicina</a></li>

                                </ul>
                            </div>

                        </div>

                    </section>

                    <?php require_once("../w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("../w-footer.php") ?>

        </div>

<?php require_once("../w-popup.php") ?>
        
    </body>
</html>
