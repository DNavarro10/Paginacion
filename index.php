<?php	
/* conexion */
require 'php/conexion.php';
/*  ----  */



$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ?($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $connexion ->prepare("
SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
LIMIT $inicio,$postPorPagina
");

$articulos ->execute();
$articulos = $articulos ->fetchAll();


/* evitar mostar msa de la cuenta*/
if(!$articulos){
	header('Location: index.php');
}

$totalArticulos = $connexion ->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];


/*contador de paginas*/
$numeroPagina = ceil($totalArticulos/$postPorPagina); 

echo $numeroPagina;
require 'Index.view.php';
	
?>