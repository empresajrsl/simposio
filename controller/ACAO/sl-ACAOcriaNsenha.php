
<?php 
include("../funcoes/funcoesmysql.php");
// recebe via post as variaveis do form 
	$senhap = $_POST['senha1'];
	$emailp = $_POST['email'];
	$cpfp = $_POST['cpf'];
// faz uma busca no banco de dados dos campos senha email e cpf do usuario onde o email corresponder
	$busca = select("*","sl_cadusu","email = '".$emailp."' and cpf = '".$cpfp."'");
// resultado recebe um array vazio
	$result = array();
// info recebe a primeira linha retornada
	foreach ($busca as $key => $val) {
		$result = $val;
	}
	
	
	if($result['emailverificado'] == 1 )
	{	
		 $query = updatemysql("senha = $senhap","sl_cadusu","email='$emailp'");
		if($query){
		 header('location: ../../view/novasenha.php?msg=1');
		} else if (!$query){
			$erro = mysql_error();
			header('location: ../../view/novasenha.php?msg=3?erro='.$erro);
		}
	}
	else if(empty($result))
	{
		header('location: ../../view/novasenha.php?msg=2');
	}
	
 ?>