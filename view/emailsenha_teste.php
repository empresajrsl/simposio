<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php

//Variáveis que irão receber os dados criados no formulario criado.

// guarda o email do usuario 
$email = $_GET['email'];
// concatena uma string com o email
$string = sha1('sigma').$email.sha1('sigma');
// cria uma chave publica criptrografada
$cod= base64_encode($string);

$data_envio = date('d/m/Y'); // está variavel recebe a data no momento do envio com formato dia/mes/ano
$hora_envio = date('H:i:s'); // está variavel recebe o horario no momento do envio com formato hora:minuto:segundo

//fim das variaveis

  
// Compo E-mail
// Basicamente uma variavel contendo o texto que sera exibido pelo e-mail enviado que neste caso contem formatação css e html e as variaveis acima.
    $arquivo = "
    <html>
    <head>
        <meta charset='utf-8'>
        <title>SGAgro</title>
        <link type='text/css' rel='stylesheet' href='../css/bootstrap.min.css' ></link>
        <link type='text/css' rel='stylesheet' href='../css/style.css' ></link>
        <script src='../js/jquery-2.1.1.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>
        <script src='../js/tooltip.js'></script>
        <script type='text/javascript' src='../plugin/mask/jquery.mask.js'></script>
        <script src='../plugin/jquery-validate/jquery.validate.min.js'></script>
        <link rel='shortcut icon' href='../images/SGAGRO LOGO.ico' type='image/x-icon'/>
    </head>
    <body>
      <div class='container'>
        <!--Banner-->
          <div class='jumbotron' style='background-image: url('../images/fundo.png'); background-size: cover;'>
              <div class='row' style='margin-left: -6.5%; margin-right: 6.5%'>
                  <div class='col-md-12 col-xs-12 col-lg-12'>
                      <div class='col-md-4 col-xs-4 col-lg-4'>
                          <img src='../images/SGAGRO LOGO.png' style='width: 40%; height: 15%;'>
                          <img src='../images/unesp.jpg' style='width: 40%; height: 15%; margin-left: 5%;'>
                      </div>
                      <div class='col-md-6 col-xs-6 col-lg-6'>
                          <center><h1><i style='font-family: 'Plantagenet Cherokee';'><b>Solicitação de Nova Senha</b></i></center></h1>
                      </div>
                  </div>
              </div>
          </div>
          <!--Fim Banner-->

          <div class='jumbotron'>
            <div class='row'>
              <div class='col-md-12 col-xs-12 col-lg-12'>
                <center>
                <h4> Olá!</br></br>
                Foi solicitada uma alteração na senha de acesso do sistema pelo usuario <u>".$email."</u></br></br> 
                Caso isto seja um erro, sugerimos que entre em contato com o desenvolvedor do sistema em <u>sigmajr@gmail.com</u>
                </h4>

                <h3> Clique no link abaixo para criar uma nova senha </h3></br> 
                <h2><a href='../model/confirmaemail.php?email=".$cod."' target='_blank'> Definir nova senha</a></h2>
                </center>
              </div>
            </div>
          </div>
      </div>

    </body>
    </html>
    ";
// fim do campo e-mail

//enviar
     
    // emails para quem será enviado o formulário
    $emailenviar = "seuemail@seudominio.com.br";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site";
 
    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: seuemail@seudominio.com.br'; //$nome <$email>';
        $headers .= 'From: $nome <$email>';
   
    //$headers .= "Bcc: $EmailPadrao\r\n"; //este daqui é opcional e serve para enviar o mesmo e-mail para outras contas
     
    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
    }
//fim de enviar

?>