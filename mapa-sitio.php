<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*APOYO AL DIAGNOSTICO*/
$rst_mp_apoyodiag=mysql_query("SELECT * FROM DM_noticia WHERE categoria=2 ORDER BY titulo ASC", $conexion);

/*ESPECIALIDADES*/
$rst_mp_especialidades=mysql_query("SELECT * FROM DM_noticia WHERE categoria=5 ORDER BY titulo ASC;", $conexion);

/*NUESTRAS OFICINAS*/
$rst_mp_oficinas=mysql_query("SELECT * FROM DM_noticia WHERE categoria=9 ORDER BY titulo ASC;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mapa de Sitio</title>

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

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Mapa de Sitio</h2>
                            </div>

                            <div class="contenido">
                                    
                                <ul id="mapa-sitio">
                                    <li><a href="">Inicio</a></li>
                                    <li><a href="">Institucional</a>
                                        <ul>
                                            <li><a href="">Directorio</a></li>
                                            <li><a href="">Historia</a></li>
                                            <li><a href="">Información Institucional</a></li>
                                            <li><a href="">Nuestras Oficinas</a>
                                                <ul>
                                                    <?php while ($fila_mp_oficinas=mysql_fetch_array($rst_mp_oficinas)){
                                                        $mp_oficinas_id=$fila_mp_oficinas["id"];
                                                        $mp_oficinas_url=$fila_mp_oficinas["url"];
                                                        $mp_oficinas_titulo=$fila_mp_oficinas["titulo"];
                                                    ?>
                                                    <li><a href="nuestras-oficinas/<?php echo $mp_oficinas_id."-".$mp_oficinas_url; ?>"><?php echo $mp_oficinas_titulo; ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                            <li><a href="">Normatividad</a></li>
                                            <li><a href="">Intranet</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Publicaciones</a>
                                        <ul>
                                            <li><a href="">Información Estadística</a></li>
                                            <li><a href="">Información Epidemiológica</a>
                                                <ul>
                                                    <li><a href="">Sala Situacional</a></li>
                                                    <li><a href="">Boletín Epidemiológico</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Transparencia</a></li>
                                    <li><a href="">Sala de Prensa</a>
                                        <ul>
                                            <li><a href="">Alianzas</a></li>
                                            <li><a href="">Capacitación</a></li>
                                            <li><a href="">Equipos de Última Tecnología</a></li>
                                            <li><a href="">Noticias</a></li>
                                            <li><a href="">Proezas Médicas</a></li>
                                            <li><a href="">Reconocimientos Institucionales</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Campañas Especiales</a></li>
                                    <li><a href="">Apoyo al Diagnóstico</a>
                                        <ul>
                                            <?php while ($fila_mp_apoyodiag=mysql_fetch_array($rst_mp_apoyodiag)){
                                                $mp_apoyodiag_id=$fila_mp_apoyodiag["id"];
                                                $mp_apoyodiag_url=$fila_mp_apoyodiag["url"];
                                                $mp_apoyodiag_titulo=$fila_mp_apoyodiag["titulo"];
                                            ?>
                                            <li><a href="apoyo-al-diagnostico/<?php echo $mp_apoyodiag_id."-".$mp_apoyodiag_url; ?>"><?php echo $mp_apoyodiag_titulo; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="">Especialidades</a>
                                        <ul>
                                            <?php while ($fila_mp_especialidades=mysql_fetch_array($rst_mp_especialidades)){
                                                $mp_especialidades_id=$fila_mp_especialidades["id"];
                                                $mp_especialidades_url=$fila_mp_especialidades["url"];
                                                $mp_especialidades_titulo=$fila_mp_especialidades["titulo"];
                                            ?>
                                            <li><a href="especialidades/<?php echo $mp_especialidades_id."-".$mp_especialidades_url; ?>"><?php echo $mp_especialidades_titulo; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="">Libro de Reclamaciones</a></li>
                                    <li><a href="">Tarifario Virtual</a>
                                        <ul>
                                            <li><a href="">Medicamentos</a></li>
                                            <li><a href="">Procedimientos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Observatorio de Medicamentos</a></li>
                                    <li><a href="">Contrato Administrativo de Servicios - CAS</a></li>

                                </ul>

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
