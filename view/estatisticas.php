<?php include("verificasessao.php"); ?>

<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../Chart.min.js"> </script>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b></b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
    	

		<div class="row" >
			<div class="row">
        		<div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-5 col-lg-2 col-lg-offset-5" style="background-color: #fff">
			    	<a href="menuadm.php"><button class="btn btn-success col-md-12 col-xs-12 col-lg-12 glyphicon glyphicon-home" style="border-radius:0px 0px 30px 30px; margin-top:-30px"> Menu</button></a>
                </div>
            </div></br>

			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: #5cb85c  ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Usuários cadastrados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: #5cb85c  ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Trabalhos cadastrados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: #5cb85c  ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Trabalho aprovados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: #5cb85c  ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Inscrições pagas</b>
					</center>
				</div>
			</div>

			<div class ="col-md-12 col-lg-12 col-xs-12"><!--ajuste-->
				<div class="panel panel-default" style="border-radius:30px">
					<div class="panel-heading" style="background-color: #5cb85c  ; padding:15px; border-radius:30px 30px 0px 0px"></div>
					
					<table> 
						<tr>
							<td class="col-md-3 col-xs-3 col-lg-3" >
								<center id="usuarios">
								
								</center>
							</td>

							<td class="col-md-3 col-xs-3 col-lg-3">
								<center id="trabalhos">
								
								</center>
							</td>

							<td class="col-md-3 col-xs-3 col-lg-3">
								<center id="trabaprovado">
								
								</center>
							</td>

							<td class="col-md-3 col-xs-3 col-lg-3">
								<center id="inscricao">
								
								</center>
							</td>
						</tr>
					</table>
				</div>
			</div><!--Ajuste-->
		</div><br>
<div class="jumbotron" style="background-color: #fff">
	   <h3>	Grafico por Cadastro de Trabalhos </h3>
	    <div class="row">

		        <div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron box-chart">
		               	 <center><h4>Total de trabalhos cadastrados por categoria</h4><canvas id="GraficoDonut" style="width:100%;heigth:300px;"></canvas></center>
	                </div>
	        	</div>

	        	 <div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron box-chart">
		               	 <center><h4>Total de trabalhos cadastrados por Área temática</h4><canvas id="GraficoDonut2" style="width:100%;heigth:300px;"></canvas></center>
	                </div>
	        	</div>
		 
		                
		        <div class="col-md-4 col-xs-4 col-lg-">
		        	<div class="jumbotron">
	               		
		                    <center><h4>Total de trabalhos aprovados por categoria<br/><br/></h4><canvas id="GraficoDonut3" style="width:100%;heigth:300px;"></canvas></center>
	                    
	                    	
	    	        </div>
	    	    </div>
			                
		</div>
</div>
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-xs-6 col-lg-6">
		        <div class="jumbotron" style="background-color: #fff">
		           <center><h4>Total de cadastro por região</h4><canvas id="GraficoBarra" style="width:100%"></canvas></center>
		            	
                </div>
                			
            </div>
        </div>

         <div class="row">
		    <div class="col-md-12 col-xs-12 col-lg-12">
	        	<div class="jumbotron" style="background-color: #fff">
               	    <center><h4>Total de cadastro por Estado</h4><canvas id="GraficoBarra2" ></canvas></center>
               	   
                </div>
            </div>
    	</div>

		
			                
    <div><!--fim container-->

    	

    	
    <?php include('../controller/funcoes/funcoesmysql.php');?>
    <?php include('../controller/funcoes/placar.php'); ?>
    <?php include('../controller/funcoes/graficomodular.php'); ?>
    <?php include('../controller/funcoes/graficobarra.php'); ?>

<script type="text/javascript">
		window.onload = function(){

        var ctx = document.getElementById("GraficoDonut").getContext("2d");
        var PizzaChart = new Chart(ctx).Doughnut(data, options);

        var ctx = document.getElementById("GraficoDonut2").getContext("2d");
        var PizzaChart = new Chart(ctx).Doughnut(data2, options);

        var ctx = document.getElementById("GraficoDonut3").getContext("2d");
        var PizzaChart = new Chart(ctx).Doughnut(data3, options);

        var ctx = document.getElementById("GraficoBarra").getContext("2d");
        var BarChart = new Chart(ctx).Bar(databarra, options);

        var ctx = document.getElementById("GraficoBarra2").getContext("2d");
        var BarChart = new Chart(ctx).Bar(databarra2, options);
    }</script>


</body>
</html>