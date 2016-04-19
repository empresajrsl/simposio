<?php  
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$assunto = $_POST['assunto'];
$duvidas = $_POST['duvidas'];

if($duvidas == "Simposio"){
$to = "sgagrofcav@gmail.com";
}
else if($duvidas == "Sistema"){
$to = "empresajrsaoluis@gmail.com";
}

require_once('Simposio/submissao/PHPMailer_5.2.1/class.phpmailer.php');
// guarda o email do usuario 

// concatena uma string com o email
$string = sha1('sigma').$email.sha1('sigma');
// cria uma chave publica criptrografada
$cod = base64_encode($string);
$nome = 'SGAgro';

try {
    $mail = new PHPMailer(true); //New instance, with exceptions enabled
    
   $body = "
<html>
<head>
   <meta charset='utf-8'>
   <title>Contato Usuário</title>
</head>
<body>
     <div><h3><b>Nome do usuário:</b> ".$nome." </h3></div>
     <div><h4><b>E-mail do usuário:</b> ".$email." </h3></div>
     <div><h4><b>Mensagem do usuário:</b> ".$message." </h3></div>
</body>
</html>
    ";

    $mensagem = 'teste';
     
    $mail->IsSMTP(); //tell the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Port = 587; //SMTP porta (as mais utilizadas são '25' e '587'
    $mail->Host = "smtp.sgagro.org"; // SMTP servidor
    $mail->Username = "sigmajr@sgagro.org";  // SMTP  usuário
    $mail->Password = "empresajr1";  // SMTP senha
     
    
     
    $mail->AddReplyTo($to); //Responder para..
    $mail->From = "sigmajr@sgagro.org"; //e-mail fornecido pelo cliente
    $mail->FromName   = $name; //nome fornecido pelo cliente
     
   
    $mail->AddAddress($to);
    $mail->Subject  = $assunto; //Assunto
    $mail->WordWrap   = 80; // set word wrap
     
    $mail->MsgHTML($body);
     
    $mail->IsHTML(true); // send as HTML

    $htmlcabecalho = "
    <html>
    <head>
       <meta charset='utf-8'>
       <link type='text/css' rel='stylesheet' href='Simposio/submissao/css/bootstrap.min.css' ></link>
       <link type='text/css' rel='stylesheet' href='Simposio/submissao/css/style.css' ></link>
       <script src='Simposio/submissao/js/jquery-2.1.1.min.js'></script>
       <script src='Simposio/submissao/js/bootstrap.min.js'>
       <script src='Simposio/submissao/plugin/jquery-validate/jquery.validate.min.js'></script>
       <title>Confirmação por E-mail</title>
       <link rel='shortcut icon' href='Simposio/submissao/images/SGAGRO LOGO.ico' type='../image/x-icon'/>
    </head>
    <body>
       <div class='container'>

        <div class='jumbotron' style='background-image: url(../images/fundo.png); background-size: cover;'>
            <div class='row' style='margin-left: -6.5%; margin-right: 6.5%'>
                <div class='col-md-12 col-xs-12 col-lg-12'>
                    <div class='col-md-4 col-xs-4 col-lg-4'>
                        <img src='Simposio/submissao/images/SGAGRO LOGO.png' style='width: 40%; height: 15%;'>
                        <img src='Simposio/submissao/images/unesp.jpg' style='width: 40%; height: 15%; margin-left: 5%;'>
                    </div>
                    <div class='col-md-6 col-xs-6 col-lg-6'>
                        <center><h1><i style='font-family: Plantagenet Cherokee;'><b>Contato</b></i></center></h1>
                    </div>
                </div>
            </div>
        </div>";

    $htmlenviado = "
        <div class='jumbotron'>
            <center>Mensagem enviada com sucesso para <u>".$to."</u> </center>
            <center>Acesse seu email para criar uma nova senha.</center>
        </div>
    </body>
    </html>";

    $htmlerro = "
        <div class='jumbotron'>
            <center>Erro ao enviar o e-mail para <u>".$mail->ErrorInfo."</u></center>
            <center>Este endereço de e-mail não foi encontrado ou não existe.</center>
            <center>Por favor tente novamente.</center>
        </div>
    </body>
    </html>";

     
    if($mail->Send()){ 
      echo $htmlcabecalho . $htmlenviado;
    }
    else{ 
      echo $htmlcabecalho . $htmlerro;
    }

} catch (phpmailerException $e) {
echo '<script> window.location.href="index.php?erro=3"</script>';
}



?>
  
