<?php include("verificasessaoadm.php"); ?>

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
	<title>Avaliadores Cadastrados</title>
	<style type="text/css">
		th{font-size: 20px;}
		td{font-size: 18px; color: #696969;}
		table{margin: 5px;}
		td{padding: 3px;}
		#divavaliadores{}
		.table-striped{width: 1500px;}
	</style>
</head>
<body style="overflow:hidden">
	<div class="container-fluid">
		<?php include("menuadm.php"); ?>
		<div class="container-fluid">
			<div class="jumbotron">
				<div class="row" id="divavaliadores">
				    <div class="col-md-12"style="overflow: scroll; height: 400px">								   					
		    			<table class="table table-striped table-condensed table-responsive" id="avaliadorescad">
			    			<tr>
			    				<th> Nome </th>
			    				<th> Cidade </th>
			    				<th> Endereco </th>
			    				<th> Cargo </th>
			    				<th> Area temática </th>
			    				<th> Instituição </th>
			    				<th> Celular </th>
			    				<th> telefone </th>
			    				<th> E-mail </th>
			    				<th> Status </th>
			    				<th><th>
			    				<th></th>	
			    			</tr>	
		    			</table>
			    	</div>	
	    		</div>
			</div>
		</div>
	</div><!--fim container-->

	<script type="text/javascript">
		$(document).ready(function(){ 
				var env = {};
					
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/avaliadorescad.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                
		                var count = 0;
		                $.each(data,function(key,val){
		                	
		                		console.log(data);
		                		if(data[count]['status'] == 0){
		                			var status = '<span><b>Não verificado<b></span>';
		                		}else if(data[count]['status'] == 1){
		                			var status = '<span style="color:blue"><b>Aprovado</b></span>';
		                		}else if(data[count]['status'] == 2){
		                			var status = '<span style="color:red"><b>Reprovado</b></span>';
		                		}
		                	
		                	var linha = '<tr id="'+data[count]['id_usuario']+'"> <td>'+data[count]['nome']+'</td> <td>'+data[count]['cidade']+'</td> <td>'+data[count]['endereco']+'</td> <td>'+data[count]['cargo']+'</td> <td>'+data[count]['arearesp']+'</td> <td>'+data[count]['instituicao']+'</td> <td>'+data[count]['telefone']+'</td> <td>'+data[count]['contato']+'</td> <td>'+data[count]['email']+'</td> <td class="status" id="'+data[count]['id_usuario']+'" > <b>'+status+'<b> </td> <td> <button id="'+data[count]['id_usuario']+'" class="btn btn-success"> Aprovar </button> </td> <td> <button id="'+data[count]['id_usuario']+'"  class="btn btn-danger" > Reprovar </button> </td> </tr>';
		                	$('#avaliadorescad').append(linha);
		                	count++;
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#avaliadorescad').append('<b>Nenhum avaliador cadastrado até o momento</b>');
		            	}
		    		});
				});
	</script>

	<script type="text/javascript">
	$(document).on('click','.btn-success',function(){
		var env = {};
		env.id = $(this).attr('id');
		 			console.log(env.id);
		 			$.ajax({
	                    type: 'POST',
	                    url: '../controller/ACAO/aprovar.php',
	                    data: env,
	                    dataType: 'json',

	                    success: function(data){
	                        console.log(data);
	                       $('.status').each(function(){
	                       	if( $(this).attr('id')  == env.id ){
	                       		$(this).html('');
	                       		$(this).append('<p style="color:blue"><b>Aprovado</b></p>');
	                       	}
	                       }); 
	                                       
	                
	                    },
	                    error: function(data){
	                        console.log(data);
	                    },
	                    cache: false
                	});
	});
	</script>

	<script type="text/javascript">
	$(document).on('click','.btn-danger',function(){
		var env = {};
		env.id = $(this).attr('id');
		 			console.log(env.id);
		 			$.ajax({
	                    type: 'POST',
	                    url: '../controller/ACAO/reprovar.php',
	                    data: env,
	                    dataType: 'json',

	                    success: function(data){
	                        console.log(data);
	                       $('.status').each(function(){
	                       	if( $(this).attr('id')  == env.id ){
	                       		$(this).html('');
	                       		$(this).append('<p style="color:red"><b>Reprovado</b></p>');
	                       	}
	                       }); 
	                                       
	                
	                    },
	                    error: function(data){
	                        console.log(data);
	                    },
	                    cache: false
                	});
	});
	</script>

</body>
</html>

