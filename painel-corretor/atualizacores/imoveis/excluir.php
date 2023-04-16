<?php 
require_once("../../../conexao.php");
$tabela = 'imoveis';
$pasta_de_fotos = '../../imagens_imoveis/';
$id = $_POST['id'];

$query = $pdo->query("SELECT  * FROM `fotos` WHERE `imoveis_id` = '{$id}'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if($total_reg > 0){
	foreach($res as $key => $value){
		$foto 				= $value['foto'];
		@unlink("{$pasta_de_fotos}{$foto}");
		$pdo->query("DELETE FROM `fotos` where `imoveis_id` = '{$id}'");
		//echo "{$pasta_de_fotos}{$foto}\r\n";
	}
}

$pdo->query("DELETE FROM $tabela where id = '{$id}'");

echo 'Excluído com Sucesso';

?>