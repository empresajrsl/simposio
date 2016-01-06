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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Painel de estatitisticas</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

    	
		<div class="row">
			<div class ="col-md-12 col-lg-12 col-xs-12"><!--ajuste-->
				<div class="panel panel-default" style="border-radius:30px">
					<div class="panel-heading" style="background-color: black; padding:15px; border-radius:30px 30px 0px 0px"></div>
					
					<table style="margin-left: 100px">
						<!-- <th> Total de usuarios cadastrados </th>
						<th> Total de trabalhos cadastrados </th>
						<th> Total de incrições pagas </th>
						<th> Total trabalhos aprovados </th> -->

						<td>
							<img src="../images/digitos/d1.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d0.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d2.bmp" style="width:12%; heigth:12%;">
						</td>

						<td>		
							<img src="../images/digitos/d2.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d6.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d3.bmp" style="width:12%; heigth:12%;">
						</td>

						<td>		
							<img src="../images/digitos/d5.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d1.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d6.bmp" style="width:12%; heigth:12%;">
						</td>

						<td>		
							<img src="../images/digitos/d3.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d0.bmp" style="width:12%; heigth:12%;">
							<img src="../images/digitos/d2.bmp" style="width:12%; heigth:12%;">
						</td>
					</table>
				</div>
			</div><!--Ajuste-->
		</div><br>	
	    <div class="row">

				<!-- <div class="col-md-3 col-xs-3 col-lg-3">
		        	<div class="jumbotron">
		               	<center><h4>Total de Cadastros:</h4></center>
	                    <?php echo '<h2><center>'.$totalcad.'</h2></center>' ?>
	            	</div>
	            </div> -->
		    

		        <div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron box-chart">
		               	 <center><h4>Total de trabalhos cadastrados por categoria</h4><canvas id="GraficoDonut" style="width:100%;heigth:200px;"></canvas></center>
	                </div>
	        	</div>

	        	 <div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron box-chart">
		               	 <center><h4>Total de trabalhos cadastrados por area tematica</h4><canvas id="GraficoDonut2" style="width:100%;heigth:200px;"></canvas></center>
	                </div>
	        	</div>
		          
		<!--/div></div-->

		<!--div class="row"><div class="col-md-12 col-xs-12 col-lg-12"-->
		        <!-- <div class="col-md-3 col-xs-3 col-lg-3">
		        	<div class="jumbotron">
		               	<div class="col-md-12 col-xs-12 col-lg-12">
	                		<center><h4>Total de Trabalhos Aprovados:</h4></center>
	                    </div></br>
	                    	teste	
	                </div>
	            </div> -->
		                

		        <div class="col-md-4 col-xs-4 col-lg-">
		        	<div class="jumbotron">
	               		
		                    <center><h4>Total de trabalhos aprovados por categoria</h4><canvas id="GraficoDonut3" style="width:100%;heigth:200px;"></canvas></center>
	                    
	                    	
	    	        </div>
	    	    </div>
			                
		</div>

		<div class="row">

				<div class="col-md-6 col-xs-6 col-lg-6">
			        <div class="jumbotron">
			           <center><h4>Total de cadastro por região</h4><canvas id="GraficoBarra" style="width:100%"></canvas></center>
			            	
                    </div>
                    			
                </div>
           
			    <div class="col-md-6 col-xs-6 col-lg-6">
		        	<div class="jumbotron">
	               	    <center><h4>Total de cadastro por Estado</h4><canvas id="GraficoBarra2" style="width:100%;"></canvas></center>
	               	   
	                </div>
	            </div>
        </div>


		<!-- <div class="row">
			<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
			    <div class="jumbotron">
			        <center><h4>Trabalhos aprovados com inscrições efetuadas e pagas:</h4></center>
			        teste
                </div>
            </div>
        </div> -->

        <div class="row">
        	<div class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4">
			    	<a href="menuadm.php"><button class="btn btn-primary col-md-12 col-xs-12 col-lg-12 glyphicon glyphicon-home"> Menu</button></a>
                </div>
            </div>
        </div></br>
			                
    <div><!--fim container-->

    	

<script src="../js/scripts/graficomodular.js"></script>
<script src="../js/scripts/graficobarra.js"></script>
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