<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo("<h1>Sessão encerrada, para continuar faça login novamente</h1> <h2> <a href='../index.php'> Fazer login </a></h2>");
exit;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<LINK type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></LINK>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Submição do Artigo</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron"><h1><center>Submissão do Artigo</center></h1></div>
		<div class="row">
			<center><b>¹O resumo deve possuir no minimo 1.400 caracteres e no maximo 2.200 caracteres contando espaços, pulo de linhas e outros caracteres.</b></center>
		</div>
		</br>
		<div class="row">
			<center><b>²Os artigo devem ser submetidos no formato pdf e não podem ser publicados em outros formatos como '.doc', '.docx', entre outros.</b></center>
		</div>
		</br>

		<form id="form_submissao" method="post" action="confirma_submissao.php" enctype="multipart/form-data">
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
					<textarea type="text" id="resumo" name="resumo" rows="8" class="form-control"></textarea>
				</div>
			</div>

			</br>

			<div class="row">
				<div class="col-md-4" id="categoriadiv">
					<label>Categoria do artigo</label></br>
					<select class="form-control col-md-12" id="categoria" name="categoria">
						<option>Resumo Expandido</option>
						<option>Relato Técnico</option>
						<option>Artigo Completo</option>
					</select>
				</div>

				<div class="col-md-4" id="areadiv">
					<label>Área do Artigo</label></br>
					<select class="form-control col-md-12" id="area" name="area">
						<option>Informática</option>
						<option>Biologia</option>
						<option>Psicologia</option>
					</select>
				</div>

				<div class="col-md-2" id="coautordiv">
					<label>Co-Autores</label></br>
					<select class="form-control col-md-12" id="coautor" name="coautor">
						<option>Nenhum</option>
						<option>1 co-autor</option>
						<option>2 co-autores</option>
						<option>3 co-autores</option>
						<option>4 co-autores</option>
					</select>
				</div>
				
				<div class="col-md-2">
					<label>Apresentação:</label></br>
					<input type="radio" id="apresentacao" name="apresentacao" value="Banner">Banner</br>
					<input type="radio" id="apresentacao" name="apresentacao" value="Palestra">Palestra		
				</div>

					
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

			<div class="row">
				<div class="col-md-12">
					<label>Artigo em PDF²</label></br>
					<div> <!--class="input-group"-->
  						<input type="file" id="arquivo" name="arquivo" class="col-md-12 btn btn-default">
					</div>
				</div>
			</div>

		</br>

			<div class="row">
				<div class="col-md-12">
					<button type="button" id="confirmar_submissao" name="confirmar_submissaos" class="col-md-4 col-md-offset-4 btn btn-primary">continuar</button>
				</div>
			</div>
		</form>
	</div>

<script type="text/javascript">

		$(document).ready(function(){
            
            $(document).on('click','#confirmar_submissao',function(){

				env = {};
                env.titulo = $('#titulo').val();
                env.resumo = $('#resumo').val();
                env.area = $('#area option:selected' ).val();
                console.log(env.area);
                env.coautor = $('#coautor option:selected').val();
                env.apresentacao = $('#apresentacao').val();
                env.orientador = $('#orientador').val();
                env.descricao = $('#descricao').val();
                env.categoria = $('#categoria option:selected').val();
                env.artigo = $('#arquivo').val();

               console.log('apresentacao'+env.apresentacao);
                
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