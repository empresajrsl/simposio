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
Foi solicitada uma alteração na senha de acesso do sistema pelo usuario '.$email.'</br> 
Caso isto seja um erro, sugerimos que entre em contato com o desenvolvedor do sistema em</br> 
flavio@iedashboard.com.br. </p>
<h2 style="color: #3a3f51; margin-left:15px"> Clique no link abaixo para criar uma nova senha </h2> 
<a href="../model/confirmaemail.php?email='.$cod.'" target="_blank" style="font-size: 20px; margin-left:15px"> Definir nova senha </a> </body> </html>';

echo ($mensagem);


?>