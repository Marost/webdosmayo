<?php
/*LISTA DE EMPRESAS*/
$rst_list_empresas=mysql_query("SELECT * FROM DM_lista_empresas ORDER BY id ASC;", $conexion);
?>
<div class="footer-container">
    <footer class="wrapper">
        
        <section id="enlaces-interes">

            <marquee>
                
                <?php while($fila_list_empresas=mysql_fetch_array($rst_list_empresas)){
                        $lsempresas_titulo=$fila_list_empresas["titulo"];
                        $lsempresas_imagen=$fila_list_empresas["imagen"];
                        $lsempresas_imagen_carpeta=$fila_list_empresas["carpeta_imagen"];
                        if ($fila_list_empresas["enlace"]==""){ $lsempresas_enlace="javascript:;";
                        }else{ $lsempresas_enlace=$fila_list_empresas["enlace"]; }
                ?>

                <div class="items">
                    <a href="<?php echo $lsempresas_enlace; ?>" title="<?php echo $lsempresas_titulo; ?>">
                        <img alt="" src="/imagenes/upload/<?php echo $lsempresas_imagen_carpeta."/".$lsempresas_imagen; ?>" alt="<?php echo $lsempresas_titulo; ?>">
                    </a>
                </div>

                <?php } ?>
                
            </marquee>
        </section>

        <section id="copy-datos">
            <p>© 2012 - Hospital Nacional Dos de Mayo</p>
            <p>Dirección: Parque "Historia de la Medicina Peruana" s/n Alt. Cdra. 13 Av. Grau - Cercado de Lima - Lima, Perú</p>
        </section>

    </footer>
</div>