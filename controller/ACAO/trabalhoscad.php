<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");


$instituicao = array();
session_start();
$inst = $_SESSION["instituicao"];
$id_usuario = $_SESSION['idusu'];
$emailusu = $_SESSION['usuario'];
$instituicaoavaliador = strtoupper($inst);
$trabalhos = select("DISTINCT id_artigo,instituicao,idartigo,titulo,area,categoria,email","sl_artigo ",'email != "'.$emailusu.'" LIMIT 8');	
			 

$trabalhosfiltrado = array();






foreach ($trabalhos as $indice => $valor) {
	$count = 0;
	$inst = $trabalhos[$indice]['instituicao'];
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

		$trabalho = select("DISTINCT t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10","sl_artigo as t  LEFT OUTER JOIN sl_notas as n ON t.id_artigo=n.id_artigo",'t.id_artigo = "'.$trabalhos[$indice]['id_artigo'].'"   ');
			array_push($trabalhosfiltrado, $trabalho);
		
		}else{
			
		}


}

 // echo'<pre>';
 // print_r($trabalhosfiltrado);
 // echo'</pre>';


echo json_encode($trabalhosfiltrado);


?>