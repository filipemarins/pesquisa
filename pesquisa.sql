-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jul-2015 às 13:36
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pessoais`
--

CREATE TABLE IF NOT EXISTS `dados_pessoais` (
  `pes_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pes_nomecompleto` varchar(255) NOT NULL,
  `pes_sexo` enum('m','f') NOT NULL,
  `pes_datanascimento` date NOT NULL,
  `pes_naturalidade` varchar(255) NOT NULL,
  `pes_email` varchar(255) NOT NULL,
  `pes_escolaridade` varchar(255) NOT NULL,
  `pes_estudouem` varchar(255) NOT NULL,
  `pes_trabalha` enum('s','n') NOT NULL,
  `pes_hosrassemtrab` varchar(255) NOT NULL,
  `pes_estadocivil` varchar(255) NOT NULL,
  `pes_comquemvive` varchar(255) NOT NULL,
  `pes_sangue` varchar(255) NOT NULL,
  `pes_rh` varchar(255) NOT NULL,
  `pes_pesonascer` varchar(255) NOT NULL,
  `pes_atividadefisica` enum('s','n') NOT NULL,
  `pes_quaisatividades` varchar(255) NOT NULL,
  `pes_classpai` varchar(255) NOT NULL,
  `pes_classmae` varchar(255) NOT NULL,
  `pes_classeu` varchar(255) NOT NULL,
  `pes_datahora` datetime NOT NULL,
  PRIMARY KEY (`pes_id`),
  UNIQUE KEY `pes_email` (`pes_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `dados_pessoais`
--

INSERT INTO `dados_pessoais` (`pes_id`, `pes_nomecompleto`, `pes_sexo`, `pes_datanascimento`, `pes_naturalidade`, `pes_email`, `pes_escolaridade`, `pes_estudouem`, `pes_trabalha`, `pes_hosrassemtrab`, `pes_estadocivil`, `pes_comquemvive`, `pes_sangue`, `pes_rh`, `pes_pesonascer`, `pes_atividadefisica`, `pes_quaisatividades`, `pes_classpai`, `pes_classmae`, `pes_classeu`, `pes_datahora`) VALUES
(29, 'Filipe Marins', 'm', '1993-04-07', 'Soteropolitano', 'lipe_bm@yahoo.com.br', 'nenhuma', 'Escola Pública', 's', 'Menos de 20 horas', 'Solteiro', 'Sozinho - Cônjuge - Irmão(s)', 'Não se informar', 'Não sei informar', '11', 's', 'Ginástica - Musculação - Artes Marciais', 'Magro', 'Normal', 'Gordo', '2015-07-24 07:13:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pessoais_mulher`
--

CREATE TABLE IF NOT EXISTS `dados_pessoais_mulher` (
  `mul_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mul_qtdgestao` int(255) NOT NULL,
  `mul_qtdfilhos` int(255) NOT NULL,
  `mul_probgestacional` varchar(255) NOT NULL,
  `mul_partosnormais` int(255) NOT NULL,
  `mul_partoscesario` int(255) NOT NULL,
  `mul_partoforceps` int(255) NOT NULL,
  `mul_partoprematuro` int(255) NOT NULL,
  `mul_partotermo` int(255) NOT NULL,
  `mul_postermo` int(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`mul_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `end_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `end_cep` varchar(255) NOT NULL,
  `end_rua` varchar(255) NOT NULL,
  `end_numero` int(255) NOT NULL,
  `end_bairro` varchar(255) NOT NULL,
  `end_cidade` varchar(255) NOT NULL,
  `end_estado` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`end_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`end_id`, `end_cep`, `end_rua`, `end_numero`, `end_bairro`, `end_cidade`, `end_estado`, `pes_id`) VALUES
(24, '46190000', 'Pastor Arthur de Souza Freire', 585, 'Candeias', 'Paramirim', 'BA', 29);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
