
<?php 
include ('../controller/funcoes/conexao.php');
include ('../controller/funcoes/funcoesmysql.php');
// recebe via post as variaveis do form 
	
	$emailp = $_POST['email'];
	
// faz uma busca no banco de dados dos campos senha email e cpf do usuario onde o email corresponder
	$busca = select("*","sl_cadusu","email='".$emailp."' ");
// resultado recebe o que vier de busca
	$resultado = $busca;
// info recebe a primeira linha retornada
	$info = $resultado[0];
// se a busca não retornar nada envia a mensagem de email ou cpf incorreto para a pagina
if(empty($busca))
{
	header('location: ../view/verificaremail.php?erro=1');
}
// senão, verifica se o usuario esta cadastrado no sistema
elseif($info['emailverificado'] == 1 )
{
	
	header('location: ../view/emailsenha.php?email= '.$emailp.'');

}
// se o usuario não estiver cadastrado envia a mensagem de erro 
else
{
	header('location: ../view/emailsenha.php?erro=2');
}

 ?>