<?php require_once('cabecalho.php') ?>

<div id="main_content">
	<div class="jumbotron text-justify">
	<h3>Fale conosco</h3><br>
	<p><div class="container-fluid">	  
	  <div class="row">
	    <div class="col-sm-5">
	      <p class="destacado">SGAgro</p>
	      <p class="text-contato">Faculdade de Ciências Agrárias e Veterinárias</p>
	      <p class="text-contato">Via de acesso Prof. Paulo Donato Castellane, Km 5</p>
	      <p class="text-contato">Jaboticabal SP</p>
	      
	    </div>
	    <div class="col-sm-7">
	      <div class="row">
	        <div class="col-sm-12 form-group">
                <form action="emailcontato.php" method="post">
                  <label>Dados para contato </label>
	          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-12 form-group">

                  
	          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
	        </div>
	      </div>
	      
	      <div class="row">
	        <div class="col-sm-12 form-group">
                  <label> Qual o motivo do contato ? </label>
                  <select class="form-control" name="duvidas">
                   <option value="Simposio">Duvidas sobre o Simpósio</option>
                   <option value="Sistema">Erros no Sistema de submissão</option>
                 </select>
	      </div>
            </div>
<div class="row">
	        <div class="col-sm-12 form-group">
	          <input class="form-control" id="assunto" name="assunto" placeholder="Assunto" type="text" required>
	        </div>
              </div>
	      <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5"></textarea><br>
	      <div class="row">
	        <div class="col-sm-12 form-group">
	          <input type="submit" class="btn btn-default pull-right" value="Enviar">
                </form>
	        </div>
	      </div> 
	    </div>
	  </div>
	</div></p>
</div>
</div>

<?php require_once('rodape.php') ?>					