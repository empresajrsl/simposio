<!DOCTYPE html>
<html lang="en-us" id="lock-page">
	<head>
		<meta charset="utf-8">
		<title>SGAGRO</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
	    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	    <script src="../js/jquery-2.1.1.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/tooltip.js"></script>
	    <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
	    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	    <title>Tela de Cadastro</title>
	    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
		
</head>
	
	<body style="overflow:hidden">

				
		<div class="container" style="height: 700px" >
			<div class="row" >
			
				<div id="formsenha" class="row" >
						
					<div class="row">
						<h2> Informe seu email</h2>
					</div>
						
				
							<!-- verifica se o php retornou mesangem  -->
							<?php  
							// verifica se ocorreu erro
							if(isset($_GET['erro']))
							{ 
							// armazena o valor do erro 	
								$erro = $_GET['erro'];
							// se erro for = 1 email incorreto	
								if($erro == 1)
							{
								echo('<h5 style="color: black; font-size:15px">O e-mail está incorreto verifique e tente novamente </h5>');
							}
							// se não cpf incorreto
							else
							{
								echo('<h5 style="color: black; font-size:15px"> Você não está cadastrado ou tem pendencias em seu cadastro</h5>');
							}
							// fim do isset
							}
							else{
							// verifica se teve sucesso
							if (isset($_GET['msg']))
							{
								$msg = $_GET['msg'];
							if ($msg == 1)
							{
								echo('<h5 style="color: black; font-size:15px"> Atualização da senha feita com sucesso </h5>');
							}
							// fim do isset msg
							}
							// fim do else
							}
							?>
							<!-- fim do php -->
							<!-- inicio do form -->
							<div class="row">
								<form id="novasenha" method="post" action="../model/validaemail.php">
									<div class="row">
										<div class="col-md-4">
											<label > E-mail </label>
												<input class="form-control"type="input" name="email" id="email" >
										</div>	
									</div>
									<br>
									<div class="row">
										<div class="col-md-offset-3">
											<button  name="submit" id="submit"  class="btn btn-primary"> Confirmar </button>
										</div>	
									</div>
								</form>
							</div>
				</div>
			
			</div>

		</div>

	</body>
</html>