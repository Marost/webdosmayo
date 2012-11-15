<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Libro de Reclamaciones</title>
        
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

                        <div class="nw-nota borde-bottom">

                            <div class="titulo">
                                <h2>Libro de Reclamaciones - Código de Protección y Defensa del Consumidor</h2>
                            </div>

                            <div class="contenido">
                                <p>
                                    <strong>Fuente: Indecopi</strong></p>
                                <p>
                                    <strong>1.- &iquest;Qu&eacute; es el LIBRO DE RECLAMACIONES?</strong></p>
                                <p>
                                    Es un registro donde el consumidor puede dejar constancia de su queja o reclamo sobre el bien adquirido o servicio contratado. Los proveedores est&aacute;n obligados a contar con su LIBRO DE RECLAMACIONES, ya sea en f&iacute;sico (libro con hojas) o virtual (a trav&eacute;s de una computadora).</p>
                                <p>
                                    &nbsp;</p>
                                <p>
                                    <strong>2.- &iquest;Cu&aacute;l es la diferencia entre un reclamo y una queja?</strong></p>
                                <p>
                                    El consumidor presenta un reclamo cuando no est&aacute; conforme con los bienes adquiridos o servicios prestados, mientras que la queja expresa su malestar respecto de alg&uacute;n tema que no tenga que ver directamente con el giro del negocio, como por ejemplo, la mala atenci&oacute;n.&nbsp;</p>
                                <p>
                                    &nbsp;</p>
                                <p>
                                    <strong>3.- &iquest;C&oacute;mo me beneficia el LIBRO DE RECLAMACIONES?</strong></p>
                                <p>
                                    El LIBRO DE RECLAMACIONES promueve la soluci&oacute;n directa e inmediata a los reclamos o quejas que pueden presentarse. Es importante que recuerdes que puedes hacer uso del LIBRO DE RECLAMACIONES, as&iacute; no hayas comprado el bien o adquirido el servicio.</p>
                                <p>
                                    &nbsp;</p>
                                <p>
                                    <strong>4.- &iquest;Qu&eacute; debes hacer si el proveedor no cuenta con el LIBRO DE RECLAMACIONES o no resuelve mi reclamo en el plazo establecido?</strong>&nbsp;</p>
                                <p>
                                    Debes informarlo al INDECOPI, que podr&aacute; intervenir aplicando sanciones ejemplares, en defensa de tus derechos.</p>
                                <p>
                                    &nbsp;</p>
                                <p>
                                    <strong>5.- &iquest;Qu&eacute; sanciones puede imponer el INDECOPI, en caso de que el proveedor no cuente con su LIBRO DE RECLAMACIONES o no d&eacute; respuesta a tus reclamos o quejas? &nbsp;</strong></p>
                                <p>
                                    Si el proveedor no cuenta con su LIBRO DE RECLAMACIONES o no da respuesta a los reclamos o quejas registrados, el INDECOPI puede imponerle desde una amonestaci&oacute;n, hasta una multa, por un m&aacute;ximo de 450 Unidades Impositivas Tributarias, de acuerdo a la gravedad de la infracci&oacute;n.&nbsp;</p>
                                <p>
                                    Si presentas tu reclamo o queja en el LIBRO DE RECLAMACIONES y deseas que el INDECOPI conozca los hechos sucedidos, puedes remitir la copia o impresi&oacute;n a la oficina del INDECOPI m&aacute;s cercana.</p>
                                <p>
                                    &nbsp;</p>
                                <p>
                                    <strong>6.- Conoce las normas del LIBRO DE RECLAMACIONES</strong></p>
                                <ul>
                                    <li>
                                        Ley N&deg; 29571, que aprueba el C&oacute;digo de Protecci&oacute;n&nbsp; y Defensa del Consumidor</li>
                                    <li>
                                        Decreto Supremo N&deg; 011-2011-PCM, que aprueba el Reglamento del Libro de Reclamaciones del C&oacute;digo de Protecci&oacute;n y Defensa del Consumidor. <a href="documentos/ds-aprueba-reglamento-libro-de-reclamaciones.pdf" target="_blank">Descargar</a></li>
                                </ul>
                                <p>
                                    &nbsp;</p>
                                <p>
                                    <a href="documentos/aviso-libro-de-reclamaciones.doc">Descarga el aviso del LIBRO DE RECLAMACIONES</a></p>
                                <p>
                                    <a href="documentos/fomato-de-libro-de-reclamaciones.doc">Descarga el formato de la HOJA DE RECLAMACIONES</a></p>
                                <p>
                                    PRESENTA TU RECLAMO aqu&iacute; v&iacute;a e-mail:</p>
                                <p>
                                    Si consideras necesario presentar alg&uacute;n reclamo al hospital, debes hacer click <a href="">AQU&Iacute;</a></p>
                                <p>
                                    Una vez enviado tu reclamo un equipo de profesionales del hospital te estar&aacute; respondiendo.</p>
                                <p>
                                    Si tienes alguna consulta sobre el llenado de la HOJA DE RECLAMACIONES enviarlo al correo: <a href="mailto:librodereclamaciones@hdosdemayo.gob.pe">librodereclamaciones@hdosdemayo.gob.pe</a></p>

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
