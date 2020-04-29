<?php




require_once('core/conexao.php');
include_once('utils/Utils.php');

include_once('controller/status.controller.php');
include_once('model/status.class.php');

include_once('controller/categoria.controller.php');
include_once('model/categoria.class.php');

include_once('controller/usuario.controller.php');
include_once('model/usuario.class.php');



echo('-------------------------------</br>');
echo('teste usuario</br>');

$usuario = new Usuario();
$usuario -> setNome("Nome Maneiro ");
$usuario -> setEmail("email2@email.com");
$usuario -> setSenha("123456");
$usuario -> setPontosBonificacao(100);

$usuarioDAO = new usuarioDAO();

$usuarioDAO -> save($usuario);

$usuario -> setNome("Atualizado por PHP");
$usuario -> setEmail("atualizadophp@email.com");
$usuario -> setSenha("2333");
$usuario -> setPontosBonificacao(150);

$usuarioDAO -> update($usuario);
$usuarioDAO -> listAll();
$usuarioDAO -> listById(1);

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

