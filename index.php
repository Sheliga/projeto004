 <?php

require_once('App/core/conexao.php');

include_once('App/controller/status.controller.php');
include_once('App/model/status.class.php');

include_once('App/controller/categoria.controller.php');
include_once('App/model/categoria.class.php');

include_once('App/controller/usuario.controller.php');
include_once('App/model/usuario.class.php');

include_once('App/model/duvida.class.php');


echo('-------------------------------</br>');
echo('teste duvida</br>');

$id = 0;
$titulo = "Titulo php";
$descricao = "Texto por php";
$categoria_id = 2;
$usuario_id = 36;
$status_id = 1;
$duvida = new Duvida($id, $titulo, $descricao, $categoria_id, $usuario_id, $status_id);


echo "<table border =\"1\">";
echo "  <tr>";
echo "      <td> {$duvida->getId()}  </td>";
echo "      <td> {$duvida->getTitulo()}</td>";
echo "      <td> {$duvida->getDescricao()}  </td>";
echo "      <td> {$duvida->getCategoriaId()}  </td>";
echo "      <td> {$duvida->getUsuarioId()}  </td>";
echo "      <td> {$duvida->getStatusId()}  </td>";
echo "  </tr>";


echo "</br>";
$duvida -> save();
$duvida = $duvida -> listById(6);
$duvida -> setTitulo("Titulo alterado por php");
$duvida -> update();




echo "<table border =\"1\">";
echo "  <tr>";
echo "      <td> {$duvida->getId()}  </td>";
echo "      <td> {$duvida->getTitulo()}</td>";
echo "      <td> {$duvida->getDescricao()}  </td>";
echo "      <td> {$duvida->getCategoriaId()}  </td>";
echo "      <td> {$duvida->getUsuarioId()}  </td>";
echo "      <td> {$duvida->getStatusId()}  </td>";
echo "  </tr>";

$duvida -> remove(3);
echo "</br>";
echo "<table border =\"1\">";
foreach ($duvida -> listAll() as $duv) {
    echo "  <tr>";
    echo "      <td> {$duv->getId()}  </td>";
    echo "      <td> {$duv->getTitulo()}</td>";
    echo "      <td> {$duv->getDescricao()}  </td>";
    echo "      <td> {$duv->getCategoriaId()}  </td>";
    echo "      <td> {$duv->getUsuarioId()}  </td>";
    echo "      <td> {$duv->getStatusId()}  </td>";
    echo "  </tr>";
}
echo "</table>";
/*
echo('-------------------------------</br>');
echo('teste Usuario</br>');
echo('talkey');
$id = 0;
$email = "email@teste.com";
$nome = "Orestes Bileske";
$senha = "123456";
$pontos_bonificacao = 50;
$usuario = new Usuario($id, $nome, $email, $senha, $pontos_bonificacao);
$usuario -> save();



$usuario ->remove(2);
echo "<table border =\"1\">";
echo "  <tr>";
echo "      <td> {$usuario->getId()}  </td>";
echo "      <td> {$usuario->getNome()}</td>";
echo "      <td> {$usuario->getEmail()}  </td>";
echo "      <td> {$usuario->getSenha()}  </td>";
echo "      <td> {$usuario->getPontosBonificacao()}  </td>";
echo "  </tr>";

$usuario = $usuario ->listById(36);
echo "  <tr>";
echo "      <td> {$usuario->getId()}  </td>";
echo "      <td> {$usuario->getNome()}</td>";
echo "      <td> {$usuario->getEmail()}  </td>";
echo "      <td> {$usuario->getSenha()}  </td>";
echo "      <td> {$usuario->getPontosBonificacao()}  </td>";
echo "  </tr>";

echo "</table>";
echo "</br>";
$usuario -> setNome("nome atualizado pelo php");
$usuario -> update();


echo "<table border =\"1\">";
foreach ($usuario -> listAll() as $user) {
    echo "  <tr>";
        echo "      <td> {$user->getId()}  </td>";
        echo "      <td> {$user->getNome()}</td>";
        echo "      <td> {$user->getEmail()}  </td>";
        echo "      <td> {$user->getSenha()}  </td>";
        echo "      <td> {$user->getPontosBonificacao()}  </td>";
    echo "  </tr>";
}
echo "</table>";


echo('-------------------------------</br>');
echo('teste status</br>');
echo('talkey');

$status = new Status("testando");

$status -> setId(2);
$status-> setDescricao("alterado por php ");
$status = $status->listById('2');

echo "<table border =\"1\">";
echo "<tr>";
echo "<td> {$status->getId()}  </td>";
echo "<td> {$status->getDescricao()}</td>";
echo "</tr>";
echo "</table>";

$status -> setDescricao("Mudado");
$status -> update();
$status -> remove(43);

echo "</br>";
echo "<table border =\"1\">";
foreach ($status -> listAll() as $stat) {
    echo "  <tr>";
    echo "      <td> {$stat->getId()}  </td>";
    echo "      <td> {$stat->getDescricao()}</td>";
    echo "  </tr>";
}
echo "</table>";


echo('-------------------------------</br>');
echo('teste Categoria</br>');
echo('talkey');
$categoria = new Categoria();
$categoria -> setDescricao("muito descriitivo");
$categoria -> save();

$categoria = $categoria->listById('2');
$categoria -> setDescricao("muito descriitivo");
$categoria -> update();
echo "<table border =\"1\">";
echo "  <tr>";
echo "      <td> {$categoria->getId()}  </td>";
echo "      <td> {$categoria->getDescricao()}</td>";
echo "  </tr>";
echo "</table>";
$categoria -> remove(10);

echo "</br>";
echo "<table border =\"1\">";
foreach ($categoria -> listAll() as $cat) {
    echo "  <tr>";
    echo "      <td> {$cat->getId()}  </td>";
    echo "      <td> {$cat->getDescricao()}</td>";
    echo "  </tr>";
}
echo "</table>";
*/
?>