<?php 
	
?>

<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php include("../controller/funcoes/funcoesmysql.php"); ?>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Visualizar Trabalho</title>
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
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

		<div class="jumbotron" style="background-color: white">
			<div class="row">
				<h3 class="col-md-12 col-xs-12 col-lg-12">
					<center>Para realizar o downlod do arquivo, clique sobre o icone disquete localizado na parte superior do documento (Mozilla Firefox e Google Chrome) ou inferior (Opera).</center>
				</h3>
			</div>   

			<div class="row"><br>	    
				<?php
					
					if(isset($_GET['id'])){

						$id = $_GET['id'];
						if(!empty($id)){
						echo '
							<div class="row">
				 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../Trabalhos 2016/'.$id.'.pdf" height="1500"> </iframe>
				 			</div><br/><br/>'; 
				 		}else{
				 			echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor ! </h2>
				 				</div>
				 			<br/><br/>';
				 		}			
					}
					elseif(isset($_GET['ver']) == false){		
						 	echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor </h2>
				 				</div>
				 			<br/><br/>';
				 		}else{

				 			echo'
			 				<div class="row">
				 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../SGAgro Avaliacao de trabalhos.pdf" height="1500"> </iframe>
				 				</div>
				 			<br/><br/>'; 
				 		}			
				?>
			</div>

			<div class="row"><br>
				<center class="col-md-12 col-xs-12 col-lg-12">
					<button type="button" id="voltar" name="voltar" class="col-md-3 col-md-offset-4 btn btn-danger glyphicon glyphicon-off" onclick="window.close()"> Fechar</button>
				</center>
			</div>
		</div>

	</div><!-- fecha container-->

</body>
</html>      