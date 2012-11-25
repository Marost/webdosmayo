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
                                    
                                <dl id="mapa-sitio">
                                    <dt><a href="/">Inicio</a></dt>
                                    <dt><a href="javascript:;">Institucional</a>
                                        <dl>
                                            <dt><a href="directorio">Directorio</a></dt>
                                            <dt><a href="historia">Historia</a></dt>
                                            <dt><a href="informacion-institucional">Información Institucional</a></dt>
                                            <dt><a href="cat/nuestras-oficinas">Nuestras Oficinas</a>
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
                                            <dt><a href="javascript:;">Normatividad</a></dt>
                                            <dt><a href="javascript:;">Intranet</a></dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="javascript:;">Publicaciones</a>
                                        <dl>
                                            <dt><a href="javascript:;">Información Estadística</a></dt>
                                            <dt><a href="javascript:;">Información Epidemiológica</a>
                                                <dl>
                                                    <dt><a href="sala-situacional">Sala Situacional</a></dt>
                                                    <dt><a href="boletin-epidemiologico">Boletín Epidemiológico</a></dt>
                                                </dl>
                                            </dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="http://www.peru.gob.pe/transparencia/pep_transparencia_lista_planes.asp?id_entidad=13628&id_tema=1" target="_blank">Transparencia</a></dt>
                                    <dt><a href="sala-prensa">Sala de Prensa</a>
                                        <dl>
                                            <dt><a href="cat/alianzas">Alianzas</a></dt>
                                            <dt><a href="cat/capacitacion">Capacitación</a></dt>
                                            <dt><a href="cat/equipos-ultima-tecnologia">Equipos de Última Tecnología</a></dt>
                                            <dt><a href="cat/noticias">Noticias</a></dt>
                                            <dt><a href="cat/proezas-medicas">Proezas Médicas</a></dt>
                                            <dt><a href="cat/reconocimientos-institucionales">Reconocimientos Institucionales</a></dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="javascript:;">Campañas Especiales</a></dt>
                                    <dt><a href="cat/apoyo-al-diagnostico">Apoyo al Diagnóstico</a>
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
                                    <dt><a href="cat/especialidades">Especialidades</a>
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
                                    <dt><a href="libro-reclamaciones">Libro de Reclamaciones</a></dt>
                                    <dt><a href="javascript:;">Tarifario Virtual</a>
                                        <dl>
                                            <dt><a href="tarifario/medicamentos">Medicamentos</a></dt>
                                            <dt><a href="tarifario/procedimientos">Procedimientos</a></dt>
                                        </dl>
                                    </dt>
                                    <dt><a href="http://observatorio.digemid.minsa.gob.pe/" target="_blank">Observatorio de Medicamentos</a></dt>
                                    <dt><a href="cas">Contrato Administrativo de Servicios - CAS</a></dt>

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
