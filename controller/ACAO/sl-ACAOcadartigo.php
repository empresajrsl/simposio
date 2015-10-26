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

$tabela = 'sl_artigo';
$campos = 'titulo, resumo, area, coautor, apresentacao, orientador,descricao';
$argumentos  = "'".$titulo."','".$resumo."', '".$area."', '".$coautor."', '".$apresentacao."', '".$orientador."','".$descricao."'";


$rp = insert($tabela,$campos,$argumentos);

if($rp){
	session_start();
	updatemysql('publicado = 1','sl_cadusu',"email = '".$_SESSION['usuario']."' ");
}

echo "</br>";      
echo json_encode($rp);	

   
	   



?>