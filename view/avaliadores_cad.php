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
		th{
			font-size: 25px;
			font-family: cursive;
		}
		td{
			font-size: 20px;
			font-family: cursive;
			color: #696969;
		}
		table{
			
			margin: 5px;
		}
	</style>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Avaliadores Cadastrados</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div class="panel panel-success">
	    	
	    	<div class="panel-body">
	    		
		    	<div class="row" style="overflow:hidden">
		    		<div class="col-md-12 col-xs-12 col-lg-12" style="overflow:scroll" >
		    			<center>
		    				
				    			<table class="table-hover" id="avaliadorescad" style="width:1500px">
				    			<tr> 
				    				<th> Nome </th>
				    				<th> Cidade </th>
				    				<th> Endereco </th>
				    				<th> Cargo </th>
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
			    		</center>
		    		</div>
	    		
	    	
	    	</div>	
	    	</div>	

	    	<div class="row">
	        	<div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-5 col-lg-2 col-lg-offset-5">
				    	<a href="menuadm.php"><button class="btn btn-success col-md-12 col-xs-12 col-lg-12 glyphicon glyphicon-home" style="border-radius:60px"> Menu</button></a>
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
		                			var status = '<p><b>Não verificado<b></p>';
		                		}else if(data[count]['status'] == 1){
		                			var status = '<p style="color:blue"><b>Aprovado</b></p>';
		                		}else if(data[count]['status'] == 2){
		                			var status = '<p style="color:red"><b>Reprovado</b></p>';
		                		}
		                	
		                	var linha = '<tr id="'+data[count]['idusuario']+'"> <td>'+data[count]['nome']+'</td> <td>'+data[count]['cidade']+'</td> <td>'+data[count]['endereco']+'</td> <td>'+data[count]['cargo']+'</td> <td>'+data[count]['instituicao']+'</td> <td>'+data[count]['telefone']+'</td> <td>'+data[count]['contato']+'</td> <td>'+data[count]['email']+'</td> <td class="status" id="'+data[count]['idusuario']+'" > <b>'+status+'<b> </td> <td> <button id="'+data[count]['idusuario']+'" class="btn btn-success"> Aprovar </button> </td> <td> <button id="'+data[count]['idusuario']+'"  class="btn btn-danger" > Reprovar </button> </td> </tr>';
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

