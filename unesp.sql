-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2016 às 22:10
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
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `sl_adm`
--

INSERT INTO `sl_adm` (`id_adm`, `criado`, `nome`, `email`, `senha`) VALUES
(18, '2016-01-12 19:34:00', 'marlon', 'marlu_tcu@hotmail.com', '123'),
(19, '2016-01-12 23:05:00', 'Anderson Lima', 'littletape@gmail.com', '4321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_artigo`
--

CREATE TABLE IF NOT EXISTS `sl_artigo` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `criado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumo` varchar(2400) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `coautor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apresentacao` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idartigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_artigo`),
  UNIQUE KEY `id` (`id_artigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=272 ;

--
-- Extraindo dados da tabela `sl_artigo`
--

INSERT INTO `sl_artigo` (`id_artigo`, `criado`, `titulo`, `resumo`, `area`, `coautor`, `apresentacao`, `orientador`, `descricao`, `categoria`, `idartigo`, `email`) VALUES
(267, '', 'teste de funcionamento do sitema', 'A contribuição é original e inédita, e não está sendo avaliada para publicação por outro evento e/ou revista científica simultaneamente.A versão submetida é definitiva, não sendo permitida a substituição do trabalho em nenhuma hipótese.O arquivo submetido está no formato PDF e em total em aderência às normas dispostas no manual de submissão.O arquivo submetido está destituído de qualquer tipo de informação que possa identificar os autores.O trabalho está submetido a uma única área temática do evento e inscrito em uma única modalidade (artigo, relato técnico ou resumo expandido).O número de autores do trabalho não ultrapassa cinco (05) pessoas. A contagem do número de trabalhos não distingue autoria. É proibida a inclusão/exclusão/alteração de autores após a submissão do trabalho.Os trabalhos que envolvem pesquisas com seres humanos estão acompanhados da cópia do parecer do Comitê de Ética e Pesquisa (CEP) ao qual o respectivo trabalho foi submetido. O parecer deve ser anexado no campo "documento suplementar".IMPORTANTE: As submissões que não estiverem de acordo com os respectivos itens serão automaticamente desclassificadas e devolvidas aos autores.', 'Gestão de Pessoas e ', '4', 'Resumo Exp', 'teste', 'teste', 'Resumo Expandido', '21931564cd5caf0abd', 'novoteste@hotmail.com'),
(268, '', 'sdfsdf', 'sdfsdf', 'Gestão de Pessoas e ', '0', 'Resumo Exp', 'sdfsdf', 'sdfsdf', 'Resumo Expandido', '17416564d2a97c8e11', 'marlu_tcu@hotmail.com'),
(269, '', 'teste', 'teste', 'Gestão de Pessoas e ', '4', 'Resumo Exp', 'teste', 'teste', 'Resumo Expandido', '10961564dc42d4d69c', 'misael@gmail.com'),
(270, '', 'sdsdf', 'dfsdfsd', 'Gestão de Pessoas e ', '3', 'Resumo Exp', 'sdfsdf', 'sdfsdf', 'Resumo Expandido', '17790564dc514e8dd6', 'misael@gmail.com'),
(271, '', 'teste de inserção no firefox', 'sdfsdfsdf', 'Gestão de Pessoas e ', '4', 'Resumo Exp', 'sdsfsdfsdf', 'sdfsdfsdfsdfsdf', 'Resumo Expandido', '19910564dda336adc5', 'd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_avaliador`
--

CREATE TABLE IF NOT EXISTS `sl_avaliador` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `cidade` text NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `contato` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sl_avaliador`
--

INSERT INTO `sl_avaliador` (`idusuario`, `nome`, `cidade`, `endereco`, `cargo`, `instituicao`, `telefone`, `contato`, `email`, `status`) VALUES
(1, 'marlon', 'taiaçu', 'r orlindod e bages', 'aluno', 'faculdade sao luis', '(16) 99336 - 1826', '(16) 3275 - 7565', 'marlu_tcu@hotmail.com', 1),
(2, 'Dilma', 'Brazilia', 'Pavilhão', 'Chefa', 'PT', '(13) 91313 - 1313', '', 'Dilma@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_cadusu`
--

CREATE TABLE IF NOT EXISTS `sl_cadusu` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `criado` datetime NOT NULL,
  `modificado` varchar(10) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sobrenome` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nascimento` varchar(10) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pais` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(15) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(30) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(3) CHARACTER SET latin1 NOT NULL,
  `instituicao` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `contato` varchar(15) CHARACTER SET latin1 NOT NULL,
  `emailverificado` int(11) NOT NULL,
  `publicado` int(11) NOT NULL,
  `idartigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipocadastro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=124 ;

--
-- Extraindo dados da tabela `sl_cadusu`
--

INSERT INTO `sl_cadusu` (`id_usuario`, `criado`, `modificado`, `senha`, `nome`, `sobrenome`, `nascimento`, `sexo`, `pais`, `email`, `cpf`, `endereco`, `cidade`, `estado`, `instituicao`, `telefone`, `contato`, `emailverificado`, `publicado`, `idartigo`, `numero`, `complemento`, `cep`, `bairro`, `tipocadastro`, `cargo`) VALUES
(102, '2015-11-10 15:18:00', '', '123', 'marlon', 'santos', '07/08/1995', 'Masculino', 'Não', 'marlu_tcu@hotmail.com', '434.208.668-95', 'r: orlindo de bages ', 'taiaçu', 'SP', 'FELS', '(16) 99336 - 18', '(16) 3275 - 756', 1, 2, '17416564d2a97c8e11', '406', 'casa', '14.725-000', 'bela vista', 'Academico', ''),
(103, '2015-11-12 00:26:00', '', '1234', 'josé', 'silva', '07/09/1993', 'Masculino', 'Não', 'teste@hotmail.com', '123.456.789', 'teste', 'teste', 'SP', 'teste', '(11) 11111 - 11', '(11) 1111 - 111', 1, 1, '', '123', 'casa', '14.725-000', 'teste', 'Academico', ''),
(104, '2015-11-12 12:22:00', '', '1234', 'alipio', 'silva', '02/08/1993', 'Masculino', 'Arg', 'teste2@gmail.com', '123.456.789-12', 'teste', 'taiaçu', 'SP', 'teste', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '10303564b23df18ae0', 'se', 'casa', '11.111-111', 'teste', 'Academico', ''),
(105, '2015-11-17 00:04:00', '', 'a', 'a', 'a', '07/08/1995', 'Masculino', 'Bra', 'a', '111.111.111-11', 'a', 'a', 'SP', 'a', '(11) 11111 - 11', '(11) 1111 - 111', 1, 1, '25679564a704061639', 'a', 'a', '11.111-111', 'a', 'Academico', ''),
(106, '2015-11-17 14:20:00', '', 'b', 'b', 'b', '07/08/1995', 'Masculino', 'Bra', 'b', '333.333.333-33', 'v', 'v', 'SP', 'b', '(11) 11111 - 11', '(11) 1111 - 111', 1, 0, '', 'v', 'v', '55.555-555', 'b', 'Academico', ''),
(107, '2015-11-17 21:02:00', '', 's', 's', 's', '07/08/1995', 'Masculino', '', 's', '555.555.555-55', 's', 's', 'SP', 's', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '25169564b962c6d499', 's', 's', '11.111-111', 's', 'Academico', ''),
(108, '2015-11-17 21:06:00', '', '123', 'teste', 'yahoo', '13/11/1994', 'Masculino', '', 'teste@yahoo.com', '427.666.978-29', 'endereco teste', 'guariba', 'PI', 'instituicao', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '15030564b97a0c9ec4', '1', 'casa', '14.840-000', 'gomes', 'Academico', ''),
(109, '2015-11-17 21:36:00', '', 'h', 'h', 'h', '07/08/1995', 'Masculino', '', 'h', '222.222.222-22', 'h', 'h', 'SP', 'h', '(11) 11111 - 11', '(11) 1111 - 111', 1, 1, '', 'h', 'h', '11.111-111', 'h', 'Academico', 'teste de argo'),
(110, '2015-11-17 23:33:00', '', 't', 't', 't', '07/08/1995', 'Masculino', 'Bra', 't', '999.999.999-99', 't', 't', 'SP', 't', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '5012564bb9f517f11', 't', 't', '11.111-111', 't', 'Academico', 'teste cargo'),
(111, '2015-11-17 23:45:00', '', '1234', 'Anderson', 'Cardoso Lima', '08/04/1989', 'Masculino', 'Bra', 'littletape@gmail.com', '381.212.218-97', 'Rua marginal José Krumpos', 'barrinha', 'SP', 'sadsdsaddsasd', '(11) 11111 - 11', '', 1, 1, '', '837', 'casa', '14.860-000', 'Jardim José Bombonato', 'Academico', 'dadsadasdasdasd'),
(112, '2015-11-17 23:51:00', '', '1234567', 'Jose Luiz', 'Oliveira', '24/01/1985', 'Masculino', 'Bra', 'joseluiz@bigtech.com.br', '321.461.468-18', 'Rua Joaquim Moleiro', 'Pradópolis', 'SP', 'faculdade sao luis', '(16) 99260 - 51', '', 1, 2, '29544564bbfa6adf06', '520', '', '14.850-000', 'jardim Bela Vista', 'Academico', 'Gerente'),
(113, '2015-11-18 00:39:00', '', 'hoje0000', 'roseli', 'silva', '18/05/1995', 'Feminino', 'Bra', 'roselisiilva.rs', '443.872.653-94', 'rua rosa', 'taiaçu', 'SP', 'faculdade sao luis', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '1633564bca64b85eb', '12', '', '11.111-111', 'bela vista', 'Estudante', 'www'),
(114, '2015-11-18 19:45:00', '', '1234', 'teste', 'teste', '07/08/1995', 'Masculino', 'Bra', 'novoteste@hotmail.com', '098.765.432-12', 'teste', 'teste', 'SP', 'teste', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '21931564cd5caf0abd', '12', '', '11.111-111', 'teste', 'Academico', 'teste'),
(121, '2015-11-19 14:14:00', '', 'd', 'd', 'd', '07/08/1995', 'Masculino', 'Bra', 'd', '178.687.678-68', 'd', 'd', 'SP', 'd', '(11) 11111 - 11', '(11) 1111 - 111', 1, 2, '19910564dda336adc5', 'd', 'd', '11.111-111', 'd', 'Academico', 'd'),
(122, '2015-11-19 15:58:00', '', 'm', 'm', 'm', '07/08/1995', 'Masculino', 'Bra', 'm', '121.212.121-21', 'm', 'm', 'SP', 'm', '(11) 11111 - 11', '(11111111111111', 1, 0, '', 'm', 'm', '11.111-111', 'm', 'Academico', 'm'),
(123, '2016-01-12 23:13:00', '', '1234', 'Dilma', 'PresidANTA', '11/11/1950', 'Masculino', 'Bra', 'Dilma@gmail.com', '171.171.171-17', 'Pavilhão', 'Brazilia', 'SP', 'PT', '(13) 91313 - 13', '', 1, 0, '', '13', 'Cela 13', '13.131-313', 'Carandiru', 'Avaliador', 'Chefa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_coautor`
--

CREATE TABLE IF NOT EXISTS `sl_coautor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` text COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
  `autorprincipal` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `sl_coautor`
--

INSERT INTO `sl_coautor` (`id`, `nome`, `sobrenome`, `cpf`, `autorprincipal`) VALUES
(44, 'coautor 1', 'scoautor 1', '12345678912', 'marlu_tcu@hotmail.com'),
(45, 'coautor2', 'scoautor2', '1234567812', 'marlu_tcu@hotmail.com'),
(46, 'marlon', 'santos', '434.208.668-95', 'teste2@gmail.com'),
(47, 'josé', 'silva', '123.456.789', 'teste2@gmail.com'),
(48, 'josé', 'silva', '123.456.789', 'marlu_tcu@hotmail.com'),
(49, 'marlon', 'santos', '434.208.668-95', 'marlu_tcu@hotmail.com'),
(50, 'josé', 'silva', '123.456.789', 'marlu_tcu@hotmail.com'),
(51, 'alipio', 'silva', '123.456.789-12', 'marlu_tcu@hotmail.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `sl_grupo`
--

INSERT INTO `sl_grupo` (`id_grupo`, `id_artigo`, `id_usuario1`, `id_usuario2`, `id_usuario3`, `id_usuario4`, `id_usuario5`, `id_apresentador`) VALUES
(35, 267, 114, 105, 109, 106, 102, 0),
(36, 268, 102, 0, 0, 0, 0, 0),
(38, 270, 115, 105, 109, 106, 0, 0),
(39, 271, 121, 105, 109, 106, 102, 0);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
