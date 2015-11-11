<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo('
		<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<div class="container">
    <!--Banner-->
    <div class="jumbotron" style="background: url("../images/SGAGRO LOGO.png");">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
                <h2 class="col-md-8 col-xs-8 col-lg-8"><center>Sessão encerrada, para continuar faça login novamente</center></h2>
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
            </div>
        </div>
    </div>

    <div class="jumbotron">
    	<div class="row">
    		<h2> <a href="../index.php"> <center>Fazer login</center> </a></h2>
    	</div>
    </div>
    </div>');
exit;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Submissão do Artigo</title>
</head>
<body>
	<div class="container">

		<!--Banner-->
	    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png');">
	        <div class="row">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
	                <h1 class="col-md-8 col-xs-8 col-lg-8"><center>Submissão de Artigo</center></h1>
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
    	
		<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
				<b>¹O resumo deve possuir no minimo 1.400 caracteres e no maximo 2.200 caracteres contando espaços, pulo de linhas e outros caracteres.</b>
			</center>
		</div>
		</br>
		<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
				<b>²Os artigo devem ser submetidos no formato pdf e não podem ser publicados em outros formatos como '.doc', '.docx', entre outros.</b>
			</center>
		</div>
		</br>

		<form id="form_submissao" method="post" action="confirma_submissao.php" enctype="multipart/form-data" class="jumbotron">
			<div class="row">
				<div class="col-md-12">
					<label>Titulo</label></br>
					<input type="text" id="titulo" name="titulo" class="form-control">
				</div>
			</div>

			</br>

			<div class="row">
				<div class="col-md-12">
					<label>Resumo do Artigo¹</label></br>
					<textarea id="resumo" name="resumo" rows="8" class="form-control" min="14" max="2200"></textarea>
				</div>
			</div>

			</br>

			<div class="row">
				<div class="col-md-4" id="categoriadiv">
					<label>Categoria do artigo</label></br>
					<select class="form-control" id="categoria" name="categoria">
						<option>Resumo Expandido</option>
						<option>Relato Técnico</option>
						<option>Artigo Completo</option>
					</select>
				</div>

				<div class="col-md-4" id="areadiv">
					<label>Área do Artigo</label></br>
					<select class="form-control" id="area" name="area">
						<option selected>Gestão de Pessoas e Estudos Organizacionais</option>
						<option>Desenvolvimento e Gestão</option>
						<option>Economia e Finanças</option>
						<option>Empreendedorismo, Inovação e Tecnologia</option>
						<option>Estratégia, Planejamento e Governança</option>
						<option>Logísticas e Operações</option>
						<option>Marketing e Mercados</option>
						<option>Sustentabilidade e Responsabilidade Sócio Ambiental</option>
					</select>
				</div>

				<div class="col-md-2" id="coautordiv">
					<label>Coautores</label></br>
					<select class="form-control" id="coautor" name="coautor">
						<option selected value="0">Nenhum</option>
						<option value="1">1 coautor</option>
						<option value="2">2 coautores</option>
						<option value="3">3 coautores</option>
						<option value="4">4 coautores</option>
					</select>
				</div>

				<div class="col-md-2">
					<label>Apresentação:</label></br>
					<input type="radio" id="apresentacao" name="apresentacao" value="Banner" checked>Banner</br>
					<input type="radio" id="apresentacao" name="apresentacao" value="Palestra">Palestra		
				</div>
			</div>
			
				<div id="coautoresdiv" name="coautoresdiv">
					
				</div>
				
				</br>

				<div class="row">
					<div class="col-md-4">
						<label>Orientador</label></br>
						<input type="text" id="orientador" name="orientador" class="form-control">
					</div>
					<div class="col-md-8">
						<label>Descrição do Orientador</label></br>
						<input type="text" id="descricao" name="descricao" class="form-control">
					</div>
				</div>

			</br>

		</br>

			<div class="row">
				<div class="col-md-12">
					<button type="button" id="confirmar_submissao" name="confirmar_submissao" class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4 btn btn-primary">
						continuar
					</button>
				</div>
			</div>
		</form>
		</div>
	</div>

<!-- função buscar coautor atraves do cpf -->
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#cpfcoautor1',function(){
			var env = {};
				env.cpfcoautor1 = $('#cpfcoautor1').val();

				$.ajax({
					type: 'POST',
					url: '../controller/ACAO/buscacoautor.php',
					data: env,
					dataType: 'json',

					success: function(data){
						console.log(data);
						$('#nomecoautor1').val(data['nome']);
						$('#snomecoautor1').val(data['sobrenome']);

					},
					error: function(data){
						console.log(data);
					},
					cache: false
				});
		});
	});

