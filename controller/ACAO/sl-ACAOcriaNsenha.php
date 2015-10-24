
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
	
	// se a busca não retornar nada envia a mensagem de email ou cpf incorreto para a pagina
	if(empty($result))
	{
		// header('location: novasenha.php?erro=1');
		echo 'erro os dados informados não estão cadastrados no sistema';
	}
	// senão, verifica se o usuario esta cadastrado no sistema
	elseif($result['emailverificado'] == 1 )
	{
		updatemysql("senha = $senhap","sl_cadusu","email='$emailp'");
		// header('location: novasenha.php?msg=1');
		echo 'senha atualizada com sucesso';

	}
	// se o usuario não estiver cadastrado envia a mensagem de erro 
	else
	{
		// 
		echo 'Erro, os dados informados não estão cadastrado no sistema';
	}

 ?>