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

                                <table width="450" border="0" align="center" cellpadding="3" cellspacing="3">
                                  <tr>
                                    <td width="46" align="center" bgcolor="#2D65AE"><strong>N°</strong></td>
                                    <td width="134" align="center" bgcolor="#2D65AE"><strong>Nº DE TELEF</strong></td>
                                    <td width="268" bgcolor="#2D65AE"><strong>OFICINA </strong></td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">1</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281420</td>
                                    <td width="268" bgcolor="#DADADA">Central    Telefónica</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">2</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3280028</td>
                                    <td width="268" bgcolor="#DADADA">Central    Telefónica</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">3</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281414</td>
                                    <td width="268" bgcolor="#DADADA">Dirección    General (telefax)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">4</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281421</td>
                                    <td width="268" bgcolor="#DADADA">Dirección    General Adjunta</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">5</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281434</td>
                                    <td width="268" bgcolor="#DADADA">Dirección    Ejecutiva de Administración</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">6</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281488</td>
                                    <td width="268" bgcolor="#DADADA">Oficina de    Seguros</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">7</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3287676</td>
                                    <td width="268" bgcolor="#DADADA">Oficina de    Seguros (2° piso)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">8</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3284444</td>
                                    <td width="268" bgcolor="#DADADA">Logística    (Programación)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">9</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281330</td>
                                    <td width="268" bgcolor="#DADADA">Logística    (Adqusisiciones)</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">10</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3287272</td>
                                    <td width="268" bgcolor="#DADADA">Personal</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">11</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281340</td>
                                    <td width="268" bgcolor="#DADADA">Economía</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">12</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3288960</td>
                                    <td width="268" bgcolor="#DADADA">Epidemiología</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">13</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3287474</td>
                                    <td width="268" bgcolor="#DADADA">Planeamiento</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">14</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3280124</td>
                                    <td width="268" bgcolor="#DADADA">Capacitación</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">15</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3281424</td>
                                    <td width="268" bgcolor="#DADADA">Emergencia</td>
                                  </tr>
                                  <tr>
                                    <td width="46" align="center" bgcolor="#DADADA">16</td>
                                    <td width="134" align="center" bgcolor="#DADADA">3280887</td>
                                    <td width="268" bgcolor="#DADADA">Comunicaciones</td>
                                  </tr>
                                </table><br><br>

                                <table width="712" border="0" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td width="52" bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DIRECCIÓN GENERAL</strong></td>
  </tr>
  <tr>
    <td bgcolor="#DADADA">&nbsp;</td>
    <td width="363" bgcolor="#DADADA">Dr. José Roca Mendoza</td>
    <td width="267" bgcolor="#DADADA">&nbsp;</td>
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
  <tr bgcolor="#DADADA">
    <td>8244</td>
    <td>Gestión  Tecnológica</td>
    <td>Sr.  Freddy Tazayco A.  </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>305</td>
    <td>Casa  de Fuerza</td>
    <td>Sr. Glicerio Rozales</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>233</td>
    <td>Área  de Costura</td>
    <td>Sra. Gladys  Mestanza </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8238</td>
    <td>Área  Vigilancia</td>
    <td>Sr.  Marcos Ramírez  A.</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>297</td>
    <td>Vigilancia puerta  Principal</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8243</td>
    <td>Vigilancia  – Emergencia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>214</td>
    <td> Transporte</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>214</td>
    <td>Vigilancia puerta  Puno</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>230</td>
    <td>Área de Talleres</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8293</td>
    <td>Empresa  de Limpieza (ADSERCO)</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO  DE  MEDICINA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>235</td>
    <td>Dr.  Oscar Gregorio Grados la Cruz&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>236</td>
    <td>Servicio de Medicina 1   (Santo Toribio)</td>
    <td>Dr. Jorge Yarinsueca Gutiérrez</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>237</td>
    <td>Servicio de Medicina 2   (San Pedro)</td>
    <td>Dr. Ruben López Flores</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>241</td>
    <td>Servicio  de Medicina  3 (Santa Ana)</td>
    <td>Dr. Ezequiel  Alejos  Hipanaqué  </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>238</td>
    <td>Servicio  de Medicina  4 (San Andrés)</td>
    <td>Dr.  Luis Díaz Tambini</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>243</td>
    <td>Servicio  de Medicina 5  (Julián Arce)</td>
    <td>Dr. Luis Cano Cárdenas Rosas</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>CONSULTORIOS  DE MEDICINA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>315</td>
    <td>Medicina  1 –5-Sto. Toribio- Julián Arce</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>316</td>
    <td>Medicina   2 (San Pedro) </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>314</td>
    <td>Medicina   3 (Santa   Ana)</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>312</td>
    <td>Medicina   4 (San Andrés)</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>311</td>
    <td>Hematología  Clínica</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DPTO. DE MEDICINA ESPECIALIZADA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>235</td>
    <td>Dr. Wilder Peña  Madonado</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>239</td>
    <td>San Antonio I- Sala de Mujeres</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>222</td>
    <td>San Antonio II- Sala de Varones</td>
    <td>Dr.   Víctor Fajardo Alfaro - Jefatura</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8264</td>
    <td>Servicio de Enfermedades Infecciosas y Tropicales</td>
    <td>Dr.  Eduardo Ticona Chávez</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>276</td>
    <td>Sala Santa Rosa 2</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8235</td>
    <td>PROCETTSS</td>
    <td>Dr. Jorge Arévalo Abanto</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>246</td>
    <td>Servicio  de Cardiología</td>
    <td>Dr.  Raúl Lama Díaz  </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>317</td>
    <td>Servicio  de Dermatología</td>
    <td>Dra. Lucía Bobbio Fujishima</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>244</td>
    <td>Servicio  de Endocrinología</td>
    <td>Dr. Hugo Arbañil  Huamán</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8248</td>
    <td> Programa  de   Diabetes</td>
    <td> Dra. Rosa Pando Álvarez</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>310</td>
    <td>Serv.  Reumatología e Inmunología</td>
    <td>Dr. Arquímedes Hidalgo García </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>247</td>
    <td>Servicio  de Nefrología </td>
    <td>Dr.  Javier Hernández Pacheco</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8285</td>
    <td>Unidad  de Hemodiálisis</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>303</td>
    <td>Servicio.  Gastroenterología  </td>
    <td>Dr.  Wiliam Prado Cisneros</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>303</td>
    <td>Centro  Endoscópico</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>242</td>
    <td> Consultorio  de Gastroenterología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>324</td>
    <td> Servicio  de Neurología –2</td>
    <td>Dr. Julio Pérez Villegas</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>248</td>
    <td>Consultorio  de Neurología 1               </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>309</td>
    <td>Servicio  de Salud Mental</td>
    <td>Dr. Manuel Mallqui Babilón</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>309</td>
    <td>Neuropsicología</td>
    <td>Lic. Roxana Gallardo</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8223</td>
    <td>Psicología</td>
    <td>Lic. Violeta Dongo</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8240</td>
    <td>Serv.  de Medicina Física Rehabilitación </td>
    <td>Dr.  Roberto Cassana Martínez</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>275</td>
    <td>Servicio  de Neumología</td>
    <td>Dr. Carlos Martínez Abarca </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>274</td>
    <td>Sala  Santa Rosa   3  </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>277</td>
    <td>Programa  Control     TBC</td>
    <td>Lic. Elbia Álvarez Muñoz</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8245</td>
    <td>Broncofibroscopia </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8247</td>
    <td>Consultorio  de Asma</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8270</td>
    <td>Servicio  de Oncología   Médica</td>
    <td>Dra. Liliana Chumbes Sipán</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8261</td>
    <td>Quimioterapia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>308</td>
    <td>Servicio   de     Geriatría</td>
    <td>Dr.  Seberino Crispín Espinoza</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>235</td>
    <td>Servicio de Hematología Clínica</td>
    <td>Dr. Oscar Ruiz Franco</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO DE  CIRUGÍA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>249</td>
    <td>Dra. María Angélica Valcárcel  Saldaña</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>263</td>
    <td>Servicio  H-3</td>
    <td>Dr. Epímaco Morales LL</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>255</td>
    <td>Servicio  H-4</td>
    <td>Dr. Pedro Herrera Fabián</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>251</td>
    <td>Servicio   I-3</td>
    <td>Dr. Marco Antonio Gomero Roca</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>252</td>
    <td> Servicio    I-4</td>
    <td>Dr. Himerón  P.  Limaylla Vega</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>255</td>
    <td>Servicio  de Neurocirugía  H4 </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8262</td>
    <td>Dr.  Marco  Gonzales  Portillo S.</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>250</td>
    <td> Servicio  de    Urología (I-1)</td>
    <td>Dr. Renán Otta Gadea</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>323</td>
    <td>Servicio  de Cirugía Plástica</td>
    <td>Dra.  Ana Mercedes Antonio Fernández</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>257</td>
    <td>Servicio  de Traumatología</td>
    <td>Dr.  Celso Salgado Rodríguez </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>259</td>
    <td>Servicio  de Cabeza y  Cuello</td>
    <td>Dr. José  L. Saavedra Leveau </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>258</td>
    <td>Servicio  de Otorrinolaringología</td>
    <td>Dr. Rosa Ampuero Cáceres</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>260</td>
    <td>Servicio  de Oftalmología</td>
    <td>Dr. César Duran Espinoza</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>267</td>
    <td>Servicio  de Cirugía Pediátrica</td>
    <td>Dra.  Rossana Mendoza León</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>CONSULTORIOS DE CIRUGÍA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>321</td>
    <td>Cirugía  1     (H-3 – H-4)</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>325</td>
    <td>Cirugía  2     (I-3   -  I-4 ) </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>302</td>
    <td>Cirugía   3      Diferentes Salas de Cirugía</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>256</td>
    <td>Consultorio  de Traumatología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>273</td>
    <td>Consultorio   Urología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>319</td>
    <td>Consultorio  de Neurocirugía H - 4 </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>320</td>
    <td>Consultorio de  Anestesiología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DPTO.  CIRUGÍA DE TÓRAX Y CARDIOVASCULAR</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>322</td>
    <td>Dr. Julio  Ernesto Peralta Rodríguez</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8255</td>
    <td>Consultorio  de Cardiovascular</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8220</td>
    <td>Unidad  Cardiovascular Post Quirúrgico</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8252</td>
    <td>Unidad  Cardiovascular Ayuda y Coronaria</td>
    <td>Servicio  Hemodinamia (CETIDE)</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DPTO.  DE GINECO -OBSTETRICIA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>261</td>
    <td>Dr. Víctor  Emilio Cubas Vásquez </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>251</td>
    <td>Servicio  de Ginecología Cirugía  I-3</td>
    <td>Dr. Edmundo Huerta  Centeno</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>265</td>
    <td> Servicio  Obstetricia – H2 – Serv. De Obstetrices</td>
    <td>Dr.  Fernando Liberato Felles</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>264</td>
    <td>Centro  Obstétrico</td>
    <td>Lic. Hemnalini  García  </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8258</td>
    <td> Sala  de  Operaciones de Centro Obstétrico</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8216</td>
    <td>Consultorio  de   Ginecología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>318</td>
    <td>Serv.  Reproducción    Humana</td>
    <td>Dr.  Jorge Ponce Maldonado   </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8277</td>
    <td>Serv.  de Oncología Ginecológica</td>
    <td> Dr. Urso Parra Saldaña</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8256</td>
    <td>Unidad  Procedimiento Oncológico</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8290</td>
    <td>Triaje  y Consultorio de Obstetricia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8291</td>
    <td>Despistaje  de Cáncer</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO  DE PEDIATRÍA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>266</td>
    <td>Dra.  Rossana Pantoja Sánchez</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>266</td>
    <td>Servicio   de    Pediatría      </td>
    <td>Dr. Pedro San Martín H.</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8219</td>
    <td>Consultorio  de Pediatría</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>267</td>
    <td>Hospitalización  de Pediatría</td>
    <td>Lic. Imelda Escalante</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>268</td>
    <td>Servicio     de    Neonatología</td>
    <td>Dr. Richard Muñoz  Carrasco</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8221</td>
    <td>Emergencia  de Pediatría </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8259</td>
    <td>UCI  Pediátrica  -8232- Vacunación</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8275</td>
    <td>Programa  de Crecimiento y Desarrollo</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DPTO.  DE ODONTOESTOMATOLOGÍA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>288</td>
    <td>Dr. Juan Eduardo Vásquez  Izquierdo </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>&nbsp;</td>
    <td> Servicio de Cariología y Endodoncia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>&nbsp;</td>
    <td>Dra. Dora Blanca Poves Maita</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO DE  PATOLOGÍA CLÍNICA ANATOMÍA PATOLÓGICA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8269</td>
    <td>Dr. Alejandro Alfaro Lozano</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8246</td>
    <td>Servicio de Microbiología e Inmunología</td>
    <td>Dra. Luz María Huaroto Valdivia</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>279</td>
    <td>Servicio  de Hematología y Bioquímica (Lab. Urgencia)</td>
    <td>Dra. María Consuelo Muñoz Jáuregui</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>240</td>
    <td>Área Pre-Analítica (Recepción de Muestras)</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>278</td>
    <td>Servicio  de Anatomía Patológica</td>
    <td>Dr. Gustavo Cerrillo  Sánchez </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>293</td>
    <td>Mortuorio</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO  DE BANCO DE SANGRE</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>280</td>
    <td>Dr.  Carlos Alberto Delgado Silva</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong> DEPARTAMENTODE ANESTESIOLOGÍA Y CENTRO  QUIRURGICO</strong><strong> </strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>299</td>
    <td>Santos  Ramírez Quesquén </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>269</td>
    <td>Sala   de Operaciones  Central</td>
    <td>Dra.  Carolina Yataco Mori</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>270</td>
    <td>Recuperación   Central</td>
    <td>Dr. Rubén J. Castillo Barreto</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8258</td>
    <td>Sala  de  Operaciones de Centro Obstétrico </td>
    <td>Dr. Rubén J. Castillo Barreto</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8214</td>
    <td>Sala  de Recuperación de Emergencia</td>
    <td>Dr.  Rubén J. Castillo Barreto</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO DE DIAGNOSTICO POR IMÁGENES  </strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>282</td>
    <td>Dr. Víctor Manuel  Resurrección  Sánchez</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>&nbsp;</td>
    <td>Serv. de  Diagnóstico  y   Procedimiento por Radiología</td>
    <td>Dr.  Ángel  Salinas Castillo</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8298</td>
    <td>Serv. de  Diagnóstico  y   Procedimiento por Ecografía</td>
    <td>Dr.  Elías Aliaga Herrera</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>281</td>
    <td>Resonancia,  Mamografía, Densitometria y Seguridad</td>
    <td>Radiológica  y Física  (CETIDE)</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8276</td>
    <td>Rayos X de Emergencia GG</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO DE ENFERMERÍA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>283</td>
    <td>Lic. Domitila Esther  Canchari Candela</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>284</td>
    <td>Consultorios  Externos</td>
    <td>Lic. Vilma Rosario Valdivieso</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8289</td>
    <td>Servicio  de Esterilización</td>
    <td>Sor Concepción Meléndez  M.</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8292</td>
    <td>Central de Ropa</td>
    <td>Lic. Doly Guevara Yupanqui</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO  DE FARMACIA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>285</td>
    <td>Q.F. María Betzabé Aza Castillo </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8249</td>
    <td>Almacén  de Farmacia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8288</td>
    <td>Farmacia  de Consultorios Externos</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8280</td>
    <td>Farmacia  de Consultorio de Cirugía</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong> DEPARTAMENTO DE NUTRICIÓN Y DIETÉTICA</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>286</td>
    <td>Mg. &nbsp;Jovita Silva Robledo</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO  DE SERVICIO SOCIAL </strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>287</td>
    <td>Lic. Irene Alicia Torrejón Puente</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8263</td>
    <td>Servicio Social de  Hospitalización</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8296</td>
    <td>Servicio  Social de Emergencia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DPTO. DE  EMERGENCIA Y CUIDADOS CRITICOS</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8225</td>
    <td>Dr. Eduardo Farfán Castro</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8297</td>
    <td>Jefatura de Guardia </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>UNIDAD DE CUIDADOS INTENSIVOS (UCI)</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8227</td>
    <td>Dr. Humberto Lira Veliz</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8227</td>
    <td>Unidad de Cuidados Intermedios (UCIN)</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>UNIDAD DE  EMERGENCIA Y  TRAUMA SHOCK</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8218</td>
    <td>Dr. Henry Yupanqui Calderón</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8287</td>
    <td>Enfermería</td>
    <td>Lic.  Evelyn Acosta  Waldi  </td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8272</td>
    <td>Neuro  Traumatología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8251</td>
    <td>Uci-neurología</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8212</td>
    <td>Sala  de observación de mujeres</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8215</td>
    <td>Sala  de observación  varones </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8283</td>
    <td>Tópico de Cirugía</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8265</td>
    <td>Tópico  de Medicina </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8217</td>
    <td>Obstetricia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8226</td>
    <td>Sala Operaciones </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8214</td>
    <td>Recuperación  de Emergencia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8242</td>
    <td>Admisión  de Emergencia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8276</td>
    <td>Rayos X </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8257</td>
    <td>Farmacia</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8279</td>
    <td> Caja   Emerg</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>DEPARTAMENTO DE  CONSULTORIOS  EXTERNOS</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8213</td>
    <td>Dr. Carlos  Germán Medina Soriano</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td bgcolor="#2D65AE">&nbsp;</td>
    <td colspan="2" bgcolor="#2D65AE"><strong>OTROS SERVICIOS</strong></td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>289</td>
    <td>Cuerpo  Médico</td>
    <td>Dr. Manuel S. Salazar  Tenorio</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8250</td>
    <td>Sub  CAFAE</td>
    <td>Dra.  Judith Herrera Chávez</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8286</td>
    <td>Voluntariado</td>
    <td>Sra. Esther Canahualpa</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>292</td>
    <td>Comunidad</td>
    <td>Sor Concepción Meléndez M.</td>
  </tr>
  <tr bgcolor="#DADADA">
    <td>8295</td>
    <td>Oficina de  Coordinación de la UNMSM</td>
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
