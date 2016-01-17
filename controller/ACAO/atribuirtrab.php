<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

session_start();
$id = $_SESSION['idusu'];
$trabalho = select("*","sl_artigo","avaliador1 =  $id || avaliador2 = $id ");

echo json_encode($trabalho);


?>