-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Fev-2016 às 23:21
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sl_adm`
--

INSERT INTO `sl_adm` (`id_adm`, `criado`, `nome`, `email`, `senha`) VALUES
(1, '2016-02-05 11:03:00', 'Anderson', 'littletape@gmail.com', '4321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_artigo`
--

CREATE TABLE IF NOT EXISTS `sl_artigo` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `id_avaliador1` int(11) NOT NULL,
  `id_avaliador2` int(11) NOT NULL,
  `instituicao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `sl_artigo`
--

INSERT INTO `sl_artigo` (`id_artigo`, `id_avaliador1`, `id_avaliador2`, `instituicao`, `criado`, `titulo`, `resumo`, `area`, `coautor`, `apresentacao`, `orientador`, `descricao`, `categoria`, `idartigo`, `email`) VALUES
(1, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp1', 'Testeusp1', 'Gestão de Pessoas e ', '4', 'Pôster', 'Orientador 1', 'teste', 'Resumo Expandido', '', 'testeusp1@usp.com'),
(2, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp2', 'Testeusp2', 'Desenvolvimento e Ge', '4', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeusp1@usp.com'),
(3, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp3', 'Testeusp3', 'Economia e Finanças', '4', 'Oral', 'Orientador 1', 'Teste', 'Artigo Completo', '', 'testeusp1@usp.com'),
(4, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp4', 'Testeusp4', 'Empreendedorismo, In', '4', 'Pôster', 'Orientador 1', 'Teste', 'Resumo Expandido', '', 'testeusp1@usp.com'),
(5, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp5', 'Testeusp5', 'Estratégia, Planejam', '4', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeusp1@usp.com'),
(6, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp6', 'Testeusp6', 'Logísticas e Operaçõ', '3', 'Oral', 'Orientador 1', 'Teste', 'Artigo Completo', '', 'testeusp6@usp.com'),
(7, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp7', 'Testeusp7', 'Marketing e Mercados', '3', 'Pôster', 'Orientador 1', 'Teste', 'Resumo Expandido', '', 'testeusp6@usp.com'),
(8, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp8', 'Testeusp8', 'Sustentabilidade e R', '3', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeusp6@usp.com'),
(9, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp9', 'Testeusp9', 'Gestão de Pessoas e ', '3', 'Pôster', 'Orientador 1', 'Teste', 'Resumo Expandido', '', 'testeusp6@usp.com'),
(10, 0, 0, 'USP - Universidade de São Paulo', '', 'Testeusp10', 'Testeusp10', 'Gestão de Pessoas e ', '3', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeusp6@usp.com'),
(11, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac1', 'Testeuac1', 'Gestão de Pessoas e ', '4', 'Pôster', 'Orientador 1', 'Teste', 'Resumo Expandido', '', 'testeuac1@uac.com'),
(12, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac2', 'Testeuac2', 'Desenvolvimento e Ge', '4', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeuac1@uac.com'),
(13, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac3', 'Testeuac3', 'Economia e Finanças', '4', 'Oral', 'Orientador 1', 'Teste', 'Artigo Completo', '', 'testeuac1@uac.com'),
(14, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac4', 'Testeuac4', 'Empreendedorismo, In', '4', 'Pôster', 'Orientador 1', 'Teste', 'Resumo Expandido', '', 'testeuac1@uac.com'),
(15, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac5', 'Testeuac5', 'Logísticas e Operaçõ', '4', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeuac1@uac.com'),
(16, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac6', 'Testeuac6', 'Logísticas e Operaçõ', '3', 'Oral', 'Orientador 1', 'Teste', 'Artigo Completo', '', 'testeuac6@uac.com'),
(17, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac7', 'Testeuac7', 'Marketing e Mercados', '3', 'Pôster', 'Orientador 1', 'Teste', 'Resumo Expandido', '', 'testeuac6@uac.com'),
(18, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac8', 'Testeuac8', 'Sustentabilidade e R', '3', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeuac6@uac.com'),
(19, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac9', 'Testeuac9', 'Gestão de Pessoas e ', '3', 'Oral', 'Orientador 1', 'Teste', 'Artigo Completo', '', 'testeuac6@uac.com'),
(20, 0, 0, 'UAC - Universidade do Acre', '', 'Testeuac10', 'Testeuac10', 'Desenvolvimento e Ge', '3', 'Oral', 'Orientador 1', 'Teste', 'Relato Técnico', '', 'testeuac6@uac.com'),
(21, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc1', 'Testeusc1', 'Gestão de Pessoas e ', '4', 'Pôster', 'Orientador 2', 'Teste', 'Resumo Expandido', '', 'testeusc1@usc.com'),
(22, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc2', 'Testeusc2', 'Desenvolvimento e Ge', '4', 'Oral', 'Orientador 2', 'Teste', 'Relato Técnico', '', 'testeusc1@usc.com'),
(23, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc3', 'Testeusc3', 'Economia e Finanças', '4', 'Oral', 'Orientador 2', 'Teste', 'Artigo Completo', '', 'testeusc1@usc.com'),
(24, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc4', 'Testeusc4', 'Estratégia, Planejam', '4', 'Pôster', 'Orientador 2', 'Teste', 'Resumo Expandido', '', 'testeusc1@usc.com'),
(25, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc5', 'Testeusc5', 'Logísticas e Operaçõ', '4', 'Oral', 'Orientador 2', 'Teste', 'Relato Técnico', '', 'testeusc1@usc.com'),
(26, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc6', 'Testeusc6', 'Marketing e Mercados', '3', 'Oral', 'Orientador 2', 'Teste', 'Artigo Completo', '', 'testeusc6@usc.com'),
(27, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc7', 'Testeusc7', 'Marketing e Mercados', '3', 'Pôster', 'Orientador 2', 'Teste', 'Resumo Expandido', '', 'testeusc6@usc.com'),
(28, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc8', 'Testeusc8', 'Sustentabilidade e R', '3', 'Oral', 'Orientador 2', 'Teste', 'Relato Técnico', '', 'testeusc6@usc.com'),
(29, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc9', 'Testeusc9', 'Gestão de Pessoas e ', '3', 'Oral', 'Orientador 2', 'Teste', 'Artigo Completo', '', 'testeusc6@usc.com'),
(30, 0, 0, 'USC - Universidade de Santa Catarina', '', 'Testeusc10', 'Testeusc10', 'Desenvolvimento e Ge', '3', 'Pôster', 'Orientador 2', 'Teste', 'Resumo Expandido', '', 'testeusc6@usc.com');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `sl_avaliador`
--

INSERT INTO `sl_avaliador` (`idusuario`, `nome`, `cidade`, `endereco`, `cargo`, `instituicao`, `telefone`, `contato`, `email`, `status`) VALUES
(1, 'Avaliadorusp', 'Testeusp0', 'Teste', 'Professor Mestrado', 'USP - Universidade de São Paulo', '(11) 11111 - 1110', '', 'avaliadorusp@usp.com', 0),
(2, 'Avaliadoruac', 'Testeuac0', 'Teste', 'Professor Mestrado', 'UAC - Universidade do Acre', '(11) 11111 - 1120', '', 'avaliadoruac@uac.com', 0),
(3, 'Avaliadorusc', 'Avaliadorusc', 'Teste', 'Professor Mestrado', 'USC - Universidade de Santa Catarina', '(11) 11111 - 1130', '', 'avaliadorusc@usc.com', 0),
(4, 'Avaliadorudf', 'Avaliadorudf', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1140', '', 'avaliadorudf@udf.com', 0),
(5, 'Avaliadorudf2', 'Avaliadorudf0', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1151', '', 'avaliadorudf2@udf.com', 0),
(6, 'Avaliadorudf3', 'Avaliadorudf3', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1153', '', 'avaliadorudf3@udf.com', 0),
(7, 'Avaliadorudf4', 'Avaliadorudf4', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1154', '', 'avaliadorudf4@udf.com', 0),
(8, 'Avaliadorudf', 'Avaliadorudf5', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1155', '', 'avaliadorudf5@udf.com', 0),
(9, 'Avaliadorudf6', 'Avaliadorudf6', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1156', '', 'avaliadorudF6@udf.com', 0),
(10, 'Avaliadorudf7', 'Avaliadorudf7', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1157', '', 'avaliadorudf7@udf.com', 0),
(11, 'Avaliadorudf8', 'Avaliadorudf8', 'Teste', 'Professor mestrado', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 1159', '', 'avaliadorudf8@udf.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_cadusu`
--

