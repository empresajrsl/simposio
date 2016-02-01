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
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
</head>
<body>
<div class="container">

    <!--Banner-->
    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <div class="col-md-4 col-xs-4 col-lg-4">
                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6">
                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Área de Cadastro</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

    <center class=><h4>Os campos marcados com (*) são campos de preenchimento obrigatorio</h4></center>

    </br>

    <form id="formcad" method="post" action="confirma_cadastro.php" class="col-md-12 col-xs-12 col-lg-12">
        
        <!-- painel Login de cadastro -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login de Acesso</b></div>
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <label>E-Mail*</label></br>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Confirmar E-mail*</label></br>
                            <input type="email" id="confirmar_email" name="confirmar_email" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Senha*</label></br>
                            <input type="password" id="senha" name="senha" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Confirmar Senha*</label></br>
                            <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control" >
                        </div>

                        <div class="col-md-2">
                            <label>Cadastrar como*</label></br>
                            <input type="checkbox" id="autor" class="checkboxcad" value="Autor"> Autor </input><br>
                            <input type="checkbox" id="avaliador"  class="checkboxcad" value="Avaliador"> Avaliador </input>
                            <input type="hidden" id="tipocadastro" name="tipocadastro"> </input>
                        </div>
                    </div>
                    <div class="row" id="rowarea">
                        
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
                            <input type="text" id="nome" name="nome" class="form-control" >
                        </div>

                        <div class="col-md-4">
                            <label>Sobrenome*</label></br>
                            <input type="text" id="sobrenome" name="sobrenome" class="form-control" >
                        </div>

                        <div class="col-md-3">
                            <label>Data de nascimento*</label>
                            <input type="text" id="nascimento" name="nascimento" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Sexo*</label></br>
                            <select id="sexo" name="sexo" class="form-control">
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>

                    </div>

                    </br>

                    <div class="row">
                        <div class="col-md-3">
                            <label>CPF*</label></br>
                            <input type="text" id="cpf" name="cpf" class="form-control">
                        </div> 

                        <div class="col-md-3">
                            <label>Endereço*</label></br>
                            <input type="text" id="endereco" name="endereco" class="form-control">
                        </div>

                        <div class="col-md-1">
                            <label>Numero*</label></br>
                            <input type="text" id="numero" name="numero" class="form-control">
                        </div>

                        <div class="col-md-3">
                                <label>Complemento</label></br>
                                <input type="text" id="complemento" name="complemento" class="form-control">
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
                        
                            <div class="col-md-4">
                                <label>Cidade*</label></br>
                                <input type="text" id="cidade" name="cidade" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>CEP*</label></br>
                                <input type="text" id="cep" name="cep" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Bairro*</label></br>
                                <input type="text" id="bairro" name="bairro" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <label class=>País*</label></br>
                                <select id="pais" name="pais" class="form-control">
                                    <option>Afeganistão</option>
                                    <option>África do Sul</option>
                                    <option>Akrotiri</option>
                                    <option>Albânia</option>
                                    <option>Alemanha</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguila</option>
                                    <option>Antárctida</option>
                                    <option>Antígua e Barbuda</option>
                                    <option>Antilhas Neerlandesas</option>
                                    <option>Arábia Saudita</option>
                                    <option>Arctic Ocean</option>
                                    <option>Argélia</option>
                                    <option>Argentina</option>
                                    <option>Arménia</option>
                                    <option>Aruba</option>
                                    <option>Ashmore and Cartier Islands</option>
                                    <option>Atlantic Ocean</option>
                                    <option>Austrália</option>
                                    <option>Áustria</option>
                                    <option>Azerbaijão</option>
                                    <option>Baamas</option>
                                    <option>Bangladeche</option>
                                    <option>Barbados</option>
                                    <option>Barém</option>
                                    <option>Bélgica</option>
                                    <option>Belize</option>
                                    <option>Benim</option>
                                    <option>Bermudas</option>
                                    <option>Bielorrússia</option>
                                    <option>Birmânia</option>
                                    <option>Bolívia</option>
                                    <option>Bósnia e Herzegovina</option>
                                    <option>Botsuana</option>
                                    <option selected>Brasil</option>
                                    <option>Brunei</option>
                                    <option>Bulgária</option>
                                    <option>Burquina Faso</option>
                                    <option>Burúndi</option>
                                    <option>Butão</option>
                                    <option>Cabo Verde</option>
                                    <option>Camarões</option>
                                    <option>Camboja</option>
                                    <option>Canadá</option>
                                    <option>Catar</option>
                                    <option>Cazaquistão</option>
                                    <option>Chade</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Chipre</option>
                                    <option>Clipperton Island</option>
                                    <option>Colômbia</option>
                                    <option>Comores</option>
                                    <option>Congo-Brazzaville</option>
                                    <option>Congo-Kinshasa</option>
                                    <option>Coral Sea Islands</option>
                                    <option>Coreia do Norte</option>
                                    <option>Coreia do Sul</option>
                                    <option>Costa do Marfim</option>
                                    <option>Costa Rica</option>
                                    <option>Croácia</option>
                                    <option>Cuba</option>
                                    <option>Dhekelia</option>
                                    <option>Dinamarca</option>
                                    <option>Domínica</option>
                                    <option>Egipto</option>
                                    <option>Emiratos Árabes Unidos</option>
                                    <option>Equador</option>
                                    <option>Eritreia</option>
                                    <option>Eslováquia</option>
                                    <option>Eslovénia</option>
                                    <option>Espanha</option>
                                    <option>Estados Unidos</option>
                                    <option>Estónia</option>
                                    <option>Etiópia</option>
                                    <option>Faroé</option>
                                    <option>Fiji</option>
                                    <option>Filipinas</option>
                                    <option>Finlândia</option>
                                    <option>França</option>
                                    <option>Gabão</option>
                                    <option>Gâmbia</option>
                                    <option>Gana</option>
                                    <option>Gaza Strip</option>
                                    <option>Geórgia</option>
                                    <option>Geórgia do Sul e Sandwich do Sul</option>
                                    <option>Gibraltar</option>
                                    <option>Granada</option>
                                    <option>Grécia</option>
                                    <option>Gronelândia</option>
                                    <option>Guame</option>
                                    <option>Guatemala</option>
                                    <option>Guernsey</option>
                                    <option>Guiana</option>
                                    <option>Guiné</option>
                                    <option>Guiné Equatorial</option>
                                    <option>Guiné-Bissau</option>
                                    <option>Haiti</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong</option>
                                    <option>Hungria</option>
                                    <option>Iémen</option>
                                    <option>Ilha Bouvet</option>
                                    <option>Ilha do Natal</option>
                                    <option>Ilha Norfolk</option>
                                    <option>Ilhas Caimão</option>
                                    <option>Ilhas Cook</option>
                                    <option>Ilhas dos Cocos</option>
                                    <option>Ilhas Falkland</option>
                                    <option>Ilhas Heard e McDonald</option>
                                    <option>Ilhas Marshall</option>
                                    <option>Ilhas Salomão</option>
                                    <option>Ilhas Turcas e Caicos</option>
                                    <option>Ilhas Virgens Americanas</option>
                                    <option>Ilhas Virgens Britânicas</option>
                                    <option>Índia</option>
                                    <option>Indian Ocean</option>
                                    <option>Indonésia</option>
                                    <option>Irão</option>
                                    <option>Iraque</option>
                                    <option>Irlanda</option>
                                    <option>Islândia</option>
                                    <option>Israel</option>
                                    <option>Itália</option>
                                    <option>Jamaica</option>
                                    <option>Jan Mayen</option>
                                    <option>Japão</option>
                                    <option>Jersey</option>
                                    <option>Jibuti</option>
                                    <option>Jordânia</option>
                                    <option>Kuwait</option>
                                    <option>Laos</option>
                                    <option>Lesoto</option>
                                    <option>Letónia</option>
                                    <option>Líbano</option>
                                    <option>Libéria</option>
                                    <option>Líbia</option>
                                    <option>Listenstaine</option>
                                    <option>Lituânia</option>
                                    <option>Luxemburgo</option>
                                    <option>Macau</option>
                                    <option>Macedónia</option>
                                    <option>Madagáscar</option>
                                    <option>Malásia</option>
                                    <option>Malávi</option>
                                    <option>Maldivas</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Man, Isle of</option>
                                    <option>Marianas do Norte</option>
                                    <option>Marrocos</option>
                                    <option>Maurícia</option>
                                    <option>Mauritânia</option>
                                    <option>Mayotte</option>
                                    <option>México</option>
                                    <option>Micronésia</option>
                                    <option>Moçambique</option>
                                    <option>Moldávia</option>
                                    <option>Mónaco</option>
                                    <option>Mongólia</option>
                                    <option>Monserrate</option>
                                    <option>Montenegro</option>
                                    <option>Mundo</option>
                                    <option>Namíbia</option>
                                    <option>Nauru</option>
                                    <option>Navassa Island</option>
                                    <option>Nepal</option>
                                    <option>Nicarágua</option>
                                    <option>Níger</option>
                                    <option>Nigéria</option>
                                    <option>Niue</option>
                                    <option>Noruega</option>
                                    <option>Nova Caledónia</option>
                                    <option>Nova Zelândia</option>
                                    <option>Omã</option>
                                    <option>Pacific Ocean</option>
                                    <option>Países Baixos</option>
                                    <option>Palau</option>
                                    <option>Panamá</option>
                                    <option>Papua-Nova Guiné</option>
                                    <option>Paquistão</option>
                                    <option>Paracel Islands</option>
                                    <option>Paraguai</option>
                                    <option>Peru</option>
                                    <option>Pitcairn</option>
                                    <option>Polinésia Francesa</option>
                                    <option>Polónia</option>
                                    <option>Porto Rico</option>
                                    <option>Portugal</option>
                                    <option>Quénia</option>
                                    <option>Quirguizistão</option>
                                    <option>Quiribáti</option>
                                    <option>Reino Unido</option>
                                    <option>República Centro-Africana</option>
                                    <option>República Checa</option>
                                    <option>República Dominicana</option>
                                    <option>Roménia</option>
                                    <option>Ruanda</option>
                                    <option>Rússia</option>
                                    <option>Salvador</option>
                                    <option>Samoa</option>
                                    <option>Samoa Americana</option>
                                    <option>Santa Helena</option>
                                    <option>Santa Lúcia</option>
                                    <option>São Cristóvão e Neves</option>
                                    <option>São Marinho</option>
                                    <option>São Pedro e Miquelon</option>
                                    <option>São Tomé e Príncipe</option>
                                    <option>São Vicente e Granadinas</option>
                                    <option>Sara Ocidental</option>
                                    <option>Seicheles</option>
                                    <option>Senegal</option>
                                    <option>Serra Leoa</option>
                                    <option>Sérvia</option>
                                    <option>Singapura</option>
                                    <option>Síria</option>
                                    <option>Somália</option>
                                    <option>Southern Ocean</option>
                                    <option>Spratly Islands</option>
                                    <option>Sri Lanca</option>
                                    <option>Suazilândia</option>
                                    <option>Sudão</option>
                                    <option>Suécia</option>
                                    <option>Suíça</option>
                                    <option>Suriname</option>
                                    <option>Svalbard e Jan Mayen</option>
                                    <option>Tailândia</option>
                                    <option>Taiwan</option>
                                    <option>Tajiquistão</option>
                                    <option>Tanzânia</option>
                                    <option>Território Britânico do Oceano Índico</option>
                                    <option>Territórios Austrais Franceses</option>
                                    <option>Timor Leste</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                                    <option>Trindade e Tobago</option>
                                    <option>Tunísia</option>
                                    <option>Turquemenistão</option>
                                    <option>Turquia</option>
                                    <option>Tuvalu</option>
                                    <option>Ucrânia</option>
                                    <option>Uganda</option>
                                    <option>União Europeia</option>
                                    <option>Uruguai</option>
                                    <option>Usbequistão</option>
                                    <option>Vanuatu</option>
                                    <option>Vaticano</option>
                                    <option>Venezuela</option>
                                    <option>Vietname</option>
                                    <option>Wake Island</option>
                                    <option>Wallis e Futuna</option>
                                    <option>West Bank</option>
                                    <option>Zâmbia</option>
                                    <option>Zimbabué</option>
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
                        <div class="col-md-3">
                            <label>Instituição/Afiliação*</label></br>
                            <input type="text" id="instituicao" name="instituicao" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Cargo</label></br>
                            <input type="text" id="cargo" name="cargo" class="form-control">
                        </div>

                         <div class="col-md-3">
                            <label>Telefone/Celular*</label></br>
                            <input type="text" id="telefone" name="telefone" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Telefone contato</label></br>
                            <input type="text" id="contato" name="contato" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- fim do painel de contato -->

        <div class="row">
            <button type="button" id="salvar" name="salvar" class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4 btn btn-primary">
                Confirmar
            </button>
        </div>

        </br>

    </form>
