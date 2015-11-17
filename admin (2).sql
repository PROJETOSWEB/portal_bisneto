-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2015 às 03:29
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
-- Estrutura da tabela `album_fotos`
--

CREATE TABLE IF NOT EXISTS `album_fotos` (
  `album_fotos_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_album` varchar(45) NOT NULL DEFAULT '',
  `nome` varchar(200) NOT NULL DEFAULT '',
  `publicar` int(10) unsigned NOT NULL DEFAULT '0',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`album_fotos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `album_fotos`
--

INSERT INTO `album_fotos` (`album_fotos_id`, `data_album`, `nome`, `publicar`, `usuario_id`) VALUES
(4, '03/10/2015', 'FESTA', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`banner_id`, `data_banner`, `nome_banner`, `img`, `publicar`, `usuario_id`) VALUES
(4, '16-10-2015', 'novo banner teste 2', 'banner_topo_02.jpg', 1, 2),
(5, '23-10-2015', 'campanha outubro', 'banner_topo_01.jpg', 1, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `biografia`
--

INSERT INTO `biografia` (`biografia_id`, `texto`, `foto`, `usuario_id`) VALUES
(1, '<div>\r\n      <h4>ARTHUR VIRGÍLIO DO CARMO RIBEIRO BISNETO teste<br></h4>\r\n<h4>Informações Pessoais</h4>\r\n<span>Nacionalidade: Brasileiro<br>\r\nData do Nascimento: 1º/10/1979<br>\r\nNaturalidade: Brasiliense<br>\r\nFiliação: Arthur do Carmo Ribeiro Neto e Jacqueline Arduini Duarte do<br>\r\nCarmo Ribeiro</span>\r\n&nbsp;\r\n<h4>Formação</h4>\r\n<span>Ensino Médio: Escola CETEB – Brasília-DF<br>\r\nEnsino Superior:&nbsp;Incompleto<br>\r\nIdiomas: Inglês e Francês</span>\r\n&nbsp;\r\n<h3>Mandatos parlamentares</h3>\r\nFoi vereador de Manaus (2001/2003)\r\nFoi deputado estadual com três mandatos (2003/2006); (2007/2010) e \r\n(2011/2014). No terceiro mandato foi o segundo vice-presidente da \r\nAssembleia Legislativa do Amazonas.\r\nÉ deputado federal pelo PSDB do Amazonas. Na Câmara Federal assumiu a\r\n vice-liderança do Bloco da Oposição. É membro titular na Comissão de \r\nMinas e Energia (CME) e na Comissão de Integração Nacional, \r\nDesenvolvimento Regional e da Amazônia (Cindra) e suplente na Comissão \r\nde Ciência e Tecnologia, Comunicação e Informática (CCTCI).\r\n<span>Biografia na página da Câmara Federal: <a rel="" target="" href="http://www.camara.gov.br/internet/Deputado/dep_Detalhe.asp?id=178847">http://www.camara.gov.br/internet/Deputado/dep_Detalhe.asp?id=178847</a></span>\r\n&nbsp;\r\nOutras informações\r\n• É presidente regional do PSDB-AM.\r\n• São 14 anos de vida pública\r\n• É neto do saudoso senador Arthur Virgílio Filho e filho do atual prefeito de Manaus, Arthur Virgílio Neto.\r\n    </div><br>', 'banner-footer.jpg', 1);

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
  `publicar` int(10) unsigned NOT NULL DEFAULT '0',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`depmidia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `depmidia`
--

INSERT INTO `depmidia` (`depmidia_id`, `data`, `titulo`, `link`, `codigo`, `foto`, `publicar`, `usuario_id`) VALUES
(1, '06-11-2015', 'DAUHDUAHDU', 'DHASUDHAUDHAUDH', 'UDAHUDHAUD', 'hora-de-aventura-destaque.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `fotos_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_foto` varchar(45) NOT NULL DEFAULT '',
  `legenda` varchar(45) NOT NULL DEFAULT '',
  `foto` varchar(45) NOT NULL DEFAULT '',
  `album_fotos_id` int(10) unsigned NOT NULL DEFAULT '0',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fotos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`fotos_id`, `data_foto`, `legenda`, `foto`, `album_fotos_id`, `usuario_id`) VALUES
(9, '', 'LEGENDA 1', 'arthur-bisneto.jpg', 4, 1),
(10, '', 'LEGENDA 2', 'arthur-bisneto02.jpg', 4, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `informativo`
--

INSERT INTO `informativo` (`informativo_id`, `data_informativo`, `edicao`, `img`, `pdf`, `usuario_id`) VALUES
(1, '13-10-2015', '999', 'capa-informativo.jpg', 'carango-xeiro-carro.pdf', 2),
(2, '23-10-2015', '777', 'banner2.jpg', '', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`links_id`, `nome`, `link`, `data_cadastro`, `usuario_id`) VALUES
(1, 'teste de link ulteis', 'http://www.google.com', '', 2),
(2, 'assembleia', 'http://google.com', '', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`noticia_id`, `data_noticia`, `titulo`, `texto`, `texto_detalhe`, `img`, `destaque_banner`, `publicar`, `usuario_id`) VALUES
(1, '13-10-2015', 'Arthur Virgílio Bisneto defende permissão para funcionamento de casas lotéricas', '<span>Na aprovação, na noite desta quarta-feira, 23, na Câmara Federal, do \r\nprojeto de lei que permite o funcionamento, por mais 20 anos, de casas \r\nlotéricas que não passaram por licitação e que atuam por permissões \r\nexpedidas após credenciamento, o deputado federal Arthur Virgílio \r\nBisneto (PSDB-AM) votou favorável defendendo que o contrato em vigor já \r\ngerou direitos adquiridos e que a proposta vai garantir a manutenção de \r\nempregos.<br>\r\n“Todos os deputados e deputadas desta casa foram procurados ao longo dos\r\n últimos dias por lotéricos, eu fui procurado por lotéricos do meu \r\nEstado, do Amazonas, e por lotéricos de outros Estados. O que esta casa \r\nfaz hoje é algo que o painel reflete muito bem. Eu gostaria da atenção \r\ndos senhores lotéricos para verem que raramente isso acontece nesta \r\ncasa, que há uma unanimidade dos partidos em relação à votação tão \r\nimportante como esta. Portanto, parabéns aos lotéricos, continuem \r\ntrabalhando e nós estamos aqui fazendo algo muito simples, singular, mas\r\n importante, que é fazendo justiça ao trabalho que vocês desenvolvem \r\nneste país”, declarou.<br>\r\nO projeto agora segue para o Senado Federal antes de ir à sanção \r\npresidencial. Desde 1999, a Caixa Econômica só permite a concessão do \r\nserviço por licitação. Mas muitas lotéricas que firmaram contrato antes \r\ndisso, por permissão, continuam atuando.<br>\r\nEscute o áudio:</span>\r\n<a rel="" target="" href="http://imagem.camara.gov.br/internet/audio/exibeaudio.asp?codGravacao=54180&amp;hrInicio=2015,9,23,21,39,21&amp;hrFim=2015,9,23,21,39,21&amp;descEvento=PLEN%C3%81RIO%20-%20Sess%C3%A3o%20Deliberativa&amp;diffDataFinal=121&amp;ultimoElemento=false">http://imagem.camara.gov.br/internet/audio/exibeaudio.asp?codGravacao=54180&amp;hrInicio=2015,9,23,21,39...</a><br>', '', 'arthur-bisneto.jpg', 1, 1, 2),
(2, '13-10-2015', 'Arthur Virgílio Bisneto recebe mérito do TCE-AM em homenagem ao avô', 'Em comemoração aos 65 anos do Tribunal de Contas do Estado (TCE-AM), a \r\ncorte concedeu, nesta sexta-feira (9), a mais alta condecoração, o Colar\r\n do Mérito de Contas, a 17 personalidades por relevantes serviços ao \r\ncumprimento do interesse público. Entre elas, o senador Arthur Virgílio \r\nFilho, avô do deputado federal Arthur Virgílio Bisneto (PSDB-AM) e pai \r\ndo prefeito de Manaus, Arthur Virgílio Neto (PSDB).<br>\r\n“Meu avô foi criador da Universidade Federal do Amazonas, conta a \r\nhistória de vários serviços prestados ao Estado do Amazonas. Portanto, \r\neu agradeço ainda mais em nome da minha família e de todos que receberam\r\n esta homenagem tão importante. Ela não é singela, ela é bonita e forte \r\nno coração de todos nós”, afirmou Bisneto, após receber a honraria.<br>\r\nArthur Virgílio do Carmo Ribeiro Filho nasceu em 12 de fevereiro de \r\n1921, em Manaus, Amazonas, filho do desembargador Arthur Virgílio do \r\nCarmo Ribeiro e Luiza da Conceição do Carmo Ribeiro. Foi deputado \r\nestadual de 1947 a 1959, deputado federal de 1959 a 1963 e senador de \r\n1963 a 1969. Assim como seu pai, formou-se em Direito, em 1947, em \r\nManaus, pela Faculdade de Direito do Amazonas. Arthur Virgílio Filho \r\nteve como atividades principais, além da política, a advocacia e o \r\njornalismo. Uma de suas principais batalhas, como deputado, foi pela \r\ncriação da Universidade Federal do Amazonas (Ufam). Ele faleceu em 31 de\r\n março de 1987.<br>', '', 'arthur-bisneto02.jpg', 2, 1, 2),
(4, '13-10-2015', 'Bisneto pede esclarecimento sobre retirada dos imóveis dos beneficiários do Minha Casa, Minha Vida', 'O Governo Federal decidiu retomar os imóveis dos beneficiários mais \r\ncarentes do programa Minha Casa, Minha Vida, que estão inadimplentes há \r\nmais de três meses. Com base nisso, o deputado federal Arthur Virgílio \r\nBisneto (PSDB-AM), vice-líder da Oposição, solicitou ao Ministério das \r\nCidades esclarecimentos quanto à retirada de imóveis dos beneficiários \r\ndo programa.&nbsp;O requerimento foi apresentado nesta semana na Câmara \r\nFederal, em Brasília.\r\nDe acordo com reportagem do jornal Estadão, publicada no último dia \r\n20, a Caixa Econômica Federal apertou a cobrança das prestações que \r\nestão atrasadas. Passou a ligar e a enviar SMS para os beneficiários \r\nlogo após os primeiros dias de vencimento. Segundo a notícia, a mudança \r\nde postura em relação aos calotes da chamada faixa 1 do programa para \r\nfamílias com renda mensal de até R$ 1,6 mil, deve-se a dois fatores: o \r\nagravamento da crise, que não permite ao governo ser leniente com a \r\ninadimplência em momento de frustração de recursos, e o temor da \r\nfiscalização dos órgãos de controle, já que até 95% desses imóveis são \r\nbancados com dinheiro público. “Estamos pedindo que o ministério \r\njustifique a retirada de imóveis dos beneficiários, já que a intenção \r\ninicial do programa era ajudar famílias de baixa renda a realizarem o \r\nsonho da casa própria”, declarou o tucano.<br>', '', 'arthur-bisneto02.jpg', 1, 1, 2),
(6, '23-10-2015', 'Arthur Virgílio Bisneto recebe mérito do TCE-AM em homenagem ao avô', 'rerererer rererererererer rerererere <br>', '', 'banner-footer.jpg', 1, 1, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`opiniao_id`, `data`, `titulo`, `texto`, `texto_detalhe`, `foto`, `publicar`, `usuario_id`) VALUES
(5, '16-10-2015', 'Arthur pede explicações da Eletrobras sobre', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed\r\n diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam \r\nerat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation \r\nullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. \r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse \r\nmolestie consequat, vel illum dolore eu feugiat nulla facilisis at vero \r\neros et accumsan et iusto odio dignissim qui blandit praesent luptatum \r\nzzril delenit augue duis dolore te feugait nulla facilisi. Nam liber \r\ntempor cum soluta nobis eleifend option congue nihil imperdiet doming id\r\n quod mazim place<br>', '', 'arthur-bisneto02.jpg', 1, 2),
(6, '16-10-2015', 'Arthur pede explicações da Eletrobras sobre', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed\r\n diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam \r\nerat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation \r\nullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. \r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse \r\nmolestie consequat, vel illum dolore eu feugiat nulla facilisis at vero \r\neros et accumsan et iusto odio dignissim qui blandit praesent luptatum \r\nzzril delenit augue duis dolore te feugait nulla facilisi. Nam liber \r\ntempor cum soluta nobis eleifend option congue nihil imperdiet doming id\r\n quod mazim place<br>', '', 'arthur-bisneto03.jpg', 1, 2);

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
(2, '23-10-2015', 'teste de arquivo', 'PDF', 'banner-topo-bisneto940x218.png', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `login`, `senha`, `status`, `email`, `nivel`) VALUES
(1, 'Administrador Sistema', 'admin', 'admin', 1, 'jhudhaud', 0),
(4, 'Thiago Maneschy', 'thiago', '123', 1, 'udahduhaudhaud', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`videos_id`, `data_video`, `legenda`, `video`, `usuario_id`) VALUES
(1, '14-10-2015', 'teste de legenda videos', 'xi7g__e6b3k', 2),
(2, '30-09-2015', 'Mais videos teste legenda novo', 'ye378jVftSA', 2),
(3, '23-10-2015', 'teste de legenda videos', 'qVIuN-8KbUk', 2);

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
