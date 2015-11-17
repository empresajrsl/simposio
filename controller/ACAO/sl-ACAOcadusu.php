<?php  
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');


$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
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
$criado = date('Y-m-d H:i'); 
$tabela = 'sl_cadusu';
$campos = 'senha, nome, sobrenome, nascimento, sexo, pais,cpf, endereco, cidade, estado, instituicao, email, telefone, contato,numero,complemento,cep,bairro,tipocadastro,criado';
$argumentos  = "'".$senha."','".$nome."', '".$sobrenome."', '".$nascimento."', '".$sexo."', '".$pais."','".$cpf."', '".$endereco."', '".$cidade."', '".$estado."', '".$instituicao."', '".$email."', '".$telefone."', '".$contato."', '".$numero."', '".$complemento."','".$cep."', '".$bairro."', '".$tipocadastro."', '".$criado."'";


$rp = insert($tabela,$campos,$argumentos);

echo "</br>";      
echo json_encode($rp);	

   
	   



?>