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
$categoria_titulo=$fila_categoria["categoria"];

/*LISTA DE NOTICIAS*/
$rst_noticias=mysql_query("SELECT * FROM DM_noticia WHERE categoria=$categoria_id ORDER BY titulo ASC;", $conexion);

################################################################
//PAGINACION DE NOTICIAS
require("class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$query     = mysql_query("SELECT COUNT(*) as count FROM DM_noticia WHERE categoria=$categoria_id;", $connect);
$row       = mysql_fetch_assoc($query);
$generated = intval($row['count']);
$pagination = new Pagination("10", $generated, $page, $url_web."&page", 1, 0);
$start = $pagination->prePagination();
$query  = mysql_query("SELECT * FROM DM_noticia WHERE categoria=$categoria_id LIMIT $start, 10");

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

        <?php require_once("w-header-scripts.php") ?>

        <!-- PAGINACION -->
        <link rel="stylesheet" href="/libs/pagination/pagination.css" media="screen">

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
                                <h2><?php echo $categoria_titulo; ?></h2>
                            </div>

                            <div class="contenido">

                                <?php if($categoria_id==2 or $categoria_id==5){ ?>
                                <ul>

                                    <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
                                            $noticias_id=$fila_noticias["id"];
                                            $noticias_titulo=$fila_noticias["titulo"];
                                            $noticias_contenido=$fila_noticias["contenido"];
                                            $noticias_url=$fila_noticias["url"];
                                            if($noticias_contenido==""){ $noticias_url_final="construccion";}
                                            else{ $noticias_url_final=$url_categoria."/".$noticias_id."-".$noticias_url; }
                                    ?>
                                        <li><a href="<?php echo $noticias_url_final; ?>"><?php echo $noticias_titulo; ?></a></li>
                                    <?php } ?>
                                    
                                </ul>
                                <?php }else{ ?>
                                <?php while($row = mysql_fetch_assoc($query)){
                                    $noticiacat_id=$row["id"];
                                    $noticiacat_url=$row["url"];
                                    $noticiacat_titulo=$row["titulo"];
                                    $noticiacat_contenido=soloDescripcion($row["contenido"]);
                                    $noticiacat_imagen=$row["imagen"];
                                    $noticiacat_imagen_carpeta=$row["carpeta_imagen"];
                                ?>
                                
                                    <article ="categoria_noticias">

                                        <div class="imagen">
                                            <img src="imagenes/upload/<?php echo $noticiacat_imagen_carpeta."".$noticiacat_imagen; ?>">
                                        </div>

                                        <div class="datos">
                                            <h3><a href="<?php echo $url_categoria."/".$noticiacat_id."-".$noticiacat_url; ?>"><?php echo $noticiacat_titulo; ?></a></h3>
                                            <p><?php echo $noticiacat_contenido; ?></p>
                                        </div>


                                    </article>
                                
                                <?php } $pagination->pagination(); } ?>

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
