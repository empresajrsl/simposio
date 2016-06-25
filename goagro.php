<?php require_once('estruturaHeader.php') ?>

<div id="main_content" class="row">
	<div class="jumbotron text-justify">
		<h3>GOAgro</h3>
		<p> A Faculdade de Ciências Agrárias e Veterinárias de Jaboticabal/SP é referência nacional e internacional em diversos ramos destas ciências, fruto do desenvolvimento do ensino nos cursos de graduação (Agronomia, Madicina Veterinária e Zootecnia) e da pesquisa nos nove programas de pós-graduação existentes no câmpus.
		Historicamente, o crescimento da FCAV, em resposta às demandas da região, permitiu a criação de dois novos cursos no câmpus: Ciências Biológicas e Administração.
		<p>É inegável a importância do Agronegócio para a Região de Ribeirão Preto, onde está inserida a cidade de Jaboticabal/SP, que é conhecida como uma das capitais do agronegócio brasileiro, já que segundo a Agência Paulista de Promoção de Investimento e Competitividade o interior paulista foi responsável por 15,4% do agronegócio brasileiro em 2012.</p>
		<p>Apesar da importância deste segmento na economia paulista, a oferta de programas de pós-graduação stricto sensu em Administração no interior do Estado compreende 5 programas, sendo que nenhum destes é voltado à gestão de organizações agroindustriais.</p>
		<p>Assim surgiu o Programa de Mestrado Profissional em Administração na FCAV/UNESP, com foco na Gestão de Organizações Agroindustriais (GOAgro), atendendo a um antigo anseio da comunidade profissional e científica da região: unir a excelência no campo das agrárias com modernas ferramentas de gestão.</p>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  	<!-- Indicators -->
		  	<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0"  class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		  	</ol>

	  		<!-- Wrapper for slides -->
		  	<div class="carousel-inner" role="listbox">
		    	<div class="item active">
		     		<center><img src="images/logo50a.png"  width="1100" height="500" ></center>
		    	</div>

		    	<div class="item">
		      		<center><img src="images/fachada.jpg"  width="1100" height="500" ></center>
		    	</div>

		    	<div class="item">
		      		<center><img src="images/unesp40a.png" width="350" height="500" ></center>
		    	</div>
		  	</div>

  			<!-- Left and right controls -->
	  		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    		<span class="sr-only">Anterior</span>
	  		</a>
  			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    		<span class="sr-only">Próximo</span>
  			</a>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).on("click","#btnmod",function(){
		 window.open('modeloPainel.php', '_blank');
	});
</script>

<?php require_once('rodape.php') ?>