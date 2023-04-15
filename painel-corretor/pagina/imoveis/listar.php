<?php 
require_once("../../../conexao.php");
$tabela = 'imoveis';

echo <<<HTML
<small>
HTML;

$query = $pdo->query("SELECT imoveis.id id, 
imoveis.titulo tit, 
imoveis.imoveis_bairro bairro_id,
imoveis.cidade_id cidade_id,
 imoveis.imoveis_tipo tipo_id, 
 imoveis.padrao pad,
 imoveis.qtd_quartos qtd,
 imoveis.valor val,
 imoveis.descricao descri,
 bairros.nome bai,
 bairros.id,
 tipos.id tipos_id, 
 tipos.tipo_imoveis tip,
 cidades.id, 
 cidades.nome cid,
 imoveis.ocasiao oca
 FROM $tabela
 inner join tipos on tipos.id = imoveis.imoveis_tipo 
 inner join bairros on bairros.id  = imoveis.imoveis_bairro
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
	<th class="esc">Ocasião</th>	
	<th class="">Valor</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>
HTML;

for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
	$id = $res[$i]['id'];
	$titulo = $res[$i]['tit'];
	$tipos = $res[$i]['tip'];
	$padrao = $res[$i]['pad'];
	$bairro = $res[$i]['bai'];
	$cidade = $res[$i]['cid'];
	$qtd_quartos = $res[$i]['qtd'];
	$ocasiao = $res[$i]['oca'];
	$valor = $res[$i]['val'];
	$descricao = $res[$i]['descri'];
	$tipo_id = $res[$i]['tipo_id'];
	$cidade_id = $res[$i]['cidade_id'];
	$bairro_id = $res[$i]['bairro_id'];


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
		<td class="esc">{$ocasiao}</td>
		<td class="esc">{$valor}</td>
		
		<td>
		<big><a href="#" onclick="editar('{$id}', '{$titulo}', '{$tipo_id}','{$bairro_id}','{$cidade_id}','{$padrao}','{$qtd_quartos}','{$ocasiao}','{$valor}','{$descricao}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

	


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

	function editar(id, titulo, tipo_id,bairro_id, cidade_id,padrao,  qtd_quartos,ocasiao, valor, descricao){

		$('#id').val(id);
		$('#titulo').val(titulo);
		$('#tipo_id').val(tipo_id);
		$('#bairro_id').val(bairro_id);
		$('#cidade_id').val(cidade_id);
		$('#padrao').val(padrao);
		$('#qtd_quartos').val(qtd_quartos);
		$('#ocasiao').val(ocasiao);
		$('#valor').val(valor);
		$('#descricao').val(descricao);
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
