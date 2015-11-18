
<?php 
include("../funcoes/funcoesmysql.php");
// recebe via post as variaveis do form 
	$senhap = $_POST['senha1'];
	$emailp = $_POST['email'];
	$cpfp = $_POST['cpf'];
	$sigla = 'sigmajrsaoluis';
	$key = base64_encode($sigla);


// faz uma busca no banco de dados dos campos senha email e cpf do usuario onde o email corresponder
	$busca = select("*","sl_cadusu","email = '".$emailp."'");
// resultado recebe um array vazio
	$result = array();
// info recebe a primeira linha retornada
	foreach ($busca as $chave => $val) {
		$result = $val;
	}
	
	
	if($result['emailverificado'] == 1 )
	{	
		 $query = updatemysql("senha = $senhap","sl_cadusu","email='$emailp'");
		if($query){
		 header('location: ../../view/novasenha.php?msg=1&key='.$key);
		} else if (!$query){
			$erro = mysql_error();
			header('location: ../../view/novasenha.php?erro=2&key='.$key);
		}
	}else{
			header('location: ../../view/novasenha.php?erro=2&key='.$key);
	}
	if(empty($result))
	{
		header('location: ../../view/novasenha.php?erro=3&key='.$key);
	}
	
 ?>