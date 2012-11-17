<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*CAS*/
$rst_cas=mysql_query("SELECT * FROM DM_cas ORDER BY fecha_publicacion DESC", $conexion);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contrato Administrativo de Servicios</title>

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

                        <div class="nw-nota cas">

                            <div class="titulo">
                                <h2>Contrato Administrativo de Servicios</h2>
                            </div>

                            <div class="contenido">

                                <select>
                                    <option>Seleccion año</option>
                                </select>

                                <select>
                                    <option>Seleccion mes</option>
                                </select>

                                <table class="tabla_cas" width="710" border="0">
                                    <tbody>

                                        <?php while($fila_cas=mysql_fetch_array($rst_cas){
                                            $cas_id=$fila_cas["id"];
                                            $cas_titulo=$fila_cas["titulo"];
                                            $cas_tipo=$fila_cas["tipo"];
                                            $cas_observaciones=$fila_cas["observaciones"];

                                            /*DOCUMENTOS*/
                                            $rst_cas_docs=mysql_query("SELECT * FROM DM_cas_documentos WHERE cas=$cas_id ORDER BY orden ASC;", $conexion)
                                        ?>
                                        <tr>
                                            <td class="dato_cabecera tdcab-sup" width="104" height="25">Tipo</td>
                                            <td class="dato_contenido tdcont-sup"><?php echo $cas_tipo; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="dato_cabecera">Nombre</td>
                                            <td class="dato_contenido"><?php echo $cas_titulo; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="dato_cabecera">Documentos</td>
                                            <td class="dato_contenido">
                                                <ul>
                                                    <?php while($fil_cas_docs=mysql_fetch_array($rst_cas_docs)){ ?>
                                                    <li><a class="word48" title="" href=""></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                        </tr>
                                  
                                        <tr>
                                            <td class="dato_cabecera tdcab-inf">Observaciones</td>
                                            <td class="dato_contenido">
                                                <?php echo $cas_observaciones; ?>
                                            </td>
                                        </tr>
                                        <tr><td></td><td></td></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

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