</script>	

<!-- se nescessário adciona coautores -->
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#coautor',function(){
			var ncoautor = $('#coautor option:selected').attr('value');
			ncoautor = parseInt(ncoautor) + 1;
			var count = 0;
			console.log(ncoautor);
			$('#coautoresdiv').html('');
			for(count = 1;count < ncoautor;count++){

				var linha = '<div class="row"><div class="col-md-4" id="coautores" name="coautores">'+
'<label></br>Nome do coautor - '+count+'</label></br>'+
'<input type="text" id="nomecoautor'+count+'" name="nomecoautor'+count+'" class="form-control">'+
'</div>'+
'<div class="col-md-4" id="coautores'+count+'" name="coautores'+count+'">'+
'<label></br>Sobrenome do coautor - '+count+'</label></br>'+
'<input type="text" id="snomecoautor'+count+'" name="snomecoautor'+count+'" class="form-control">'+
'</div>'+
'<div class="col-md-4">'+
'<label></br>CPF do coautor - '+count+'</cpf></label></br>'+
'<input type="text" id="cpfcoautor'+count+'" name="cpfcoautor'+count+'" class="form-control">'+
'<div></div>';

				$('#coautoresdiv').append(linha);
			}
		});
	});	

</script>

<!-- envia as variaveis do form via post -->
<script type="text/javascript">

		$(document).ready(function(){
            
            $(document).on('click','#confirmar_submissao',function(){

				env = {};
                env.titulo = $('#titulo').val();
                env.resumo = $('#resumo').val();
                env.area = $('#area option:selected' ).val();
                env.coautor = $('#coautor option:selected').val();
                env.apresentacao = $('#apresentacao').val();
                env.orientador = $('#orientador').val();
                env.descricao = $('#descricao').val();
                env.categoria = $('#categoria option:selected').val();
                env.artigo = $('#arquivo').val();

                env.nomecoautor1 = $('#nomecoautor1').val();
                env.snomecoautor1 = $('#snomecoautor1').val();
                env.cpfcoautor1 = $('#cpfcoautor1').val();

                env.nomecoautor2 = $('#nomecoautor2').val();
                env.snomecoautor2 = $('#snomecoautor2').val();
                env.cpfcoautor2 = $('#cpfcoautor2').val();

                env.nomecoautor3 = $('#nomecoautor3').val();
                env.snomecoautor3 = $('#snomecoautor3').val();
                env.cpfcoautor3 = $('#cpfcoautor3').val();
                env.nomecoautor4 = $('#nomecoautor4').val();
                env.snomecoautor4 = $('#snomecoautor4').val();
                env.cpfcoautor4 = $('#cpfcoautor4').val();

                var quant = env.resumo.length;

                if(quant < 1400){
                	alert('O resumo deve possuir no mínimo 1.400 caracteres, contando com os espaços !!!\nO seu possui apenas '+quant+' caracteres');
                	console.log(quant);
                	return;
                }

                if(quant > 2200){
                	alert('O resumo deve possuir no maximo 2.200 caracteres, contando com os espaços!!!\nO seu possui '+quant+' caracteres');
                	console.log(quant);
                	return;
                }

                if ($("#coautores").length){
                	console.log("coautores existem");
                	var coautor = $('#coautor option:selected').attr('value');
            		var	ncoautor = parseInt(coautor) + 1;
                	var count = 0;

                	for(count = 1;count < ncoautor;count++){
                		eval('env.nomecoautor'+count+'= $("#nomecoautor'+count+'").val();');
                		eval('env.snomecoautor'+count+'= $("#snomecoautor'+count+'").val();');
                		eval('env.cpfcoautor'+count+'= $("#cpfcoautor'+count+'").val();');
                	}
                }
                
               

               console.log(env);
                
                var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' & key != 'contato'){
                        // aplica formatação css os inputs vazios
                        $("#"+key).css({"border" : "2px inset #F00", "padding": "2px"});
                        count++;
                        // volta a formatação original os inputs que foram preenchidos
                    }else{
                        $("#"+key).css({"border" : "2px inset"});
                    }
                });
                    // se hover inputs vazios não submete o form 
                    if (count != 0){
                        alert('Atenção aos campos com preenchimento obrigatórios!!!');
                        return;
                    // senão submete    
                    }

                    
                    console.log(env);

                    $("#form_submissao").submit();
                     
			});
		});

		
	</script>


</body>
</html>