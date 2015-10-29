<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo("<h1>Sessão encerrada, para continuar faça login novamente</h1> <h2> <a href='../index.php'> Fazer login </a></h2>");
exit;
}
?>
<?php
$search = array("\n","\r");
$titulo = $_POST['titulo'];
$resumoerro = $_POST['resumo'];
$resumo = str_replace($search,'' , $resumoerro);
$area = $_POST['area'];
$coautor = $_POST['coautor'];
$apresentacao = $_POST['apresentacao'];
$orientador = $_POST['orientador'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];


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

	<div class="container"><div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">
        <div class="row">
            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
            <div class="col-md-8"><h1><center>Confirmação da submissão do artigo</center></h1></div>
            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
        </div>
    </div>
			<div class="row"><center><h4>Confira aqui se as informações estão corretas e clique em avançar, caso contrario clique em voltar para corrigi-las.</h4></div>
				
			<div class="panel panel-default">


				<div class="panel-heading"><center><b>ARTIGO</b></center></div>
					<div class="row">
							<div class="panel-body">
								<center>
									<div class="row">
										<email class="col-md-3"><?php echo "<b>Artigo:</b> " . $titulo; ?> </email>
										<usuario class="col-md-3"><?php echo "<b>Área:</b> " . $area;  ?> </usuario>
										<categoria class="col-md-3"><?php echo "<b>Categoria:</b> " . $categoria;  ?> </categoria>
										<apresentacao class="col-md-3"><?php echo "<b>Apresentação:</b> " . $apresentacao;  ?> </apresentacao>
									</div>									<div class="row"></br>
										<email class="col-md-3"><?php echo "<b>Co-Autor:</b> " . $coautor; ?> </email>
										<senha class="col-md-3"><?php echo "<b>Orientador:</b> " . $orientador; ?></senha> 
										<usuario class="col-md-3"><?php echo "<b>Descrição do Orientador:</b> " . $descricao;  ?> </usuario>
									</div>
									<div class="row"><div class="container-fluid">
									</br>
										<resumo class="col-md-12"><?php echo "<b>Resumo do Artigo:</b> </br>" . $resumo; ?></resumo> 
									</div></div>
								</center>
							</div>
					</div>
				
			</div>

	</br>

		<div class="row">
			<button type="button" id="voltar1" name="voltar1" class="btn btn-warning col-md-3 col-md-offset-2" onClick="history.go(-1)" >Voltar</button>
			<button type="button" id="continuar1" name="continuar1" class="btn btn-success col-md-3 col-md-offset-2">Continuar</button>
		</div>
	</div>

	<script type="text/javascript">

		$(document).ready(function(){
            
            $(document).on('click','#continuar1',function(){

				env = {};
                env.titulo = <?php echo "'$titulo'"; ?> ;
                env.resumo = <?php echo "'$resumo'"; ?> ;
                env.area = <?php echo "'$area'"; ?> ;
                env.coautor = <?php echo "'$coautor'"; ?> ;
                env.apresentacao = <?php echo "'$apresentacao'"; ?> ;
                env.orientador = <?php echo "'$orientador'"; ?> ;
                env.descricao = <?php echo "'$descricao'"; ?> ;
                env.categoria = <?php echo "'$categoria'"; ?> ;
              
                
                
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
		                                
		    			 location.href="submit.php";	


			
			});

		});				
	</script>

	</body>
</html>