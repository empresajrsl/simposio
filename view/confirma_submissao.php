<?php header ('Content-type: text/html; charset=UTF-8'); 
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

if($coautor != "0"){
	$ncoautor = (int) $coautor + 1;
	$count = 0;
	for($count = 1; $count < $ncoautor;$count++){
		eval('$nomecoautor'.$count.' = $_POST["nomecoautor'.$count.'"]; ');
		eval('$snomecoautor'.$count.' = $_POST["snomecoautor'.$count.'"]; ');
		eval('$cpfcoautor'.$count.' = $_POST["cpfcoautor'.$count.'"]; ');
	}
	$sobra = 5;
	for($i = $ncoautor ;$i < $sobra;$i++){
		eval('$nomecoautor'.$i.' = "coautor não cadastrado"; ');
		eval('$snomecoautor'.$i.' = "coautor não cadastrado "; ');
		eval('$cpfcoautor'.$i.' = " coautor não cadastrado "; ');
	} 
}else{
	for($count = 1; $count < 5;$count++){
		eval('$nomecoautor'.$count.' = "coautor não cadastrado"; ');
		eval('$snomecoautor'.$count.' = "coautor não cadastrado "; ');
		eval('$cpfcoautor'.$count.' = " coautor não cadastrado "; ');
	}
}

if(isset($_POST['nomecoautor2']) and isset($_POST['snomecoautor2'])  and isset($_POST['cpfcoautor2'])){
$nomecoautor2 = $_POST['nomecoautor2'];
$snomecoautor2 = $_POST['snomecoautor2'];
$cpfcoautor2 = $_POST['cpfcoautor2'];
echo ("2existe");
}

if(isset($_POST['nomecoautor3']) and isset($_POST['snomecoautor3'])  and isset($_POST['cpfcoautor3'])){
$nomecoautor3 = $_POST['nomecoautor3'];
$snomecoautor3 = $_POST['snomecoautor3'];
$cpfcoautor3 = $_POST['cpfcoautor3'];
echo ("3existe");
}

