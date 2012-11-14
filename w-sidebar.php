<?php
/*DIAGNOSTICO - LISTA*/
$rst_apdiagnost_lista_wg=mysql_query("SELECT * FROM DM_noticia WHERE categoria=2 ORDER BY titulo ASC;", $conexion);

/*ESPECIALIDADES*/
$rst_apdiagnost_wg=mysql_query("SELECT * FROM DM_noticia_categoria WHERE id=2;", $conexion);
$fila_apdiagnost_wg=mysql_fetch_array($rst_apdiagnost_wg);
$apdgt_url=$fila_apdiagnost_wg["url"];
?>
<aside id="sidebar">

    <div id="mrq_ap_diagnostico" class="mrq_lista">

        <h2>Apoyo al Diagnóstico</h2>
        <a class="mrq-vm" href="<?php echo "cat/".$apdgt_url; ?>">Más...</a>

        <div id="mrq_ap_diagnostico_lista" class="mrq_lista_item">
            <div>
                <ul>
                    <?php while($fila_apdiagnost_lista_wg=mysql_fetch_array($rst_apdiagnost_lista_wg)){
                            $apdgt_lista_id=$fila_apdiagnost_lista_wg["id"];
                            $apdgt_lista_titulo=$fila_apdiagnost_lista_wg["titulo"];
                            $apdgt_lista_contenido=$fila_apdiagnost_lista_wg["contenido"];
                            $apdgt_lista_url=$fila_apdiagnost_lista_wg["url"];
                            if($apdgt_lista_contenido==""){ $apdgt_lista_url_final="construccion";}
                            else{ $apdgt_lista_url_final=$apdgt_url."/".$apdgt_lista_id."-".$apdgt_lista_url; }
                    ?>
                        <li><a href="<?php echo $apdgt_lista_url_final; ?>"><?php echo $apdgt_lista_titulo; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div id="secciones-lista">
    
        <ul>
            <li><a href="construccion"><span class="img icon-online"></span>Resultados <br>Online</a></li>
            <li><a href="construccion"><span class="img icon-atencion"></span>Atención al Asegurado</a></li>
            <li><a href="construccion"><span class="img icon-libro"></span>Libro de Reclamaciones</a></li>
            <li><a href="tarifario.php"><span class="img icon-tarifario"></span>Tarifario <br>Virtual</a></li>
            <li><a href="info-epidemiologica.php"><span class="img icon-boletin"></span>Información Epidemiológica</a></li>
            <li><a href="http://observatorio.digemid.minsa.gob.pe/"><span class="img icon-observatorio"></span>Observatorio de Medicamentos</a></li>
            <li><a href="construccion"><span class="img icon-online"></span>Citas <br>Online</a><div>PRONTO</div></li>
            <li><a href="cas.php"><span class="img icon-cas"></span>Contrato Administrativo de Servicios</a></li>
        </ul>
    </div>

    <div id="busqueda_doctor">
        <span class="icon-medico"></span>
        <p>Busca a tu Médico</p>
        <form class="searchform" action="busqueda.php" method="GET">
            <input class="searchfield" type="text" value="Buscar..." onfocus="if (this.value == 'Buscar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar...';}" name="buscar" />
            <input class="searchbutton" type="submit" value="Ir" />
        </form>
    </div>

    <div id="patrimonio-historico">
        <div style="display:none;">
        <ul class="allinone_bannerRotator_list">
            <li><img src="imagenes/slide/patrimonio-historico-1.jpg" width="220" height="120" title=" "></li>
            <li><img src="imagenes/slide/patrimonio-historico-2.jpg" width="220" height="120" title=" "></li>
            <li><img src="imagenes/slide/patrimonio-historico-3.jpg" width="220" height="120" title=" "></li>
        </ul>
        </div>
    </div>

    <div id="opciones-lista">
        <ul>
            <li><a href="javascript:;" id="popupen-escribanos" class="p-escribanos"><span class="img icon-escribanos"></span>Escribanos</a></li>
            <li><a href="cas.php" class="last"><span class="img icon-laboral"></span>Oportunidad Laboral</a></li>
            <li><a href="javascript:;" id="popupen-ubicanos">Ubícanos<img src="/imagenes/mapa.png"></a></li>
        </ul>
    </div>
</aside>