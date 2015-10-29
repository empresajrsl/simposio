
<html>
<head>
    <meta charset="UTF-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
   <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <title>Tela de Cadastro</title>
</head>
<body>
<div class="container">
    <div class="jumbotron" style="background: url('../images/SGAGRO LOGO.png'); height:250px; widht:200px;">
        <div class="row">
            <div class="thumbnail col-md-2"><img src="../images/unesp.jpg"></div>
            <div class="col-md-8"><h1><center>Cadastro do Autor</center></h1></div>
            <div class="thumbnail col-md-2"><img src="../images/SGAGRO LOGO.png"></div>
        </div>
    </div>

    <div><center><b>Os campos marcados com (*) são campos de preenchimento obrigatorio</b></center></div>

    </br>

    <form id="formcad" method="post" action="confirma_cadastro.php" class="col-md-12">
        <!-- painel Login de cadastro -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login de Acesso</b></div>
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <label>E-Mail*</label></br>
                            <input type="text" id="email" name="email" class="col-md-12 form-control" data-toggle="tooltip" data-placement="top" title="Email que será usado para efetuar o login.">
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

                        <div class="col-md-2">
                            <label>Cadastrar como</label></br>
                            <select class="form-control">
                                <option>Academico</option>
                                <option>Estudante</option>
                                <option>Profissional</option>
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

                        <div class="col-md-4">
                            <label>Sobrenome*</label></br>
                            <input type="text" id="sobrenome" name="sobrenome" class="col-md-12 form-control" >
                        </div>

                        <div class="col-md-3">
                            <label>Data de nascimento*</label>
                            <input type="text" id="nascimento" name="nascimento" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Sexo*</label></br>
                            <select id="sexo" name="sexo" class="form-control">
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label class=>Deficiente*</label></br>
                            <select id="deficiente" name="deficiente" class="form-control">
                                <option>Não</option>
                                <option>Sim</option>
                            </select>
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
                            <label>Numero*</label></br>
                            <input type="text" id="numero" name="numero" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Cidade*</label></br>
                            <input type="text" id="cidade" name="cidade" class="col-md-12 form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Estado*</label></br>
                            <select id="estado" name="estado" class="form-control">
                                
                                <option>AC</option>
                                <option>AL</option> 
                                <option>AP</option> 
                                <option>AM</option> 
                                <option>CE</option> 
                                <option>DF</option> 
                                <option>ES</option> 
                                <option>GO</option> 
                                <option>MA</option> 
                                <option>MT</option> 
                                <option>MS</option> 
                                <option>MG</option> 
                                <option>PA</option> 
                                <option>PB</option> 
                                <option>PR</option> 
                                <option>PE</option> 
                                <option>PI</option> 
                                <option>RJ</option> 
                                <option>RN</option> 
                                <option>RS</option> 
                                <option>RO</option> 
                                <option>RR</option>
                                <option>SC</option>
                                <option selected>SP</option> 
                                <option>SE</option> 
                                <option>TO</option>
                            </select>
                        </div>
                        
                    </div>

                    </br>

                    <div class="row">
                        <!--div class="col-md-10 "-->
                            <div class="col-md-4">
                                <label>Complemento</label></br>
                                <input type="text" id="complemento" name="complemento" class="col-md-12 form-control">
                            </div>

                            <div class="col-md-3">
                                <label>CEP*</label></br>
                                <input type="text" id="cep" name="cep" class="col-md-12 form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Bairro*</label></br>
                                <input type="text" id="bairro" name="bairro" class="col-md-12 form-control">
                            </div>

                            <div class="col-md-2">
                                <label class=>Deficiente*</label></br>
                                <select id="deficiente" name="deficiente" class="form-control">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
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
            <button type="button" id="salvar" name="salvar" class="col-md-4 btn btn-primary">Confirmar</button>
            <div class="col-md-4"></div>
        </div>

    </form>
</div>

<script>
$(document).ready( function(){
$( ".target" ).change(function() {
  alert( "Handler for .change() called." );
});
</script>

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
                env.numero = $('#numero').val();
                env.complemento = $('#complemento').val();
                env.cep = $('#cep').val();
                env.bairro = $('#bairro').val();
                
                var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' & key != 'contato' & key != 'complemento'){
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