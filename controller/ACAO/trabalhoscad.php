<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$trabalhos = select("id_artigo,titulo,area,categoria,email","sl_artigo","");
$instituicao = array();
session_start();
$inst = $_SESSION["instituicao"];
$id_usuario = $_SESSION['idusu'];
$instituicaoavaliador = strtoupper($inst);


$trabalhosfiltrado = array();


foreach ($trabalhos as $key => $value) {
	
$busca = select('instituicao,email','sl_cadusu',' email =   "'.$trabalhos[$key]['email'].'" '." and id_usuario != ".$id_usuario." ");
if($busca){
array_push($instituicao, $busca);
}

}


foreach ($instituicao as $indice => $value) {
	$count = 0;
	$inst = $instituicao[$indice][0]['instituicao'];
	$instautor = strtoupper($inst);
	$instituicaoautor = explode(' ', $instautor);
			

	foreach ($instituicaoautor as $key => $value) {

		$resultado = preg_match("/".$value."/", $instituicaoavaliador, $matches);
				
		
			if($resultado === 1 & $value != 'DE' & $value != 'DO' & $value != 'DA' & $value != ' ' & $value != 'UNIVERSIDADE'   & $value != '-' & $value != 'FACULDADE'  ){
				$count++;
				
			}
		}

		$palavrasiguais = $count;
	
	

	
		if($palavrasiguais < 3){
		$trabalho = select("t.id_artigo,t.titulo,t.area,t.categoria,t.email,n.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10","sl_artigo as t INNER JOIN sl_notas as n ON t.email=n.email",'t.email = "'.$instituicao[$indice][0]['email'].'"  ');
		array_push($trabalhosfiltrado, $trabalho);
		}else{
			
		}		
}

 // echo'<pre>';
 // print_r($trabalhosfiltrado);
 // echo'</pre>';


echo json_encode($trabalhosfiltrado);


?>