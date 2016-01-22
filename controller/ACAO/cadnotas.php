<?php

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$numeronota = $_POST['nota'];
$valornota = $_POST['valor'];
$idtrabalho = $_POST['idtrabalho'];
$email = $_POST['email'];



$busca = select('id_artigo','sl_notas'," id_artigo = ".$idtrabalho." ");

if(empty($busca)){
	
	$rp = insert('sl_notas',"nota".$numeronota.",id_artigo,email",' '.$valornota.', '.$idtrabalho.', "'.$email.'" ');

	if ($rp) {
		$result = 'funcionou inserção feita';
		echo json_encode($result);
	}
	
}else{
	
	$rp = updatemysql("nota".$numeronota." = ".$valornota." ",'sl_notas'," id_artigo = ".$idtrabalho." ");

	if ($rp) {
		$result = 'funcionou atualização feita';
		echo json_encode($result);
	}
}


 



?>