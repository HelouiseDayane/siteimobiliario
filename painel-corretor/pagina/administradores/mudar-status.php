<?php 
require_once("../../../conexao.php");
$tabela = 'administradores';

$id = $_POST['id'];
$acao = $_POST['acao'];

$pdo->query("UPDATE $tabela SET ativo = '$acao' where id = '$id'");
$pdo->query("UPDATE usuarios SET ativo = '$acao' where id_pessoa = '$id' and nivel = 'Administrador'");

echo 'Alterado com Sucesso';
?>