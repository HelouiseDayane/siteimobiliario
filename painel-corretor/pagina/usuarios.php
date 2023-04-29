<?php 
require_once('../conexao.php');
require_once('verificar.php');
$pag = 'usuarios';

if(@$_SESSION['nivel'] != 'Administrador'){
	echo "<script>window.location='../index.php'</script>";
	exit();
}
 ?>

 

 <div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>


<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>

