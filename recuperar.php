<?php 
require_once("conexao.php");

$email = $_POST['recuperar'];


$query = $pdo->prepare("SELECT * FROM usuario where usuario = :email ");
$query->bindValue(":email", "$email");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) == 0){
	echo 'Não possui cadastro com este email ou cpf digitado!';
	exit();
}else{
	$email = $res[0]['usuario'];
	$senha = $res[0]['senha'];
}

//ENVIAR O EMAIL COM A SENHA
    $destinatario = $email;
    $assunto = $nome_sistema . ' - Recuperação de Senha';
    $mensagem = utf8_decode('Sua senha é ' .$senha);
    $cabecalhos = "From: ".$email_sistema;
   
    mail($destinatario, $assunto, $mensagem, $cabecalhos);



?>