<?php 

include("../controller/funcoes/funcoesmysql.php");

// inicia sessão

// verifica se o email e a senha foram preenchidos
if (empty($_POST['email']) == false  and empty($_POST['senha']) ==false )
{

		$emailp = $_POST['email'];
		$senhap = $_POST['senha'];
			echo("post".$emailp.$senhap."</br>");
				// faz um select no banco de dados dos campos email, senha, email verificado e status na tabela usuarios 
				$busca = select('email, senha, emailverificado,publicado',"sl_cadusu", " email='".$emailp."' and senha = '$senhap' ");
				
				$result = array();

				foreach ($busca as $key => $val) {
					$result = $val;	
					echo "resultado da busca".json_encode($result)."</br>";
				}

					// verifica se a busca retornou resultados
					if (empty($result))
					{
						// atribui numero 1 a variavel erro o que indica que o email ou a senha é incorrto
    					header('Location: ../index.php?erro=1');
    					
					}else{

							echo "result".json_encode($result);
							// atribui cada campo a sua respectiva variavel 
							$email = $result['email'];
							$senha = $result['senha'];
							$emailchek = $result['emailverificado'];
							
								// verifica se o usuario esta cadastrado no sistema
								if($emailp == $email and $senhap == $senha and $emailchek == 1 )
								{
									session_start();
									// atribui true a variavel de sessão logado
									$_SESSION['logado'] = true;
									$_SESSION['usuario'] = $email;
										echo ('logado');
										echo ($_SESSION['usuario']);

								}else{
									header('Location: ../index.php?erro=2');
								}
								if(isset($_SESSION['logado']) )
								{	
									if($result['publicado'] == 0){
										// verifica se o usuário esta logado antes de mostrar a pagina 
										header('location: ../view/regras.php');
									}elseif($result['publicado'] == 1){
										header('location: ../view/submit.php');
									}elseif($result['publicado'] == 2){
										header('location: ../view/fim.php');
									}

									
								}else{
										echo ('não logado');
											header('Location: ../index.php?erro=2');
								}

							}		
								//fecha else principal

//fecha if principal
}else{

		// atribui 2 a variavel erro o que indica que a campos do formulario que não foram preenchidos
		header('Location: ../index.php?erro=3');
	}

  ?>