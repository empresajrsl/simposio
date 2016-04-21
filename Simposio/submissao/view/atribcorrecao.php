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

	<style type="text/css">
        li{
            font-size: 18px
        }
        nav{
            margin-top: -25px;
        }

    </style>
</head>
<body>

	
    
<div class="container-fluid">
    <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" style="font-size:28px;color:white">SGAgro</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="estatisticas.php"><span class="glyphicon glyphicon-stats" ></span> Estatisticas</a></li>
              <li><a href="avaliadores_cad.php"><span class="glyphicon glyphicon-education" ></span> Avaliadores </a></li>
              <li><a href="atribuiravaliador.php"><span class="glyphicon glyphicon-star" ></span> Atribuir avaliadores</a></li>
              <li><a href="trabalhos.php"><span class="glyphicon glyphicon-search" ></span> Trabalhos</a></li>
              <li><a href="trabalhos.php"><span class="glyphicon glyphicon-search" ></span> Notificar correções</a></li>
              <li><a href="cadadm.php"><span class="glyphicon glyphicon-plus" ></span> Novo Administrador</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right"style="margin-right: 1%">
              
              <li><a href="../sessao/fecharsessao.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
    </nav>
   
    <div class="jumbotron">
    	<div class="panel panel-primary">
    		<div class="panel-heading"><h3>Indicar Trabalhos com Correções</h3></div>
    		<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Nome</th><th>E-mail</th><th colspan="2">Possui Correções?</th><th>Trabalho</th><th>Correção</th>
							</thead>
							<tbody id="trabaprovado">
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

		                		if(indice=="nome"){
		                		linha+="<td>"+data[key]['nome']+ " " + data[key]['sobrenome'] + "</td>";
		                		return	
		                		}
		                		if(indice== "sobrenome"){
		                			return;
		                		}
		                	

		                		if(indice == "id_artigo"){
		                			return;
		                		}

		                		if(indice == "notafinal"){
		                			return;
		                		}
		                		if(indice == "nota2"){
		                			return;
		                		}
		                		
		                		linha+="<td>"+valor+"</td>";
		                		
		                	});


		                	linha+="<td id='tdcomcorrecao"+data[key]['id_artigo']+"'><input type='button' id='"+data[key]['id_artigo']+"' class='btn btn-success comcorrecao' value='Sim'></td><td id='tdsemcorrecao"+data[key]['id_artigo']+"'><input type='button' id='"+data[key]['id_artigo']+"' class='btn btn-danger semcorrecao' value='Não'></td>";
		                	linha+="<td colspan='1' ><input type='submit' id='trabalho"+data[key]['id_artigo']+"' class='btn btn-primary vertrab' value='Abrir'></td>";
		                	linha+="<td colspan='1' ><input type='submit' id='correcao"+data[key]['id_artigo']+"' class='btn btn-primary vercor' value='Abrir'></td></tr>";
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
		$(document).on("click",".comcorrecao",function(){
				var env ={}
				env.id = $(this).attr("id");
				env.status = "1";
				
				var r = confirm("Confirma correções para o arquivo?");;
								if (r == true) {
									$.ajax({
				            				type: "POST",
				           					url: "../controller/ACAO/correcaoadm.php",
				            				data: env,
				            		success: function(data){
	 									console.log("O artigo com id: "+ env.id + " Necessita de Correções");
	 								}, error: function(data) {
				              		 console.log("error");
				            		}
				    				});
								$("#tdcomcorrecao"+env.id).html("<text class='text text-success'>Com Correções</text>");
								$("#tdcomcorrecao"+env.id).attr('colspan',2);
								$("#tdsemcorrecao"+env.id).fadeOut('fast');
								} else {
								    return;
								}
				
		    });
		});
	</script>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click",".semcorrecao",function(){
				var env ={}
				env.id = $(this).attr("id");
				env.status = "2";
				
				var r = confirm("Confirma que não há correções para o arquivo?");;
								if (r == true) {
									$.ajax({
				            				type: "POST",
				           					url: "../controller/ACAO/correcaoadm.php",
				            				data: env,
				            		success: function(data){
	 									console.log("O artigo com id: "+ env.id + " Não Necessita de Correções");
	 								}, error: function(data) {
				              		 console.log("error");
				            		}
				    				});
								$("#tdsemcorrecao"+env.id).html("<text class='text text-success'>Sem correções</text>");
								$("#tdsemcorrecao"+env.id).attr('colspan',2);
								$("#tdcomcorrecao"+env.id).fadeOut('fast');
								$("#correcao"+env.id).fadeOut('fast');
								} else {
								    return;
								}
				
		    });
		});
	</script>

	

</div>
</body>
</html>