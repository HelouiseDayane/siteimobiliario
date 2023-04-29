<?php
require_once('conexao.php');
  // Recupera os parâmetros de pesquisa
  $ocasiao = $_GET['ocasiao'];
  $cidade = $_GET['cidade'];
  $bairro = $_GET['bairro'];
  $padrao = $_GET['padrao'];
  $tipo = $_GET['tipos'];
  $qtd_quartos = $_GET['qtd_quartos'];
  $garagem = $_GET['garagem'];

$sql = "
    SELECT 
    imoveis.id 					AS id, 
    imoveis.titulo 				AS tit, 
    imoveis.imoveis_bairro 		AS bairro_id,
    imoveis.cidade_id 			AS cidade_id,
    imoveis.imoveis_tipo 		AS tipo_id, 
    imoveis.padrao 				AS pad,
    imoveis.qtd_quartos 		AS qtd,
    imoveis.garagem      		AS garagem,
    imoveis.valor 				AS val,
    imoveis.descricao 			AS descri,
    bairros.nome 				AS bai,
    bairros.id 					AS bairros_id,
    tipos.id 					AS tipos_id, 
    tipos.tipo_imoveis 			AS tip,
    cidades.id 					AS cidades_id, 
    cidades.nome 				AS cid,
    imoveis.ocasiao 			AS oca
    FROM imoveis
    inner join tipos on tipos.id = imoveis.imoveis_tipo 
    left join bairros on bairros.id  = imoveis.imoveis_bairro
    inner join cidades on cidades.id = imoveis.cidade_id
    ORDER BY imoveis.id desc
    WHERE 1=1";
if(!empty($_GET['cidade'])){
    $cidade = $_GET['cidade'];
    $sql .= " AND cid = '$cidade'";
}
if(!empty($_GET['bairro'])){
    $bairro = $_GET['bairro'];
    $sql .= " AND bai = '$bairro'";
}
if(!empty($_GET['ocasiao'])){
    $ocasiao = $_GET['ocasiao'];
    $sql .= " AND oca = '$ocasiao'";
}
if(!empty($_GET['padrao'])){
    $padrao = $_GET['padrao'];
    $sql .= " AND pad = '$padrao'";
}
if(!empty($_GET['tipos'])){
    $tipos = $_GET['tipos'];
    $sql .= " AND tip = '$tipos'";
}
if(!empty($_GET['qtd_quartos'])){
    $quartos = $_GET['qtd_quartos'];
    $sql .= " AND qtd = '$qtd_quartos'";
}
if(!empty($_GET['garagem'])){
    $garagem = $_GET['garagem'];
    $sql .= " AND garagem = '$garagem'";
}
 
$imoveis = $conn->query($sql);
$resultados = $imoveis->fetchAll(PDO::FETCH_ASSOC);





  
?>