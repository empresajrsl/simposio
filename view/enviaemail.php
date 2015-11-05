
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php  
// guarda o email do usuario 
$email = $_GET['email'];

// concatena uma string com o email
$string = sha1('sigma').$email.sha1('sigma');
// cria uma chave publica criptrografada
$cod= base64_encode($string);

/*$mensagem = '<html>
<body> <!--style="padding-left:30px;background-color: #FAF6F5"-->

<div style="margin-top:30px"> </div> 

<p style=margin-left:15px> Olá,</br>
Seu cadastro está quase concluído, após clicar no link o acesso ao sistema será concedido a '.$email.'</br>
Caso ocorra algum erro, sugerimos que entre em contato com os desenvolvedores do sistema em</br> 

<b>sigmajr@gmail.com</b> </p>

<h2 style="color: #3a3f51; margin-left:15px"> Clique no link abaixo para confirmar seu cadastro </h2> 

<a href="../model/confirmacad.php?email='.$cod.'" target="_blank" style="font-size: 20px; margin-left:15px"> Confirmar cadastro </a>

</body>
</html> ';

echo ($mensagem);*/

?>

<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Confirma E-mail</title>
</head>
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png');">
	        <div class="row">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
	                <h1 class="col-md-8 col-xs-8 col-lg-8"><center>E-Mail</center></h1>
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

    	<div class="jumbotron">
    		<div>
    			<?php 
    			echo "<center>Seu cadastro está quase concluído, após clicar no link o acesso ao sistema será concedido a <u>".$email."</u>.
    			Caso ocorra algum erro, sugerimos que entre em contato com os desenvolvedores do sistema em:</center>";
    		 	?>
    		</div>

    		</br>

    		<center><b>sigmajr@gmail.com<b></center>

			<center class="col-md-12 col-xs-12 col-lg-12"><h3>Clique no link abaixo para confirmar seu cadastro.</h3></center>

			</br>

			<center><?php echo "<a href='../model/confirmacad.php?email=".$cod."' target='_blank' style='font-size: 20px;'> Confirmar Cadastro </a>"; ?></center>
		</div>

	</div>
</body>
</html>