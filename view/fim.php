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
    <div class="jumbotron" style="background-image: url("../images/fundo.png"); background-size: cover;">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <div class="col-md-2 col-xs-3 col-lg-2">
                    <img class="col-md-12 col-xs-12 col-lg-12" src="../images/SGAGRO LOGO.png">
                    <img class="col-md-12 col-xs-12 col-lg-12" src="../images/unesp.jpg" style="margin-top: 25%">
                </div>
                <h1 class="col-md-8 col-xs-6 col-lg-8">
                    <center style="margin-top: 5%"><i style="font-family: "Plantagenet Cherokee";"><b>Sessão encerrada, para continuar faça login novamente</b></i></center>
                </h1>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

    <div class="jumbotron">
    	<div class="row">
    		<h2> <a href="../index.php"> <center>Fazer login</center></a></h2>
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
	<title>Fim do Cadastro</title>
</head>
<body>
	
	<div class="container">
		<!--Banner-->
        <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="col-md-2 col-xs-3 col-lg-2">
                        <img class="col-md-12 col-xs-12 col-lg-12" src="../images/SGAGRO LOGO.png">
                        <img class="col-md-12 col-xs-12 col-lg-12" src="../images/unesp.jpg" style="margin-top: 25%">
                    </div>
                    <h1 class="col-md-8 col-xs-6 col-lg-8">
                        <center style="margin-top: 5%"><i style="font-family: 'Plantagenet Cherokee';"><b>Fim</b></i></center>
                    </h1>
                </div>
            </div>
        </div>
        <!--Fim Banner-->
    
		<div class="jumbotron">
			<div class="row">
				<div class"alert-warning">
				<center class="col-md-12"><h3><div class="alert-success">Parabéns seu trabalho foi enviado!</br>Por favor, aguarde o resultado.</div></h3></center>
			</div>
			</div>
			<br>
			<div class="row">
				<center><input type="button" id="verartigo" name="verartigo" value="Visualizar meu artigo" class="btn btn-primary"></input>
				<input type="button" id="sair" name="sair" value="Sair" class="btn btn-primary" style="width:170px"></input>
                <input type="button" id="cnovo" name="cnovo" value="enviar mais um trabalho" class="btn btn-primary" ></input></center>
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