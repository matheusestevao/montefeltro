-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2016 às 21:25
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lixo`
--

CREATE TABLE IF NOT EXISTS `lixo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel` char(1) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `status` char(1) NOT NULL,
  `login_demo2` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `lixo`
--

INSERT INTO `lixo` (`id`, `usuario`, `email`, `nivel`, `senha`, `status`, `login_demo2`) VALUES
(1, 'Admin', 'matheus.estevao990@gmail.com', '2', '21232f297a57a5a743894a0e4a801fc3', '1', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadorias`
--

CREATE TABLE IF NOT EXISTS `mercadorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `mercadorias`
--

INSERT INTO `mercadorias` (`id`, `cliente`, `os`, `item`, `modelo`, `qnt`) VALUES
(1, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE IF NOT EXISTS `saida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) NOT NULL,
  `os` varchar(10) NOT NULL,
  `item` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `qnt` int(10) NOT NULL,
  `ret` varchar(20) NOT NULL,
  `data` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `saida`
--

INSERT INTO `saida` (`id`, `cliente`, `os`, `item`, `modelo`, `qnt`, `ret`, `data`) VALUES
(1, '0', '0', '0', '0', 1, 'Matheus', '14/06/2016'),
(2, '0', '0', '0', '0', 1, 'Matheus', '14/06/2016'),
(3, '0', '0', '0', '0', 1, 'Matheus', '14/06/2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