</div>

<script type="text/javascript" src="../js/scripts/confcadcpf.js"></script>
<script type="text/javascript" src="../js/scripts/confcademail.js"></script>
<script type="text/javascript" src="../js/scripts/calculaidade.js"></script>
<script type="text/javascript" src="../js/scripts/enviocadusu.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','#avaliador',function(){
            console.log(this);
            if( $("#avaliador").is(':checked') ){
           
                $('#rowarea').html('');
                $('#rowarea').append('  <div class="col-md-3" id="divarea">'+
                                        '<label>Área temática que irá avaliar*</label></br>'+
                                        '<select class="form-control" id="area" name="area">'+
                                            '<option selected>Gestão de Pessoas e Estudos Organizacionais</option>'+
                                            '<option>Desenvolvimento e Gestão</option>'+
                                            '<option>Economia e Finanças</option>'+
                                            '<option>Empreendedorismo, Inovação e Tecnologia</option>'+
                                            '<option>Estratégia, Planejamento e Governança</option>'+
                                            '<option>Logísticas e Operações</option>'+
                                            '<option>Marketing e Mercados</option>'+
                                            '<option>Sustentabilidade e Responsabilidade Sócio Ambiental</option>'+
                                        '</select>'+
                                    '</div>');
            }else{
                $('#divarea').html('');
            }
        });
    });
</script>

<script>
    $(document).ready( function(){
        // mascara telefone/contato
        $("#telefone").mask("(99) 99999 - 9999");
        $("#contato").mask("(99) 9999 - 9999");
        // mascara cpf
        $("#cpf").mask("999.999.999-99");  
        // mascara cep
        $("#cep").mask("99.999-999");
        // mascara data nascimento
        $("#nascimento").mask("99/99/9999")
    });
</script>

</body>
</html>