if(isset($_POST['nomecoautor4']) and isset($_POST['snomecoautor4'])  and isset($_POST['cpfcoautor4'])){
$nomecoautor4 = $_POST['nomecoautor4'];
$snomecoautor4 = $_POST['snomecoautor4'];
$cpfcoautor4 = $_POST['cpfcoautor4'];
echo ("4existe");
}


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
										<email class="col-md-6"><?php echo "<b>Artigo:</b> " . $titulo; ?> </email>
										<usuario class="col-md-6"><?php echo "<b>Área:</b> " . $area;  ?> </usuario>
									</div>
									<div class="row"><br
										<categoria class="col-md-6"><?php echo "<b>Categoria:</b> " . $categoria;  ?> </categoria>
										<apresentacao class="col-md-6"><?php echo "<b>Apresentação:</b> " . $apresentacao;  ?> </apresentacao>
									</div>

									<?php				
									//Se Existir apenas o coautor 1;
								if(isset($nomecoautor1) and !isset($nomecoautor2) and !isset($nomecoautor3) and !isset($nomecoautor4)){					
									echo('<div class="row"></br>
										<coautor class="col-md-4"> <b>Nome co-autor 1:</b> '.$nomecoautor1.' </coautor>
										<coautor class="col-md-4"> <b>Sobrenome co-autor 1: </b> '.$snomecoautor1.' </coautor>
										<coautor class="col-md-4"> <b>CPF co-autor 1:</b> '.$cpfcoautor1.' </coautor>
									</div>');

									//Se Existir apenas o coautor 1 e 2;
								}else if(isset($nomecoautor1) and isset($nomecoautor2) and !isset($nomecoautor3) and !isset($nomecoautor4)){
									echo('<div class="row"></br>
											<coautor class="col-md-4"><b>Nome co-autor 1:</b> '.$nomecoautor1.' </coautor>
											<coautor class="col-md-4"><b>Sobrenome co-autor 1: </b> '.$snomecoautor1.' </coautor>
											<coautor class="col-md-4"><b>CPF co-autor 1:</b> '.$cpfcoautor1.' </coautor>
										</div>');					
									echo('	
										<div class="row"></br>
											<coautor class="col-md-4"><b>Nome co-autor 2:</b>  '.$nomecoautor2.' </coautor>
											<coautor class="col-md-4"><b>Sobrenome co-autor 2: </b>  '.$snomecoautor2.' </coautor>
											<coautor class="col-md-4"><b>CPF co-autor 2:</b>  '.$cpfcoautor2.' </coautor>
										</div>');

									//Se Existir apenas o coautor 1, 2 e 3;
								}else if(isset($nomecoautor1) and isset($nomecoautor2) and isset($nomecoautor3) and !isset($nomecoautor4)){	
									echo('<div class="row"></br>
											<coautor class="col-md-4"><b>Nome co-autor 1:</b>  '.$nomecoautor1.' </coautor>
											<coautor class="col-md-4"><b>Sobrenome co-autor 1: </b>  '.$snomecoautor1.' </coautor>
											<coautor class="col-md-4"><b>CPF co-autor 1:</b>  '.$cpfcoautor1.' </coautor>
										</div>');					
									echo('	
										<div class="row"></br>
											<coautor class="col-md-4"><b>Nome co-autor 2:</b>  '.$nomecoautor2.' </coautor>
											<coautor class="col-md-4"><b>Sobrenome co-autor 2: </b>  '.$snomecoautor2.' </coautor>
											<coautor class="col-md-4"><b>CPF co-autor 2:</b>  '.$cpfcoautor2.' </coautor>
										</div>');
			
									echo('	
									<div class="row"></br>
										<coautor class="col-md-4"><b>Nome co-autor 3:</b>  '. $nomecoautor3.' </coautor>
										<coautor class="col-md-4"><b>Sobrenome co-autor 3: </b>  '. $snomecoautor3.' </coautor>
										<coautor class="col-md-4"><b>CPF co-autor 3:</b>  '. $cpfcoautor3.' </coautor>
									</div>');

									//Se Existir todos os coautores ;
								}else if(isset($nomecoautor1) and isset($nomecoautor2) and isset($nomecoautor3) and isset($nomecoautor4)){	
									echo('<div class="row"></br>
											<coautor class="col-md-4"><b>Nome co-autor 1:</b>  '.$nomecoautor1.' </coautor>
											<coautor class="col-md-4"><b>Sobrenome co-autor 1: </b>  '.$snomecoautor1.' </coautor>
											<coautor class="col-md-4"><b>CPF co-autor 1:</b>  '.$cpfcoautor1.' </coautor>
										</div>');					
									echo('	
										<div class="row"></br>
											<coautor class="col-md-4"><b>Nome co-autor 2:</b>  '.$nomecoautor2.' </coautor>
											<coautor class="col-md-4"><b>Sobrenome co-autor 2: </b>  '.$snomecoautor2.' </coautor>
											<coautor class="col-md-4"><b>CPF co-autor 2:</b>  '.$cpfcoautor2.' </coautor>
										</div>');
			
									echo('	
									<div class="row"></br>
										<coautor class="col-md-4"><b>Nome co-autor 3:</b>  '. $nomecoautor3.' </coautor>
										<coautor class="col-md-4"><b>Sobrenome co-autor 3: </b>  '. $snomecoautor3.' </coautor>
										<coautor class="col-md-4"><b>CPF co-autor 3:</b>  '. $cpfcoautor3.' </coautor>
									</div>');				
									echo('	
									<div class="row"></br>
										<coautor class="col-md-4"><b>Nome co-autor 4:</b>  '. $nomecoautor4.' </coautor>
										<coautor class="col-md-4"><b>Sobrenome co-autor 4: </b>  '.$snomecoautor4.' </coautor>
										<coautor class="col-md-4"><b>CPF co-autor 4:</b>  '. $cpfcoautor4.' </coautor>
									</div>');
								}?>
									<div class="row"></br>										
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

                env.nomecoautor1 = <?php echo "'$nomecoautor1'"; ?> ;
                env.snomecoautor1 = <?php echo "'$snomecoautor1'"; ?> ;
                env.cpfcoautor1 = <?php echo "'$cpfcoautor1'"; ?> ;

                env.nomecoautor2 = <?php echo "'$nomecoautor2'"; ?> ;
                env.snomecoautor2 = <?php echo "'$snomecoautor2'"; ?> ;
                env.cpfcoautor2 = <?php echo "'$cpfcoautor2'"; ?> ;

                env.nomecoautor3 = <?php echo "'$nomecoautor3'"; ?> ;
                env.snomecoautor3 = <?php echo "'$snomecoautor3'"; ?> ;
                env.cpfcoautor3 = <?php echo "'$cpfcoautor3'"; ?> ;

                env.nomecoautor4 = <?php echo "'$nomecoautor4'"; ?> ;
                env.snomecoautor4 = <?php echo "'$snomecoautor4'"; ?> ;
                env.cpfcoautor4 = <?php echo "'$cpfcoautor4'"; ?> ;
              
                
                
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