<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$cpf = $_POST['cpf'];
$coautor = $_POST['coautor'];

$rp = select('*','sl_cadusu',"cpf = '".$cpf."' ");


$dados = $rp;



	




echo json_encode($dados[0]);






 ?>