-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2016 às 02:06
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acesso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(20) DEFAULT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `nasc` date DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `num` int(5) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `tipo_usuario` int(2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`ID`, `cpf`, `nome`, `sexo`, `nasc`, `cep`, `endereco`, `num`, `bairro`, `cidade`, `estado`, `telefone`, `tipo_usuario`, `email`, `senha`, `complemento`) VALUES
(1, NULL, 'Gerente', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'gerente@max.com', 'adm2016auto', NULL),
(2, NULL, 'Vendedor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'vendedor@max.com', 'vend16auto', NULL),
(3, NULL, 'Funcionário', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'funcionario@max.com', 'fun15auto', NULL),
(4, '16077501719', 'Andreza Batista Moreira', 'Feminino', '1998-11-14', 21815200, 'Estrada Maravilha', 721, 'Bangu', 'Rio de Janeiro', 'RJ', '21991252147', 4, 'andmoreby@gmail.com', 'tiago1424', 'Rua C Casa 20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
