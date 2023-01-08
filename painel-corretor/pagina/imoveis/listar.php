<?php 
require_once("../../../conexao.php");
$tabela = 'imoveis';

echo <<<HTML
<small>
HTML;

$query = $pdo->query("SELECT imoveis.titulo, imoveis.imoveis_bairro, imoveis.imoveis_tipo, tipos.tipo_imoveis, tipos.padrao_imoveis, bairros.nome, imoveis.qtd_quartos, imoveis.valor, imoveis.descricao
 FROM $tabela
 inner join tipos on tipos.id = imoveis.imoveis_tipo 
 inner join bairros on bairros.id  = imoveis.imoveis_bairro
ORDER BY imoveis.id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Nome</th>
	<th class="esc">Titulo</th> 
	<th class="esc">Tipo</th> 
	<th class="esc">Padrao</th> 	
	<th class="esc">Bairro</th>	
	<th class="">Quartos</th>	
	<th class="">Valor</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>
HTML;

for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
	$id = $res[$i]['id'];
	$titulo = $res[$i]['imoveis.titulo'];
	$tipos = $res[$i]['tipos.tipo_imoveis'];
	$padrao = $res[$i]['tipos.padrao_imoveis'];
	$bairro = $res[$i]['bairros.nome'];
	$quartos = $res[$i]['imoveis.qtd_quartos'];
	$valor = $res[$i]['imoveis.valor'];
	$descricao = $res[$i]['imoveis_descricao'];
	$imoveis_id = $res[$i]['imoveis.imoveis_bairro'];
	$tipo_id = $res[$i]['imoveis.imoveis_tipo'];



echo <<<HTML
<tr class="{$classe_linha}"> 
		<td>
		{$titulo}	
		</td> 
		<td>
		{$tipos}	
		</td> 
		<td class="esc">{$padrao}</td>		
		<td class="esc">{$bairro}</td>
		<td class="esc">{$quartos}</td>
		<td class="esc">{$valor}</td>
		
		<td>
		<big><a href="#" onclick="editar('{$id}', '{$titulo}', '{$tipo_id}','{$bairro_id}','{$quarto}','{$valor}','{$descricao}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar( '{$titulo}', '{$tipo_id}','{$bairro_id}','{$quarto}','{$valor}','{$descricao}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>



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

	function editar(id, titulo, tipo_id, bairro_id, quartos, valor, descricao){

		$('#id').val(id);
		$('#titulo').val(titulo);
		$('#tipo_id').val(tipo_id);
		$('#bairro_id').val(bairro_id);
		$('#quartos').val(quartos);
		$('#valor').val(valor);
		$('#descricao').val(descricao);
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}


	function mostrar(id, titulo, tipo_id, bairro_id, quartos, valor, descricao){
		

		$('#id').val(id);
		$('#titulo_mostrar').val(titulo);
		$('#tipo_id_mostrar').val(tipo_id);
		$('#bairro_id_mostrar').val(bairro_id);
		$('#quartos_mostrar').val(quartos);
		$('#valor_mostrar').val(valor);
		$('#descricao_mostrar').val(descricao);

		$('#modalMostrar').modal('show');
		
	}


	function limparCampos(){
		$('#id').val('');
		$('#titulo').val('');
		$('#tipo_id').val('');
		$('#bairro_id').val('');
		$('#descricao').val('');
		$('#quartos').val('');
		$('#valor').val('');		
	}



	</script>

