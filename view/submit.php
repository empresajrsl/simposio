<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<head>
	<meta charset="UTF-8">
	<LINK type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></LINK>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
	<title>Submição do Artigo</title>
</head>
<body>
	<div class="container-fluid"><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<form id="form_submissao" method="post" action="upload.php" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12">
					<label class="col-md-offset-5">Artigo em PDF²</label></br><span class="text-warning col-md-offset-5">O tamanho max permitido é de 8mb.</span>
					<div>
							<input type="file" id="arquivo" name="arquivo" class="col-md-6 col-md-offset-3 btn btn-default">
					</div>
				</div>
			</div>
			<div class="row"><br>
						<div class="col-md-12">
							<button type="submit" id="confirmar_submissao" name="confirmar_submissaos" class="col-md-4 col-md-offset-4 btn btn-primary">continuar</button>
						</div>
			</div>
		</form>
	</div>
</body>