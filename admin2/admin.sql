-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2015 às 06:14
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografia`
--

CREATE TABLE IF NOT EXISTS `biografia` (
  `biografia_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` longtext NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT '',
  `legenda` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(45) NOT NULL DEFAULT '' COMMENT '1-ATIVO 2-INATIVO',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`biografia_id`),
  KEY `FK_biografia_1` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `login` varchar(45) NOT NULL DEFAULT '',
  `senha` varchar(45) NOT NULL DEFAULT '',
  `status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '1- ATIVO 2 - DESATIVADO',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `login`, `senha`, `status`) VALUES
(1, 'Karoline', 'karol', '123', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `biografia`
--
ALTER TABLE `biografia`
  ADD CONSTRAINT `FK_biografia_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
