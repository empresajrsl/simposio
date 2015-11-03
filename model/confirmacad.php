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

		<div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">    
            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
            <div class="col-md-8"><h1><center>Cadastro</center></h1></div>
            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
        </div>
    
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
				echo json_encode($resposta['email']);
				echo "<center><h2>Cadastro confirmado com sucesso</h2></center>";
				updatemysql('emailverificado = 1','sl_cadusu',"email = '".$emaildecod."' ");

				header("location:../index.php");
			}

			else{
				echo "<center><h2>Erro, este email não está cadastrado no sistema</h2></center>";
				echo $emaildecod;
			}
		}
		?>
	</div>

	</div>
</body>
</html>



