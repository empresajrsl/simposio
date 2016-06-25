-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2016 às 22:53
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unesp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_adm`
--

CREATE TABLE IF NOT EXISTS `sl_adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `criado` datetime NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `sl_adm`
--

INSERT INTO `sl_adm` (`id_adm`, `criado`, `nome`, `email`, `senha`) VALUES
(1, '2016-02-05 11:03:00', 'Anderson', 'littletape2@gmail.com', '4321'),
(5, '2016-03-14 22:04:00', 'Administrador', 'administrador_simposio@unesp.com', 'simpunesp2016'),
(3, '2016-03-12 11:18:00', 'marlon dos santos ', 'marlu_tcu@hotmail.com', 'nopainnogain1'),
(4, '2016-03-12 16:06:00', 'Anderson Souza', 'anderson.souza0909@gmail.com', '4321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_artigo`
--

CREATE TABLE IF NOT EXISTS `sl_artigo` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `criado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `resumo` varchar(2400) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `coautor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apresentacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idartigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `instituicao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_avaliador1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_avaliador2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avaliacao_concluida1` int(11) NOT NULL,
  `avaliacao_concluida2` int(11) NOT NULL,
  PRIMARY KEY (`id_artigo`),
  UNIQUE KEY `id` (`id_artigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Extraindo dados da tabela `sl_artigo`
--

INSERT INTO `sl_artigo` (`id_artigo`, `criado`, `titulo`, `resumo`, `area`, `coautor`, `apresentacao`, `orientador`, `descricao`, `categoria`, `idartigo`, `email`, `status`, `instituicao`, `id_avaliador1`, `id_avaliador2`, `avaliacao_concluida1`, `avaliacao_concluida2`) VALUES
(1, '', 'UMA ANÁLISE DO DESENVOLVIMENTO DO SETOR SUCROENERGÉTICO', 'O setor sucroenergético tem forte impacto como um gerador de riquezas para o Brasil. Diversos autores discutem sobre a importância de se quantificar um sistema agroindustrial, assim, entender a movimentação financeira de um setor torna-se uma ferramenta para o seu planejamento. Este artigo tem como objetivo analisar o desenvolvimento do setor sucroenergético brasileiro nos últimos cincos anos e avaliar se o método de mapeamento e quantificação de sistemas agroindustriais (GESis) é uma ferramenta útil para analisar o desenvolvimento econômico de um sistema agroindustrial. A aplicação do método permitiu enxergar com clareza o desempenho de todos os elos que compõe o sistema agroindustrial. Ainda, mostrou-se uma importante ferramenta para analisar o desempenho de um sistema agronindustrial, apontando possíveis pontos de melhoria e oportunidades. A comparação entre ambos os estudos contribui tanto para melhor visualização da evolução do setor sucroenergético como também para um melhor entendimento da realidade conjuntural do setor.', 'Estratégia, Planejamento e Governança', '2', 'Oral', '', '', 'Oral', '1076782155695717db78fe', 'rbkalaki@gmail.com', 2, 'Faculdade de Economia, Administração e Contabilida', '71', '123', 1, 1),
(2, '', 'AVALIAÇÃO DOS CUSTOS E DA VIABILIDADE FINANCEIRA DO SISTEMA DE IRRIGAÇÃO DA CANA DE AÇÚCAR PELO PIVÔ', 'No Brasil a cana de açúcar é considerada uma cultura de grande importância produtiva e econômica, com crescentes áreas de plantio e volume de produção anual, devido a estas variáveis positivas são introduzidos no processo de plantio mecanismos de irrigação que podem apresentar valor agregado ao produto, ao sistema de produção e ao produto final. Diante destes dados, é natural que os custos do sistema de irrigação por pivô central e a análise da viabilidade financeira dos investimentos deste processo sejam de grande importância para a manutenção da qualidade do produto. Com isso, o objetivo deste trabalho e desenvolver a analise dos custos e da viabilidade financeira do sistema de irrigação da cana de açúcar por pivô central na usina Raizen unidade de Jataí GO, bem como identificar quais os benefícios esperados em um projeto de investimento na implantação do processo de irrigação por pivô central.', 'Economia e Finanças', '0', 'Pôster', '', '', 'Resumo Expandido', '76384624256bd0d11a08d0', 'adriano.fuzaro@ifgoiano.edu.br', 1, 'INSTITUTO FEDERAL GOIANO', '71', '123', 1, 1),
(23, '', 'ANÁLISE DA PRODUÇÃO CIENTÍFICA SOBRE A INTERFACE DOS TEMAS DE “GESTÃO DE PESSOAS” E “AGRONEGÓCIO”: UM ESTUDO BIBLIOMÉTRICO', 'A importância da gestão de pessoas para as organizações é um tema de crescente discussão, ocupando um papel estratégico para as organizações tanto no nível nacional quanto global. O gerenciamento do capital humano é necessário para o alcance dos objetivos da organização, desta forma cria-se uma vantagem competitiva vinculada às organizações que possuem o melhor processo de atrair, selecionar, utilizar e desenvolver talentos. Portanto, torna-se importante que estudos que permeiem esta temática sejam desenvolvidos em diversos setores. O setor do agronegócio no Brasil é responsável por aproximadamente 23% do PIB nacional dos últimos dez anos, ocupando importante posição na produção mundial de café, laranja, soja e cana-de-açúcar e na exportação mundial de carne bovina e de aves. Partindo desses pressupostos e buscando compreender como ocorre a relação entre as duas temáticas, o presente estudo tem como objetivo realizar uma revisão bibliográfica sistemática (RBS) da produção científica sobre a interface dos temas de “gestão de pessoas” e o “agronegócio” durante o período de 2005 a 2015. Os resultados revelam que existem muitos estudos envolvendo as áreas separadamente, entretanto, são escassas as relações praticadas entre os conceitos de gestão de pessoas e agronegócio, havendo uma lacuna a ser explorada no âmbito acadêmico.', 'Gestão de Pessoas e Estudos Organizacionais', '3', 'Artigo Completo', '', '', 'Artigo Completo', '60830872256cb4d6a87332', 'fer.yamauchi@gmail.com', 1, 'UNESP', '71', '132', 1, 1),
(25, '', 'REGIÕES TIPICAMENTE RURAIS PODEM APRESENTAR NÍVEIS DE DESENVOLVIMENTO MAIORES DO QUE AS INDUSTRIAIS?', 'Este artigo tem como principal objetivo verificar se as regiões de governo tipicamente rurais podem apresentar maior nível de desenvolvimento quando comparadas às regiões de governo tipicamente industriais do Estado de São Paulo. Para tanto, foi utilizada a técnica de análise fatorial exploratória, envolvendo variáveis de diversas dimensões como econômica, social e demográfica. Após a aplicação da análise fatorial, foram obtidos três fatores, os quais podem ser considerados indicadores de desenvolvimento. Conforme as características de cada indicador encontrado, foi possível nomeá-los como: nível de desenvolvimento rural, nível de desenvolvimento urbano e nível de desenvolvimento industrial e serviços. Para facilitar o entendimento, foram configurados clusters das regiões de governo do Estado de São Paulo que apresentaram características semelhantes. Os resultados mostram que, apesar das variáveis econômicas ligadas à atividade industrial e serviços possuírem forte peso no desenvolvimento local, regiões de governo tipicamente rurais podem apresentar níveis de desenvolvimento maiores do que algumas regiões em que a economia está ligada ao setor industrial.', 'Desenvolvimento e Gestão', '1', 'Artigo Completo', '', '', 'Artigo Completo', '172894862756d3294124a04', 'jh.eustachio@gmail.com', 1, 'Faculdade de Economia, Administração e Contabilidade de Ribeirão Preto', '71', '123', 1, 1),
(26, '', 'CONSTRUÇÃO DE INDICADORES DE SUSTENTABILIDADE PARA SUINOCULTURA DE TERMINAÇÃO EM SISTEMAS INTEGRADOS DE PRODUÇÃO', 'RESUMOA necessidade de criação de métodos viáveis e acessíveis para mensuração e posterior avaliação da sustentabilidade dentro de um setor é o primeiro passo para o diagnóstico e a implementação de políticas e ações públicas ou privadas. Por meio da análise e valoração de critérios dentre as dimensões social, ambiental e econômica, adaptadas à metodologia M.A.I.S. (Método de Avaliação de Indicadores de Sustentabilidade), criaram-se figuras que permitem a visualização e classificação de sistemas suinícolas de terminação em integração em: desequilíbrio, em busca de equilíbrio, e em equilíbrio. Apesar de essa metodologia ser baseada em referenciais regionais (preço e legislação) ela permite ser adaptada a novas regiões ou períodos para distintas análises.', 'Sustentabilidade e Responsabilidade Sócio Ambiental', '2', 'Artigo Completo', '', '', 'Artigo Completo', '79342303056d47535c9d73', 'gabica14@hotmail.com', 1, 'UFRGS', '71', '129', 1, 1),
(27, '', 'MODERNIZAÇÃO DO LATIFÚNDIO E O DESENVOLVIMENTO RURAL NO BRASIL', 'Este trabalho tem por finalidade entender como está constituída a estrutura agrária nacional e como essa estrutura fundiária foi se adaptando e se modernizando aos diferentes momentos históricos do país. Este estudo procurou fazer uma revisão da perspectiva histórica da ocupação do território rural, desde a expansão comercial agromercantil da metrópole portuguesa no Brasil colônia até o atual sistema de modernização dos latifúndios de produção agrícola que fazem parte do agronegócio brasileiro. Por fim, se discute que a modernização da produção agrícola implantada pelo agronegócio, não foi capaz de dar respostas às necessidades ambientais (desmatamento, queimadas, degradação do solo, contaminação ambiental por defensivos, fertilizantes e destruição de ecossistemas naturais); econômicas (concentração da renda, concentração de terras, crédito para a agroexportação); e sociais (mazelas sociais nos centros urbanos, educação, tipo de emprego, quantidade de empregos gerados, nível salarial e formalização dos assalariados, conflitos fundiários, negação dos direitos territoriais dos povos e comunidades do campo, êxodo rural) para problemas históricos enfrentados pelo setor agropecuário brasileiro.', 'Desenvolvimento e Gestão', '0', 'Artigo Completo', '', '', 'Artigo Completo', '84651824356ddbbbaf2ae3', 'daltro_cella@yahoo.com.br', 1, 'Fatec', '71', '123', 1, 1),
(28, '', 'SEGURANÇA DO TRABALHO  E PPRA (PROGRAMA DE PREVENÇÃO A RISCOS AMBIENTAIS) EM UMA EMPRESA DE EMBALAGENS DE MADEIRA', 'O presente trabalho tem por objetivo avaliar e propor ações as medidas de controle de segu-rança para minimizar riscos, por meio de levantamento de dados, referentes a ruído, iluminân-cia e ergonomia presente nos setores de uma indústria de embalagens situada no município de Itaberá-SP. Os dados foram mensurados por meio de um luxímetro digital para luminosidade e um decibelímetro digital para o nível de pressão sonora. Após coletados os dados, elaborou-se um PPRA (Programa de Prevenção de Riscos Ambientais) e propondo ações a serem realiza-das para melhoria no ambiente de trabalho. Além disto, os dados coletados foram comparados com as normas regulamentadoras NR-15 e NBR5413/92, para verificar se há conformidade. Concluiu-se que as 2 serrarias em estudo estão em conformidade com a norma NR15 Anexos N°1 e 2. A luminosidade presente nas serrarias se encontram em conformidade com a norma NBR5143/92. Além disso houve falhas na questão ergonômica.', 'Sustentabilidade e Responsabilidade Sócio Ambiental', '1', 'Pôster', '', '', 'Resumo Expandido', '146732299756df0fa122284', 'glaucia@itapeva.unesp.br', 1, 'UNESP', '71', '126', 1, 1),
(29, '', 'ANÁLISE E ADEQUAÇÃO DO ARRANJO FÍSICO EM FÁBRICA DE EMBALAGEM DE MADEIRA PARA COMERCIALIZAÇÃO DE FRUTAS ', 'O presente trabalho teve como objetivo analisar o arranjo físico ou layout atual e desenvolver um novo layout utilizando sistema de produção enxuta para uma empresa, para o melhoramento do processo produtivo de uma empresa no setor madeireiro, no caso a empresa serraria kapinus comércio de madeiras Ltda., localizada no município de Itapeva-SP, especializada em usinagem e beneficiamento da madeira de pinos para produção de caixas de alimentos, tabuados e forros. Após inúmeras visitas ao local e estudos sobre sistemas de produção e arranjo físico, foi proposto junto ao setor de planejamento da empresa um novo layout por produto, pois ao estudar os conceitos de produção enxuta este modelo seria o mais adequado para atender a necessidade e capacidade produtiva da empresa, buscando uma otimização no processo produtivo e visando futuras ampliações. ', 'Logísticas e Operações', '1', 'Artigo Completo', '', '', 'Artigo Completo', '164323779356e1a2489f609', 'glaucia@itapeva.unesp.br', 1, 'UNESP', '71', '130', 1, 1),
(34, '', 'APANHADOR DE ESPIGAS PARA REDUZIR AS PERDAS NA PLATAFORMA DE MILHO', 'O cenário atual na agricultura indica um aumento da desigualdade em relação à produtividade de milho, apesar das medidas atuais tentarem diminuir as diferenças entre pequenos, médios e, grandes produtores rurais por meio de investimentos em sementes ou maquinários. Esse trabalho tem por finalidade demonstrar um novo produto que pode auxiliar na recolha das espigas de milho que caem durante o processo de colheita. O estudo abrange um raio de 50 km da cidade de Cafeara, região Norte do estado do Paraná e, forte produtora de grãos, mas desprovida de tecnologias para otimização da colheita, pois a região é composta por agricultores familiares. O produto desenvolvido resolve o problema das espigas destacadas pelo rolo, ou das que se desprendem da planta e caem na frente da máquina, recolhendo-as e levando-as para o alimentador. Como resultado, no experimento, verificou-se um aumento de 7,30% na produtividade, por alqueire, alcançada com o uso do produto acoplado à plataforma. A peça desenvolvida adequa-se às colheitadeiras mais antigas, que ainda não contam com auxílios de diminuição de perdas da plataforma, atendendo e beneficiando o agricultor familiar (pequenos e médios produtores), resultando em menos desperdícios, e aumentando o percentual de abastecimento de alimentos. ', 'Empreendedorismo, Inovação e Tecnologia', '2', 'Artigo Completo', '', '', 'Artigo Completo', '114798155056e3148401331', 'bertoncelloag@hotmail.com', 1, 'Fatec ', '71', '84', 1, 1),
(35, '', 'A INFLUÊNCIA DA CULTURA FEMININA NO COMPORTAMENTO ORGANIZACIONAL: UM ESTUDO DE CASO EM UMA ORGANIZAÇÃO DO AGRONÉGOCIO', 'Dentro de uma perspectiva histórica, social, organizacional e científica é que este trabalho foi desenvolvido, com o objetivo de identificar a influência da cultura feminina no comportamento organizacional de uma empresa agrícola do setor de citricultura, localizada no interior do estado de São Paulo. O estudo da cultura e do comportamento organizacional mostra um pouco da influência que a mulher exerce neste contexto ao ser inserida em atividades que anteriormente eram exercidas predominantemente por homens. O estudo de caso único, de abordagem qualitativa, com realização de entrevistas com as colaboradoras, revela os principais indicadores que podem ser observados frente a esta situação, uma vez que a chegada da mulher ao mercado de trabalho foi um marco histórico-social irreversível e que tem ganho expressividade cada vez maior, em função de suas características, apesar das limitações que por vezes não são tão bem vistas pelos gestores, mas que com seu comprometimento e responsabilidade tem conquistado o respeito dos demais funcionários e se estabelecido na função com muita propriedade, segurança e resultados positivos no exercício da profissão.', 'Gestão de Pessoas e Estudos Organizacionais', '4', 'Artigo Completo', '', '', 'Artigo Completo', '147683133456e4410e9d273', 'rosana@cambuhy.com.br', 1, 'UNESP', '71', '128', 1, 1),
(36, '', 'ANÁLISE DA ESTRUTURA DE MERCADO DAS INDÚSTRIAS DE FÉCULA DO ESTADO DO PARANÁ', 'O presente artigo teve como objetivo analisar a estrutura de mercado das indústrias de fécula do Estado do Paraná. Partindo de uma pesquisa de cunho exploratória, servindo de base para a revisão literária do assunto, e também de cunho quantitativo, a partir de um estudo multicaso, a fim de que, de forma sistemática e estruturada, aplicando o método ECD (Estrutura; Conduta; Desempenho), seja alcançado o objetivo esperado. Assim, os resultados obtidos mostram que o setor apresenta uma moderada concentração, o que caracteriza uma estrutura de mercado oligopolista muito próxima a um mercado de concorrência perfeita. Este resultado apresenta informações importantes que podem contribuir para a tomada de decisões dos gestores, que vão poder se valer dessa concorrência para melhores negociações e investimentos.', 'Marketing e Mercados', '3', 'Artigo Completo', '', '', 'Artigo Completo', '71507387156e4771fdef44', 'fabiosfc1@hotmail.com', 1, 'UNOESTE', '71', '127', 1, 1),
(37, '', 'AVALIAÇÃO DOS CUSTOS DE MULTIPLICAÇÃO DE NOVAS VARIEDADES DE CANA-DE-AÇÚCAR EM DIFERENTES SISTEMAS', 'O setor sucroalcooleiro busca a melhoria da eficiência reduzindo custos, tendo em vista a rigidez dos preços dos produtos finais. Os preços do etanol, açúcar e energia elétrica de alguma forma estão ligados a fatores exógenos. Investimentos em novas espécies de cana demandam tempo e grandes volumes de investimento. Esses avanços trouxeram ganhos ao setor, mas o presente trabalho objetivou comprovar a eficiência e os ganhos econômicos na implantação de outra parte do processo produtivo, ou seja, os viveiros. Desenvolvemos um método de plantio gema a gema que, quando comparado ao sistema manual e mecanizado, mostrou-se mais econômico, reduzindo custos e o tempo necessário para a multiplicação da espécie desejada. O experimento foi conduzido em uma fazenda localizada na região de Paraguaçu Paulista/SP, utilizando a variedade CTC 9001 em três sistemas. Os parâmetros avaliados foram os rendimentos de: hectare/mudas e insumos/sistema de plantio. O plantio gema a gema teve maior aproveitamento na relação hectare/muda e, o mecanizado apresentou menor custo, porém, demonstrou-se menos eficiente. ', 'Desenvolvimento e Gestão', '2', 'Artigo Completo', '', '', 'Artigo Completo', '178374043956e49c8603d93', 'bertoncelloag@hotmail.com', 1, 'Fatec ', '71', '84', 1, 1),
(38, '', 'Análise do desempenho das ações do setor do agronegócio na bm&fbovespa', 'O mercado de capitais tem papel chave na economia de um país, através dele é possívelfinanciar investimentos em ativos produtivos e aumentar as oportunidades de alocação de recursos,além de estimular a liquidez, transparência e profissionalização das empresas. Identificar opções deinvestimento no mercado de capitais, assim como, conduzir estratégias empresariais que criam valorperpassam necessariamente pela análise do desempenho de ativos financeiros. No presente trabalho foipossível analisar o retorno e o risco de 23 empresas do principal setor econômico do Brasil(agronegócio) com ações listadas na BM&FBOVESPA entre os anos de 2010 a 2015. Os métodosutilizados foram os Índices de Sharpe e Treynor, a partir dos resultados de retorno, risco e beta. Foipossível identificar que a Excelsior e a Le Lis Blanc foram as que possuíram maiores retornosatrelados aos maiores riscos. Por outro lado, notou-se que as empresas com menores riscossistemáticos apresentaram os maiores retornos e, com efeito, os melhores desempenhos.', 'Economia e Finanças', '1', 'Artigo Completo', '', '', 'Artigo Completo', '84125195956e4bf5993eda', 'arthurgsilveira1@gmail.com', 1, 'Unesp', '71', '125', 1, 1),
(41, '', 'Destino das carcaças de aves mortas: COMPOSTAGEM', 'A produção animal brasileira tem alto potencial produtivo, é atividade geradora de empregos, eleva o país, juntamente com a produção agrícola, como produtor mundial de alimentos. Mas também tem grande potencial poluente, incrementando a existência de resíduos impactantes que trazem problemas para o ambiente e saúde humana. Um aspecto importante para essa produção animal é produzir sem agredir ambiente com destino adequado dos resíduos produzidos que devem evitar a poluição ambiental e o aproveitamento no próprio setor, para produzir energia e fertilizantes. O setor da avicultura produz como resíduo as carcaças de animais mortos durante o processo de criação que podem ser aproveitadas dentro da propriedade. Esse aproveitamento é com o uso da técnica da compostagem que permite a conversão do resíduo em algo útil e o que se busca é colocá-lo em condições de disposição no ambiente, com o menor impacto possível. Além disso, a compostagem exige menor mão de obra para o produtor rural, é viável e bem conduzida não polui o ar, a água e nem causa odores no ambiente. O trabalho teve o objetivo de mostrar que a compostagem de animais mortos é o destino adequado e correto para os avicultores atuarem de forma sustentável.', 'Sustentabilidade e Responsabilidade Sócio Ambiental', '2', 'Pôster', '', '', 'Resumo Expandido', '44036584656e5f00f37034', 'ronaldopazini@hotmail.com', 1, 'FATEC/Taquaritinga', '71', '129', 1, 1),
(43, '', 'ESTRUTURA DE MERCADO DA INDÚSTRIA DE FRIGORÍFICOS DE SÃO PAULO: UMA APLICAÇÃO DO MODELO E-C-D', 'O trabalho teve como objetivo responder em que estrutura de mercado estão inseridos os frigoríficos do estado de São Paulo e identificar o grau de concentração. Para isso, utilizou-se métodos exploratórios com base na literatura referente a estrutura de mercado e o modelo Estrutura-Conduta-Desempenho. O índice IHH (Índice de Herfindahl-Hirschan) foi usado para mensurar a concentração de mercado decorrente das quantidades de abates por frigorifico localizados no estado de São Paulo e o índice CR(4) utilizado para determinar os quatro frigoríficos com maior participação de mercado. De maneira geral, o estudo mostra que o mercado da indústria de frigoríficos é de alta concorrência, devido à baixa concentração, portanto, considerado como concorrência perfeita, ou seja, as empresas ofertam produtos ou serviços praticamente idênticos e não há barreiras à entrada ou saída nesse mercado. No entanto, o investimento neste setor é consideravelmente alto, dificultando a possibilidade de novos concorrentes. Acredita-se que este resultado possa representar uma falácia, uma vez que uma única organização possa ser proprietária de mais de uma unidade, modificando os resultados mensurados em concorrência perfeita, para um oligopólio ou monopólio.', 'Logísticas e Operações', '3', 'Artigo Completo', '', '', 'Artigo Completo', '89843998456e609f2b9101', 'caio_inde@terra.com.br', 1, 'Unoeste', '71', '84', 1, 1),
(45, '', 'CONTRIBUIÇÕES DA ADMINISTRAÇÃO POR OBJETIVOS NO PROCESSO DE ALINHAMENTO ESTRATÉGICO: UM ESTUDO MULTICASOS EM ORGANIZAÇÕES AGROINDUSTRIAIS', 'O objetivo geral deste trabalho foi identificar as contribuições da administração por objetivos no processo de alinhamento estratégico de empresas de engenharia agroindustrial localizadas no interior do estado de São Paulo – SP. A pesquisa se desenvolveu através de um estudo multicascos em empresas localizadas na região de Ribeirão Preto. A escolha dessa região se deve à sua relevância frente ao cenário agroindustrial nacional. Pode-se concluir que a administração por objetivos contribuiu com alinhamento estratégico das empresas estudadas. Apesar de não terem sido atendidas todas as características, observou-se que a administração por objetivos contribuiu para uma melhor eficácia do alinhamento estratégico das empresas.', 'Desenvolvimento e Gestão', '3', 'Artigo Completo', '', '', 'Artigo Completo', '86243870056e71b4f8326e', 'andre.gustavo21@terra.com.br', 1, 'FCAV UNESP Faculdade de Ciências Agrárias e Veterinárias', '71', '131', 1, 1),
(47, '', 'COMPETITIVIDADE INTERNACIONAL DAS EXPORTAÇÕES DE AÇÚCAR NO PERÍODO DE 1991-2014', 'O Brasil detém um grande destaque na produção canavieira mundial, sendo o maior produtor e exportador de açúcar. Mas, com as profundas transformações que vem ocorrendo no comércio internacional de açúcar as situações de mercado tem oscilado bastante. Na literatura não foram encontrados trabalhos de avaliação do desempenho brasileiro frente aos demais principais exportadores mundiais de açúcar. Por isso, objetivou-se avaliar o desempenho das exportações e a competitividade dos principais países exportadores de açúcar, no período de 1991 e 2014 utilizando da metodologia Constant-Market-Share. Foram utilizadas séries históricas de dados de exportação mundial de açúcar. Foram utilizados os principais países que trabalham no processo de exportação do açúcar, sendo eles: a Austrália, o Brasil, a Guatemala e a Tailândia. Para avaliar o desempenho e a competitividade dos países empregou-se da análise de correlação de Pearson e o modelo de Constant-Market-Share. Os países que demonstraram maior correlação com a exportação mundial foram em ordem crescente a Tailândia, a Guatemala e o Brasil. O Brasil deteve o maior desempenho de exportação de açúcar, enquanto que a Austrália evidenciou o menor desempenho de exportação do período de 1991 a 2014. O Brasil demonstrou também a maior competitividade internacional.', 'Economia e Finanças', '4', 'Artigo Completo', '', '', 'Artigo Completo', '112373868856e61b4bf39dd', 'adriana_fmoraes@hotmail.com', 1, 'UNESP JABOTICABAL', '71', '124', 1, 1),
(48, '', 'Diferença entre as tabelas de recomendações de adubação e a produtividade máxima econômica', 'Este artigo procurou identificar o impacto no lucro do produtor rural caso as recomendações de adubação considerem os preços do produto e do insumo e indiquem as quantidades de nutriente para atingir o ponto de máximo econômico e não as tabelas atualmente utilizadas neste processo. Foram analisados os produtos agrícolas milho e soja e os nutrientes: nitrogênio, fósforo e potássio. Foram utilizados: valores indicados nas tabelas de recomendação de adubação utilizadas no país; funções de produtividade para os produtos e insumos analisados, obtidas em revisões bibliográficas; cenários de preços utilizando os preços observados nos últimos quinze anos e; três condições de solo que diferem em relação ao seu nível inicial de fertilidade e, portanto, na necessidade de adubação complementar. Verificou-se que o produtor rural poderia aumentar seu lucro alterando o método de estimar a necessidade de adubação da sua lavoura, na média dos cenários analisados e considerando o impacto individual de cada nutriente, em mais de 10% do valor de sua receita com o produto. Portanto, um instrumento para o produtor definir a quantidade de insumos a ser aplicada na sua lavoura com base no nível de produtividade máxima econômica é um importante meio de gerar renda no campo.', 'Economia e Finanças', '0', 'Artigo Completo', '', '', 'Artigo Completo', '88450130656e6cf5514350', 'cinthia.costa@embrapa.br', 1, 'Embrapa', '71', '125', 1, 1),
(49, '', 'Impactos ao migrar da aplicação uniforme para a aplicação variada de fertilizantes', 'Ao migrar da aplicação uniforme para a aplicação variada de insumos, também chamada de agricultura de precisão, espera-se que o produtor obtenha aumento de produtividade, redução na quantidade do insumo utilizado ou ambos. Este estudo identificou e analisou os principais fatores responsáveis para uma lavoura ter, ou não, ganho de produtividade, redução no uso de fertilizante e lucro ao migrar da aplicação uniforme para a agricultura de precisão, ou seja, ao mudar a tecnologia de aplicação de fertilizantes. Foi analisada a produção de milho e a aplicação dos macronutrientes: fósforo e potássio. Verificou-se que: (a) podem ocorrer reduções de produtividade; (b) pode ocorrer aumento no uso de insumo; (c) quanto maior a variação na necessidade de nutrientes no solo maior os impactos sobre aumento de produtividade ou redução de insumo e, consequentemente, lucro para o produtor; (d) mudanças nas condições de amostragem de solo da aplicação uniforme podem originar impactos maiores do que a mudança tecnológica considerada e; (e) estimativas de custo/benefício da mudança no sistema de aplicação dependem do tamanho da área a ser trabalhada. Conclui-se que os impactos sobre produtividade e quantidade do insumo originados desta mudança tecnológica dependem de cada situação e, portanto, não podem ser generalizados.', 'Economia e Finanças', '1', 'Artigo Completo', '', '', 'Artigo Completo', '192683316456e6d02f7421a', 'cinthia.costa@embrapa.br', 1, 'Embrapa', '71', '132', 1, 1),
(51, '', 'A GOVERNANÇA CORPORATIVA COMO INSTRUMENTO DE APOIO À GESTÃO DA INOVAÇÃO NA AGROINDÚSTRIA', 'Este estudo propõe um modelo de gestão da inovação a partir da Governança Corporativa comobalizador do processo de inovação na Agroindústria. A complexidade das relaçõesinstitucionais entre os agentes inseridos em um sistema de inovação requer mecanismos quesalvaguardem os múltiplos interesses sem prejuízo à transparência e competitividade dasorganizações. Em função do estágio exploratório do tema, este estudo se caracteriza como umensaio teórico, a partir da revisão da literatura sobre modelos de inovação e governançacorporativa junto as principais bases de dados. Os resultados deste ensaio permitiram aproposição de um modelo de gestão da inovação que tenha ligação com a estratégia da empresae possa ter em sua base os pilares da governança corporativa, bem como, indicadores quemensurem o processo de inovação em cada uma das suas etapas, como mecanismos paraacompanhamento do processo de gestão deste recurso organizacional, incluindo feedbacks comvistas a melhoria contínua. Entende-se que este modelo possa contribuir na implementação deum sistema de gestão da inovação em empresas, em especial, na agroindustria, além de poderser avaliado empiricamente por acadêmicos. ', 'Empreendedorismo, Inovação e Tecnologia', '1', 'Artigo Completo', '', '', 'Artigo Completo', '91344267056e70098edb23', 'alvesjosivan2@gmail.com', 1, 'UNESP', '71', '131', 1, 1),
(52, '', 'DESENVOLVIMENTO DE UM SISTEMA DE GEOLOCALIZAÇÃO PARA MAPEAMENTO E IDENTIFICAÇÃO DE RESÍDUOS DE MADEIRA', 'Com o advento da tecnologia, o uso de software se tornou comum na vida das pessoas. Esta ferramenta pode ser usada em diversas aplicações, inclusive na geolocalização utilizando GPS. O sistema GPS pode auxiliar tanto pessoas como empresas em diversos ramos de atuação. Partindo deste principio, foi desenvolvido um sistema de geolocalização utilizando a localização e caracterização de resíduos de madeira como exemplo de aplicação. As linguagens de programação utilizadas foram o HTML, PHP e Javascript, e para o banco de dados foi utilizado o PostgreSQL. A metodologia utilizada foi do tipo estudo de caso exploratório, pois assume que as características estudadas podem sofrer interferência do pesquisador. Os testes realizados mostraram precisão na localização de fornecedores de resíduos madeireiros com potenciais consumidores deste segmento. ', 'Logísticas e Operações', '2', 'Artigo Completo', '', '', 'Artigo Completo', '42215449356e70c04b6875', 'glaucia@itapeva.unesp.br', 1, 'UNESP', '71', '130', 1, 1),
(53, '', 'GESTÃO AMBIENTAL EMPRESARIAL: UM ESTUDO DO GERENCIAMENTO DE RESÍDUOS EM UMA EMPRESA DE FRANCA/SP', 'Com a crescente preocupação com o meio ambiente, assim como o manejo e reciclagem de resíduos sólidos provenientes principalmente dos processos industriais, criam-se mecanismos de controle degradação ambiental, por meio de legislações ambientais e regulamentações. A cadeia produtiva calçadista é responsável por alto impacto ambiental, por dispor de processos produtivos que geram grande quantidade de resíduos, apresentando dificuldades na gestão e disposição final, especialmente do elemento químico cromo, constante no couro bovino curtido. O objetivo do estudo é identificar os principais resíduos sólidos gerados ao longo da fabricação de calçados e seus impactos ambientais com a aplicação da análise do ciclo de vida como ferramenta para a gestão de resíduos do setor. O método de pesquisa é estudo de caso único, qualitativo e de natureza exploratória. É evidente que as empresas calçadistas devem buscar aperfeiçoar manipulação dos resíduos e rejeitos sólidos, com a busca de alternativas viáveis para minimizar e/ou eliminar os impactos ambientais, aumentando a competitividade e o ganho ambiental do setor e da sociedade como um todo.', 'Sustentabilidade e Responsabilidade Sócio Ambiental', '3', 'Artigo Completo', '', '', 'Artigo Completo', '180759442856e719d61eda2', 'bruna.sousaferreira@gmail.com', 1, 'Universidade Estadual Paulista "Júlio de Mesquita Filho"', '71', '130', 1, 1),
(54, '', 'GERENCIAMENTO DE PROJETOS: ESTUDO DE CASO EM UMA EMPRESA DO SETOR SUCROENERGÉTICO', 'O objetivo do presente trabalho é apresentar um estudo de caso sobre a aplicação do Gerenciamento de Projetos em uma empresa do setor Sucroenergético no interior de São Paulo, e que teve como objeto de estudo a elaboração de um projeto construtivo e detalhado de um equipamento para ser instalado em uma Usina de Açúcar e Álcool. Para o desenvolvimento do trabalho foi utilizada principalmente uma abordagem qualitativa, e entre os diversos tipos de pesquisa qualitativa, o método de estudo de caso foi considerado o mais adequado para este estudo, por envolver um estudo em profundidade da empresa. Os dados para elaboração do estudo de caso foram fornecidos através de pesquisa documental. O aumento da competitividade entre as empresas a nível mundial deixa evidente a importância de se utilizar uma ferramenta que traga uma vantagem competitiva para as empresas, sendo ela o Gerenciamento de Projetos.', 'Desenvolvimento e Gestão', '2', 'Artigo Completo', '', '', 'Artigo Completo', '173883634556e7269200bd8', 'andre.gustavo21@terra.com.br', 1, 'FCAV UNESP Faculdade de Ciências Agrárias e Veterinárias', '71', '131', 1, 1),
(55, '', 'FORMAS HÍBRIDAS: UMA ANÁLISE DAS RELAÇÕES ENTRE PRODUTORES E PROCESSADORES NO SAG DO LEITE', 'A partir da reestruturação dos anos 90 o sistema agroindustrial do leite passou a apresentar diferentes arranjos econômicos para transacionar, predominando as formas híbridas na transação do leite in natura. Nessa consideração, objetivou-se neste artigo compreender como essa governança se apresenta na relação produtor/processador. Para tratar dessa problemática utilizou-se o aporte teórico da Nova Economia Institucional, da Economia dos Custos de Transação e da Economia dos Custos de Mensuração. Empiricamente, o estudo foi de natureza qualitativa, descritivo, indutivo e transversal, com pesquisa de campo realizada no Paraná, por meio de entrevistas semiestruturadas. Para análise das informações obtidas utilizou-se o Método de Análise de Conteúdo. O resultado possibilitou compreender o ambiente institucional, distinguir as categorias de tecnificação dos produtores e analisar a eficiência da governança híbrida. Nessa discussão, pode-se identificar eficiência nos contratos formais, com indicação de proteção dos direitos legais, minimização dos custos de transação e maximização do valor dos ativos. Porém, identificou-se que o acordo informal, predomina nas relações híbridas. Esses acordos apresentam lacunas de eficiência, que geram incertezas, elevam custos transacionais e limitam investimentos. Entretanto, essas formas de acordo persistem devido à influência do regramento do ambiente institucional e de fatores como confiança e reputação entre as partes.', 'Estratégia, Planejamento e Governança', '1', 'Artigo Completo', '', '', 'Artigo Completo', '195098225756e73189b7698', 'acostadani@hotmail.com', 1, 'UEM- UNIVERSIDADE ESTADUAL DE MARINGÁ', '71', '84', 1, 1),
(56, '', 'PRODUTIVIDADE AGRÍCOLA E INDUSTRIAL DO SETOR SUCROENERGÉTICO BRASILEIRO NOS ÚLTIMOS 10 ANOS ', 'Esta pesquisa envolve a análise de usinas sucroalcooleiras em todas as regiões brasileiras nos períodos entre as safras de 2005/2006 e 2014/2015, com o objetivo de identificar os fatores que podem explicar a variação relativa da eficiência operacional. Os dados utilizados foram obtidos à partir dos boletins de levantamento de safras de cana-de-açúcar da Companhia Nacional de Abastecimento em um período de 10 anos, sendo analisados pela análise envoltória de dados (DEA). A safra de 2012/2013 foi a mais eficiente dentre o período analisado. A produtividade no campo e a eficiência média na indústria apresentaram uma potencial divergência, aparentemente em função das tecnologias utilizadas nas indústrias sucroalcooleiras para alavancar a eficiência operacional das mesmas.', 'Economia e Finanças', '3', 'Pôster', '', '', 'Resumo Expandido', '108857747056e7312084b7f', 'svlemos@yahoo.com.br', 1, 'FEA-RP', '71', '117', 1, 1),
(57, '', 'GESTÃO DAS  AGROINDÚSTRIAS FAMILIARES: UM ESTUDO EXPLORATÓRIO ', 'RESUMO O presente artigo versa sobre a gestão de agroindústrias familiares, frente aos desafios da produção e comercialização de alimentos, a produção, a produtividade, a Inovação e competitividade  no mercado. O objetivos consistem em estudar, a partir do mapeamento e diagnóstico junto às agroindústrias atendidas pelo NEPI (Núcleos de Extensão Produtiva e Inovação, constituídos em parceria entre a Agência Gaúcha de Desenvolvimento e Promoção do Investimento (AGDI) e instituições universitárias e tecnológicas), as suas qualidades e fragilidades e os respectivos desafios frente à competitividade no mercado. Com base em estudo exploratório, de abordagem quali-quantitativo e quanto aos meios de investigação, a mesma se apresenta como bibliográfica, documental, de estudo multicaso e de campo. Como resultados apresenta oportunidades, qualidades, limitações e desafios para as agroindústrias estudadas. Agregam-se propostas para a qualificação da gestão das agroindústrias, ampliando  seus resultados, geração de oportunidades de trabalho e renda e de agregação de valor. Muitas destas contribuições extensivas as demais agroindústrias de base familiar.Palavras-chaves: Desenvolvimento; competitividade; propostas.', 'Gestão de Pessoas e Estudos Organizacionais', '2', 'Pôster', '', '', 'Resumo Expandido', '108193692956e73269699f8', 'brunonbuttenbender@gmail.com', 1, 'UNIVATES', '71', '128', 1, 1),
(58, '', 'O EMPOWERMENT APLICADO ÀS EQUIPES DE DESENVOLVIMENTO DE PRODUTOS', 'A participação dos colaboradores por meio do empowerment nas mais variadas áreas reflete o sucesso das organizações industriais, isso é bem conhecido e trabalhado pelas organizações que constantemente estão se reinventando através do desenvolvimento de novos produtos para se readequarem as mudanças do mercado. O problema é que a equipe montada para desenvolver o novo produto ou mais especificamente trabalhar o projeto do produto é temporária, prende-se ao seu trabalho especifico e fica a forma de comunicação da mesma atrelada às características culturais da organização. O desenvolvimento de um novo produto é um processo que depende da participação de muitos e quão mais ria for a participação dos colaboradores envolvidos melhor tende a ser o resultado. Este trabalho faz uma explanação sobre as características das organizações atualmente e uma relação com seu desenvolvimento, faz um levantamento sobre o empowerment, processo de desenvolvimento de produto e a relação do empowermente com as equipes de desenvolvimento de produto, através de revisão bibliográfica explanatória. Por fim a trabalho traz argumentação empírica sobre o assunto visando alavancar novas pesquisas e possíveis estudos de casos.', 'Gestão de Pessoas e Estudos Organizacionais', '1', 'Artigo Completo', '', '', 'Artigo Completo', '22178336356e735bc8e122', 'crvolante@hotmail.com', 1, 'UNESP', '71', '128', 1, 1),
(59, '', 'INFLUÊNCIA DAS VARIÁVEIS ECONÔMICAS NA EVOLUÇÃO DA OFERTA CAFEEIRA DO NORDESTE DO ESTADO DE SÃO PAULO', 'O café é uma das commodities agrícolas fundamental para a economia brasileira e poucosestudos vêm avaliando a influência das variáveis econômicas na oferta cafeeira. Assim,objetivou-se avaliar a influência que as variáveis econômicas promovem a variação da ofertado Coffea arábica L. na região Nordeste do Estado de São Paulo. Foram utilizados dados deoferta cafeeira e variáveis econométricas do período de 2000-2015. Foram usadas asvariáveis, crédito rural total, o crédito rural da agricultura, a área colhida de café, o valoradicionado na agropecuária, à participação da agropecuária no valor adicionado total, valor daprodução do cafeeiro e valor adicionado fiscal. Na modelagem a oferta cafeeira foi a variáveldependente e as variáveis econômicas as variáveis independentes, usando modelo deregressão linear múltipla (RLM). A oferta cafeeira demonstrou uma grande dispersão nosdados no período de 2000 a 2015, chegando a evidenciar um coeficiente de variação de20,1%. Com base nos resultados apresentados conclui-se que a oferta cafeeira do Nordeste doEstado de São Paulo é significativamente sensível às variações do valor de produção, sendo avariável com maior influência.', 'Economia e Finanças', '3', 'Artigo Completo', '', '', 'Artigo Completo', '55409619956e7551799396', 'adriano_afmoraes@hotmail.com', 1, 'UNESP JABOTICABAL', '71', '132', 1, 1),
(60, '', 'DIFICULDADES E VANTAGENS ENCONTRADAS NA IMPLEMENTAÇÃO DO SISTEMA ERP (Enterprise Resource Planning) EM UMA EMPRESA AGROINDÚSTRIAL', 'A utilização de sistemas integrados de informação têm se destacado nos últimos anos, porapresentarem recursos que ajudam no gerenciamento integrado das diversas operações dasempresas. Uma das dificuldades do sistema ERP, consiste no processo de implementação dosoftware. Como não foi encontrados trabalhos sobre a implementação do software ERP emempresas agroindustriais, objetivou-se avaliar as necessidades e as dificuldades que osprofissionais de uma empresa Agroindustriais encontraram na implementação do sistemaERP. Para alcançar o objetivo foi aplicado um questionário em uma empresa Agroindustriallocalizada no Sul de Minas, que ultimamente acabou de passar pela implementação de umsistema ERP. Foram selecionados 33 funcionários, abrangendo todos os setores daAgroindústria. Após a coleta dos dados, os mesmos foram submetidos a análises de posição edispersão. O principal motivo para a implementação foi à melhoria da informação, sendo queas maiores expectativas esperadas com a implementação do sistema foi à obtenção deinformações mais precisas. A entrevista demonstra que a maior dificuldade encontrada naimplementação do sistema ERP foi à resistência dos funcionários as mudanças exigidas,sendo que o maior ponto positivo encontrado na implementação do ERP foi à eficiência dosprocessos dentro do empreendimento.', 'Gestão de Pessoas e Estudos Organizacionais', '1', 'Artigo Completo', '', '', 'Artigo Completo', '82057488356e75843e136d', 'adriano_afmoraes@hotmail.com', 1, 'UNESP JABOTICABAL', '71', '128', 1, 1),
(61, '', 'FATORES INFLUENCIADORES DA DISPOSIÇÃO À PAGAR (DAP) E DO CONSUMO DO AÇÚCAR ORGÂNICO', 'Observa-se recentemente novas estratégias empresariais no setor produtivo de açúcar, tais como diferenciação dos produtos, diversificação e/ou especialização na produção. Uma destas estratégias foi a adoção dos produtos orgânicos, na intenção de atender um mercado consumidor com tendência crescente. Desta forma a produção destes produtos passou a ser uma forma de alcançar novos nichos de mercado. Dentro desse contexto, este trabalho tem como propósito avaliar como as características sócio demográficas dos consumidores de uma cidade do interior paulista fortemente ligada a produção de cana de açúcar podem afetar as suas probabilidades de disposição a pagar e de consumo deste referido produto. Os dados foram coletados através de questionários aplicados via e-mail e via redes sociais para diferentes segmentos de consumidores. As informações foram analisadas com o uso de um modelo probit bivariado, devido a correlação entre as estimativas de seus modelos individuais. Ao final observa-se que existem diferentes influências constatadas tanto na probabilidade de disposição a pagar do açúcar orgânico, na probabilidade do consumo deste produto e que algumas afetam ambas expectativas, como a importância do atributo saúde, que deve direcionar novas ações de Marketing para atender melhor estes clientes e aumentar a lucratividade deste produto.', 'Marketing e Mercados', '0', 'Artigo Completo', '', '', 'Artigo Completo', '111325589856e7638f650e1', 'chfcunha@gmail.com', 1, 'Faculdade de Ciências Aplicadas (FCA) da Universidade Estadual de Campinas (UNICAMP)', '71', '127', 1, 1),
(62, '', 'ESTRATÉGIAS DE MARKETING DOS FRIGORÍFICOS BRASILEIROS: ESTUDO MULTICASOS', 'O mercado da carne bovina brasileira vem ganhado destaque nos últimos anos, pois o país possui o maior rebanho do mundo e apresenta liderança em alguns aspectos mercadológicos como a exportação, os abates e o consumo deste produto. Com este crescimento de mercado os frigoríficos também cresceram, intensificando a concorrência. Para essas empresas se destacarem passaram a investir no Marketing. Assim este artigo buscou conhecer mais detalhes sobre esta mudança por meio da análise de dois frigoríficos com diferentes tipos de atuações e ações de Marketing: o Frigorífico 1 e o Frigorífico 2. A pesquisa utilizada foi a de estudos de múltiplos casos, com uso de um questionário respondidos pelos seus gerentes, com o objetivo de avaliar como essas corporações se comportam no mercado, quais são as suas estratégias e quais as principais ferramentas de Marketing usadas. Pode-se observar que os dois frigoríficos possuem e utilizam estratégias de Marketing similares, porém em intensidades diferentes, pois cada um as utilizam conforme suas necessidades, objetivos e metas. Observou-se que ambas empresas buscam investir tanto no marketing institucional e como na administração mercadológica de produtos, mas de forma distinta, considerando a sua linha de produtos e seu posicionamento de mercado. ', 'Marketing e Mercados', '1', 'Artigo Completo', '', '', 'Artigo Completo', '31345449756e76722b9ff7', 'chfcunha@gmail.com', 1, 'Faculdade de Ciências Aplicadas (FCA) da Universidade Estadual de Campinas (UNICAMP)', '71', '127', 1, 1),
(63, '', 'A EXPANSÃO DA CANA-DE-AÇÚCAR E OS EFEITOS NO SISTEMA PRODUTIVO DE OVOS NO MUNICÍPIO DE BASTOS/SP', 'A produção brasileira de cana-de-açúcar teve seus momentos históricos, a fase de 2000 a 2011, responsável pela rápida expansão do setor sucroenergético, ocorreu em virtude do Plano Nacional de Energia (PNE). A região oeste do estado de São Paulo, onde está localizado o município de Bastos, apresentou mudanças significativas na sua composição agrícola em função da recente expansão da cana-de-açúcar. De acordo com o IBGE, em 2014, a produção nacional de ovos de galinha foi de 2,8 bilhões de dúzias. Somente o município de Bastos foi responsável por 20% dessa produção sendo o maior produtor nacional. Nesse contexto o objetivo geral dessa pesquisa é analisar os efeitos da expansão da cana-de-açúcar na atividade produtiva de ovos de galinha na região de Bastos-SP. Quanto ao objetivo exploratório-descritivo, foi utilizada a abordagem qualitativa para a realização da pesquisa de campo e os dados foram obtidos por meio de pesquisas bibliográficas e entrevistas com os produtores de ovos. Dessas acepções, observa-se que os principais impactos gerados pela expansão da monocultura da cana-de-açúcar foram primeiramente a falta de mão de obra para o setor de produção de ovos e posteriormente o impacto da substituição do plantio de milho na região oeste paulista.  ', 'Desenvolvimento e Gestão', '3', 'Artigo Completo', '', '', 'Artigo Completo', '177294609956e76966161a7', 'fer.yamauchi@gmail.com', 1, 'UNESP', '71', '132', 1, 1),
(64, '', 'CULTURA ORGANIZACIONAL DE SEGURANÇA COMO FATOR PROPULSOR AO AUMENTO DA PRODUTIVIDADE', 'O presente trabalho teve como objetivo, analisar a produtividade e verificar o clima organizacional de cinco ambientes de trabalho do setor madeireiro na região da cidade de Itapeva. As organizações que apresentaram baixa produtividade foram as que o clima organizacional era considerado como fator não importante dentro da organização, conclui-se que existe melhor produtividade quando os colaboradores estão mais satisfeitos com o ambiente de acordo com o clima organizacional estudado. ', 'Gestão de Pessoas e Estudos Organizacionais', '1', 'Artigo Completo', '', '', 'Artigo Completo', '155826152956e76d88a9fe6', 'jheny_crys@hotmail.com', 1, 'FATEC Capão Bonito ', '71', '128', 1, 1),
(65, '', 'FATORES INFLUENCIADORES DA DISPOSIÇÃO À PAGAR (DAP) E DO CONSUMO DO AÇÚCAR ORGÂNICO', 'Observa-se recentemente novas estratégias empresariais no setor produtivo de açúcar, tais como diferenciação dos produtos, diversificação e/ou especialização na produção. Uma destas estratégias foi a adoção dos produtos orgânicos, na intenção de atender um mercado consumidor com tendência crescente. Desta forma a produção destes produtos passou a ser uma forma de alcançar novos nichos de mercado. Dentro desse contexto, este trabalho tem como propósito avaliar como as características sócio demográficas dos consumidores de uma cidade do interior paulista fortemente ligada a produção de cana de açúcar podem afetar as suas probabilidades de disposição a pagar e de consumo deste referido produto. Os dados foram coletados através de questionários aplicados via e-mail e via redes sociais para diferentes segmentos de consumidores. As informações foram analisadas com o uso de um modelo probit bivariado, devido a correlação entre as estimativas de seus modelos individuais. Ao final observa-se que existem diferentes influências constatadas tanto na probabilidade de disposição a pagar do açúcar orgânico, na probabilidade do consumo deste produto e que algumas afetam ambas expectativas, como a importância do atributo saúde, que deve direcionar novas ações de Marketing para atender melhor estes clientes e aumentar a lucratividade deste produto.', 'Marketing e Mercados', '2', 'Artigo Completo', '', '', 'Artigo Completo', '', 'chfcunha@gmail.com', 0, 'Faculdade de Ciências Aplicadas (FCA) da Universidade Estadual de Campinas (UNICAMP)', '', '', 0, 0);
INSERT INTO `sl_artigo` (`id_artigo`, `criado`, `titulo`, `resumo`, `area`, `coautor`, `apresentacao`, `orientador`, `descricao`, `categoria`, `idartigo`, `email`, `status`, `instituicao`, `id_avaliador1`, `id_avaliador2`, `avaliacao_concluida1`, `avaliacao_concluida2`) VALUES
(66, '', 'INOVAÇAO EM PROCESSO NA CADEIA PRODUTIVA DE OVOS: MUDANÇAS NOS EQUIPAMENTOS DE ACOMODAÇÃO DE AVES POEDEIRAS ', 'O presente artigo analisou quais foram os benefícios que a inovação proporcionou aos elos da cadeia produtiva da avicultura, que é objeto deste artigo, mais especificamente, no elo de maquinários e equipamentos das aves poedeiras. A pesquisa foi realizada por meio de levantamento bibliográfico e pesquisa exploratória dos principais assuntos abordados, sendo: equipamentos para avicultura, inovação e inovação em processo. Foi possível perceber que as inovações em processo trouxeram um grande avanço para a avicultura, principalmente no que tange ao aumento da produtividade.', 'Empreendedorismo, Inovação e Tecnologia', '2', 'Artigo Completo', '', '', 'Artigo Completo', '91435656156e7ef2a09354', 'danielerpimentel@gmail.com', 1, 'Unesp Tupã', '71', '117', 1, 1),
(67, '', 'ARRANJO LOGÍSTICO DE COLETA E TRIAGEM DE RESÍDUOS SÓLIDOS COM INCLUSÃO SOCIAL DE CATADORES COLLECTION AND SORTING  LOGISTICS ARRANGEMENT OF SOLID WASTE WITH SOCIAL INCLUSION OF COLLECTORS', 'O início das preocupações com consequências da degradação ambiental remonta, especialmente, ao início da década de 1970. O desenvolvimento do próprio termo “sustentabilidade” acompanha o aumento da complexidade das questões envolvendo o desenvolvimento sustentável. A geração “per capita” de resíduos sólidos urbanos (RSU), possui relação direta com o aumento da urbanização e renda de parte da população mundial, contudo apresenta crescimento muito superior ao crescimento populacional, em um mesmo período. O modelo de gestão dos RSU no Brasil pouco contribui para a diminuição ou mitigação de impactos ambientais. A Política Nacional de Resíduos Sólidos (PNRS), busca apontar soluções integradas para a gestão adequadas do RSU, como a logística reversa e a inserção preferencial de catadores de materiais recicláveis na cadeia. Esse trabalho procura discutir conceitos chaves para o estabelecimento de um sistema de gestão de RSU, que permitam a inclusão de mão de obra social e o oferecimento ao poder público de alternativa viável para a limpeza urbana e adequada destinação de RSU, considerando o diagnóstico da área de atuação, composição dos RSU existentes, participação de atores e instituições da sociedade civil, de pesquisa, com objetivo de estabelecer um projeto sustentável e amplo na gestão dos RSU.', 'Desenvolvimento e Gestão', '2', 'Relato Técnico', '', '', 'Relato Técnico', '199598223556e8251492e50', 'espinoza.freitas@gmail.com', 1, 'FEA/RP USP', '71', '129', 1, 1),
(68, '', 'Inovação reversa: um estudo de caso no setor de maquinários agrícolas', 'O presente trabalho aborda a temática da inovação reversa, que é a inovação criada em um país em desenvolvimento e introduzida, eventualmente, em um país desenvolvido. Para isso, foi realizado um estudo de caso em uma fabricante global de maquinários agrícolas, com subsidiárias em diversos países/continentes. A análise dos resultados demonstra que a empresa estudada optou por desenvolver uma rede global de inovação com suas subsidiárias para superar as dificuldades de elaborar diferentes soluções para clientes de múltiplos países, devido às peculiaridades de cada local. Os centros de inovação são especializados e interdependentes, de forma a alavancar as singularidades de recursos de cada unidade e gerar inovações que podem ser exploradas a nível mundial. ', 'Empreendedorismo, Inovação e Tecnologia', '1', 'Resumo Expandido', '', '', 'Resumo Expandido', '104652545756eb2b33a1564', 'guilherme.f.arruda@gmail.com', 1, 'Universidade de São Paulo', '71', '129', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_avaliador`
--

CREATE TABLE IF NOT EXISTS `sl_avaliador` (
  `id_avaliador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `contato` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_avaliador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `sl_avaliador`
--

INSERT INTO `sl_avaliador` (`id_avaliador`, `nome`, `cidade`, `endereco`, `cargo`, `instituicao`, `telefone`, `contato`, `email`, `status`) VALUES
(5, 'Fernando', 'Pirassununga', 'Avenida Duque de Caxias Norte', 'Professor Doutor', 'USP / FZEA', '(19) 99607 - 4476', '(19) 3565 - 6714', 'caneppele@usp.br', '1'),
(6, 'João Pedro', 'Palmeira das Missões', 'Rua General Firmino', 'Professor Adjunto IV', 'Universidade Federal de Santa Maria', '(55) 81383 - 990', '(55) 3742 - 8894', 'velhojp@ufsm.br', '0'),
(13, 'Eduardo Guilherme', 'Tupã', 'AV Domingos da Costa Lopes', '', 'UNESP/Tupã', '(19) 99160 - 9659', '(14) 3404 - 4200', 'eduardo@tupa.unesp.br', '0'),
(14, 'cinthia', 'são carlos', 'av. miguel damha', 'Pesquisadora', 'Embrapa', '(16) 98177 - 7000', '(16) 2106 - 2839', 'cinthia.costa@embrapa.br', '0'),
(15, 'Alexandre ', 'Presidente Prudente', 'Rua Pedro Rena', 'Professor ', 'Fatec ', '(18) 991683773', '', 'bertoncelloag@hotmail.com', '0'),
(16, 'GLAUCIA APARECIDA ', 'ITAPEVA', 'R. gERALDO ALCKMIN', 'PROF. ASSISTENTE DOUTOR', 'UNESP', '(16) 99617 - 6212', '(15) 3524 - 9100', 'glaucia@itapeva.unesp.br', '0'),
(17, 'Christiano ', 'Piracicaba', 'Rua XV de Novembro', ' Professor Doutor I', 'Faculdade de Ciências Aplicadas (FCA) da Universid', '(19) 98219 - 1204', '(19) 3434 - 6955', 'chfcunha@gmail.com', '0'),
(18, 'Lesley Carina ', 'RIBEIRÃO PRETO', 'RUA Doutor Benjamim Anderson Stauffer', 'Professor ', 'UNESP ', '(16) 99975 - 0502', '(16) 3209 - 7259', 'lesleyattadia@uol.com.br', '0'),
(19, 'PEDRO LUIS', 'SANTA ROSA', 'RUA 24 DE OUTUBRO', 'PROFESSOR', 'UNIJUI', '(55) 99621 - 318', '(55) 3512 - 5377', 'plbutten@gmail.com', '0'),
(21, 'Adriano dos Reis', 'Ribeirão Preto', 'Rua Pernambuco ', 'Docente', 'Universidade Estadual Paulista', '(16) 99245 - 6831', '(16) 3235 - 3981', 'adriano@fcav.unesp.br', '0'),
(22, 'Timóteo', 'Tupã', 'Rua Domingos da Costa Lopes', 'Professor Doutor', 'UNESP', '(14) 99134 - 2737', '(14) 3404 - 4200', 'timoteo@tupa.unesp.br', '0'),
(23, 'Renato ', 'Bauru', 'Rua Raposo Tavares ', 'Docente', 'UNESP', '(14) 99786 - 0910', '(14) 3404 - 4200', 'rdbapt@gmail.com', '0'),
(24, 'Marcelo Girotto', 'jaboticabal', 'r ana ramos', '', 'UNESP - Faculdade de Ciências Agrárias e Veterinár', '(16', '', 'mgiroto@fcav.unesp.br', '1'),
(25, 'Sandra Cristina de', 'Tupã', 'Av Domingos da Costa Lopes', 'Professor Dr.', 'Faculdade de Ciências e Engenharia / UNESP ', '(14) 99741 - 0443', '', 'sandra@tupa.unesp.br', '1'),
(26, 'Sérgio ', 'Jaboticabal', 'Rua Professor Lourenço Vitta, ', 'Professor Assistente Doutor', 'Faculdade de Ciências Agrárias e Veterinárias da U', '(19) 99743 - 6596', '(16) 3209 - 7267', 'figueira@fcav.unesp.br', '0'),
(27, 'Sheila', 'Ribeirão Preto', 'Rua Jornalista Rubens Volpi Filho', 'Docente/vice-Chefe Departamento', 'FCAV UNESP', '(16) 99174 - 9995', '(16) 3209 - 7268', 'sheilagarcia@fcav.unesp.br', '0'),
(28, 'Elton', 'Araraquara - SP', 'Rodovia Araraquara - Jaú,', 'Docente', 'UNESP - Faculdade de Ciências e Letras, Departamen', '(16) 99107 - 2792', '(16) 3334 - 6214', 'elton@fclar.unesp.br', '0'),
(29, 'andréia', 'jaboticabal', 'rua ana ramos de carvalho', 'professor assistente doutor', 'FCAV-UNESP', '(16) 98163 - 9828', '(16) 3209 - 7255', 'andreiamarize@fcav.unesp.br', '0'),
(30, 'Erica', 'Salvador', 'R. Dr. Pedro de Souza Ponde ', 'coordenadora do curso de Administração e docente', 'Instituto Federal da Bahia', '(71) 99168 - 6324', '(71) 3506 - 9082', 'ericaferreiramarques@gmail.com', '0'),
(31, 'Marcia Mitie', 'Ribeirão Preto', 'Rua Ayrton Roxo', 'Coordenação de curso', 'Centro Universitário Uniseb', '(16) 99158 - 2847', '(16) 9915 - 8284', 'mitie.maemura@gmail.com', '0'),
(32, 'Alessandra', 'Ribeirão Preto', 'Rua Zilda de Souza Rizzi', 'Pós Doutoranda', 'Universidade de São Paulo - USP', '(16) 99131 - 3575', '', 'alessandrahf@usp.br', '0'),
(33, 'Cristiane Sonia ', 'Ribeirão Preto', 'Rua Felipe Achê', 'Professora', 'Fundação Educacional de Ituverava', '(16) 98204 - 0667', '(16) 3637 - 7487', 'csarroyo@terra.com.br', '0'),
(34, 'Alexandre', 'Ribeirão Preto', 'Rua Magda Perona Frossard', 'Aluno de doutorado', 'FEARP/USP', '(16) 99172 - 9911', '', 'alexandredias_usp@yahoo.com.br', '0'),
(35, 'Rafael ', 'Ribeirão Preto/SP', 'Rua Dr. Benjamin Anderson Stauffer, ', 'Professor', 'Estácio - Uniseb', '(16) 99709 - 3630', '(16) 3877 - 9769', 'rafaelaltafin@hotmail.com', '0'),
(36, 'Jessâmine', 'Ribeirão Preto', 'Rua Abraao Issa Halack', 'Coordenadora', 'Uniseb Estácio', '(16) 98117 - 7875', '', 'salvini.je@gmail.com', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_cadusu`
--

CREATE TABLE IF NOT EXISTS `sl_cadusu` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `idartigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emailverificado` int(11) NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` varchar(10) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sobrenome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(15) CHARACTER SET latin1 NOT NULL,
  `nascimento` varchar(10) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(30) CHARACTER SET latin1 NOT NULL,
  `complemento` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(3) CHARACTER SET latin1 NOT NULL,
  `pais` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `contato` varchar(20) CHARACTER SET latin1 NOT NULL,
  `publicado` int(11) NOT NULL,
  `tipocadastro` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cargo` varchar(60) CHARACTER SET latin1 NOT NULL,
  `arearesp` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `cargo` (`cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=134 ;

--
-- Extraindo dados da tabela `sl_cadusu`
--

INSERT INTO `sl_cadusu` (`id_usuario`, `idartigo`, `email`, `emailverificado`, `senha`, `criado`, `modificado`, `nome`, `sobrenome`, `cpf`, `nascimento`, `sexo`, `endereco`, `complemento`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `pais`, `instituicao`, `telefone`, `contato`, `publicado`, `tipocadastro`, `cargo`, `arearesp`, `status`) VALUES
(9, '', 'davidflsantos@gmail.com', 1, 'dl1979', '2015-11-24 00:23:00', '', 'David Ferreira Lopes', 'Santos', '032.395.847-86', '27/09/1979', 'Masculino', 'Via de Acesso Prof. Paulo Dona', 'Depto. Economia', 'SN', 'UNESP', '14.884-900', 'Jaboticabal', 'SP', 'Brasil', 'UNESP', '(16) 99605 - 01', '(16) 3209 - 725', 0, 'Autor e Avaliador', 'Professor Assistente Doutor', '', 1),
(10, '1076782155695717db78fe', 'rbkalaki@gmail.com', 1, '37260897', '2016-01-08 10:16:00', '', 'Rafael', 'Bordonal Kalaki', '370.461.888-82', '31/10/1986', 'Masculino', 'rua Magda Perona Frossard', 'apto 21', '115', 'Nova Aliança', '14.026-596', 'Ribeirão Preto', 'SP', 'Brasil', 'Faculdade de Economia, Administração e Contabilida', '(16) 99704 - 93', '(16) 3456 - 555', 2, 'Autor', 'Doutorando', '', 0),
(11, '', 'favaneves@gmail.com', 1, 'markestrat', '2016-01-08 14:27:00', '', 'Marcos', 'Fava Neves', '114.263.788-31', '28/10/1968', 'Masculino', 'rua maestro ignacio stabilile', '', '520', 'alto da boa vista', '14025-640', 'Ribeirão Preto', 'SP', 'Brasil', 'Faculdade de Economia, Administração e Contabilida', '(16) 34565 - 55', '(16) 3456 - 555', 0, 'Autor', 'Professor titular', '', 0),
(12, '', 'vinicius.trombin@gmail.com', 1, 'markestrat', '2016-01-08 14:32:00', '', 'Vinicius', 'Gustavo Trombin', '032.579.066-00', '24/02/1979', 'Masculino', 'rua maestro ignacio stabilile', '', '520', 'Alto da boa vista', '14025-640', 'Ribeirão Preto', 'SP', 'Brasil', 'Markestrat', '(16) 34565 - 55', '(16) 3456 - 555', 0, 'Autor', 'Sócio/Pesquisador', '', 0),
(17, '76384624256bd0d11a08d0', 'adriano.fuzaro@ifgoiano.edu.br', 1, '97154389', '2016-01-16 20:45:00', '', 'ADRIANO MARCOS FUZAR', 'FUZARO', '117.260.428-20', '01/11/1972', 'Masculino', 'TRAVESSA 1, APARTAMENTO 3, NUM', 'APTO 3', '3', 'JARDIM AMÉRICA', '75.902-420', 'RIO VERDE', 'GO', 'Brasil', 'INSTITUTO FEDERAL GOIANO', '(64) 81804 - 818', '(64) 9933 - 4817', 2, 'Autor', 'COORDENADOR DO CURSO DE AGRONEGÓCIO', '', 0),
(18, '', 'simone92trindade@gmail.com', 1, 'claudinho', '2016-01-17 07:49:00', '', 'Simone ', 'Cezar Trindade', '018.531.510-09', '29/11/1992', 'Feminino', 'Rua Pedro Santini ', 'Condomínio Moradas Clube ', '3331', 'Cerrito', '97.017-970', 'Santa Maria', 'RS', 'Brasil', 'Universidade Federal de Santa Maria ', '(55) 96501 - 882', '', 0, 'Autor', 'Estudante ', '', 0),
(19, '84125195956e4bf5993eda', 'arthurgsilveira1@gmail.com', 1, 'kakashi1212', '2016-01-27 17:52:00', '', 'Arthur', 'Silveira', '400.611.928-30', '19/12/1993', 'Masculino', 'Rua Tamoios', 'Ap. 141', '15', 'Santa Cruz', '14.020-700', 'Ribeirão Preto', 'SP', 'Brasil', 'Unesp', '(16) 99226 - 0883', '(16) 3967 - 3342', 2, 'Autor', 'Aluno', '', 0),
(24, '', 'caneppele@usp.br', 1, 'flcagro00', '2016-02-03 11:33:00', '', 'Fernando', 'de Lima Caneppele', '180.840.738-50', '31/05/1977', 'Masculino', 'Avenida Duque de Caxias Norte', 'Campus USP', '225', 'Campus USP', '13.635-900', 'Pirassununga', 'SP', 'Brasil', 'USP / FZEA', '(19) 99607 - 4476', '(19) 3565 - 6714', 0, 'Autor e Avaliador', 'Professor Doutor', 'Sustentabilidade e Responsabilidade Sócio Ambiental', 1),
(25, '', 'velhojp@ufsm.br', 1, '61milk90ufsmtdn', '2016-02-04 11:26:00', '', 'João Pedro', 'Velho', '646.074.020-87', '04/08/1975', 'Masculino', 'Rua General Firmino', 'Apto 604', '476', 'Centro', '98.300-000', 'Palmeira das Missões', 'RS', 'Brasil', 'Universidade Federal de Santa Maria', '(55) 81383 - 990', '(55) 3742 - 8894', 0, 'Autor e Avaliador', 'Professor Adjunto IV', 'Empreendedorismo, Inovação e Tecnologia', 1),
(32, '', 'profadrianocarvalho@hotmail.com', 1, '13041974mf', '2016-02-04 17:35:00', '', 'ADRIANO ', 'DIAS DE CARVALHO', '024.263.626-85', '13/04/1974', 'Masculino', 'AV. AMÉRICO PEREIRA LIMA', '', 'S,N', 'JD. LAVINIA', '13.736-260', 'MOCOCA', 'SP', 'Brasil', 'FATEC', '(35) 98846 - 5005', '', 0, 'Autor', 'PROFESSO', 'valido somente para avaliadores', 0),
(33, '177294609956e76966161a7', 'fer.yamauchi@gmail.com', 1, 'pastilha14', '2016-02-10 14:07:00', '', 'Fernanda', 'Yamauchi', '393.104.178-62', '10/07/1991', 'Feminino', 'Rua Coroados', '', '204', 'Centro', '17.600-010', 'Tupã', 'SP', 'Brasil', 'UNESP', '(14) 99713 - 2854', '(14) 3496 - 1492', 2, 'Autor', 'Discente', 'valido somente para avaliadores', 0),
(34, '91435656156e7ef2a09354', 'danielerpimentel@gmail.com', 1, '161293', '2016-02-11 15:00:00', '', 'Daniele', 'Ribeiro Pimentel', '423.377.868-70', '16/12/1993', 'Feminino', 'Rua Antônio Mendes Pereira', 'Casa', '385', 'Jardim Esmeralda', '17.690-000', 'Bastos', 'SP', 'Brasil', 'Unesp Tupã', '(14) 99672 - 1513', '(14) 3478 - 2243', 2, 'Autor', 'Mestranda', 'valido somente para avaliadores', 0),
(35, '', 'cristiane@tupa.unesp.br', 1, 'ch1901', '2016-02-11 15:15:00', '', 'Cristiane', 'Hengler Corrêa Bernardo', '139.369.768-21', '15/06/1968', 'Feminino', 'Av. Domingos da Costa Lopes', '', '780', 'Jd Itaipu', '17.602-496', 'Tupã', 'SP', 'Brasil', 'Unesp', '(14) 99893 - 9190', '(14) 3404 - 4200', 0, 'Autor', 'Docente', 'valido somente para avaliadores', 0),
(36, '', 'julianomiola@hotmail.com', 1, '121314', '2016-02-11 17:30:00', '', 'juliano', 'miola', '870.093.749-53', '11/01/1976', 'Masculino', 'r. luiz antonio sanvezzo', '', '393', 'Res. Arthur Boigues', '19160-000', 'Álvares Machado', 'SP', 'Brasil', 'Unesp - Tupã', '(18) 98801 - 5611', '(18) 9812 - 2411', 0, 'Autor', 'Mestrando', 'valido somente para avaliadores', 0),
(38, '', 'eduardo@tupa.unesp.br', 1, 'Edua1984*', '2016-02-11 18:11:00', '', 'Eduardo Guilherme', 'Satolo', '313.396.268-02', '31/07/1984', 'Masculino', 'AV Domingos da Costa Lopes', '', '780', 'Jd Itaipu', '17.602-496', 'Tupã', 'SP', 'Brasil', 'UNESP/Tupã', '(19) 99160 - 9659', '(14) 3404 - 4200', 0, 'Autor e Avaliador', '', 'Logísticas e Operações', 1),
(39, '', 'wagner@tupa.unesp.br', 1, '366187', '2016-02-12 10:23:00', '', 'Wagner ', 'Lourenzani', '177.175.378-18', '22/03/1974', 'Masculino', 'Al. Manchester', '', '125', 'Vila Inglesa', '17.603-660', 'Tupã', 'SP', 'Brasil', 'UNESP - Faculdade de Ciências e Engenharia / Tupã', '(14) 98170 - 2511', '', 0, 'Autor', 'Professor Assistente Doutor', 'valido somente para avaliadores', 0),
(40, '79342303056d47535c9d73', 'gabica14@hotmail.com', 1, 'ga140875', '2016-02-13 15:43:00', '', 'Gabriela ', 'Allegretti', '773.619.620-68', '14/08/1975', 'Feminino', 'Av. Soledade', 'ap 302', '159', 'Petrópolis', '90.470-340', 'Porto Alegre', 'RS', 'Brasil', 'UFRGS', '(51) 95454 - 772', '5195454772', 2, 'Autor', 'Doutoranda em Agronegócios', 'valido somente para avaliadores', 0),
(41, '', 'veronica.schmidt@ufrgs.br', 1, 'ga140875', '2016-02-16 16:20:00', '', 'Verônica', 'Schmidt', '486.801.680-68', '19/02/1961', 'Feminino', 'Soledade', '302', '159', 'Petrópolis', '90.470-340', 'Porto Alegre', 'RS', 'Brasil', 'UFRGS', '5195454772', '5195454772', 0, 'Autor', 'Professor', 'valido somente para avaliadores', 0),
(42, '', 'angelicagoismorales@gmail.com', 1, 'osvaldo', '2016-02-16 16:24:00', '', 'Angélica ', 'Góis Morales', '257.401.078-73', '16/09/1976', 'Feminino', 'Rua Cherentes ', '', '1820', 'Vila Tupa Mirim I', '17.605-000', 'Tupã', 'SP', 'Brasil', 'UNESP', '(14) 99872 - 5272', '', 0, 'Autor', 'Docente', 'valido somente para avaliadores', 0),
(43, '', 'gutobrion@gmail.com', 1, '589733', '2016-02-16 17:44:00', '', 'Antônio Augusto', 'Brion Cardoso', '927.236.406-04', '18/06/1976', 'Masculino', 'Rua Seringueira', '201', '102', 'Santo Agostinho', '35.065-018', 'Governador Valadares', 'MG', 'Brasil', 'Universidade Federal de Juiz de Fora - GV', '(32) 99913 - 6049', '', 0, 'Autor', 'Professor Assistente', 'valido somente para avaliadores', 0),
(45, '', 'joao.dessimon@ufrgs.br', 1, 'ga140875', '2016-02-21 16:18:00', '', 'João Armando', 'Dessimon Machado', '259.713.280-34', '01/05/1954', 'Masculino', 'Av. Soledade', 'ap 302', '159', 'Petrópolis', '90.470-340', 'Porto Alegre', 'RS', 'Brasil', 'UFRGS', '5195454772', '5195454772', 0, 'Autor', 'Professor', 'valido somente para avaliadores', 0),
(46, '172894862756d3294124a04', 'jh.eustachio@gmail.com', 1, 'crazytrain=+2810', '2016-02-22 09:39:00', '', 'João Henrique', 'Paulino Pires Eustachio', '349.823.328-94', '28/10/1987', 'Masculino', 'Rua Álvares Cabral', 'Apartamento 31', '1277', 'Centro', '14.010-080', 'São Paulo', 'SP', 'Brasil', 'Faculdade de Economia, Administração e Contabilidade de Ribeirão Preto', '(11) 98383 - 1812', '(11) 2621 - 2686', 2, 'Autor', 'Aluno de Mestrado', 'valido somente para avaliadores', 0),
(47, '144780107056e6f1bae44b2', 'lamarca@tupa.unesp.br', 1, 'lamarca10', '2016-02-23 21:23:00', '', 'Daniel', 'Sá Freire Lamarca', '402.686.108-27', '01/11/1993', 'Masculino', 'Rua Padre José de Anchieta', '', '268', 'Alto Cafezal', '17.504-085', 'Marília', 'SP', 'Brasil', 'Universidade Estadual Paulista', '(14) 99695 - 5059', '(14) 3433 - 2656', 2, 'Autor', 'Estudante de Mestrado', 'valido somente para avaliadores', 0),
(48, '', 'jhppeustachio@fearp.usp.br', 1, 'jhppeustachio@fearp.usp.br', '2016-02-28 14:02:00', '', 'Dante', 'Martinelli', '031.997.518-57', '13/02/1956', 'Masculino', 'Avenida Bandeirantes', 'Faculdade de Economia, Adminis', '3900', 'Monte Alegre', '14.040-905', 'Ribeirão Preto', 'SP', 'Brasil', 'Faculdade de Economia, Administração e Contabilidade de Ribeirão Preto', '(16) 33153 - 922', '', 0, 'Autor', 'Professor Doutor', 'valido somente para avaliadores', 0),
(49, '', 'edypesantos@gmail.com', 0, 'agronomia', '2016-03-01 10:40:00', '', 'Edvaldo', 'Pereria dos Santos', '295.344.828-46', '04/05/1982', 'Masculino', 'Rua Pa Justino Ferreira da Roc', 'Ap 21', '51', 'Nova Aparecida', '14.883-358', 'Jaboticabal', 'SP', 'Brasil', 'Unesp Jaboticabal', '(16) 99115 - 4750', '', 0, 'Autor', 'Pós Graduando', 'valido somente para avaliadores', 0),
(50, '192683316456e6d02f7421a', 'cinthia.costa@embrapa.br', 1, 'psell13', '2016-03-01 18:41:00', '', 'cinthia', 'cabral da costa', '898.591.116-34', '10/06/1975', 'Feminino', 'av. miguel damha', 'casa 175', '1400', 'Damha II', '13.565-904', 'são carlos', 'SP', 'Brasil', 'Embrapa', '(16) 98177 - 7000', '(16) 2106 - 2839', 2, 'Autor e Avaliador', 'Pesquisadora', 'Economia e Finanças', 1),
(51, '178374043956e49c8603d93', 'bertoncelloag@hotmail.com', 1, 'B3rt0nc3ll0', '2016-03-01 22:53:00', '', 'Alexandre ', 'Bertoncello', '145.888.688-37', '01/11/1972', 'Masculino', 'Rua Pedro Rena', '', '326', 'residencial universitário', '19063-727', 'Presidente Prudente', 'SP', 'Brasil', 'Fatec ', '(18) 991683773', '', 2, 'Autor e Avaliador', 'Professor ', 'Economia e Finanças', 1),
(52, '', 'lechan@unoeste.br', 1, 'Carneiro100%', '2016-03-02 12:43:00', '', 'Lechan', 'Colares-Santos', '916.081.471-34', '17/07/1980', 'Masculino', 'Rua Marechal Deodoro', '', '1010', 'Centro', '19.560-000', 'INDIANA', 'SP', 'Brasil', 'Universidade do Oeste Paulista', '(18) 99741 - 4538', '', 0, 'Autor', 'Professor', 'valido somente para avaliadores', 0),
(53, '', 'bernardescj@gmail.com', 1, 'gametogenese007', '2016-03-06 19:37:00', '', 'Juliana ', 'Correa Bernardes', '350.282.238-74', '10/11/1986', 'Feminino', 'Rua Osvaldo', '', '74', 'Vila Formosa', '17.602-020', 'Tupã', 'SP', 'Brasil', 'UNESP/Câmpus Tupã', '(14) 99787 - 0214', '(14) 3496 - 7430', 0, 'Autor', 'Mestranda', 'valido somente para avaliadores', 0),
(54, '', 'jessica_gonella@hotmail.com', 1, 'gonella10', '2016-03-07 13:25:00', '', 'Jéssica ', 'dos Santos Leite Gonella ', '407.382.128-81', '13/04/1992', 'Feminino', 'José Bernardino ', '', '231', 'Parque São Pedro ', '17.602-270', 'Tupã', 'SP', 'Brasil', 'Faculdade de Ciência e Engenharia de Tupã - Unesp', '(14) 34044 - 200', '', 0, 'Autor', 'Aluna', 'valido somente para avaliadores', 0),
(55, '84651824356ddbbbaf2ae3', 'daltro_cella@yahoo.com.br', 1, 'm0rf3t1c0', '2016-03-07 13:35:00', '', 'Daltro', 'Cella', '834.477.419-53', '05/05/1972', 'Masculino', 'Rua Hércules Gibertoni', '', '188', 'Laranjeiras', '15.900-000', 'Taquaritinga', 'SP', 'Brasil', 'Fatec', '(16) 99751 - 0700', '(16) 3253 - 1700', 1, 'Autor', 'Professor', 'valido somente para avaliadores', 0),
(56, '', 'fernando_turci@yahoo.com.br', 1, 'NELORE10121998', '2016-03-07 18:50:00', '', 'Fernando ', 'Sandrini', '232.487.278-10', '10/12/1998', 'Masculino', 'Avenida Portugal', 'ap 21b', '400', 'centro', '09.040-000', 'Santo André', 'SP', 'Brasil', 'Unesp', '(11) 99654 - 1994', '', 0, 'Autor', 'graduando', 'valido somente para avaliadores', 0),
(57, '42215449356e70c04b6875', 'glaucia@itapeva.unesp.br', 1, 'pakistan', '2016-03-08 13:26:00', '', 'GLAUCIA APARECIDA ', 'PRATES', '081.606.508-09', '08/07/1963', 'Feminino', 'R. gERALDO ALCKMIN', '', '519', 'N.SRA. DE FATIMA', '18.409-010', 'ITAPEVA', 'SP', 'Brasil', 'UNESP', '(16) 99617 - 6212', '(15) 3524 - 9100', 2, 'Autor e Avaliador', 'PROF. ASSISTENTE DOUTOR', 'Logísticas e Operações', 1),
(58, '', 'denise.cosmo.souza.dcs@gmail.com', 1, 'londrina', '2016-03-08 14:33:00', '', 'Denise ', 'Cosmo de Souza', '382.241.938-96', '01/03/1990', 'Feminino', 'Rua: Alvorada', '', '232', 'Alvorada', '16.016-005', 'Araçatuba', 'SP', 'Brasil', 'Unesp', '(15) 98144 - 4495', '(18) 3624 - 3727', 0, 'Autor', 'Discente ', 'valido somente para avaliadores', 0),
(59, '31345449756e76722b9ff7', 'chfcunha@gmail.com', 1, 'zoropa1973', '2016-03-08 17:01:00', '', 'Christiano ', 'Cunha', '191.615.638-03', '23/10/1973', 'Masculino', 'Rua XV de Novembro', 'apto 13', '250', 'Centro', '13.400-370', 'Piracicaba', 'SP', 'Brasil', 'Faculdade de Ciências Aplicadas (FCA) da Universidade Estadual de Campinas (UNICAMP)', '(19) 98219 - 1204', '(19) 3434 - 6955', 1, 'Autor e Avaliador', ' Professor Doutor I', 'Marketing e Mercados', 1),
(60, '', 'paulor_delima@yahoo.com.br', 1, '486712', '2016-03-08 19:15:00', '', 'Paulo Ricardo ', 'de Lima', '369.235.558-09', '20/04/1989', 'Masculino', 'Adriano G. de Carvalho', 'Casa', '56', 'Jd. Imperador', '18.411-060', 'Itapeva', 'SP', 'Brasil', 'UNESP- Itapeva', '(15) 99664 - 2643', '', 0, 'Autor', 'Ex-aluno', 'valido somente para avaliadores', 0),
(61, '', 'marcelo.picchi@fatectq.edu.br', 1, 'picchi1406', '2016-03-10 15:24:00', '', 'MARCELO RODOLFO ', 'PICCHI', '267.408.688-24', '14/06/1973', 'Masculino', 'RUA MARCI JOSÉ VALVERDE', '', '36', 'Portal da Baronesa', '15.993-097', 'MATÃO', 'SP', 'Brasil', 'FATEC - TAQUARITINGA', '(16) 99797 - 7678', '(16) 3394 - 4047', 0, 'Autor', 'COORDENAÇÃO DE CURSO', 'valido somente para avaliadores', 0),
(62, '', 'solangeluiz@globo.com', 1, 'meioambiente', '2016-03-10 17:30:00', '', 'Solange ', 'Luiz', '255.756.978-00', '12/10/1977', 'Feminino', 'Av. Santo Antonio', '', '200', 'Vila Xavier', '14.810-115', 'Araraquara', 'SP', 'Brasil', 'Centro Universitário Araraquara - UNIARA', '(16) 99163 - 6014', '', 0, 'Autor', '', 'valido somente para avaliadores', 0),
(63, '71507387156e4771fdef44', 'fabiosfc1@hotmail.com', 1, '300711', '2016-03-10 19:17:00', '', 'FÁBIO', 'DE CARVALHO SILVA', '339.711.408-07', '01/11/1985', 'Masculino', 'RUA LAIR RAMOS DA MOTTA', '', '316', 'JARDIM OURO VERDE', '19085330', 'PRESIDENTE PRUDENTE', 'SP', 'Brasil', 'UNOESTE', '(18) 99659 - 7966', '', 2, 'Autor', 'ALUNO', 'valido somente para avaliadores', 0),
(64, '', 'perla@usp.br', 1, '140893', '2016-03-10 21:34:00', '', 'perla', 'calil pongeluppe w rebehy', '167.166.768-99', '16/04/1975', 'Feminino', 'av carlos consoni', 'casa 72', '1100', 'jd botanico', '14.024-270', 'ribeirão preto', 'SP', 'Brasil', 'FEARP USP', '(16) 99148 - 9798', '(16) 3913 - 5610', 0, 'Autor', 'Docente', 'valido somente para avaliadores', 0),
(65, '', 'gabrielpatreze@hotmail.com', 1, 'gabriel123', '2016-03-10 22:11:00', '', 'Gabriel', 'Cruz Gonçalves de Melo', '409.820.278-69', '23/08/1993', 'Masculino', 'Rua Francisco Bertasso', 'casa', '665', 'soledade', '19.200-000', 'Pirapozinho/SP', 'SP', 'Brasil', 'Unoeste', '(18) 99141 - 9223', '', 0, 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(66, '86243870056e71b4f8326e', 'bruna.sousaferreira@gmail.com', 1, 'Bru37737', '2016-03-10 22:55:00', '', 'Bruna ', 'Sousa Ferreira', '377.372.548-54', '13/01/1991', 'Feminino', 'Rua João Francisco Murzi', '', '5350', 'Jardim Redentor', '14.409-255', 'Franca', 'SP', 'Brasil', 'Universidade Estadual Paulista "Júlio de Mesquita Filho"', '(16) 99172 - 5049', '(16) 3713 - 4643', 2, 'Autor', '', 'valido somente para avaliadores', 0),
(67, '', 'valerialazarreti@hotmail.com', 0, 'valeria', '2016-03-10 23:39:00', '', 'Valeria ', 'Lazarreti', '102.372.499-52', '01/11/1995', 'Feminino', 'Rodovia Raposo Tavares - do km', '', '573', 'Parque Cedral ', '86.640-000', 'Caferara ', 'PR', 'Brasil', 'Unoeste', '(43) 96159 - 101', '(43) 3660 - 1269', 0, 'Autor', 'Pesquisadora ', 'valido somente para avaliadores', 0),
(68, '', 'raimundo_psilva@hotmail.com', 1, 'emery+10', '2016-03-11 00:44:00', '', 'raimundo', 'silva', '022.766.778-64', '02/10/1959', 'Masculino', 'Rua Piratininga', 'Apto 184 A', '477', 'Brás', '03042001', 'São Paulo', 'SP', 'Brasil', 'UNIARA', '11994355890', '11994355890', 0, 'Autor', 'Bolsista CAPES', 'valido somente para avaliadores', 0),
(69, '147683133456e4410e9d273', 'rosana@cambuhy.com.br', 1, '101182', '2016-03-11 13:55:00', '', 'Rosana Cristina', 'Scopelli', '299.977.828-79', '10/11/1982', 'Feminino', 'Rua Luciano Gandini', '', '1046', 'Centro', '15.990-070', 'Matão', 'SP', 'Brasil', 'UNESP', '(16) 99113 - 5903', '(16) 3384 - 1487', 2, 'Autor', 'Pós Graduanda', 'valido somente para avaliadores', 0),
(70, '', 'marcelocassia@gmail.com', 1, '97402636', '2016-03-11 14:34:00', '', 'Marcelo Tufaile', 'Cassia', '357.416.778-43', '05/01/1988', 'Masculino', 'Rod. Washington Luis', '', 's/n', 'Rural', '15.990-900', 'Matão', 'SP', 'Brasil', 'UNESP', '(16) 99740 - 2636', '', 0, 'Autor', 'Pós Graduando', 'valido somente para avaliadores', 0),
(71, '', 'lesleyattadia@uol.com.br', 1, '150575', '2016-03-11 14:58:00', '', 'Lesley Carina ', 'do Lago Attadia Galli', '252.533.728-06', '15/05/1975', 'Feminino', 'RUA Doutor Benjamim Anderson S', '2001', '777', 'Botânico', '14.021-617', 'RIBEIRÃO PRETO', 'SP', 'Brasil', 'UNESP ', '(16) 99975 - 0502', '(16) 3209 - 7259', 0, 'Autor e Avaliador', 'Professor ', 'Estratégia, Planejamento e Governança', 1),
(72, '', 'plbutten@gmail.com', 1, 'pedro1902', '2016-03-11 16:40:00', '', 'PEDRO LUIS', 'BÜTTENBENDER', '472.966.820-00', '19/02/1967', 'Masculino', 'RUA 24 DE OUTUBRO', '--', '177', 'ALTO DO PARQUE', '98.900-000', 'SANTA ROSA', 'RS', 'Brasil', 'UNIJUI', '(55) 99621 - 318', '(55) 3512 - 5377', 0, 'Autor e Avaliador', 'PROFESSOR', 'Desenvolvimento e Gestão', 1),
(73, '', 'cavichioli2003@hotmail.com', 1, 'fa198384', '2016-03-11 16:44:00', '', 'Fabio Alexandre', 'Cavichioli', '305.417.888-92', '16/12/1983', 'Masculino', 'Av. Antônio Firmino de Souza', '', '55', 'Residencial Alexandre', '15980000', 'Dobrada', 'SP', 'Brasil', 'FATEC\\Taquaritinga', '16991453189', '16991453189', 0, 'Autor', 'Docente ', 'valido somente para avaliadores', 0),
(74, '155826152956e76d88a9fe6', 'jheny_crys@hotmail.com', 1, '48252424', '2016-03-11 16:44:00', '', 'Jeniffer Cristiane', 'Rodrigues', '403.417.658-05', '10/03/1991', 'Feminino', 'Rua Brasilia', 'Casa', '444', 'Vila Aparecida ', '18.401-140', 'Itapeva ', 'SP', 'Brasil', 'FATEC Capão Bonito ', '(15) 99749 - 0419', '', 2, 'Autor', 'Aluno ', 'valido somente para avaliadores', 0),
(75, '', 'anaterence@fclar.unesp.br', 1, 'crau00', '2016-03-11 16:58:00', '', 'Ana Claudia F ', 'Terence', '110.685.548-51', '16/12/1970', 'Feminino', 'Alameda Antonio Francisco Lisb', '', '282', 'Sabará', '13.567-700', 'São Carlos', 'SP', 'Brasil', 'UNESP', '(16) 99776 - 7202', '(16) 3334 - 6420', 0, 'Autor', 'docente', 'valido somente para avaliadores', 0),
(76, '', 'sergio@tupa.unesp.br', 1, 'sergio10', '2016-03-11 21:21:00', '', 'Sergio', 'Silva Braga Junior', '257.301.158-57', '22/10/1972', 'Masculino', 'Rua Domingos Costa Lopes', '', '780', 'Jardim Itaipu', '17.602-496', 'Tupã', 'SP', 'Brasil', 'Universidade Estadual Paulista', '(14) 99728 - 9508', '', 0, 'Autor', 'Professor Assistente Doutor', 'valido somente para avaliadores', 0),
(77, '', 'marcelo@tupa.unesp.br', 1, 'marcelo10', '2016-03-11 21:27:00', '', 'Marcelo', 'Marques Magalhães', '145.606.998-52', '03/10/1972', 'Masculino', 'Rua Domingos Costa Lopes', '', '780', 'Jardim Itaipu', '17.602-496', 'Tupã', 'SP', 'Brasil', 'Universidade Estadual Paulista', '(14) 98124 - 9464', '14997289508', 0, 'Autor', 'Professor Assistente Doutor', 'valido somente para avaliadores', 0),
(78, '', 'engthaisantos@hotmail.com', 1, 'thais123', '2016-03-11 21:39:00', '', 'Thais', 'Fonseca Santos', '406.017.968-02', '31/05/1991', 'Feminino', 'aldo florencio pereira', 'residencia', '378', 'jardim Paulista ', '19.700-000', 'Paraguacu Paulista''', 'SP', 'Brasil', 'UNOESTE', '(18) 99778 - 2567', '(18) 3361 - 5719', 0, 'Autor', '', 'valido somente para avaliadores', 0),
(79, '', 'engthaisantos@hotmail.com', 1, 'thais123', '2016-03-11 21:39:00', '', 'Thais', 'Fonseca Santos', '406.017.968-02', '31/05/1991', 'Feminino', 'aldo florencio pereira', 'residencia', '378', 'jardim Paulista ', '19.700-000', 'Paraguacu Paulista''', 'SP', 'Brasil', 'UNOESTE', '(18) 99778 - 2567', '(18) 3361 - 5719', 0, 'Autor', '', 'valido somente para avaliadores', 0),
(80, '108857747056e7312084b7f', 'svlemos@yahoo.com.br', 1, '14810255', '2016-03-11 22:00:00', '', 'STELLA', 'VANNUCCI LEMOS', '368.252.258-12', '07/04/1989', 'Feminino', 'R. SARAH VETTORAZZO', '', '51', 'COLINA VERDE', '14.887-372', 'JABOTICABAL', 'SP', 'Brasil', 'FEA-RP', '(16) 99743 - 5476', '(16) 9974 - 3547', 2, 'Autor', 'PESQUISADORA', 'valido somente para avaliadores', 0),
(81, '', 'louzada@fcav.unesp.br', 1, '50650', '2016-03-12 12:27:00', '', 'Roberto', 'LOUZADA', '517.021.858-34', '06/06/1950', 'Masculino', 'RUA IPEROIG', '61', '501', 'Perdizes', '05016-000', 'SÃO PAULO', 'SP', 'Brasil', 'UNESP - Campus de Jaboticabal', '(11) 98560 - 0231', '(16) 3203 - 4000', 0, 'Autor e Avaliador\n', 'Professor', 'Gestão de Pessoas e Estudos Organizacionais', 0),
(84, '', 'adriano@fcav.unesp.br', 1, 'adrluc', '2016-03-13 15:00:00', '', 'Adriano dos Reis', 'Lucente', '186.486.618-70', '06/01/1974', 'Masculino', 'Rua Pernambuco ', '', '1322', 'Campos Elíseos', '14.085-570', 'Ribeirão Preto', 'SP', 'Brasil', 'Universidade Estadual Paulista', '(16) 99245 - 6831', '(16) 3235 - 3981', 0, 'Autor e Avaliador', 'Docente', 'Economia e Finanças', 1),
(85, '112373868856e61b4bf39dd', 'adriana_fmoraes@hotmail.com', 1, '04308211', '2016-03-13 17:43:00', '', 'ADRIANA ', 'FERREIRA DE MORAES OLIVEIRA', '015.687.066-50', '08/07/1986', 'Feminino', 'RUA VIRGILIO MARTINI', '', '1522', 'JARDIM MIRIAM', '37.890-000', 'MUZAMBINHO', 'MG', 'Brasil', 'UNESP JABOTICABAL', '3535711797', '3535711797', 2, 'Autor', 'ESTUDANTE', 'valido somente para avaliadores', 0),
(86, '44036584656e5f00f37034', 'ronaldopazini@hotmail.com', 1, 'cs26194', '2016-03-13 18:35:00', '', 'Ronaldo Cesar', 'Pazini', '290.823.128-08', '30/04/1982', 'Masculino', 'Rua General Osorio', '', '1549', 'Centro', '15.900-000', 'Taquaritinga', 'SP', 'Brasil', 'FATEC/Taquaritinga', '(16) 99773 - 8999', '(16) 3252 - 2446', 2, 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(87, '173883634556e7269200bd8', 'andre.gustavo21@terra.com.br', 1, 'acf2847', '2016-03-13 18:52:00', '', 'André Gustavo', 'de Brito Thomaz', '224.849.058-58', '24/11/1982', 'Masculino', 'Avenida João Batista de Moraes', '', '100', 'Jardim Perina', '14.876-035', 'Jaboticabal', 'SP', 'Brasil', 'FCAV UNESP Faculdade de Ciências Agrárias e Veterinárias', '(16) 99322 - 1204', '(16) 3204 - 2392', 2, 'Autor', 'Aluno Mestrado Profissional em Administração', 'valido somente para avaliadores', 0),
(88, '', 'grossi.selma@gmail.com', 1, 'cs030507', '2016-03-13 19:45:00', '', 'Selma de Fátima', 'Grossi', '156.223.118-96', '19/12/1967', 'Feminino', 'Rua Juca Quito', '', '1119', 'Centro', '14.870-710', 'Jaboticabal', 'SP', 'Brasil', 'Fatec Taquaritinga', '(16) 99709 - 6306', '(16) 3252 - 5250', 0, 'Autor', 'Docente', 'valido somente para avaliadores', 0),
(89, '89843998456e609f2b9101', 'caio_inde@terra.com.br', 1, '97413139', '2016-03-13 21:21:00', '', 'Caio', 'Bittencourt Manzano', '329.423.868-19', '07/04/1986', 'Masculino', 'rua domingos castilho chanes', '', '303', 'jd. portal do sol', '19.570-000', 'regente feijó', 'SP', 'Brasil', 'Unoeste', '(18) 99723 - 7075', '', 1, 'Autor', '', 'valido somente para avaliadores', 0),
(90, '', 'dhislayne@gmail.com', 1, 'yeshua01', '2016-03-13 21:44:00', '', 'Dhislayne Karen ', 'Mariano', '421.137.968-21', '02/04/1994', 'Feminino', 'Rua Maria Claudia Pedreira', '', '302', 'centro', '19.530-000', 'Caiabu', 'SP', 'Brasil', 'UNOESTE', '(18) 99758 - 0204', '', 0, 'Autor', '', 'valido somente para avaliadores', 0),
(91, '', 'danamuz.fmoraes@gmail.com', 1, '12345678', '2016-03-13 22:48:00', '', 'Sérgio ', 'Rangel Fernandes Figueira ', '128.962.758-43', '19/05/1971', 'Masculino', 'Via de Acesso Prof.Paulo Donat', '', 'sn', 'zona rural', '14.884-900', 'Jaboticabal', 'SP', 'Brasil', 'UNESP JABOTICABAL', '(16) 3209 - 7100', '', 0, 'Autor', 'professor', 'valido somente para avaliadores', 0),
(92, '82057488356e75843e136d', 'adriano_afmoraes@hotmail.com', 1, 'julia2015', '2016-03-13 22:57:00', '', 'Adriano ', 'Ferreira de Moraes', '043.593.776-65', '14/08/1980', 'Masculino', 'RUA VIRGILIO MARTINI', '', '1522', 'JARDIM MIRIAM', '37.890-000', 'MUZAMBINHO', 'MG', 'Brasil', 'UNESP JABOTICABAL', '(35) 99651 - 126', '', 2, 'Autor', 'ESTUDANTE', 'valido somente para avaliadores', 0),
(93, '', 'jb.farinelli@gmail.com', 1, 'amormarina', '2016-03-14 09:00:00', '', 'Juliana', 'Borba de Moraes Farinelli', '227.930.738-30', '31/10/1984', 'Feminino', 'Rua Dr. Rogério Orsi', '', '11', 'Monterrey', '14.887-444', 'Jaboticabal/SP', 'SP', 'Brasil', 'UNESP - FCAV', '(16) 99711 - 0214', '(16) 9711 - 0214', 0, 'Autor', 'Mestranda', 'valido somente para avaliadores', 0),
(94, '91344267056e70098edb23', 'alvesjosivan2@gmail.com', 1, 'josivan88250377', '2016-03-14 10:11:00', '', 'JOSIVAN ', 'ALVES DA SILVA', '062.612.814-59', '27/04/1987', 'Masculino', 'AV DOUTOR JOSE ADRIANO ARROBAS', 'AP 101', '630', 'JARDIM NOVA APARECIDA', '14.883-298', 'JABOTICABAL', 'SP', 'Brasil', 'UNESP', '(16) 99619 - 7459', '(85) 9862 - 1834', 2, 'Autor', 'MESTRANDO', 'valido somente para avaliadores', 0),
(95, '', 'cinthia-costa@bol.com.br', 1, 'Heloisa1*', '2016-03-14 11:44:00', '', 'Heloisa ', 'Lee Burnquist', '062.875.448-56', '08/10/1957', 'Feminino', 'Av. Centenário', '', '1080', 'são dimas', '13.416-000', 'PIracicaba', 'SP', 'Brasil', 'ESALQ/USP', '(19) 3429 - 8821', '', 0, 'Autor', 'Professora', 'valido somente para avaliadores', 0),
(96, '', 'asalgado@usp.br', 0, 'DEA123', '2016-03-14 12:36:00', '', 'Alexandre', 'Pereira Salgado Júnior', '273.854.408-86', '10/10/1980', 'Masculino', 'Avenida dos Bandeirantes,', '', '3900', 'Monte Alegre', '14.040-900', 'Ribeirão Preto', 'SP', 'Brasil', 'FEA-RP', '16997435476', '16997435476', 0, 'Autor', 'Professor Associado', 'valido somente para avaliadores', 0),
(97, '', 'nanda_coc@yahoo.com.br', 1, 'DEA123', '2016-03-14 12:40:00', '', 'Fernanda', 'Almeida Antunes', '424.727.288-83', '10/10/1995', 'Feminino', 'Avenida dos Bandeirantes,', '', '3900', 'Monte Alegre', '14.040-900', 'Ribeirão Preto', 'SP', 'Brasil', 'FEA-RP', '16997435476', '16997435476', 0, 'Autor', 'Estagiária', 'valido somente para avaliadores', 0),
(98, '', 'alexandreduar@gmail.com', 1, 'DEA123', '2016-03-14 12:42:00', '', 'Alexandre', 'de Castro Moura Duarte', '062.669.898-75', '10/10/1970', 'Masculino', 'Avenida dos Bandeirantes,', '', '3900', 'Monte Alegre', '14.040-900', 'Ribeirão Preto', 'SP', 'Brasil', 'FEA-RP', '16997435476', '16997435476', 0, 'Autor', 'PESQUISADOR', 'valido somente para avaliadores', 0),
(99, '22178336356e735bc8e122', 'crvolante@hotmail.com', 1, '1alfafa', '2016-03-14 13:39:00', '', 'Carlos Rodrigo ', 'Volante', '281.219.308-55', '01/07/1980', 'Masculino', 'Av. Carmine Tafuri', '', '446', 'Rincão', '15.900-000', 'Taquaritinga', 'SP', 'Brasil', 'UNESP', '(16) 98154 - 9679', '', 2, 'Autor', 'Aluno Mestrado', 'valido somente para avaliadores', 0),
(100, '', 'pedrowwz@yahoo.com.br', 1, '220063', '2016-03-14 13:43:00', '', 'Pedro', 'Wandscheer Zangrando', '331.809.648-20', '21/07/1995', 'Masculino', 'Alameda Angelo Curtarelli', '', '60', 'Jardim Nova Aparecida', '14.884-324', 'Jaboticabal', 'SP', 'Brasil', 'FCAV', '(16) 99717 - 2491', '', 0, 'Autor', 'Estudante', 'valido somente para avaliadores', 0),
(101, '', 'savi@itapeva.unesp.br', 1, 'marilia6', '2016-03-14 15:30:00', '', 'Antonio', 'Savi', '161.003.488-02', '08/12/1968', 'Masculino', 'Rua Geraldo Alckmin, 519', 'Campus Unesp Itapeva', '519', 'Nossa Senhora de Fátima ', '18409-010', 'Itapeva', 'SP', 'Brasil', 'UNESP Itapeva', '(15) 99635 - 6616', '1535249100', 0, 'Autor', 'Coordenador de Curso / Docente', 'valido somente para avaliadores', 0),
(102, '', 'camargo.le3@gmail.com', 1, '201020', '2016-03-14 15:33:00', '', 'Alexandre', 'Camargo da Silva', '383.767.988-80', '08/11/1992', 'Masculino', 'Campos Sales', '', '295', 'Centro ', '18400190', 'Itapeva', 'SP', 'Brasil', 'Unesp - Campus de Itapeva', '15997566923', '15997566923', 0, 'Autor', '', 'valido somente para avaliadores', 0),
(103, '195098225756e73189b7698', 'acostadani@hotmail.com', 1, '78ab374c', '2016-03-14 17:15:00', '', 'Daniela ', 'Caldas Acosta', '882.995.469-15', '26/08/1975', 'Feminino', 'TREVESSA MARFIM', '', '50', 'JARDIM VITÓRIA', '87.023-710', 'MARINGÁ', 'PR', 'Brasil', 'UEM- UNIVERSIDADE ESTADUAL DE MARINGÁ', '(44) 97157 - 347', '(44) 3023 - 5137', 2, 'Autor', '', 'valido somente para avaliadores', 0),
(104, '', 'jpsouza@uem.br', 1, 'ppa2016', '2016-03-14 17:53:00', '', 'José Paulo', 'de Souza', '464.760.679-15', '17/06/1962', 'Masculino', 'R. Santos Dumont', 'Ap 501', '1132', 'Zona 3', '87.050-100', 'Maringá', 'PR', 'Brasil', 'UEM- UNIVERSIDADE ESTADUAL DE MARINGÁ', '(44) 84070 - 708', '(44) 3031 - 0110', 0, 'Autor', 'professor associado', 'valido somente para avaliadores', 0),
(105, '', 'timoteo@tupa.unesp.br', 1, 'ts2na0', '2016-03-14 18:16:00', '', 'Timóteo', 'Ramos Queiroz', '889.421.121-53', '19/12/1979', 'Masculino', 'Rua Domingos da Costa Lopes', 'UNESP - Campus de Tupã', '780', 'Jardim UNESP', '17.602-496', 'Tupã', 'SP', 'Brasil', 'UNESP', '(14) 99134 - 2737', '(14) 3404 - 4200', 0, 'Autor e Avaliador', 'Professor Doutor', 'Economia e Finanças', 1),
(106, '199598223556e8251492e50', 'espinoza.freitas@gmail.com', 1, 'coisinha', '2016-03-14 18:16:00', '', 'Diego', 'de Freitas Espinoza', '298.410.168-50', '18/08/1981', 'Masculino', 'Rua Geriva', '', '577', 'Jardim Recreio', '14.040-300', 'Ribeirão Preto', 'SP', 'Brasil', 'FEA/RP USP', '(16) 99144 - 6088', '', 2, 'Autor', 'Universidade', 'valido somente para avaliadores', 0),
(107, '108193692956e73269699f8', 'brunonbuttenbender@gmail.com', 1, '99261318', '2016-03-14 18:47:00', '', 'BRUNO', 'BUTTENBENDER', '030.995.960-86', '15/08/1992', 'Masculino', 'helmuth carlos glufke', '101 - 1', '92', 'universitário', '95.900-000', 'Lajeado', 'RS', 'Brasil', 'UNIVATES', '+555599261318', '+555599261318', 2, 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(108, '', 'pedrolb@unijui.edu.br', 1, 'ariosto', '2016-03-14 18:48:00', '', 'ARIOSTO', 'SPAREMBERGER', '474.406.940-15', '08/03/1965', 'Masculino', 'rs 344 KM 39', '', '39', 'timbauva', '98.900-000', 'SANTA ROSA', 'RS', 'Brasil', 'UNIJUI', '(05) 59979 - 6629', '(05) 5351 - 1520', 0, 'Autor', 'Professor', 'valido somente para avaliadores', 0),
(109, '', 'rdbapt@gmail.com', 1, 'escocia', '2016-03-14 19:05:00', '', 'Renato ', 'Dias Baptista', '072.009.318-02', '13/11/1966', 'Masculino', 'Rua Raposo Tavares ', 'apto 102', '4-45 ', 'Higienópolis', '17.013-031', 'Bauru', 'SP', 'Brasil', 'UNESP', '(14) 99786 - 0910', '(14) 3404 - 4200', 0, 'Autor e Avaliador', 'Docente', 'Gestão de Pessoas e Estudos Organizacionais', 1),
(110, '', 'lucasedap.bol@hotmail.com', 1, '861992', '2016-03-14 19:09:00', '', 'Washington', ' Bruno Silva Pereira', '110.463.166-05', '17/02/1992', 'Masculino', 'RUA VIRGILIO MARTINI', '', '1522', 'JARDIM MIRIAM', '37.890-000', 'MUZAMBINHO', 'MG', 'Brasil', 'IF SUL DE MINAS', '(35) 99181 - 6653', '', 0, 'Autor', 'ESTUDANTE', 'valido somente para avaliadores', 0),
(111, '', 'lucas-aparecido@outlook.com', 1, '123456', '2016-03-14 21:10:00', '', 'Lucas', 'Eduardo de Oliveira Aparecido', '114.513.146-80', '08/06/1992', 'Masculino', 'Rua Virgilio Martini', '', '1522', 'Jardim Miriam', '37.890-000', 'Muzambinho', 'MG', 'Brasil', 'UNESP JABOTICABAL', '(35) 99816 - 4580', '', 0, 'Autor', 'Estudante', 'valido somente para avaliadores', 0),
(112, '', 'giusantini@tupa.unesp.br', 1, 'juruba14', '2016-03-14 22:23:00', '', 'Giuliana Aparecida', 'Santini Pigatto', '256.484.878-86', '14/03/1977', 'Feminino', 'ALAMEDA YORK', '', '165', 'Vila Inglesa', '17603620', 'Tupã', 'SP', 'Brasil', 'UNESP/PGAD/Tupã', '(14) 34044 - 200', '', 0, 'Autor', 'Professor Doutor', 'valido somente para avaliadores', 0),
(113, '', 'prislasf@hotmail.com', 1, 'pfranco123', '2016-03-14 22:23:00', '', 'Priscilla ', 'Souza Franco', '431.081.988-58', '25/07/1994', 'Feminino', 'Rua Professor Eulálio de Arrud', '', '43', 'Jardim Noica da Colina', '13.420-707', 'Piracicaba', 'SP', 'Brasil', 'FATEC', '(19) 98178 - 7966', '', 0, 'Autor', 'Graduada', 'valido somente para avaliadores', 0),
(114, '', 'kamila_negri@hotmail.com', 1, 'kamila1502', '2016-03-14 22:55:00', '', 'Kamila', 'Negri', '409.955.068-09', '15/02/1991', 'Feminino', 'rua dona maria', '', '380', 'pauliceia', '13.424-160', 'piracicaba', 'SP', 'Brasil', 'Semae', '(19) 99574 - 5555', '', 0, 'Autor', '', 'valido somente para avaliadores', 0),
(115, '', 'vini_bianchi@hotmail.com', 1, 'kapevi17', '2016-03-14 22:59:00', '', 'Vinicius Rafael', 'Bianchi', '277.098.668-67', '03/04/1980', 'Masculino', 'R VICENTE PELLEGRINI SAVASTANO', 'Quadra 10', '55', 'Jardim Dona Lili', '17032520', 'Bauru', 'SP', 'Brasil', 'Faculdade Anhanguera de Bauru', '14997490966', '14997490966', 0, 'Autor', 'Professor', 'valido somente para avaliadores', 0),
(116, '', 'bruh_carmignani@hotmail.com', 1, 'bruculox3371b9', '2016-03-14 23:23:00', '', 'Bruna', 'Carmignani Costa', '388.289.318-41', '13/05/1991', 'Feminino', 'Rua Luis de Camões', 'apto 31', '2687', 'Vila Monteiro', '13.418-595', 'Piracicaba', 'SP', 'Brasil', 'Merieux Nutriscience Company', '(19) 99872 - 9980', '(19) 3371 - 1802', 0, 'Autor', 'Analista de Laboratório Pleno', 'valido somente para avaliadores', 0),
(117, '', 'mgiroto@fcav.unesp.br', 1, '358295', '2016-03-15 07:18:00', '', 'Marcelo Girotto', 'Rebelato', '080.268.388-66', '01/09/1966', 'Masculino', 'r ana ramos', '', '868', 'n', '14.887-116', 'jaboticabal', 'SP', 'Brasil', 'UNESP - Faculdade de Ciências Agrárias e Veterinárias de Jaboticabal', '(16', '', 0, 'Autor e Avaliador', '', 'Sustentabilidade e Responsabilidade Sócio Ambiental', 1),
(118, '', 'sandra@tupa.unesp.br', 0, 'sco333', '2016-03-15 08:05:00', '', 'Sandra Cristina de', 'Oliveira', '261.287.458-57', '11/01/1975', 'Feminino', 'Av Domingos da Costa Lopes', '', '780', 'Jd Itaipu', '17.602-496', 'Tupã', 'SP', 'Brasil', 'Faculdade de Ciências e Engenharia / UNESP ', '(14) 99741 - 0443', '', 0, 'Autor e Avaliador', 'Professor Dr.', 'Economia e Finanças', 1),
(119, '', 'jsrod@feb.unesp.br', 1, 'flickante', '2016-03-15 09:24:00', '', 'jose de souza', 'Rodrigues', '047.233.758-05', '24/02/1964', 'Masculino', 'AV.AFFONSO JOSE AIELLO', 'C5', '14-100', 'Vila Aviação', '17018520', 'BAURU', 'SP', 'Brasil', 'UNESP', '1433138541', '1433138541', 0, 'Autor', 'PROFESSOR ADJUNTO', 'valido somente para avaliadores', 0),
(120, '', 'migueljoaoneto@hotmail.com', 1, '@licia010798', '2016-03-15 11:53:00', '', 'Miguel João Neto', 'João', '982.387.528-68', '30/05/1959', 'Masculino', 'Rua Otto Benz', '', '315', 'Ribeirania', '14.096-580', 'Ribeirão Preto', 'SP', 'Brasil', 'FMRP/USP', '(16) 98167 - 8838', '(16) 3627 - 8900', 0, 'Autor', 'Mestrando', 'valido somente para avaliadores', 0),
(121, '104652545756eb2b33a1564', 'guilherme.f.arruda@gmail.com', 1, 'gui208751', '2016-03-17 09:44:00', '', 'Guilherme', 'Fagundes de Arruda', '419.166.948-61', '06/09/1992', 'Masculino', 'Avenida Caramuru', 'ap 203 bloco 3', '3402', 'República', '14.030-000', 'Ribeirão Preto', 'SP', 'Brasil', 'Universidade de São Paulo', '(11) 99333 - 3611', '', 2, 'Autor', 'Mestrando', 'valido somente para avaliadores', 0),
(122, '', 'svgalina@usp.br', 1, 'symon10', '2016-03-17 10:56:00', '', 'Simone', 'Galina', '847.159.366-15', '25/03/1972', 'Feminino', 'Av Bandeirantes', 'Sala 37 / bloco C', '3900', 'Monte Alegre', '14.040-905', 'RIBEIRAO PRETO', 'SP', 'Brasil', 'FEA-RP / USP', '(16) 98142 - 2215', '(16) 3315 - 3094', 0, 'Autor', 'educação', 'valido somente para avaliadores', 0),
(123, '', 'figueira@fcav.unesp.br', 1, 'rangel', '2016-03-31 22:18:00', '', 'Sérgio ', 'Rangel Fernandes Figueira', '128.962.758-43', '16/05/1970', 'Masculino', 'Rua Professor Lourenço Vitta, ', 'Torre D - Apartamento 242', '105', 'nova Jaboticabal', '14.890-012', 'Jaboticabal', 'SP', 'Brasil', 'Faculdade de Ciências Agrárias e Veterinárias da UNESP de Jaboticabal', '(19) 99743 - 6596', '(16) 3209 - 7267', 0, 'Avaliador', 'Professor Assistente Doutor', 'Economia e Finanças', 1),
(124, '', 'sfagarcia_2@yahoo.com.br', 1, 'SFAG159', '2016-04-04 17:06:00', '', 'Sheila', ' Farias Alves Garcia', '088.343.388-55', '21/08/1965', 'Feminino', 'Rua Jornalista Rubens Volpi Fi', 'cond. Firenze casa 17', '885', 'Bonfim Paulista', '14.110-000', 'Ribeirão Preto', 'SP', 'Brasil', 'FCAV UNESP', '(16) 99174 - 9995', '(16) 3209 - 7268', 0, 'Avaliador', 'Docente/vice-Chefe Departamento', 'Marketing e Mercados', 1),
(125, '', 'elton@fclar.unesp.br', 1, 'Brmari009', '2016-04-04 21:17:00', '', 'Elton', 'Casagrande', '056.543.988-06', '07/09/1965', 'Masculino', 'Rodovia Araraquara - Jaú,', '', 'Km 1', 'Centro', '14.800-901', 'Araraquara - SP', 'SP', 'Brasil', 'UNESP - Faculdade de Ciências e Letras, Departamento de Economia', '(16) 99107 - 2792', '(16) 3334 - 6214', 0, 'Avaliador', 'Docente', 'Economia e Finanças', 1),
(126, '', 'andreiamarize@fcav.unesp.br', 1, '126262', '2016-04-06 11:18:00', '', 'andréia', 'rodrigues', '116.834.758-01', '17/08/1971', 'Feminino', 'rua ana ramos de carvalho', '', '868', 'Nova Jaboticabal', '14.887-116', 'jaboticabal', 'SP', 'Brasil', 'FCAV-UNESP', '(16) 98163 - 9828', '(16) 3209 - 7255', 0, 'Avaliador', 'professor assistente doutor', 'Sustentabilidade e Responsabilidade Sócio Ambiental', 1),
(127, '', 'ericaferreiramarques@gmail.com', 1, '301196', '2016-04-06 11:25:00', '', 'Erica', 'Marques', '264.655.888-03', '24/03/1976', 'Feminino', 'R. Dr. Pedro de Souza Ponde ', 'apto 401', '45', 'Jd Apipema', '40.155-270', 'Salvador', 'SP', 'Brasil', 'Instituto Federal da Bahia', '(71) 99168 - 6324', '(71) 3506 - 9082', 0, 'Avaliador', 'coordenadora do curso de Administração e docente', 'Gestão de Pessoas e Estudos Organizacionais', 1),
(128, '', 'mitie.maemura@gmail.com', 1, '270281', '2016-04-06 17:08:00', '', 'Marcia Mitie', 'Durante Maemura', '332.001.708-08', '16/08/1985', 'Feminino', 'Rua Ayrton Roxo', '', '116', 'Alto da Boa Vista', '14.025-270', 'Ribeirão Preto', 'SP', 'Brasil', 'Centro Universitário Uniseb', '(16) 99158 - 2847', '(16) 9915 - 8284', 0, 'Avaliador', 'Coordenação de curso', 'valido somente para avaliadores', 1),
(129, '', 'alessandrahf@usp.br', 1, 'Ahf@426838', '2016-04-07 11:06:00', '', 'Alessandra', 'Ferreira', '145.780.018-73', '19/01/1972', 'Feminino', 'Rua Zilda de Souza Rizzi', 'Quadra 4 Casa 10', '951', 'Jd. Interlagos', '14.093-010', 'Ribeirão Preto', 'SP', 'Brasil', 'Universidade de São Paulo - USP', '(16) 99131 - 3575', '', 0, 'Avaliador', 'Pós Doutoranda', 'Logísticas e Operações', 1),
(130, '', 'csarroyo@terra.com.br', 1, 'arroyo', '2016-04-08 12:27:00', '', 'Cristiane Sonia ', 'Arroyo', '196.424.538-94', '15/07/1969', 'Feminino', 'Rua Felipe Achê', '', '566', 'Jardim São Luiz', '14.020-420', 'Ribeirão Preto', 'SP', 'Brasil', 'Fundação Educacional de Ituverava', '(16) 98204 - 0667', '(16) 3637 - 7487', 0, 'Avaliador', 'Professora', 'Gestão de Pessoas e Estudos Organizacionais', 1),
(131, '', 'alexandredias_usp@yahoo.com.br', 1, '3748712', '2016-04-11 22:09:00', '', 'Alexandre', 'Dias', '216.928.938-07', '22/03/1983', 'Masculino', 'Rua Magda Perona Frossard', 'Ap 103', '155', 'Jardim Nova Aliança', '14.026-596', 'Ribeirão Preto', 'SP', 'Brasil', 'FEARP/USP', '(16) 99172 - 9911', '', 0, 'Avaliador', 'Aluno de doutorado', 'Empreendedorismo, Inovação e Tecnologia', 1),
(132, '', 'rafaelaltafin@hotmail.com', 1, '192643', '2016-04-13 18:06:00', '', 'Rafael ', 'Altafin Galli', '268.008.318-08', '09/08/1978', 'Masculino', 'Rua Dr. Benjamin Anderson Stau', 'apto 2001, torre 3', '777', 'Jardim Botânico', '14.021-617', 'Ribeirão Preto/SP', 'SP', 'Brasil', 'Estácio - Uniseb', '(16) 99709 - 3630', '(16) 3877 - 9769', 0, 'Avaliador', 'Professor', 'Sustentabilidade e Responsabilidade Sócio Ambiental', 1),
(133, '', 'salvini.je@gmail.com', 1, '270281', '2016-04-13 22:48:00', '', 'Jessâmine', 'Salvini', '383.474.978-85', '17/08/1989', 'Masculino', 'Rua Abraao Issa Halack', '', '980', 'Ribeirânia', '14.096-160', 'Ribeirão Preto', 'SP', 'Brasil', 'Uniseb Estácio', '(16) 98117 - 7875', '', 0, 'Avaliador', 'Coordenadora', 'Gestão de Pessoas e Estudos Organizacionais', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_correcoes`
--

CREATE TABLE IF NOT EXISTS `sl_correcoes` (
  `id_correcao` int(11) NOT NULL AUTO_INCREMENT,
  `id_trabalho` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_correcao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `sl_correcoes`
--

INSERT INTO `sl_correcoes` (`id_correcao`, `id_trabalho`, `status`) VALUES
(1, '26', '1'),
(2, '45', '1'),
(3, '64', '1'),
(4, '52', '1'),
(5, '41', '1'),
(6, '48', '1'),
(7, '60', '1'),
(8, '62', '1'),
(9, '43', '1'),
(10, '61', '1'),
(11, '55', '1'),
(12, '54', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_grupo`
--

CREATE TABLE IF NOT EXISTS `sl_grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `id_artigo` int(11) NOT NULL,
  `id_usuario1` int(11) NOT NULL,
  `id_usuario2` int(11) NOT NULL,
  `id_usuario3` int(11) NOT NULL,
  `id_usuario4` int(11) NOT NULL,
  `id_usuario5` int(11) NOT NULL,
  `id_apresentador` int(11) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=78 ;

--
-- Extraindo dados da tabela `sl_grupo`
--

INSERT INTO `sl_grupo` (`id_grupo`, `id_artigo`, `id_usuario1`, `id_usuario2`, `id_usuario3`, `id_usuario4`, `id_usuario5`, `id_apresentador`) VALUES
(22, 1, 10, 11, 12, 0, 0, 0),
(29, 2, 17, 0, 0, 0, 0, 0),
(30, 23, 33, 38, 35, 42, 0, 0),
(32, 25, 46, 48, 0, 0, 0, 0),
(33, 26, 40, 45, 41, 0, 0, 0),
(35, 28, 57, 58, 0, 0, 0, 0),
(36, 29, 57, 0, 0, 0, 0, 0),
(38, 27, 55, 68, 61, 62, 0, 0),
(41, 34, 51, 67, 52, 0, 0, 0),
(43, 36, 63, 51, 52, 65, 0, 0),
(45, 38, 19, 9, 0, 0, 0, 0),
(48, 41, 86, 73, 88, 0, 0, 0),
(51, 43, 89, 90, 52, 51, 0, 0),
(52, 45, 87, 66, 81, 71, 0, 0),
(54, 47, 85, 71, 81, 91, 92, 0),
(55, 48, 50, 0, 0, 0, 0, 0),
(56, 49, 50, 95, 0, 0, 0, 0),
(57, 50, 47, 77, 76, 53, 54, 0),
(58, 51, 94, 9, 0, 0, 0, 0),
(59, 52, 57, 101, 102, 0, 0, 0),
(60, 53, 66, 87, 71, 81, 0, 0),
(61, 54, 87, 84, 66, 0, 0, 0),
(62, 55, 103, 104, 0, 0, 0, 0),
(63, 56, 80, 96, 98, 97, 0, 0),
(64, 57, 107, 72, 108, 0, 0, 0),
(65, 58, 99, 61, 0, 0, 0, 0),
(66, 59, 92, 85, 110, 111, 0, 0),
(67, 60, 92, 85, 0, 0, 0, 0),
(69, 62, 59, 113, 0, 0, 0, 0),
(70, 63, 33, 34, 36, 39, 0, 0),
(71, 64, 74, 57, 0, 0, 0, 0),
(72, 61, 59, 114, 116, 0, 0, 0),
(73, 66, 34, 105, 112, 0, 0, 0),
(74, 67, 106, 64, 120, 0, 0, 0),
(75, 68, 121, 122, 0, 0, 0, 0),
(76, 35, 69, 0, 0, 0, 0, 69),
(77, 37, 51, 0, 0, 0, 0, 51);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_notas`
--

CREATE TABLE IF NOT EXISTS `sl_notas` (
  `id_artigo` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `nota4` float NOT NULL,
  `nota5` float NOT NULL,
  `nota6` float NOT NULL,
  `nota7` float NOT NULL,
  `nota8` float NOT NULL,
  `nota9` float NOT NULL,
  `nota10` float NOT NULL,
  `notafinal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sl_notas`
--

INSERT INTO `sl_notas` (`id_artigo`, `email`, `nota1`, `nota2`, `nota3`, `nota4`, `nota5`, `nota6`, `nota7`, `nota8`, `nota9`, `nota10`, `notafinal`) VALUES
(1, 'rbkalaki@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'fer.yamauchi@gmail.com', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(68, 'guilherme.f.arruda@gmail.com', 5, 4, 4, 3, 4, 3, 3, 4, 4, 4, 3.8),
(2, 'adriano.fuzaro@ifgoiano.edu.br', 5, 4, 4, 4, 3, 3, 3, 3, 5, 4, 3.66667),
(25, 'jh.eustachio@gmail.com', 5, 5, 5, 5, 4, 4, 4, 4, 5, 4, 4.4),
(26, 'gabica14@hotmail.com', 5, 5, 5, 5, 4, 4, 4, 5, 5, 4, 4.53333),
(27, 'daltro_cella@yahoo.com.br', 5, 5, 5, 4, 2, 3, 3, 4, 5, 3, 3.73333),
(28, 'glaucia@itapeva.unesp.br', 5, 5, 5, 4, 4, 3, 3, 4, 5, 3, 4),
(29, 'glaucia@itapeva.unesp.br', 5, 5, 5, 4, 4, 4, 4, 5, 5, 5, 4.6),
(34, 'bertoncelloag@hotmail.com', 5, 5, 4, 4, 4, 4, 3, 5, 5, 3, 4.13333),
(35, 'rosana@cambuhy.com.br', 5, 4, 4, 4, 4, 3, 3, 4, 5, 3, 3.8),
(36, 'fabiosfc1@hotmail.com', 5, 4, 4, 4, 4, 4, 3, 4, 2, 3, 3.73333),
(37, 'bertoncelloag@hotmail.com', 5, 3, 4, 4, 4, 4, 3, 4, 5, 3, 3.86667),
(38, 'arthurgsilveira1@gmail.com', 5, 4, 4, 4, 4, 4, 4, 3, 4, 3, 3.8),
(41, 'ronaldopazini@hotmail.com', 5, 3, 3, 3, 3, 3, 3, 3, 4, 4, 3.33333),
(43, 'caio_inde@terra.com.br', 5, 4, 4, 4, 4, 4, 3, 4, 1, 4, 3.8),
(45, 'andre.gustavo21@terra.com.br', 5, 4, 4, 3, 3, 3, 3, 4, 5, 3, 3.6),
(47, 'adriana_fmoraes@hotmail.com', 5, 4, 4, 4, 3, 3, 3, 4, 5, 3, 3.66667),
(48, 'cinthia.costa@embrapa.br', 3, 4, 4, 3, 3, 4, 3, 4, 5, 3, 3.6),
(49, 'cinthia.costa@embrapa.br', 5, 5, 5, 2, 3, 4, 3, 5, 5, 3, 4),
(51, 'alvesjosivan2@gmail.com', 5, 5, 4, 4, 3, 3, 4, 4, 5, 3, 3.8),
(52, 'glaucia@itapeva.unesp.br', 5, 4, 4, 3, 3, 3, 3, 4, 5, 3, 3.6),
(53, 'bruna.sousaferreira@gmail.com', 5, 5, 4, 4, 4, 4, 4, 5, 5, 3, 4.2),
(54, 'andre.gustavo21@terra.com.br', 5, 3, 3, 3, 3, 3, 3, 4, 4, 3, 3.33333),
(55, 'acostadani@hotmail.com', 4, 4, 4, 4, 4, 4, 4, 5, 5, 3, 4.06667),
(56, 'svlemos@yahoo.com.br', 5, 4, 4, 4, 3, 3, 4, 5, 5, 3, 3.86667),
(57, 'brunonbuttenbender@gmail.com', 5, 5, 4, 4, 4, 4, 4, 4, 5, 3, 4.06667),
(58, 'crvolante@hotmail.com', 5, 3, 3, 3, 3, 2, 2, 3, 4, 3, 3),
(59, 'adriano_afmoraes@hotmail.com', 5, 4, 4, 3, 3, 4, 3, 3, 5, 3, 3.6),
(60, 'adriano_afmoraes@hotmail.com', 5, 4, 4, 3, 3, 4, 3, 4, 5, 3, 3.73333),
(61, 'chfcunha@gmail.com', 4, 4, 4, 4, 4, 4, 3, 4, 0, 3, 3.53333),
(62, 'chfcunha@gmail.com', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(63, 'fer.yamauchi@gmail.com', 4, 4, 4, 4, 4, 3, 3, 4, 5, 3, 3.73333),
(64, 'jheny_crys@hotmail.com', 4, 4, 4, 4, 4, 4, 3, 4, 5, 3, 3.86667),
(66, 'danielerpimentel@gmail.com', 3, 3, 3, 3, 3, 3, 3, 3, 5, 3, 3.13333),
(67, 'espinoza.freitas@gmail.com', 4, 4, 3, 3, 3, 3, 3, 4, 4, 3, 3.33333);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_notas2`
--

CREATE TABLE IF NOT EXISTS `sl_notas2` (
  `id_artigo` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `nota4` float NOT NULL,
  `nota5` float NOT NULL,
  `nota6` float NOT NULL,
  `nota7` float NOT NULL,
  `nota8` float NOT NULL,
  `nota9` float NOT NULL,
  `nota10` float NOT NULL,
  `notafinal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sl_notas2`
--

INSERT INTO `sl_notas2` (`id_artigo`, `email`, `nota1`, `nota2`, `nota3`, `nota4`, `nota5`, `nota6`, `nota7`, `nota8`, `nota9`, `nota10`, `notafinal`) VALUES
(2, 'adriano.fuzaro@ifgoiano.edu.br', 4, 4, 5, 3, 4, 3, 3, 4, 5, 5, 4.06667),
(25, 'jh.eustachio@gmail.com', 5, 4, 5, 4, 4, 3, 4, 4, 5, 4, 4.13333),
(27, 'daltro_cella@yahoo.com.br', 5, 5, 5, 5, 3, 3, 4, 5, 5, 5, 4.4),
(62, 'chfcunha@gmail.com', 4, 0, 0, 0, 0, 3, 3, 4, 4, 2, 1.93333),
(36, 'fabiosfc1@hotmail.com', 5, 0, 4, 3, 4, 5, 4, 0, 2, 3, 3.06667),
(61, 'chfcunha@gmail.com', 5, 4, 5, 5, 5, 5, 4, 5, 5, 4, 4.73333),
(29, 'glaucia@itapeva.unesp.br', 5, 4, 4, 3, 4, 5, 5, 5, 5, 3, 4.26667),
(56, 'svlemos@yahoo.com.br', 5, 5, 5, 4, 5, 5, 4, 4, 5, 4, 4.6),
(66, 'danielerpimentel@gmail.com', 4, 4, 5, 5, 4, 4, 4, 4, 5, 4, 4.26667),
(57, 'brunonbuttenbender@gmail.com', 5, 2, 2, 1, 2, 1, 0, 2, 2, 0, 1.6),
(35, 'rosana@cambuhy.com.br', 5, 5, 0, 0, 5, 0, 5, 5, 4, 0, 2.6),
(58, 'crvolante@hotmail.com', 4, 0, 5, 0, 0, 0, 0, 5, 0, 5, 2.26667),
(60, 'adriano_afmoraes@hotmail.com', 0, 0, 3, 4, 0, 0, 1, 5, 3, 5, 2.26667),
(64, 'jheny_crys@hotmail.com', 5, 5, 1, 1, 4, 0, 1, 0, 1, 4, 2.06667),
(26, 'gabica14@hotmail.com', 4, 4, 3, 4, 4, 3, 3, 3, 3, 4, 3.46667),
(41, 'ronaldopazini@hotmail.com', 3, 4, 3, 3, 3, 3, 3, 3, 3, 4, 3.2),
(67, 'espinoza.freitas@gmail.com', 3, 4, 4, 4, 3, 3, 3, 3, 3, 4, 3.4),
(68, 'guilherme.f.arruda@gmail.com', 4, 4, 4, 4, 4, 3, 3, 3, 3, 4, 3.6),
(28, 'glaucia@itapeva.unesp.br', 3, 3, 4, 3, 3, 3, 3, 4, 3, 3, 3.26667),
(52, 'glaucia@itapeva.unesp.br', 5, 4, 2, 4, 3, 5, 3, 3, 3, 5, 3.66667),
(53, 'bruna.sousaferreira@gmail.com', 5, 3, 5, 4, 4, 5, 4, 5, 4, 5, 4.53333),
(37, 'bertoncelloag@hotmail.com', 3, 3, 3, 2, 3, 3, 3, 3, 3, 3, 2.93333),
(34, 'bertoncelloag@hotmail.com', 3, 3, 3, 2, 4, 4, 3, 3, 3, 3, 3.2),
(43, 'caio_inde@terra.com.br', 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2.8),
(55, 'acostadani@hotmail.com', 4, 5, 4, 5, 4, 5, 5, 4, 4, 4, 4.33333),
(1, 'rbkalaki@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'andre.gustavo21@terra.com.br', 4, 4, 3, 2, 5, 3, 3, 5, 5, 4, 3.86667),
(51, 'alvesjosivan2@gmail.com', 5, 5, 4, 4, 5, 3, 3, 5, 5, 3, 4.13333),
(54, 'andre.gustavo21@terra.com.br', 4, 4, 3, 3, 4, 3, 3, 3, 5, 3, 3.4),
(49, 'cinthia.costa@embrapa.br', 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3.8),
(47, 'adriana_fmoraes@hotmail.com', 5, 5, 3, 5, 4, 4, 3, 4, 5, 4, 4.06667),
(59, 'adriano_afmoraes@hotmail.com', 4, 4, 4, 4, 3, 3, 3, 3, 3, 3, 3.33333),
(38, 'arthurgsilveira1@gmail.com', 3, 2, 3, 4, 5, 4, 4, 4, 4, 4, 3.8),
(48, 'cinthia.costa@embrapa.br', 4, 5, 4, 5, 4, 4, 4, 5, 4, 5, 4.4),
(23, 'fer.yamauchi@gmail.com', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(63, 'fer.yamauchi@gmail.com', 3, 3, 4, 4, 4, 3, 3, 3, 3, 4, 3.46667);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_status`
--

CREATE TABLE IF NOT EXISTS `sl_status` (
  `id_artigo` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `publicado` int(11) NOT NULL,
  `emailverificado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_trabcorrigido`
--

CREATE TABLE IF NOT EXISTS `sl_trabcorrigido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_arquivo` int(11) NOT NULL,
  `enviado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `sl_trabcorrigido`
--

INSERT INTO `sl_trabcorrigido` (`id`, `id_arquivo`, `enviado`) VALUES
(1, 26, 1),
(2, 54, 1),
(3, 45, 1),
(4, 64, 1),
(5, 41, 1),
(6, 60, 1),
(7, 43, 1),
(8, 55, 1),
(9, 48, 1),
(10, 61, 1),
(11, 62, 1),
(12, 52, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
