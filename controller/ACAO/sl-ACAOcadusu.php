<?php  
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');


$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$deficiente = $_POST['deficiente'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado =$_POST['estado'];
$instituicao = $_POST['instituicao'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$contato = $_POST['contato'];

$tabela = 'sl_cadusu';
$campos = 'senha, nome, sobrenome, nascimento, sexo, deficiente,cpf, endereco, cidade, estado, instituicao, email, telefone, contato';
$argumentos  = "'".$senha."','".$nome."', '".$sobrenome."', '".$nascimento."', '".$sexo."', '".$deficiente."','".$cpf."', '".$endereco."', '".$cidade."', '".$estado."', '".$instituicao."', '".$email."', '".$telefone."', '".$contato."'";


$rp = insert($tabela,$campos,$argumentos);

echo "</br>";      
echo json_encode($rp);	

   
	   



?>