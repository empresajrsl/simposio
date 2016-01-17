<?php 

include("../controller/funcoes/funcoesmysql.php");

// inicia sessão

// verifica se o email e a senha foram preenchidos
if (empty($_POST['email']) == false  and empty($_POST['senha']) ==false )
{

		$emailp = $_POST['email'];
		$senhap = $_POST['senha'];
			
				// faz um select no banco de dados dos campos email, senha, email verificado e status na tabela usuarios 
				$busca = select('id_usuario,email, senha, emailverificado,publicado,cpf,nome,instituicao',"sl_cadusu", " email='".$emailp."' and senha = '$senhap' ");
				
				$result = array();

				

					// verifica se a busca retornou resultados
					if (empty($busca))
					{
						// atribui numero 1 a variavel erro o que indica que o email ou a senha é incorrto
						echo '<script>location.href=" ../index.php?erro=1";</script>';
    					
    					
    					
				    }else{ 

				    	foreach ($busca as $key => $val) {
							$result = $val;	
					
						}

							
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
									$_SESSION['cpf'] = $result['cpf'];
									$_SESSION['nome'] = $result['nome'];
									$_SESSION['instituicao'] = $result['instituicao'];

									

								}else{
									echo '<script>location.href=" ../index.php?erro=2";</script>';
									
								}
								// verifica se o usuário esta logado antes de mostrar a pagina 
								if(isset($_SESSION['logado']) ){

									$email = $_SESSION['usuario'];
									$id = $_SESSION['idusu'];

									$somauser1 = select("count(*) as qtdd","sl_grupo","id_usuario1 =".$id."");
									$somauser2 = select("count(*) as qtdd","sl_grupo","id_usuario2 =".$id."");
									$somauser3 = select("count(*) as qtdd","sl_grupo","id_usuario3 =".$id."");
									$somauser4 = select("count(*) as qtdd","sl_grupo","id_usuario4 =".$id."");
									$somauser5 = select("count(*) as qtdd","sl_grupo","id_usuario5 =".$id."");
									$rp = ($somauser1[0]['qtdd'] + $somauser2[0]['qtdd'] + $somauser3[0]['qtdd'] + $somauser4[0]['qtdd'] + $somauser5[0]['qtdd']);

									$dados = $rp;

									if($dados == 0){
										echo '<script>location.href=" ../view/regras.php";</script>';
										
									}else{
										echo '<script>location.href=" ../view/submit.php";</script>';
										
									}

									
								}else{
										// envia mensegem de erro para index 
										echo '<script>location.href=" ../index.php?erro=2";</script>';
									
								}

					}		
								//fecha else principal

//fecha if principal
}else{

		// atribui 2 a variavel erro o que indica que a campos do formulario que não foram preenchidos
		echo '<script>location.href=" ../index.php?erro=2";</script>';
	}

  ?>