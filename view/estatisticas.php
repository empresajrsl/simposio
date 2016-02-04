<?php include("verificasessaoadm.php"); ?>
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
	<style type="text/css">
		#grafico1{
			height: 300px;
		}
		#grafico2{
			height: 300px;
		}
		
		
	</style>

</head>
<body>

<div class="col-md-12" style="position: fixed; z-index: 9999;"><?php include("menuadm.php"); ?></div>
<br><br><br>
	<div class="container-fluid">

	<div class="container-fluid">
	
		

        <div class="row" >
			
			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Usuários cadastrados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Trabalhos cadastrados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Trabalho aprovados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Inscrições pagas</b>
					</center>
				</div>
			</div>

			<div class ="col-md-12 col-lg-12 col-xs-12"><!--ajuste-->
				<div class="panel panel-default" style="border-radius:30px">
					<div class="panel-heading" style="background-color: green ; padding:15px; border-radius:30px 30px 0px 0px"></div>
					
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

   	</div>	
		
   	
	    
    	
   	<div class="container-fluid">
		
<div class="jumbotron" style="background-color: #fff">
	   
	    <div class="row">

		        <div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron box-chart">
		               	 <center><h4>Total de trabalhos cadastrados por categoria</h4><canvas id="GraficoDonut" ></canvas></center>
	                </div>
	        	</div>

	        	 <div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron box-chart">
		               	 <center><h4>Total de trabalhos cadastrados por Área temática</h4><canvas id="GraficoDonut2" ></canvas></center>
	                </div>
	        	</div>
		 
		                
		        <div class="col-md-4 col-xs-4 col-lg-">
		        	<div class="jumbotron">
	               		
		                    <center><h4>Total de trabalhos aprovados por categoria</h4><br><canvas id="GraficoDonut3" ></canvas></center>
	                    
	                    	
	    	        </div>
	    	    </div>
			                
		</div>
</div>
		<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
		        <div class="jumbotron" style="background-color: #fff">
		           <center>
		           		<h4>Total de cadastro por</h4>
		           		<select class="form-control" id="opcao">
		           			<option id="regiao">Região</option>
		           			<option id="estado">Estado</option>
		           		</select>
		           		<div class="row" id="grafico1">
		           			<canvas id="GraficoBarra" height="80" ></canvas>
		           		</div>
		           		<div class="row" style="display:none" id="grafico2">
		           			<canvas id="GraficoBarra2" height="80" ></canvas>
		           		</div>	

		           </center>
		            	
                </div>
                			
            </div>
        </div>

         

		
			                
    <div><!--fim container-->

    	

    	
    <?php include('../controller/funcoes/funcoesmysql.php');?>
    <?php include('../controller/funcoes/placar.php'); ?>
    <?php include('../controller/funcoes/graficomodular.php'); ?>
    <?php include('../controller/funcoes/graficobarra.php'); ?>

<script type="text/javascript">
		
	$(document).ready(function(){ 
	        var ctx = document.getElementById("GraficoDonut").getContext("2d");
	        var PizzaChart = new Chart(ctx).Doughnut(data, options);

	        var ctx = document.getElementById("GraficoDonut2").getContext("2d");
	        var PizzaChart = new Chart(ctx).Doughnut(data2, options);

	        var ctx = document.getElementById("GraficoDonut3").getContext("2d");
	        var PizzaChart = new Chart(ctx).Doughnut(data3, options);

	        var ctx = document.getElementById("GraficoBarra").getContext("2d");
	        var BarChart = new Chart(ctx).Bar(databarra, options);
	});        

    </script>

    <script type="text/javascript">
		$(document).ready(function(){ 
	    	$(document).on('change','#opcao',function(){ 
	    		var opcao = $('#opcao option:selected').val();
	    		console.log(opcao);

	    		if(opcao == 'Região'){
	    			$('#grafico1').fadeIn();
	    			$('#grafico2').fadeOut();
	    			var ctx = document.getElementById("GraficoBarra").getContext("2d");
	        		var BarChart = new Chart(ctx).Bar(databarra, options);
	        		return;
	    		}else{
	    			
	    			$('#grafico2').fadeIn();
	    			$('#grafico1').fadeOut();
	    			var ctx = document.getElementById("GraficoBarra2").getContext("2d");
	       			var BarChart = new Chart(ctx).Bar(databarra2, options);
	       			return;
	    		}
	    	});
	    });	
    </script>


</body>
</html>