<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$avaliadores = select("id_usuario,nome,cidade,endereco,cargo,telefone,email,instituicao,telefone,contato","sl_cadusu","tipocadastro = 'Avaliador' OR tipocadastro = 'Autor e Avaliador' ");

echo json_encode($avaliadores);


?>