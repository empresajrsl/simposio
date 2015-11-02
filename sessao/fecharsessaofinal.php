<?php
	session_start(); // Inicia a sessão
	session_destroy(); // Destrói a sessão limpando todos os valores salvos
	if(isset($_GET['id'])){
	$id = $_GET['id'];	
	header("Location: ../view/fim.php?id=".$id); exit; // Redireciona o visitante
	}
?>