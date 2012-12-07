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

        <!-- FORMULARIO -->
        <link rel="stylesheet" href="/libs/css3-form/general/light/general-light.css">

        <!-- LIBRO DE RECLAMACIONES -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="/libs/form_reclamo/envio.js"></script>



    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Libro de Reclamaciones</h2>
                            </div>

                            <div class="contenido">

                                <p class="reclamo_mensaje ocultar">Gracias por escribirnos</p>
                                <p class="reclamo_mensaje ocultar">Nos estaremos comunicando contigo a la brevedad posible.</p>

                                <form id="form_reclamo" name="form_reclamo" method="post">
                                  <table width="850" border="1" cellpadding="3" cellspacing="3">
                                    <tr>
                                      <td align="center"><p>HOSPITAL NACIONAL &quot;DOS DE MAYO&quot; - OFICINA DE GESTIÓN DE LA CALIDAD</p></td>
                                    </tr>
                                    <tr>
                                      <td align="center">FORMATO PARA EL REGISTRO DE LA HOJA DE RECLAMACIONES</td>
                                    </tr>
                                    <tr>
                                      <td align="center"><table width="100%" border="0" cellpadding="3" cellspacing="3">
                                        <tr>
                                          <td width="15%">Señale la fecha:</td>
                                          <td width="15%">&nbsp;</td>
                                          <td width="15%">&nbsp;</td>
                                          <td width="2%">&nbsp;</td>
                                          <td width="15%">Hora:</td>
                                          <td width="15%">&nbsp;</td>
                                          <td width="11%">&nbsp;</td>
                                          <td width="12%">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td width="15%" align="center"><?php echo date("d"); ?></td>
                                          <td width="15%" align="center"><?php echo date("m"); ?></td>
                                          <td width="15%" align="center"><?php echo date("Y"); ?></td>
                                          <td>&nbsp;</td>
                                          <td><?php echo date("H:m"); ?></td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td width="15%" align="center">Dia</td>
                                          <td width="15%" align="center">Mes</td>
                                          <td width="15%" align="center">Año</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                        <tr>
                                          <td>Nombres de la persona natural o razón social de la persona jurídica:</td>
                                          </tr>
                                        <tr>
                                          <td height="23">
                                            <input class="form-input" name="nombre" type="text" value="" size="130">
                                          </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><table width="100%" border="0" cellpadding="1" cellspacing="1">
                                        <tr>
                                          <td width="46%">Domicilio:</td>
                                          <td width="1%">&nbsp;</td>
                                          <td width="26%">Distrito:</td>
                                          <td width="1%">&nbsp;</td>
                                          <td width="26%">Nº  D.N.I. / C.E.</td>
                                          </tr>
                                        <tr>
                                          <td height="23">
                                            <input class="form-input" name="domicilio" type="text" size="60">
                                          </td>
                                          <td>&nbsp;</td>
                                          <td>
                                            <input class="form-input" name="distrito" type="text" size="35">
                                          </td>
                                          <td>&nbsp;</td>
                                          <td>
                                            <input class="form-input" name="dni" type="text" size="35">
                                          </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left"><table width="100%" border="0" cellpadding="1" cellspacing="1">
                                        <tr>
                                          <td width="15%">Edad:</td>
                                          <td width="1%">&nbsp;</td>
                                          <td width="9%">Sexo:</td>
                                          <td width="1%">&nbsp;</td>
                                          <td width="36%">Teléfono:</td>
                                          <td width="1%">&nbsp;</td>
                                          <td width="37%">Email:</td>
                                          </tr>
                                        <tr>
                                          <td width="15%" align="center"><label for="textfield7">
                                            <input class="form-input" name="edad" type="text" size="20">
                                          </label></td>
                                          <td width="1%" align="center">&nbsp;</td>
                                          <td width="9%" align="center">
                                            <div class="option-group radio">
                                              <input type="radio" name="sexo" id="sexo-m" />
                                              <label for="sexo-m">M</label>

                                              <input type="radio" name="sexo" id="sexo-f" />
                                              <label for="sexo-f">F</label>
                                            </div>
                                          </td>
                                          <td>&nbsp;</td>
                                          <td><input class="form-input" name="telefono" type="text" size="50"></td>
                                          <td>&nbsp;</td>
                                          <td><input class="form-input" name="email" type="text" size="50"></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left"><table width="100%" border="0" cellpadding="1" cellspacing="1">
                                        <tr>
                                          <td colspan="3">Identificación del bien contratado </td>
                                          <td width="1%">&nbsp;</td>
                                          <td width="70%">Motivo de la Queja o Sugerencia</td>
                                          </tr>
                                        <tr>
                                          <td width="17%" align="center">Servicio</td>
                                          <td width="1%" align="center">&nbsp;</td>
                                          <td width="11%" align="center">
                                            <input class="form-input" name="identificacion" type="text" size="15">
                                          </td>
                                          <td>&nbsp;</td>
                                          <td>
                                            <input class="form-input" name="queja-sugerencia" type="text" size="95">
                                          </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left"><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                        <tr>
                                          <td>Identificación de la Atención Brindada:</td>
                                        </tr>
                                        <tr>
                                          <td height="23">
                                            <textarea class="form-input" name="identificacion" cols="130" rows="15"></textarea>
                                          </td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td height="147" align="left"><table width="100%" border="0" cellpadding="1" cellspacing="1">
                                        <tr>
                                          <td width="25%">Tipo Atención:</td>
                                          <td width="20%">Presenta Queja:</td>
                                          <td width="25%">Tipo Personal:</td>
                                          <td width="30%">Tipo de Vía de Canalización</td>
                                        </tr>
                                        <tr>
                                          <td width="25%" valign="top">
                                            <div class="option-group radio">
                                              <input type="radio" name="tipo-atencion" id="atencion-1" />
                                              <label for="atencion-1">Consulta Externa</label>

                                              <input type="radio" name="tipo-atencion" id="atencion-2" />
                                              <label for="atencion-2">Emergencia</label>

                                              <input type="radio" name="tipo-atencion" id="atencion-3" />
                                              <label for="atencion-3">Hospitalización</label>
                                            </div>
                                          </td>
                                          <td width="20%" valign="top">
                                            <div class="option-group radio">
                                              <input type="radio" name="presenta-queja" id="queja-1" />
                                              <label for="queja-1">Usuario</label>

                                              <input type="radio" name="presenta-queja" id="queja-2" />
                                              <label for="queja-2">Acompañante</label>
                                            </div>
                                          </td>
                                          <td width="25%" valign="top">
                                            <div class="option-group radio">
                                              <input type="radio" name="tipo-personal" id="personal-1" />
                                              <label for="personal-1">Enfermera(o)</label>

                                              <input type="radio" name="tipo-personal" id="personal-2" />
                                              <label for="personal-2">Médico</label>

                                              <input type="radio" name="tipo-personal" id="personal-3" />
                                              <label for="personal-3">Tecnologo Médico</label>

                                              <input type="radio" name="tipo-personal" id="personal-4" />
                                              <label for="personal-4">Tec. Adm</label>
                                              
                                              <input type="radio" name="tipo-personal" id="personal-5" />
                                              <label for="personal-5">Tec. Enferm.</label>
                                              
                                              <input type="radio" name="tipo-personal" id="personal-6" />
                                              <label for="personal-6">Vigilante</label>
                                              
                                              <input type="radio" name="tipo-personal" id="personal-7" />
                                              <label for="personal-7">Asist. Social</label>
                                              
                                              <input type="radio" name="tipo-personal" id="personal-8" />
                                              <label for="personal-8">No aplica</label>
                                              
                                              <input type="radio" name="tipo-personal" id="personal-9" />
                                              <label for="personal-9">Otros</label>
                                            </div>
                                          </td>
                                          <td width="30%" valign="top">
                                            <div class="option-group radio">
                                              <input type="radio" name="tipo-via" id="canalizacion-1" />
                                              <label for="canalizacion-1">Oficina de Gest. de la Calidad</label>

                                              <input type="radio" name="tipo-via" id="canalizacion-2" />
                                              <label for="canalizacion-2">Trámite Documentario</label>
                                              
                                              <input type="radio" name="tipo-via" id="canalizacion-3" />
                                              <label for="canalizacion-3">Email</label>
                                              
                                              <input type="radio" name="tipo-via" id="canalizacion-4" />
                                              <label for="canalizacion-4">Teléfono</label>
                                              
                                              <input type="radio" name="tipo-via" id="canalizacion-5" />
                                              <label for="canalizacion-5">Buzón</label>
                                              
                                              <input type="radio" name="tipo-via" id="canalizacion-6" />
                                              <label for="canalizacion-6">Otros</label>
                                            </div>
                                          </td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left"><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                        <tr>
                                          <td>MOTIVO DE QUEJA</td>
                                        </tr>
                                        <tr>
                                          <td height="23">
                                            <textarea class="form-input" name="motivo-queja" cols="80" rows="2" ></textarea>
                                          </td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left"><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                        <tr>
                                          <td>UNIDAD, SERVICIO</td>
                                        </tr>
                                        <tr>
                                          <td height="23">
                                            <textarea class="form-input" name="unidad-servicio" cols="80" rows="2"></textarea>
                                          </td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left"><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                        <tr>
                                          <td>DATOS DEL PERSONAL A QUIEN DIRIGEN EL RECLAMO</td>
                                        </tr>
                                        <tr>
                                          <td height="23">
                                            <textarea class="form-input" name="datos-personal" cols="80" rows="2"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="option-group radio">
                                              <input type="radio" name="dt-personal" id="dt-personal-1" />
                                              <label for="dt-personal-1">No aplica</label>
                                              
                                              <input type="radio" name="dt-personal" id="dt-personal-2" />
                                              <label for="dt-personal-2">No Identificado</label>
                                            </div>

                                          </td>

                                          <tr>
                                            <td>
                                              <input class="form-btn" type="submit" value="Enviar" />
                                            </td>
                                          </tr>
                                            
                                        </tr>
                                      </table>

                                    </td>
                                    </tr>
                                  </table>
                                </form>

                            </div>

                        </div>

                    </section>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

        </div>

    </body>
</html>
