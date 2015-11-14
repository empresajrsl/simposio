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
	<script type="text/javascript">
	$(document).on('click','#salvar', function(){
		var env = {};
			env.email =  $('#email').val();
			env.confirma_email =  $('#confirma_email').val();
			env.cpf = 	 $('#cpf').val();
			env.senha1 = $('#senha1').val(); 
			env.senha2 = $('#senha2').val();

			 var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' ){
                        // aplica formatação css os inputs vazios
                        $("#"+key).css({"border" : "2px inset #F00", "padding": "2px"});
                        count++;
                        // volta a formatação original os inputs que foram preenchidos
                    }else{
                        $("#"+key).css({"border" : "2px inset"});
                    }
                });
                    // se hover inputs vazios não submete o form 
                    if (count != 0){
                        alert('Atenção aos campos com preenchimento obrigatórios!!!');
                        return;
                    // senão submete    
                    }

                    // verifica se a confirmação de senha e mail correspondem
                    if(env.senha1 != env.senha2 & env.email != env.confirma_email){
                       alert('O campo de confirmação da senha e do email não correspondem aos mesmos, verifique e tente novamente');
                       $('#senha1').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#senha2').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirma_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                    	$('#senha1').css({"border" : "2px inset"});
                        $('#senha2').css({"border" : "2px inset"});
                        $('#email').css({"border" : "2px inset"});
                        $('#confirma_email').css({"border" : "2px inset"});
                    }
                    // verifica se a confirmação de senha correspondem
                    if(env.senha1 != env.senha2){
                       alert('O campo de confirmação da senha não corresponde a mesma, verifique e tente novamente');
                       $('#senha1').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#senha2').css({"border" : "2px inset #F00", "padding": "2px"});
                        return;
                    }else{
                       $('#senha1').css({"border" : "2px inset"});
                       $('#senha2').css({"border" : "2px inset"});
                    }
                    // verifica se a confirmação de mail correspondem
                    if(env.email != env.confirma_email){
                       alert('O campo de confirmação do email não correspondem ao mesmo, verifique e tente novamente');
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirma_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                    	$('#email').css({"border" : "2px inset"});
                        $('#confirma_email').css({"border" : "2px inset"});
                    }
	
		$.ajax({
			type: 'POST',
			url: "../controller/ACAO/sl-ACAOcriaNsenha.php",
			data: env,
			dataType: 'html',

			success: function(data){
				console.log("sucesso"+data)
			},
			error: function(data){
				console.log("erro"+data);
			},
			cache: false
		});
	});
	</script>

</body>