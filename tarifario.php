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
        <title>Tarifario</title>

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
                                <h2>Tarifario</h2>
                            </div>

                            <div class="contenido">
                                
                                <table width="600" border="1" cellpadding="3" cellspacing="3">
                                          <col width="282">
                                          <col width="102">
                                          <tr>
                                            <td width="282" align="center" bgcolor="#2D65AE"><strong>DESCRIPCIÓN</strong></td>
                                            <td width="102" align="center" bgcolor="#2D65AE"><strong>PRECIO</strong></td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ABACAVIR 300    MG</td>
                                            <td width="102" align="right" bgcolor="#DADADA">0.740</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACETAZOLAMIDA    250 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.092</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACICLOVIR 200    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.056</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACICLOVIR 400    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.098</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACIDO    ACETILSALICILICO 100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.014</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACIDO FOLICO    0.5 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.016</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACIDO    GADOTERICO 0.5 MMOL/ML X 15 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACIDO    PAMIDRONICO 90 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">136.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACIDO    TRANEXAMICO 250 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ACIDO    ZOLEDRONICO 4 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">149.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ADENOSINA    3MG/ML X 2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">9.437</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AEROCAMARA    ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">8.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AEROCAMARA    NEONATAL</td>
                                            <td align="right" bgcolor="#DADADA">8.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AEROCAMARA    PEDIATRICA</td>
                                            <td align="right" bgcolor="#DADADA">8.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUA DESTILADA    X 10 CC</td>
                                            <td align="right" bgcolor="#DADADA">1.058</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUA DESTILADA    X 1000 CC</td>
                                            <td align="right" bgcolor="#DADADA">3.010</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA DE GUIA    1.25MMDIAMX50MM LONG</td>
                                            <td align="right" bgcolor="#DADADA">163.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA DENTAL    CORTA</td>
                                            <td align="right" bgcolor="#DADADA">0.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA DENTAL    LARGA</td>
                                            <td align="right" bgcolor="#DADADA">0.261</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA    DESCARTABLE N° 18&quot; X 1 1/2</td>
                                            <td align="right" bgcolor="#DADADA">0.065</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA    DESCARTABLE N° 20&quot; X 1</td>
                                            <td align="right" bgcolor="#DADADA">0.067</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA    DESCARTABLE Nº 21 X 1 1/2</td>
                                            <td align="right" bgcolor="#DADADA">0.062</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA    DESCARTABLE Nº 23 X 1</td>
                                            <td align="right" bgcolor="#DADADA">0.067</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA    DESCARTABLE Nº 25 X 5/8</td>
                                            <td align="right" bgcolor="#DADADA">0.067</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA EPIDURAL    DESC Nº18 X 3¼</td>
                                            <td align="right" bgcolor="#DADADA">15.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA FISTULA    ARTERIO VENOSA  16G X1 25MM</td>
                                            <td align="right" bgcolor="#DADADA">1.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA RAQUIDEA    (PUNCION LUMBAR) DESC. 27 X 3 1/2</td>
                                            <td align="right" bgcolor="#DADADA">23.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AGUJA RAQUIDEA    DESC. 25G X 3 1/2 (A. PUNCION</td>
                                            <td align="right" bgcolor="#DADADA">10.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALAMBRE    KIRSCHNER 2.0 MM X 30 CM</td>
                                            <td align="right" bgcolor="#DADADA">23.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALAMBRE    P/CERCLAJE DIAMETRO 0.6 MM  X 1MM</td>
                                            <td align="right" bgcolor="#DADADA">32.950</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALAMBRE PARA    ESTERNON Nº 4 X 4M</td>
                                            <td align="right" bgcolor="#DADADA">50.440</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALAMBRE    QUIRURGICO  1.2 MM</td>
                                            <td align="right" bgcolor="#DADADA">104.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALAMBRE    QUIRURGICO 0.16 MM (X1M)</td>
                                            <td align="right" bgcolor="#DADADA">29.655</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALAMBRE    QUIRURGICO 1.4 X 100 CM</td>
                                            <td align="right" bgcolor="#DADADA">41.290</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALBENDAZOL 100    MG/5 ML SUS 20 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALBENDAZOL 200    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALGODON    HIDROFILO DE 100 G</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALIMENTO    NUTRICIONAL COMPLETO Y BALANCEADO</td>
                                            <td align="right" bgcolor="#DADADA">68.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALOPURINOL 100    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.036</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALPRAZOLAM    0.50 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.016</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ALTEPLASA 50    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">1852.677</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMFOTERICINA B    50 mg INY</td>
                                            <td align="right" bgcolor="#DADADA">55.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMIKACINA    SULFATO 100 MG INY 2ML</td>
                                            <td align="right" bgcolor="#DADADA">0.850</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMIKACINA    SULFATO 500 MG INY 2ML</td>
                                            <td align="right" bgcolor="#DADADA">0.713</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMINOACIDO CON    ELECTROLITOS 8.5% X 500 ML</td>
                                            <td align="right" bgcolor="#DADADA">59.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMINOFILINA    250 MG INY 10 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMIODARONA 150    MG INY 3 ML</td>
                                            <td align="right" bgcolor="#DADADA">12.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMIODARONA 200    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.225</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMITRIPTILINA    CLORHIDRATO 25 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.137</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMLODIPINO 5    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.048</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMOXICILINA    250MG/5 ML SUSP. X 60 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.531</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMOXICILINA    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.114</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMOXICILINA+AC.CLAVULAN.250/    62.5 mg/5 mL 60mL</td>
                                            <td align="right" bgcolor="#DADADA">6.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMOXICILINA+AC.CLAVULANICO    500 MG/125 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.510</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMPICILINA (    COMO SAL SODICA) 1G INY</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AMPICILINA +    SULBACTAM 1 G + 500 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">47.969</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ANASTROZOL 1    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.203</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ANIDULAFUNGINA    100MG INY</td>
                                            <td align="right" bgcolor="#DADADA">750.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">APOSITO    TRANSPARENTE 4.4 X 4.4 CM</td>
                                            <td align="right" bgcolor="#DADADA">1.060</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">APOSITO    TRANSPARENTE IMPERM. 06&quot; X 7CM</td>
                                            <td align="right" bgcolor="#DADADA">1.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">APOSITO    TRANSPARENTE IMPERM. 10&quot; X 12 CM</td>
                                            <td align="right" bgcolor="#DADADA">2.537</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ARANDELA  PARA TORNILLO ESPONJOSO 6.5MM</td>
                                            <td align="right" bgcolor="#DADADA">32.870</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ARANDELA    P/TORNILLO CANULADO 4.5MM</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ARANDELA PARA    TORNILLO ESPONJOSO 3.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ARANDELA PARA    TORNILLO ESPONJOSO 4.0MM</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ARCO DE ERICK    30CM</td>
                                            <td align="right" bgcolor="#DADADA">45.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ARTESUNATO 250    MG</td>
                                            <td align="right" bgcolor="#DADADA">1.760</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ASPARRAGINASA    10000 UI INY</td>
                                            <td align="right" bgcolor="#DADADA">178.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ATAZANAVIR 300    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">29.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ATENOLOL 100    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.031</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ATORVASTATINA    20 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ATROPINA    SULFATO 0.50 MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.256</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AZATIOPRINA 50    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AZITROMICINA  500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.446</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">AZITROMICINA    200MG/5ML SUSP X 60 ML</td>
                                            <td align="right" bgcolor="#DADADA">6.586</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BARIO    SULFATO  RECTAL 66.6 G/100 ML 500 ML</td>
                                            <td align="right" bgcolor="#DADADA">90.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BARIO SULFATO    98% ORAL PLV 340 G</td>
                                            <td align="right" bgcolor="#DADADA">56.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BECLOMETASONA    250 UG/DOSIS AER 200 DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">8.975</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BENCILPENICILINA    SODICA 1 000 000 UI INY</td>
                                            <td align="right" bgcolor="#DADADA">0.580</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BENZOATO DE    BENCILO 25% LOCION 120ML</td>
                                            <td align="right" bgcolor="#DADADA">2.091</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BEXAROTENO 75    MG  TAB</td>
                                            <td align="right" bgcolor="#DADADA">83.737</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BICALUTAMIDA    50 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BICARBONATO DE    SODIO 8.4% INY 20 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.536</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BIPERIDENO    CLORHIDRATO 2 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.031</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BLEOMICINA    15MG INY</td>
                                            <td align="right" bgcolor="#DADADA">47.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOLSA    COLECTORA DE ORINA  DE 2000 ML</td>
                                            <td align="right" bgcolor="#DADADA">4.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOLSA    COLECTORA DE ORINA PEDIATRICA 100 ML.</td>
                                            <td align="right" bgcolor="#DADADA">0.350</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOLSA DE    COLOSTOMIA ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">9.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOLSA DE    NUTRICION ENTERAL X 1 L</td>
                                            <td align="right" bgcolor="#DADADA">21.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOLSA DE    NUTRICION PARENTERAL 3000ML</td>
                                            <td align="right" bgcolor="#DADADA">456.464</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BORTEZOMIB 3.5    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">4635.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOTA    DESCARTABLE P/CIRUJANO CUBRE CALZADO</td>
                                            <td align="right" bgcolor="#DADADA">0.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BOTAS DE    TRACCIÓN</td>
                                            <td align="right" bgcolor="#DADADA">150.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    0.7MMX50MM</td>
                                            <td align="right" bgcolor="#DADADA">303.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    1.0MMX50MM</td>
                                            <td align="right" bgcolor="#DADADA">269.040</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.1 MM X    5  MM CON TOPE</td>
                                            <td align="right" bgcolor="#DADADA">356.037</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    1.1MMX50MM</td>
                                            <td align="right" bgcolor="#DADADA">269.040</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.2MM    (1.1 MM X 100 MM)</td>
                                            <td align="right" bgcolor="#DADADA">219.834</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.2MM    DIAM X 44MM</td>
                                            <td align="right" bgcolor="#DADADA">242.136</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.5 X    44.5 MM CON TOPE</td>
                                            <td align="right" bgcolor="#DADADA">383.210</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.5MM X    100MM</td>
                                            <td align="right" bgcolor="#DADADA">450.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.5X75MM</td>
                                            <td align="right" bgcolor="#DADADA">320.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.6 MM X    100 MM</td>
                                            <td align="right" bgcolor="#DADADA">392.777</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.8 MMX    115 MM</td>
                                            <td align="right" bgcolor="#DADADA">320.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.8 X    125 MM</td>
                                            <td align="right" bgcolor="#DADADA">491.722</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 1.8 X    50MM</td>
                                            <td align="right" bgcolor="#DADADA">580.650</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 2 MM</td>
                                            <td align="right" bgcolor="#DADADA">226.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 2.1 MM X    100 MM</td>
                                            <td align="right" bgcolor="#DADADA">259.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 2.5MM    DIAMETRO</td>
                                            <td align="right" bgcolor="#DADADA">130.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 3.2    DIAMETRO</td>
                                            <td align="right" bgcolor="#DADADA">130.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA 3.5MM</td>
                                            <td align="right" bgcolor="#DADADA">262.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA DE 2.5MM    X 150MM</td>
                                            <td align="right" bgcolor="#DADADA">116.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    HELICOIDAL 1.1 MM X 1.5 MM DE DIAMETRO X</td>
                                            <td align="right" bgcolor="#DADADA">345.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    HELICOIDAL 1.1 X 5 MMDE DIAMETRO X 50 MM</td>
                                            <td align="right" bgcolor="#DADADA">269.040</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    HELICOIDAL 1.6MM X 100 MM DE DIAMETRO X</td>
                                            <td align="right" bgcolor="#DADADA">271.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    HELICOIDAL 7.0MMX1.1MM DIAM 50MM</td>
                                            <td align="right" bgcolor="#DADADA">364.346</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROCA    HELICOIDAL 7.0MMX1.5MM DIAM 150MM</td>
                                            <td align="right" bgcolor="#DADADA">269.040</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROMOCRIPTINA    MESILATO 2.5 mg TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.430</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROMURO DE    ROCURONIO 5ML/50MG</td>
                                            <td align="right" bgcolor="#DADADA">11.062</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BROMURO DE    VECURONIO 4 mg INY 1 mL</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BUPIVACAINA    (S/ PRESERV) 5 MG/ML INY 20 ML</td>
                                            <td align="right" bgcolor="#DADADA">2.087</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">BUPIVACAINA    PESADA 0.5%  4ML</td>
                                            <td align="right" bgcolor="#DADADA">13.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CALCIO    CARBONATO 500 MG  TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CALCIO    GLUCONATO 100 mg/mL INY 10 mL</td>
                                            <td align="right" bgcolor="#DADADA">0.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CAMPO    QUIRURG.ADHESIVO C/YODOFORO 60X45CM</td>
                                            <td align="right" bgcolor="#DADADA">61.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CAMPO    QUIRURGICO ANTIMICROBIANO 35X35 CM</td>
                                            <td align="right" bgcolor="#DADADA">32.170</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CAMPO    QUIRURGICO ANTIMICROBIANO 60X45 CM</td>
                                            <td align="right" bgcolor="#DADADA">60.444</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CANULA BINASAL    PARA OXIGENO ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CANULA BINASAL    PARA OXIGENO NEONATO</td>
                                            <td align="right" bgcolor="#DADADA">4.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CANULA DE    TRAQUEOSTOMIA NO FENEST. Nº 6</td>
                                            <td align="right" bgcolor="#DADADA">264.320</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CANULA DE    TRAQUEOTOMIA FENESTRADO Nº  6</td>
                                            <td align="right" bgcolor="#DADADA">275.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CANULA DE    TRAQUEOTOMIA FENESTRADO Nº     8&nbsp;&nbsp;&nbsp;</td>
                                            <td align="right" bgcolor="#DADADA">259.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CAPTOPRIL 25    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.018</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CARBAMAZEPINA    200 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.058</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CARBIDOPA +    LEVODOPA 25 mg + 250 mg TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.155</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CARBOPLATINO    150 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">48.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CARBOPLATINO    450 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">120.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CARTUCHO PARA    ANALIZADOR DE GASES ARTERIALES</td>
                                            <td align="right" bgcolor="#DADADA">42.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CASEINATO DE    CALCIO 275 G</td>
                                            <td align="right" bgcolor="#DADADA">85.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    CORONARIO LEHMAN 7F</td>
                                            <td align="right" bgcolor="#DADADA">90.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    ENDOVENOSO PERIFERICO 14G X 1 1/2&quot;</td>
                                            <td align="right" bgcolor="#DADADA">445.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER GUIA    P/ANGIOPLASTIA JL 6F 3.5ASA</td>
                                            <td align="right" bgcolor="#DADADA">95.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER GUIA    P/ANGIOPLASTIA JL 6F 4.0ASA</td>
                                            <td align="right" bgcolor="#DADADA">295.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER GUIA    P/ANGIOPLASTIA JL 6F 4.5ASA</td>
                                            <td align="right" bgcolor="#DADADA">90.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER GUIA    P/ANGIOPLASTIA XB 6F</td>
                                            <td align="right" bgcolor="#DADADA">100.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    IMPLANTABLE C/PUERTO TITANIO 7F</td>
                                            <td align="right" bgcolor="#DADADA">1260.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    INTRAVENOSO Nº 16 X 2</td>
                                            <td align="right" bgcolor="#DADADA">0.950</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    INTRAVENOSO Nº 18 G  1 1/4</td>
                                            <td align="right" bgcolor="#DADADA">2.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    INTRAVENOSO Nº 20 X 1 1/4</td>
                                            <td align="right" bgcolor="#DADADA">2.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    INTRAVENOSO Nº 22 X1</td>
                                            <td align="right" bgcolor="#DADADA">0.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    INTRAVENOSO Nº 24 X 3/4</td>
                                            <td align="right" bgcolor="#DADADA">2.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    MALEABLE CRIOABLACION ARRITMIA</td>
                                            <td align="right" bgcolor="#DADADA">6502.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    P/HEMODIALISIS 2L 12 F</td>
                                            <td align="right" bgcolor="#DADADA">170.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    PERCUTANEO CON INTRODUCTOR 1.8F</td>
                                            <td align="right" bgcolor="#DADADA">90.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    PERIDURAL Nº 18</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    PIGTAIL 6F (X110CM)</td>
                                            <td align="right" bgcolor="#DADADA">118.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    PIGTAIL PEDIATRICO 4F</td>
                                            <td align="right" bgcolor="#DADADA">67.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    PIGTAIL PEDIATRICO 5F</td>
                                            <td align="right" bgcolor="#DADADA">67.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER SWAN    GANZ 7.5 F</td>
                                            <td align="right" bgcolor="#DADADA">528.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    TUNELIZABLE 14 FR X 28CM</td>
                                            <td align="right" bgcolor="#DADADA">1470.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER VENOSO    CENTR.  UN LUMEN 7F</td>
                                            <td align="right" bgcolor="#DADADA">93.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER VENOSO    CENTR. DOBLE LUMEN  4 FR 13 CM</td>
                                            <td align="right" bgcolor="#DADADA">123.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER VENOSO    CENTR. DOBLE LUMEN  7 FR 20 CM</td>
                                            <td align="right" bgcolor="#DADADA">137.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER VENOSO    CENTR. III LUMEN 7F</td>
                                            <td align="right" bgcolor="#DADADA">50.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER VENOSO    CENTRAL II LUMEN 5F</td>
                                            <td align="right" bgcolor="#DADADA">107.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER VENOSO    CENTRAL III LUMEN 5.5  FR</td>
                                            <td align="right" bgcolor="#DADADA">95.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CATETER    VENTRICULAR IMPREGNADO BARIO 23CM</td>
                                            <td align="right" bgcolor="#DADADA">787.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFADROXILO    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">1.110</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFALEXINA 500    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.173</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFAZOLINA    SODICA 1 g INY</td>
                                            <td align="right" bgcolor="#DADADA">1.374</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFOPERAZONA +    SULBACTAM 1G+ 500MG INY 1.5G</td>
                                            <td align="right" bgcolor="#DADADA">14.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFOTAXIMA 500    MG/10ML    INY</td>
                                            <td align="right" bgcolor="#DADADA">1.850</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFTAZIDIMA 1    g INY</td>
                                            <td align="right" bgcolor="#DADADA">4.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEFTRIAXONA    SODICA 1 g INY</td>
                                            <td align="right" bgcolor="#DADADA">1.361</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CEMENTO    QUIRURGICO (POLVO+LIQ)20G/10ML</td>
                                            <td align="right" bgcolor="#DADADA">253.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CERA PARA    HUESOS</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CICLOFOSFAMIDA    1G INY</td>
                                            <td align="right" bgcolor="#DADADA">33.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CICLOFOSFAMIDA    200 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">22.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CICLOSERINA    250 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">34.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CICLOSPORINA    50 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.237</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CILOSTAZOL 50    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CIPROFLOXACINO    200MG X 100ML</td>
                                            <td align="right" bgcolor="#DADADA">2.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CIPROFLOXACINO    3 MG/ML (0.3 %) SOL OFT</td>
                                            <td align="right" bgcolor="#DADADA">6.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CIPROFLOXACINO    500 MG</td>
                                            <td align="right" bgcolor="#DADADA">0.110</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CIPROTERONA 50    mg TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CIRCUITO DE    CORRUGADO DESC.P/ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">225.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CIRCUITO PARA    RESPIRACION PEDIATRICO</td>
                                            <td align="right" bgcolor="#DADADA">150.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CISPLATINO 10    MG/10 ML</td>
                                            <td align="right" bgcolor="#DADADA">7.791</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CISPLATINO 50    mg INY</td>
                                            <td align="right" bgcolor="#DADADA">56.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CITARABINA 100    MG</td>
                                            <td align="right" bgcolor="#DADADA">11.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CITARABINA 500    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">13.947</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLARITROMICINA    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.480</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    INTRAMEDULAR BLOQUEADO P/FEMUR DIAM</td>
                                            <td align="right" bgcolor="#DADADA">2250.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    KIRSCHNER 1.0 MM X 100 MM</td>
                                            <td align="right" bgcolor="#DADADA">18.140</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    KIRSCHNER 1.00 MM X 15 CM</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    KIRSCHNER 1.2 MM X 150 MM</td>
                                            <td align="right" bgcolor="#DADADA">18.140</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    KIRSCHNER 1.4 MM X 20 CM</td>
                                            <td align="right" bgcolor="#DADADA">20.790</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    KIRSCHNER 1.6 MMX25CM</td>
                                            <td align="right" bgcolor="#DADADA">31.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO    KIRSCHNER 2.5 MM X 300MM</td>
                                            <td align="right" bgcolor="#DADADA">39.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO SCHANZ    ROSCA CENTRAL   5.0</td>
                                            <td align="right" bgcolor="#DADADA">50.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLAVO STEIMAN    1.0 MM X 30 CM</td>
                                            <td align="right" bgcolor="#DADADA">48.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLINDAMICINA    (COMO CLORHIDRATO) 300 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.188</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLINDAMICINA    (COMO FOSFATO) 600MG INY 4ML</td>
                                            <td align="right" bgcolor="#DADADA">1.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLIP DE    ANEURISMA RECTO 12 MM</td>
                                            <td align="right" bgcolor="#DADADA">914.063</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLIP DE    ANEURISMA RECTO 15 MM</td>
                                            <td align="right" bgcolor="#DADADA">1012.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLIP DE    ANEURISMA RECTO 7 MM</td>
                                            <td align="right" bgcolor="#DADADA">850.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLIP DE    TITANIO TALLA L</td>
                                            <td align="right" bgcolor="#DADADA">570.618</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLIPS DE    TITANIUM M/L X UNIDAD</td>
                                            <td align="right" bgcolor="#DADADA">7.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLONAZEPAM 500    ug TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.016</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLONIXIN. DE    LISINA+PROPINOX.100 MG/15 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">9.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLONIXIN. DE    LISINA+PROPINOX.125 MG +10 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLONIXINATO DE    LISINA 125 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.212</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLONIXINATO DE    LISINA 4ml/200mg INY</td>
                                            <td align="right" bgcolor="#DADADA">7.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLOPIDOGREL    BISULFATO 75 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">1.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORANFENICOL    500MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORANFENICOL    SUCCINATO SODICO 1 g INY</td>
                                            <td align="right" bgcolor="#DADADA">2.096</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORANFENICOL(PALMITATO)250MG/5ML    SUS 60ML</td>
                                            <td align="right" bgcolor="#DADADA">2.700</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORFENAMINA    MALEATO 10 MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORFENAMINA    MALEATO 4 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.017</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORFENAMINA    MALEATO JBE 2MG/ 5ML X120ML</td>
                                            <td align="right" bgcolor="#DADADA">0.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLOROQUINA 200    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.180</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORPROMAZINA    CLORHIDRATO 25 MG INY 2 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.850</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORPROMAZINA    CLORIDRATO 100MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.076</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLORURO DE    SUXAMETONIO 50MG/ML X 10ML INY</td>
                                            <td align="right" bgcolor="#DADADA">26.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLOTRIMAZOL 1%    CRM  VAGINAL 40 G</td>
                                            <td align="right" bgcolor="#DADADA">24.810</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLOTRIMAZOL 1%    CRM 20 G</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLOTRIMAZOL    500 MG TAB VAG</td>
                                            <td align="right" bgcolor="#DADADA">0.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CLOZAPINA 100    MG</td>
                                            <td align="right" bgcolor="#DADADA">0.066</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">COBERTOR  TÉRMICO     PEDIÁTRICO</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CODEINA 15    mg/5 mL JBE 60 mL</td>
                                            <td align="right" bgcolor="#DADADA">6.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CODEINA 30    mg/mL INY 2 mL</td>
                                            <td align="right" bgcolor="#DADADA">2.227</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">COLISTINA    100MG/2ML</td>
                                            <td align="right" bgcolor="#DADADA">443.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">COMPRESA DE    GASA QX 48 CM X 48 CM X UNID</td>
                                            <td align="right" bgcolor="#DADADA">3.240</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">COMPRESA DE    GASA QX 48 X48 X5 UND</td>
                                            <td align="right" bgcolor="#DADADA">13.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">CONECTOR DE    BAJA PRESION 60 P/TOMOG.</td>
                                            <td align="right" bgcolor="#DADADA">19.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">COTONOIDES CON    PITA  X 10 UND.</td>
                                            <td align="right" bgcolor="#DADADA">87.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DABIGATRAN    ETEXILATO 110 MG (PRADAXA) TAB</td>
                                            <td align="right" bgcolor="#DADADA">7.562</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DACARBAZINA    200MG INY</td>
                                            <td align="right" bgcolor="#DADADA">24.215</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DANAZOL 200 MG    TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DASATINIB 50MG    TAB</td>
                                            <td align="right" bgcolor="#DADADA">196.517</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DESLANOSIDO    200 ug/mL INY 2 mL</td>
                                            <td align="right" bgcolor="#DADADA">3.575</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DESMOPRESINA    ACETATO 10UG/100MLX5ML INY</td>
                                            <td align="right" bgcolor="#DADADA">162.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXAMETASONA    0.5 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.030</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXAMETASONA    4MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.075</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXAMETASONA    FOSFATO 4 MG INY 2 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.191</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXMEDETOMIDINA    100 UG/ML X 2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">134.225</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROMETORFANO    BROMHID.15MG/5ML JBE.120ML</td>
                                            <td align="right" bgcolor="#DADADA">1.261</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROSA 10    g/100 mL SOL(10%) INY 1 L</td>
                                            <td align="right" bgcolor="#DADADA">3.576</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROSA 33.3%    INY 20ML</td>
                                            <td align="right" bgcolor="#DADADA">0.775</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROSA 5 G X    100 ML</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROSA 5    g/100 Ml(5%) SOL INY 1 L</td>
                                            <td align="right" bgcolor="#DADADA">3.696</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROSA 5    g/100 mL(5%) SOL INY 500 mL</td>
                                            <td align="right" bgcolor="#DADADA">3.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DEXTROSA 50    g/100 mL(50%) SOL INY 1 L</td>
                                            <td align="right" bgcolor="#DADADA">31.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DIAZEPAM 5    mg/mL INY 2 mL</td>
                                            <td align="right" bgcolor="#DADADA">0.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DIAZEPAN 10 MG    TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.027</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DICLOFENACO 25    MG/ML INY 3 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.135</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DICLOXACILINA    250 MG/5 ML X 60 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.660</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DICLOXACILINA    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.156</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DIDANOSINA 400    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.151</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DIGOXINA 250    ug TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.049</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DIMENHIDRINATO    50 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.027</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DIMENHIDRINATO    50 MG/5 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DINITRATO DE    ISOSORBIDA (SUBLINGUAL) 5 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.437</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DISPOSITIVO    INTRAUTERINO DE COBRE</td>
                                            <td align="right" bgcolor="#DADADA">10.790</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DOBUTAMINA  250 MG/20 ML</td>
                                            <td align="right" bgcolor="#DADADA">5.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DOCETAXEL 80    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">59.630</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DOPAMINA    CLORHIDRATO 40 mg/mL INY 5 mL</td>
                                            <td align="right" bgcolor="#DADADA">0.825</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DOXICICLINA    100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.057</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DOXORUBICINA    CLORHIDRATO 10 MG INY  5 ML</td>
                                            <td align="right" bgcolor="#DADADA">8.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DOXORUBICINA    CLORHIDRATO 50 MG INY   25 ML</td>
                                            <td align="right" bgcolor="#DADADA">18.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">DREN PEN ROSE    3/4 &quot;X 18&quot; ESTERIL</td>
                                            <td align="right" bgcolor="#DADADA">4.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EFAVIRENZ 600    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.586</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ELECTRODO    ADHESIVO 5CM</td>
                                            <td align="right" bgcolor="#DADADA">0.462</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ENALAPRIL 10    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.018</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ENALAPRIL 20    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.031</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ENALAPRILATO    2.5 MG/2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">31.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ENOXAPARINA    SODICA 40 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">20.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EPINEFRINA  1 MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.358</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EPIRUBICINA 50    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">145.194</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EQUIPO DE    TRANSFUSION DE SANGRE</td>
                                            <td align="right" bgcolor="#DADADA">1.687</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EQUIPO DE    VENOCLISIS</td>
                                            <td align="right" bgcolor="#DADADA">0.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EQUIPO EN Y    TUR PARA IRRIGACION</td>
                                            <td align="right" bgcolor="#DADADA">18.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EQUIPO    MICROGOTERO CON VOLUTROL</td>
                                            <td align="right" bgcolor="#DADADA">2.587</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EQUIPO    SUCCIONADOR AL VACIO DESCARTABLE</td>
                                            <td align="right" bgcolor="#DADADA">122.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ERGOMETRINA    MALEATO 200 UG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.426</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ERITROMICINA    250MG X 5ML/60ML</td>
                                            <td align="right" bgcolor="#DADADA">3.288</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ERITROMICINA    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.294</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ERITROPOYETINA  4000     UI /ML</td>
                                            <td align="right" bgcolor="#DADADA">38.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ERITROPOYETINA    2000 UI INY</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESCOPOLAMINA    N-BUTILBROMURO 10 mg TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.110</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESCOPOLAMINA    N-BUTILBROMURO 20 mg/mL INY 1mL</td>
                                            <td align="right" bgcolor="#DADADA">0.925</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESPARADRAPO    IMPERMEABLE DE TELA 1&quot;X10Y</td>
                                            <td align="right" bgcolor="#DADADA">5.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESPIRONOLACTONA    100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.205</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESPIRONOLACTONA    25 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.059</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESTAVUDINA 30    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.098</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESTIBOGLUCONATO    SODICO 1.5 G INY 5ML</td>
                                            <td align="right" bgcolor="#DADADA">2.820</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESTIBOGLUCONATO    SODICO 3G INY 30ML</td>
                                            <td align="right" bgcolor="#DADADA">22.680</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESTREPTOMICINA    (COMO SULFATO) 1G INY</td>
                                            <td align="right" bgcolor="#DADADA">3.470</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ESTRIOL 1 MG    CRM VAG 15 G</td>
                                            <td align="right" bgcolor="#DADADA">15.925</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETAMBUTOL    CLORHIDRATO 400 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.103</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETILEFRINA    10MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">1.456</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETINILESTRADIOL    + HIERRO+ LEVONORGEST.</td>
                                            <td align="right" bgcolor="#DADADA">0.860</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETIONAMIDA 250    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.181</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETOPOSIDO 20    MG/ML INY 5ML</td>
                                            <td align="right" bgcolor="#DADADA">17.367</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETORICOXIB    120MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">7.756</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETORICOXIB    60MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">5.112</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ETORICOXIB    90MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">5.913</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">EXTENSION DIS    2 VIAS</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FACTOR DE    CRECIMIENTO DE COL. GRANULOC.(FGM-</td>
                                            <td align="right" bgcolor="#DADADA">23.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FACTOR    VIII  500 UI</td>
                                            <td align="right" bgcolor="#DADADA">530.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FACTOR VIII    COMPLEJO 250UI/100ML X 10ML INY</td>
                                            <td align="right" bgcolor="#DADADA">265.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FENITOINA    SODICA 100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.112</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FENITOINA    SODICA 100 MG/2 ML INY 2 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FENOBARBITAL    100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.187</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FENOBARBITAL    SODICO 100 MG/ML  X 2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">12.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FENTANILO    CITRATO 0.05 MG/ML INY 10 ML</td>
                                            <td align="right" bgcolor="#DADADA">4.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILGASTRIM 300    MCG/1.2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">16.023</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO  ANTIBACTERIANO PEDIATRICO  D/ CIRCUITO</td>
                                            <td align="right" bgcolor="#DADADA">35.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    ANTIBACT.RESPI.P/EQU.D/ANESTESIA (DESC)</td>
                                            <td align="right" bgcolor="#DADADA">20.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    ANTIBACTERIAL VIRAL+INTERC.P/ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">118.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    ANTIBACTERIANO P/VENTIL. MECANICA</td>
                                            <td align="right" bgcolor="#DADADA">23.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    ARTERIAL (ADULTO)</td>
                                            <td align="right" bgcolor="#DADADA">212.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    ARTERIAL EXTRACORPORIA (PARA</td>
                                            <td align="right" bgcolor="#DADADA">318.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    ARTERIAL NEONATAL</td>
                                            <td align="right" bgcolor="#DADADA">427.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FILTRO    P/HEMODIAL. DE POLISULFONA F8        1.8  M2</td>
                                            <td align="right" bgcolor="#DADADA">50.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FITOMENADIONA    10 MG/ML INY 1 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUCONAZOL 150    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.127</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUCONAZOL 2    MG/ML INY 100 ML</td>
                                            <td align="right" bgcolor="#DADADA">11.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUDARABINA 50    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">259.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUOROURACILO    250 MG INY (50 MG/ML)   5 ML</td>
                                            <td align="right" bgcolor="#DADADA">3.050</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUOROURACILO    500 MG IMY (50 MG/ML)  10 ML</td>
                                            <td align="right" bgcolor="#DADADA">4.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUOXETINA    (COMO CLORHIDRATO) 20 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.023</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FLUTAMIDA    250MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">1.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FOLINATO    CALCICO 50MG INY</td>
                                            <td align="right" bgcolor="#DADADA">6.835</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FORMULA    MATERN. INFANTIL DE INICIO X 400 GR</td>
                                            <td align="right" bgcolor="#DADADA">21.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FRESA DE    DIAMANTE ALTA VELOCIDAD FISURA</td>
                                            <td align="right" bgcolor="#DADADA">545.380</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FRESA DE    DIAMANTE ALTA VELOCIDAD FLAMA CHICA</td>
                                            <td align="right" bgcolor="#DADADA">545.380</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FRESA    QUIRURGICA ESFERICA PARA HUESO 5.0 MM</td>
                                            <td align="right" bgcolor="#DADADA">805.256</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FUROSEMIDA 20    MG 2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.475</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">FUROSEMIDA 40    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.046</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GABAPENTINA    300MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.072</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASA ESTERIL 5    X 5 CM X 5 UND</td>
                                            <td align="right" bgcolor="#DADADA">0.460</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASA    FRACCIONADA ESTERIL  5 X 5 DE 8 PL X 5    UNID</td>
                                            <td align="right" bgcolor="#DADADA">0.812</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASA    FRACCIONADA ESTERIL 10 X 10CM 8 PLIEGUES X</td>
                                            <td align="right" bgcolor="#DADADA">1.525</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASA    FRACCIONADA ESTERIL 7.5 X 7.5 CM 8 PLIEGUES</td>
                                            <td align="right" bgcolor="#DADADA">1.187</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASA PARA    NEONATOLOGÍA (X02)   22X23 CM</td>
                                            <td align="right" bgcolor="#DADADA">0.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASA    PARAFINADA 10 CM X 10 CM</td>
                                            <td align="right" bgcolor="#DADADA">3.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GASSA ABSORB.    QUIRURG. 20&quot;X 16&quot; X 100 YARDAS</td>
                                            <td align="right" bgcolor="#DADADA">86.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GEMCITABINA 1G    INY</td>
                                            <td align="right" bgcolor="#DADADA">236.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GEMCITABINA    200MG/10ML INY</td>
                                            <td align="right" bgcolor="#DADADA">53.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GEMFIBROZILO    600 MG</td>
                                            <td align="right" bgcolor="#DADADA">0.137</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GENTAMICINA  SULFATO     80 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">0.224</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GLIBENCLAMIDA    5 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.011</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GLICERINA    HDM      30 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GLUCOSA    ANHIDRA  KG</td>
                                            <td align="right" bgcolor="#DADADA">10.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GLUCOSA    ANHIDRA X 100 G</td>
                                            <td align="right" bgcolor="#DADADA">2.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GOMA BIOLOGICA    P/ INJERTO X 5ML</td>
                                            <td align="right" bgcolor="#DADADA">742.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GORRO    DESCARTABLE QUIRURGICO</td>
                                            <td align="right" bgcolor="#DADADA">0.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GRAPADORA    CIRC. AUTOMATICA (SUTURA MECANICA)</td>
                                            <td align="right" bgcolor="#DADADA">2722.830</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUANTE    QUIRURGICO ESTERIL DESCART. N° 6 1/2</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUANTE    QUIRURGICO ESTERIL DESCART. N° 7</td>
                                            <td align="right" bgcolor="#DADADA">0.911</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUANTE    QUIRURGICO ESTERIL DESCART. N° 7 1/2</td>
                                            <td align="right" bgcolor="#DADADA">0.911</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUANTE    QUIRURGICO ESTERIL DESCART. N° 8</td>
                                            <td align="right" bgcolor="#DADADA">0.911</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUIA    HIDROFILICA CURVA 0.014&quot;X1.85M</td>
                                            <td align="right" bgcolor="#DADADA">331.870</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUIA TEFLONADA    CURVA</td>
                                            <td align="right" bgcolor="#DADADA">450.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUIA TEFLONADA    CURVA 0.035MMX145CM</td>
                                            <td align="right" bgcolor="#DADADA">93.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">GUIA TEFLONADA    CURVA 0.035MMX260CM</td>
                                            <td align="right" bgcolor="#DADADA">102.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HALOPERIDOL 10    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.035</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HALOPERIDOL 5    MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">1.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HEMOCOLAGENO    ESTERIL 10 X 12 CM</td>
                                            <td align="right" bgcolor="#DADADA">31.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HEMOCONCENTRADOR</td>
                                            <td align="right" bgcolor="#DADADA">573.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HEMOSTATICO    TOPICO ABSORBIBLE 10 X 20 CM</td>
                                            <td align="right" bgcolor="#DADADA">140.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HEPARINA    SODICA 5000 UI/ML INY  5ML</td>
                                            <td align="right" bgcolor="#DADADA">16.770</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HIDROCLOROTIAZIDA    25 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.014</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HIDROCORTISONA    ( SUCCINATO SODICO)100MG INY</td>
                                            <td align="right" bgcolor="#DADADA">3.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HIDROCORTISONA    ( SUCCINATO SODICO)250 MG INY 2</td>
                                            <td align="right" bgcolor="#DADADA">5.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HIDROX.D/ALUMINIO,MAGNESIO    150ML 400/400MG/5ML</td>
                                            <td align="right" bgcolor="#DADADA">2.332</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HIDROXICARBAMINA    500 MG</td>
                                            <td align="right" bgcolor="#DADADA">1.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HIERRO    SACARATO 20MG/MLX5ML</td>
                                            <td align="right" bgcolor="#DADADA">42.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HILO DE SUTURA    METALICO Nº5  DE 4MM X 45CM</td>
                                            <td align="right" bgcolor="#DADADA">56.050</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA  DE SIERRA RECIPROCANTE...</td>
                                            <td align="right" bgcolor="#DADADA">564.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA  SHAVER 4.0     MM</td>
                                            <td align="right" bgcolor="#DADADA">562.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA  SHAVER 4.2 MM</td>
                                            <td align="right" bgcolor="#DADADA">594.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA DE    BISTURI DESCARTABLE Nº 11</td>
                                            <td align="right" bgcolor="#DADADA">0.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA DE    BISTURI DESCARTABLE Nº 15</td>
                                            <td align="right" bgcolor="#DADADA">0.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA DE    BISTURI DESCARTABLE Nº 20</td>
                                            <td align="right" bgcolor="#DADADA">0.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA DE    BISTURI DESCARTABLE Nº 21</td>
                                            <td align="right" bgcolor="#DADADA">0.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">HOJA DE SIERRA    27X6.4/2.9X0.6MM P/SIERRA RECIPROCA</td>
                                            <td align="right" bgcolor="#DADADA">1078.590</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IBUPROFENO 100    MG/5 ML SUS  60 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.700</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IBUPROFENO 400    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.047</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IFOSFAMIDA 1G    INY</td>
                                            <td align="right" bgcolor="#DADADA">30.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IMATINIB    MESILATO 100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">4.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IMIPENEM +    CILASTATINA 500/500MG</td>
                                            <td align="right" bgcolor="#DADADA">21.849</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INFUSOR GRAN    VOLUMEN PARA 2  DIAS</td>
                                            <td align="right" bgcolor="#DADADA">156.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INJERTO    VASCULAR RECTO DE DACRON ANILLADO</td>
                                            <td align="right" bgcolor="#DADADA">1365.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INJERTO    VASCULAR TUBULAR DACRON 18MMX12.5CM</td>
                                            <td align="right" bgcolor="#DADADA">2090.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INMUNOGLOBULINA    ANTITETANICA 250UI/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">118.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INMUNOGLOBULINA    ANTITIMOCITO HUMANA</td>
                                            <td align="right" bgcolor="#DADADA">1093.239</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INMUNOGLOBULINA    ANTITIMOCITO HUMANA</td>
                                            <td align="right" bgcolor="#DADADA">782.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INMUNOGLOBULINA    HUMANA NORMAL 5G/100 MLX 50</td>
                                            <td align="right" bgcolor="#DADADA">945.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INSULINA    HUMANA A. INTERMEDIA (NPH) 100UI/ML X</td>
                                            <td align="right" bgcolor="#DADADA">36.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INSULINA R    CRISTALINA HUMANA 100 UI/ML X 10 ML.</td>
                                            <td align="right" bgcolor="#DADADA">36.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INTRODUCTOR    PARA CATETER SWAN GANZ 8.0F</td>
                                            <td align="right" bgcolor="#DADADA">192.018</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INTRODUCTOR    PERCUTAN.P/CATET.C/VALVU. 8.5 FR.</td>
                                            <td align="right" bgcolor="#DADADA">195.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">INTRODUCTOR    RADIAL CON CUBIERTA HIDROFILICA 6</td>
                                            <td align="right" bgcolor="#DADADA">385.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IOBITRIDOL    EQUIVALENTE 350 MG I/ML X 50 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IOBITRIOL    EQUIVALENTE 350 MG/ML INY 100 ML</td>
                                            <td align="right" bgcolor="#DADADA">224.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IOPAMIDOL 300    MGI/100 ML</td>
                                            <td align="right" bgcolor="#DADADA">123.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IOTALAMATO DE    MEGLUMINA 60 % INY 30 ML</td>
                                            <td align="right" bgcolor="#DADADA">72.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IOTALAMATO DE    MEGLUMINA 60% INY 100ML</td>
                                            <td align="right" bgcolor="#DADADA">88.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IOTALAMATO DE    MEGLUMINA 60% INY 50ML</td>
                                            <td align="right" bgcolor="#DADADA">48.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">IPATROPIO    BROMURO 20 UG/DOSIS INH.  300 DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">11.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ISOFLURANO X    1CC</td>
                                            <td align="right" bgcolor="#DADADA">2.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ISONIAZIDA 100    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.021</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCART. INSUL. C/A DE 1 ML  Nº 26 X    1/2</td>
                                            <td align="right" bgcolor="#DADADA">0.137</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCART. TUBERC 1CC Nº 25 X 5/8 C/A</td>
                                            <td align="right" bgcolor="#DADADA">0.162</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE  5 ML C/A 21 X 1 1/2&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 1 ML C/A 25X 5/8&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.128</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 1 ML CON AGUJA 25 G X 1&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.515</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 1 ML CON AGUJA 27 G X 1/2&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.537</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 1 ML CON AGUJA 27 G X 3/8</td>
                                            <td align="right" bgcolor="#DADADA">0.140</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 10 ML C/A 21 X 1/2&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.213</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 20 ML C/A 21 X 1 1/2&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.340</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 200 ML P/INYECTOR</td>
                                            <td align="right" bgcolor="#DADADA">122.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 3 ML CON AGUJA 25 G X 5/8&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.175</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 5 ML CON AGUJA 22 G X 1 1/2&quot;</td>
                                            <td align="right" bgcolor="#DADADA">0.130</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">JERINGA    DESCARTABLE 7 ML BAJA RESIST.P/ANESTESIA</td>
                                            <td align="right" bgcolor="#DADADA">30.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">KETAMINA 50    MG/ML INY 10 ML</td>
                                            <td align="right" bgcolor="#DADADA">6.287</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">KETOPROFENO    100 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">9.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">KIT    AUTOTRANSFUSION SANGUINEA</td>
                                            <td align="right" bgcolor="#DADADA">891.975</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">KIT DE CEMENTO    P/USO TRAUMATOLOGIA</td>
                                            <td align="right" bgcolor="#DADADA">212.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LACTULOSA SUS    3.33g/5ml 180 ML</td>
                                            <td align="right" bgcolor="#DADADA">6.512</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LAMIVUD+ESTAVUD+NEVIRAP    150 + 30 + 200 MG</td>
                                            <td align="right" bgcolor="#DADADA">0.319</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LAMIVUDINA +    NEVIRAPINA + ZIDOVUDINA</td>
                                            <td align="right" bgcolor="#DADADA">0.508</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LAMIVUDINA +    ZIDOVUDINA 150 MG + 300 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.390</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LAMIVUDINA 150    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.094</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LAMIVUDINA 50    MG/5ML SOL 240 ML</td>
                                            <td align="right" bgcolor="#DADADA">23.350</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LEUPRORELINA    3.75MG INY</td>
                                            <td align="right" bgcolor="#DADADA">218.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LEVOMEPROMAZINA    100 MG</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LEVOTIROXINA    SODICA 100 UG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.040</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LIDOCAINA    CLORHIDRATO (LIDOCOM) 2% S/EPINEF X</td>
                                            <td align="right" bgcolor="#DADADA">2.801</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LIDOCAINA    CLORHIDRATO 2%  S/EPINEF S/PRESERV. 20</td>
                                            <td align="right" bgcolor="#DADADA">2.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LIDOCAINA    CLORHIDRATO 2% C/EPINEF. S/PRES.  20</td>
                                            <td align="right" bgcolor="#DADADA">1.911</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LIDOCAINA    CLORHIDRATO 2% GEL 30 GR</td>
                                            <td align="right" bgcolor="#DADADA">6.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LIDOCAINA    CLORHIDRATO C/E 2% 1:100000 INY 1.8 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.887</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LIGA ELASTICA    DIAMETRO 1.32MMX100</td>
                                            <td align="right" bgcolor="#DADADA">16.870</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA ARTERIAL    PARA MAQUINA HEMODIALISIS</td>
                                            <td align="right" bgcolor="#DADADA">5.310</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA P/BOMBA    D/INFUSION C/VOLUTROL MICROGOT.</td>
                                            <td align="right" bgcolor="#DADADA">42.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA P/BOMBA    DE INFUSION OPACA</td>
                                            <td align="right" bgcolor="#DADADA">42.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA PARA    BOMBA INFUSORA CON VOLUTROL</td>
                                            <td align="right" bgcolor="#DADADA">42.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA PARA    BOMBA INFUSORA SIN VOLUTROL</td>
                                            <td align="right" bgcolor="#DADADA">48.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA VENOSA    PARA MAQUINA HEMODIALISIS</td>
                                            <td align="right" bgcolor="#DADADA">5.310</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEA+JERINGA    50ML P/BOMBA INFUSORA</td>
                                            <td align="right" bgcolor="#DADADA">53.140</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LINEZOLID 200    MG/100ML INY  300 ML-ZIVOX</td>
                                            <td align="right" bgcolor="#DADADA">104.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LITIO    CARBONATO 300 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LLAVE DE    TRIPLE VIA CON EXTENSION</td>
                                            <td align="right" bgcolor="#DADADA">43.350</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LLAVE DE    TRIPLE VIA DESCARTABLE</td>
                                            <td align="right" bgcolor="#DADADA">0.700</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LOPINAVIR    200MG + RITONAVIR 50 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.975</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LORATADINA 10    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.026</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LOSARTAN 100    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">3.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">LOSARTAN 50 MG    TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MACROGOL    COMBINACIONES PLV 68.96 G</td>
                                            <td align="right" bgcolor="#DADADA">14.812</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    POLIPROPILENO 10 CM. X 10 CM.-BIOMESH</td>
                                            <td align="right" bgcolor="#DADADA">50.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    POLIPROPILENO 30 CM X 1.5 CM</td>
                                            <td align="right" bgcolor="#DADADA">93.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    POLIPROPILENO 30 X 7.5CM</td>
                                            <td align="right" bgcolor="#DADADA">128.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    POLIPROPILENO 30.5 CM. X 5 CM. BIOMESH</td>
                                            <td align="right" bgcolor="#DADADA">110.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    POLIPROPILENO DE 15 X 15 CM</td>
                                            <td align="right" bgcolor="#DADADA">81.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    TITANIO 100MMX100MM</td>
                                            <td align="right" bgcolor="#DADADA">2797.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    TITANIO 100MMX100MMX0.6MM</td>
                                            <td align="right" bgcolor="#DADADA">2402.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    TITANIO 120 MM X 120MM</td>
                                            <td align="right" bgcolor="#DADADA">3135.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MALLA DE    TITANIO 80MMX180MMX0.6MM</td>
                                            <td align="right" bgcolor="#DADADA">3190.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MANITOL 20 %    SOL 1000 ML</td>
                                            <td align="right" bgcolor="#DADADA">9.847</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MANITOL 20%    SOL 500 ML</td>
                                            <td align="right" bgcolor="#DADADA">4.688</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MARCAPASO    UNICAMERAL PERMANENTE PARA</td>
                                            <td align="right" bgcolor="#DADADA">5150.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MASCARA DE    OXIGENO C/ BOLSA RESERV.PEDIATRICO</td>
                                            <td align="right" bgcolor="#DADADA">6.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MASCARA DE    OXIGENO C/BOLSA D/RESERVA ADULT.</td>
                                            <td align="right" bgcolor="#DADADA">6.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MASCARA DE    OXIGENO TIPO VENTURI  ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">7.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MASCARA    NEBULIZADORA PARA ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">6.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MASCARA    NEBULIZADORA PEDIATRICO</td>
                                            <td align="right" bgcolor="#DADADA">6.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MEBENDAZOL 100    MG/5 ML SUS 30 ML</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MEDROXIPROGESTERONA    ACETATO 150 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">1.960</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MEFLOQUINA    (COMO CLORHIDRATO) 250 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.920</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MELOXICAM 15MG    TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MEROPENEM    500mg</td>
                                            <td align="right" bgcolor="#DADADA">10.935</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MESNA 100    MG/ML INY 4 ML</td>
                                            <td align="right" bgcolor="#DADADA">33.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METAMIZOL    SODICO 1G /2 ML INY 2 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.231</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METFORMINA    CLORHIDRATO 850 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.037</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METILDOPA 250    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METILPREDNISOLONA    500 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METOCLOPRAMIDA  10 MG 2ML AMPOLLA</td>
                                            <td align="right" bgcolor="#DADADA">0.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METOCLOPRAMIDA  10 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.058</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METOTREXATE    2.5 MG  TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.487</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METRONIDAZOL    500 MG /100 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">1.770</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">METRONIDAZOL    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.058</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MICOFENOLATO  MOFETILO 250 MG TABLETA</td>
                                            <td align="right" bgcolor="#DADADA">3.525</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MICOFENOLATO    MOFETILO 500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">8.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MICROESFERAS    DE POLIESTIRENO 0.19 UM X 1G</td>
                                            <td align="right" bgcolor="#DADADA">1012.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MIDAZOLAM 5    MG/5 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">2.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA DE    TITANIO ORBITAL 08 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">344.560</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA DE    TITANIO RECTA 18 AGUJEROS DE 2.0</td>
                                            <td align="right" bgcolor="#DADADA">1481.550</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA DE    TITANIO RECTA 20 ORIFICIOS SIST.</td>
                                            <td align="right" bgcolor="#DADADA">714.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA DE    TITANIO RECTA DE 12 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">475.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA    TITANIO 16 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">605.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA    TITANIO FORMA &quot;Y&quot; 3 ORIFICIOS SIST. 1.5</td>
                                            <td align="right" bgcolor="#DADADA">451.077</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA    TITANIO FORMA &quot;Y&quot; 6 ORIFICIOS SIST. 1.5</td>
                                            <td align="right" bgcolor="#DADADA">530.849</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA    TITANIO L IZQUIERDA 4 ORIF SIST.20MM</td>
                                            <td align="right" bgcolor="#DADADA">255.940</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINIPLACA    TITANIO RECTA 20 ORIFICIOS SIST. 2.0 MM</td>
                                            <td align="right" bgcolor="#DADADA">551.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINITORNILLO    TITANIO 1.5 X 5.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">63.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MINITORNILLO    TITANIO 2.0 X 5.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">53.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MITOXANTRONA    20 MG X 10 ML</td>
                                            <td align="right" bgcolor="#DADADA">68.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MODULO    CALORICO DE ALMIDON 450 GRS MC</td>
                                            <td align="right" bgcolor="#DADADA">28.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MODULO PROT    C/SABOR NEUTRO 250 GR</td>
                                            <td align="right" bgcolor="#DADADA">54.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MORFINA    CLORHIDRATO 10 MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">3.187</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MUCOPOLISACARIDO    SULF. 0.3%X20G POMADA</td>
                                            <td align="right" bgcolor="#DADADA">13.060</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">MULTIBACILAR    ADULTO BLISTER</td>
                                            <td align="right" bgcolor="#DADADA">11.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NAPROXENO    (COMO BASE) 500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.115</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NEOSTIGMINA    METILSUFATO 0.5MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NEVIRAPINA    200MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.165</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NIFEDIPINO 10    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NIMODIPINO 10    MG/50 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">41.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NIMODIPINO 30    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NITAZOXANIDA    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">5.117</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NITROFURANTOINA    100 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.117</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NITROGLICERINA    25 MG INY 5 ML</td>
                                            <td align="right" bgcolor="#DADADA">14.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NITROPRUSIATO    SODICO DE 10 MG/ML INY 5 ML</td>
                                            <td align="right" bgcolor="#DADADA">61.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NOREPINEFRINA    1 mg/mL INY 4 mL</td>
                                            <td align="right" bgcolor="#DADADA">5.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">NORFLOXACINO    400 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OFLOXACINO    3MG/ML X 10ML SOL.OTICA</td>
                                            <td align="right" bgcolor="#DADADA">35.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OMEPRAZOL 20    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.042</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OMEPRAZOL 40    MG INY</td>
                                            <td align="right" bgcolor="#DADADA">3.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ONDANSETRON    (CLORHIDRATO) 2 MG/ML INY 4ML</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ORFENADRINA 60    MG/2 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.850</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OSELTAMIVIR  45 MG</td>
                                            <td align="right" bgcolor="#DADADA">4.780</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OSELTAMIVIR 75    MG</td>
                                            <td align="right" bgcolor="#DADADA">5.870</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXACILINA 1G    INY</td>
                                            <td align="right" bgcolor="#DADADA">1.103</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXALIPLATINO    100MG INY</td>
                                            <td align="right" bgcolor="#DADADA">47.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXALIPLATINO    50MG INY</td>
                                            <td align="right" bgcolor="#DADADA">25.725</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXICODONA 5MG    TAB</td>
                                            <td align="right" bgcolor="#DADADA">4.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXIGENO DE    P/INH  LITRO</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXIGNDR DE    MEMB C/RESRV.CARDIOT.NEONTL</td>
                                            <td align="right" bgcolor="#DADADA">1564.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXIGNDR DE    MEMBRANA</td>
                                            <td align="right" bgcolor="#DADADA">882.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">OXITOCINA 10    UI/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">1.062</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PACLITAXEL 100    MG/17 ML</td>
                                            <td align="right" bgcolor="#DADADA">50.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PACLITAXEL    30MG INY</td>
                                            <td align="right" bgcolor="#DADADA">15.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PAÑAL CALZON    DESCART. P/RECIEN NACIDOX12UND</td>
                                            <td align="right" bgcolor="#DADADA">13.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PAÑAL DESCART.    PARA ADULTO T / L</td>
                                            <td align="right" bgcolor="#DADADA">3.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PAÑAL    DESCARTABLE  X 10 UNIDADES</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PAÑAL    DESCARTABLE PARA ADULTO T/MEDIANO</td>
                                            <td align="right" bgcolor="#DADADA">2.602</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PARACETAMOL    100 MG/ML SOL GOT 10 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.850</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PARACETAMOL    120 MG/5 ML JBE 60ML</td>
                                            <td align="right" bgcolor="#DADADA">0.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PARACETAMOL    120MG/5ML JBE 120ML</td>
                                            <td align="right" bgcolor="#DADADA">2.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PARACETAMOL    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.023</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PARTICULA    P/EMBOLIZACION PVA 300UX1ML</td>
                                            <td align="right" bgcolor="#DADADA">900.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PELICULA    RADIOGRAFICA OCLUSAL</td>
                                            <td align="right" bgcolor="#DADADA">5.166</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PELICULA    RADIOGRAFICA PERIAPICAL ADULTOS</td>
                                            <td align="right" bgcolor="#DADADA">1.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PELICULA    RADIOGRAFICA PERIAPICAL PARA NIÑOS</td>
                                            <td align="right" bgcolor="#DADADA">0.950</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PETIDINA    CLORHIDRATO 100 MG/2 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">3.398</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PINZA    ENDOCLINCH  5 MM</td>
                                            <td align="right" bgcolor="#DADADA">643.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PINZA    MERYLAND  5 MM</td>
                                            <td align="right" bgcolor="#DADADA">471.240</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PIPERACILINA    SODICA  Y TAZOBACTAM 4.0G+0.5G</td>
                                            <td align="right" bgcolor="#DADADA">16.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PIRAZINAMIDA    500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.092</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA 1/3 DE    TUBO 7 AGUJEROS X 3.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">118.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA 1/4 DE    TUBO 6 AGUJEROS X 49 MM</td>
                                            <td align="right" bgcolor="#DADADA">96.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA 1/4 TUBO    5 AGUJEROS X 41 MM</td>
                                            <td align="right" bgcolor="#DADADA">98.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA ANGULADA    130 X X 50 CON 08 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">355.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA COBRA DE    10 AGUJEROS 48 MM X 250 MM</td>
                                            <td align="right" bgcolor="#DADADA">1522.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DCP DE    12 AGUGEROS</td>
                                            <td align="right" bgcolor="#DADADA">320.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DCP IPF    07 AGUJEROSX 3.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">160.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DCP IPF    DE 06 AGUJEROS X 3.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">486.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONST. ANGULADA DER. 11 AGUJ X 2.4</td>
                                            <td align="right" bgcolor="#DADADA">2156.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONST. ANGULADA DER. 17 AGUJ X 4.0</td>
                                            <td align="right" bgcolor="#DADADA">1265.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONST. CURVA 2.4MM DIAM X 17</td>
                                            <td align="right" bgcolor="#DADADA">1155.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONSTRUCCION  06 AGUJEROS X 3.5 MM</td>
                                            <td align="right" bgcolor="#DADADA">231.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONSTRUCCION 7 AGUJEROS X3.5MM UNI</td>
                                            <td align="right" bgcolor="#DADADA">160.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONSTRUCION ANGULADO DERECHA DE</td>
                                            <td align="right" bgcolor="#DADADA">2630.830</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONSTRUCION RECTA 2.4 X 14 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">1763.550</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    RECONTRUCCION MANDIBULAR DE 12</td>
                                            <td align="right" bgcolor="#DADADA">2630.826</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    SOPORTE EN L DE 5 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">400.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    SOPORTE EN T DE 6 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">220.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    TITANIO EN L DER. C/PUENTE 4 ORIFICIOS</td>
                                            <td align="right" bgcolor="#DADADA">271.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    TITANIO EN L IZQ. C/PUENTE 4 ORIFICIOS</td>
                                            <td align="right" bgcolor="#DADADA">271.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA DE    TITANIO PARA PISO ORBITA</td>
                                            <td align="right" bgcolor="#DADADA">638.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA EN T    P/MUÑECA  6 ORIFICIOS</td>
                                            <td align="right" bgcolor="#DADADA">216.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA FIJADORA    PARA TIBIA</td>
                                            <td align="right" bgcolor="#DADADA">3985.870</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA    RECONSTRUCCION MANDIBULAR 20 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">2271.901</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA    RECONSTRUCCION MANDIBULAR 22 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">6435.280</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA TERCIO    DE CAÑA 05 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">106.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA TERCIO    DE CAÑA 11 AGUJEROS</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA TITANIO    20 ORIFICIO SISTEMA BAJO PERFIL</td>
                                            <td align="right" bgcolor="#DADADA">927.224</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA TITANIO    6 AGUJEROS SIST.2.0</td>
                                            <td align="right" bgcolor="#DADADA">233.640</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA TITANIO    T.LOCKING 6 AGUJEROS C/PTE.SIST.2.0</td>
                                            <td align="right" bgcolor="#DADADA">592.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PLACA TITANIO    T.LOCKING 6 AGUJEROS SIST.2.0</td>
                                            <td align="right" bgcolor="#DADADA">592.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">POLIGELINA(CON    ELECTROLITOS) 3.5%  500 ML</td>
                                            <td align="right" bgcolor="#DADADA">24.812</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">POTASIO    CLORURO 20%  SOL INY 10 mL</td>
                                            <td align="right" bgcolor="#DADADA">0.272</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PREDNISONA 20    MG  TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.091</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PREDNISONA 5    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.025</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PREDNISONA 50    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.192</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PREGABALINA 75    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">2.590</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PRESERVATIVOS    DE LATEX SIN NONOXINOL  UNI</td>
                                            <td align="right" bgcolor="#DADADA">0.262</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PRIMAQUINA (    COMO FOSFATO) 15 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROPANOLOL    CLORHIDRATO 40 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.026</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROPOFOL 1%    INY 20 ML</td>
                                            <td align="right" bgcolor="#DADADA">11.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTAMINA    SULFATO 10 MG/ML INY 5ML</td>
                                            <td align="right" bgcolor="#DADADA">17.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTECTOR    CUTANEO CAVILON X 28 ML SPRAY</td>
                                            <td align="right" bgcolor="#DADADA">72.360</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTESIS    ARRIBA DE RODILLA MODULAR MONOAXIAL</td>
                                            <td align="right" bgcolor="#DADADA">3605.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTESIS    PARCIAL THOMPSON Nº 41</td>
                                            <td align="right" bgcolor="#DADADA">861.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTESIS    QUIRURGICA TOTAL DE HOMBRO</td>
                                            <td align="right" bgcolor="#DADADA">11124.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTESIS TOTAL    DE CADERA  CEMENTADA</td>
                                            <td align="right" bgcolor="#DADADA">2776.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTESIS TOTAL    DE CADERA NO CEMENTADA</td>
                                            <td align="right" bgcolor="#DADADA">9733.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">PROTESIS TOTAL    DE RODILLA</td>
                                            <td align="right" bgcolor="#DADADA">7004.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">QUININA    DICLORHIDRATO 300 MG/ML X 2ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.980</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">QUININA    SULFATO DIHIDRATO 300 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.650</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RANITIDINA  50 MG INY 2 ML</td>
                                            <td align="right" bgcolor="#DADADA">0.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RANITIDINA 150    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.056</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RANITIDINA 300    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.062</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">REMIFENTANILO    2 MG</td>
                                            <td align="right" bgcolor="#DADADA">72.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RIFAMPICINA    100 MG/5 ML JBE 60 ML</td>
                                            <td align="right" bgcolor="#DADADA">2.895</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RIFAMPICINA    300 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.140</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RISPERIDONA 2    MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.028</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RITONAVIR  100 MG</td>
                                            <td align="right" bgcolor="#DADADA">3.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RITUXIMAB    10MG/MLX10ML</td>
                                            <td align="right" bgcolor="#DADADA">651.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">RITUXIMAB    10MG/MLX50ML INY</td>
                                            <td align="right" bgcolor="#DADADA">3193.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SALBUTAMOL 100    mcg/DOSIS X 200 DOSIS - AER</td>
                                            <td align="right" bgcolor="#DADADA">3.650</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SALES DE    REHIDRATACION ORAL</td>
                                            <td align="right" bgcolor="#DADADA">0.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SAQUINAVIR  500 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SET DE    ACCESORIO P/ LIGAMENTO CRUZADO</td>
                                            <td align="right" bgcolor="#DADADA">4636.803</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SET DE    MONITOREO DE PRESION ARTERIAL CON DOMO</td>
                                            <td align="right" bgcolor="#DADADA">106.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SET DE    TUBULADURAS ADULTO</td>
                                            <td align="right" bgcolor="#DADADA">630.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SET DE    TUBULADURAS PEDIATRICO</td>
                                            <td align="right" bgcolor="#DADADA">630.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SET FIJACION    CERVICAL ANTERIOR P/COLUMNA</td>
                                            <td align="right" bgcolor="#DADADA">6695.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SET FIJACION    TRANSPEDICULAR P/COLUMNA</td>
                                            <td align="right" bgcolor="#DADADA">8240.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SEVOFLUORANO    INH X 1 ML</td>
                                            <td align="right" bgcolor="#DADADA">338.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SIERRA GIGLI    400 MM</td>
                                            <td align="right" bgcolor="#DADADA">29.560</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SIMETICONA    100MG/ML X 15 ML GTS</td>
                                            <td align="right" bgcolor="#DADADA">4.917</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SIST. DE    DERIV.VENTRIC.PERIT.PEDIAT.PRESION BAJA</td>
                                            <td align="right" bgcolor="#DADADA">1134.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SISTEMA DE    ANCLAJE DE TITANIO</td>
                                            <td align="right" bgcolor="#DADADA">1747.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SISTEMA DE    FIJACION TRANSPEDICULAR DE TITANIO</td>
                                            <td align="right" bgcolor="#DADADA">6695.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SISTEMA DE    PLACA BLOQUEO LCP 3.5MMDIAM</td>
                                            <td align="right" bgcolor="#DADADA">3903.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SISTEMA DE    RESERVORIO VENTRICULAR</td>
                                            <td align="right" bgcolor="#DADADA">1980.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SODIO CLORURO    0.9% X 100 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">1.450</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SODIO CLORURO    0.9%X20ML(SUERO FISIOLOGICO)</td>
                                            <td align="right" bgcolor="#DADADA">1.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SODIO CLORURO    DE 0.9%  X 1000 ML</td>
                                            <td align="right" bgcolor="#DADADA">2.318</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SODIO CLORURO    DE 0.9%  X 500 ML (ONCOLOGIA)</td>
                                            <td align="right" bgcolor="#DADADA">1.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SODIO CLORURO    DE 20% / 20 ML INY</td>
                                            <td align="right" bgcolor="#DADADA">0.259</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SODIO    FOSF(DIBASI+MONOBASI) X 130 ML ENM</td>
                                            <td align="right" bgcolor="#DADADA">8.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ALIMENTACION Nº 08</td>
                                            <td align="right" bgcolor="#DADADA">0.837</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASP.ENDOTRAQ.CIRC.CERRADO Nº 14</td>
                                            <td align="right" bgcolor="#DADADA">60.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASP.ENDOTRAQ.CIRC.CERRADO Nº 16</td>
                                            <td align="right" bgcolor="#DADADA">60.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 06</td>
                                            <td align="right" bgcolor="#DADADA">1.010</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 08</td>
                                            <td align="right" bgcolor="#DADADA">1.037</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 10</td>
                                            <td align="right" bgcolor="#DADADA">1.008</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 12</td>
                                            <td align="right" bgcolor="#DADADA">1.050</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 14</td>
                                            <td align="right" bgcolor="#DADADA">1.037</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 16</td>
                                            <td align="right" bgcolor="#DADADA">1.037</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA DE    ASPIRACION ENDOTRAQUEAL Nº 18</td>
                                            <td align="right" bgcolor="#DADADA">1.010</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOGASTRICA Nº 08</td>
                                            <td align="right" bgcolor="#DADADA">1.125</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOGASTRICA Nº 12</td>
                                            <td align="right" bgcolor="#DADADA">1.431</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOGASTRICA Nº 14</td>
                                            <td align="right" bgcolor="#DADADA">1.100</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOGASTRICA Nº 16</td>
                                            <td align="right" bgcolor="#DADADA">1.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOYEYUNAL Nº 10</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOYEYUNAL Nº 12</td>
                                            <td align="right" bgcolor="#DADADA">187.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOYEYUNAL Nº 6</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOYEYUNAL Nº 8</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    NASOYEYUNAL Nº 8 FR 100% SILICONA</td>
                                            <td align="right" bgcolor="#DADADA">112.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA NELATON    Nº 14</td>
                                            <td align="right" bgcolor="#DADADA">0.825</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA NELATON    Nº 16</td>
                                            <td align="right" bgcolor="#DADADA">0.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA NELATON    Nº 18</td>
                                            <td align="right" bgcolor="#DADADA">0.825</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 14</td>
                                            <td align="right" bgcolor="#DADADA">1.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 16</td>
                                            <td align="right" bgcolor="#DADADA">1.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 18</td>
                                            <td align="right" bgcolor="#DADADA">1.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 20</td>
                                            <td align="right" bgcolor="#DADADA">1.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 22</td>
                                            <td align="right" bgcolor="#DADADA">1.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 24</td>
                                            <td align="right" bgcolor="#DADADA">1.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA RECTAL    Nº 28</td>
                                            <td align="right" bgcolor="#DADADA">1.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA    VESICAL  FOLEY 2 VIAS Nº 08 X 3</td>
                                            <td align="right" bgcolor="#DADADA">9.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY  2 VIAS Nº 12 X    5&nbsp;&nbsp;&nbsp;</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY  2 VIAS Nº 14 X 5</td>
                                            <td align="right" bgcolor="#DADADA">3.350</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY  2 VIAS Nº 16 X 5</td>
                                            <td align="right" bgcolor="#DADADA">3.350</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY  X 3 VIAS N° 16 X 5</td>
                                            <td align="right" bgcolor="#DADADA">3.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY  X 3 VIAS Nº 20</td>
                                            <td align="right" bgcolor="#DADADA">7.375</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY 2 VIAS  Nº 18</td>
                                            <td align="right" bgcolor="#DADADA">2.203</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    FOLEY 2 VIAS  Nº 20</td>
                                            <td align="right" bgcolor="#DADADA">3.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    SILICONADA X 2 VIAS Nº 14</td>
                                            <td align="right" bgcolor="#DADADA">20.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SONDA VESICAL    SILICONADA X 2 VIAS Nº 16</td>
                                            <td align="right" bgcolor="#DADADA">20.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">STEN CUBIERTO    PARA ARTERIA CAROTIDIA</td>
                                            <td align="right" bgcolor="#DADADA">7875.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUBSALICILATO    D/BISMUT  87.33 MG/5ML SOL 150ML</td>
                                            <td align="right" bgcolor="#DADADA">2.057</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUERO    ANTIBOTROPIC POLIVALENT 25 MG/10ML INY</td>
                                            <td align="right" bgcolor="#DADADA">30.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUERO    ANTILOXOCELIC.</td>
                                            <td align="right" bgcolor="#DADADA">60.021</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFADIAZINA    DE PLATA 1%  CRM 50 G</td>
                                            <td align="right" bgcolor="#DADADA">5.570</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFADIAZINA    DE PLATA 1% CRM 400 G</td>
                                            <td align="right" bgcolor="#DADADA">56.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFAMETOXA+    TRIMETOPRIMA 800 MG/160 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.103</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFAMETOXA+TRIMETOPRIM    200/40MG/5ML SUS 60</td>
                                            <td align="right" bgcolor="#DADADA">0.918</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFAT    FERROS+ACIDO FOLIC 60MG HIERRO</td>
                                            <td align="right" bgcolor="#DADADA">0.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFATO DE    MAGNESIO 20% INY 10ML</td>
                                            <td align="right" bgcolor="#DADADA">0.707</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SULFATO    FERROSO 300 MG TAB</td>
                                            <td align="right" bgcolor="#DADADA">0.037</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUPLEMENTO    NUTRICIONAL DIETETICO X 400G</td>
                                            <td align="right" bgcolor="#DADADA">33.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SURFACTANT    PULMON.D/ORIGE.NATUR.25mg/mL INY</td>
                                            <td align="right" bgcolor="#DADADA">619.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.  ACERO INOXIDABLE MONOFILAMENTO 2/0 CR26</td>
                                            <td align="right" bgcolor="#DADADA">32.310</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. ACIDO    POLIGLACTIN 0 C/A MR 37 X 75 CM</td>
                                            <td align="right" bgcolor="#DADADA">12.610</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. ACIDO    POLIGLACTIN 3/0 C/A TR20</td>
                                            <td align="right" bgcolor="#DADADA">13.956</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 0 C/A 1/2 CR 30 (MR 30) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 0 C/A 1/2 CR 35 (MR 35) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 1 C/A 1/2 CR 30 (MR 30) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 1 C/A 1/2 CR 35 (MR 35) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 1 C/A 1/2 CR 40 (MR 40) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 2/0 C/A 1/2 CR 30 (MR 30) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 2/0 C/A 1/2 CR 35 (MR 35) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">6.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 2/0 C/A 1/2 CR 40 (MR 40) 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 3/0 C/A 1/2 CR 15 (MR 15)</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 3/0 C/A 1/2 CR 20 (MR 20)</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 3/0 C/A 1/2 CR 25 (MR 25)</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    CROMICO 3/0 C/A 1/2 CR 30 (MR 30)</td>
                                            <td align="right" bgcolor="#DADADA">5.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    SIMPLE 0 C/A 1/2 CR 30 (MR 30) X 70CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. CATGUT    SIMPLE 2/0 C/A 1/2 CR 30 (MR 30) X 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.141</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 0 C/A  1/2   MR 30     (CR 30) 75 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.160</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 0 S/A 8 X 50 CM MUTIEMP.</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 1 S/A  8 X 50 CM MUTIEMP.</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 2/0 3/8 CC 20 (TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">4.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 2/0 3/8 CC 25(TC 25)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">6.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 2/0 3/8 CC 30 (TC 30) X 75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 3/0 3/8 CC 15 (TC15) MMX75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 3/0 3/8 CC20(TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 3/0 3/8 CC25 (TC 25)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF. 3/0 3/8 CC30  (TC 30)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF.4/0 C/A 3/8 CC15 (TC 15) X75CM</td>
                                            <td align="right" bgcolor="#DADADA">6.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF.4/0 C/A 3/8 CC20(TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF.4/0 C/A 3/8 CC25(TC 25)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF.5/0 C/A 3/8 CC15(TC 15)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. NYLON    AZUL MF.5/0 C/A 3/8 CC20(TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">6.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIDIOXANONA 2/0 C/A 1/2 CR25 (MR25) X 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">14.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIDIOXANONA 3/0 C/A 1/2 CR26 (MR26) X 70 CM</td>
                                            <td align="right" bgcolor="#DADADA">14.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILEN AZUL MONOF.4/0 C/2A 1/2REDON</td>
                                            <td align="right" bgcolor="#DADADA">18.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO 3/0 CR 31 X 90</td>
                                            <td align="right" bgcolor="#DADADA">29.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOF   7/0 C/A 3/8    CR 9.3</td>
                                            <td align="right" bgcolor="#DADADA">35.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOF. 0 1/2 CR 30</td>
                                            <td align="right" bgcolor="#DADADA">9.290</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOFI. 4/0  C/2    A  1/2 CR</td>
                                            <td align="right" bgcolor="#DADADA">17.700</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOFI. 4/0     C/2A  1/2 CR</td>
                                            <td align="right" bgcolor="#DADADA">17.700</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOFI. 4/0 1/2 CR 26 X 90</td>
                                            <td align="right" bgcolor="#DADADA">19.170</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOFI. 5/0     C/2A  1/2 CR</td>
                                            <td align="right" bgcolor="#DADADA">19.175</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOFI. 5/0 C/2A 1/2 CR17 X</td>
                                            <td align="right" bgcolor="#DADADA">19.175</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO AZUL MONOFI. 5/0 C/2A 3/8 CR 13 X</td>
                                            <td align="right" bgcolor="#DADADA">19.910</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT.    POLIPROPILENO MF 0  1/2 MR25 X 75CM</td>
                                            <td align="right" bgcolor="#DADADA">12.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T.  2/0 CR25 (MR 25)</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 2/0 CC20 C/A 3/8 (TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 2/0 CR30  1/2 (MR30)</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 2/0 S/A 8 X 50 CM MULTIEMP.</td>
                                            <td align="right" bgcolor="#DADADA">5.141</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 3/0 C/A CC20  3/8(TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 3/0 C/A CC25 3/8 (TC25) 75 CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 3/0 C/A CR30 1/2 (MR 30)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 3/0 C/A CR35 1/2 (MR 35)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 4/0 C/A CC20 1/2 (MC20) X 75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SEDA    NEGRA T. 4/0 C/A CC20 3/8 (TC 20)X75CM</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 0 1/2 CR30(MR 30)</td>
                                            <td align="right" bgcolor="#DADADA">11.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 0 C/A 1/2 CR 35MM X 70CM</td>
                                            <td align="right" bgcolor="#DADADA">10.160</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 1 CR30 C/A 1/2 MR 30</td>
                                            <td align="right" bgcolor="#DADADA">9.300</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 1 CR35 C/A 1/2 MR 35</td>
                                            <td align="right" bgcolor="#DADADA">9.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 1 CR40 CA 1/2 MR 40</td>
                                            <td align="right" bgcolor="#DADADA">9.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 2/0 CR25 C/A 1/2 MR 25</td>
                                            <td align="right" bgcolor="#DADADA">9.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 2/0 CR30 CA 1/2 MR 30</td>
                                            <td align="right" bgcolor="#DADADA">9.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 2/0 CR35 CA 1/2 MR 35</td>
                                            <td align="right" bgcolor="#DADADA">12.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUT. SINTET.    ABSORBIBLE 3/0 CA 1/2 CR 30 X 70</td>
                                            <td align="right" bgcolor="#DADADA">9.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">SUTURA DE    POLIESTER TRENZ VERDE 2/0  DOBLE</td>
                                            <td align="right" bgcolor="#DADADA">19.910</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TETRACICLINA    CLORHIDRATO  1 % UNG OFT  6 G</td>
                                            <td align="right" bgcolor="#DADADA">8.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TIAMAZOL 5 MG</td>
                                            <td align="right" bgcolor="#DADADA">0.093</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TIGECICLINA 50    MG  INY</td>
                                            <td align="right" bgcolor="#DADADA">238.320</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CANULADO 4.5MM ROSCA DISTAL 16X50MM</td>
                                            <td align="right" bgcolor="#DADADA">234.150</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 1.5 X 14 MM</td>
                                            <td align="right" bgcolor="#DADADA">28.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 1.5 X 16 MM</td>
                                            <td align="right" bgcolor="#DADADA">28.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.0 MM X 12MM</td>
                                            <td align="right" bgcolor="#DADADA">135.475</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.0 X 10 MM</td>
                                            <td align="right" bgcolor="#DADADA">135.475</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.0MM X 8MM</td>
                                            <td align="right" bgcolor="#DADADA">135.475</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.4 X 10MM</td>
                                            <td align="right" bgcolor="#DADADA">221.840</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.7 MM X 20 MM</td>
                                            <td align="right" bgcolor="#DADADA">30.260</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.7 X 20 MM</td>
                                            <td align="right" bgcolor="#DADADA">28.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 2.7 X 22 MM</td>
                                            <td align="right" bgcolor="#DADADA">28.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 08 MM</td>
                                            <td align="right" bgcolor="#DADADA">26.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 14 MM</td>
                                            <td align="right" bgcolor="#DADADA">26.200</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 17 MM</td>
                                            <td align="right" bgcolor="#DADADA">27.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 20MM</td>
                                            <td align="right" bgcolor="#DADADA">27.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 24MM</td>
                                            <td align="right" bgcolor="#DADADA">28.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 25MM</td>
                                            <td align="right" bgcolor="#DADADA">26.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 26 MM</td>
                                            <td align="right" bgcolor="#DADADA">26.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 28MM</td>
                                            <td align="right" bgcolor="#DADADA">31.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5 X 32MM</td>
                                            <td align="right" bgcolor="#DADADA">68.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 3.5MM X 30MM</td>
                                            <td align="right" bgcolor="#DADADA">27.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 4.5 MM X 12 MM</td>
                                            <td align="right" bgcolor="#DADADA">26.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 4.5 X 30 MM</td>
                                            <td align="right" bgcolor="#DADADA">61.870</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 4.5 X 36MM</td>
                                            <td align="right" bgcolor="#DADADA">52.663</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 4.5 X 40MM</td>
                                            <td align="right" bgcolor="#DADADA">44.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL 4.5 X 46MM</td>
                                            <td align="right" bgcolor="#DADADA">62.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    CORTICAL DE TITANIO AUTOROSCANTE 2.4</td>
                                            <td align="right" bgcolor="#DADADA">142.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    BLOQUEO 2.0 MM X 12 MM</td>
                                            <td align="right" bgcolor="#DADADA">262.196</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    BLOQUEO 2.0 MM X 8 MM</td>
                                            <td align="right" bgcolor="#DADADA">262.196</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    BLOQUEO 3.5MMX40MM</td>
                                            <td align="right" bgcolor="#DADADA">423.780</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    EMERGENCIA 1.8 X 5 MM</td>
                                            <td align="right" bgcolor="#DADADA">137.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    EMERGENCIA 2.3 X 5 MM</td>
                                            <td align="right" bgcolor="#DADADA">87.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    EMERGENCIA 2.7MMX 8MM</td>
                                            <td align="right" bgcolor="#DADADA">221.840</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 1.5 X 5 MM</td>
                                            <td align="right" bgcolor="#DADADA">70.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 1.5MM  X 5 MM(SISTEMA)</td>
                                            <td align="right" bgcolor="#DADADA">70.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 1.5MM X 5 MM SISTEMA BAJO</td>
                                            <td align="right" bgcolor="#DADADA">181.657</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0 X 11 MM SIST. 2.0 MM</td>
                                            <td align="right" bgcolor="#DADADA">61.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0 X 6 MM</td>
                                            <td align="right" bgcolor="#DADADA">95.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0MMX8MM</td>
                                            <td align="right" bgcolor="#DADADA">124.850</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0X3MM</td>
                                            <td align="right" bgcolor="#DADADA">56.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0X4MM</td>
                                            <td align="right" bgcolor="#DADADA">78.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0X7MM</td>
                                            <td align="right" bgcolor="#DADADA">109.730</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.0X9 MM</td>
                                            <td align="right" bgcolor="#DADADA">59.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO 2.4MMX12MM</td>
                                            <td align="right" bgcolor="#DADADA">121.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO AUTOPERFORANTE 0.2 MM X</td>
                                            <td align="right" bgcolor="#DADADA">200.600</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO AUTOPERFORANTE 1.5 MM X</td>
                                            <td align="right" bgcolor="#DADADA">182.778</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO AUTORROSCANTE 2.0 MM X</td>
                                            <td align="right" bgcolor="#DADADA">308.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO AUTORROSCANTE 2.4 X 10 MM</td>
                                            <td align="right" bgcolor="#DADADA">308.900</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO FIJACION INTERMAXILAR 9.0</td>
                                            <td align="right" bgcolor="#DADADA">135.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO P/FIJACION INTERMAXILAR 11</td>
                                            <td align="right" bgcolor="#DADADA">135.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO T.LOCKING 2.0X7.0MM</td>
                                            <td align="right" bgcolor="#DADADA">140.625</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO DE    TITANIO T.LOCKING 2.0X9.0MM</td>
                                            <td align="right" bgcolor="#DADADA">140.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    ESPONJOSO 4.0X25MM</td>
                                            <td align="right" bgcolor="#DADADA">60.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    ESPONJOSO 4.0X40MM</td>
                                            <td align="right" bgcolor="#DADADA">56.250</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    ESPONJOSO 4.0X45MM</td>
                                            <td align="right" bgcolor="#DADADA">25.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    ESPONJOSO 4.0X50MM</td>
                                            <td align="right" bgcolor="#DADADA">34.650</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    ESPONJOSO 6.5 X 32 MM</td>
                                            <td align="right" bgcolor="#DADADA">73.120</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    ESPONJOSO 6.5MMX70MM</td>
                                            <td align="right" bgcolor="#DADADA">60.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    INTERFERENCIA 8MMX25MM</td>
                                            <td align="right" bgcolor="#DADADA">1237.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TORNILLO    TITANIO 2.0MMX5MM SIST.2.0MM</td>
                                            <td align="right" bgcolor="#DADADA">48.380</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TRICLABENDAZOL    250 MG</td>
                                            <td align="right" bgcolor="#DADADA">1.688</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TRIPTORELINA    11.25 MG INY</td>
                                            <td align="right" bgcolor="#DADADA">1323.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBERCULINA -    PPD 15 UI/1.5ML INY</td>
                                            <td align="right" bgcolor="#DADADA">19.840</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO BRONQUIAL    DOBLE LUMEN  DERECHO Nº 35</td>
                                            <td align="right" bgcolor="#DADADA">273.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO BRONQUIAL    DOBLE LUMEN DERECHO Nº 39</td>
                                            <td align="right" bgcolor="#DADADA">215.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO BRONQUIAL    DOBLE LUMEN IZQUIERDO Nº 39</td>
                                            <td align="right" bgcolor="#DADADA">215.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO DE    HEMOCROM CON CELITE</td>
                                            <td align="right" bgcolor="#DADADA">27.500</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO EN T    MONGOMERY Nº 12 CON BAY PASS</td>
                                            <td align="right" bgcolor="#DADADA">200.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO EN T    MONTGOMERY 12MMDIAMETRO</td>
                                            <td align="right" bgcolor="#DADADA">2035.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL 5.5 CON CUFF</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL ANILLADO  8 CON BALON</td>
                                            <td align="right" bgcolor="#DADADA">48.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL ANILLADO 8.5 CON BALON</td>
                                            <td align="right" bgcolor="#DADADA">48.750</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL DESCART. N° 3.0 S/BALON</td>
                                            <td align="right" bgcolor="#DADADA">4.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL DESCART. Nº 4.0 C/BALON</td>
                                            <td align="right" bgcolor="#DADADA">4.793</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL DESCART. Nº 4.5 C/BALON</td>
                                            <td align="right" bgcolor="#DADADA">4.800</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL DESCART. Nº 5 C/CUFF</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL DESCART. Nº 7.5 C/BALON</td>
                                            <td align="right" bgcolor="#DADADA">4.370</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">TUBO    ENDOTRAQUEAL DESCART. Nº 8.5 C/BALON</td>
                                            <td align="right" bgcolor="#DADADA">5.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    ANTIAMARILICA 1000DL/0.5ML INY 10 DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">41.112</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    ANTINEUMOCOCICA 25 UG/5ML 1 DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">143.635</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    ANTIPOLIOMIELITICA 700000 DIC SUS 1 DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">16.509</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    ANTIRRABICA 7 DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">10.426</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    CONT/DIFTERIA,TETANOS PEDIATR.10DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">3.684</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    CONT/HEPATITIS VIRAL B -</td>
                                            <td align="right" bgcolor="#DADADA">10.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA    CONT/SARANPION,RUBEOLA SR INY 10DOSIS</td>
                                            <td align="right" bgcolor="#DADADA">10.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA CONTRA    DIFTERIA, TETANOS Y TOS FERINA</td>
                                            <td align="right" bgcolor="#DADADA">6.894</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VACUNA CONTRA    LA HEPATITIS B 10 UG/0.5ML INY 1</td>
                                            <td align="right" bgcolor="#DADADA">1.010</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VALVULA    AORTICA BIOLOGICA Nº 21</td>
                                            <td align="right" bgcolor="#DADADA">4120.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VALVULA    CARDIACA AORTICA Nº 21</td>
                                            <td align="right" bgcolor="#DADADA">3914.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VALVULA    CARDIACA MITRAL Nº 27</td>
                                            <td align="right" bgcolor="#DADADA">3914.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VALVULA MITRAL    BIOLOGICA Nª 27</td>
                                            <td align="right" bgcolor="#DADADA">4099.400</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VARILLA DE    ALUMINIO  X  30 CM</td>
                                            <td align="right" bgcolor="#DADADA">48.620</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VERAPAMILO    CLORHIDRATO 2.5 mg/mL INY 2 mL</td>
                                            <td align="right" bgcolor="#DADADA">10.475</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VINBLASTINA    SULFATO 1MG/ML INY X 10 ML</td>
                                            <td align="right" bgcolor="#DADADA">45.000</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">VINCRISTINA    SULFATO 1 MG/ML INY</td>
                                            <td align="right" bgcolor="#DADADA">8.875</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#DADADA">ZIDOVUDINA 50    MG  FRASCO JARABE</td>
                                            <td align="right" bgcolor="#DADADA">27.400</td>
                                          </tr>
                                        </table>
                                
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
