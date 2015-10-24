<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo("<h1>Voce não está logado no sitema, para continuar faça login novamente</h1> <h2> <a href='../index.php'> Fazer login </a></h2>");
exit;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<LINK type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></LINK>
	<title>Submição do Artigo</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron"><h1><center>Submição do Artigo</center></h1></div>
		<div class="row">
			<center><b>¹O resumo deve possuir no minimo 1.400 caracteres e no maximo 2.200 caracteres contando espaços, pulo de linhas e outros caracteres.</b></center>
		</div>
		</br>
		<div class="row">
			<center><b>²Os artigo devem ser submetidos no formato pdf e não podem ser publicados em outros formatos como '.doc', '.docx', entre outros.</b></center>
		</div>
		</br>

		<form>
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
				<div class="col-md-6">
					<label>Area do Artigo</label></br>
					<select class="form-control col-md-12">
						<option>Informática</option>
						<option>Biologia</option>
						<option>Psicologia</option>
					</select>
				</div>

				<div class="col-md-3">
					<label>Co-Autores</label></br>
					<select class="form-control col-md-12">
						<option>Nenhum</option>
						<option>1 co-autor</option>
						<option>2 co-autores</option>
						<option>3 co-autores</option>
						<option>4 co-autores</option>
					</select>
				</div>
				
				<div class="col-md-3">
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
					<div class="input-group">
  						<input type="text" class="form-control col-md-12">
  							<div class="input-group-btn">
    							<button type="button" id="buscar" name="buscar" class="col-md-12 btn btn-default btn btn-info">Buscar no computador</button>
  							</div>
					</div>
				</div>
			</div>

		</br>

			<div class="row">
				<div class="col-md-12">
					<button type="button" id="confirmar_submicao" name="confirmar_submicao" class="col-md-4 col-md-offset-4 btn btn-primary">continuar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>