<?php include("verificasessao.php"); ?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php include("../controller/funcoes/funcoesmysql.php"); ?>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Visualizar Trabalho</title>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Visualizar Trabalho</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
	<div class="row"><br>	    
		<?php
		$email = $_SESSION['usuario'];
		$id_artigo = $_POST['idartigo'];

		$condicao = "`id_artigo` = '". $id_artigo."'";
		$campo = '*';
		$tabela = "`sl_artigo`";
		$arquivos = select($campo, $tabela, $condicao);
		$arquivo = $arquivos[0];

			echo'
				<h3><center> Titulo  do trabalho<br> '.$arquivo['titulo'].'</h3></center>
			 				<div class="row">
			 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../uploads/'.$arquivo['idartigo'].'.pdf" height="500"> </iframe>
			 				</div>
				 	<br/><br/>';

		?>
	</div>

	<div class="row"><br>
				<center class="col-md-12 col-xs-12 col-lg-12">
					<button type="button" id="voltar" name="voltar" class="col-md-3 col-md-offset-4 btn btn-warning" onclick="history.go(-1)">Voltar</button>
					</center><br><br><br><br>
	</div>

</body>
</html>