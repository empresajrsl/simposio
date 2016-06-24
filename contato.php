<?php require_once('estruturaHeader.php') ?>

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
	      <div class="row">
	      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238154.49844992146!2d-48.64412545749241!3d-21.14586920609135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b96cf14429f10f%3A0x273739b4a524c4d5!2sFaculdade+de+Ci%C3%AAncias+Agr%C3%A1rias+e+Veterin%C3%A1rias!5e0!3m2!1spt-BR!2sbr!4v1461156631233" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	      </div>
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