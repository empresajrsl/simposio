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
if(isset($_POST['cpfcoautor1'])){
$cpfcoautor1 = $_POST['cpfcoautor1'];
}

if(isset($_POST['cpfcoautor2'])){
$cpfcoautor2 = $_POST['cpfcoautor2'];
}

if(isset($_POST['cpfcoautor3'])){
$cpfcoautor3 = $_POST['cpfcoautor3'];
}

if(isset($_POST['cpfcoautor4'])){
$cpfcoautor4 = $_POST['cpfcoautor4'];
}

if($coautor != "0"){
	if($coautor == "1"){
		$idautor1 = select('id_usuario', 'sl_cadusu', "email= '".$email."'"); 
		$idaut1 =  $idautor1[0]['id_usuario'];

		$cpfautor1 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor1."'"); 
		$cpfaut1 =  $cpfautor1[0]['id_usuario'];
		insert('sl_grupo','id_usuario1, id_usuario2',"'".$idaut1."','".$cpfaut1."'");

	}
	if($coautor == "2"){
		$idautor1 = select('id_usuario', 'sl_cadusu', "email= '".$email."'"); 
		$idaut1 =  $idautor1[0]['id_usuario'];

		$cpfautor1 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor1."'"); 
		$cpfcoaut1 =  $cpfautor1[0]['id_usuario'];
	
		$cpfautor2 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor2."'"); 
		$cpfcoaut2 =  $cpfautor2[0]['id_usuario'];

		
		insert('sl_grupo','id_usuario1, id_usuario2,id_usuario3',"'".$idaut1."','".$cpfcoaut1."','".$cpfcoaut2."'");
	}
	if($coautor == "3"){

		$idautor1 = select('id_usuario', 'sl_cadusu', "email= '".$email."'"); 
		$idaut1 =  $idautor1[0]['id_usuario'];

		$cpfautor1 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor1."'"); 
		$cpfcoaut1 =  $cpfautor1[0]['id_usuario'];
	
		$cpfautor2 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor2."'"); 
		$cpfcoaut2 =  $cpfautor2[0]['id_usuario'];

		$cpfautor3 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor3."'"); 
		$cpfcoaut3 =  $cpfautor3[0]['id_usuario'];

		insert('sl_grupo','id_usuario1, id_usuario2,id_usuario3,id_usuario4', "'".$idaut1."','".$cpfcoaut1."','".$cpfcoaut2."','".$cpfcoaut3."'");
	}
	if($coautor == "4"){

		$idautor1 = select('id_usuario', 'sl_cadusu', "email= '".$email."'"); 
		$idaut1 =  $idautor1[0]['id_usuario'];

		$cpfautor1 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor1."'"); 
		$cpfcoaut1 =  $cpfautor1[0]['id_usuario'];
	
		$cpfautor2 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor2."'"); 
		$cpfcoaut2 =  $cpfautor2[0]['id_usuario'];

		$cpfautor3 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor3."'"); 
		$cpfcoaut3 =  $cpfautor3[0]['id_usuario'];
	
		$cpfautor4 = select('id_usuario', 'sl_cadusu', "cpf= '".$cpfcoautor4."'"); 
		$cpfcoaut4 =  $cpfautor4[0]['id_usuario'];

		echo $cpfcoaut4;

		insert('sl_grupo','id_usuario1, id_usuario2,id_usuario3,id_usuario4,id_usuario5',"'".$idaut1."','".$cpfcoaut1."','".$cpfcoaut2."','".$cpfcoaut3."','".$cpfcoaut4."'");
	}
}
	
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


