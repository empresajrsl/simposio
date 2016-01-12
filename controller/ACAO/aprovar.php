<?php 
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$id = $_POST['id'];

$update = updatemysql('status = 1 ','sl_avaliador',"idusuario = ".$id." ");

if($update){
	$rp = 'funcionou';
	echo json_encode($rp);
}
?>