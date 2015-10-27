<title> Cadastro de usuários</title>
	<meta charset="utf-8">
	<LINK type="text/css" rel="stylesheet" href="css/bootstrap.min.css" ></LINK>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="plugin/jquery-validate/jquery.validate.min.js"></script>
</head>
<body>
	
	<div class="container">

		<div class="jumbotron"><center><h1>Login</h1></center></div>

		<center><h4>Preencha os campos com o E-Mail e a senha Cadastradas</h4></center><br><br>
		
		<form id="formcad" name="formcad" method="post" action="sessao/sessao.php">

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
				<?php if(isset($_GET['erro'])){
					$erro = $_GET['erro'];
					if($erro == 1){
						echo 'Email ou senha incorretos verifique e tente novamente.</br>';
					}
					if($erro == 2){
						echo 'Seu cadastro ainda não foi confirmado, entre em seu email e clique no link de confirmação.</br>';
					}
					if($erro == 3){
						echo 'Preencha todos os campos antes de continuar.</br>';
					}
					} ?>
					<label>E-Mail</label>
					<input type="text" id="email" name="email" class="form-control">
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<label>Senha</label>
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
		
<script type="text/javascript"> 
    $(document).on('click','#registrar', function(){ 
    	location.href="view/cadusu.php";
    });
</script>


</body>
</html>