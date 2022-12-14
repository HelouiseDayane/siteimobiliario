<?php
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* define o prazo do cache em 120 minutos */
session_cache_expire(120);
$cache_expire = session_cache_expire();
/* inicia a sessão */
@session_start();

require_once('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->prepare("SELECT * FROM usuarios where (  usuario_email = :usuario and usuario_senha = :senha");
$query->bindValue(":usuario", "$usuario");
$query->bindValue(":senha", "$senha_crip");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){

		//recuperar o nível do usuário
	/**if($res[0]['ativo'] == 'Não'){
		echo "<script>window.alert('Seu Acesso foi desativado pelo Administrador!')</script>";
        echo "<script>window.location='index.php'</script>";
        exit();
        }
    
        //recuperar o nível do usuário
        $_SESSION['nivel'] = $res[0]['nivel'];
        $_SESSION['cpf'] = $res[0]['cpf'];
        $_SESSION['id'] = $res[0]['id'];
        $_SESSION['nome'] = $res[0]['nome'];
    
        
    
        if($_SESSION['nivel'] == 'Administrador'){
            echo "<script>window.location='painel-admin'</script>";
        }
    
        if($_SESSION['nivel'] == 'Professor'){
            echo "<script>window.location='painel-admin'</script>";
        }
    
        if($_SESSION['nivel'] == 'Aluno'){
            echo "<script>window.location='painel-aluno'</script>";
        } **/
        echo "<script>window.location='painel-corretor'</script>";

}else{
	echo "<script>window.alert('Dados Incorretos!')</script>";
	echo "<script>window.location='index.php'</script>";
}

 ?>