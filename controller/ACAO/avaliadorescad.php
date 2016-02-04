<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$avaliadores = select("*","sl_cadusu","tipocadastro ='Avaliador' OR tipocadastro ='Autor e avaliador'  ");

echo json_encode($avaliadores);


?>