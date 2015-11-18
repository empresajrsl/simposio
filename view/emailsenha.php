<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php  
// guarda o email do usuario 
$email = $_GET['email'];
// concatena uma string com o email
$string = sha1('sigma').$email.sha1('sigma');
// cria uma chave publica criptrografada
$cod= base64_encode($string);



$mensagem = '
			<center>
			<h4> Olá!</br></br>
			Foi solicitada uma alteração na senha de acesso do sistema pelo usuario <u>'.$email.'</u></br></br> 
			Caso isto seja um erro, sugerimos que entre em contato com o desenvolvedor do sistema em <u>sigmajr@gmail.com</u>
			</h4>

			<h3> Clique no link abaixo para criar uma nova senha </h3></br> 
			<h2><a href="../model/confirmaemail.php?email='.$cod.'" target="_blank"> Definir nova senha</a></h2>
			</center>
			';

//echo ($mensagem);

?>

<html>
<head>
	<title>
		<meta charset="utf-8">
		<title>SGAGRO</title>
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
		<link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
		<script src="../js/jquery-2.1.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/tooltip.js"></script>
		<script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
		<script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
		<link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
</head>
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Solicitação de Nova Senha</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div class="jumbotron">
	    	<div class="row">
	    		<div class="col-md-12 col-xs-12 col-lg-12">
	    			<?php echo ($mensagem); ?>
	    		</div>
	    	</div>
	    </div>

	</div>

</body>
</html>