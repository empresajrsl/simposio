<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$trabalhos = select("id_artigo,titulo,area,categoria","sl_artigo","");

echo json_encode($trabalhos);


?>