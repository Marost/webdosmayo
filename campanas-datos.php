<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE URL*/
$campania_id=$_POST["id"];
$campania_dato=$_POST["tipo"];

?>

<?php if ($campania_dato=="proposito"){ ?>

    <?php

        $rst_proposito=mysql_query("SELECT * FROM DM_campania WHERE id=$campania_id", $conexion);
        $fila_proposito=mysql_fetch_array($rst_proposito);
        $proposito_contenido=$fila_proposito["contenido"];

        echo $proposito_contenido;

    ?>

<?php }elseif ($campania_dato=="material"){

    /*DOCUMENTOS*/
    $rst_cas_docs=mysql_query("SELECT * FROM DM_campania_rebote WHERE cas=$campania_id ORDER BY orden ASC;", $conexion);
    
?>
    
    <ul>
        <?php while($fila_cas_docs=mysql_fetch_array($rst_cas_docs)){
            $docs_titulo=$fila_cas_docs["titulo"];
            $docs_documento=$fila_cas_docs["documento"];
            $docs_documento_tipo=$fila_cas_docs["documento_tipo"];
        ?>
            <li>

                <a title="<?php echo $docs_titulo; ?>" target="_blank" 
                href="/documentos/<?php echo $cas_carpetas."".$docs_documento; ?>">
                <span
                    <?php if($docs_documento_tipo=="doc" or $docs_documento_tipo=="docx"){ ?>
                        class="word"     
                    <?php }elseif($docs_documento_tipo=="xls" or $docs_documento_tipo=="xlsx"){ ?>
                        class="excel" 
                    <?php }elseif($docs_documento_tipo=="ppt" or $docs_documento_tipo=="pptx" or $docs_documento_tipo=="pps" or $docs_documento_tipo=="ppsx"){ ?>
                        class="pwpt" 
                    <?php }elseif($docs_documento_tipo=="pdf"){ ?>
                        class="pdf" 
                    <?php }elseif($docs_documento_tipo=="gif"){ ?>
                        class="gif" 
                    <?php }elseif($docs_documento_tipo=="png"){ ?>
                        class="png" 
                    <?php }elseif($docs_documento_tipo=="bmp"){ ?>
                        class="bmp" 
                    <?php }elseif($docs_documento_tipo=="jpg" or $docs_documento_tipo=="jpeg" or $docs_documento_tipo=="JPG" or $docs_documento_tipo=="JPEG"){ ?>
                        class="jpg" 
                    <?php }elseif($docs_documento_tipo=="zip" or $docs_documento_tipo=="rar"){ ?>
                        class="zip" 
                    <?php } ?>
                >
                </span><p><?php echo $docs_titulo; ?></p></a>

            </li>
        <?php } ?>
    </ul>

<?php }elseif ($campania_dato=="nota-prensa"){ ?>

    <?php

    $rst_noticias=mysql_query("SELECT * FROM DM_campania_noticia WHERE campania=$campania_id ORDER BY fecha_publicacion DESC;", $conexion);

    while($fila_noticias=mysql_fetch_array($rst_noticias)){
        $noticias_id=$fila_noticias["id"];
        $noticias_url=$fila_noticias["url"];
        $noticias_titulo=$fila_noticias["titulo"];
        $noticias_contenido=soloDescripcion($fila_noticias["contenido"]);
        $noticias_imagen=$fila_noticias["imagen"];
        $noticias_imagen_carpeta=$fila_noticias["carpeta_imagen"];
        $noticias_fecha_total=explode(" ",$fila_noticias["fecha_publicacion"]);
        $noticias_fecha=explode("-", $noticias_fecha_total[0]);
    ?>

    <article class="categoria_noticias">

        <?php if($noticias_imagen<>""){ ?>
        <div class="datos">
            <h3><a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></h3>
            <div class="imagen">
                <img src="imagenes/upload/<?php echo $noticias_imagen_carpeta."thumb200/".$noticias_imagen; ?>" width="300" height="200" alt="<?php echo $noticias_titulo; ?>">
            </div>
            <p><?php echo $noticias_contenido; ?></p>
            <p class="fecha"><?php echo nombreFecha($noticias_fecha[0],$noticias_fecha[1],$noticias_fecha[2]); ?></p>
        </div>
        <?php }else{ ?>
        
        <div class="datos an100">
            <h3><a href="<?php echo $noticias_categoria["url"]."/".$noticias_id."-".$noticias_url; ?>"><?php echo $noticias_titulo; ?></a></h3>
            <p><?php echo $noticias_contenido; ?></p>
            <p class="fecha"><?php echo nombreFecha($noticias_fecha[0],$noticias_fecha[1],$noticias_fecha[2]); ?></p>
        </div>

        <?php } ?>

    </article>
    <?php } ?>

<?php }elseif ($campania_dato=="rebote"){

    /*DOCUMENTOS*/
    $rst_cas_docs=mysql_query("SELECT * FROM DM_campania_rebote WHERE cas=$campania_id ORDER BY orden ASC;", $conexion);
?>
    
    <table class="tabla_cas" width="700" border="0">
        <tbody>
            <tr>
                <td class="dato_contenido">
                    <ul>
                        <?php while($fila_cas_docs=mysql_fetch_array($rst_cas_docs)){
                            $docs_titulo=$fila_cas_docs["titulo"];
                            $docs_documento=$fila_cas_docs["documento"];
                            $docs_documento_tipo=$fila_cas_docs["documento_tipo"];
                        ?>
                            <li>

                                <a title="<?php echo $docs_titulo; ?>" target="_blank" 
                                href="/documentos/<?php echo $cas_carpetas."".$docs_documento; ?>">
                                <span
                                    <?php if($docs_documento_tipo=="doc" or $docs_documento_tipo=="docx"){ ?>
                                        class="word"     
                                    <?php }elseif($docs_documento_tipo=="xls" or $docs_documento_tipo=="xlsx"){ ?>
                                        class="excel" 
                                    <?php }elseif($docs_documento_tipo=="ppt" or $docs_documento_tipo=="pptx" or $docs_documento_tipo=="pps" or $docs_documento_tipo=="ppsx"){ ?>
                                        class="pwpt" 
                                    <?php }elseif($docs_documento_tipo=="pdf"){ ?>
                                        class="pdf" 
                                    <?php }elseif($docs_documento_tipo=="gif"){ ?>
                                        class="gif" 
                                    <?php }elseif($docs_documento_tipo=="png"){ ?>
                                        class="png" 
                                    <?php }elseif($docs_documento_tipo=="bmp"){ ?>
                                        class="bmp" 
                                    <?php }elseif($docs_documento_tipo=="jpg" or $docs_documento_tipo=="jpeg" or $docs_documento_tipo=="JPG" or $docs_documento_tipo=="JPEG"){ ?>
                                        class="jpg" 
                                    <?php }elseif($docs_documento_tipo=="zip" or $docs_documento_tipo=="rar"){ ?>
                                        class="zip" 
                                    <?php } ?>
                                >
                                </span><p><?php echo $docs_titulo; ?></p></a>

                            </li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

<?php } ?>