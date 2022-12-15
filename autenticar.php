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

$query = $pdo->prepare("SELECT * FROM usuario where usuario_email = :usuario_email and usuario_senha = :usuario_senha ");
$query->bindValue(":usuario_email", "$usuario");
$query->bindValue(":usuario_senha", "$senha_crip");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){

    $_SESSION['nivel'] = $res[0]['nivel'];
	$_SESSION['usuario_nome'] = $res[0]['usuario_nome'];
    
        echo "<script>window.location='painel-corretor'</script>";
   

}else{
	echo "<script>window.alert('Dados Incorretos!')</script>";
	echo "<script>window.location='index.php'</script>";
}

 ?>