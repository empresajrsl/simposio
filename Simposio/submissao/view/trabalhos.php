<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../Chart.js-master/Chart.min.js"> </script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Trabalhos</title>

	
</head>
<body>

	
    
<div class="container-fluid">
    <div class="col-md-12" style="position: fixed; z-index: 9999;"><?php include("menuadm.php"); ?></div>
    <br><br><br><br><br>
   
    <div class="jumbotron">
    	<div class="panel panel-primary">
    		<div class="panel-heading"><h3>Trabalhos aprovados</h3></div>
    		<div class="panel-body" style="overflow: hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:auto;height: 300px">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Nome</th><th>Sobrenome</th><th>E-mail</th><th>Média final</th>
							</thead>
							<tbody id="trabaprovado">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
    		<div class="panel-heading"><h3>Trabalhos Reprovados</h3></div>
    		<div class="panel-body" style="overflow: hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:auto;height: 300px">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Nome</th><th>Sobrenome</th><th>E-mail</th><th>Média final</th>
							</thead>
							<tbody id="trabreprovado">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
    		<div class="panel-heading"><h3>Trabalhos com avaliações 1 pendentes</h3></div>
    		<div class="panel-body" style="overflow: hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:auto;height: 300px">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Avaliador</th><th>E-mail do avaliador</th><th>Telefone</th><th>Celular</th>
							</thead>
							<tbody id="avapendente">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
    		<div class="panel-heading"><h3>Trabalhos com avaliações 2 pendentes</h3></div>
    			<div class="panel-body"  style="overflow: hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:auto;height: 300px">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Avaliador</th><th>E-mail do avaliador</th><th>Telefone</th><th>Celular</th>
							</thead>
							<tbody id="avapendente2">
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>
			
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			var env = {};
			$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/trabalhosap.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                var linha;
		                var count = 0;
		                $.each(data,function(key,val){
		                	var nota1 = parseFloat(data[key]['notafinal']);
		                	var nota2 = parseFloat(data[key]['nota2']);
		                	var media =  (nota1 + nota2)/2;
		                	media = String(media);
		                	media = media.substring(0, 3);
		                	linha = "<tr>";

		                	$.each(data[key],function(indice,valor){

		                		if(indice == "notafinal"){
		                			linha+="<td>"+media+"</td>";
		                			return;
		                		}
		                		if(indice == "nota2"){
		                			return;
		                		}
                                                
                                                if(indice == "id_artigo"){
		                			return;
		                		}

		                		
		                		linha+="<td>"+valor+"</td>";
		                		
		                	});


		                	linha+="</tr>";

		                	$("#trabaprovado").append(linha);

		                		
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabaprovado').append('<b>nenhum trabalho foi aprovado até o momento </b>');
		            	}
		    });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			var env = {};
			$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/trabalhosrp.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                var linha;
		                var count = 0;
		                $.each(data,function(key,val){
		                	var nota1 = parseFloat(data[key]['notafinal']);
		                	var nota2 = parseFloat(data[key]['nota2']);
		                	var media =  (nota1 + nota2)/2;
		                	media = String(media);
		                	media = media.substring(0, 3);
		                	linha = "<tr>";

		                	$.each(data[key],function(indice,valor){

		                		if(indice == "notafinal"){
		                			linha+="<td>"+media+"</td>";
		                			return;
		                		}
		                		if(indice == "nota2"){
		                			return;
		                		}
		                		
		                		linha+="<td>"+valor+"</td>";
		                		
		                	});


		                	linha+="</tr>";

		                	$("#trabreprovado").append(linha);

		                		
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabreprovado').append('<b>Nenhum trabalho foi reprovado até o momento</b>');
		            	}
		    });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			var env = {};
			$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/avaliacao1pendente.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                var linha;
		                var count = 0;
		                $.each(data,function(key,val){
		                	
		                	linha = "<tr>";

		                	$.each(data[key],function(indice,valor){

		                		linha+="<td>"+valor+"</td>";
		                		
		                	});


		                	linha+="</tr>";

		                	$("#avapendente").append(linha);

		                		
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#avapendente').append('<b>Não há nenhuma avaliação 1 pendente</b>');
		            	}
		    });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			var env = {};
			$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/avaliacao2pendente.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                var linha;
		                var count = 0;
		                $.each(data,function(key,val){
		                	
		                	linha = "<tr>";

		                	$.each(data[key],function(indice,valor){

		                		linha+="<td>"+valor+"</td>";
		                		
		                	});


		                	linha+="</tr>";

		                	$("#avapendente2").append(linha);

		                		
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#avapendente2').append('<b>Não há nenhuma avaliação 2 pendente</b>');
		            	}
		    });
		});
	</script>

</div>
</body>
</html>	