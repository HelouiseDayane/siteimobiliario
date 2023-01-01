<?php 
require_once("../../../conexao.php");
$tabela = 'tipos';

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

$pdo->query("DELETE FROM $tabela where id = '$id'");

echo 'Excluído com Sucesso';

?>