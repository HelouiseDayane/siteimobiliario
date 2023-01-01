<?php 
require_once("../../../conexao.php");
$tabela = 'usuarios';

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
	<th>Nome</th>	
	<th class="">Email</th> 
	<th class="">Senha</th>	
	<th class="esc">CPF</th>
	<th class="esc">Nível</th>
	<th class="esc">Data</th>	
	
	
	</tr> 
	</thead> 
	<tbody>
HTML;

for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
	$id = $res[$i]['id'];
	$nome = $res[$i]['nome'];
	$cpf = $res[$i]['cpf'];
	$email = $res[$i]['usuario'];	
	$senha = $res[$i]['senha'];	
	$nivel = $res[$i]['nivel'];	
	$data = $res[$i]['data'];	
	$foto = $res[$i]['foto'];	
	$ativo = $res[$i]['ativo'];

	if($nivel == 'Administrador'){
		$senha = '*********';
	}

	$dataF = implode('/', array_reverse(explode('-', $data)));


	if($ativo == 'Sim'){			
			$classe_linha = '';
		}else{			
			$classe_linha = 'text-muted';
		}

echo <<<HTML
<tr class="{$classe_linha}"> 
		<td>
		<img src="img/perfil/{$foto}" width="27px" class="mr-2">
		{$nome}	
		</td> 		
		<td class="">{$email}</td>
		<td class="">{$senha}</td>
		<td class="esc">{$cpf}</td>	
		<td class="esc">{$nivel}</td>		
		<td class="esc">{$dataF}</td>
		
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
	
	




</script>

