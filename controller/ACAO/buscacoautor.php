<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$cpfcoautor1 = $_POST['cpfcoautor1'];

$rp = select('*','sl_cadusu',"cpf = '".$cpfcoautor1."' ");

$dados = $rp[0];

echo json_encode($dados);






 ?>