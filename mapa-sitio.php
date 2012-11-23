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
                                    <dt><a href="">Inicio</a></dt>
                                    <dt><a href="">Institucional</a>
                                        <dl>
                                            <dt><a href="">Directorio</a></dt>
                                            <dt><a href="">Historia</a></dt>
                                            <dt><a href="">Información Institucional</a></dt>
                                            <dt><a href="">Nuestras Oficinas</a>
                                                <dl>
                                                    <?php while ($fila_mp_oficinas=mysql_fetch_array($rst_mp_oficinas)){
                                                        $mp_oficinas_id=$fila_mp_oficinas["id"];
                                                        $mp_oficinas_url=$fila_mp_oficinas["url"];
                                                        $mp_oficinas_titulo=$fila_mp_oficinas["titulo"];
                                                    ?>
                                                    <dt><a href="nuestras-oficinas/<?php echo $mp_oficinas_id."-".$mp_oficinas_url; ?>"><?php echo $mp_oficinas_titulo; ?></a></dt>
                                                    <?php } ?>
                                                </dl>
                                            </dt>
                                            <dt><a href="">Normatividad</a></dt>
                                            <dt><a href="">Intranet</a></dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="">Publicaciones</a>
                                        <dl>
                                            <dt><a href="">Información Estadística</a></dt>
                                            <dt><a href="">Información Epidemiológica</a>
                                                <dl>
                                                    <dt><a href="">Sala Situacional</a></dt>
                                                    <dt><a href="">Boletín Epidemiológico</a></dt>
                                                </dl>
                                            </dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="">Transparencia</a></dt>
                                    <dt><a href="">Sala de Prensa</a>
                                        <dl>
                                            <dt><a href="">Alianzas</a></dt>
                                            <dt><a href="">Capacitación</a></dt>
                                            <dt><a href="">Equipos de Última Tecnología</a></dt>
                                            <dt><a href="">Noticias</a></dt>
                                            <dt><a href="">Proezas Médicas</a></dt>
                                            <dt><a href="">Reconocimientos Institucionales</a></dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="">Campañas Especiales</a></dt>
                                    <dt><a href="">Apoyo al Diagnóstico</a>
                                        <dl>
                                            <?php while ($fila_mp_apoyodiag=mysql_fetch_array($rst_mp_apoyodiag)){
                                                $mp_apoyodiag_id=$fila_mp_apoyodiag["id"];
                                                $mp_apoyodiag_url=$fila_mp_apoyodiag["url"];
                                                $mp_apoyodiag_titulo=$fila_mp_apoyodiag["titulo"];
                                            ?>
                                            <dt><a href="apoyo-al-diagnostico/<?php echo $mp_apoyodiag_id."-".$mp_apoyodiag_url; ?>"><?php echo $mp_apoyodiag_titulo; ?></a></dt>
                                            <?php } ?>
                                        </dl>
                                    </dt>
                                    <dt><a href="">Especialidades</a>
                                        <dl>
                                            <?php while ($fila_mp_especialidades=mysql_fetch_array($rst_mp_especialidades)){
                                                $mp_especialidades_id=$fila_mp_especialidades["id"];
                                                $mp_especialidades_url=$fila_mp_especialidades["url"];
                                                $mp_especialidades_titulo=$fila_mp_especialidades["titulo"];
                                            ?>
                                            <dt><a href="especialidades/<?php echo $mp_especialidades_id."-".$mp_especialidades_url; ?>"><?php echo $mp_especialidades_titulo; ?></a></dt>
                                            <?php } ?>
                                        </dl>
                                    </dt>
                                    <dt><a href="">Libro de Reclamaciones</a></dt>
                                    <dt><a href="">Tarifario Virtual</a>
                                        <dl>
                                            <dt><a href="">Medicamentos</a></dt>
                                            <dt><a href="">Procedimientos</a></dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="">Observatorio de Medicamentos</a></dt>
                                    <dt><a href="">Contrato Administrativo de Servicios - CAS</a></dt>

                                </dl>

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
