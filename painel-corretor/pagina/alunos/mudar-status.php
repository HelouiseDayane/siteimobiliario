<?php 
require_once("../../../conexao.php");
$tabela = 'alunos';

$id = $_POST['id'];
$acao = $_POST['acao'];

$pdo->query("UPDATE $tabela SET ativo = '$acao' where id = '$id'");
$pdo->query("UPDATE usuarios SET ativo = '$acao' where id_pessoa = '$id' and nivel = 'Aluno'");

echo 'Alterado com Sucesso';
?>