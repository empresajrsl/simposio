<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="css/style.css" ></link>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="plugin/jquery-validate/jquery.validate.min.js"></script>
</head>
<body>
	
	<div class="container">

		<!--Banner>
		<div class="jumbotron" style="background: url('images/SGAGRO LOGO.png');">
	        <div class="row">
	        	<div class="col-md-12 col-xs-12 col-lg-12">
	            	<img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="images/unesp.jpg">
	            	<h1 class="col-md-8 col-xs-8 col-lg-8"><center>Login</center></h1>
	            	<img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="images/SGAGRO LOGO.png">
	        	</div>
	    	</div>
	    </div>
		<Fim Banner-->

		<!--Banner-->
		<div class="jumbotron" style="background-image: url('images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
		        <div class="col-md-12 col-xs-12 col-lg-12">
		        	<div class="col-md-4 col-xs-4 col-lg-4">
		        		<img src="images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
		        		<img src="images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
		        	</div>
		        	<div class="col-md-6 col-xs-6 col-lg-6">
						<center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Login</b></i></center></h1>
					</div>
	        	</div>
	    	</div>
	    </div>
		<!--Fim Banner-->
		

		<center><h4>Preencha os campos com o E-Mail e a senha Cadastradas</h4></center>
		
		<div class="jumbotron">
		<form id="formcad" name="formcad" method="post" action="sessao/sessao.php">

			<div class="row">
				<div class="col-md-12 col-xs-12 col-lg-12">
				<?php if(isset($_GET['erro'])){
					$erro = $_GET['erro'];
					if($erro == 1){
						echo '<div class="alert-danger"><center>Email ou senha incorretos verifique e tente novamente.<center></div>';
					}
					if($erro == 2){
						echo '<div class="alert-danger"><center>Seu cadastro ainda não foi confirmado, entre em seu email e clique no link de confirmação.<center></div>';
					}
					if($erro == 3){
						echo '<div class="alert-warning"><center> Preencha todos os campos antes de continuar.<center></div>';
					}
					if($erro == 4){
						echo '<div class="alert-danger"><center>Seu cadastro como avaliador não foi aprovado<center></div>';
					}
					}
				?>	
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-4">
					<label>E-Mail</label>
					<input type="text" id="email" name="email" class="form-control">
					<br/><label>Senha</label>
					<input type="password" id="senha" name="senha" class="form-control">
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-4">
					<button type="button" id="registrar" name="registrar" class="col-md-5 col-xs-5 col-lg-5 btn btn-primary">
						Registrar
					</button>

					<button type="submit" id="logar" name="logar" class="col-md-5 col-md-offset-2 col-xs-5 col-xs-offset-2 col-lg-5 col-lg-offset-2 btn btn-success">
						Logar
					</button>
				</div>	
			</div>

			<br>

			<div class="row">
				<div class="col-md-2 col-md-offset-5">
					
					<a href="view/verificaremail.php"><center><b>Esqueci minha senha</b></center></a>
				</div>	
			</div>

		</form>
		</div>
	</div>
		
<script type="text/javascript"> 
    $(document).on('click','#registrar', function(){ 
    	location.href="view/cadusu.php";
    });
</script>


</body>
</html>