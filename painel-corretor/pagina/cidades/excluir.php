<?php 
require_once("../../../conexao.php");
$tabela = 'cidades';

$id = $_POST['id'];



$pdo->query("DELETE FROM $tabela where id = '$id'");

echo 'Excluído com Sucesso';

?>