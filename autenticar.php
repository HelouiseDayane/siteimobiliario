<?php
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* define o prazo do cache em 120 minutos */
session_cache_expire(120);
$cache_expire = session_cache_expire();
/* inicia a sessão */
@session_start();

require_once('conexao.php');
echo "<script>console.log('aqui esta sendo validado')</script>";



if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
    !empty($_POST['email']) &&
    !empty($_POST['senha'])) {

        echo "<script>console.log('Metodo POST recebido!')</script>"; 

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_crip = md5($senha);


    $query = $pdo->prepare("SELECT * FROM usuario where email = :email and senha = :senha ");
    $query->bindValue(":email", "$email");
    $query->bindValue(":senha", "$senha_crip");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    // echo @count($res); exit();
    if(@count($res) > 0){

    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nivel'] = $res[0]['nivel'];
        $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['email'] = $res[0]['email'];

        echo "<script>window.location='painel-corretor'</script>";
    

    }
    else{
        
        echo "<script>window.alert('Dados Incorretos!')</script>";
        echo "<script>window.location='index.php'</script>";
        
    }
}else{
    echo "<script>console.log('nenhum formulario POST foi enviado')</script>";
} 
 ?>