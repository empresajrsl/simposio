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
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Tela de Envio de Artigo</title>
</head>
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png');">
	        <div class="row">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
	                <h1 class="col-md-8 col-xs-8 col-lg-8"><center>Tela de Envio de Artigo</center></h1>
	                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div class="jumbotron">
			<form id="form_submissao" method="post" action="upload.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<label class="col-md-offset-3 col-xs-offset-3 col-lg-offset-3">Artigo em PDF²</label></br>
						<span class="text-warning col-md-offset-3 col-xs-offset-3 col-lg-offset-3">O tamanho max permitido é de 8mb.</span>
						<div>
								<input type="file" id="arquivo" name="arquivo" class="col-md-7 col-md-offset-3 col-xs-7 col-xs-offset-3 col-lg-7 col-lg-offset-3 btn btn-default">
						</div>
					</div>
				</div>
				<div class="row"><br>
							<center class="col-md-12 col-xs-12 col-lg-12">
								<button type="button" id="voltar" name="voltar" class="col-md-3 col-md-offset-3 btn btn-primary" onclick="javascript: location.href='../sessao/fecharsessao.php';">Enviar mais tarde</button>
								<button type="submit" id="confirmar_submissao" name="confirmar_submissaos" class="col-md-3 col-md-offset-1  btn btn-success">Enviar agora</button>
							</center>
				</div>
			</form>
		</div>
	</div>

	
</body>