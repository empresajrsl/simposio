
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php  
// guarda o email do usuario 
$email = $_GET['email'];

// concatena uma string com o email
$string = sha1('sigma').$email.sha1('sigma');
// cria uma chave publica criptrografada
$cod= base64_encode($string);

$mensagem = '<html>  <body style="padding-left:30px"> 
<div style="margin-top:30px"> 
	
</div> 
<p style=margin-left:15px> Olá,</br>
Seu cadastro está quase concluído, após clicar no link o acesso ao sistema será concedido a '.$email.'</br>
Caso isto seja um erro, sugerimos que entre em contato com os desenvolvedores do sistema em</br> 
sigmajr@gmail.com </p>
<h2 style="color: #3a3f51; margin-left:15px"> Clique no link abaixo para confirmar seu cadastro </h2> 
<a href="../model/confirmacad.php?email='.$cod.'" target="_blank" style="font-size: 20px; margin-left:15px"> Confirmar cadastro </a> </body> </html> ';

echo ($mensagem);


?>