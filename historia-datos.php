<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES*/
$url_noticia_id=$_POST["tipo"];

/*NOTICIA*/
$rst_noticia=mysql_query("SELECT * FROM DM_historia WHERE id=$url_noticia_id;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

/*VARIABLES DE NOTICIA*/
$noticia_contenido=$fila_noticia["contenido"];

/*NOTICIA - SLIDE*/
$rst_noticia_slide=mysql_query("SELECT * FROM DM_historia_slide WHERE noticia=$url_noticia_id ORDER BY orden ASC;", $conexion);
$num_noticia_slide=mysql_num_rows($rst_noticia_slide);

?>
<div style="float:left; width:100;">
    <?php echo $noticia_contenido; ?>
</div>

<!-- SLIDE NOTICIA -->
<link href="/libs/allinone_banner/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
<script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
<script src="/libs/allinone_banner/allinone_thumbnailsBanner.js"></script>
<script src="/libs/allinone_banner/reflection.js" type="text/javascript"></script>
<!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<script>
var jNotSld=jQuery.noConflict();
jNotSld(document).ready(function(){
    jNotSld('.imagen_slide div').allinone_thumbnailsBanner({
        skin: 'cool',
        numberOfThumbsPerScreen:4,
        width: 620,
        height: 360,
        thumbsWrapperMarginTop:0
    });
});
</script>

<?php if($num_noticia_slide>0){ ?>
<div class="imagen_slide">

    <div style="display:none;">
    
        <ul class="allinone_carousel_list">   
            <?php while ($fila_noticia_slide=mysql_fetch_array($rst_noticia_slide)){
                /*VARIABLES DE SLIDE*/
                $noticia_slide_id=$fila_noticia_slide["id"];
                $noticia_slide_imagen=$fila_noticia_slide["imagen"];
                $noticia_slide_imagen_carpeta=$fila_noticia_slide["carpeta"];
            ?>
                <li data-bottom-thumb="/imagenes/upload/<?php echo $noticia_slide_imagen_carpeta."thumb/".$noticia_slide_imagen; ?>">
              <img src="/imagenes/upload/<?php echo $noticia_slide_imagen_carpeta."".$noticia_slide_imagen; ?>" alt="" /></li>
            <?php } ?>
        </ul>
    </div>

</div>
<?php } ?>