<?php 
require_once("../conexao.php");

$nome = $_POST['nome_usu'];
$email = $_POST['email_usu'];
$senha = $_POST['senha_usu'];
$senha_crip = md5($senha);
$cpf = $_POST['cpf_usu'];
$id = $_POST['id_usu'];
$foto = $_POST['foto_usu'];

//validar email duplicado
$query = $pdo->query("SELECT * FROM usuarios where usuario = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Email já Cadastrado, escolha Outro!';
	exit();
}


//validar cpf duplicado
$query = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'CPF já Cadastrado, escolha Outro!';
	exit();
}




//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['foto']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = 'img/perfil/' .$nome_img;

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






//atualizar os dados do usuário
$query = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, usuario = :usuario, senha = :senha, senha_crip = '$senha_crip', foto = '$foto' where id = '$id'");
$query->bindValue(":nome", "$nome");
$query->bindValue(":usuario", "$email");
$query->bindValue(":cpf", "$cpf");
$query->bindValue(":senha", "$senha");
$query->execute();


//verificar se o usuário é professor ou administrador
$query = $pdo->query("SELECT * FROM usuarios where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nivel = $res[0]['nivel'];
$id_pessoa = $res[0]['id_pessoa'];

if($nivel == 'Administrador'){
	$tabela = 'administradores';
}else{
	$tabela = 'professores';
}

$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, cpf = :cpf, email = :usuario, foto = '$foto' where id = '$id_pessoa'");

$query->bindValue(":nome", "$nome");
$query->bindValue(":usuario", "$email");
$query->bindValue(":cpf", "$cpf");
$query->execute();

echo 'Editado com Sucesso';

 ?>