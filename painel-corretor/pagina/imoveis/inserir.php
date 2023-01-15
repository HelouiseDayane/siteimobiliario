<?php 
require_once("../../../conexao.php");
$tabela = 'imoveis';

$titulo = $_POST['titulo'];
$imoveis_tipo = $_POST['imoveis_tipo'];
$padrao = $_POST['padrao'];
$imoveis_bairro = $_POST['imoveis_bairro'];
$valor = $_POST['valor'];
$qtd_quartos = $_POST['qtd_quartos'];
$descricao = $_POST['descricao'];
$cidade = $_POST['cidade'];
$id = $_POST['id'];


//validar imovel duplicado
$query = $pdo->query("SELECT * FROM $tabela where titulo = '$titulo'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Título já Cadastrado, escolha Outro!';
	exit();
}
/*
$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	$foto = $res[0]['foto'];
}else{
	$foto = 'sem-perfil.jpg';
}


SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['foto']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = '../../img/perfil/' .$nome_img;

$imagem_temp = @$_FILES['foto']['tmp_name']; 

if(@$_FILES['foto']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
	
			//EXCLUO A FOTO ANTERIOR
			if($foto != "sem-perfil.jpg"){
				@unlink('img/perfil/'.$foto);
			}

			$foto = $nome_img;
		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}
*/

if($id == ""){

	$query = $pdo->prepare("INSERT INTO $tabela SET titulo = :titulo, imoveis_tipo = :imoveis_tipo, padrao = :padrao, imoveis_bairro = :imoveis_bairro, valor = :valor,  qtd_quartos = :qtd_quartos,  descricao = :descricao, cidade_id = :cidade_id");
	$query->bindValue(":titulo", "$titulo");
	$query->bindValue(":imoveis_tipo", "$imoveis_tipo");
	$query->bindValue(":padrao", "$padrao");
	$query->bindValue(":imoveis_bairro", "$imoveis_bairro");
	$query->bindValue(":valor", "$valor");
	$query->bindValue(":qtd_quartos", "$qtd_quartos");
	$query->bindValue(":descricao", "$descricao");
	$query->bindValue(":cidade_id", "$cidade");
$query->execute();

}else{
	$query = $pdo->prepare("UPDATE $tabela SET titulo = :titulo, imoveis_tipo = :imoveis_tipo, padrao = :padrao, imoveis_bairro = :imoveis_bairro, valor = :valor,  qtd_quartos = :qtd_quartos,  descricao = :descricao, cidade_id = :cidade_id WHERE id = '$id'");
	$query->bindValue(":titulo", "$titulo");
	$query->bindValue(":imoveis_tipo", "$imoveis_tipo");
	$query->bindValue(":padrao", "$padrao");
	$query->bindValue(":imoveis_bairro", "$imoveis_bairro");
	$query->bindValue(":valor", "$valor");
	$query->bindValue(":qtd_quartos", "$qtd_quartos");
	$query->bindValue(":descricao", "$descricao");
	$query->bindValue(":cidade_id", "$cidade");
$query->execute();
}



echo 'Salvo com Sucesso';

 ?>