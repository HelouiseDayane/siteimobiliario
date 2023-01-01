<?php 
require_once('../conexao.php');
require_once('verificar.php');
$pag = 'tipoimovel';

if(@$_SESSION['nivel'] != 'Administrador'){
	echo "<script>window.location='../index.php'</script>";
	exit();
}
 ?>


  <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Tipo de Imóvel</button>


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
								<label>Tipo</label> 
								<input type="text" class="form-control" name="tipoimovel" id="tipoimovel"  placeholder="apartamento, casa, triplex..." required> 
							</div>						
						</div>

						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Padrão</label> 
								<input type="text" class="form-control" name="padrao" id="padrao" placeholder="alto, baixo, medio"> 
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
				<h4 class="modal-title" id="tituloModal"> </span></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Tipo: </b></span>
							<span id="tipo_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Padrão: </b></span>
							<span id="Padrão_mostrar"></span>
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

