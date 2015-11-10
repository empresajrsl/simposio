<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo('
		<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<div class="container">
    <!--Banner-->
    <div class="jumbotron" style="background: url("../images/SGAGRO LOGO.png");">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
                <h2 class="col-md-8 col-xs-8 col-lg-8"><center>Sessão encerrada, para continuar faça login novamente</center></h2>
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
            </div>
        </div>
    </div>

    <div class="jumbotron">
    	<div class="row">
    		<h2> <a href="../index.php"> <center>Fazer login</center> </a></h2>
    	</div>
    </div>
    </div>');
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

?>
<body>
	

		<?php
		// se arquivo existir e for diferente de vazio
		if(isset($arq)){
					if($tipo != $tipodef){
						echo ("<div class='alert alert-danger' role='alert'><center>Tipo de Arquivo não suportado! <br/> Verifique o erro e tente novamente.<center></div>");
						echo("<button type='button' id='voltar1' name='voltar1' class='btn btn-primary col-md-4 col-md-offset-4' onClick='history.go(-1)' >Voltar</button>");
			
					}else if ($tamanho > $tamnhodef){
						echo ("<div class='alert alert-danger' role='alert'><center>O arquivo excede o tamanho limite! <br/> Verifique o erro e tente novamente.<center></div>");
						echo("<button type='button' id='voltar1' name='voltar1' class='btn btn-primary col-md-4 col-md-offset-4' onClick='history.go(-1)' >Voltar</button>");
			
					}else if ($tamanho <= $tamnhodef && $tipo == $tipodef && $arqerro == 0) {
						

					    $extensao = explode(".", $arq);
					     // Define o novo nome do arquivo usando um UNIX TIMESTAMP
					    $id = uniqid(rand()) .'.'. $extensao[1];

						$pasta = '../uploads/'.$id;

						if($arqerro == 0){
							    $upload = move_uploaded_file($nametemp,$pasta);
							    $idart = explode(".", $id);
							    
							    $email = $_SESSION['usuario'];
							   
							    $idartigo = $idart[0];

							    // variaveis do insert
								
							   
				    			updatemysql("idartigo = '" .$idartigo. "'", 'sl_cadusu', "email = '".$email."'"); 
				    			

				    			
							    $email = $_SESSION['usuario'];
								updatemysql('publicado = 2','sl_cadusu',"email = '".$email."' ");
								updatemysql("idartigo = '".$idartigo."'", "sl_artigo","email = '".$email."' ");
								header("Location: ../view/fim.php");
							


						}else{
							echo 'erro ao fazer o upload   ';
						}
					    
					    	
					    
					   
					}
					
		}
		?>
</div>
</body>