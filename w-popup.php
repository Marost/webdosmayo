<?php

/*POPUP*/
$rst_w_popup=mysql_query("SELECT * FROM DM_popup ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_popup=mysql_fetch_array($rst_w_popup);
/*POPUP - VARIABLES*/
$w_popup_titulo=$fila_popup["titulo"];
$w_popup_imagen=$fila_popup["imagen"];
$w_popup_imagen_carpeta=$fila_popup["imagen_carpeta"];
$w_popup_imagen_url=$web."imagenes/upload/".$w_popup_imagen_carpeta."".$w_popup_imagen;
$w_popup_imagen_dimensiones=getimagesize($w_popup_imagen_url);
$w_popup_imagen_ancho=$w_popup_imagen_dimensiones[0];
$w_popup_imagen_alto=$w_popup_imagen_dimensiones[1];
?>
<div id="popup-escribanos" class="popup">
    
    <a id="popup-esc-cerrar" href="javascript:;">Cerrar</a>
    
    <div class="popup-box">
      <h2>Escríbanos</h2>
        <form method="post" id="form1">
            <div class="container">
            
                <fieldset>
                    <label for="esc_nombre">Nombres:</label>
                    <input id="esc_nombre" name="esc_nombre" type="text" class="input" size="20">
                </fieldset>
                
                <fieldset>
                    <label for="esc_email">Email:</label>
                    <input id="esc_email" name="esc_email" type="text" class="input" size="20">
                </fieldset>

                <fieldset>
                    <label><input type="radio" class="radio" name="opcion-escribanos" value="comentarios">Comentarios</label>
                    <label><input type="radio" class="radio" name="opcion-escribanos" value="quejas">Quejas</label>
                    <label><input type="radio" class="radio" name="opcion-escribanos" value="sugerencias">Sugerencias</label>
                </fieldset>
                
                <fieldset>
                    <label for="esc_mensaje">Mensaje:</label>
                    <textarea id="esc_mensaje" name="esc_mensaje" cols="20" rows="2"></textarea>
                </fieldset>
            
                  <button id="btn-escribanos" class="btn-custom btn_large">Enviar &raquo;</button>
                  <img src="imagenes/progressbar.gif" alt="Progreso" id="progressbar" class="ocultar">
                  
            </div>
        </form>                                                    
    </div>
                
</div>

<div id="popup-ubicanos" class="popup">
    
    <a id="popup-ubi-cerrar" href="javascript:;">Cerrar</a>
    
    <div class="popup-box">
      <h2>Ubícanos</h2>
        <iframe id="mapa_hospital" width="600" height="400" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" 
        src="https://maps.google.com.pe/maps?hl=es&amp;ie=UTF8&amp;q=hospital+dos+de+mayo&amp;fb=1&amp;gl=pe&amp;hq=hospital+dos+de+mayo&amp;hnear=0x9105c842e97d1b27:0x32a2c5cc041d2ebb,Distrito+de+San+Isidro&amp;cid=0,0,13761947855557028558&amp;t=m&amp;ll=-12.055437,-77.015941&amp;spn=0.006295,0.007489&amp;z=16&amp;output=embed"></iframe>

        <p><strong>Vías de acceso</strong></p>
        <p>Usted podrá llegar al Hospital Nacional “Dos de Mayo”, viajando en el Tren Eléctrico hasta el paradero Miguel Grau, o desplazándose a través de la Avenida Miguel Grau hasta la  cuadra 13</p>

    </div>

</div>

<div id="popup-telefono" class="popup">
    
    <a id="popup-tel-cerrar" href="javascript:;">Cerrar</a>
    
    <div class="popup-box">
        <h2>Central Telefónica</h2>
        <p>Cualquier consulta, comunicarse con nosotros a los siguientes teléfonos:</p>
        <ul>
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
    </div>
                
</div>

<div id="popup-intranet" class="popup">
    
    <a id="popup-intranet-cerrar" href="javascript:;">Cerrar</a>
    
    <div class="popup-box">
        <h2>Intranet</h2>
        <a href="http://www.hdosdemayo.gob.pe/webmail" target="_blank"><img src="/imagenes/popup/correo-institucional.png"></a>
        <a href="/notas/directorio-telefonico.php"><img src="/imagenes/popup/popup.png"></a>
    </div>
                
</div>

<div id="capaPopUp"></div>
<div id="popUpDiv">
    <div id="capaPng">
        <div>
            <img src="/imagenes/upload/<?php echo $w_popup_imagen_carpeta."".$w_popup_imagen; ?>" 
            title="<?php echo $w_popup_titulo; ?>" alt="<?php echo $w_popup_titulo; ?>"
            width="<?php echo $w_popup_imagen_ancho; ?>" height="<?php echo $w_popup_imagen_alto; ?>">
        </div>
        <a href="javascript:void(0);" title="Cerrar" id="cerrar">Cerrar</a>
    </div>
</div>