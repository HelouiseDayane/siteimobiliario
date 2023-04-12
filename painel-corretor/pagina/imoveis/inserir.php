<?php 
require_once("../../../conexao.php");
$tabela = 'imoveis';

$titulo = $_POST['titulo'];
$imoveis_tipo = $_POST['imoveis_tipo'];
$padrao = $_POST['padrao'];
$imoveis_bairro = $_POST['imoveis_bairro'];
$valor = $_POST['valor'];
$qtd_quartos = $_POST['qtd_quartos'];
$ocasiao = $_POST['ocasiao'];
$descricao = $_POST['descricao'];
$cidade = $_POST['cidade'];
$foto = $_FILES['foto'];
$id = $_POST['id'];


//validar imovel duplicado
$query = $pdo->query("SELECT * FROM $tabela where titulo = '$titulo'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Título já Cadastrado, escolha Outro!';
	exit();
}
echo "TOTAL FOTOS: ".count($foto)."\r\n";
print_r($foto);

exit();
for($cont = 0; $cont < count($foto); $cont++){
	
	echo "cont:  {$cont} -";
	//print_r($foto);

	$pasta_destino = '../../imagens_imoveis/'.$foto[($cont)];

	if(move_uploaded_file($foto[$cont], $pasta_destino)){
		echo 'foto arquivada';
	
		
	}else{
		echo 'foto não arquivada';
	}
	
}
exit();


if($id == ""){

	$query = $pdo->prepare("INSERT INTO $tabela SET titulo = :titulo, imoveis_tipo = :imoveis_tipo, padrao = :padrao, imoveis_bairro = :imoveis_bairro, valor = :valor,  qtd_quartos = :qtd_quartos, ocasiao = :ocasiao,  descricao = :descricao, cidade_id = :cidade_id");
	$query->bindValue(":titulo", "$titulo");
	$query->bindValue(":imoveis_tipo", "$imoveis_tipo");
	$query->bindValue(":padrao", "$padrao");
	$query->bindValue(":imoveis_bairro", "$imoveis_bairro");
	$query->bindValue(":valor", "$valor");
	$query->bindValue(":qtd_quartos", "$qtd_quartos");
	$query->bindValue(":ocasiao", "$ocasiao");
	$query->bindValue(":descricao", "$descricao");
	$query->bindValue(":cidade_id", "$cidade");
	$query->execute();
	//$ult_id = $pdo->lastInsertId();


	
	
	/**$query = $pdo->prepare("INSERT INTO fotos SET foto = :foto, imoveis_id = '$ult_id'");

	$query->bindValue(":foto", "$foto");
	$query->execute(); */


}else{
	$query = $pdo->prepare("UPDATE $tabela SET titulo = :titulo, imoveis_tipo = :imoveis_tipo, padrao = :padrao, imoveis_bairro = :imoveis_bairro, valor = :valor,  qtd_quartos = :qtd_quartos, ocasiao = :ocasiao, descricao = :descricao, cidade_id = :cidade_id WHERE id = '$id'");
	$query->bindValue(":titulo", "$titulo");
	$query->bindValue(":imoveis_tipo", "$imoveis_tipo");
	$query->bindValue(":padrao", "$padrao");
	$query->bindValue(":imoveis_bairro", "$imoveis_bairro");
	$query->bindValue(":valor", "$valor");
	$query->bindValue(":qtd_quartos", "$qtd_quartos");
	$query->bindValue(":ocasiao", "$ocasiao");
	$query->bindValue(":descricao", "$descricao");
	$query->bindValue(":cidade_id", "$cidade");
$query->execute();
}



echo 'Salvo com Sucesso';

 ?>