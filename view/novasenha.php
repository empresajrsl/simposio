<html>
<head>
    <meta charset="UTF-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <title>Criar nova senha</title>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
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
                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Nova Senha</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

		<form class="jumbotron" id="novasenha" name="novasenha" method="post" action="../controller/ACAO/sl-ACAOcriaNsenha.php">

        <div class="row">
          <div class="col-md-12 col-xs-12 col-lg-12">
            <?php 
                if(isset($_GET['msg'])){
                  $msg = $_GET['msg'];
                  if(isset($_GET['erro'])){
                  $erro = $_GET['erro'];
                  }
                
                
                if($msg == 1){
                  echo '<div class="alert-success"><center>Senha atualizada com sucesso!<center></div>';
                }
                else if($msg == 2){
                  echo '<div class="alert-danger"><center>Os dados fornecidos não conferem.<center></div>';
                }
                else if($msg == 3){
                  echo '<div class="alert-danger"><center>Erro ao efetuar alterações. <br/>'. $erro .' <center></div>';
                }
              }
            ?>  
        </div>
      </div>
        
        <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12">
          <div class="col-md-4 col-md-offset-4">
            <label> C.P.F. </label></br>
            <input type="input" name="cpf" id="cpf" class="form-control"></br>
          </div>
        </div>
        </div>
        
        <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12">
          <div class="col-md-4 col-md-offset-2">
            <label> E-mail </label></br>
            <input type="input" name="email" id="email" class="form-control"></br>
          </div>
        
          <div class="col-md-4">
            <label>Confirmar e-mail </label></br>
            <input type="input" name="confirma_email" id="confirma_email" class="form-control"></br>
          </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12">
          <div class="col-md-4 col-md-offset-2">
            <label>Nova senha </label></br>
            <input type="password" name="senha1" id="senha1" class="form-control"></br>
          </div>
        

          <div class="col-md-4">
            <label>Confirme a nova senha</label></br>
            <input type="password" name="senha2" id="senha2" class="form-control"></br>
          </div>
        </div>
        </div>
      

      </br>
      
        
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
            <button type="button" name="voltar" id="voltar" class="btn btn-primary col-md-2 col-md-offset-3 col-xs-2 col-xs-offset-3 col-lg-2 col-lg-offset-3">Voltar</button>            
            <button type="submit" name="salvar" id="salvar" class="btn btn-success col-md-2 col-md-offset-2 col-xs-2 col-xs-offset-2 col-lg-2 col-lg-offset-2">Salvar</button>
          </div>
          </div>
          
        
      
		</form>
	</div>	
  <script type="text/javascript">
    $(document).on('click','#voltar', function(){
      location.href="../index.php";

    });
  </script>
<script>
    $(document).ready( function(){
        // mascara 
        $("#cpf").mask("999.999.999-99"); 
    });
</script>
	<!-- função para enviar post via ajax  e validar o form -->
	// <script type="text/javascript" src="../js/scripts/envionovasenha.js"></script>

</body>