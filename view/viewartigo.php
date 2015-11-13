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
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php include("../controller/funcoes/funcoesmysql.php"); ?>
	<title>Fim do Cadastro</title>
</head>
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png');">
	        <div class="row">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
	                <h1 class="col-md-8 col-xs-8 col-lg-8"><center>Meu Artigo</center></h1>
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
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
				<h3><center> Titulo real do Artigo: '.$arquivo['titulo'].'<br>
					O Artigo recebeu o seguinte id: '. $arquivo['idartigo'].'<br>
					Este id passou a ser o nome do arquivo. <br>
			 		</h3></center>
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