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
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$tipocadastro = $_POST['tipocadastro'];

$tabela = 'sl_cadusu';
$campos = 'senha, nome, sobrenome, nascimento, sexo, deficiente,cpf, endereco, cidade, estado, instituicao, email, telefone, contato,numero,complemento,cep,bairro,tipocadastro';
$argumentos  = "'".$senha."','".$nome."', '".$sobrenome."', '".$nascimento."', '".$sexo."', '".$deficiente."','".$cpf."', '".$endereco."', '".$cidade."', '".$estado."', '".$instituicao."', '".$email."', '".$telefone."', '".$contato."', '".$numero."', '".$complemento."','".$cep."', '".$bairro."', '".$tipocadastro."'";


$rp = insert($tabela,$campos,$argumentos);

echo "</br>";      
echo json_encode($rp);	

   
	   



?>