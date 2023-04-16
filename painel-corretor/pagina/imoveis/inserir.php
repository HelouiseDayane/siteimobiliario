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
	$ult_id = $pdo->lastInsertId();


	//echo "FOTOS: ".count($foto['tmp_name'])."\r\n"; echo "FOTOS NOME: ".$foto['name'][0]."\r\n";

	if(!empty($foto['tmp_name'][0])){ 
		for($cont = 0; $cont < count($foto['tmp_name']); $cont++){
			$ext=explode('.',$foto['name'][($cont)]); $ext=$ext[count($ext)-1];
			$pasta_destino = '../../imagens_imoveis/'.date("d-m-Y_H.i.s")."_{$ult_id}_".($cont+1).uniqid().".{$ext}";		
			$nome_da_foto=explode('/',$pasta_destino);$nome_da_foto=$nome_da_foto[count($nome_da_foto)-1];
			 //echo "DEBUG: \r\n{$pasta_destino} \r\n[{$cont}]   \r\n//// {$ext} \r\n--- {$nome_da_foto} ---------------------------------------------- \r\n\r\n\r\n";
			if(move_uploaded_file($foto['tmp_name']["{$cont}"], $pasta_destino)){
				$query = $pdo->prepare("INSERT INTO fotos SET foto = :foto, imoveis_id = '$ult_id'");
				$query->bindValue(":foto", "$nome_da_foto");
				$query->execute();		
				//$resp =  'foto arquivada';		
			}else{
				//$erro =  'foto não arquivada';
			}/**/			
		}
	}else{
		//echo "DEBUG: SEM FOTOS";
	}
		
	


}else{
	$_SQL = "
		UPDATE {$tabela} SET 
			titulo 				= :titulo, 
			imoveis_tipo 		= :imoveis_tipo, 
			padrao 				= :padrao, 
			imoveis_bairro 		= :imoveis_bairro, 
			valor 				= :valor,  
			qtd_quartos 		= :qtd_quartos, 
			ocasiao 			= :ocasiao, 
			descricao 			= :descricao, 
			cidade_id 			= :cidade_id 
		WHERE 
			id = :id";
		$query = $pdo->prepare($_SQL);
			$query->bindValue(":titulo", "{$titulo}");
			$query->bindValue(":imoveis_tipo", "{$imoveis_tipo}");
			$query->bindValue(":padrao", "{$padrao}");
			$query->bindValue(":imoveis_bairro", "{$imoveis_bairro}");
			$query->bindValue(":valor", "{$valor}");
			$query->bindValue(":qtd_quartos", "{$qtd_quartos}");
			$query->bindValue(":ocasiao", "{$ocasiao}");
			$query->bindValue(":descricao", "{$descricao}");
			$query->bindValue(":cidade_id", "{$cidade}");
			$query->bindValue(":id", "{$id}");
		$query->execute();

	/*
	$query = $pdo->prepare("UPDATE fotos SET foto = :foto WHERE imoveis_id = '{$id}'");
		$query->bindValue(":foto", "{$nome_da_foto}");
		$query->execute();
	/**/
		 
	if(!empty($foto['tmp_name'][0])){
		for($cont = 0; $cont < count($foto['tmp_name']); $cont++){
			$ext=explode('.',$foto['name'][($cont)]); $ext=$ext[count($ext)-1];
			$pasta_destino = '../../imagens_imoveis/'.date("d-m-Y_H.i.s")."_{$id}_".($cont+1).uniqid().".{$ext}";	
			$nome_da_foto=explode('/',$pasta_destino);$nome_da_foto=$nome_da_foto[count($nome_da_foto)-1];
			//echo "DEBUG: \r\n{$pasta_destino} \r\n[{$cont}]   \r\n//// {$ext} \r\n--- {$nome_da_foto} ---------------------------------------------- \r\n\r\n\r\n";
			//*
			if(move_uploaded_file($foto['tmp_name'][($cont)], $pasta_destino)){

				$query = $pdo->prepare("INSERT INTO fotos SET foto = :foto, imoveis_id = '{$id}'");
				$query->bindValue(":foto", "$nome_da_foto");
				$query->execute();
		
				//$resp =  'foto arquivada';		
			}else{
				//$erro =  'foto não arquivada';
			}/**/
			
		}
	}else{
		//echo "DEBUG: SEM NOVAS FOTOS";
	}
}



echo 'Salvo com Sucesso 
		<SCRIPT> 
			$(\'#modalForm form select option\').removeAttr(\'selected\');
			$(\'#modalForm form\')[0].reset();   
			listar(); 
			$(\'#modalForm\').modal(\'hide\');
		</SCRIPT>
';


 ?>