<?php  
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');


$titulo = $_POST['titulo'];
$resumo = $_POST['resumo'];
$area = $_POST['area'];
$coautor = $_POST['coautor'];
$apresentacao = $_POST['apresentacao'];
$orientador = $_POST['orientador'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];

// informações do artigo 


$arq = $_POST['arq'];
$tipo = $_POST['tipo'];
$tamanho = $_POST['tamanho'];
$nametemp = $_POST['nametemp'];
$arqerro = $_POST['arqerro'];
$tipodef = "application/pdf";
$tamnhodef = 1024*1024*2; //Definir tamanho maximo do arquivo.



if(isset($arq)){
			if($tipo != $tipodef){
				echo ("Tipo de Arquivo não suportado! <br/> Verifique o erro e tente novamente.");
			}else if ($tamanho > $tamnhodef){
				echo ("O arquivo excede o tamnho limite! <br/> Verifique o erro e tente novamente.");
			}else if ($tamanho <= $tamnhodef && $tipo = $tipodef && $arqerro == 0) {
				echo("<div class='alert-success'><center> Sucesso</center></div>");

			    $extensao = explode(".", $arq);
			      // Define o novo nome do arquivo usando um UNIX TIMESTAMP
			     $id = uniqid(rand()) .'.'. $extensao[1];

				$pasta = '../../uploads/'.$id;
			    $upload = move_uploaded_file($nametemp, $pasta);
			    $nomeartigo = explode(".", $id);
			    echo $nomeartigo[0];

			    session_start();
			    $email = $_SESSION['usuario'];
			    
			    $idartigo = $nomeartigo[0];
			    // variaveis do insert
				$tabela = 'sl_artigo';
				$campos = 'titulo, resumo, area, coautor, apresentacao, orientador,descricao,categoria,idartigo';
				$argumentos  = "'".$titulo."','".$resumo."', '".$area."', '".$coautor."', '".$apresentacao."', '".$orientador."','".$descricao."','".$categoria."', '".$idartigo."' ";

				$rp = insert($tabela,$campos,$argumentos);
    			updatemysql("idartigo = '".$nomeartigo[0]."' ",'sl_cadusu',"email = '".$email."' ");
    		//header("Location:../view/fim.php?artigo?titulo="+env.titulo+"?enviado" );
			}
			
		}

if($rp){
	
	updatemysql('publicado = 1','sl_cadusu',"email = '".$_SESSION['usuario']."' ");
	
}

echo "</br>";      
echo json_encode($rp);	

   



   
	   



?>

