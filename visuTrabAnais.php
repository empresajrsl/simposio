<?php require_once('estruturaHeader.php') ?>
<div class="container-fluid">
	

		<style type="text/css">
			#dadosTrab{
				text-transform: uppercase;
			}
			#tituloTrab{
				text-transform: uppercase;
			}
		</style>
		<br><br><br><br><br>
		<div class="row" >
			<div class="col-md-12" id="trabalhosAnais" name="trabalhosAnais">

			</div>
			
		</div>
</div>

	<script type="text/javascript">
		$(document).ready(function(){ 
			var env = {}					
			$.ajax({
	            type: "POST",
	            url: "buscaTrabalhos.php",
	            data: env,
	            dataType : 'json',
	            success: function(data){


	            	$.each(data,function(key,val){
	            		if(data[key]['autor_1'] == null){
	            			data[key]['autor_1'] = ' ';
	            		}
	            		if(data[key]['autor_2'] == null){
	            			data[key]['autor_2'] = ' ';
	            		}
	            		if(data[key]['autor_3'] == null){
	            			data[key]['autor_3'] = ' ';
	            		}
	            		if(data[key]['autor_4'] == null){
	            			data[key]['autor_4'] = ' ';
	            		}
	            		if(data[key]['autor_5'] == null){
	            			data[key]['autor_5'] = ' ';
	            		}
	            	
	            		var linha =	  '<div class="col-md-12">';
						linha +=		'<div class="panel panel-success">';
							linha +=		'<div id="tituloTrab" class="panel-heading" style="font-size:18px">'+data[key]['titulo']+'</div>';
								linha +=		'<div class="panel-body">';
									
										linha +=	  	'<div id="dadosTrab" class="row" style="font-size:16px;margin-left:10px"><b>Autores:</b> '+data[key]['autor_1']+', '+data[key]['autor_2']+ ', '+data[key]['autor_3']+', '+data[key]['autor_4']+', ' +data[key]['autor_5']+'  <br> <b>Categoria:</b> '+data[key]['categoria'] +' <br> <b>Subárea:</b> '+data[key]['area'] +' <br> <b>Instituição:</b> '+data[key]['instituicao'] +'</div>';
									linha +=	  '</div>';
									linha+=		'</div>';
								linha+=	'</div>';								

						    $("#trabalhosAnais").append(linha);
						    
						   

					});	    


				},error: function(data){
					console.log("erro");
	            	console.log(data);

				}
			});        	
		});    
</script>					

