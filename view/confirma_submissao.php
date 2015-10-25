<?php
$titulo = $_POST['titulo'];
$resumo = $_POST['resumo'];
$area = $_POST['area'];
$coautor = $_POST['coautor'];
$apresentacao = $_POST['apresentacao'];
$orientador = $_POST['orientador'];
$descricao = $_POST['descricao'];

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
		<div class="jumbotron"><h1><center>Confirmação da submissão do artigo</center></h1></div>
			<div class="row"><center><h4>Confira aqui se as informações estão corretas e clique em avançar, caso o contrario clique em voltar para corrigir as mesmas</h4></div>
				
			<div class="panel panel-primary">


				<div class="panel-heading"><center><b>Artigo</b></center></div>
					<div class="row">
							<div class="panel-body">
								<center>
									<div class="row">
										<email class="col-md-4"><?php echo "<b>Artigo:</b> " . $titulo; ?> </email>
										<usuario class="col-md-4"><?php echo "<b>Area:</b> " . $area;  ?> </usuario>
									</div>
									<div class="row"></br>
										<email class="col-md-4"><?php echo "<b>Co-Autor:</b> " . $coautor; ?> </email>
										<senha class="col-md-4"><?php echo "<b>Orientador:</b> " . $orientador; ?></senha> 
										<usuario class="col-md-4"><?php echo "<b>Descrição do Orientador:</b> " . $descricao;  ?> </usuario>
									</div>
									<div class="row">
									</br>
										<resumo class="col-md-12"><?php echo "<b>Resumo do Artigo:</b> </br>" . $resumo; ?></resumo> 
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
                env.titulo = <?php echo "'titulo'"; ?> ;
                env.resumo = <?php echo "'resumo'"; ?> ;
                env.area = <?php echo "'area'"; ?> ;
                env.coautor = <?php echo "'coautor'"; ?> ;
                env.apresentacao = <?php echo "'apresentacao'"; ?> ;
                env.orientador = <?php echo "'orientador'"; ?> ;
                env.descricao = <?php echo "'descricao'"; ?> ;

               $.ajax({
			            type: "POST",
			            url: "../controller/ACAO/sl-ACAOcadartigo.php",
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
		                form.titulo = $('#titulo').val();
		                                // envia a variavel email por GET   
		    			location.href="fim.php?artigo?titulo="+env.titulo+"?enviado";	

			
			});

		});				
	</script>

	</body>
</html>