<?php  
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');


$titulo = $_POST['titulo'];
$resumo = $_POST['resumo'];
$area = $_POST['area'];
$coautor = $_POST['coautor'];
$apresentacao = $_POST['apresentacao'];
$orientador = $_POST['orientador'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
session_start();
$email = $_SESSION['usuario'];
// recebe as variaveis realcionadas a coautor via post
$nomecoautor1 = $_POST['nomecoautor1'];
$nomecoautor2 = $_POST['nomecoautor2'];
$nomecoautor3 = $_POST['nomecoautor3'];
$nomecoautor4 = $_POST['nomecoautor4'];

$snomecoautor1 = $_POST['snomecoautor1'];
$snomecoautor2 = $_POST['snomecoautor2'];
$snomecoautor3 = $_POST['snomecoautor3'];
$snomecoautor4 = $_POST['snomecoautor4'];

$cpfcoautor1 = $_POST['cpfcoautor1'];
$cpfcoautor2 = $_POST['cpfcoautor2'];
$cpfcoautor3 = $_POST['cpfcoautor3'];
$cpfcoautor4 = $_POST['cpfcoautor4'];

if($coautor != "0"){
	if($coautor == "1"){
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor1."','".$snomecoautor1."','".$cpfcoautor1."','".$email."' ");
	}
	if($coautor == "2"){
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor1."','".$snomecoautor1."','".$cpfcoautor1."','".$email."' ");
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor2."','".$snomecoautor2."','".$cpfcoautor2."','".$email."' ");
	}
	if($coautor == "3"){
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor1."','".$snomecoautor1."','".$cpfcoautor1."','".$email."' ");
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor2."','".$snomecoautor2."','".$cpfcoautor2."','".$email."' ");
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor3."','".$snomecoautor3."','".$cpfcoautor3."','".$email."' ");
	}
	if($coautor == "4"){
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor1."','".$snomecoautor1."','".$cpfcoautor1."','".$email."' ");
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor2."','".$snomecoautor2."','".$cpfcoautor2."','".$email."' ");
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor3."','".$snomecoautor3."','".$cpfcoautor3."','".$email."' ");
		insert('sl_coautor','nome,sobrenome,cpf,autorprincipal'," '".$nomecoautor4."','".$snomecoautor4."','".$cpfcoautor4."','".$email."' ");
	}
}
	
echo $nomecoautor1;
	
 // variaveis do insert
				$tabela = 'sl_artigo';
				$campos = 'titulo, resumo, area, coautor, apresentacao, orientador,descricao,categoria,email';
				$argumentos  = "'".$titulo."','".$resumo."', '".$area."', '".$coautor."', '".$apresentacao."', '".$orientador."','".$descricao."','".$categoria."','".$email."'";

				$rp = insert($tabela,$campos,$argumentos);
if($rp){
	 
	updatemysql('publicado = 1','sl_cadusu',"email = '".$_SESSION['usuario']."' ");
	
}
?>

echo "</br>";      
//echo json_encode($rp);	

   



   
	   



?>


