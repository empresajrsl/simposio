<?php
include ('../controller/funcoes/conexao.php');
include ('../controller/funcoes/funcoesmysql.php');

if(isset($_POST)){
	$email = $_GET['email'];
	$emailcod = base64_decode($email);
	$key = sha1("sigma");
	$emaildecod = str_replace($key,'', $emailcod);
	
// exibir($conect,$emaildecod);
	$infobanco = select('*','sl_cadusu',"email = '".$emaildecod."' ");
				
		foreach($infobanco as $resposta){
			
				$result = $resposta;
		}
		if(empty($result)==false){
			echo json_encode($resposta['email']);
			echo "<h1>Cadastro confirmado com sucesso</h1>";
			updatemysql('emailverificado = 1','sl_cadusu',"email = '".$emaildecod."' ");

			header("location:../index.php");

		}else{
			echo "<h1>Erro, email este email não está cadastrado no sistema</h1>";
			echo $emaildecod;
		}

		

}
?>

