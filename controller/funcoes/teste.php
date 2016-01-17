<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php 

session_start();
$inst = $_SESSION["instituicao"];
$instituicaoavaliador = strtoupper($inst);
$palavras = explode(' ', $instituicaoavaliador);
$instituicao = strtoupper('UFBA - Universidade Federal da Bahia');
$count = 0;
$instituicaoautor = explode(' ', $instituicao);
echo json_encode($instituicaoautor);
echo "<br>";

foreach ($instituicaoautor as $key => $value) {
	$resultado = preg_match("/".$value."/", $instituicaoavaliador, $matches);

	if($resultado === 1 & $value != 'DE' & $value != 'DO' & $value != 'DA' & $value != ' ' & $value != 'UNIVERSIDADE'   & $value != '-' & $value != 'FACULDADE'  ){
		$count++;
		echo "<br> palavra igual encontrada = ".$value.'<br>';
		
	}
	

	
}

$qtddpalavras = count($palavras);
$palavrasiguais = $count;
$palavrasdiferentes = $qtddpalavras - $count;

echo "<br>";
echo "Numero de palavras total da string instituicaoavaliador = ".$qtddpalavras.'<br>';
echo'Numero de palavras que são iguais nas strings comparadas = '.$palavrasiguais.'<br>';
echo "Palavras diferentes nas srtings comparadas = ".$palavrasdiferentes;

if($palavrasiguais < 3){
	echo "<br>Esta instituição é diferente da instituição do avaliador portanto será exibida";

}else{
	echo "<br>Esta instituição é a mesma do avaliador, portanto este trabalho não sera exibido a este avaliador";
}







?>
