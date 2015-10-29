<html>
<head>
    <meta charset="UTF-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <title>Criar nova senha</title>
</head>
<body>
	<div class="container">
   <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">
        <div class="row">
            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
            <div class="col-md-8"><h1><center><br>Nova Senha</center></h1></div>
            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
        </div>
    </div>
		<form id="novasenha" name="novasenha" method="post" action="../controller/ACAO/sl-ACAOcriaNsenha.php">

			<div class="row">
        <div class="col-md-4 col-md-offset-4">
          <label> C.P.F. </label></br>
          <input type="input" name="cpf" id="cpf" class="form-control"></br>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <label> E-mail </label></br>
          <input type="input" name="email" id="email" class="form-control"></br>
        </div>
      
        <div class="col-md-4">
          <label>Confirmar e-mail </label></br>
          <input type="input" name="confirma_email" id="confirma_email" class="form-control"></br>
        </div>
      </div>

			<div class="row">
        <div class="col-md-4 col-md-offset-2">
          <label> Senha </label></br>
          <input type="input" name="senha1" id="senha1" class="form-control"></br>
        </div>

        <div class="col-md-4">
          <label>Digite a senha novamente </label></br>
          <input type="input" name="senha2" id="senha2" class="form-control"></br>
        </div>
      </div>

      </br>
      
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <button type="button" name="salvar" id="salvar"  class="btn btn-primary col-md-12" >Salvar</button>
        </div>
      <div>

		</form>
	</div>	

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