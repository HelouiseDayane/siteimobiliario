<?php 
require_once("../../../conexao.php");
$tabela = 'bairros';

$nome = $_POST['nome'];
$id = $_POST['id'];


//validar email duplicado
$query = $pdo->query("SELECT * FROM $tabela where nome = '$nome'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Bairro já cadastrado, escolha Outro!';
	exit();
}




if($id == ""){

	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome");
$query->bindValue(":nome", "$nome");
$query->execute();
$ult_id = $pdo->lastInsertId();


}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome WHERE id = '$id'");
$query->bindValue(":nome", "$nome");
$query->execute();

}



echo 'Salvo com Sucesso';

 ?>