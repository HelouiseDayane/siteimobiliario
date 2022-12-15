<?php 
require_once('conexao.php');
$senha = '123';
$senha_crip = md5($senha);

//VERIFICAR SE EXISTE UM USUÁRIO ADMINISTRADOR CRIADO NO BANCO
$query = $pdo->query("SELECT * FROM usuario");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) == 0){
	//CRIAR UM USUÁRIO ADMINISTRADOR CASO NÃO EXISTA NENHUM USUÁRIO
	$pdo->query("INSERT INTO usuario SET usuario_nome = 'Helouise',  usuario_email = '$email_sistema', usuario_senha = '$senha_crip'");

	}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login Corretor</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Entrar</h3>
              <p class="mb-4">Acesso restrito</p>
            </div>
            <form action="autenticar.php" method="post">
              <div class="form-group first">
                <label for="username">Usuario (Email)</label>
                <input type="text" class="form-control" id="usuario" name="usuario">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" >
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Lembre-me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Esqueceu a senha</a></span> 
              </div>

        

              <input type="submit" value="Acessar" class="btn btn-block btn-primary">

   
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>