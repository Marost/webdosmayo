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

        <?php require_once("w-header-scripts.php") ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <?php require_once("w-header.php") ?>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <h3>Directorio Institucional</h3>

                        <article class="directorio-doctor">
                            <div class="datos">
                                <img src="/imagenes/doctores/dr_roca.jpg" width="120" height="120">
                                <div>
                                    <h2>José Roca Mendoza</h2>
                                    <p>Director General</p>
                                </div>
                            </div>

                            <div class="contenido">
                                <p>Médico Gineco Obstetra egresado de la Facultad de Medicina de San Fernando de la Universidad Nacional Mayor de San Marcos, de la Promoción 1974. Realizó su Residentado de Ginecobstetricia en el Instituto Nacional Materno Perinantal (Ex Maternidad de Lima) del 77 al 79. Doctor en Medicina, con Maestría en Salud Pública. Ocupó el cargo de Jefe del Servicio de Ginecología y Ginecología Oncológica en el Hospital Nacional "Dos de Mayo".</p>
                            </div>

                        </article>

                        <article class="directorio-doctor">
                            <div class="datos">
                                <img src="/imagenes/doctores/dr_silva.jpg" width="120" height="120">
                                <div>
                                    <h2>Manuel Silva Zumaran</h2>
                                    <p>Director Adjunto</p>
                                </div>
                            </div>

                            <div class="contenido">
                                <p>Médico cirujano egresado de la Universidad Nacional Mayor de San Marcos, promoción 70A –1980, con especialidad de Medicina Interna en la Universidad Peruana Cayetano Heredia. Realizó su internado en el Hospital Nacional “Dos de Mayo” (HNDM). Asimismo, efectuó una Maestría en Administración con mención en Gestión Hospitalaria. Más de 25 años de labor como médico internista en el HNDM, respectivamente en la Sala San Andrés.</p>
                            </div>

                        </article>

                        <article class="directorio-doctor">
                            <div class="datos">
                                <img src="/imagenes/doctores/dr_rodriguez.jpg" width="120" height="120">
                                <div>
                                    <h2>Silvia Rodriguez Lichtenheldt</h2>
                                    <p>Directora Ejecutiva de Administración</p>
                                </div>
                            </div>

                            <div class="contenido">
                                <p>Doctora egresada de la Facultad de Medicina de la Universidad Nacional Federico Villareal en el año 1983 con la especialidad de Cirugía Ortopédica y Traumatología. Entre otros estudios, realizó la Maestría en Salud Pública con mención en Gestión Hospitalaria. Teniendo 25 años de labor en el Hospital Nacional Dos de Mayo, ha ocupado la jefatura del Departamento de Cirugía Especializada, asesora de la Dirección General Adjunta y directora de la Oficina de Seguros. Actualmente, es la jefa de la Dirección Ejecutiva de Administración de nuestra institución.</p>
                            </div>

                        </article>

                        <div id="medicos-lista">
                            <h3>Otros Funcionarios</h3>

                            <select id="lista" name="lista">
                                <option>[Seleccione]</option>
                                <option value="1">ASESOR</option>
                                <option value="2">ORGANO DE CONTROL INSTITUCIONAL</option>
                                <option value="3">ORGANOS DE ASESORAMIENTO</option>
                                <option value="4">OFICINA DE ASESORÍA JURÍDICA</option>
                                <option value="5">OFICINA DE EPIDEMIOLOGÍA Y SALUD AMBIENTAL.</option>
                                <option value="6">OFICINA DE GESTIÓN DE CALIDAD.</option>
                                <option value="7">DIRECCION EJECUTIVA DE ADMINISTRACIÓN</option>
                                <option value="8">OFICINA DE PERSONAL.</option>
                                <option value="9">OFICINA DE ECONOMÍA</option>
                                <option value="10">OFICINA DE LOGÍSTICA.</option>
                                <option value="11">OFICINA DE SERVICIOS GENERALES Y MANTENIMIENTO.</option>
                                <option value="12">OFICINA DE ESTADÍSTICA E INFORMÁTICA.</option>
                                <option value="13">OFICINA DE APOYO A LA DOCENCIA E INVESTIGACION</option>
                                <option value="14">OFICINA DE COMUNICACIONES</option>
                                <option value="15">OFICINA DE SEGUROS</option>
                                <option value="16">DEPARTAMENTO DE MEDICINA INTERNA</option>
                                <option value="17">SERVICIO DE CARDIOLOGÍA</option>
                                <option value="18">SERVICIO DE ONCOLOGIA MÉDICA</option>
                                <option value="19">SERVICIO DE GERIATRIA</option>
                                <option value="20">SERVICIO DE REUMATOLOGIA E INMUNOLOGIA</option>
                                <option value="21">SERVICIO DE MEDICINA FÍSICA Y REHABILITACION</option>
                                <option value="22">SERVICIO DE DERMATOLOGÍA</option>
                                <option value="23">SERVICIO DE ENDOCRINOLOGIA</option>
                                <option value="24">SERVICIO DE NEUMOLOGIA</option>
                                <option value="25">SERVICIO DE GASTROENTEROLOGIA</option>
                                <option value="26">SERVICIO DE ENFERMEDADES INFECCIOSAS Y TROPICALES</option>
                                <option value="27">SERVICIO DE NEFROLOGÍA</option>
                                <option value="28">SERVICIO DE NEUROLOGÍA</option>
                                <option value="29">SERVICIO DE SALUD MENTAL</option>
                                <option value="30">SERVICIO DE HEMATOLOGÍA CLÍNICA</option>
                                <option value="31">DEPARTAMENTO DE CIRUGÍA</option>
                                <option value="32">DEPARTAMENTO DE PEDIATRIA</option>
                                <option value="33">DEPARTAMENTO DE GINECO OBSTETRICIA</option>
                                <option value="34">SERVICIO DE OBSTETRICIA</option>
                                <option value="35">SERVICIO DE REPRODUCCION HUMANA</option>
                                <option value="36">SERVICIO DE OBSTETRICIA</option>
                                <option value="37">DEPARTAMENTO DE ODONTOESTOMATOLOGÍA</option>
                                <option value="38">SERVICIO CARIOLOGIA Y ENDODONCIA</option>
                                <option value="39">DEPARTAMENTO DE CONSULTORIOS EXTERNOS</option>
                                <option value="40">DEPARTAMENTO DE ENFERMERIA</option>
                                <option value="41">DEPARTAMENTO DE EMERGENCIA Y CUIDADOS CRÍTICOS</option>
                                <option value="42">SERVICIO DE CUIDADOS CRITICOS</option>
                                <option value="43">SERVICIO DE EMERGENCIA Y TRAUMA SHOCK</option>
                                <option value="44">DEPARTAMENTO DE ANESTESIOLOGIA Y CENTRO QUIRÚRGICO</option>
                                <option value="45">SERVICIO DE OPERACIONES DE EMERGENCIA Y CIRUGIA OBSTÉTRICA</option>
                                <option value="46">SERVICIO DE CENTRO QUIRURGICO Y RECUPERACIÓN</option>
                                <option value="47">DEPARTAMENTO DE PATOLOGÍA CLINICA Y ANATOMIA PATOLOGICA</option>
                                <option value="48">SERVICIO DE MICROBIOLOGÍA E INMUNOLOGÍA</option>
                                <option value="49">SERVICIO DE ANATOMÍA PATOLÓGICA</option>
                                <option value="50">SERVICIO HEMATOLOGÍA Y BANCO DE SANGRE</option>
                                <option value="51">SERVICIO DE BIOQUÍMICA Y LABORATORIO DE URGENCIAS</option>
                                <option value="52">DEPARTAMENTO DE DIAGNOSTICO POR IMÁGENES</option>
                                <option value="53">SERVICIO DE ECOGRAFIA</option>
                                <option value="54">DEPARTAMENTO DE CIRUGÍA DE TORAX Y CARDIOVASCULAR</option>
                                <option value="55">DEPARTAMENTO DE NUTRICION Y DIETETICA</option>
                                <option value="56">DEPARTAMENTO DE SERVICIO SOCIAL</option>
                                <option value="57">DEPARTAMENTO DE FARMACIA</option>
                            </select>

                            <div id="progress_bar" class="ui-progress-bar ui-container">
                                <div class="ui-progress" style="width: 0%;">
                                    <span class="ui-label" style="display:none;"><b class="value">0%</b></span>
                                </div><!-- .ui-progress -->
                            </div>
                            
                            <div id="lista-contenido">
                                <div id="lista_datos" class="float_left an100"></div>
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
