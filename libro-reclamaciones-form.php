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

        <!-- LIBRO DE RECLAMACIONES -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="/libs/form_reclamo/envio.js"></script>

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
                                <h2>Presenta tu reclamo</h2>
                            </div>

                            <div class="contenido">

                                <p class="reclamo_mensaje ocultar">Gracias por escribirnos</p>
                                <p class="reclamo_mensaje ocultar">Nos estaremos comunicando contigo a la brevedad posible.</p>

                                <form id="form_reclamo" name="form_reclamo" method="post">
                                  <table width="670" class="libro-reclamaciones" >
                                    <tr>
                                      <td colspan="2"><h3>DATOS DEL RECLAMANTE / RECLAMADO</h3></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><strong>DATOS DEL RECLAMANTE</strong></td>
                                    </tr>
                                    <tr>
                                      <td width="175">Nombres</td>
                                      <td width="480"><input name="reclamo_nombre" type="text" id="reclamo_nombre" size="30"></td>
                                    </tr>
                                    <tr>
                                      <td>Apellidos</td>
                                      <td><input name="reclamo_apellidos" type="text" id="reclamo_apellidos" size="30"></td>
                                    </tr>
                                    <tr>
                                      <td>DNI</td>
                                      <td><input type="text" name="reclamo_dni" id="reclamo_dni"></td>
                                    </tr>
                                    <tr>
                                      <td>Edad</td>
                                      <td><input type="text" name="reclamo_edad" id="reclamo_edad"></td>
                                    </tr>
                                    <tr>
                                      <td>Ocupación</td>
                                      <td><input name="reclamo_ocupacion" type="text" id="ocupacion" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td>Correo electrónico</td>
                                      <td><input name="reclamo_email" type="text" id="reclamo_email" size="40"></td>
                                    </tr>
                                    <tr>
                                      <td>Teléfono Móvil</td>
                                      <td><input type="text" name="reclamo_telmovil" id="reclamo_telmovil"></td>
                                    </tr>
                                    <tr>
                                      <td>Teléfono Fijo</td>
                                      <td><input type="text" name="reclamo_telfijo" id="reclamo_telfijo"></td>
                                    </tr>
                                    <tr>
                                      <td>Dirección</td>
                                      <td><input name="reclamo_direccion" type="text" id="reclamo_direccion" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><strong>DATOS DEL PROVEEDOR RECLAMADO</strong></td>
                                    </tr>
                                    <tr>
                                      <td width="175">Nombres</td>
                                      <td><input name="reclamo_prov_nombre" type="text" id="reclamo_prov_nombre" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td>Apellidos</td>
                                      <td><input name="reclamo_prov_apellidos" type="text" id="reclamo_prov_apellidos" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td>Documento de Identidad</td>
                                      <td><input type="text" name="reclamo_prov_dni" id="reclamo_prov_dni"></td>
                                    </tr>
                                    <tr>
                                      <td>Correo electrónico</td>
                                      <td><input name="reclamo_prov_email" type="text" id="reclamo_prov_email" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td>Teléfonos</td>
                                      <td><input type="text" name="reclamo_prov_telefono" id="reclamo_prov_telefono"></td>
                                    </tr>
                                    <tr>
                                      <td>Dirección</td>
                                      <td><input name="reclamo_prov_direccion" type="text" id="reclamo_prov_direccion" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><h3>MOTIVO DEL RECLAMO</h3></td>
                                    </tr>
                                    <tr>
                                      <td><strong>DATOS DEL HECHO</strong></td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>Fecha de ocurrencia</td>
                                      <td><input type="text" name="reclamo_fecha" id="reclamo_fecha"></td>
                                    </tr>
                                    <tr>
                                      <td>Cuéntenos su caso</td>
                                      <td><textarea name="reclamo_caso" id="reclamo_caso" cols="75" rows="10"></textarea></td>
                                    </tr>
                                    <tr>
                                      <td>Qué solicita</td>
                                      <td><input name="reclamo_solicita" type="text" id="reclamo_solicita" size="70"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <img src="imagenes/progressbar.gif" alt="Cargando..." class="ocultar" id="progressbar">
                                            <button class="reclamo_boton" id="reclamo_enviar">Enviar reclamo</button>
                                            <button class="reclamo_boton" id="reclamo_cancelar">Cancelar</button>
                                        </td>
                                    </tr>
                                  </table>
                                </form>
                            </div>

                            <div class="contenido">
                                <a href="libro-reclamaciones.php">Volver</a>
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
