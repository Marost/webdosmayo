<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*SCRIPTS*/
$script_tarifario=true;

include_once('libs/creative_table/configurations.php');

// Gets the data
$id=isset($_POST['id']) ? $_POST['id'] : '';
$search=isset($_POST['search']) ? $_POST['search'] : '';
$multiple_search=isset($_POST['multiple_search']) ? $_POST['multiple_search'] : array();
$items_per_page=isset($_POST['items_per_page']) ? $_POST['items_per_page'] : '';
$sort=isset($_POST['sort']) ? $_POST['sort'] : '';
$page=isset($_POST['page']) ? $_POST['page'] : 1;
$total_items=(isset($_POST['total_items']) and $_POST['total_items']>=0) ? $_POST['total_items'] : '';
$extra_cols=isset($_POST['extra_cols']) ? $_POST['extra_cols'] : array();

// Uses the creativeTable to build the table
include_once('libs/creative_table/creativeTable.php');

$ct=new CreativeTable();

// Data Gathering
$params['sql_query']                = "SELECT titulo,precio FROM DM_tarifario WHERE tipo=1";
$params['search']                   = $search;
$params['multiple_search']          = $multiple_search;
$params['items_per_page']           = $items_per_page;
$params['sort']                     = $sort;
$params['page']                     = $page;
$params['total_items']              = $total_items;

$params['header']                   = 'Descripcion,Precio';
$params['width']                    = '600,100';
$params['search_html']              = '<span id="#ID#_search_value">Buscar...</span><a id="#ID#_advanced_search" href="javascript: ctShowAdvancedSearch(\'#ID#\');" title="Advanced Search"><img src="/libs/creative_table/images/advanced_search.png" /></a><div id="#ID#_loader"></div>';
$params['items_per_page_init']      = '10,20,50,100';

$ct->table($params);
$ct->pager = getCreativePagerLite('ct',$page,$ct->total_items,$ct->items_per_page);
if($_POST['ajax_option']!=''){
    echo json_encode($ct->display($_POST['ajax_option'],true));
    exit;
}else{
    $out=$ct->display();
}

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

        <?php require_once("w-header-scripts.php"); ?>

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
                                <h2>Tarifario Virtual</h2>
                                <p>Los precios son referenciales</p>
                            </div>

                            <div class="contenido">
                                
                                <div id="tarifario_cabecera">
                                  <ul>
                                    <li class="selected"><a id="tarif_medicamento" href="javascript:;">Medicamentos</a></li>
                                    <li><a id="tarif_procedimiento" href="javascript:;">Procedimientos</a></li>
                                  </ul>
                                </div>

                                <div id="tarifario_contenido">

                                    <?php echo $out; ?>

                                </div>

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
