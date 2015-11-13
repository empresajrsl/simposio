<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo('
		<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<div class="container">
    <!--Banner-->
    <div class="jumbotron" style="background: url("../images/SGAGRO LOGO.png");">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
                <h2 class="col-md-8 col-xs-8 col-lg-8"><center>Sessão encerrada, para continuar faça login novamente</center></h2>
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
            </div>
        </div>
    </div>

    <div class="jumbotron">
    	<div class="row">
    		<h2> <a href="../index.php"> <center>Fazer login</center> </a></h2>
    	</div>
    </div>
    </div>');
exit;
}
?>

<?php $email = $_SESSION['usuario']; ?>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Envio do trabalho</title>
</head>
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png');">
	        <div class="row">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
	                <h1 class="col-md-8 col-xs-8 col-lg-8"><center>Envio do trabalho</center></h1>
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div class="jumbotron">
			<div class="row" >

				<div class="row">
					<h2> Trabalhos cadastrados até o momento<h2>
				</div>
				<div class="row">	
				<table id="trabalhos" name="trabalhos" class="table table-striped">
								
						<th> Título do trabalho </th>
						<th>  </th>
						<th> Status </th>
						<th>  </th>
						
				</table>
				</div>
				<div class="row">
					<input type="button" id="sair" name="sair" value="Sair" class="btn btn-primary" style="width:150px"></input>
					<input type="button" id="cad" name="cad" value="Cadastrar trabalho" class="btn btn-primary"></input>
				</div>
					
			</div>
		</div>
	</div>

	<script type="text/javascript">
			 $(document).on('click','#sair',function(){
			 	location.href='../sessao/fecharsessao.php';
			 });
	</script>

	<script type="text/javascript">
			 $(document).on('click','#cad',function(){
			 	location.href='submissao_artigo.php';
			 });
	</script>

	<script type="text/javascript">
	$(document).ready(function(){ 
		var env = {};
			env.email = <?php echo "'$email'"; ?> ;
		

		$.ajax({
				            type: "POST",
				            url: "../controller/ACAO/sl-ACAOquanttrab.php",
				            data: env,
				            dataType : 'json',
				            success: function(data){
				                console.log(data);
				                var count = 0;
				                $.each(data,function(key,val){
				                	if(data[count]['idartigo'] == ''){
				                		var status = '<td>Pendente, arquivo PDF não enviado</td> <td> <form  method="POST" action="upload.php" enctype="multipart/form-data" id="form'+count+'"> <input type="file" class="enviar btn btn-success" id="enviar'+count+'" name="arquivo"></input> <br> <input type="submit" class="enviar btn btn-success" id="enviar'+count+'" value=" Enviar trabalho "> </input> <input type="hidden" name="idartigo" value="'+data[count]['id_artigo']+'"</input></form></td>';
				                	}else{
				                		var status = '<td>Arquivo PDF enviado com sucesso. Por favor aguarde o resultado. </td> <td><form method="POST" action="viewartigo.php"> <input type="submit" class="verartigo btn btn-primary" id="veratigo'+count+'" value="Vizualizar trabalho" >  </input> <input type="hidden" name="idartigo" value="'+data[count]['id_artigo']+'"</input> </form></td>';
				                	}

				                	var linha = '<tr id="'+data[count]['id_artigo']+'"> <td>'+data[count]['titulo']+'</td> <td>'+status+'</td> </tr>';
				                	$('#trabalhos').append(linha);
				                	count++;
				                });
				             

				            }, error: function(data) {
				                console.log(data);
				               $('#trabalhos').append('Nehum artigo enviado até o momento');
				            }
				    		});
	});	

	</script>

	

	

	
</body>