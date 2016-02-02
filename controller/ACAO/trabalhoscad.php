<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");


$instituicao = array();
session_start();
$inst = $_SESSION["instituicao"];
$id_usuario = $_SESSION['idusu'];
$emailusu = $_SESSION['usuario'];
$instituicaoavaliador = strtoupper($inst);
$vez = array('vez' => 2 );

$area  =  select('arearesp','sl_cadusu','id_usuario = '.$id_usuario.' ');
$arearesp = $area[0]['arearesp'];
$atribuicoes = select('count("id_avaliador1") as natrib','sl_artigo','id_avaliador1 = '.$id_usuario.' ');
$atribuicoes2 = select('count("id_avaliador2") as natrib','sl_artigo','id_avaliador2 = '.$id_usuario.' ');
$natribuicao = $atribuicoes[0]['natrib'] + $atribuicoes2[0]['natrib'];
$limiteatrib = 8 - $natribuicao;
$trabalhosava1 = select("DISTINCT t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10","sl_artigo as t  LEFT OUTER JOIN sl_notas as n ON t.id_artigo=n.id_artigo",'t.email != "'.$emailusu.'" AND t.id_avaliador1 = '.$id_usuario.' AND t.area = "'.$arearesp.'"  LIMIT 8') + $vez;	
$trabalhosava2 = select("DISTINCT t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10","sl_artigo as t  LEFT OUTER JOIN sl_notas2 as n ON t.id_artigo=n.id_artigo",'t.email != "'.$emailusu.'" AND t.id_avaliador2 = '.$id_usuario.' AND t.area = "'.$arearesp.'"  LIMIT 8') + $vez;				 

// echo $atribuicoes[0]['natrib'].' '.$atribuicoes2[0]['natrib'].'<br>';


$trabalhosfiltrado = array();
$qtdd = count($trabalhosava1) - 1;
$qtdd2 = count($trabalhosava2) - 1;
$somaqtdd = $qtdd + $qtdd2;
// echo $qtdd.' '.$qtdd2.'<br>';
// echo $somaqtdd;

if($trabalhosava1 && $qtdd > 1  && empty($trabalhosfiltrado) ){
	
	array_push($trabalhosfiltrado, $trabalhosava1);
	

		
}

if($trabalhosava2 && $qtdd2 > 1  && empty($trabalhosfiltrado) ){
	
	array_push($trabalhosfiltrado, $trabalhosava2);
		
}


if( $somaqtdd < 8  ){


$trabalhos = select("DISTINCT id_artigo,instituicao,idartigo,titulo,area,categoria,email","sl_artigo ",'email != "'.$emailusu.'" AND id_avaliador1 = 0 AND area = "'.$arearesp.'" LIMIT '.$limiteatrib.' ');	

$qtddtrabalho = count($trabalhos);
	
	if($qtddtrabalho > 0){

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
				$vez = array('vez' => 1 );

				updatemysql("id_avaliador1 = ".$id_usuario." ",'sl_artigo'," id_artigo = ".$trabalhos[$indice]['id_artigo']." ");

				$trabalho = select("DISTINCT t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10","sl_artigo as t  LEFT OUTER JOIN sl_notas as n ON t.id_artigo=n.id_artigo",'t.id_artigo = "'.$trabalhos[$indice]['id_artigo'].'"   ') + $vez;
					array_push($trabalhosfiltrado, $trabalho);
					
					
				}else{
					
				}


		}

	}else{

		$trabalhos = select("DISTINCT id_artigo,instituicao,idartigo,titulo,area,categoria,email","sl_artigo ",'email != "'.$emailusu.'" AND id_avaliador2 = 0 AND area = "'.$arearesp.'" LIMIT '.$limiteatrib.' ');	

		$qtddtrabalho = count($trabalhos);
	
		if($qtddtrabalho > 0){

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
					$vez = array('vez' => 1 );

					updatemysql("id_avaliador2 = ".$id_usuario." ",'sl_artigo'," id_artigo = ".$trabalhos[$indice]['id_artigo']." ");

					$trabalho = select("DISTINCT t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10","sl_artigo as t  LEFT OUTER JOIN sl_notas2 as n ON t.id_artigo=n.id_artigo",'t.id_artigo = "'.$trabalhos[$indice]['id_artigo'].'"   ') + $vez;
						array_push($trabalhosfiltrado, $trabalho);
						
						
					}else{
						
					}


			}

		}else{

			

		}

	}

}
 // echo'<pre>';
 // print_r($trabalhosfiltrado);
 // echo'</pre>';


echo json_encode($trabalhosfiltrado);


?>