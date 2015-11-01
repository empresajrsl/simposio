<?php 

include("../controller/funcoes/funcoesmysql.php");
session_start();
$email = $_SESSION['usuario'];
$busca = select('idartigo',"sl_cadusu", " email='".$email."'");
	foreach ($busca as $key => $val) {
					$result = $val;	
				}			
?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<title>Fim do Cadastro</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">
	        <div class="row">
	            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
	            <div class="col-md-8"><h1><center>Obrigado por se inscrever!</center></h1></div>
	            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
	        </div>
    	</div>
    
													

		<br>
		<div class="row">
			<div class"alert-warning">
			<center class="col-md-12"><h3><div class="alert-success">Parabéns seu artigo foi enviado!</br>Por favor, aguarde o resultado.</div></h3></center>
		</div>
		</div>
		<div class="row"></div>
				<center class="col-md-12"><h3><div class="alert-warning">O seu artigo recebeu o seguinte id: <?php echo $result['idartigo']; ?></div></h3></center>
	</div>

<?php 

session_destroy(); // Destrói a sessão limpando todos os valores salvos 
?>
</body>
</html>