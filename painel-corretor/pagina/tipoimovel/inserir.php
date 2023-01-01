<?php 
require_once("../../../conexao.php");
$tabela = 'tipos';

$tipo_imoveis = $_POST['tipoimovel'];
$padrao = $_POST['padrao'];
$id = $_POST['id'];


//validar tipos duplicado
$query = $pdo->query("SELECT * FROM $tabela where tipo_imoveis = '$tipo_imoveis'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Tipo de imóvel já cadastrado!';
	exit();
}


if($id == ""){

	$query = $pdo->prepare("INSERT INTO $tabela SET tipo_imoveis = :tipo_imoveis, padrao_imoveis = :padrao");
$query->bindValue(":tipo_imoveis", "$tipo_imoveis");
$query->bindValue(":padrao", "$padrao");
$query->execute();


}else{
	$query = $pdo->prepare("UPDATE $tabela SET tipo_imoveis = :tipo_imoveis, padrao_imoveis = :padrao WHERE id = '$id'");
	$query->bindValue(":tipo_imoveis", "$tipo_imoveis");
	$query->bindValue(":padrao", "$padrao");
$query->execute();


}



echo 'Salvo com Sucesso';

 ?>