CREATE TABLE IF NOT EXISTS `sl_cadusu` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `criado` datetime NOT NULL,
  `modificado` varchar(10) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
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
  `arearesp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `sl_cadusu`
--

INSERT INTO `sl_cadusu` (`id_usuario`, `criado`, `modificado`, `senha`, `nome`, `sobrenome`, `nascimento`, `sexo`, `pais`, `email`, `cpf`, `endereco`, `cidade`, `estado`, `instituicao`, `telefone`, `contato`, `emailverificado`, `publicado`, `idartigo`, `numero`, `complemento`, `cep`, `bairro`, `tipocadastro`, `cargo`, `arearesp`, `status`) VALUES
(1, '2016-02-05 14:07:00', '', '123', 'Testeusp1', 'Usp1', '11/11/1991', 'Masculino', 'Bra', 'testeusp1@usp.com', '111.111.111-11', 'Teste', 'Testeusp1', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 1, '', '111', '', '11.111-111', 'Testeusp1', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(2, '2016-02-05 14:11:00', '', '123', 'Testeusp2', 'Usp2', '11/11/1991', 'Masculino', 'Bra', 'testeusp2@usp.com', '111.111.111-12', 'Teste', 'Testeusp2', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-112', 'Testeusp2', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(3, '2016-02-05 14:15:00', '', '123', 'Testeusp3', 'Usp3', '11/11/1991', 'Masculino', 'Bra', 'testeusp3@usp.com', '111.111.111-13', 'Teste', 'Testeusp3', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-113', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(4, '2016-02-05 14:24:00', '', '123', 'Testeusp4', 'Usp4', '11/11/1991', 'Masculino', 'Bra', 'testeusp4@usp.com', '111.111.111-14', 'Teste', 'Testeusp4', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-114', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(5, '2016-02-05 14:27:00', '', '123', 'Testeusp5', 'Usp5', '11/11/1991', 'Masculino', 'Bra', 'testeusp5@usp.com', '111.111.111-15', 'Teste', 'Testeusp5', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-115', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(6, '2016-02-05 14:29:00', '', '123', 'Testeusp6', 'Usp6', '11/11/1991', 'Masculino', 'Bra', 'testeusp6@usp.com', '111.111.111-16', 'Teste', 'Testeusp6', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 1, '', '111', '', '11.111-116', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(7, '2016-02-05 14:41:00', '', '123', 'Testeusp7', 'Usp7', '11/11/1991', 'Masculino', 'Bra', 'testeusp7@usp.com', '111.111.111-17', 'Teste', 'Testeusp7', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-117', 'Teste', 'Autor', 'Teste', 'valido somente para avaliadores', 0),
(8, '2016-02-05 14:43:00', '', '123', 'Testeusp8', 'Usp8', '11/11/1991', 'Masculino', 'Bra', 'testeusp8@usp.com', '111.111.111-18', 'Teste', 'Testeusp8', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-118', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(9, '2016-02-05 14:46:00', '', '123', 'Testeusp9', 'Usp9', '11/11/1991', 'Masculino', 'Bra', 'testeusp9@usp.com', '111.111.111-19', 'Teste', 'Testeusp9', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-119', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(10, '2016-02-05 14:54:00', '', '123', 'Avaliadorusp', 'Usp0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorusp@usp.com', '111.111.111-10', 'Teste', 'Testeusp0', 'SP', 'USP - Universidade de São Paulo', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-110', 'Teste', 'Avaliador', 'Professor Mestrado', 'Gestão de Pessoas e Estudos Organizacionais', 0),
(11, '2016-02-05 16:30:00', '', '123', 'Testeuac1', 'Uac1', '11/11/1991', 'Masculino', 'Bra', 'testeuac1@uac.com', '111.111.111-21', 'Teste', 'Testeuac1', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 1, '', '111', '', '11.111-121', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(12, '2016-02-05 16:32:00', '', '123', 'Testeuac2', 'Uac2', '11/11/1991', 'Masculino', 'Bra', 'testeuac2@uac.com', '111.111.111-22', 'Teste', 'Testeuac2', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-122', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(13, '2016-02-05 16:39:00', '', '123', 'Testeuac3', 'Uac3', '11/11/1991', 'Masculino', 'Bra', 'testeuac3@uac.com', '111.111.111-23', 'Teste', 'Testeuac3', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-123', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(14, '2016-02-05 16:41:00', '', '123', 'Testeuac4', 'Uac4', '11/11/1991', 'Masculino', 'Bra', 'testeuac4@uac.com', '111.111.111-24', 'Teste', 'Testeuac4', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-124', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(15, '2016-02-05 16:42:00', '', '123', 'Testeuac5', 'Uac5', '11/11/1991', 'Masculino', 'Bra', 'testeuac5@uac.com', '111.111.111-25', 'Teste', 'Testeuac5', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-125', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(16, '2016-02-05 16:46:00', '', '123', 'Testeuac6', 'Uac6', '11/11/1991', 'Masculino', 'Bra', 'testeuac6@uac.com', '111.111.111-26', 'Teste', 'Testeuac6', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 1, '', '111', '', '11.111-126', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(17, '2016-02-05 16:48:00', '', '123', 'Testeuac7', 'Uac7', '11/11/1991', 'Masculino', 'Bra', 'testeuac7@uac.com', '111.111.111-27', 'Teste', 'Testeuac7', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-127', 'Teste', 'Autor', 'Teste', 'valido somente para avaliadores', 0),
(18, '2016-02-05 16:49:00', '', '123', 'Testeuac8', 'Uac8', '11/11/1991', 'Masculino', 'Bra', 'testeuac8@uac.com', '111.111.111-28', 'Teste', 'Testeuac8', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-128', 'Teste', 'Autor', 'Teste', 'valido somente para avaliadores', 0),
(19, '2016-02-05 16:54:00', '', '123', 'Testeuac9', 'Uac9', '11/11/1991', 'Masculino', 'Bra', 'testeuac9@uac.com', '111.111.111-29', 'Teste', 'Testeuac9', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-129', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(20, '2016-02-05 16:58:00', '', '123', 'Avaliadoruac', 'Uac0', '11/11/1981', 'Masculino', 'Bra', 'avaliadoruac@uac.com', '111.111.111-20', 'Teste', 'Testeuac0', 'AC', 'UAC - Universidade do Acre', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-120', 'Teste', 'Avaliador', 'Professor Mestrado', 'Desenvolvimento e Gestão', 0),
(21, '2016-02-05 17:13:00', '', '123', 'Testeusc1', 'Usc1', '11/11/1991', 'Masculino', 'Bra', 'testeusc1@usc.com', '111.111.111-31', 'Teste', 'Testeusc1', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 1, '', '111', '', '11.111-131', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(22, '2016-02-05 17:15:00', '', '123', 'Testeusc2', 'Usc2', '11/11/1991', 'Masculino', 'Bra', 'testeusc2@usc.com', '111.111.111-32', 'Teste', 'Testeusc2', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-133', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(23, '2016-02-05 17:20:00', '', '123', 'Testeusc3', 'Usc3', '11/11/1991', 'Masculino', 'Bra', 'testeusc3@usc.com', '111.111.111-33', 'Teste', 'Testeusc3', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-133', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(24, '2016-02-05 17:23:00', '', '123', 'Testeusc4', 'Usc4', '11/11/1991', 'Masculino', 'Bra', 'testeusc4@usc.com', '111.111.111-34', 'Teste', 'Testeusc4', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-134', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(25, '2016-02-05 17:26:00', '', '123', 'Testeusc5', 'Usc5', '11/11/1991', 'Masculino', 'Bra', 'testeusc5@usc.com', '111.111.111-35', 'Teste', 'Testeusc5', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-135', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(26, '2016-02-05 17:28:00', '', '123', 'Testeusc6', 'Usc6', '11/11/1991', 'Masculino', 'Bra', 'testeusc6@usc.com', '111.111.111-36', 'Teste', 'Testeusc6', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 1, '', '111', '', '11.111-136', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(27, '2016-02-05 17:31:00', '', '123', 'Testeusc7', 'Usc7', '11/11/1991', 'Masculino', 'Bra', 'testeusc7@usc.com', '111.111.111-37', 'Teste', 'Testeusc7', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-137', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(28, '2016-02-05 17:34:00', '', '123', 'Testeusc8', 'Usc8', '11/11/1991', 'Masculino', 'Bra', 'testeusc8@usc.com', '111.111.111-38', 'Teste', 'Testeusc8', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-138', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(29, '2016-02-05 17:36:00', '', '123', 'Testeusc9', 'Usc9', '11/11/1991', 'Masculino', 'Bra', 'testeusc9@usc.com', '111.111.111-39', 'Teste', 'Testeusc9', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-139', 'Teste', 'Autor', 'Aluno', 'valido somente para avaliadores', 0),
(30, '2016-02-05 18:08:00', '', '123', 'Avaliadorusc', 'Usc0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorusc@usc.com', '111.111.111-30', 'Teste', 'Avaliadorusc', 'SC', 'USC - Universidade de Santa Catarina', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-130', 'Teste', 'Avaliador', 'Professor Mestrado', 'Economia e Finanças', 0),
(32, '2016-02-05 22:58:00', '', '123', 'Avaliadorudf', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf@udf.com', '111.111.111-40', 'Teste', 'Avaliadorudf', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-140', 'Teste', 'Avaliador', 'Professor mestrado', 'Gestão de Pessoas e Estudos Organizacionais', 0),
(33, '2016-02-05 23:04:00', '', '123', 'Avaliadorudf2', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf2@udf.com', '111.111.111-51', 'Teste', 'Avaliadorudf0', 'SP', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-151', 'Teste', 'Avaliador', 'Professor mestrado', 'Desenvolvimento e Gestão', 0),
(34, '2016-02-05 23:07:00', '', '123', 'Avaliadorudf3', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf3@udf.com', '111.111.111-53', 'Teste', 'Avaliadorudf3', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-153', 'Teste', 'Avaliador', 'Professor mestrado', 'Economia e Finanças', 0),
(35, '2016-02-05 23:09:00', '', '123', 'Avaliadorudf4', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf4@udf.com', '111.111.111-54', 'Teste', 'Avaliadorudf4', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-154', 'Teste', 'Avaliador', 'Professor mestrado', 'Empreendedorismo, Inovação e Tecnologia', 0),
(36, '2016-02-05 23:13:00', '', '123', 'Avaliadorudf', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf5@udf.com', '111.111.111-55', 'Teste', 'Avaliadorudf5', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-155', 'Teste', 'Avaliador', 'Professor mestrado', 'Estratégia, Planejamento e Governança', 0),
(37, '2016-02-05 23:14:00', '', '123', 'Avaliadorudf6', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudF6@udf.com', '111.111.111-56', 'Teste', 'Avaliadorudf6', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-156', 'Teste', 'Avaliador', 'Professor mestrado', 'Logísticas e Operações', 0),
(38, '2016-02-05 23:18:00', '', '123', 'Avaliadorudf7', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf7@udf.com', '111.111.111-57', 'Teste', 'Avaliadorudf7', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-157', 'Teste', 'Avaliador', 'Professor mestrado', 'Marketing e Mercados', 0),
(39, '2016-02-05 23:20:00', '', '123', 'Avaliadorudf8', 'Udf0', '11/11/1981', 'Masculino', 'Bra', 'avaliadorudf8@udf.com', '111.111.111-58', 'Teste', 'Avaliadorudf8', 'DF', 'UDF - Universidade do Distrito Federal', '(11) 11111 - 11', '', 1, 0, '', '111', '', '11.111-158', 'Teste', 'Avaliador', 'Professor mestrado', 'Sustentabilidade e Responsabilidade Sócio Ambiental', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `sl_grupo`
--

INSERT INTO `sl_grupo` (`id_grupo`, `id_artigo`, `id_usuario1`, `id_usuario2`, `id_usuario3`, `id_usuario4`, `id_usuario5`, `id_apresentador`) VALUES
(1, 1, 1, 2, 3, 4, 5, 0),
(2, 2, 1, 2, 3, 4, 5, 0),
(3, 3, 1, 2, 3, 4, 5, 0),
(4, 4, 1, 2, 3, 4, 5, 0),
(5, 5, 1, 2, 3, 4, 5, 0),
(6, 6, 6, 7, 8, 9, 0, 0),
(7, 7, 6, 7, 8, 9, 0, 0),
(8, 8, 6, 7, 8, 9, 0, 0),
(9, 9, 6, 7, 8, 9, 0, 0),
(10, 10, 6, 7, 8, 9, 0, 0),
(11, 11, 11, 12, 13, 14, 15, 0),
(12, 12, 11, 12, 13, 14, 15, 0),
(13, 13, 11, 12, 13, 14, 15, 0),
(14, 14, 11, 12, 13, 14, 15, 0),
(15, 15, 11, 12, 13, 14, 15, 0),
(16, 16, 16, 17, 18, 19, 0, 0),
(17, 17, 16, 17, 18, 19, 0, 0),
(18, 18, 16, 17, 18, 19, 0, 0),
(19, 19, 16, 17, 18, 19, 0, 0),
(20, 20, 16, 17, 18, 19, 0, 0),
(21, 21, 21, 22, 23, 24, 25, 0),
(22, 22, 21, 22, 23, 24, 25, 0),
(23, 23, 21, 22, 23, 24, 25, 0),
(24, 24, 21, 22, 23, 24, 25, 0),
(25, 25, 21, 22, 23, 24, 25, 0),
(26, 26, 26, 27, 28, 29, 0, 0),
(27, 27, 26, 27, 28, 29, 0, 0),
(28, 28, 26, 27, 28, 29, 0, 0),
(29, 29, 26, 27, 28, 29, 0, 0),
(30, 30, 26, 27, 28, 29, 0, 0);

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