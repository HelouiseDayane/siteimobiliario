<?php 
require_once('../conexao.php');
require_once('verificar.php');
$pag = 'imoveis';


if(@$_SESSION['nivel'] != 'Administrador'){
	echo "<script>window.location='../index.php'</script>";
	exit();
}
 ?>


  <button onclick="
  		inserir();
		$('#modalForm form input[type=file]').attr('required', true);
		$('#modalForm form select option').removeAttr('selected');
	" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Imovel</button>


 <div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" enctype="multipart/form-data" id="form">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Titulo</label> 
								<input type="text" class="form-control" name="titulo" id="titulo" required> 
							</div>						
						</div>

						<div class="col-md-6">						
							<div class="form-group"> 
							<label>Tipo</label> 

							<select select class="form-control required" aria-label="Default select example"  name="imoveis_tipo" id="imoveis_tipo" required>
							<option disabled> Selecione</option>
								<?php										
								$query = $pdo->query("SELECT * FROM tipos");
								$tipos = $query->fetchAll(PDO::FETCH_ASSOC);
								foreach ( $tipos as $tipo) { ?>
								
									<option value="<?php echo $tipo['id']?>" > <?php echo $tipo['tipo_imoveis']?></option>
									<?php } ?>
								</select>
							</div>						
						</div>

						<div class="col-md-6">						
							<div class="form-group"> 
							<label>Cidade</label> 

							<select select class="form-control required" aria-label="Default select example"  name="cidade" id="cidade" required>
							<option disabled> Selecione</option>
								<?php										
								$query = $pdo->query("SELECT * FROM cidades");
								$tipos = $query->fetchAll(PDO::FETCH_ASSOC);
								foreach ( $tipos as $tipo) { ?>
								
									<option value="<?php echo $tipo['id']?>" > <?php echo $tipo['nome']?></option>
									<?php } ?>
								</select>
							</div>						
						</div>


						<div class="col-md-3">						
							<div class="form-group"> 
							<label>Padrão</label> 
								</br>
							<select select class="form-control required" aria-label="Default select example" name="padrao" id="padrao" required>
									
									<option> Alto</option>
									<option> Médio</option>
									<option> Básico</option>
								</select>
							</div>						
						</div>

						<div class="col-md-3">						
							<div class="form-group"> 
							<label>Ocasião</label> 
								</br>
							<select select class="form-control required" aria-label="Default select example" name="ocasiao" id="ocasiao" required>
									
									<option> Venda</option>
									<option> Aluguel</option>
									<option> Temporada</option>
								</select>
							</div>						
						</div>



						


					</div>


					<div class="row">
						<div class="col-md-6">						
							<div class="form-group">
							<label>Bairro</label> 
								</br>
							<select select  class="form-control required" aria-label="Default select example"  name="imoveis_bairro" id="imoveis_bairro" required >
							<option disabled> Selecione</option>
							<?php
																
							$query = $pdo->query("SELECT * FROM bairros");
							$bairros = $query->fetchAll(PDO::FETCH_ASSOC);
							foreach ( $bairros as $bairro) { ?>
								<option value="<?php echo $bairro['id']?>" > <?php echo $bairro['nome']?></option>
								<?php } ?>
							</select>
							</div>						
						</div>


						<div class="col-md-2">						
							<div class="form-group"> 
							<label>Quartos</label> 
								</br>
							<select select class="form-control required" aria-label="Default select example" name="qtd__quartos" id="qtd_quartos" required>
									
									<option> 1</option>
									<option> 2</option>
									<option> 3</option>
									<option> 4</option>
									<option>5+</option>
								</select>
							</div>						
						</div>
						<div class="col-md-2">						
							<div class="form-group"> 
							<label>Garagem</label> 
								</br>
							<select select class="form-control required" aria-label="Default select example" name="garagem" id="garagem" required>
									
									<option> 1</option>
									<option> 2</option>
									<option> 3</option>
									<option> 4</option>
									<option>5+</option>
								</select>
							</div>						
						</div>
					<div class="col-md-2">						
							<div class="form-group"> 
							<label for="dinheiro">Valor</label>
								<input type="text" class="form-control" name="valor" id="valor" required> 
							</div>						
						</div>	
						


					</div>



					<div class="row">
						

						<div class="col-md-12">						
							<div class="form-group"> 
								<label>Descricao</label> 
								<textarea class="form-control"  name="descricao" id="descricao" placeholder="Digite descrição do imõvel" minlength="10" required></textarea>
								
							</div>	

						</div>
						<input type="hidden" name="id" id="id"> 
						<small><div id="mensagem" align="center" class="mt-3"></div></small>					


					</div>	
					
					<div class="row">
						

						<div class="col-md-12">						
							<label>Fotos do Imovel</label> 
							<div class="form-group"> 
							<input name="foto[]" type="file"accept=".png, .jpg, .jpeg" required multiple="multiple">
							</div>	
						</div>			


					</div>				
							
								

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

			</div>
		</div>
	</div>
</div>




<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>

