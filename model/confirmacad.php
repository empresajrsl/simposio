<html>
<head>
	<meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title></title>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Confirmar Cadastro</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
    
    <div class="jumbotron">
    	<?php
		include ('../controller/funcoes/conexao.php');
		include ('../controller/funcoes/funcoesmysql.php');

		if(isset($_POST)){
			$email = $_GET['email'];
			$emailcod = base64_decode($email);
			$key = sha1("sigma");
			$emaildecod = str_replace($key,'', $emailcod);
			
			// exibir($conect,$emaildecod);
			$infobanco = select('*','sl_cadusu',"email = '".$emaildecod."' ");
						
			foreach($infobanco as $resposta){$result = $resposta;}

			if(empty($result)==false){
				
				updatemysql('emailverificado = 1','sl_cadusu',"email = '".$emaildecod."' ");

				echo '<script>location.href="../index.php";</script>';
				
			}

			else{
				echo "<center><h2>Erro, este email não está cadastrado no sistema</h2></center>";
				
			}
		}
		?>
	</div>

	</div>
</body>
</html>



