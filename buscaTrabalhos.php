<?php
include ("Simposio/submissao/controller/funcoes/funcoesmysql.php");


$campos = "*";
$tabela = "trabautores";

if(isset($_POST['parametro']) ){

	$parametro = $_POST['parametro'];
	$condicao = "titulo LIKE '%".$parametro."%' OR resumo LIKE '%".$parametro."%' OR autor_1 LIKE '%".$parametro."%' OR autor_2 LIKE '%".$parametro."%' OR autor_3 LIKE '%".$parametro."%' OR autor_4 LIKE '%".$parametro."%' OR autor_5 LIKE '%".$parametro."%' ORDER BY titulo";


}

if(isset($_POST['form']) ){
	$area = $_POST['area'];
	$categoria = $_POST['categoria'];

	$condicao = "area LIKE '%".$area."%' AND categoria LIKE  '%".$categoria."%' ORDER BY titulo ";



}

$trabalhos = select ($campos,$tabela,$condicao);

if($trabalhos){
echo json_encode($trabalhos);
}else{
 echo "erro ao fazer a busca";
}



// OR autor_1 LIKE '%".$parametro."%' OR autor_2 LIKE '%".$parametro."%' OR autor_3 LIKE '%".$parametro."%' OR autor_4 LIKE '%".$parametro."%' OR autor_5 LIKE '%".$parametro."%'
?>