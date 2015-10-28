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
$Complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];


?>
<html>
<head>
	<meta charset="UTF-8">
    <LINK type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></LINK>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Confirmação de Dados Cadastrado</title>
</head>
<body>

	<div class="container">
		<div class="jumbotron"><h1><center>Confirmação de Cadastro</center></h1></div>
			<div class="row"><center><h4>Confira aqui se as informações estão corretas e clique em avançar, caso o contrario clique em voltar para corrigir as mesmas</h4></div>
				
			<div class="panel panel-primary">


				<div class="panel-heading"><center><b>Login</b></center></div>
					<div class="row">
							<div class="panel-body">
								<center>
									<div class="row">
										<email class="col-md-4"><?php echo "<b>Email:</b> " . $email; ?> </email>
										<senha class="col-md-4"><?php echo "<b>Senha:</b> " . $senha; ?></senha> 
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
											<nome class="col-md-4"><?php echo "<b>Nome: </b> " . $nome; ?> </nome>
											<sobrenome class="col-md-4"><?php echo "<b>Sobrenome: </b> " . $sobrenome; ?></sobrenome> 
											<cpf class="col-md-4"><?php echo "<b>CPF: </b> " . $cpf; ?> </cpf>
											
										</div>

										<div class="row"><br/>
											<nascimento class="col-md-4"><?php echo "<b>Data de nascimento: </b> " . $nascimento; ?></nascimento> 
											<sexo class="col-md-4"><?php echo "<b>Sexo: </b> " . $sexo; ?></sexo> 
											<deficiente class="col-md-4"><?php echo "<b>Deficiente: </b> " . $deficiente; ?></deficiente> 
										</div>

										<div class="row"><br/>
											<endereco class="col-md-4"><?php echo "<b>Endereço: </b> " . $endereco; ?></endereco> 
											<cidade class="col-md-4"><?php echo "<b>Cidade: </b> " . $cidade; ?></cidade> 
											<estado class="col-md-4"><?php echo "<b>Estado: </b> " . $estado; ?></estado> 
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

		<div class="row">
			<button type="submit" id="voltar1" name="voltar1" class="btn btn-warning col-md-3 col-md-offset-2" onClick="history.go(-1)" >Voltar</button>
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
                env.Complemento = <?php echo "'$Complemento'"; ?> ;
                env.cep = <?php echo "'$cep'"; ?> ;
                env.bairro = <?php echo "'$bairro'"; ?> ;
                
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
