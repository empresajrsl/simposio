<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo("<h1>Sessão encerrada, para continuar faça login novamente</h1> <h2> <a href='../index.php'> Fazer login </a></h2>");
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
	<title>Submição do Artigo</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">
	        <div class="row">
	            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
	            <div class="col-md-8"><h1><center><br>Tela de envio do artigo</center></h1></div>
	            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
	        </div>
	    </div>
			<form id="form_submissao" method="post" action="upload.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12">
						<label class="col-md-offset-3">Artigo em PDF²</label></br>
						<span class="text-warning col-md-offset-3">O tamanho max permitido é de 8mb.</span>
						<div>
								<input type="file" id="arquivo" name="arquivo" class="col-md-7 col-md-offset-3 btn btn-default">
						</div>
					</div>
				</div>
				<div class="row"><br>
							<div class="col-md-12">
								<button type="button" id="voltar" name="voltar" class="col-md-3 col-md-offset-3 btn btn-primary" onclick="javascript: location.href='../sessao/fecharsessao.php';">Enviar mais tarde</button>
								<button type="submit" id="confirmar_submissao" name="confirmar_submissaos" class="col-md-3 col-md-offset-1  btn btn-success">Enviar agora</button>
							</div>
				</div>
			</form>
	</div>

	
</body>