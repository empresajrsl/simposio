<?php 

include("../controller/funcoes/funcoesmysql.php");

// conta quantos cadastros existem
$busca = select('count(id_usuario) as total','sl_cadusu','');
$totalcad = $busca[0]['total'];

// conta quantos cadastros existem
$busca = select('count(id_usuario) as total','sl_cadusu','');
$totalcad = $busca[0]['total'];





?> 
<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Painel de Estatisticas</title>
</head>
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Painel de estatitisticas</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

    	<h3><center>Bem vindo ao painel de estatisticas.</center></h3>

	    <div class="row">

				<div class="col-md-3 col-xs-3 col-lg-3">
		        	<div class="jumbotron" style="background-color: rgb(51,122,183);">
		               	<center><h4>Total de Cadastros:</h4></center>
	                    <?php echo '<h2><center>'.$totalcad.'</h2></center>' ?>
	            	</div>
	            </div>
		    

		        <div class="col-md-3 col-xs-3 col-lg-3">
		        	<div class="jumbotron" style="background-color: rgb(168,198,96);">
		               	<center><h4>Total de trabalhos Cadastrados por Categoria:</h4></center>
	            		<br>
	                </div>
	        	</div>
		          
		<!--/div></div-->

		<!--div class="row"><div class="col-md-12 col-xs-12 col-lg-12"-->
		        <div class="col-md-3 col-xs-3 col-lg-3">
		        	<div class="jumbotron">
		               	<div class="col-md-12 col-xs-12 col-lg-12">
	                		<center><h4>Total de Trabalhos Aprovados:</h4></center>
	                    </div></br>
	                    	teste	
	                </div>
	            </div>
		                

		        <div class="col-md-3 col-xs-3 col-lg-3">
		        	<div class="jumbotron">
	               		<div class="col-md-12 col-xs-12 col-lg-12">
		                    <center><h4>Total de Trabalhos Aprovados por Categoria:</h4></center>
	                    </div></br>
	                    	teste	
	    	        </div>
	    	    </div>
			                
		</div>

		<div class="row">

				<div class="col-md-6 col-xs-6 col-lg-6">
			        <div class="jumbotron">
			            <center><h4>Total de Cadastros por Região:</h4></center>
			            teste	
                    </div></br>
                    			
                </div>
           
			    <div class="col-md-6 col-xs-6 col-lg-6">
		        	<div class="jumbotron">
	               	    <center><h4>Total de Cadastros por Estado:</h4></center>
	               	    teste	
	                </div>
	            </div>
        </div>


		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
			    <div class="jumbotron">
			        <center><h4>Trabalhos aprovados com inscrições efetuadas e pagas:</h4></center>
			        teste
                </div>
            </div>
        </div>

        <div class="row">
        	<div class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4">
			    	<button class="btn btn-primary col-md-12 col-xs-12 col-lg-12">Voltar</button>
                </div>
            </div>
        </div></br>
			                
    <div><!--fim container-->
</body>
</html>