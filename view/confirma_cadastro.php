<?php
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$deficiente = $_POST['deficiente'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado =$_POST['estado'];
$instituicao = $_POST['instituicao'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$contato = $_POST['contato'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$tipocadastro = $_POST['tipocadastro'];


?>
<html>
<head>
	<meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Confirmação de Dados Cadastrado</title>
</head>
<body>

	<div class="container">
		<div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">
	        <div class="row">
	            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
	            <div class="col-md-8"><h1><center>Confirmação de Cadastro</center></h1></div>
	            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
	        </div>
  		  </div>

			<div class="row"><center><h4>Confira aqui se as informações estão corretas e clique em avançar, caso o contrario clique em voltar para corrigir as mesmas</h4></div>
				
			<div class="panel panel-default">


				<div class="panel-heading"><center><b>Login</b></center></div>
					<div class="row">
							<div class="panel-body">
								<center>
									<div class="row">
										<email class="col-md-4"><?php echo "<b>Email:</b> " . $email; ?> </email>
										<senha class="col-md-4"><?php echo "<b>Senha:</b> " . $senha; ?></senha> 
										<tipocadastro class="col-md-4"><?php echo "<b>Tipo de cadastro:</b> " . $tipocadastro; ?></tipocadastro> 
									
									</div>
								</center>
							</div>
					</div>
				
				<div class="panel-heading"><center><b>Dados Pessoais </b></center></div>
					<div class="row">
							<div class="panel-body">
								<center>
									<div class="row">

										<div class="row">
											<nome class="col-md-3"><?php echo "<b>Nome: </b> " . $nome; ?> </nome>
											<sobrenome class="col-md-3"><?php echo "<b>Sobrenome: </b> " . $sobrenome; ?></sobrenome> 
											<nascimento class="col-md-3"><?php echo "<b>Data de nascimento: </b> " . $nascimento; ?></nascimento> 
											<sexo class="col-md-2"><?php echo "<b>Sexo: </b> " . $sexo; ?></sexo> 										
										</div>

										<div class="row"><br/>
											<cpf class="col-md-3"><?php echo "<b>CPF: </b> " . $cpf; ?> </cpf>
											<endereco class="col-md-3"><?php echo "<b>Endereço: </b> " . $endereco; ?></endereco> 
											<numero class="col-md-2"><?php echo "<b>Numero: </b> " . $numero; ?></numero> 
											<cidade class="col-md-2"><?php echo "<b>Cidade: </b> " . $cidade; ?></cidade> 
											<estado class="col-md-2"><?php echo "<b>Estado: </b> " . $estado; ?></estado> 
										</div>

										<div class="row"><br/>
											<complemento class="col-md-3"><?php echo "<b>Complemento: </b> " . $complemento; ?></complemento> 
											<cep class="col-md-3"><?php echo "<b>CEP: </b> " . $cep; ?></cep> 
											<bairro class="col-md-3"><?php echo "<b>Bairro: </b> " . $bairro; ?></bairro> 
											<deficiente class="col-md-3"><?php echo "<b>Deficiente: </b> " . $deficiente; ?></deficiente> 
										</div>

									</div>
								</center>
							</div>
					</div>

				<div class="panel-heading"><center><b>Contato</b></center></div>
					<div class="row">
							<div class="panel-body">
								<center>
									<div class="row">
										<instituicao class="col-md-4"><?php echo "<b>Instituição:</b> " . $instituicao; ?> </instituicao>
										<telefone class="col-md-4"><?php echo "<b>Telefone:</b> " . $telefone; ?></telefone> 
										<contato class="col-md-4"><?php echo "<b>Contato:</b> " . $contato; ?></contato> 
									</div>
								</center>
							</div>
					</div>


			</div>

	</br>

		<div class="row" id="btnconfcad">
			<button type="submit" id="voltar1" name="voltar1" class="btn btn-primary col-md-3 col-md-offset-2" onClick="history.go(-1)" >Voltar</button>
			<button type="submit" id="continuar1" name="continuar1" class="btn btn-success col-md-3 col-md-offset-2">Continuar</button>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','#continuar1',function(){ 
				env = {};
                env.senha = <?php echo "'$senha'"; ?> ;
                env.nome = <?php echo "'$nome'"; ?> ;
                env.sobrenome = <?php echo "'$sobrenome'"; ?> ;
                env.nascimento = <?php echo "'$nascimento'"; ?> ;
                env.sexo = <?php echo "'$sexo'"; ?> ;
                env.deficiente = <?php echo "'$deficiente'"; ?> ;
                env.cpf = <?php echo "'$cpf'"; ?> ;
                env.endereco = <?php echo "'$endereco'"; ?> ;
                env.cidade = <?php echo "'$cidade'"; ?> ;
                env.estado = <?php echo "'$estado'"; ?> ;
                env.instituicao = <?php echo "'$instituicao'"; ?> ;
				env.email = <?php echo "'$email'"; ?> ;
                env.telefone = <?php echo "'$telefone'"; ?> ;
                env.contato = <?php echo "'$contato'"; ?> ;
                env.numero = <?php echo "'$numero'"; ?> ;
                env.complemento = <?php echo "'$complemento'"; ?> ;
                env.cep = <?php echo "'$cep'"; ?> ;
                env.bairro = <?php echo "'$bairro'"; ?> ;
                env.tipocadastro = <?php echo "'$tipocadastro'"; ?> ;
                
				$.ajax({
			            type: "POST",
			            url: "../controller/ACAO/sl-ACAOcadusu.php",
			            data: env,
			            dataType : 'html',
			            success: function(data){
			                console.log('sucesso'+data)
			                //$('#erros').html('<img src="data:image/png;base64,'+data+'"/>');
			            }, error: function(data) {
			                console.log(data);
			                alert("Erro, Houve uma falha ao salvar o registro!");
			            }
			    		});

		                var form = {};
		                form.email = $('#email').val();
		                                // envia a variavel email por GET   
		    			location.href="enviaemail.php?email="+env.email;	

			
			});

		});				
	</script>
</body>
</html>
