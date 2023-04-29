<?php 
require_once("../../../conexao.php");
$tabela = 'tipos';

$tipo_imoveis = $_POST['tipoimovel'];
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

	$query = $pdo->prepare("INSERT INTO $tabela SET tipo_imoveis = :tipo_imoveis");
$query->bindValue(":tipo_imoveis", "$tipo_imoveis");
$query->execute();


}else{
	$query = $pdo->prepare("UPDATE $tabela SET tipo_imoveis = :tipo_imoveis WHERE id = '$id'");
	$query->bindValue(":tipo_imoveis", "$tipo_imoveis");
$query->execute();


}

echo 'Salvo com Sucesso 
		<SCRIPT> 
			$(\'#modalForm form\')[0].reset();   
			listar(); 
			$(\'#modalForm\').modal(\'hide\');
		</SCRIPT>
';

 ?>