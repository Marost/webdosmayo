<?php
/*ESPECIALIDADES - LISTA*/
$rst_especialidades_lista_wg=mysql_query("SELECT * FROM DM_noticia WHERE categoria=5 ORDER BY titulo ASC;", $conexion);

/*ESPECIALIDADES*/
$rst_especialidades_wg=mysql_query("SELECT * FROM DM_noticia_categoria WHERE id=5;", $conexion);
$fila_especialidades_wg=mysql_fetch_array($rst_especialidades_wg);
$espec_url=$fila_especialidades_wg["url"];
?>
<div class="header-container">
    <header class="wrapper clearfix">

        <div id="icons-sup">

            <ul>
                <li><a class="icon-home" href="">Home</a></li>
                <li><a class="p-escribanos icon-correo" href="javascript:;">Correo</a></li>
                <li><a class="icon-mapa-sitio" href="">Mapa de Stio</a></li>
            </ul>
        </div>

        <nav>
            <ul id="nav">
                <li class="first"><a href="/" class="current">Inicio</a></li>
                <li><a href="javascript:;">Institucional</a>
                    <ul class="submenu">
                        <li><a href="directorio.php">Directorio</a></li>
                        <li><a href="/notas/historia.php">Historia</a></li>
                        <li><a href="informacion-institucional.php">Información Institucional</a></li>
                        <li><a href="/cat/nuestras-oficinas">Nuestras Oficinas</a></li>
                        <li><a href="/construccion">Normatividad</a></li>
                        <li><a href="javascript:;" target="_blank" id="enl-intranet">Intranet</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <ul class="submenu">
                        <li><a href="/construccion">Publicaciones</a></li>
                        <li><a href="/construccion">Directorio Telefónico</a></li>                    
                    </ul>
                </li>
                <li><a href="http://www.peru.gob.pe/transparencia/pep_transparencia_lista_planes.asp?id_entidad=13628&id_tema=1">Transparencia</a></li>
                <li class="last"><a href="javascript:;">Prensa</a>
                    <ul class="submenu-prensa">
                        <li><a href="/construccion">Sala de Prensa</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- MENU PRINCIPAL -->

        <h1>
            <a class="logo-principal" href="/">
                Hospital Nacional Dos de Mayo</a>
        </h1>

        <div id="slider">
            <img src="imagenes/slide/img1.jpg" alt="" title="<div class='block1'><div class='indent-block'><h1><strong>137 años</strong>de Historia y Tradición</h1>al Servicio de la Medicina Peruana</div></div>">
            <img src="imagenes/slide/img2.jpg" alt="" title="<div class='block1'><div class='indent-block'><h1><strong>Tecnología</strong>Equipos de última generación</h1>al servicio de todos los peruanos</div></div>">
            <img src="imagenes/slide/img3.jpg" alt="" title="<div class='block1'><div class='indent-block'><h1><strong>Docencia</strong>Capacitación e</h1>investigación académica</div></div>">
        </div>

        <div id="mrq_especialidades" class="mrq_lista">

            <h2>Especialidades</h2>
            <a class="mrq-vm" href="/<?php echo "cat/".$espec_url; ?>">Más...</a>

            <div id="mrq_especialidades_lista" class="mrq_lista_item">
                <div>
                    <ul>

                        <?php while($fila_especialidades_lista_wg=mysql_fetch_array($rst_especialidades_lista_wg)){
                                $espec_lista_id=$fila_especialidades_lista_wg["id"];
                                $espec_lista_titulo=$fila_especialidades_lista_wg["titulo"];
                                $espec_lista_contenido=$fila_especialidades_lista_wg["contenido"];
                                $espec_lista_url=$fila_especialidades_lista_wg["url"];
                                if($espec_lista_contenido==""){ $espec_lista_url_final="construccion";}
                                else{ $espec_lista_url_final=$espec_url."/".$espec_lista_id."-".$espec_lista_url; }
                        ?>
                            <li><a href="<?php echo $espec_lista_url_final; ?>"><?php echo $espec_lista_titulo; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="central_telefonica">
            <h2>Central Telefónica</h2>
            <a id="ver_telf" href="javascript:;">Más...</a>
            <ul id="marquee" class="marquee">
                <li>328-0175</li>
                <li>328-0068</li>
                <li>328-0035</li>
                <li>328-0131</li>
                <li>328-0028</li>
                <li>328-0144</li>
                <li>328-0066</li>
                <li>328-1418</li>
                <li>328-1920</li>
            </ul>
            <span id="img-telefono"></span>
        </div>

    </header>

</div>