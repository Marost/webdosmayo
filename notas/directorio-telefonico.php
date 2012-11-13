<?php 
/*CONEXION Y FUNCIONES*/
require_once("../panel@hndm/conexion/conexion.php");
require_once("../panel@hndm/conexion/funciones.php");
require_once("../panel@hndm/conexion/funcion-paginacion.php");
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

        <?php require_once("../w-header-scripts.php") ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <div class="header-container">

                <?php require_once("../w-header.php") ?>

            </div>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <div class="nw-nota">

                            <div class="titulo">
                                <h2>Directorio Interno</h2>
                            </div>

                            <div class="contenido">

                                <table width="450" border="1" cellpadding="3" cellspacing="0">
                                  <tr>
                                    <td width="46" align="center" bgcolor="#00B0F0"><strong>N°</strong></td>
                                    <td width="134" align="center" bgcolor="#00B0F0"><strong>Nº DE TELEF</strong></td>
                                    <td width="268" bgcolor="#00B0F0"><strong>OFICINA </strong></td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">1</td>
                                    <td width="134" align="center">3281420</td>
                                    <td width="268">Central    Telefónica</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">2</td>
                                    <td width="134" align="center">3280028</td>
                                    <td width="268">Central    Telefónica</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">3</td>
                                    <td width="134" align="center">3281414</td>
                                    <td width="268">Dirección    General (telefax)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">4</td>
                                    <td width="134" align="center">3281421</td>
                                    <td width="268">Dirección    General Adjunta</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">5</td>
                                    <td width="134" align="center">3281434</td>
                                    <td width="268">Dirección    Ejecutiva de Administración</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">6</td>
                                    <td width="134" align="center">3281488</td>
                                    <td width="268">Oficina de    Seguros</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">7</td>
                                    <td width="134" align="center">3287676</td>
                                    <td width="268">Oficina de    Seguros (2° piso)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">8</td>
                                    <td width="134" align="center">3284444</td>
                                    <td width="268">Logística    (Programación)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">9</td>
                                    <td width="134" align="center">3281330</td>
                                    <td width="268">Logística    (Adqusisiciones)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">10</td>
                                    <td width="134" align="center">3287272</td>
                                    <td width="268">Personal</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">11</td>
                                    <td width="134" align="center">3281340</td>
                                    <td width="268">Economía</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">12</td>
                                    <td width="134" align="center">3288960</td>
                                    <td width="268">Epidemiología</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">13</td>
                                    <td width="134" align="center">3287474</td>
                                    <td width="268">Planeamiento</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">14</td>
                                    <td width="134" align="center">3280124</td>
                                    <td width="268">Capacitación</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">15</td>
                                    <td width="134" align="center">3281424</td>
                                    <td width="268">Emergencia</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center">16</td>
                                    <td width="134" align="center">3280887</td>
                                    <td width="268">Comunicaciones</td>
                                  </tr>
                                </table><br><br>

                                <table width="650" border="0" align="center" cellpadding="3" cellspacing="3">
                                  <tr>
                                    <td width="54" bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>DIRECCIÓN GENERAL</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                    <td width="381" bgcolor="#DADADA">Dr. José Roca Mendoza</td>
                                    <td width="185" bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">209       </td>
                                    <td bgcolor="#DADADA">Secretaria de la Dirección General</td>
                                    <td bgcolor="#DADADA">Srta. Elvira López   Flores</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>DIRECCIÓN GENERAL ADJUNTA</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                    <td bgcolor="#DADADA">Dr. Manuel Silva Zumarán</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">210</td>
                                    <td bgcolor="#DADADA">Secretaria de la Dirección General Adjunta</td>
                                    <td bgcolor="#DADADA">Sra. Fidela Ramos</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>DIRECCIÓN EJECUTIVA DE ADMINISTRACIÓN</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>&nbsp;</td>
                                    <td>Dr. Silvia Rodríguez Lichtenheldt</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>211</td>
                                    <td>Secretaría de la DEA     </td>
                                    <td>Sra. Amparo Almendro A</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>ASESORÍA DE LA DIRECCIÓN GENERAL</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>209</td>
                                    <td>Dr. Percy Balabarca Cristobal</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>TRÁMITE DOCUMENTARIO</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>&nbsp;</td>
                                    <td>Sr. Pablo Camones  V.</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>212</td>
                                    <td>Archivo Central</td>
                                    <td>Srta. Annita Rojas L.</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>ORGANO DE CONTROL INSTITUCIONAL</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>215</td>
                                    <td>Abog. Irene Vásquez Perdomo  </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA EJECUTIVA DE PLANEAMIENTO  ESTRATEGICO</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>294</td>
                                    <td>Econ.   Carmen Ramos Ochoa </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA DE ASESORIA  JURIDICA</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>232</td>
                                    <td>Abog. Jorge  Emiliano&nbsp;Vargas  Torrejón&nbsp;&nbsp; </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICICINA DE EPIDEMIOLOGÍA  Y    SALUD AMBIENTAL    </strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>234</td>
                                    <td>Dr. Raul Montalvo Otivo </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr bgcolor="#2D65AE">
                                    <td>&nbsp;</td>
                                    <td colspan="2"><strong>OFICINA  DE COMUNICACIONES</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">213</td>
                                    <td bgcolor="#DADADA">Lic. Denisse Torres Benitez  </td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">201</td>
                                    <td bgcolor="#DADADA">Central Telefónica  </td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">291</td>
                                    <td bgcolor="#DADADA">Capellanía                </td>
                                    <td bgcolor="#DADADA">Rvdo. Nolberto Aguilar </td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">291</td>
                                    <td bgcolor="#DADADA">Auditorio de Comunicaciones</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA DE GESTION DE  CALIDAD           </strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8278</td>
                                    <td bgcolor="#DADADA">Dr. Marco Antonio Sánchez Ramírez&nbsp;</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFIC. DE APOYO A LA CAPACITACIÓN,  DOCENCIA E INVESTIGACIÓN</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">231</td>
                                    <td bgcolor="#DADADA">Dra. Nora de las Mercedes Espíritu Salazar</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8234</td>
                                    <td bgcolor="#DADADA">Unidad de   Investigación</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">290</td>
                                    <td bgcolor="#DADADA">Residentado Médico</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA  DE SEGUROS</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8241</td>
                                    <td bgcolor="#DADADA">Dra.  Aurora de la Libertad Coello Pineda&nbsp; </td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">295</td>
                                    <td bgcolor="#DADADA">Oficina de Seguros </td>
                                    <td bgcolor="#DADADA">Lic Margarita Rivero L. </td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8224</td>
                                    <td bgcolor="#DADADA">SOAT</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA DE PERSONAL</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">216</td>
                                    <td bgcolor="#DADADA">Abog.   Ana Maria Fernández Tirado</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">217</td>
                                    <td bgcolor="#DADADA">Control    de   Asistencia          </td>
                                    <td bgcolor="#DADADA">Sr. Guillermo Baldeón C.</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">217</td>
                                    <td bgcolor="#DADADA">Selec. y Clasifi. y Regis</td>
                                    <td bgcolor="#DADADA">Sr. Javier Núñez</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">218</td>
                                    <td bgcolor="#DADADA">Medico de Personal</td>
                                    <td bgcolor="#DADADA">Dr. Alberto Cortez C.</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8281</td>
                                    <td bgcolor="#DADADA">Bienestar de Personal     </td>
                                    <td bgcolor="#DADADA">Lic. Violeta Llique   L</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">219</td>
                                    <td bgcolor="#DADADA">Remuneraciones              </td>
                                    <td bgcolor="#DADADA">Srta.María Luisa Garrido</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">219</td>
                                    <td bgcolor="#DADADA">Beneficios y Pensiones    </td>
                                    <td bgcolor="#DADADA">Sra. Fabiola Torres Mori</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8271</td>
                                    <td bgcolor="#DADADA">Control de Asistencia (Marcador)</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8236</td>
                                    <td bgcolor="#DADADA">Cuna Jardín</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA DE ECONOMIA</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">220</td>
                                    <td bgcolor="#DADADA">CPC.  Eric Fermín   Cruzalegui   Arellano</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">296</td>
                                    <td bgcolor="#DADADA">Facturación y Altas </td>
                                    <td bgcolor="#DADADA">Sra. Lídia Gallegos P.</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8253&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td bgcolor="#DADADA">Tesorería</td>
                                    <td bgcolor="#DADADA">Sra. Mary Cóndor Mori</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8284</td>
                                    <td bgcolor="#DADADA">Control Previo</td>
                                    <td bgcolor="#DADADA">Sr. Lorenzo Aduvire O.</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8254</td>
                                    <td bgcolor="#DADADA">Pagaduría</td>
                                    <td bgcolor="#DADADA">Sra. Nina Rivas C.</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">296&nbsp;</td>
                                    <td bgcolor="#DADADA">Caja Centra -8267-    Caja Grau  </td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8279     </td>
                                    <td bgcolor="#DADADA">Caja de Emergencia</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8280</td>
                                    <td bgcolor="#DADADA">Caja de consultorios de Cirugía                </td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8299     </td>
                                    <td bgcolor="#DADADA">Caja de consultorios de Medicina </td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA DE LOGISTICA</strong></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">221</td>
                                    <td bgcolor="#DADADA">Lic.   Magaly  Roció  Flores   Sáenz</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">298</td>
                                    <td bgcolor="#DADADA">Adquisiciones</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8294</td>
                                    <td bgcolor="#DADADA">Programación</td>
                                    <td bgcolor="#DADADA">Srta. Fabiola Ramos</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">224</td>
                                    <td bgcolor="#DADADA">Almacén  Central </td>
                                    <td bgcolor="#DADADA">Sr. Oscar Quintana</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8274</td>
                                    <td bgcolor="#DADADA">Control  Patrimonial</td>
                                    <td bgcolor="#DADADA">Sra. Dina Meléndez</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8233</td>
                                    <td bgcolor="#DADADA">Imprenta</td>
                                    <td bgcolor="#DADADA">Sr. Jorge Farfán</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8237</td>
                                    <td bgcolor="#DADADA">Kardex</td>
                                    <td bgcolor="#DADADA">Sr. Vicente Huamán</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">223</td>
                                    <td bgcolor="#DADADA">Almacén  de Medicinas</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8260</td>
                                    <td bgcolor="#DADADA">Almacén  de  Víveres</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#DADADA">8266</td>
                                    <td bgcolor="#DADADA">Donación</td>
                                    <td bgcolor="#DADADA">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA DE ESTADÍSCA E INFORMÁTICA</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>227</td>
                                    <td>Ing. Marcos Antonio Horna  Roque </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>226</td>
                                    <td>Registros  Médicos  y Archivo</td>
                                    <td>Sr. Carlos Viera G.</td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>225</td>
                                    <td>Recepción  y   Hospitaliza.</td>
                                    <td>Sra. América Nestares</td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>228</td>
                                    <td bgcolor="#DADADA">Informática</td>
                                    <td>Sr. Juan Ruiz Alván</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#2D65AE">&nbsp;</td>
                                    <td colspan="2" bgcolor="#2D65AE"><strong>OFICINA  DE SERVICIOS GENERALES</strong></td>
                                  </tr>
                                  <tr bgcolor="#DADADA">
                                    <td>229</td>
                                    <td>Arq. Jhonny Sanchez Taboada </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                            </div>

                        </div>

                    </section>

                    <?php require_once("../w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("../w-footer.php") ?>

        </div>

<?php require_once("../w-popup.php") ?>
        
    </body>
</html>
