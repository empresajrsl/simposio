<?php
include ("Simposio/submissao/controller/funcoes/conexao.php");
include ("Simposio/submissao/controller/funcoes/funcoesmysql.php");

$campos = "t.titulo,t.area,t.categoria  ";
$tabela = "sl_artigo as t INNER JOIN sl_cadusu as c ON t.email = c.email INNER JOIN sl_grupo as g ON g.id_artigo = t.id_artigo";
$condicao = "t.status = 1 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 ORDER BY t.titulo";
$trabalhos = select($campos,$tabela,$condicao);

if($trabalhos){
echo json_encode($trabalhos);

	// echo "<pre>";
 //   	print_r($trabalhos);
	// echo "</pre>";

}	
?>