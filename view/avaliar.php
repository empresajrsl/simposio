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
	<title>Tela de Avaliação</title>
</head>
<body>

<div class="container">
  <?php
		
		$id = $_POST['idartigo']; echo $id;
		$condicao = "`id_artigo` = '". $id."'";
		$campo = '*';
		$tabela = "`sl_artigo`";
		$arquivos = select($campo, $tabela, $condicao);
		$arquivo = $arquivos[0];

	?>
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Titulo <br><?= $arquivo['titulo']; ?></b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
		    
		    <div class="col-md-12">
		      <div class="jumbotron">
		     <form class="form-horizontal" action="#" method="post">
		     <div class="row">
		    		 <div class="col-md-12">
		     			<div class="form-group">
		     			<div style="text-align: center">
		     				<!-- <label style="color: #009900"> <h3>Avaliação</h3> </label><br>
		     				<label style="float: center; color: #009900; "> Nota de 0 a 5 </label> -->
		     			</div>
		     			</div>
		     		</div>	
		     	</div>

		     	<div class="jumbotron" style="margin:3px; padding:25px">
			     	<div class="row">
			     		<div class="col-md-12">
			     			<h3>Instruções de como avaliar os trabalhos: <button class="btn btn-primary">Download do arquivo oficial</button></h3>
			     			<h4>A nota final é a média ponderada baseada em 10 critérios, cada um deles valendo de 0 a 5 pontos</h4>
			     			<h5>Critério 1: O título do trabalho é conciso e representa o conteúdo do trabalho? (Peso 1)</h5>
			     			<h5>Critério 2: O resumo apresenta o conteúdo do trabalho de forma adequada e segundo as exigências do evento? (Peso 1)</h5>
			     			<h5>Critério 3: A introdução contextualiza o problema do trabalho, apresenta a justificativa e relevância teórica e prática da pesquisa? (Peso 2)</h5>
			     			<h5>Critério 4: A revisão bibliográfica é atualizada, qualificada, adequada à questão do estudo e pertinente? (Peso 1)</h5>
			     			<h5>Critério 5: Os métodos utilizados são pertinentes a questão de estudo e foram utilizados corretamente? (Peso 2)</h5>
			     			<h5>Critério 6: Os resultados são analisados corretamente e há condições para replicá-los? (Peso 2)</h5>
			     			<h5>Critério 7: As conclusões apresentam as implicações teóricas e práticas do estudo? (Peso 1)</h5>
			     			<h5>Critério 8: O texto é claro, adequado ao idioma e a estrutura das seções são articuladas ao objetivo da pesquisa? (Peso 2)</h5>
			     			<h5>Critério 9: A formatação do trabalho atende as normas estabelecidas para o evento? (Peso 1)</h5>
			     			<h5>Critério 10: O estudo é original e contribui para o campo do conhecimento? (Peso 2)   </h5>

			     		</div>	
		     	</div>	

		     	</div>
		     	<div class="row" style="margin-top: 35px">
		     		<div class="col-md-12">
		     		<table class="table">
		     			<th>Titulo</th><th>Area</th><th>categroia</th>
		     			<tr><td> Titulo teste </td><td> Agronegócio </td><td> Resumo expanido </td><td><button class="btn btn-primary">Vizualizar trabalho</button></td><td><button class="btn btn-primary">Download do PDF</button></td></tr>
		     		</table>
		     		<table class="table">
		     			<th>Nota Critério 1 </th><th> Nota critério 2 </th><th>Nota critério 3</th><th>Nota critério 4</th><th>Nota critério 5 </th><th>Nota critério 6 </th><th>Nota critério 7</th><th>Nota critério 8</th><th>Nota critério 9</th><th>Nota critério 10</th>
		     			<tr><td> <input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button> </td><td> <input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button> </td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td><td><input type="number" style="width:35px; margin-bottom:5px">  <button class="btn btn-success" style="border-radius:80px"><i class="glyphicon glyphicon-ok"></i></button></td></tr>	
		     		</table>
		     		</div>	
		     	</div>	
		     	
		     	<!-- <div class="row">
		    		 <div class="col-md-12">
		     			<div class="form-group">
		     				<label> O título do trabalho é conciso e representa o conteúdo do trabalho?  </label>
		     				<input style="float: right;margin-right:10px" type="number" id="nota1" name="nota1" placeholder="0 a 5" min="0" max="5" > </input>
		     				<label style="float:right; margin-right:10px">Nota: </label><br>
		     		<br><br></div>
		     		</div>	
		     	</div>	

		    
		     <div class="row">
		     	<div class="col-md-12">
		     		<div class="form-group">
		     			<label>O resumo apresenta o conteúdo do trabalho de forma adequada e segundo as exigências do evento?  </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota2" name="nota2" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	
		      

		    
		     <div class="row">
		     	<div class="col-md-12">
		     		<div class="form-group">
		     			<label>A introdução contextualiza o problema do trabalho, apresenta a justificativa e relevância teórica e prática da pesquisa? </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota3" name="nota3" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		     	<div class="col-md-12">
		     		<div class="form-group">
			     		<label>A revisão bibliográfica é atualizada, qualificada, adequada à questão do estudo e pertinente?</label>
			     		<input style="float: right;margin-right:10px" type="number" id="nota4" name="nota4" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		      	<div class="col-md-12">
		    		<div class="form-group">
		     			<label>Os métodos utilizados são pertinentes a questão de estudo e foram utilizados corretamente? </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota5" name="nota5" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		    	<div class="col-md-12">
		     		<div class="form-group">
		     			<label>Os resultados são analisados corretamente e há condições para replicá-los? </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota6" name="nota6" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		    	 <div class="col-md-12">
		     		<div class="form-group">
		     			<label>As conclusões apresentam as implicações teóricas e práticas do estudo? </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota7" name="nota7" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		     	<div class="col-md-12">
		     		<div class="form-group">
		     			<label>O texto é claro, adequado ao idioma e a estrutura das seções são articuladas ao objetivo da pesquisa? </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota8" name="nota8" placeholder="0 a 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		     	<div class="col-md-12">
		    		 <div class="form-group">
		     			<label>A formatação do trabalho atende as normas estabelecidas para o evento?  </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota9" name="nota9" placeholder="0 á 5" min="0" max="5" > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		    
		     <div class="row">
		     	<div class="col-md-12">
		     		<div class="form-group">
		     			<label>O estudo é original e contribui para o campo do conhecimento?   </label>
		     			<input style="float: right;margin-right:10px" type="number" id="nota10" name="nota10" placeholder="0 á 5" min="0" max="5"  > </input>
		     			<label style="float:right; margin-right:10px">Nota: </label><br>
		     	<br><br></div>
		     	</div>	
		     </div>	

		     <div class="row">
		     	<div class="col-md-12">
		     		<div class="form-group" style="text-align:center">
		     			<input type="submit" class="btn btn-success" value="Avaliar"></input>
		     	<br><br></div>
		     	</div>	
		     </div>	
		     </form>

	    </div>

	    <div class="col-md-12">
		     <?php

			echo'
			<div class="jumbotron">
				<p style="color: #009900"><center> <h3 style="color: #009900">Resumo  do trabalho</h3><br><b>'.$arquivo['resumo'].'</b></p></center>
			</div>';

		?>

		</div>
		</div>
<div class="col-md-12">
<div class="row"><br>
	  <?php

			echo'
			<div class="row">
			<h2 style="color: #009900"><center> Trabalho: </center></h2>
			<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../uploads/'.$arquivo['idartigo'].'.pdf" height="600"> </iframe>
			</div>';

		?>

	</div> -->


	    
</div>
</body>
</html>