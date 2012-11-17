<?php 
/*CONEXION Y FUNCIONES*/
require_once("../panel@hndm/conexion/conexion.php");
require_once("../panel@hndm/conexion/funciones.php");
require_once("../panel@hndm/conexion/funcion-paginacion.php");

/*SCRIPTS*/
$script_acordeon=true;

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

                            
                            <div class="nwn-lista">

                                <h3>Historia</h3>
                                <div>
                                    <img src="/imagenes/upload/historia-1.jpg" width="300" style="float:left; padding:0 8px 8px 0;">
                                    <p>Los orígenes de nuestra institución  se remontan al Hospital Nuestra Señora de la Concepción. Quince años después deriva en lo que fue el Hospital Real de San Andrés y desde 1875 se denomina Hospital Dos de Mayo. Como primera y legendaria institución de salud ha sido y es partícipe del desarrollo de la Medicina Moderna Nacional.</p>

                                    <p>Se sabe que el 16 de marzo de 1538, el Cabildo de la Ciudad de Lima, asigna dos solares para el funcionamiento del Primer Hospital del Perú y de América con el nombre de "Nuestra Señora de la Concepción" (Se ubicaba junto al actual Convento de Santo Domingo). En esa época la estrechez de sus ambientes hizo que el 21 de noviembre de 1545, el mismo cabildo asignara 8 solares para la reubicación del Hospital de la Ciudad frente a la actual Plaza Italia. Este nuevo hospital sería conocido como "Real Hospital de San Andrés" produciéndose el traslado de pacientes y enseres en 1550.</p>

                                    <img src="/imagenes/upload/historia-2.jpg" width="300" style="float:left; padding:0 8px 8px 0;"><p>El Hospital de San Andrés fue sede del primer anfiteatro anatómico en 1872; de la Real Escuela de Medicina de San Fernando en 1811; 1era. "Casa de las Hermanas de la Caridad de San Vicente de Paúl".</p>

                                    <p>El 1º de marzo de 1868 una epidemia de la fiebre amarilla azota Lima, ocasionando 6,000 muertos. Es ahí donde aparecieron las incomodidades del viejo hospital, por lo que el 1º de mayo de 1868 el Presidente Pedro Diez Canseco decreta la fundación del Hospital "Dos de Mayo", en homenaje a los peruanos que lucharon en el legendario "Combate del 2 de mayo" ocurrido contra los españoles en 1866.</p>

                                    <img src="/imagenes/upload/historia-3.jpg" width="200" style="float:left; padding:0 8px 8px 0;"><p>Las edificaciones del nuevo hospital en los Barrios Altos demoraron 6 años y 7 meses. Finalmente, el 28 de febrero de 1875, el Presidente Manuel Pardo inauguró el Hospital "Dos de Mayo". El 8 de marzo de ese mismo año (1875) se produjo la gran mudanza desde el honorable Hospital Real de San Andrés.</p>

                                    <p>Desde ese entonces el personal profesional, técnico y auxiliar del Hospital Dos de Mayo, entonces administrado por la Beneficencia Pública de Lima desempeñaron su importante rol a lo largo de la historia de nuestro querido hospital y de la medicina peruana. Las Hermanas de la Caridad, los capellanes, estudiantes de medicina, barchilones, topiqueros, veladores, enfermeros, el afilador y cuchillero de cirugía, el bañero, el carretonero y entre otros no son sino figuras principales de todo el bien que siempre a sabido ofrecer este nosocomio a la población peruana.</p>

                                    <p>La Guerra del Pacífico limitó el accionar benéfico de nuestra institución. Mientras muchos de sus integrantes se unían a las filas patriotas en contra del invasor, nuestro hospital permaneció ocupado por las fuerzas chilenas desde el 20 de febrero de 1881 hasta el 29 de diciembre de 1883. A pesar de ello, médicos a cargo del Dr. Leonardo Villar y las Hermanas de la Caridad consiguieron hacer respetar la atención a los niños.</p>

                                    <p>Un acto trascendental en la medicina del Perú,  también tuvo lugar en nuestra Institución, con la lamentable pérdida de Daniel Alcides Carrión un 5 de octubre de 1885. Carrión pasó a la inmortalidad siendo estudiante de 6to año de Medicina en la prestigiosa Universidad Nacional Mayor de San Marcos. Sus aportes en la demostración nosológica de la Fiebre de la Oroya y la Verruga Peruana, y su sacrificio para el logro de este estudio hizo que muchos años después sea reconocido como Mártir de la Medicina Peruana y Héroe Nacional Civil.
                                    A partir de este hecho heroico devino en reconocer esta afección como la Enfermedad de Carrión recordando cada 5 de octubre como el Día de la Medicina Peruana, en justo homenaje a este joven sanmarquino que ofrendó su vida en aras de la ciencia, la medicina y la salud de muchos peruanos.</p>

                                    <p>El desarrollo científico médico y la administración hospitalaria tuvieron lugar en este glorioso hospital: Oswaldo Hercelles, fue el fundador del primer Laboratorio Clínico en el Perú, y responsable del primer aislamiento de la Bartonella Bacilifornis. Guillermo Gastañeta es el Padre de la Cirugía Peruana y otras celebridades tales como Hermilio Valdizán, Aurelio Alarco, Augusto Dammert, Juan Botto, Juan José Mostajo, Max Olaechea Carlos Lanfranco, Víctor Alzamora, han destacado en la medicina nacional.</p>

                                    <p>El sistema de hospicio de fines del siglo XIX, fue variando de la siguiente manera; atención de consulta externa en 1891, primer laboratorio clínico en 1900. Luego, cuando se introdujo el tratamiento para tuberculosis y en 1913 se apertura la recepción nocturna de enfermos.</p>

                                    <p>En la formación médica fue y es sede de la primera escuela de medicina nacional, la Facultad de Medicina de San Fernando y posteriormente todas las nuevas escuelas provenientes de la UNMSM y otras, han solicitado campo clínico para la formación de los futuros profesionales médicos.</p>

                                    <p>Hoy el Hospital Nacional Dos de Mayo trae tras si, todo el prestigio y éxitos que en otras generaciones se dio en nuestra institución. Ese espíritu de entrega, de avance, de desarrollo en bien de la salud de los peruanos y que fue el motor de cada uno de los que nos precedieron se aúna en este nuevo hospital que tenemos como futuro y que hoy nos pone a la cabeza de las instituciones de salud con más y mejores profesionales, técnicos y personal de salud en general, con renovada y moderna infraestructura y equipamiento, accesible a nuestra población, dentro de políticas de gobierno siempre favorables a todos los peruanos.</p>
                                </div>

                                <h3>¿Quienes Somos?</h3>
                                <div>
                                    <p>El Hospital Nacional "Dos de Mayo" es un órgano desconcentrado de la Dirección de Salud V Lima Ciudad, perteneciente al Ministerio de Salud. Ubicado en la zona de los Barrios Altos, sus orígenes se remontan al Hospital Nuestra Señora de la Concepción, que luego pasa a ser el Hospital Real de San Andrés, para posteriormente en 1875 erigirse como Hospital Dos de Mayo, institución de salud, partícipe del desarrollo de la Medicina Moderna Nacional.</p>
                                    <p>A pocos años de inaugurado el Hospital Nacional Dos de Mayo ocurrió la Guerra del Pacífico. En la ocupación de Lima por parte del ejército chileno nuestro Hospital fue tomado por las tropas invasoras desde el 20 de febrero de 1881 hasta el 29 de diciembre de 1883. En toda esa etapa sólo los niños pudieron recibir atención por parte del Dr. Leonardo Villar y las Hermanas de la Caridad.
                                    </p>
                                </div>

                                <h3>Daniel Alcides Carrión: Mártir de la Medicina Peruana y Héroe Nacional Civil</h3>
                                <div>
                                    <img src="/imagenes/upload/daniel-alcides-carrion.jpg" style="float:left; width: 150px; margin: 0 8px 10px 0;">
                                    <p>El 5 de octubre de 1885, Daniel A. Carrión, estudiante de 6to. año de Medicina fallece, pasando a la inmortalidad al demostrar la unidad clínica de la antigua enfermedad llamada Verruga Peruana y la Fiebre de la Oroya, que diezmó obreros que trabajaban en la construcción de las vias del Ferrocarril Central.</p>
                                    <p>En estos 137 años de vida institucional diferentes y diversas gestiones han acompañado y marcado el desarrollo médico, asistencial, científico y académico del Perú a través de generaciones de profesionales de la salud que se han formado en nuestras instalaciones.</p>

                                    <img src="imagenes/upload/carrion4.jpg" style="
    width: 180px;
    float: right;
    padding: 0 0 0 12px;
