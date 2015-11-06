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
		<!--Banner-->
	    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png');">
	        <div class="row">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
	                <h1 class="col-md-8 col-xs-8 col-lg-8"><center>Fim</center></h1>
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
    
		<div class="jumbotron">
			<div class="row">
				<div class"alert-warning">
				<center class="col-md-12"><h3><div class="alert-success">Parabéns seu artigo foi enviado!</br>Por favor, aguarde o resultado.</div></h3></center>
			</div>
			</div>
			<br>
			<div class="row">
				<center><input type="button" id="sair" name="sair" value="Sair" class="btn btn-primary"></input></center>
			</div>
		</div>

		<script type="text/javascript">
			 $(document).on('click','#sair',function(){
			 	location.href='../index.php';
			 });
		</script>

</body>
</html>