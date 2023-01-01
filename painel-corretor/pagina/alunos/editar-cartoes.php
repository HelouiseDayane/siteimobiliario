<?php 
require_once("../../../conexao.php");
$tabela = 'alunos';

$id = $_POST['id'];
$cartoes = $_POST['cartoes'];

$pdo->query("UPDATE $tabela SET cartao = '$cartoes' where id = '$id'");

echo 'Alterado com Sucesso';

?>