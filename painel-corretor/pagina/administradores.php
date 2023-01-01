<?php 
require_once('../conexao.php');
require_once('verificar.php');
$pag = 'administradores';

if(@$_SESSION['nivel'] != 'Administrador'){
	echo "<script>window.location='../index.php'</script>";
	exit();
}
 ?>


  <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Administrador</button>


 <div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>





<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Nome</label> 
								<input type="text" class="form-control" name="nome" id="nome" required> 
							</div>						
						</div>

						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Telefone</label> 
								<input type="text" class="form-control" name="telefone" id="telefone"> 
							</div>						
						</div>		




					</div>


					<div class="row">
						<div class="col-md-6">						
							<div class="form-group"> 
								<label>CPF</label> 
								<input type="text" class="form-control" name="cpf" id="cpf"> 
							</div>						
						</div>

							<div class="col-md-6">						
							<div class="form-group"> 
								<label>Email</label> 
								<input type="email" class="form-control" name="email" id="email" required> 
							</div>						
						</div>
					</div>
				
					
				

					<div class="row">			
						

						<div class="col-md-8">						
							<div class="form-group"> 
								<label>Foto</label> 
								<input type="file" name="foto" onChange="carregarImg();" id="foto">
							</div>						
						</div>
						<div class="col-md-4">
							<div id="divImg">
								<img src="img/perfil/sem-perfil.jpg"  width="100px" id="target">									
							</div>
						</div>

					</div>				
					

					<br>
					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>					

				</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>



			</form>

		</div>
	</div>
</div>






<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"><span id="nome_mostrar"> </span></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>CPF: </b></span>
							<span id="cpf_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Telefone: </b></span>
							<span id="telefone_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-7">							
							<span><b>Email: </b></span>
							<span id="email_mostrar"></span>							
						</div>

						<div class="col-md-5">							
							<span><b>Data Cadastro: </b></span>
							<span id="data_mostrar"></span>
						</div>
						
					</div>

					

					<div class="row">
						<div class="col-md-12" align="center">		
							<img  width="200px" id="target_mostrar">	
						</div>
					</div>
					
								

				</div>


		</div>
	</div>
</div>




<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	function carregarImg() {
		var target = document.getElementById('target');
		var file = document.querySelector("#foto").files[0];

		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>
