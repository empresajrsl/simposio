<?php include("verificasessao.php"); ?>
<?php $nome = $_SESSION['nome']; ?>
<?php $tipocadastro = $_SESSION['tipocadastro']; ?>
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
    
	<title>sistema de avaliação</title>
	<style type="text/css">
        li{
            font-size: 18px
        }
        nav{
            margin-top: -5px;

        }
        #msg{
        	font-size: 20px;
        	color: white;

        }

        #nomeevento{
        	font-size: 32px;
        }

       

    </style>
</head>
<body>
	
        
<div class="container-fluid">
			
			<nav class="navbar navbar-inverse">
	          	<div class="container-fluid">
	            <div class="navbar-header">
	              <a class="navbar-brand" href="#" style="font-size:28px" id="nomeevento">Sgagro</a>
	            </div>
	            <ul class="nav navbar-nav">
	            	<li ><a href="estatisticas.php" id="msg">Olá avaliador(a): <?php echo $nome;  ?>, seja bem vindo ao sitema de avaliação dos trabalhos</a></li>
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
              <li><a href="../sessao/fecharsessao.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
            <?php 
            if($tipocadastro == "Autor e Avaliador"){
	           echo' <ul class="nav navbar-nav navbar-right">
	              <li><a href="submit.php"><span class="glyphicon glyphicon-log-in"></span> Entrar como autor</a></li>
	            </ul>';
        	} ?>
          </div>
        </nav>
		
		
	    
	   
	    		<div class="jumbotron" style="margin:3px; padding:25px"> 
			     	<div class="row">
			     		<div class="col-md-12 col-xs-12 col-lg-12">
			     			<h3>Instruções de como avaliar os trabalhos: <button class="btn btn-primary" id="instrucoes">Visualizar arquivo oficial de avaliação dos trabalhos</button></h3>
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
		$(document).on('click','#instrucoes',function(){
			var acao = 'instrucoes';
			window.open("visualizartrabalho.php?ver="+acao);
		});
	</script>	     	
		     	
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
		                var x = 1;
		               
		                	
		                	if(data[0]['vez'] == 1){
			                	 $.each(data,function(key,val){	
								    var linha =     	'<div class="panel panel-primary" style="margin-top:50px">';
								    linha += 					'<div class="panel-heading">Trabalho '+count2+'</div>';
									linha +=	     				'<div class="row" >';
									linha +=	     					'<div class="col-md-12">';
									linha +=	     						'<table class="table">';
									linha +=	     						'<th>Título</th><th>Área</th><th>categroia</th>';
									linha +=	     						'<tr><td> '+data[count][0]['titulo'] +' </td><td> '+data[count][0]['area'] +' </td><td> '+data[count][0]['categoria'] +' </td><td><button class="btn btn-primary vertrabalho " iddotrab="'+data[count][0]['idartigo']+'" >Visualizar trabalho</button></td></tr>';
									linha +=	     						'</table>';
									linha +=	     						'<table class="table" id="'+data[count][0]['id_artigo']+'">';
									linha +=	     						'<th>Nota para o critério 1 </th><th> Nota para o critério 2 </th><th>Nota para o critério 3</th><th>Nota para o critério 4</th><th>Nota para o critério 5 </th><th>Nota para o critério 6 </th><th>Nota para o critério 7</th><th>Nota para o critério 8</th><th>Nota para o critério 9</th><th>Nota para  critério 10</th> <th>Média final</th>';
									linha +=	     						'<tr><td id="colunanota1">  </td><td id="colunanota2">  </td><td id="colunanota3">  </td><td id="colunanota4">  </td><td id="colunanota5">  </td><td id="colunanota6">  </td><td id="colunanota7">  </td><td id="colunanota8">  </td><td id="colunanota9">  </td><td id="colunanota10"></td></td><td id="mediafinal"></td></tr>';
									linha +=	     						'</table>';
									linha +=	     					'</div>';	
									linha +=	     				'</div>';
									linha +=     				'</div>';
								    linha += 				'</div>';			
				                	

				                	

				                	$('#trabalhos').append(linha);
				                	

				                	
				                	var idtrabalho = data[count][0]['id_artigo'];

				                	if(data[count][0]['notafinal'] == null){
				                		$('#'+idtrabalho+' #mediafinal' ).append('<center><p style="font-weight:bold; font-size:32px; color:#337ab7"> 0 </p></center>');
				                	}else{
				                		var media = data[count][0]['notafinal'];
				                		media = media.toString();
				                		var mediafinal = media.substring(0, 5);
				                		$('#'+idtrabalho+' #mediafinal' ).append('<center><p style="font-weight:bold; font-size:32px; color:#337ab7">'+mediafinal+' </p></center>');
				                	}

				                	for(x=1;x<11;x++){
										if( data[count][0]['nota'+x] == null){
											$('#'+idtrabalho+' #colunanota'+x).append('<input type="number" min="0" max="5" style="margin-bottom:5px; margin-left:12px"  id="nota'+x+'"><button idtrabalho="'+data[count][0]['id_artigo']+'" type="button" class="btn btn-success notas" email="'+data[count][0]['email']+'" nota="'+x+'" style="border-radius:80px"><i class="glyphicon glyphicon-ok"> Salvar</i> </button>');
										}else{
											$('#'+idtrabalho+' #colunanota'+x).append('<center><p style="font-weight:bold; font-size:28px; color:#337ab7">'+data[count][0]['nota'+x]+'</p> <button class="btn btn-danger editar" idtrabalho='+data[count][0]['id_artigo']+' nota='+x+' email='+data[count][0]['email']+' style="border-radius:80px"><i class="glyphicon glyphicon-pencil"> Editar</i></button></center>');
										}
									}

									count++;
				                	count2++;
				                	});	
			            }else{
			            	    $.each(data[0],function(key,val){
				            		var linha =     	'<div class="panel panel-primary" style="margin-top:50px">';
								    linha += 					'<div class="panel-heading">Trabalho '+count2+'</div>';
									linha +=	     				'<div class="row" >';
									linha +=	     					'<div class="col-md-12">';
									linha +=	     						'<table class="table">';
									linha +=	     						'<th>Título</th><th>Área</th><th>categroia</th>';
									linha +=	     						'<tr><td> '+data[0][count]['titulo']+' </td><td> '+data[0][count]['area'] +' </td><td> '+data[0][count]['categoria'] +' </td><td><button class="btn btn-primary vertrabalho " iddotrab="'+data[0][count]['idartigo']+'" >Visualizar trabalho</button></td></tr>';
									linha +=	     						'</table>';
									linha +=	     						'<table class="table" id="'+data[0][count]['id_artigo']+'">';
									linha +=	     						'<th>Nota para o critério 1 </th><th> Nota para o critério 2 </th><th>Nota para o critério 3</th><th>Nota para o critério 4</th><th>Nota para o critério 5 </th><th>Nota para o critério 6 </th><th>Nota para o critério 7</th><th>Nota para o critério 8</th><th>Nota para o critério 9</th><th>Nota para  critério 10</th><th>Média final</th>';
									linha +=	     						'<tr><td id="colunanota1">  </td><td id="colunanota2">  </td><td id="colunanota3">  </td><td id="colunanota4">  </td><td id="colunanota5">  </td><td id="colunanota6">  </td><td id="colunanota7">  </td><td id="colunanota8">  </td><td id="colunanota9">  </td><td id="colunanota10"></td><td id="mediafinal"></td></tr>';
									linha +=	     						'</table>';
									linha +=	     					'</div>';	
									linha +=	     				'</div>';
									linha +=     				'</div>';
								    linha += 				'</div>';			
				                	

				                	

				                	$('#trabalhos').append(linha);
				                	
				                	
				                	var idtrabalho = data[0][count]['id_artigo'];

				                	if(data[0][count]['notafinal'] == null){
				                		$('#'+idtrabalho+' #mediafinal' ).append('<center><p style="font-weight:bold; font-size:32px; color:#337ab7"> 0 </p></center>');
				                	}else{
				                		var media = data[0][count]['notafinal'];
				                		media = media.toString();
				                		var mediafinal = media.substring(0, 5);
				                		$('#'+idtrabalho+' #mediafinal' ).append('<center><p style="font-weight:bold; font-size:32px; color:#337ab7">'+mediafinal+' </p></center>');
				                	}	
				                	

				                	for(x=1;x<11;x++){
										if( data[0][count]['nota'+x] == null){
											$('#'+idtrabalho+' #colunanota'+x).append('<input type="number" min="0" max="5" style="margin-bottom:5px; margin-left:12px"  id="nota'+x+'"><button idtrabalho="'+data[0][count]['id_artigo']+'" type="button" class="btn btn-success notas" email="'+data[0][count]['email']+'" nota="'+x+'" style="border-radius:80px"><i class="glyphicon glyphicon-ok"> Salvar</i> </button>');
										}else{
											$('#'+idtrabalho+' #colunanota'+x).append('<center><p style="font-weight:bold; font-size:28px; color:#337ab7">'+data[0][count]['nota'+x]+'</p> <button class="btn btn-danger editar" idtrabalho='+data[0][count]['id_artigo']+' nota='+x+' email='+data[0][count]['email']+' style="border-radius:80px"><i class="glyphicon glyphicon-pencil"> Editar</i></button></center>');
										}
									}

									count++;
				                	count2++;	
			                	});
			            }    
			                
		                
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabalhos').append('<h2><b>Nenhum trabalho cadastrado até o momento</b></h2>');
		            	}
		    		});
				});
	</script>

	<script type="text/javascript">

		$(document).on('click','.notas',function(){
			console.log('entrou na função');
			var env = {};
			env.nota = $(this).attr('nota');
			env.idtrabalho = $(this).attr('idtrabalho'); 
			env.valor = $("#"+env.idtrabalho+" #nota"+env.nota+"").val();
			env.email = $(this).attr('email');
			console.log(env);

			$('#'+env.idtrabalho+' #colunanota'+env.nota+'').html('');
            $('#'+env.idtrabalho+' #colunanota'+env.nota+'').append("<center><p style='font-weight:bold; font-size:28px; color:#337ab7'>"+env.valor+"</p><button class='btn btn-danger editar' idtrabalho="+env.idtrabalho+" nota="+env.nota+" email="+env.email+" style='border-radius:80px'><i class='glyphicon glyphicon-pencil'> Editar</i></button></center> ");
									
			$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/cadnotas.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		            	console.log('sucesso');
		                console.log(data);
		            	$('#'+env.idtrabalho+' #mediafinal').html('');
		            	$('#'+env.idtrabalho+' #mediafinal').append('<center><p style="font-weight:bold; font-size:32px; color:#337ab7">'+data['notafinal']+' </p></center>');

		                
		                
		             

		            }, error: function(data) {
		            		console.log('erro');
		                	console.log(data);
		               		
		            	}
		    });
		});
				
		
		
	</script>

	<script type="text/javascript">
		$(document).on('click','.editar',function(){
			var env = {};
			env.idtrabalho = $(this).attr('idtrabalho');
			env.nota = $(this).attr('nota');
			env.email = $(this).attr('email');
			console.log(env);
			
           	$('#'+env.idtrabalho+' #colunanota'+env.nota+'').html('');
            $('#'+env.idtrabalho+' #colunanota'+env.nota+'').append('<input type="number" min="0" max="5" style="margin-bottom:5px; margin-left:12px"  id="nota'+env.nota+'"> <button idtrabalho="'+env.idtrabalho+'" type="button" class="btn btn-success notas" email="'+env.email+'" nota="'+env.nota+'" style="border-radius:80px"><i class="glyphicon glyphicon-ok"> Salvar</i></button>');
		            
		});	
	</script>

	<script type="text/javascript">
		$(document).on('click','.vertrabalho',function(){
			
			var idtrabalho = $(this).attr('iddotrab');

			window.open("visualizartrabalho.php?id="+idtrabalho);

		});
	</script>

	    
</div>

</body>
</html>