<?php

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$numeronota = $_POST['nota'];
$valornotabruta = $_POST['valor'];
$valornota = number_format($valornotabruta, 2,'.','');
$idtrabalho = $_POST['idtrabalho'];
$email = $_POST['email'];
session_start();
$id_avaliador = $_SESSION['idusu'];

$avaliador1 = select('id_avaliador1','sl_artigo'," id_avaliador1 = ".$id_avaliador." ");
	if($avaliador1){

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

	}

$avaliador2 = select('id_avaliador1','sl_artigo'," id_avaliador2 = ".$id_avaliador." ");

	if($avaliador2){

		$busca = select('id_artigo','sl_notas2'," id_artigo = ".$idtrabalho." ");

			if(empty($busca)){
				
				$rp = insert('sl_notas2',"nota".$numeronota.",id_artigo,email",' '.$valornota.', '.$idtrabalho.', "'.$email.'" ');

				if ($rp) {
					$result = 'funcionou inserção feita';
					echo json_encode($result);
				}
				
			}else{
				
				$rp = updatemysql("nota".$numeronota." = ".$valornota." ",'sl_notas2'," id_artigo = ".$idtrabalho." ");

				if ($rp) {
					$result = 'funcionou atualização feita';
					echo json_encode($result);
				}
			}
	}

 



?>