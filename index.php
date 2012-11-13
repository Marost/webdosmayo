<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE SCRIPTS*/
$script_popup=true;

/*-----------------------*/
/*EQUIPOS DE ULTIMA TECNOLOGIA*/
$rst_eq_tecno=mysql_query("SELECT * FROM DM_noticia WHERE categoria=4 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_eq_tecno=1;

/*PROEZAS MEDICAS*/
$rst_pro_medic=mysql_query("SELECT * FROM DM_noticia WHERE categoria=7 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_pro_medic=1;

/*CAPACITACION*/
$rst_capacit=mysql_query("SELECT * FROM DM_noticia WHERE categoria=3 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_capacit=1;

/*RECONOCIMIENTOS INSTITUCIONALES*/
$rst_recon_inst=mysql_query("SELECT * FROM DM_noticia WHERE categoria=8 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_recon_inst=1;

/*NOTICIAS*/
$rst_noticias=mysql_query("SELECT * FROM DM_noticia WHERE categoria=6 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_noticias=1;

/*ALIANZAS*/
$rst_recon_inst=mysql_query("SELECT * FROM DM_noticia WHERE categoria=1 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_recon_inst=1;

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

                        <section id="news-izq">

                            <div id="nwi-pest">

                                <div id="nwip-select">
                                    <ul class="nav">
                                        <li class="selected"><a href="#pest-select-1">Equipos de Última Tecnología</a></li>
                                        <li><a href="#pest-select-2">Proezas Médicas</a></li>
                                    </ul>
                                </div>

                                <div class="nwips-container pest-content" id="pest-select-1">

                                    <?php while ($fila_eq_tecno=mysql_fetch_array($rst_eq_tecno)) { 
                                        $eq_tecno_id=$fila_eq_tecno["id"];
                                        $eq_tecno_url=$fila_eq_tecno["url"];
                                        $eq_tecno_titulo=substr($fila_eq_tecno["titulo"],0,60)."...";
                                        $eq_tecno_contenido=substr(soloDescripcion($fila_eq_tecno["contenido"]),0,215);
                                        $eq_tecno_imagen=$fila_eq_tecno["imagen"];
                                        $eq_tecno_imagen_carpeta=$fila_eq_tecno["carpeta_imagen"];
                                        $eq_tecno_categoria=seleccionTabla(4, "id", "DM_noticia_categoria", $conexion);
                                        $eq_tecno_url_final=$eq_tecno_categoria["url"]."/".$eq_tecno_id."-".$eq_tecno_url;
                                    ?>

                                        <article class="borde-bottom news-noticia">

                                            <h2><a href="<?php echo $eq_tecno_url_final; ?>"><?php echo $eq_tecno_titulo; ?></a></h2>
                                            <div class="slider-bxslider">
                                                <img width="370" height="220" alt="" title=" " src="/imagenes/upload/<?php echo $eq_tecno_imagen_carpeta."".$eq_tecno_imagen; ?>">
                                            </div>
                                            <p><?php echo $eq_tecno_contenido; ?></p>
                                            <a class="art-mas" href="<?php echo $eq_tecno_url_final; ?>">Más...</a>

                                        </article>

                                        <?php if($cont_eq_tecno==2){ ?>
                                            <article class="news-noticia">

                                                <h2><a href="<?php echo $eq_tecno_url_final; ?>"><?php echo $eq_tecno_titulo; ?></a></h2>
                                                <p><?php echo $eq_tecno_contenido; ?></p>
                                                <a class="art-mas" href="<?php echo $eq_tecno_url_final; ?>">Más...</a>

                                            </article>
                                        <?php } ?>

                                    <?php $cont_eq_tecno++;} ?>

                                </div>

                                <div class="nwips-container pest-content" id="pest-select-2">

                                    <article class="borde-bottom news-noticia">

                                        <h2><a href="/notas/nota-proeza-medica-1.php">Cirujanos del Hospital Dos de Mayo reconstruyen rostro...</a></h2>
                                        <div class="slider-bxslider">
                                            <img width="370" height="220" alt="" src="/imagenes/upload/proezas-3.jpg" title=" ">
                                            <img width="370" height="220" alt="" src="/imagenes/upload/proezas-1.jpg" title=" ">
                                            <img width="370" height="220" alt="" src="/imagenes/upload/proezas-2.jpg" title=" ">                                            
                                        </div>
                                        <p>Verónica Liz Llano (25), una humilde madre arequipeña perdió parte de la cara, del lado izquierdo, en un accidente de tránsito y se encuentra internada en el Hospital Nacional “Dos de Mayo”...</p>
                                        <a class="art-mas" href="">Más...</a>

                                    </article>

                                    <article class="news-noticia">

                                        <h2><a href="/notas/nota-proeza-medica-2.php">Joven madre huancavelicana fue operada en Hospital Nacional...</a></h2>
                                        <p>Madeleine Licas García (22) estuvo internada en el Hospital Nacional “Dos de Mayo” con un tumor en la zona temporal parietal derecha del cráneo. La mujer, madre de dos niños, pidió ayuda para afrontar...</p>
                                        <a class="art-mas" href="/notas/nota-proeza-medica-2.php">Más...</a>

                                    </article>
                                </div>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Capacitación</h3>
                                </div>

                                <article class="nws-contenido">

                                    <img width="120" height="135" src="/imagenes/upload/nota-capacitacion-slide.jpg">
                                    <div>
                                        <h2><a href="/notas/nota-capacitacion.php">Trabajadores del HNDM son capacitados...</a></h2>
                                        <p>El Comité Institucional de Lactancia Materna del HNDM capacita, promueve y difunde los beneficios de la leche materna...</p>
                                    </div>
                                    <a class="art-mas" href="/notas/nota-capacitacion.php">Más...</a>

                                </article>
                            </div>

                            <div id="nw-campania-esp">
                                <div class="nws-select">
                                    <h3>Campañas Especiales</h3>
                                </div>

                                <div class="nws-contenido">

                                    <ul>
                                        <li><a href=""><img src="/imagenes/campanias-especiales/campania1.jpg"></a></li>
                                        <li><a href=""><img src="/imagenes/campanias-especiales/campania-2.jpg"></a></li>
                                        <li><a href=""><img src="/imagenes/campanias-especiales/icon-campana-especial-01.png"></a></li>
                                        <li><a href=""><img src="/imagenes/campanias-especiales/icon-campana-especial-02.png"></a></li>
                                        <li><a href=""><img src="/imagenes/campanias-especiales/icon-campana-especial-03.png"></a></li>
                                    </ul>
                                    <a href="">Más...</a>

                                </div>

                            </div>

                        </section>

                        <section id="news-der">

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Reconocimientos Institucionales</h3>
                                </div>

                                <article class="news-noticia">

                                    <h2><a href="/notas/nota-reconocimientos-institucionales.php">Reconocen al laboratorio del HNDM en Control de Calidad y altos...</a></h2>
                                    <p>Por su participación en el Programa de Control de Calidad Interlaboratorial INSIGHT que fue organizado por instituciones internacionales, el laboratorio del Hospital Nacional Dos de Mayo fue reconocido...</p>
                                    <div class="slider-bxslider">
                                        <img width="370" height="130" alt="" title=" " src="imagenes/upload/reconocimiento-slide.jpg">
                                        <img width="370" height="130" alt="" title=" " src="imagenes/upload/reconocimiento-slide-2.jpg">
                                    </div>
                                    <a class="art-mas" href="/notas/nota-reconocimientos-institucionales.php">Más...</a>

                                </article>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Noticias</h3>
                                </div>

                                <article class="news-noticia borde-bottom">

                                    <h2><a href="/notas/nota-1.php">Emergencia de Pediatría celebró sus 14 años de aniversario...</a></h2>
                                    <p>El Hospital Nacional “Dos de Mayo” celebró los 14 años de Aniversario de Emergencia de Pediatría, con una misa y Ceremonia Protocolar, esta última fue encabezada por el Director General del nosocomio, Dr. José Roca Mendoza...</p>
                                    <div class="slider-bxslider">
                                        <img width="370" height="130" alt="" title=" " src="imagenes/upload/noticia-1.jpg">
                                        <img width="370" height="130" alt="" title=" " src="imagenes/upload/noticia-2.jpg">
                                        <img width="370" height="130" alt="" title=" " src="imagenes/upload/noticia-3.jpg">
                                    </div>
                                    <a class="art-mas" href="">Más...</a>

                                </article>

                                <article class="news-noticia">

                                    <h2><a href="/notas/nota-2.php">Viceministro de Salud visitó a los heridos de los enfrentamientos...</a></h2>
                                    <a class="art-mas" href="/notas/nota-2.php">Más...</a>

                                </article>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Alianzas</h3>
                                </div>

                                <article class="nws-contenido">

                                    <div>
                                        <h2><a href="/notas/nota-alianza.php">Sociedad Peruana de Neumología y HNDM entregan...</a></h2>
                                        <p>En el marco de las celebraciones por el "Día del Neumólogo", que se celebra cada 30 de agosto, el Comité de Damas Voluntarias...</p>
                                        <a class="art-mas" href="/notas/nota-alianza.php">Más...</a>
                                    </div>
                                    <img width="120" height="135" src="/imagenes/upload/nota-alianza-slide.jpg">

                                </article>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Tour Virtual</h3>
                                </div>

                                <article class="nws-contenido">

                                    <iframe width="370" height="150" src="http://www.youtube.com/embed/B4_QQQCInFg?wmode=transparent&autohide=1&egm=0&hd=1&iv_load_policy=3&modestbranding=1&rel=0&showinfo=0&showsearch=0&theme=light" frameborder="0" allowfullscreen></iframe>
                                    
                                </article>
                            </div>

                        </section>
                    </section>

                    <?php require_once("w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

<?php require_once("w-popup.php") ?>
        
    </body>
</html>
