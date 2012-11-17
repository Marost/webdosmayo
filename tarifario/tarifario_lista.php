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
$search=isset($_GET['ct_search']) ? $_GET['ct_search'] : '';
$multiple_search=isset($_GET['ct_multiple_search']) ? $_GET['ct_multiple_search'] : array();
$items_per_page=isset($_GET['ct_items_per_page']) ? $_GET['ct_items_per_page'] : '';
$sort=isset($_GET['ct_sort']) ? $_GET['ct_sort'] : '';
$page=isset($_GET['ct_page']) ? $_GET['ct_page'] : 1;
$total_items=(isset($_GET['ct_total_items']) and $_GET['ct_total_items']>=0) ? $_GET['ct_total_items'] : '';

// Uses the creativeTable to build the table
include_once('../libs/creative_table/creativeTable.php');

$ct=new CreativeTable();

// Data Gathering
$params['sql_query']            = "SELECT titulo, precio FROM DM_tarifario WHERE tipo=1"; 
// IMPORTANT: you must specify the fields and not use * - it accept sql query in the form of SELECT ... FROM ... WHERE ... ORDER BY ... LIMIT
$params['search']               = $search;
$params['multiple_search']      = $multiple_search;
$params['items_per_page']       = $items_per_page;
$params['sort']                 = $sort;
$params['page']                 = $page;
$params['total_items']          = $total_items;

// Layout Configurations (All - the commented lines are the default values)
//$params['id']                 = 'ct';
//$params['class']              = '';
//$params['form_init']          = true;
//$params['form_url']           = '';
$params['header']               = 'Descripcion,Precio'; // If you need to use the comma use &#44; instead of , default: false
$params['width']                = '185,,95,50'; // default: ''
//$params['search_init']        = true;
$params['search_html']          = '<span id="#ID#_search_value">Buscar...</span><a id="#ID#_advanced_search" href="javascript: ctShowAdvancedSearch(\'#ID#\');" title="Advanced Search"><img src="images/advanced_search.png" /></a><a href="javascript: ctSubmitForm(\'#ID#\',\'\',1);" style="margin-left: 10px; color: #555555; text-decoration: none;">Search</a>';
$params['multiple_search_init'] = filled_array($multiple_search) ? true: 'hide';
$params['items_per_page_init']  = '30*$i'; // default: '10*$i';
//$params['items_per_page_all'] = '#TOTAL_ITEMS#';
//$params['items_per_page_url'] = 'ctItemsPerPage(\'#ID#\')';
//$params['sort_init']          = true;
//$params['sort_order']         = 'adt';
//$params['sort_url']           = 'ctSort(\'#ID#\',\'#COLUMN_ID#\')';
//$params['extra_cols']         = array();
//$params['odd_even']           = true;
//$params['no_results']         = 'No results found.';
//$params['actions']            = array();
//$params['actions_url']        = 'ctActions(\'#ID#\')';
//$params['pager']              = '';
//$params['pager_ids']          = '';
//$params['ajax_url']           = $_SERVER['PHP_SELF'];
//$params['display_cols']       = '';

$ct->table($params);

// Insert a Pager into the table (I used this CreativePager Lite version because its very easy to use, but you may use any pager system that you like)
$ct->pager = getCreativePagerLite('ct',$page,$ct->total_items,$ct->items_per_page);

$out=$ct->display();
?>
<link rel="stylesheet" type="text/css" href="/libs/creative_table/css/creative.css">
<script src="/libs/creative_table/js/jquery-1.4.2.min.js"></script>
<script src="/libs/creative_table/js/creative_table_ajax-1.3.js"></script>

<?php echo $out;?>

<?php }elseif($tipo=="procedimiento"){ ?>
<?php
// Gets the data
$search=isset($_GET['ct_search']) ? $_GET['ct_search'] : '';
$multiple_search=isset($_GET['ct_multiple_search']) ? $_GET['ct_multiple_search'] : array();
$items_per_page=isset($_GET['ct_items_per_page']) ? $_GET['ct_items_per_page'] : '';
$sort=isset($_GET['ct_sort']) ? $_GET['ct_sort'] : '';
$page=isset($_GET['ct_page']) ? $_GET['ct_page'] : 1;
$total_items=(isset($_GET['ct_total_items']) and $_GET['ct_total_items']>=0) ? $_GET['ct_total_items'] : '';

// Uses the creativeTable to build the table
include_once('../libs/creative_table/creativeTable.php');

$ct=new CreativeTable();

// Data Gathering
$params['sql_query']            = "SELECT titulo, precio FROM DM_tarifario WHERE tipo=2"; 
// IMPORTANT: you must specify the fields and not use * - it accept sql query in the form of SELECT ... FROM ... WHERE ... ORDER BY ... LIMIT
$params['search']               = $search;
$params['multiple_search']      = $multiple_search;
$params['items_per_page']       = $items_per_page;
$params['sort']                 = $sort;
$params['page']                 = $page;
$params['total_items']          = $total_items;

// Layout Configurations (All - the commented lines are the default values)
//$params['id']                 = 'ct';
//$params['class']              = '';
//$params['form_init']          = true;
//$params['form_url']           = '';
$params['header']               = 'Descripcion,Precio'; // If you need to use the comma use &#44; instead of , default: false
$params['width']                = '185,,95,50'; // default: ''
//$params['search_init']        = true;
$params['search_html']          = '<span id="#ID#_search_value">Buscar...</span><a id="#ID#_advanced_search" href="javascript: ctShowAdvancedSearch(\'#ID#\');" title="Advanced Search"><img src="images/advanced_search.png" /></a><a href="javascript: ctSubmitForm(\'#ID#\',\'\',1);" style="margin-left: 10px; color: #555555; text-decoration: none;">Search</a>';
$params['multiple_search_init'] = filled_array($multiple_search) ? true: 'hide';
$params['items_per_page_init']  = '30*$i'; // default: '10*$i';
//$params['items_per_page_all'] = '#TOTAL_ITEMS#';
//$params['items_per_page_url'] = 'ctItemsPerPage(\'#ID#\')';
//$params['sort_init']          = true;
//$params['sort_order']         = 'adt';
//$params['sort_url']           = 'ctSort(\'#ID#\',\'#COLUMN_ID#\')';
//$params['extra_cols']         = array();
//$params['odd_even']           = true;
//$params['no_results']         = 'No results found.';
//$params['actions']            = array();
//$params['actions_url']        = 'ctActions(\'#ID#\')';
//$params['pager']              = '';
//$params['pager_ids']          = '';
//$params['ajax_url']           = $_SERVER['PHP_SELF'];
//$params['display_cols']       = '';

$ct->table($params);

// Insert a Pager into the table (I used this CreativePager Lite version because its very easy to use, but you may use any pager system that you like)
$ct->pager = getCreativePagerLite('ct',$page,$ct->total_items,$ct->items_per_page);

$out=$ct->display();
?>
<link rel="stylesheet" type="text/css" href="/libs/creative_table/css/creative.css">
<script src="/libs/creative_table/js/jquery-1.4.2.min.js"></script>
<script src="/libs/creative_table/js/creative_table_ajax-1.3.js"></script>

<?php echo $out;?>
<?php } ?>