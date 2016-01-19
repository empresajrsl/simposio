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
    <?php include("../controller/funcoes/funcoesmysql.php"); ?>
	<title>Tela de avaliação</title>
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
	    
	   
	    		<div class="jumbotron" style="margin:3px; padding:25px"> 
			     	<div class="row">
			     		<div class="col-md-12 col-xs-12 col-lg-12">
			     			<h3>Instruções de como avaliar os trabalhos: <button class="btn btn-primary">Download do arquivo oficial</button></h3>
			     			<h4>A nota final é a média ponderada baseada em 10 critérios, cada um deles valendo de 0 a 5 pontos</h4>
			     			<h5><b>Critério 1:</b> O título do trabalho é conciso e representa o conteúdo do trabalho? (Peso 1)</h5>
			     			<h5><b>Critério 2:</b> O resumo apresenta o conteúdo do trabalho de forma adequada e segundo as exigências do evento? (Peso 1)</h5>
			     			<h5><b>Critério 3:</b> A introdução contextualiza o problema do trabalho, apresenta a justificativa e relevância teórica e prática da pesquisa? (Peso 2)</h5>
			     			<h5><b>Critério 4:</b> A revisão bibliográfica é atualizada, qualificada, adequada à questão do estudo e pertinente? (Peso 1)</h5>
			     			<h5><b>Critério 5:</b> Os métodos utilizados são pertinentes a questão de estudo e foram utilizados corretamente? (Peso 2)</h5>
			     			<h5><b>Critério 6:</b> Os resultados são analisados corretamente e há condições para replicá-los? (Peso 2)</h5>
			     			<h5><b>Critério 7:</b> As conclusões apresentam as implicações teóricas e práticas do estudo? (Peso 1)</h5>
			     			<h5><b>Critério 8:</b> O texto é claro, adequado ao idioma e a estrutura das seções são articuladas ao objetivo da pesquisa? (Peso 2)</h5>
			     			<h5><b>Critério 9:</b> A formatação do trabalho atende as normas estabelecidas para o evento? (Peso 1)</h5>
			     			<h5><b>Critério 10:</b> O estudo é original e contribui para o campo do conhecimento? (Peso 2)   </h5>
			     		</div>	
		     		</div>	
		     	</div>

		     	

		     	
		     	<div class="row" style="margin-top:20px">
			     	<div class="col-md-12 col-xs-12 col-lg-12" id="trabalhos">
			     	</div>	
		     	</div>	
		     	
	<script type="text/javascript">
		$(document).ready(function(){ 
				var env = {};
					
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/trabalhoscad.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                
		                var count = 0;
		                var count2 = 1;
		                $.each(data,function(key,val){
		                	
		                	
		                	
						    var linha =     	'<div class="panel panel-primary" style="margin-top:50px">';
						    linha += 					'<div class="panel-heading">Trabalho '+count2+'</div>';
							linha +=	     				'<div class="row" >';
							linha +=	     					'<div class="col-md-12">';
							linha +=	     						'<table class="table">';
							linha +=	     						'<th>Título</th><th>Área</th><th>categroia</th>';
							linha +=	     						'<tr><td> '+data[count]['titulo'] +' </td><td> '+data[count]['area'] +' </td><td> '+data[count]['categoria'] +' </td><td><button class="btn btn-primary">Vizualizar trabalho</button></td><td><button class="btn btn-primary">Download do PDF</button></td></tr>';
							linha +=	     						'</table>';
							linha +=	     						'<table class="table">';
							linha +=	     						'<th>Nota Critério 1 </th><th> Nota critério 2 </th><th>Nota critério 3</th><th>Nota critério 4</th><th>Nota critério 5 </th><th>Nota critério 6 </th><th>Nota critério 7</th><th>Nota critério 8</th><th>Nota critério 9</th><th>Nota critério 10</th>';
							linha +=	     						'<tr><td> <input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota1">  <button type="button" class="btn btn-success notas" nota="1" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button> </td><td> <input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota2">  <button type="button" class="btn btn-success notas" nota="2" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button> </td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota3">  <button type="button" class="btn btn-success notas" nota="3" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota4">  <button type="button" class="btn btn-success notas" nota="4" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota5">  <button type="button" class="btn btn-success notas" nota="5" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota6">  <button type="button" class="btn btn-success notas" nota="6" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota7">  <button type="button" class="btn btn-success notas" nota="7" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota8">  <button type="button" class="btn btn-success notas" nota="8" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota9">  <button type="button" class="btn btn-success notas" nota="9" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px" idtrabalho="'+data[count]['id_artigo']+'" id="nota10">  <button type="button" class="btn btn-success notas" nota="10" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td></tr>';
							linha +=	     						'</table>';
							linha +=	     					'</div>';	
							linha +=	     				'</div>';
							linha +=     				'</div>';
						    linha += 				'</div>';			
		                	
		                	
		                	count++;
		                	count2++;

		                	$('#trabalhos').append(linha);
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabalhos').append('<b>Nenhum trabalho cadastrado até o momento</b>');
		            	}
		    		});
				});
	</script>

	<script type="text/javascript">
		$(document).on('click','.notas',function(){
			console.log('entrou na função');
			var nota = $(this).attr('nota');
			var notaatribuida = $("#nota"+nota+"").val();
			console.log(notaatribuida);
				
			
		});
	</script>



	    
</div>

</body>
</html>