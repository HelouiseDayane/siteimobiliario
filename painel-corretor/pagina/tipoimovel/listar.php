<?php 

require_once("../../../conexao.php");
$tabela = 'tipos';

echo <<<HTML
<small>
HTML;

$query = $pdo->query("SELECT * FROM $tabela ORDER BY id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){

	echo <<<HTML


	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	
	<th>Tipo</th>
	<th class="esc">Padrão</th> 
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>
HTML;

for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
	$id = $res[$i]['id'];
	$tipo_imoveis= $res[$i]['tipo_imoveis'];
	$padrao_imoveis= $res[$i]['padrao_imoveis'];



echo <<<HTML
<tr class="{$classe_linha}"> 
	
		<td class="esc">{$tipo_imoveis}</td>		
		<td class="esc">{$padrao_imoveis}</td>		
		
		<td>
		<big><a href="#" onclick="editar('{$id}', '{$tipo_imoveis}', '{$padrao_imoveis}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$tipo_imoveis}', '{$padrao_imoveis}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>



		<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>



		<big><a href="#" onclick="ativar('{$id}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone} text-success"></i></a></big>


		</td>
</tr>
HTML;
}

echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>	
HTML;

}else{
	echo 'Não possui nenhum registro cadastrado!';
}
echo <<<HTML
</small>
HTML;


?>


<script type="text/javascript">

	$(document).ready( function () {
		$('#tabela').DataTable({
			"ordering": false,
			"stateSave": true,
		});
		$('#tabela_filter label input').focus();
	} );
	
	function editar(id, tipo, padrao){

		$('#id').val(id);
		$('#tipo').val(tipo);
		$('#padrao').val(padrao);
		
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}


	function mostrar(tipo, padrao){
		
		$('#nome_mostrar').text(tipo);
		$('#cpf_mostrar').text(padrao);

		$('#modalMostrar').modal('show');
		
	}


	function limparCampos(){
		$('#id').val('');
		$('#tipo').val('');
		$('#padrao').val('');	
	}




</script>

