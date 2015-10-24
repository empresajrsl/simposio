<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo("<h1>Voce não está logado no sitema, para continuar faça login novamente</h1> <h2> <a href='../index.php'> Fazer login </a></h2>");
exit;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<LINK type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></LINK>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
	<title>Regras de submição</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron"><h1><center>Regras de submição do Artigo</center></h1></div>
		<div class="row">
			<h3 class="col-md-12">Por favor leia com atenção ao regulamento abaixo caso deseje publicar um artigo, logo após clique em <strong>Continuar</strong> para ir a tela de submição do artigo.</h3>
			
		</div>

		<div class="row">
			<div class=" col-md-10 col-md-offset-1">
				Termos Comuns na Área da Informática.</br></br>

				A informática já é parte importante da vida das pessoas no mundo de hoje, más, muitos ainda tem dificuldade de entender os termos e nomes comuns que acompanham tudo que envolve computadores e tudo que o envolve, como Smartfones, Tablets, Videogames, entre outros. Vamos começar com Software e Hardware.</br>
				Software são os programas que estão dentro do seu computador como jogos, programas de visualização de imagens e vídeos por exemplo. Já Hardware é toda a parte física do computador como Teclado, Mouse, Monitor entre outros. Ainda falando em Hardware encontramos termos que confundem muitas pessoas como HD que nada mais é do que uma abreviação em inglês para Disco Rígido que armazena as informações dentro do computador como músicas, programas, vídeos entre outros. Existe também a Memória RAM que é uma memória temporária do computador, ou seja, assim que o computador é desligado ou algum programa é fechado as informações são apagadas a não ser que sejam salvas antes no HD, Pendrive, ou qualquer outro dispositivo de armazenamento.</br>
				Quando entrá na Internet, o usuário se depara com vários outros termos como Download, Upload e até mesmo o significado de Internet é confuso para eles. Vamos começar por Internet, que é uma abreviação em inglês para Rede Internacional de Computadores, ou seja, vários computadores interligados trocando informações. Essas informações são transmitidas na forma de Downloads e Uploads, sendo que, Download é quando o usuário recebe a informação e Upload quando envia uma informação. É como em uma conversa, quando uma pessoa fala(faz o Upload), a outra escuta (faz o Download) e vice e versa.</br>
				Todos os termos aqui citados não equivalem nem a dez por cento dos termos encontrados na área de informática, más são os com o que mais nos deparamos no cotidiano até por que assim como dito no começo do texto, esses termos já não são mais exclusividade dos computadores, eles são encontrados também em Smartfones, Tablets, até mesmo em eletrodomésticos como TVs, Aparelhos de Blu-ray, Geladeiras e Fornos de Micro Ondas. O que só vem a confirmar que a informática já é, e irá se tornar cada vez mais, uma parte importante de nossas vidas.</br>
			</div>
		</div>
		
		</br></br>

		<div class="row">
			<button type="submit" id="voltar" name="voltar" class="btn btn-warning col-md-3 col-md-offset-2" style="margin-bottom:60px" onClick="history.go(-1)">Voltar</button>
			<button type="submit" id="continuar" name="continuar" class="btn btn-success col-md-3 col-md-offset-2" style="margin-bottom:60px">concordar e continuar</button>
		</div>
	</div>

	<script type="text/javascript">
		$(document).on('click','#continuar', function(){
			location.href="submicao_artigo.php";

		});
	</script>

	<script type="text/javascript">
		$(document).on('click','#voltar', function(){
			location.href="../sessao/fecharsessao.php";

		});
	</script>

</body>
</html>