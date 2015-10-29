<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo("<h1>Sessão encerrada, para continuar faça login novamente</h1> <h2> <a href='../index.php'> Fazer login </a></h2>");
exit;
}
?>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Submissão do Artigo</title>
</head>
<?php
include("../controller/funcoes/funcoesmysql.php");
$arquivo = $_FILES['arquivo'];
$arquivoF = $_FILES['arquivo']; 
$arq = $_FILES['arquivo']['name'];
$tipo = $_FILES['arquivo']['type'];
$tamanho = $_FILES['arquivo']['size'];
$nametemp = $_FILES['arquivo']['tmp_name'];
$arqerro = $_FILES['arquivo']['error'];
$tipodef = "application/pdf";
$tamnhodef = 1024*1024*2; //Definir tamanho maximo do arquivo.
//echo "<pre>";print_r($arquivo); echo "</pre>"; 

?>
<body>
	<div class="container-fluid">

		<?php
		// se arquivo existir e for diferente de vazio
		if(isset($arq)){
					if($tipo != $tipodef){
						echo ("<div class='alert alert-danger' role='alert'><center>Tipo de Arquivo não suportado! <br/> Verifique o erro e tente novamente.<center></div>");
					}else if ($tamanho > $tamnhodef){
						echo ("<div class='alert alert-danger' role='alert'><center>O arquivo excede o tamanho limite! <br/> Verifique o erro e tente novamente.<center></div>");
					}else if ($tamanho <= $tamnhodef && $tipo == $tipodef && $arqerro == 0) {
						

					    $extensao = explode(".", $arq);
					     // Define o novo nome do arquivo usando um UNIX TIMESTAMP
					    $id = uniqid(rand()) .'.'. $extensao[1];

						$pasta = '../uploads/'.$id;

						if($arqerro == 0){
							    $upload = move_uploaded_file($nametemp,$pasta);
							   
							    $idart = explode(".", $id);
							    
							    session_start();
							    $email = $_SESSION['usuario'];
							   
							    $idartigo = $idart[0];
							    // variaveis do insert
								
							   
				    			updatemysql("idartigo = '" .$idartigo. "'", 'sl_cadusu', "email = '".$email."'"); 
				    			

				    			
							    $email = $_SESSION['usuario'];
								updatemysql('publicado = 2','sl_cadusu',"email = '".$email."' ");
								updatemysql("idartigo = '".$idartigo."'", "sl_artigo","email = '".$email."' ");
								
								header("Location:../sessao/fecharsessaofinal.php");

						}else{
							echo 'erro ao fazer o upload   ';
						}
					    
					    	
					    
					   
					}
					
		}
		?>
</div>
</body>