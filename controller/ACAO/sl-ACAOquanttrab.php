<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$email = $_POST['email'];

$rp = select('*','sl_artigo',"email = '".$email."' ");


$dados = $rp;



	




echo json_encode($dados);






 ?>