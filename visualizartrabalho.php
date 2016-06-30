<?php 
	require("estruturaHeader.php");
?>



		<div class="jumbotron" style="background-color: white">
			<div class="row">
				<h3 class="col-md-12 col-xs-12 col-lg-12">
					<center>Para realizar o downlod do arquivo, clique sobre o icone disquete localizado na parte superior do documento (Mozilla Firefox e Google Chrome) ou inferior (Opera).</center>
				</h3>
			</div>

			<div class="row"><br>
				<center class="col-md-12 col-xs-12 col-lg-12">
					<button type="button" id="voltar" name="voltar" class="col-md-4 col-md-offset-4 btn btn-danger glyphicon glyphicon-off" onclick="window.close()"> Fechar</button>
				</center>
			</div>   

			<div class="row"><br>	    
				<?php
					
					if(isset($_GET['id'])){

						$id = $_GET['id'];
						if(!empty($id)){
						echo '
							<div class="row">
				 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="Simposio/submissao/uploads/'.$id.'.pdf" height="1500"> </iframe>
				 			</div><br/><br/>'; 
				 		}else{
				 			echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor ! </h2>
				 				</div>
				 			<br/><br/>';
				 		}			
					}
					elseif(isset($_GET['ver']) == false){		
						 	echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor </h2>
				 				</div>
				 			<br/><br/>';
				 		}else{

				 			echo'
			 				<div class="row">
				 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../SGAgro Avaliacao de trabalhos.pdf" height="1500"> </iframe>
				 				</div>
				 			<br/><br/>'; 
				 		}			
				?>
			</div>

			
		</div>

	</div><!-- fecha container-->

</body>
</html>      