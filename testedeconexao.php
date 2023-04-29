<?php
@require_once('conexao.php');

	    //*-- -------------------------------------------------------
		//-- lista imoveis
		//-- --------------------------------------------------------
		//-- --------------------------------------
		$sql = "SELECT * FROM `imoveis`;";
		$statment = $pdo->prepare($sql); $statment->execute(); 
		$IMOVEIS_DB = $statment->fetchAll(PDO::FETCH_ASSOC);
		//FOREACH($IMOVEIS_DB as $LIST_IEM):			echo "{$LIST_IEM['titulo']} \r\n";		ENDFOREACH;
		//while($n_contrato = $statment->fetch(PDO::FETCH_ASSOC)){ 		 	echo $n_contrato['titulo'] . "\r\n";		 }
		//echo "IMOVEIS: ";print_r($IMOVEIS_DB); echo "\r\n-------------------------------------\r\n";
		//-- -------------------------------------- /**/
		
?>