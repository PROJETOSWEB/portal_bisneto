-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Set-2015 às 05:58
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
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_banner` varchar(45) NOT NULL DEFAULT '',
  `nome_banner` varchar(100) NOT NULL DEFAULT '',
  `img` varchar(45) NOT NULL DEFAULT '',
  `publicar` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '1-ATIVO 2-INATIVO',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`banner_id`, `data_banner`, `nome_banner`, `img`, `publicar`, `usuario_id`) VALUES
(1, '05-09-2015', 'huhu', '2.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografia`
--

CREATE TABLE IF NOT EXISTS `biografia` (
  `biografia_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` longtext NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`biografia_id`),
  KEY `FK_biografia_1` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `biografia`
--

INSERT INTO `biografia` (`biografia_id`, `texto`, `foto`, `usuario_id`) VALUES
(2, 'HDUAHDUAHDUAHDUASUXXASXAXAXA', '2.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depmidia`
--

CREATE TABLE IF NOT EXISTS `depmidia` (
  `depmidia_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(45) NOT NULL DEFAULT '',
  `titulo` varchar(45) NOT NULL DEFAULT '',
  `link` varchar(45) NOT NULL DEFAULT '',
  `codigo` varchar(100) NOT NULL DEFAULT '',
  `foto` varchar(100) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`depmidia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `depmidia`
--

INSERT INTO `depmidia` (`depmidia_id`, `data`, `titulo`, `link`, `codigo`, `foto`, `usuario_id`) VALUES
(1, 'HUAHDUA', 'DUAHUSD', 'DAHSUDAUD', 'DD', '11866412_923345824399818_7638106130952624583_n.jpg', 1),
(3, '', 'TITULO TESTE', 'http://dasdadad', 'dafsdfs', '2.jpg', 1),
(4, '', 'HDUAHUD', 'DAHDUHAUD', 'DAD', '2.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `fotos_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_foto` varchar(45) NOT NULL DEFAULT '',
  `legenda` varchar(45) NOT NULL DEFAULT '',
  `foto` varchar(45) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fotos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`fotos_id`, `data_foto`, `legenda`, `foto`, `usuario_id`) VALUES
(1, '11-09-2015', 'legenda teste', '2.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `informativo`
--

CREATE TABLE IF NOT EXISTS `informativo` (
  `informativo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_informativo` varchar(45) NOT NULL DEFAULT '',
  `edicao` varchar(45) NOT NULL DEFAULT '',
  `img` varchar(100) NOT NULL DEFAULT '',
  `pdf` varchar(100) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`informativo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `informativo`
--

INSERT INTO `informativo` (`informativo_id`, `data_informativo`, `edicao`, `img`, `pdf`, `usuario_id`) VALUES
(2, '04-09-2015', 'DUAHDUAHDU', 'hora-de-aventura-destaque.jpg', 'hora-de-aventura-destaque.jpg', 1),
(3, '11-09-2015', 'DUAHDU', 'hora-de-aventura-destaque.jpg', 'ordem.sql', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `links_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '',
  `data_cadastro` varchar(100) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`links_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`links_id`, `nome`, `link`, `data_cadastro`, `usuario_id`) VALUES
(15, 'LINK TESTE', 'KHDUAHD', '17-setembro-2015', 1),
(16, 'TESTE', 'K', '05-setembro-2015', 1),
(17, 'KAROLINE', 'DASDASD', '06-setembro-2015', 1),
(18, 'KKK', 'KK', '06-setembro-2015', 1),
(20, 'ASDAD', 'http://', 'DASD', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `noticia_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_noticia` varchar(45) NOT NULL DEFAULT '',
  `titulo` varchar(100) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `texto_detalhe` longtext NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT '',
  `destaque_banner` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '1-ATIVO 2- INATIVO',
  `publicar` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '1-ATIVO 2-INATIVO',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`noticia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`noticia_id`, `data_noticia`, `titulo`, `texto`, `texto_detalhe`, `img`, `destaque_banner`, `publicar`, `usuario_id`) VALUES
(2, '03-09-2015', 'HUHAUD', 'SDHAUDHUAHDUAHXDHAS', 'DUASHDUAHDUAHUD', 'hora_de_aventura.gif', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opiniao`
--

CREATE TABLE IF NOT EXISTS `opiniao` (
  `opiniao_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(45) NOT NULL DEFAULT '',
  `titulo` varchar(45) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `texto_detalhe` varchar(45) DEFAULT NULL,
  `foto` varchar(45) NOT NULL DEFAULT '',
  `publicar` int(10) unsigned DEFAULT NULL COMMENT '1-ATIVO 2-INATIVO',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`opiniao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`opiniao_id`, `data`, `titulo`, `texto`, `texto_detalhe`, `foto`, `publicar`, `usuario_id`) VALUES
(1, '7', 'jkjkjk', 'ojk', 'ljkj', '2.jpg', 1, 1),
(2, 'DASD', 'TITULO TESTE', 'DASHUDHAUXHASUHXUAS', 'SAX', 'boleto2.png', 1, 1),
(4, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(6, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(8, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(9, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(10, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(12, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(13, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(14, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(15, 'j', 'j', 'j', 'j', '2.jpg', 0, 1),
(16, 'h', 'hh', 'hh', 'hhh', '2.jpg', 2, 1),
(17, '', 'uhuadh', 'daudhu', 'dauhduahdu', '2.jpg', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `salaimprensa`
--

CREATE TABLE IF NOT EXISTS `salaimprensa` (
  `salaimprensa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(45) NOT NULL DEFAULT '',
  `nome` varchar(45) NOT NULL DEFAULT '',
  `tipo_arquivo` varchar(45) NOT NULL DEFAULT '',
  `arquivo` varchar(100) DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`salaimprensa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `salaimprensa`
--

INSERT INTO `salaimprensa` (`salaimprensa_id`, `data`, `nome`, `tipo_arquivo`, `arquivo`, `usuario_id`) VALUES
(1, '11-09-2015', '', 'JPG', 'ordem.sql', 1),
(2, '11-09-2015', '', 'JPG', 'boletoRequisicao.pdf', 1);

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
  `email` varchar(100) NOT NULL DEFAULT '',
  `nivel` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `login`, `senha`, `status`, `email`, `nivel`) VALUES
(1, 'Karol Oliveira', 'karol', '123', 1, '', 0),
(2, 'Thiago Maneschy', 'thiago', '123', 1, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `videos_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_video` varchar(45) NOT NULL DEFAULT '',
  `legenda` varchar(45) NOT NULL DEFAULT '',
  `video` varchar(45) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`videos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`videos_id`, `data_video`, `legenda`, `video`, `usuario_id`) VALUES
(1, '01-09-2015', 'kjdiajdia', 'geFj_kMvasQ', 1);

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
