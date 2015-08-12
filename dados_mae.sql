-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jul-2015 às 22:49
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
-- Estrutura da tabela `dados_mae`
--

CREATE TABLE IF NOT EXISTS `dados_mae` (
  `mae_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mae_nome` varchar(255) NOT NULL,
  `mae_datanascimento` varchar(255) NOT NULL,
  `mae_escolaridade` varchar(255) NOT NULL,
  `mae_profissao` varchar(255) NOT NULL,
  `mae_trabalhaatualmente` enum('s','n') NOT NULL,
  `mae_datahora` datetime NOT NULL,
  `pes_id` bigint(20) NOT NULL,
  PRIMARY KEY (`mae_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `dados_mae`
--

INSERT INTO `dados_mae` (`mae_id`, `mae_nome`, `mae_datanascimento`, `mae_escolaridade`, `mae_profissao`, `mae_trabalhaatualmente`, `mae_datahora`, `pes_id`) VALUES
(2, 'Marilene', '1999-04-07', 'Ensino medio completo', 'Nenhuma', 'n', '2015-07-25 17:44:53', 43);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
