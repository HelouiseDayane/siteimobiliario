<?php 
require_once("../conexao.php");

$nome_sistema = $_POST['nome_sistema'];
$email_sistema = $_POST['email_sistema'];
$tel_sistema = $_POST['tel_sistema'];
$cnpj_sistema = $_POST['cnpj_sistema'];
$tipo_chave_pix = $_POST['tipo_chave_pix_sistema'];
$chave_pix = $_POST['chave_pix'];


//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../img/logo.png';
$imagem_temp = @$_FILES['logo']['tmp_name']; 
if(@$_FILES['logo']['name'] != ""){
	$ext = pathinfo(@$_FILES['logo']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão da imagem para a Logo é somente *PNG';
		exit();
	}

}


//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../img/favicon.ico';
$imagem_temp = @$_FILES['favicon']['tmp_name']; 
if(@$_FILES['favicon']['name'] != ""){
$ext = pathinfo(@$_FILES['favicon']['name'], PATHINFO_EXTENSION);   
	if($ext == 'ico'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão do ícone favicon é somente *ICO';
		exit();
	}
}



//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../img/logo_rel.jpg';
$imagem_temp = @$_FILES['imgRel']['tmp_name']; 
if(@$_FILES['imgRel']['name'] != ""){
$ext = pathinfo(@$_FILES['imgRel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão para a logo do relatório é apenas jpg';
		exit();
	}
}



//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../img/qrcode.jpg';
$imagem_temp = @$_FILES['imgQRCode']['tmp_name']; 
if(@$_FILES['imgQRCode']['name'] != ""){
$ext = pathinfo(@$_FILES['imgQRCode']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão para a imagem do qrcode pix é apenas jpg';
		exit();
	}
}



//atualizar os dados do config
$query = $pdo->prepare("UPDATE config SET nome_sistema = :nome_sistema, tel_sistema = :tel_sistema, email_sistema = :email_sistema, cnpj_sistema = :cnpj_sistema, tipo_chave_pix = '$tipo_chave_pix', chave_pix = :chave_pix, logo = 'logo.png', icone = 'favicon.ico', logo_rel = 'logo_rel.jpg', qrcode_pix = 'qrcode.jpg'");

$query->bindValue(":nome_sistema", "$nome_sistema");
$query->bindValue(":email_sistema", "$email_sistema");
$query->bindValue(":tel_sistema", "$tel_sistema");
$query->bindValue(":cnpj_sistema", "$cnpj_sistema");
$query->bindValue(":chave_pix", "$chave_pix");
$query->execute();

echo 'Editado com Sucesso';

 ?>