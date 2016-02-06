<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$trabalhos = select('id_artigo,id_avaliador1,id_avaliador2,titulo,area,instituicao,categoria','sl_artigo','');
$avaliadores = select('nome,email,id_usuario,instituicao,status','sl_cadusu'," status = 1 AND tipocadastro = 'Avaliador' OR tipocadastro = 'Autor e Avaliador'    ");
if($trabalhos){
	$dados = array('trabalhos' => $trabalhos , 'avaliadores' => $avaliadores );
 // echo'<pre>';
 // print_r($dados);
 // echo'</pre>';
	
	echo json_encode($dados);
}else{

}
?>