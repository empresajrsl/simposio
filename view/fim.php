<?php include("verificasessao.php"); ?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<title>Fim do Cadastro</title>
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
                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Cadastro Finalizado</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->
    
		<div class="jumbotron">
			<div class="row">
				<div class"alert-warning">
				<center class="col-md-12"><h3><div class="alert-success">Parabéns seu trabalho foi cadastrado com sucesso!</br>.</div></h3></center>
			</div>
			</div>
			<br>
			<div class="row">
				<center>
				<input type="button" id="sair" name="sair" value="Sair" class="btn btn-primary" style="width:170px"></input>
                <input type="button" id="cnovo" name="cnovo" value="enviar arquivo PDF do trabalho" class="btn btn-primary" ></input></center>
			</div>
		</div>

		<script type="text/javascript">
			 $(document).on('click','#verartigo',function(){
			 	location.href='viewartigo.php';
			 });
		</script>

		<script type="text/javascript">
			 $(document).on('click','#sair',function(){
			 	location.href='../sessao/fecharsessao.php';
			 });
		</script>

        <script type="text/javascript">
             $(document).on('click','#cnovo',function(){
                location.href='submit.php';
             });
        </script>

</body>
</html>