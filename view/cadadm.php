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
	<div class="Container">
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Cadastro de Administrador</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div class="jumbotron">
	    	<div class="row">
	    		<div class="col-md-12 col-xl-12 col-lg-12">
	    			<form>
	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Nome:</label></br>
	    						<input type="text" id="nome" name="nome" class="form-control">
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>E-mail:</label></br>
	    						<input type="text" id="email" name="email" class="form-control">
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Senha:</label></br>
	    						<input type="text" id="senha" name="senha" class="form-control">
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Confirmar Senha:</label></br>
	    						<input type="text" id="confsenha" name="confsenha" class="form-control">
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					
        					<div class="col-md-3 col-md-offset-3 col-xs-3 col-xs-offset-3 col-lg-3 col-lg-offset-3">
			    				<button class="btn btn-primary col-md-12 col-xs-12 col-lg-12">Voltar</button>
                			</div>
          
        

	    					<div class="col-md-3 col-xs-3 col-lg-3">
	    						<input type="submit" id="salvar" name="salvar" value="Salvar" class="btn btn-success col-md-12 col-xl-12 col-lg-12">
	    					</div>	
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	</div>
</body>
</html>