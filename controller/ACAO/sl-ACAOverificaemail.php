<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$email = $_POST['email'];

$rp = select('*','sl_cadusu',"email = '".$email."' ");


$dados = $rp;



	




echo json_encode($dados[0]);






 ?>