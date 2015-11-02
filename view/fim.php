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
				<center class="col-md-12"><h3><div class="alert-warning"><?php   if(isset($_GET['id'])){echo 'O seu artigo recebeu o seguinte id:'.$_GET['id'];} ?></div></h3></center>
	</div>


</body>
</html>