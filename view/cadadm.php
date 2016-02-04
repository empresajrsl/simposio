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
	<title>Cadastro de Administrador</title>
</head>
<body>

	<?php include("menuadm.php"); ?>

	<div class="Container-fluid">

	    <div class="jumbotron">
	    	<div class="row panel panel-default" style="border-radius:50px">
	    		<div class="col-md-12 col-xl-12 col-lg-12">
	    			<form action="../controller/ACAO/novoadm.php" method="post">
	    				<div class="row">
	    					<center><h4> Informe os dados abaixo para realizar o cadastro de um novo administrador</h4></center>
	    					<center><h4> <?php 
	    									if(isset($_GET['msg'])){
											$msg = $_GET['msg'];
											if($msg == 1){
												echo '<div class="alert-success"><center>Cadastro efetuado com sucesso <center></div>';
											}
											
											}
											if(isset($_GET['erro'])){
											$erro = $_GET['erro'];
											if($erro == 1){
												echo '<div class="alert-danger"><center>As senhas informadas não correspondem verifique e tente novamente <center></div>';
											}
											
											}
				?>	</h4></center>
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Nome:</label>
	    						<div class="input-group">
	    							<div class="input-group-btn">
			    						<button type="button" class="btn btn-success glyphicon glyphicon-user"></button>
			    					</div>	
			    						<input type="text" id="nome" name="nome" class="form-control" required>
		    						
	    						</div>
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>E-mail:</label>
	    						<div class="input-group">
		    						<div class="input-group-btn">
				    						<button type="button" class="btn btn-success glyphicon glyphicon-envelope"></button>
				    					</div>	
		    						<input type="email" id="email" name="email" class="form-control" required>
	    						</div>	
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Senha:</label>
	    					
	    						<div class="input-group">
		    						<div class="input-group-btn">
				    						<button type="button" class="btn btn-success">***</button>
				    					</div>	
	    									<input type="password" id="senha" name="senha" class="form-control" required>
	    						</div>
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Confirmar Senha:</label>
	    						<div class="input-group">
		    						<div class="input-group-btn">
				    						<button type="button" class="btn btn-success">***</button>
				    					</div>	
	    									<input type="password" id="confsenha" name="confsenha" class="form-control" required>
	    							</div>			
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					
        					<div class="col-md-3 col-md-offset-3 col-xs-3 col-xs-offset-3 col-lg-3 col-lg-offset-3">
			    				<a href="menuadm.php"><button type="button" class="btn btn-success col-md-12 col-xs-12 col-lg-12 glyphicon glyphicon-home" style="border-radius:60px"> Menu</button></a>
                			</div>
          
        

	    					<div class="col-md-3 col-xs-3 col-lg-3">
	    						<input type="submit" id="salvar" name="salvar" value="Salvar"  class="btn btn-primary col-md-12 col-xl-12 col-lg-12 glyphicon glyphicon-floppy-disk" style="border-radius:60px"></input>
	    						
	    					</div>	
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	</div>
</body>
</html>