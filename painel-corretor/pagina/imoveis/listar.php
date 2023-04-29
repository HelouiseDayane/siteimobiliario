<?php 
require_once("../../../conexao.php");
$tabela = 'imoveis';

echo <<<HTML
<small>
HTML;

$query = $pdo->query("
SELECT 
	imoveis.id 					AS id, 
	imoveis.titulo 				AS tit, 
	imoveis.imoveis_bairro 		AS bairro_id,
	imoveis.cidade_id 			AS cidade_id,
	imoveis.imoveis_tipo 		AS tipo_id, 
	imoveis.padrao 				AS pad,
	imoveis.qtd_quartos 		AS qtd,
	imoveis.garagem 		AS garagem,
	imoveis.valor 				AS val,
	imoveis.descricao 			AS descri,
	bairros.nome 				AS bai,
	bairros.id 					AS bairros_id,
	tipos.id 					AS tipos_id, 
	tipos.tipo_imoveis 			AS tip,
	cidades.id 					AS cidades_id, 
	cidades.nome 				AS cid,
	imoveis.ocasiao 			AS oca
 FROM $tabela
 inner join tipos on tipos.id = imoveis.imoveis_tipo 
 left join bairros on bairros.id  = imoveis.imoveis_bairro
 inner join cidades on cidades.id = imoveis.cidade_id
ORDER BY imoveis.id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th class="esc">Titulo</th> 
	<th class="esc">Tipo</th> 
	<th class="esc">Padrao</th> 	
	<th class="esc">Bairro</th>
	<th class="esc">Cidade</th>	
	<th class="">Quartos</th>	
	<th class="">Garagem</th>	
	<th class="esc">Ocasião</th>	
	<th class="">Valor</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>
HTML;


foreach($res as $key => $value){
	$id = $value['id'];
	$titulo = $value['tit'];
	$tipos = $value['tip'];
	$padrao = $value['pad'];
	$bairro = $value['bai'];
	$cidade = $value['cid'];
	$qtd_quartos = $value['qtd'];
	$garagem = $value['garagem'];
	$ocasiao = $value['oca'];
	$valor = $value['val'];
	$descricao = $value['descri'];
	$tipo_id = $value['tipo_id'];
	$cidade_id = $value['cidade_id'];
	$bairro_id = $value['bairro_id'];


echo <<<HTML
<tr> 
		<td>
		{$titulo}	
		</td> 
		<td class="esc">{$padrao}</td>	
		<td class="esc">{$tipos}</td>		
		<td class="esc">{$bairro}</td>
		<td class="esc">{$cidade}</td>
		<td class="esc">{$qtd_quartos}</td>
		<td class="esc">{$garagem}</td>
		<td class="esc">{$ocasiao}</td>
		<td class="esc">{$valor}</td>
		
		<td>
		<big><a href="#" onclick="editar('{$id}', '{$titulo}', '{$tipo_id}','{$bairro_id}','{$cidade_id}','{$padrao}','{$qtd_quartos}','{$garagem}','{$ocasiao}','{$valor}','{$descricao}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

	


		<li class="dropdown head-dpdn2" style="display: inline-block;">
			<a href="#" title="{$id}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

			<ul class="dropdown-menu" style="margin-left:-230px;">
				<li>
					<div class="notification_desc2">
					<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}')"><b class="text-danger" style="font-size:18px;padding-left:60px;">SIM</b></a></p>
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

	function editar(id, titulo, tipo_id, bairro_id, cidade_id, padrao, qtd_quartos, ocasiao, valor, descricao, garagem){

		/*
		console.log(
			id, titulo, tipo_id, bairro_id, cidade_id, padrao, qtd_quartos, ocasiao, valor, descricao, garagem
		);/**/
		$('#modalForm form input[type=file]').removeAttr('required');
		$('#modalForm form select option').removeAttr('selected');

		$('#id').val(id);
		$('#titulo').val(titulo);
		$('#modalForm form #imoveis_tipo option[value='+tipo_id+']').attr('selected', true);
		$('#modalForm form #cidade option[value='+cidade_id+']').attr('selected', true);
		$('#modalForm form #padrao option[value='+padrao+']').attr('selected', true);
		$('#modalForm form #ocasiao option[value='+ocasiao+']').attr('selected', true);
		$('#modalForm form #imoveis_bairro option[value='+bairro_id+']').attr('selected', true);
		$('#modalForm form #qtd_quartos option[value='+qtd_quartos+']').attr('selected', true);
		$('#valor').val(valor);
		$('#descricao').val(descricao);
		$('#modalForm form #garagem option[value='+garagem+']').attr('selected', true);
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function limparCampos(){
		$('#id').val('');
		$('#titulo').val('');
		$('#tipos').val('');
		$('#bairro').val('');
		$('#cidade').val('');
		$('#padrao').val('');
		$('#descricao').val('');
		$('#qtd_quartos').val('');
		$('#ocasiao').val('');
		$('#valor').val('');		
	}



	</script>
