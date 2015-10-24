<?php 
	include('../common/sql.php');
		$nome = $_POST['nome'];
		$arquivo = $_FILES['artigo']['name'];
		$tipo = $_FILES['artigo']['type'];
		$nametemp = $_FILES['artigo']['tmp_name'];
		$arqerro = $_FILES['artigo']['error'];
	

			if ($arqerro == 0) {
		    $pasta = '../teste/';
		    $extensao = explode(".", $arquivo);
		      // Define o novo nome do arquivo usando um UNIX TIMESTAMP
		     $id = uniqid(rand()) .'.'. $extensao[1];
		    $upload = move_uploaded_file($nametemp, $pasta,$id);
		    }
		    $valores = $id.','.$nome;	
		    mysqlinsere('id,nome','usuario',$valores);

				



?>