<?php
// Open the DB connection and select the DB - creates the function getCreativePagerLyte()
include_once('../libs/creative_table/configurations.php');

/*VARIABLE URL*/
$tipo=$_POST["tipo"];
?>

<?php
if($tipo=="medicamento"){

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
	$params['search_html']              = '<span id="#ID#_search_value">Buscar...</span><a id="#ID#_advanced_search" href="javascript: ctShowAdvancedSearch(\'#ID#\');" title="Advanced Search"><img src="images/advanced_search.png" /></a><div id="#ID#_loader"></div>';
	$params['items_per_page_init']      = '10,20,50,100';

	$ct->table($params);
	$ct->pager = getCreativePagerLite('ct',$page,$ct->total_items,$ct->items_per_page);
	if($_POST['ajax_option']!=''){
	    echo json_encode($ct->display($_POST['ajax_option'],true));
	    exit;
	}else{
	    $out=$ct->display();
	}

 	echo $out;

 }elseif($tipo=="procedimiento"){ 

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
	$params['sql_query']                = "SELECT titulo,precio FROM DM_tarifario WHERE tipo=2";
	$params['search']                   = $search;
	$params['multiple_search']          = $multiple_search;
	$params['items_per_page']           = $items_per_page;
	$params['sort']                     = $sort;
	$params['page']                     = $page;
	$params['total_items']              = $total_items;

	$params['header']                   = 'Descripcion,Precio';
	$params['width']                    = '600,100';
	$params['search_html']              = '<span id="#ID#_search_value">Buscar...</span><a id="#ID#_advanced_search" href="javascript: ctShowAdvancedSearch(\'#ID#\');" title="Advanced Search"><img src="images/advanced_search.png" /></a><div id="#ID#_loader"></div>';
	$params['items_per_page_init']      = '10,20,50,100';

	$ct->table($params);
	$ct->pager = getCreativePagerLite('ct',$page,$ct->total_items,$ct->items_per_page);
	if($_POST['ajax_option']!=''){
	    echo json_encode($ct->display($_POST['ajax_option'],true));
	    exit;
	}else{
	    $out=$ct->display();
	}

 	echo $out;
} ?>