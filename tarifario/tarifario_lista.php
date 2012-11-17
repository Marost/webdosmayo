<?php

// Open the DB connection and select the DB - creates the function getCreativePagerLyte()
include_once('../libs/creative_table/configurations.php');
?>

<?php
/*VARIABLE URL*/
$tipo=$_POST["tipo"];

if($tipo=="medicamento"){

?>
<?php
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
include_once('../libs/creative_table/creativeTable.php');

$ct=new CreativeTable();

// Data Gathering
$params['sql_query']                = "SELECT titulo,precio FROM DM_tarifario WHERE tipo=1";
$params['search']                   = $search;
$params['multiple_search']          = $multiple_search;
$params['items_per_page']           = $items_per_page;
$params['sort']                     = $sort;
$params['page']                     = $page;
$params['total_items']              = $total_items;

// Layout Configurations
$params['header']                   = 'Descripción,Precio';    // If you need to use the comma use &#44; instead of ,
$params['width']                    = '600,100';

// ***********************************************************************************
// UNCOMMENT TO TEST THE DIFFERENTS OPTIONS AND SEE THE RESULTS AND TEST SOME YOURSELF

$params['items_per_page_init']      = '25,50,75,100';   // creates the select box with those options
$params['items_per_page_all']       = false;            // wont show the show all option in the select box

// ***********************************************************************************

$ct->table($params);
$ct->pager = getCreativePagerLite('ct',$page,$ct->total_items,$ct->items_per_page);

// If its an ajax call
if($_POST['ajax_option']!=''){
    echo json_encode($ct->display($_POST['ajax_option'],true));
    exit;
}else{
    $out=$ct->display();
}

?>
<link rel="stylesheet" type="text/css" href="/libs/creative_table/creative.css">
<script type="text/javascript" src="/libs/creative_table/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/libs/creative_table/js/creative_table_ajax-1.3.js"></script>

<?php echo $out;?>

<?php }elseif($tipo=="procedimiento"){ ?>
Tabla de procedimientos
<?php } ?>