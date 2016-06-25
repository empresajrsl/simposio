<?php
include ("Simposio/submissao/controller/funcoes/funcoesmysql.php");


$campos = "t.titulo,t.area,t.categoria,t.idartigo,t.instituicao,(SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario1) as autor_1,(SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario2) as autor_2, (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario3) as autor_3, (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario4) as autor_4,(SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario5) as autor_5 ";
$tabela = "sl_artigo as t INNER JOIN sl_cadusu as c ON t.email = c.email INNER JOIN sl_grupo as g ON g.id_artigo = t.id_artigo";

if(isset($_POST['titulo']) == false ){
$condicao = "t.status = 1 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 ORDER BY t.titulo ";
	

}else{

$titulo = $_POST['titulo'];

$condicao = "t.status = 1 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 AND t.titulo LIKE '%".$titulo."%' ORDER BY t.titulo";

}

$trabalhos = select ($campos,$tabela,$condicao);

if($trabalhos){
echo json_encode($trabalhos);
}else{
 echo "erro ao fazer a busca";
}
?>