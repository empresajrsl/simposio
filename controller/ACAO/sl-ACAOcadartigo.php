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


