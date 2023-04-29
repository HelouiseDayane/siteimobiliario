<?php 
require_once('conexao.php');
$senha = '123';
$senha_crip = md5($senha);

//VERIFICAR SE EXISTE UM USUÁRIO ADMINISTRADOR CRIADO NO BANCO
$query = $pdo->query("SELECT * FROM usuario");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) == 0){
	//CRIAR UM USUÁRIO ADMINISTRADOR CASO NÃO EXISTA NENHUM USUÁRIO
	$pdo->query("INSERT INTO usuario SET nome = 'Helouise',  email = '$email_sistema', senha = '$senha_crip', nivel = 'Administrador'");

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
  	<link rel="shortcut icon" href="images/icologin.ico" type="image/x-icon">
    <title>Acesso do Corretor</title>
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
                <input type="text" class="form-control" id="email" name="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" >
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                     <div class="control__indicator"></div>
                </label>
                <a href="" class="text-danger" data-toggle="modal" data-target="#modalRecuperar">
								Recuperar Senha? 
							</a>
              </div>

        

              <input type="submit" value="Acessar" class="btn btn-block btn-primary">

			  

   
            </form>
            </div>
      
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

<!-- Modal Recuperar Senha -->
<div class="modal fade" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form-recuperar">
			<div class="modal-body">
									

					<div class="form-group">
						<label for="exampleFormControlInput1"><small>E-mail </small></label>
						<input type="text" class="form-control" name="recuperar" placeholder="Digite o email no qual foi cadastrado" required>
					</div>			

				<br><small><div align="center" id="mensagem-recuperar"></div></small>	
				
			</div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Recuperar</button>
			</div>
			</form>
		</div>
	</div>
</div>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>









 <script type="text/javascript">
	$("#form-recuperar").submit(function () {
		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "recuperar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-recuperar').text('');
				$('#mensagem-recuperar').removeClass()
				if (mensagem.trim() == "") {
					//$('#btn-fechar-usu').click();
					$('#mensagem-recuperar').addClass('text-success')
					$('#mensagem-recuperar').text('Senha Enviada para o Email!')						

				} else {

					if(mensagem.trim() == "Não possui cadastro com este email ou cpf digitado!"){
						$('#mensagem-recuperar').addClass('text-danger')
						$('#mensagem-recuperar').text(mensagem)
					}else{
						$('#mensagem-recuperar').addClass('text-danger')
						$('#mensagem-recuperar').text('Você não está conectado a um servidor SMTP, pode ser que esteja em um servidor local (não é possível disparar e-mail no servidor local) ou o seu servidor de hospedagem está com este serviço desativado, precisa ativá-lo!')
					}

					
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>