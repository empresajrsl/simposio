<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$avaliadores = select("*","sl_avaliador","");

echo json_encode($avaliadores);


?>