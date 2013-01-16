<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*DIRECTORIO*/
$rst_directorio=mysql_query("SELECT * FROM DM_directorio ORDER BY fecha_publicacion DESC;");

/*DIRECTORIO - OTROS FUNCIONARIOS*/
$rst_direct_funcionarios=mysql_query("SELECT * FROM DM_directorio_funcionarios ORDER BY titulo ASC;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Directorio Interno</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

        <!-- DIRECTORIO INTERNO -->
        <link rel="stylesheet" href="/libs/progressbar/ui.progress-bar.css">
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="/libs/progressbar/progress.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <?php require_once("w-header.php") ?>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <h3>Directorio Institucional</h3>

                        <?php while($fila_directorio=mysql_fetch_array($rst_directorio)){
                            $directorio_titulo=$fila_directorio["titulo"];
                            $directorio_cargo=$fila_directorio["cargo"];
                            $directorio_contenido=$fila_directorio["contenido"];
                            $directorio_imagen=$fila_directorio["imagen"];
                            $directorio_imagen_carpeta=$fila_directorio["imagen_carpeta"];
                        ?>
                        <article class="directorio-doctor">
                            <div class="datos">
                                <img src="/imagenes/upload/<?php echo $directorio_imagen_carpeta."".$directorio_imagen; ?>" width="270" height="160" alt="<?php echo $directorio_titulo; ?>" >
                                <div>
                                    <h2><?php echo $directorio_titulo; ?></h2>
                                    <p><?php echo $directorio_cargo; ?></p>
                                </div>
                            </div>

                            <div class="contenido">
                                <?php echo $directorio_contenido; ?>
                            </div>

                        </article>
                        <?php } ?>

                        <div id="medicos-lista">
                            <h3>Otros Funcionarios</h3>

                            <select id="lista" name="lista">
                                <option>[Seleccione]</option>
                                    <?php while($fila_direct_funcionarios=mysql_fetch_array($rst_direct_funcionarios)){
                                        $funcionarios_id=$fila_direct_funcionarios["id"];
                                        $funcionarios_titulo=$fila_direct_funcionarios["titulo"];
                                    ?>
                                    <option value="<?php echo $funcionarios_id; ?>"><?php echo $funcionarios_titulo; ?></option>
                                    <?php } ?>
                            </select>

                            <div id="progress_bar" class="ui-progress-bar ui-container">
                                <div class="ui-progress" style="width: 0%;">
                                    <span class="ui-label" style="display:none;"><b class="value">0%</b></span>
                                </div><!-- .ui-progress -->
                            </div>
                            
                            <div id="contenido">
                                <div id="datos"></div>
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