"><p>El renombre de sus especialistas ha trascendido el escenario nacional llevando prestigio médico, científico y académico a nuestro país.
                                    El fortalecimineto de la microred del hospital a través de 14 centros y puestos de salud, la aplicación de un Proyecto de Inversión en la Unidad de Hemodiálisis que acoge a personas de menores recursos económicos, son una muestra de las tareas que se vienen cumpliendo desde hace 4 años. Programa de Cirugía de Tórax y Cardiovascular Gracias a un Convenio firmado entre el Ministerio de Salud y la PAMS (Peruvian American Medical Society) se estableció en el Hospital Nacional Dos de Mayo el Programa de Cirugía de Tórax y Cardiovascular.</p>


                                    <p>Desde 1999 hasta la actualidad en el HNDM se realizan 1700 cirugías cardíacas complejas, todas dirigidas a pacientes sin recursos. De este total, 1000 son cardiacas, 600 torácicas y 100 vasculares. El Programa de ayuda con cirugía cardiaca de manera permanente, ha merecido reconocimientos y premios nacionales e internacionales como el recibido en mayo de 2007 por The World Heart Foundation (Ginebra-Suiza), institución que ha incorporado al Programa como miembro activo. El apoyo del PAMS como cooperante, además de la labor asistencial ha fortalecido al HNDM con equipamiento y entrenamiento de profesionales médicos y de enfermería, fuera del Hospital, sin costo para la Institución. Esto ha permitido la formación de Residentes Médicos de la especialidad a través de la Universidad Nacional Mayor de San Marcos. La obra del fundador Dr. Efraín Montesinos Mosqueira perdura a través del Programa que ha permitido al HNDM ser líder entre los Hospitales del MINSA en Cirugía Cardiaca de Corazón Abierto de Adultos pobres e indigentes.</p>

                                    
<img src="imagenes/upload/carrion1.jpg" style="
    width: 250px;
    float: left;
    padding: 0 11px 0 0;
"><p>Entre los logros de los últimos años figura las importantes compras de equipos e implementos  médicos de alta tecnología en las principales áreas de intervención médica, quirúrgica, emergencia así como de diagnóstico tanto en Patología Clínica  como Laboratorio y por Imágenes como es el caso del moderno Tomógrafo Espiral Multicorte, el Resonador, Cineangiografo, equipos de medicina nuclear, de muy alta precisión entre los Hospitales del Ministerio de Salud. Esta ventaja tecnológica que permite apoyar en el diagnóstico de enfermedades por medio de procedimientos no invasivos y en contados segundos, con esto se logra atender a personas de escasos o limitados recursos económicos que ya coberturados por el Seguro que posibilita el Estado Peruano.</p>
                                </div>

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
