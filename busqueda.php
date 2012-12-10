<?php
//CONEXION
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

//VARIABLES
$buscar=$_REQUEST["buscar"];

if ($buscar!=""){
    $rst_medico=mysql_query("SELECT * FROM DM_medicos WHERE nombre LIKE '%$buscar%' ORDER BY nombre ASC;", $conexion);
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hospital Nacional Dos de Mayo</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

        <!-- CSS SELECT -->
        <link rel="stylesheet" href="/libs/css3-form/general/light/general-light.css" />

        <!-- CSS SEARCH -->
        <link rel="stylesheet" href="/libs/css3-form/search/light/search-light.css" />

        <!--[if lt IE 9]>
                <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

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

                        <h2>Busca a tu Médico</h2>

                        <form name="busqueda" method="GET" action="busqueda.php" class="search-form noframe nobtn rsmall">

                            <input type="text" name="buscar" class="search-input" placeholder="Buscar..." style="width: 350px;" >

                            <input class="form-btn" value="Buscar" type="submit" style="margin-left:10px;">

                        </form>
                    
                        <ul>
                            <?php while($fila_medico=mysql_fetch_array($rst_medico)){ ?>
                            <li>
                                <p><strong><?php echo $fila_medico["nombre"]; ?></strong>: <?php echo $fila_medico["oficina"]; ?></p>
                            </li>
                            <?php } ?>
                        </ul>

                    </section>

                    <?php require_once("w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

<?php require_once("w-popup.php") ?>

    </body>
</html>
