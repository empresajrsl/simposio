<?php include("verificasessaoadm.php"); ?>

<?php echo $_SESSION['admlogado']; ?>
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
	<title>Painel do administrador</title>
    <style type="text/css"> 
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{ background-color: #5cb85c; font-size: 25px;}
    a { color: #5cb85c; font-size: 18px}

    li > a:hover{ color: green;}

    </style>
</head>    
<body>
	<div class="container">
		<!--Banner-->
        <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
            <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="col-md-4 col-xs-4 col-lg-4">
                        <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
                        <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
                    </div>
                    <div class="col-md-6 col-xs-6 col-lg-6">
                        <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b></b></i></center></h1>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim Banner-->
        
       
        
        <div class="row" ><!-- row nescessaria para deixar os jumbotrons alinhados com o banner -->


             <div class="col-md-2 col-xs-2 col-lg-2">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#"><b>Menu</b></a></li>
                  <li><a href="estatisticas.php"><b>Estatisticas</b></a></li>
                  <li><a href="cadadm.php"><b>Novo Administrador</b></a></li>
                  <li><a href="avaliadores_cad.php"><b>Aprovar avaliadores</b></a></li>
                  <li><a href="atribuiravaliador.php"><b>Atribuir avaliadores</b></a></li>
                </ul>
            
                
            </div>

            <div class="col-md-10 col-xs-10 col-lg-10"><!--jumbotron da imagem-->
                <div class="jumbotron" style="color: white; background-color: #5cb85c">
                    <center><h2 style="margin-top:-30px">Bem vindo ao painel de controle do sistema !</h2></center><br>

                    <h4>Entenda para que serve cada uma das telas que sera exibida ao clicar em uma das opções do menu a esquerda:</h4>
                    <h4></br>
                        <ul>
                            <li><b>Estatisticas:</b> Exibe informações como, quantidade de usuarios cadastrados no sistema, 
                                quantidados de trabalhos, além de graficos que exibem informaçõe relativas a cada categortia de trabalho.</li></br>
                            <li><b>Novo Administrador:</b> Permite adicionar um novo administrador para acessar este painel de controle.</li></br>
                            <li><b>Avaliadores:</b> Exibe informações como, Nome, Cidade, Endereco, Cargo, Instituição, Celular, Telefone, 
                                E-mail e Status dos avaliadores que se cadastraram no sistema, possibilitando aprovar ou reprovar seu cadastro</li></br>
                                <li><b>Atribuir avaliadores:</b> Exibi todos os trabalhos cadastrados para que possam ser atribuidos seus respectivos avaliadores</li>
                        </ul>
                    </h4>
                </div>
            </div><!--jumbotron da imagem-->

        </div> <!-- fim da row nescessaria para deixar esse jumbotron alinhado com o banner -->

	</div><!--fim container-->
</body>
</html>