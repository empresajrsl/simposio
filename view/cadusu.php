
<html>
<head>
    <meta charset="UTF-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <LINK type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></LINK>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
   <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <title>Tela de Cadastro</title>
</head>
<body>
<div class="container">
    <div class="jumbotron"><h1><center>Cadastro do Participante</center></h1></div>
    <div><center><b>Os campos marcados com (*) são campos de preenchimento obrigatorio</b></center></div>

    </br>

    <form id="formcad" method="post" action="confirma_cadastro.php" >
        <!-- painel Login de cadastro -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login de Acesso</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="col-md-3">
                                <label>E-Mail*</label></br>
                                <input type="text" id="email" name="email" class="col-md-12 form-control" >
                            </div>

                            <div class="col-md-3">
                                <label>Confirmar E-mail*</label></br>
                                <input type="text" id="confirmar_email" name="confirmar_email" class="col-md-12 form-control" >
                            </div>

                            <div class="col-md-3">
                                <label>Senha*</label></br>
                                <input type="text" id="senha" name="senha" class="col-md-12 form-control" >
                            </div>

                            <div class="col-md-3">
                                <label>Confirmar Senha*</label></br>
                                <input type="text" id="confirmar_senha" name="confirmar_senha" class="col-md-12 form-control" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <label>Cadastrar como*</label></br>
                            <select id="cadastrar_como" name="cadastrar_como" class="form-control">
                                <option>Leitor</option>
                                <option>Autor</option>
                                <option>Avaliador</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim painel de cadastro -->

        <!-- painel de dados pessoais -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Dados Pessoais</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Nome*</label></br>
                            <input type="text" id="nome" name="nome" class="col-md-12 form-control" >
                        </div>

                        <div class="col-md-3">
                            <label>Sobrenome*</label></br>
                            <input type="text" id="sobrenome" name="sobrenome" class="col-md-12 form-control" >
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label>Data de nascimento*</label>
                                <input type="text" id="nascimento" name="nascimento" class="col-md-12 form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Sexo*</label></br>
                                <select id="sexo" name="sexo" class="form-control">
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class=>Deficiente*</label></br>
                                <select id="deficiente" name="deficiente" class="form-control">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    </br>

                    <div class="row">
                        <div class="col-md-3">
                            <label>CPF*</label></br>
                            <input type="text" id="cpf" name="cpf" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Endereço*</label></br>
                            <input type="text" id="endereco" name="endereco" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-1">
                            <label>Numero</label></br>
                            <input type="text" id="numero" name="numero" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Cidade*</label></br>
                            <input type="text" id="cidade" name="cidade" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Estado*</label></br>
                            <select id="estado" name="estado" class="form-control">
                                <option>SP</option>
                                <option>RJ</option>
                                <option>MJ</option>
                                <option>RS</option>
                            </select>
                        </div>
                        
                    </div>

                    </br>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-4">
                                <label>Complemento</label></br>
                                <input type="text" id="bairro" name="bairro" class="col-md-12 form-control">
                            </div>

                            <div class="col-md-4">
                                <label>CEP</label></br>
                                <input type="text" id="cep" name="cep" class="col-md-12 form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Bairro</label></br>
                                <input type="text" id="bairro" name="bairro" class="col-md-12 form-control">
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- fim do painel de dados pessoais -->

        <!-- painel de contato -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Contato</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Instituição/Afiliação*</label></br>
                            <input type="text" id="instituicao" name="instituicao" class="col-md-12 form-control" >
                        </div>

                         <div class="col-md-4">
                            <label>Tefone/Celular*</label></br>
                            <input type="text" id="telefone" name="telefone" class="col-md-12 form-control" >
                        </div>

                        <div class="col-md-4">
                            <label>Telefone contato</label></br>
                            <input type="text" id="contato" name="contato" class="col-md-12 form-control" >
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- fim do painel de contato -->

        <div class="row">
            <div class="col-md-4"></div>
            <button type="button" id="salvar" name="salvar" class="col-md-4 btn btn-primary">confirmar</button>
            <div class="col-md-4"></div>
        </div>

    </form>
</div>

<script>
    $(document).ready( function(){
        // mascara telefone/contato
        $("#telefone").mask("(99) 9999 - 9999");
        $("#contato").mask("(99) 9999 - 9999");
        // mascara cpf
        $("#cpf").mask("999.999.999-99");  
        // mascara cep
        $("#cep").mask("99.999-999");
        // mascara data nascimento
        $("#nascimento").mask("99/99/9999")
    });
</script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $(document).on('click','#salvar',function(){

                env = {};
                env.senha = $('#senha').val();
                env.confirmar_senha = $('#confirmar_senha').val();
                env.nome = $('#nome').val();
                env.sobrenome = $('#sobrenome').val();
                env.nascimento = $('#nascimento').val();
                env.sexo = $('#sexo option:selected').val();
                env.deficiente = $('#deficiente  option:selected').val();
                env.cpf = $('#cpf').val();
                env.endereco = $('#endereco').val();
                env.cidade = $('#cidade').val();
                env.estado = $('#estado  option:selected').val();
                env.instituicao = $('#instituicao').val();
                env.email = $('#email').val();
                env.confirmar_email = $('#confirmar_email').val();
                env.telefone = $('#telefone').val();
                env.contato = $('#contato').val();
                env.usuari = $('#cadastrar_como').val();
                
                var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' & key != 'contato'){
                        // aplica formatação css os inputs vazios
                        $("#"+key).css({"border" : "2px inset #F00", "padding": "2px"});
                        count++;
                        // volta a formatação original os inputs que foram preenchidos
                    }else{
                        $("#"+key).css({"border" : "2px inset"});
                    }
                });
                    // se hover inputs vazios não submete o form 
                    if (count != 0){
                        alert('Atenção aos campos com preenchimento obrigatórios!!!');
                        return;
                    // senão submete    
                    }

                    // verifica se a confirmação de senha e mail correspondem
                    if(env.senha != env.confirmar_senha & env.email != env.confirmar_email){
                       alert('O campo de confirmação da senha e do email não correspondem aos mesmos, verifique e tente novamente');
                       $('#senha').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_senha').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                        $('#senha').css({"border" : "2px inset"});
                        $('#confirmar_senha').css({"border" : "2px inset"});
                        $('#email').css({"border" : "2px inset"});
                        $('#confirmar_email').css({"border" : "2px inset"});
                    }
                    if(env.senha != env.confirmar_senha){
                       alert('O campo de confirmação da senha não corresponde a mesma, verifique e tente novamente');
                       $('#senha').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_senha').css({"border" : "2px inset #F00", "padding": "2px"});
                        return;
                    }else{
                        $('#senha').css({"border" : "2px inset"});
                        $('#confirmar_senha').css({"border" : "2px inset"});
                }
                    if(env.email != env.confirmar_email){
                       alert('O campo de confirmação do email não correspondem ao mesmo, verifique e tente novamente');
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                        $('#email').css({"border" : "2px inset"});
                        $('#confirmar_email').css({"border" : "2px inset"});
                    }
                    console.log(env);

                    $("#formcad").submit();
                     
                    
                
                
            });
        });

        
    </script>


</body>
</html>