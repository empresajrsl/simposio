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
		.panel-body{
			overflow: hidden;
		}
		#divtable{
			height: 480px;
			overflow: auto;
		}
		body{
			overflow: hidden;
		}
		
	</style>

	
</head>
<body>

	
    
	<div class="container-fluid">
	    <?php require_once("menuadm.php") ?>
	   
	    <div class="jumbotron">
	    	<div class="panel panel-primary">
	    		<div class="panel-heading"><h3>Relação de autores dos trabalhos</h3></div>
	    		<div class="panel-body">
					<div class="row">
						<div class="col-md-12" >
							
							<div class="input-group">
						      <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Informe o título do trabalho ou uma palavra contida no mesmo">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" id="buscar" type="button">Buscar</button>
						      </span>
						    </div>
						    <br>
						    <div class="col-md-12" id="divtable" >
						    	
								<table class="tabela1 table table-condensed table-bordered table-hover"  id="tabelaautores">
									<thead>
										<th>Título</th><th>Área</th><th>Categoria</th><th>Autor 1</th><th>Autor 2</th><th>Autor 3</th><th>Autor 4</th><th>Autor 5</th>
									</thead>
									<tbody id="trabaprovado">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			
				
		</div>

		<script type="text/javascript">
								
			$(document).ready(function(){
				function buscaautor(tituparametro){
				var env = {};
				env.titulo = tituparametro;

				$.ajax({
			            type: "POST",
			            url: "../controller/ACAO/trabautores.php",
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

			                		if(valor == null){
			                			linha+="<td>Não possui "+indice+"</td>"
			                			return;
			                		}
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

			                	$("#trabaprovado").append(linha);

			                		
			                
			                });
			             

			            }, error: function(data) {
			                	console.log(data);
			               		$('#trabaprovado').append('<b>nenhum trabalho encontrado com esta palavra chave</b>');
			            	}
			    });
				}

				buscaautor();

				$(document).on("click","#buscar",function() {
				var titulo = $("#titulo").val();

				$("#trabaprovado").html(' ');

				buscaautor(titulo);
				});

			
				
			});
			
		</script>

		

		

	</div>
</body>
</html>