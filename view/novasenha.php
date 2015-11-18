<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php 
	
	if(isset($_GET['key'])){
		$sigla =  $_GET['key'];
		$key = base64_encode($sigla);
		if( $key != 'sigmajrsaoluis'){
		echo '<h2> Para que possa alterar sua senha é necessário clicar no link, enviado para o seu email !!! </h2>';

		return;
		}
	}else{
		echo '<h2> Para que possa alterar sua senha é necessário clicar no link, enviado para o seu email !!! </h2>';
		return;

	}
?>
<!DOCTYPE html>
<html lang="en-us" id="lock-page">
	<head>
		<meta charset="utf-8">
		<title>SGAGRO</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		 <!-- Bootstrap Core CSS -->
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

			<!-- MAIN CONTENT -->
	<div class="container">
			<div class="row" >
					<!-- div principal do fomulario -->
					<div class="row">
						<h2> Criar nova senha </h2>
					</div>
			
					<!-- verifica se o php retornou mesangem  -->
					<?php  
					// verifica se ocorreu erro
					if(isset($_GET['erro']))
					{ 
					// armazena o valor do erro 	
						$erro = $_GET['erro'];
					// se erro for = 1 email incorreto	
						if($erro == 3)
					{
						echo('<h5 style="color: black; font-size:15px">O e-mail está incorreto verifique e tente novamente </h5>');
					}
					// se não cpf incorreto
					else if($erro == 2)
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
				
				<div class="row">
					<form id="novasenha" method="post" action="../controller/ACAO/sl-ACAOcriaNsenha.php">
						<div class="row">
							<div class="col-md-4">
								<label > E-mail </label>
									<input class="form-control" type="input" name="email" id="email" >
								<label > Senha </label>
									<input class="form-control" type="password" name="senha1" id="senha1" > 
								<label >Digite a senha novamente </label>
									<input class="form-control" type="password" name="senha2" id="senha2" >
							</div>
						</div>	
						<div class="row">
							<div class="col-md-4">
								<button type="button"  name="submit" id="submit"  class="btn btn-primary"> Salvar </button>
							</div>
						</div>		 
					</form>
					<!-- fim do form -->
				<div class="row">
				
		
		
			</div>
	<!-- fecha container -->
	</div>

			




	<!-- função para validar a senha -->
	<script type="text/javascript">

	 // ler todo o documento em busca das informações
	 	$( document ).ready(function() {

	// chamar a função quando clica no botão submit 
			$(document).on("click","#submit",function(){	
	// armazena os valores de senha e senha 2 em variaveis temporarias
				var senha1 = $("#senha1").val();
				var senha2 = $("#senha2").val();
		
	// se as senhas forem identicas
					if( senha1 == senha2)
					{
		
						$('#novasenha').submit();

					}
	// caso as senhas não sejam identicas 
					else{
							alert("Erro as senhas não correspondem !!!");
							 $("#senha1").val('');
							 $("#senha2").val('');

						}

	// fecha funçao on.click
			});
	// fecha o ready	
		});
	</script>
		
</body>
</html>