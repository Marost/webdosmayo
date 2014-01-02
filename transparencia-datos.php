<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE SCRIPTS*/
$script_popup=false;
$script_slide_campana=false;
$script_tabs=false;
$script_slnot_prin=false;

//TRANSPARENCIA
$rst_transp=mysql_query("SELECT * FROM DM_transp ORDER BY fecha_publicacion DESC;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Transparencia | Hospital Nacional Dos de Mayo</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <?php require_once("w-header.php") ?>

            <div class="main-container">
                
                <h2>Transparencia</h2>
                <ul>
                    <?php while($fila_transp=mysql_fetch_array($rst_transp)){
                            $transp_id=$fila_transp["id"];
                            $transp_url=$fila_transp["url"];
                            $transp_titulo=$fila_transp["titulo"];

                            //TRANSPARENCIA ITEM
                            $rst_transpItem=mysql_query("SELECT * FROM DM_transp_sub WHERE transparencia=$transp_id ORDER BY id DESC", $conexion);
                    ?>
                        <li><?php echo $transp_titulo; ?></li>

                            <ul>
                                <?php while($fila_transpItem=mysql_fetch_array($rst_transpItem)){
                                    //VARIABLES
                                    $transpItem_id=$fila_transpItem["id"];
                                    $transpItem_url=$fila_transpItem["url"];
                                    $transpItem_titulo=$fila_transpItem["titulo"];

                                    //URLS
                                    $transpItem_UrlWeb=$web."transparencia/".$transp_url."/".$transpItem_id."-".$transpItem_url;
                                ?>
                                <li>
                                    <a href="<?php echo $transpItem_UrlWeb; ?>">
                                        <?php echo $transpItem_titulo; ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>

                    <?php } ?>
                </ul>

            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

        
    </body>
</html>
