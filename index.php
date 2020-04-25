<?php




require_once('core/conexao.php');
include_once('controller/status.controller.php');
include_once('model/status.class.php');

include_once('controller/categoria.controller.php');
include_once('model/categoria.class.php');

echo('-------------------------------</br>');
echo('teste status</br>');

$status = new Status("testando");


$statusDAO  = new StatusDAO();

$statusDAO->save($status);

$status -> setId(2);
$status-> setDescricao("alterado por php ");
$statusDAO->update($status);  


$statusDAO->listAll();
$statusDAO->listById('1');


echo('-------------------------------</br>');
echo('teste categoria</br>');
$categoria = new categoria("testando");


$categoriaDAO  = new categoriaDAO();

$categoriaDAO->save($categoria);

$categoria -> setId(1);
$categoria-> setDescricao("alterado por php");
$categoriaDAO->update($categoria);  


$categoriaDAO->listAll();
$categoriaDAO->listById('1');



?>

