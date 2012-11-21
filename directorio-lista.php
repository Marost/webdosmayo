<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES*/
$id_directorio=$_POST["lista"];

/*DIRECTORIO - OTROS FUNCIONARIOS*/
$rst_funcionarios=mysql_query("SELECT * FROM DM_directorio_funcionarios WHERE id=$id_directorio;", $conexion);
$fila_funcionarios=mysql_fetch_array($rst_funcionarios);

/*VARIABLES*/
$funcionarios_contenido=$fila_funcionarios["contenido"];

echo $funcionarios_contenido;

?>