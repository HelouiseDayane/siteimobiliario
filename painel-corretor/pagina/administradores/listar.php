<?php 
require_once("../../../conexao.php");
$tabela = 'administradores';

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
	<th class="esc">Telefone</th> 
	<th class="esc">Email</th> 	
	<th class="esc">Cadastro</th>
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>
HTML;

for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
	$id = $res[$i]['id'];
	$nome = $res[$i]['nome'];
	$cpf = $res[$i]['cpf'];
	$email = $res[$i]['email'];
	$telefone = $res[$i]['telefone'];
	$foto = $res[$i]['foto'];
	$data = $res[$i]['data'];
	$ativo = $res[$i]['ativo'];

	$dataF = implode('/', array_reverse(explode('-', $data)));


	if($ativo == 'Sim'){
			$icone = 'fa-check-square';
			$titulo_link = 'Desativar Item';
			$acao = 'Não';
			$classe_linha = '';
		}else{
			$icone = 'fa-square-o';
			$titulo_link = 'Ativar Item';
			$acao = 'Sim';
			$classe_linha = 'text-muted';
		}

echo <<<HTML
<tr class="{$classe_linha}"> 
		<td>
		<img src="img/perfil/{$foto}" width="27px" class="mr-2">
		{$nome}	
		</td> 
		<td class="esc">
		{$telefone}
		<a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=55{$telefone}" title="Chamar no Whatsapp"><i class="fa fa-whatsapp verde"></i></a>
		</td>
		<td class="esc">{$email}</td>		
		<td class="esc">{$dataF}</td>
		
		<td>
		<big><a href="#" onclick="editar('{$id}', '{$nome}', '{$cpf}','{$email}','{$telefone}', '{$foto}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$nome}', '{$cpf}','{$email}','{$telefone}', '{$foto}', '{$dataF}', '{$ativo}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>



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
	
	function editar(id, nome, cpf, email, telefone, foto){

		$('#id').val(id);
		$('#nome').val(nome);
		$('#telefone').val(telefone);
		$('#cpf').val(cpf);
		$('#email').val(email);	
		
		$('#foto').val('');
		$('#target').attr('src','img/perfil/' + foto);		
		
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}


	function mostrar(nome, cpf, email, telefone, foto, data, cartao, ativo){
		
		$('#nome_mostrar').text(nome);
		$('#telefone_mostrar').text(telefone);
		$('#cpf_mostrar').text(cpf);
		$('#email_mostrar').text(email);		
		$('#data_mostrar').text(data);
		$('#ativo_mostrar').text(ativo);		
		$('#target_mostrar').attr('src','img/perfil/' + foto);

		$('#modalMostrar').modal('show');
		
	}


	function limparCampos(){
		$('#id').val('');
		$('#nome').val('');
		$('#telefone').val('');
		$('#cpf').val('');
		$('#email').val('');		
		$('#foto').val('');
		$('#target').attr('src','img/perfil/sem-perfil.jpg');		
	}




</script>

