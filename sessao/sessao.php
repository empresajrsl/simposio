<?php 

include("../controller/funcoes/funcoesmysql.php");

// inicia sessão

// verifica se o email e a senha foram preenchidos
if (empty($_POST['email']) == false  and empty($_POST['senha']) ==false )
{

		$emailp = $_POST['email'];
		$senhap = $_POST['senha'];
			
				// faz um select no banco de dados dos campos email, senha, email verificado e status na tabela usuarios 
				$busca = select('id_usuario,email, senha, emailverificado,publicado',"sl_cadusu", " email='".$emailp."' and senha = '$senhap' ");
				
				$result = array();

				echo json_encode($busca);

					// verifica se a busca retornou resultados
					if (empty($busca))
					{
						// atribui numero 1 a variavel erro o que indica que o email ou a senha é incorrto
    					header('Location: ../index.php?erro=1');
    					
    					
				    }else{ 

				    	foreach ($busca as $key => $val) {
							$result = $val;	
					
						}

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
									$_SESSION['idusu'] = $result['id_usuario'];

									

								}else{
									header('Location: ../index.php?erro=2');
								}
								// verifica se o usuário esta logado antes de mostrar a pagina 
								if(isset($_SESSION['logado']) ){

									include ('../controller/ACAO/sl-ACAOsomaenvios.php');

									if($dados == 0){
										header('location: ../view/regras.php');
									}else{
										header('location: ../view/submit.php');
									}

									
								}else{
										// envia mensegem de erro para index 
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