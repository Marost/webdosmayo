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

                            <select>
                                <option>Seleccionar medico</option>
                            </select>

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
