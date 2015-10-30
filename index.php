<title> Cadastro de usuários</title>
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

		<div class="jumbotron" style="background: url('images/SGAGRO LOGO.png'); height:250px; widht:200px;">
        <div class="row">
            <div class="thumbnail col-md-2"><img src="images/unesp.jpg"></div>
            <div class="col-md-8"><h1><center><br>Login</center></h1></div>
            <div class="thumbnail col-md-2"><img src="images/SGAGRO LOGO.png"></div>
        </div>
    </div>

		<center><h4>Preencha os campos com o E-Mail e a senha Cadastradas</h4></center>
		
		<div class="panel panel-default">
		<form id="formcad" name="formcad" method="post" action="sessao/sessao.php">

			<div class="row">
				<div class="col-md-12">
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
					} ?>
					
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<label>E-Mail</label>
					<input type="text" id="email" name="email" class="form-control">
					<br/><label>Senha</label>
					<input type="text" id="senha" name="senha" class="form-control">
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<button type="button" id="registrar" name="registrar" class="col-md-4 col-md-offset-1 btn btn-primary">Registrar</button> 
					<button type="submit" id="logar" name="logar" class="col-md-4 col-md-offset-1 btn btn-success">Logar</button> 
				</div>	
			</div>

			<br>

			<div class="row">
				<div class="col-md-2 col-md-offset-5">
					
					<a href="view/novasenha.php"><center><b>Esqueci minha senha</b></center></a>
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