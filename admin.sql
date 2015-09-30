-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2015 às 05:47
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
(1, '05-09-2016', 'huhu', '2.jpg', 1, 1);

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
(2, '<b>ARTHUR VIRGÍLIO DO CARMO RIBEIRO BISNETO</b><br><br>Informações Pessoais<br><br>Nacionalidade: Brasileiro<br>Data do Nascimento: 1º/10/1979<br>Naturalidade: Brasiliense<br>Filiação: Arthur do Carmo Ribeiro Neto e Jacqueline Arduini Duarte do Carmo Ribeiro<br><br><br>Formação<br><br>Ensino Médio: Escola CETEB – Brasília-DF<br>Ensino Superior: Incompleto<br>Idiomas: Inglês e Francês<br><br><br>Mandatos parlamentares<br><br>• Foi vereador de Manaus (2001/2003)<br>• Foi deputado estadual com três mandatos (2003/2006); (2007/2010) e (2011/2014). No terceiro mandato foi o segundo vice-presidente da Assembleia Legislativa do Amazonas.<br>• É deputado federal pelo PSDB do Amazonas. Na Câmara Federal assumiu a vice-liderança do Bloco da Oposição. É membro titular na Comissão de Minas e Energia (CME) e na Comissão de Integração Nacional, Desenvolvimento Regional e da Amazônia (Cindra) e suplente na Comissão de Ciência e Tecnologia, Comunicação e Informática (CCTCI).<br><br>Biografia na página da Câmara Federal:&nbsp;<br><a target="" rel=""></a><br>Outras informações<br><br>• É presidente regional do PSDB-AM.<br>• São 14 anos de vida pública<br>• É neto do saudoso senador Arthur Virgílio Filho e filho do atual prefeito de Manaus, Arthur Virgílio Neto.&nbsp;', 'banner-footer.jpg', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `depmidia`
--

INSERT INTO `depmidia` (`depmidia_id`, `data`, `titulo`, `link`, `codigo`, `foto`, `usuario_id`) VALUES
(1, 'HUAHDUA', 'DUAHUSD', 'DAHSUDAUD', 'DD', '11866412_923345824399818_7638106130952624583_n.jpg', 1),
(3, '', 'TITULO TESTE', 'http://dasdadad', 'dafsdfs', '2.jpg', 1),
(4, '12-09-2015', 'HDUAHUD', 'DAHDUHAUD', 'DAD', 'adventure-time-jake.jpg', 1),
(5, '22-09-2015', 'DUAHUSDhudahud', '', 'DD', 'hora-de-aventura-finn-5373ac5591bd4.jpg', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`fotos_id`, `data_foto`, `legenda`, `foto`, `usuario_id`) VALUES
(3, '04-09-2016', 'HORA DA AVENTURA', 'hora-de-aventura-destaque.jpg', 1),
(4, '02-09-2015', 'HORA DA AVENTURA', 'hora-de-aventura-finn-5373ac5591bd4.jpg', 1),
(5, '02-09-2015', 'HORA DA AVENTURA', 'hora-de-aventura-finn-5373ac5591bd4.jpg', 1),
(6, '02-09-2015', 'HORA DA AVENTURA', 'hora-de-aventura-finn-5373ac5591bd4.jpg', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `informativo`
--

INSERT INTO `informativo` (`informativo_id`, `data_informativo`, `edicao`, `img`, `pdf`, `usuario_id`) VALUES
(2, '04-09-2015', 'DUAHDUAHDU', 'hora-de-aventura-destaque.jpg', 'hora-de-aventura-destaque.jpg', 1),
(3, '11-09-2015', 'DUAHDU', 'hora-de-aventura-destaque.jpg', 'ordem.sql', 1),
(4, '04-09-2016', 'DUAHDUAHDU', '', '', 1),
(5, '04-09-2016', 'DUAHDUAHDUYGYAGSDA', '', '', 1);

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
(15, 'Câmara dos Deputados', 'KHDUAHD', '17-setembro-2015', 1),
(16, 'PSDB Nacional', 'K', '05-setembro-2015', 1),
(17, 'PSDB Regional', 'DASDASD', '06-setembro-2015', 1),
(18, 'Governo do Amazonas', 'KK', '06-setembro-2015', 1),
(20, 'SEDUC-AM', 'http://', 'DASD', 1);

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
(2, '03-09-2016', 'HUHAUD', 'SDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHASSDHAUDHUAHDUAHXDHAS', 'DUASHDUAHDUAHUD', 'hora_de_aventura.gif', 1, 2, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`opiniao_id`, `data`, `titulo`, `texto`, `texto_detalhe`, `foto`, `publicar`, `usuario_id`) VALUES
(18, '03-09-2015', 'AUHDAUDHAUD', 'TEXTO TESTE ts', 'DUAHDUAHDUAHDU', 'hora_de_aventura.gif', 1, 1);

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
(1, '11-09-2015', 'HUDHAD', 'PNG', 'ordem.sql', 1),
(2, '11-09-2015', 'KKOKOO', 'JPG', 'boletoRequisicao.pdf', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`videos_id`, `data_video`, `legenda`, `video`, `usuario_id`) VALUES
(1, '01-09-2016', 'kjdiajdia', 'geFj_kMvasQ', 1);

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
