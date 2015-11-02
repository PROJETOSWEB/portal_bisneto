-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2015 às 00:28
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `depmidia`
--

INSERT INTO `depmidia` (`depmidia_id`, `data`, `titulo`, `link`, `codigo`, `foto`, `usuario_id`) VALUES
(1, '05-11-2015', 'UM MANDATO PARA SER SEMPRE LEMBRADO', 'http://', '', '870_arthur_virgilio_bisneto.jpg', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, '04-11-2015', 'Arthur Virgílio propõe alteração no prazo de validade do bilhete de passagem aérea', 'O deputado federal Arthur Virgílio Bisneto (PSDB-AM), vice-líder da Oposição, propôs, nesta semana, na Câmara dos Deputados, um projeto de lei (nº 3441/2015) que altera o prazo de validade do bilhete de passagem aérea para dois anos. A proposta altera o artigo 228 da lei 7.565 de 19 de dezembro de 1986, que dispõe sobre o Código Brasileiro de Aeronáutica (CBA), para estender o prazo de validade do bilhete de passagem aérea.<br>Segundo o deputado, ao alterar o CBA, estendendo o prazo de validade do bilhete, de um ano, a partir da data de emissão, para dois anos, a contar da data de início da viagem, essa iniciativa beneficia os consumidores que enfrentam imprevistos sem prejudicar, de modo algum, o planejamento financeiro das companhias aéreas.<br>“De fato, ao impor sanção para aquele que, comprando bilhete promocional, deseja alterar a data de sua viagem, retardando-a, o transportador já é ressarcido dos custos que a remarcação possa lhe impor. Em suma, a mera extensão do prazo de validade do bilhete não altera o fato de que a empresa tem em mãos os meios bastantes para lidar com as alterações de reserva, pretendam elas deslocar em um ano ou em dois a data para usufruto do serviço”, justifica o tucano.<br>Pelo projeto “se um passageiro for impedido de viajar no período de validade da passagem, por culpa exclusiva do transportador, a validade do bilhete desse passageiro será prorrogada até o primeiro voo do transportador no qual haja lugar disponível na classe de serviço para a qual a tarifa foi paga”.<br>De acordo com o tucano, o regime de liberdade econômica, que prevalece há anos no transporte aéreo, dá margem para que as empresas adotem políticas tarifárias e condições de prestação de serviço que lhes permitam maximizar os ganhos. “Daí que recorram, todas elas, à chamada “discriminação de preços”, método de gerenciamento de receita que tenta atrelar a tarifa à presumível disponibilidade de o consumidor – agrupado em classes – pagar por ela. Assim, as passagens compradas em data muito próxima da viagem – prática comum no mundo dos negócios corporativos – costumam ser muito caras. De modo análogo, bilhetes emitidos com muita antecedência – geralmente para consumidores que têm como alvo viagem a lazer – amiúde são mais baratos. Nesse último caso, para que o usuário não se valha da estratégia de adquirir bilhete por menor preço e, dentro do prazo de validade da passagem (um ano), solicitar a troca da data da viagem, as empresas aplicam taxas severas sobre esse tipo de transação, desestimulando-as”, aponta o deputado em sua justificativa da proposta.', '', 'arthur-bisneto.jpg', 1, 1, 1),
(2, '30-10-2015', 'Bisneto faz apelo ao Ministério dos Transportes para recuperação da BR-317', 'O deputado federal Arthur Virgílio Bisneto (PSDB-AM), vice-líder da Oposição, solicitou ao Ministério dos Transportes informações sobre a pavimentação da recuperação da BR-317, no subtrecho entre a cidade de Boca do Acre e a divisa entre os Estados do Amazonas e do Acre, KM 416 ao KM 526,7, totalizando 110,7 quilômetros de extensão.<br>No requerimento, Bisneto pede informações sobre a real situação da estrada; se existe dotação orçamentária para a conclusão das obras de recuperação do subtrecho entre a cidade de Boca do Acre/AM e a divisa entre os Estados do Amazonas e do Acre, KM 416 ao 526,7, totalizando 110,7 quilômetros de extensão. Outra informação solicitada é se existe contrato vigente da obra da BR 317 do subtrecho entre a cidade de Boca do Acre/AM e a divida entre os Estados do Acre e Amazonas;informações do valor empenhado e valor pago até este mês e o montante que foi executado pelo Ministério dos Transportes por meio do Departamento Nacional de Infraestrutura de Transportes (DNIT) na BR-317.<br>De acordo com o tucano, o Amazonas, ao longo das últimas décadas, desenvolveu-se bastante, principalmente com o Polo Industrial de Manaus (PIM), porém, é necessário mecanismos que acelerem ainda mais esse processo de desenvolvimento em todo o Estado na geração de emprego e renda. “A reforma e a pavimentação de toda a rodovia BR-317 são de vital importância tanto para o desenvolvimento sustentável como para todos os setores da economia regional, para a consolidação de um Estado, que tem sua produção afetada por grandes entraves de logística, não tendo hoje como escoar sua produção para outros centros comerciais em menos tempo em vários Estados do país, pois o único meio para a logística, em geral, é feito por meio fluvial e aéreo. O que na questão fluvial demanda maior tempo e na questão aérea gera uma maior despesa, impactando diretamente no valor do produto final para o consumidor”, afirmou, acrescentando que a recuperação e pavimentação da BR será um grande avanço e conquista para o Estado do Amazonas.', '', 'arthur-bisneto03.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opiniao`
--

CREATE TABLE IF NOT EXISTS `opiniao` (
  `opiniao_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(45) NOT NULL DEFAULT '',
  `titulo` varchar(200) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `texto_detalhe` longtext,
  `foto` varchar(45) NOT NULL DEFAULT '',
  `publicar` int(10) unsigned DEFAULT NULL COMMENT '1-ATIVO 2-INATIVO',
  `usuario_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`opiniao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`opiniao_id`, `data`, `titulo`, `texto`, `texto_detalhe`, `foto`, `publicar`, `usuario_id`) VALUES
(1, '05-11-2015', 'Bisneto vota a favor da redução da maioridade penal', '“Minha opinião é muito clara no sentido de nós acabarmos com a impunidade dos jovens entre 16 e 18 anos que cometem crimes graves neste país”, &nbsp;afirmou o deputado federal Arthur Virgílio Bisneto (PSDB-AM), vice-líder da Oposição, durante votação do texto da comissão especial para a PEC que reduz a maioridade penal (PEC 171/93). O plenário da Câmara Federal rejeitou o texto. Foram 303 votos a favor, quando o mínimo necessário eram 308. Foram 184 votos contra e três abstenções.Durante a discussão da proposta, o vice-líder da Oposiçao liberou a bancada para a votação. “Eu respeito a opinião da bancada daqueles que votam não, mas acredito que os jovens de 16 e 17 anos sabem muito bem o que fazem.&nbsp; Não digam que são pessoas que não sabem a responsabilidade e o que é cometer um crime contra uma família ou contra um cidadão. Eu falo aqui como pai de dois filhos, eu falo aqui como alguém que se põe no lugar dessas mães e sabe o sofrimento que é perder um filho para criminalidade e ver a impunidade cada vez mais forte”, ressaltou Bisneto.A proposta rejeitada reduziria de 18 para 16 anos a maioridade penal para crimes hediondos, como estupro, latrocínio e homicídio qualificado (quando há agravantes). O adolescente dessa faixa etária também poderia ser condenado por crimes de lesão corporal grave ou lesão corporal seguida de morte e roubo agravado (quando há uso de arma ou participação de dois ou mais criminosos, entre outras circunstâncias). O texto original, que pode ir à votação nesta quarta-feira (1°), reduz a maioridade para 16 em todos os casos.', '', '870_arthur_virgilio_bisneto.jpg', 1, 1),
(2, '03-11-2015', 'Arthur Bisneto defende ZFM e lembra que bancada do PT votou contra o benefício fiscal a empresas de bebidas no Amazonas', 'Na primeira sessão da “Câmara Itinerante” realizada no Amazonas, nesta segunda-feira (29), no plenário da Assembleia Legislativa do Amazonas (Aleam), o deputado federal Arthur Virgílio Bisneto (PSDB-AM), vice-líder da Oposição, lembrou a importância do Polo Industrial para a economia do Estado.<br>“O Polo Industrial de Manaus é o motor da economia do Estado e um dos grandes motores da economia da Região Norte, portanto, nós temos que defendê-lo a qualquer preço, a qualquer custo. Nós tivemos uma votação importante semana passada e eu parabenizo toda a bancada do Amazonas por este embate, os partidos que participaram ao nosso lado, nós tivemos aí mais uma vez a quebra daquela mentira do partido dos trabalhadores que está apodrecendo este país, e dizer que eles são amigos da Zona Franca de Manaus, nenhum deputado votou para a Zona Franca de Manaus, portanto, se fosse depender do PT, 15 mil empregos seriam retirados do Polo Industrial de Manaus, do setor de bebidas frias. Quinze mil empregos, não teve um voto do PT a favor do Polo Industrial de Manaus, e a gente vê um governo apodrecido, um governo sem voz, um governo de uma presidente que vive isolada dentro do palácio do planalto”, criticou na tribuna.<br>Na pauta de debates na sessão, também foi abordado a paralisação dos servidores da Suframa, incluindo o contingenciamento dos recursos da autarquia gerados por meio das contribuições das fabricantes do PIM até projetos de escolas de tempo integral, violência contra a mulher, pacto federativo, reforma política e redução da maioridade penal.<br>Essa foi a 9ª edição da Câmara Itinerante, deste ano. Aberta pelo presidente Josué Neto (PSD), a sessão foi conduzida pelo presidente da Câmara Federal, deputado Eduardo Cunha (PMDB-RJ), que adiantou que os debates farão parte do intercâmbio de informações e acolhimento de sugestões que serão levadas à Casa Legislativa federal, que ao longo de 2015 e 2016 percorrerá as 27 unidades da federação. “Discutindo assuntos importantes que poderiam ser muito bem, presidente, travados dentro do Congresso sem a participação da população, sem participação de outros poderes como a Assembleia Legislativa e Vossa Excelência faz muito bem em levar essas discussões como, por exemplo, da maioridade penal, como por exemplo, da reforma política, para que as pessoas deem sua opinião e nós tenhamos algo mais robusto, quando nós votarmos e quando nós viermos a decidir coisas importantes para o país. Portanto, eu quero parabenizá-lo pela brilhante ideia, pelo brilhante projeto, e isso faz com que a Câmara se aproxime de população, isso faz com que a Câmara tenha uma voz mais forte, mais firme em prol deste mesmo povo”, afirmou o deputado, sobre a iniciativa do programa.', '', 'arthur-bisneto03.jpg', 1, 1),
(3, '04-11-2015', 'Tucano fala sobre proposta que cria prazo para políticos mudarem de partido antes da eleição', 'O plenário da Câmara dos Deputados aprovou, por 317 votos a 139 e 6 abstenções, uma emenda do deputado Jovair Arantes (PTB-GO) à proposta da reforma política (PEC 182/07), que cria uma janela de 30 dias para que o político possa mudar de partido sem perda do mandato.Durante a discussão da matéria, o deputado federal Arthur Virgílio Bisneto (PSDB-AM), que também é vice-líder do Bloco da Oposição, fez um breve pronunciamento. “Senhor presidente, nós estamos chegando ao fim de uma reforma política. É verdade que é pequena, é verdade que é insuficiente, é verdade que não aproxima o eleitor de seu candidato, é verdade que não traz transparência para as eleições, não põe a eleição em pé de igualdade entre os candidatos. Porém, existe a necessidade de haver uma janela, na minha opinião, mas existe a discordância em torno da bancada da Minoria, e eu libero neste momento, senhor presidente, respeitando os posicionamentos contraditórios”, declarou. O tema, que faz parte da reforma política (PEC 182/07), gerou discursos a favor e contra.', '', 'arthur-bisneto02.jpg', 1, 1),
(4, '07-11-2015', 'Arthur Virgílio Bisneto fala sobre o fim da coligação nas eleições para deputados e vereadores', 'O deputado federal Arthur Virgílio Bisneto (PSDB-AM), vice-líder da Oposição, falou sobre a proposta que trata das coligações partidárias, durante votação na Câmara Federal nesta quinta-feira (28).“Apesar das divergências na bancada em relação à votação do fim das coligações proporcionais, mas não tira o meu direito de emitir a minha opinião, os partidos políticos, os verdadeiros, aqueles que têm programa, aqueles que têm propostas para o país, para os Estados e para os municípios, no geral, que caminham com as próprias pernas. É temerária essa criação de conluios, de grupos, visando estritamente o interesse eleitoral daquele pleito, de formar a manutenção dos partidos de aluguel, que estão tomando conta das ruas, buscando assinaturas e sendo criados para tumultuar os quadros políticos”, declarou.O plenário da Câmara rejeitou, por 236 votos a 206 e 5 abstenções, o destaque do PSDB que pretendia acabar com a coligação eleitoral nos cargos para o Legislativo (deputados federais, estaduais e vereadores). O partido pretendia incluir parte do texto da Proposta de Emenda à Constituição (PEC) 14/15 na proposta da reforma política (PEC 182/07). Bisneto foi favorável ao destaque do PSDB.', '', 'arthur-bisneto.png', 1, 1),
(5, '06-11-2015', 'Arthur Bisneto diz que os responsáveis pelo acidente da plataforma do Proama devem ser punidos', 'O deputado estadual Arthur Bisneto (PSDB) utilizou a tribuna da Assembleia Legislativa do Amazonas, nesta quarta-feira, 2, para defender uma investigação rigorosa do acidente que houve na Estação de Tratamento de Água (ETA) Ponta das Lajes, do Programa Águas para Manaus (Proama). O acidente, ocorrido no último dia 24 de junho, com a balsa que atingiu a plataforma de captação de água para as zonas Norte e Leste de Manaus, deixou 500 mil famílias sem água.Bisneto disse que somente uma investigação policial poderá mostrar se houve ou não sabotagem. “A prefeitura e o governo do Estado, numa das mais belas obras realizadas nesta cidade, que foi de levar água para grande parte das zonas Norte e Leste, cumpriram e cumprem seu papel de levar algo tão importante e substancial que mexe com a dignidade das pessoas, que é ter água encanada em casa, muita gente está sendo prejudicada, as medidas estão sendo tomadas, em breve estas pessoas vão voltar a ter água, coisa que não tinham há um ano, e uma investigação vai deixar claro o que aconteceu. Se foi realmente um acidente e se o rapaz estava embriagado, deve ser punido criminalmente, mas tem que ser investigado e se tiver alguém por trás, algum empresário, algum político, pensando em prejudicar alguém em época de eleição, deve ser punido também. Fica aqui minha revolta em relação ao caso e minha solidariedade com estas 500 mil pessoas que estão sofrendo sem água”, afirmou.Em aparte, o deputado Wilson Lisboa (PCdoB) disse que deveria ser criada uma Comissão Parlamentar de Inquérito (CPI) para apurar o acidente. “Eu concordo com a opinião do prefeito Arthur Neto, do deputado Arthur Bisneto e acho que o governo deve pedir uma CPI, para explorar realmente a responsabilidade do fato que levou a esse acidente e que deixou aproximadamente 500 mil pessoas sem água nas zonas Norte e Leste. Vamos buscar nessa CPI”, disse.Ainda na tribuna, Bisneto disse que “o grande vilão dessa história é quem passou 8 anos governador do Estado e não mexeu uma palha, arrumou desculpa para não colocar água para essas pessoas”. “Por 8 anos nós assistimos ao governador, todo poderoso, que não colocou água na casa das pessoas, ficou brigando com o Serafim, querendo ser pai da criança, quando o mais importante era ter levado água para essas pessoas. Briga política se deixa de lado, quando se trata da população. Agora, o que eu compreendo é que deve ser punido o responsável e quem vai dizer isso é a polícia”, concluiu.O governador José Melo já pediu para a Polícia Civil uma investigação sobre as causas do acidente, por achar muito estranho que a embarcação tenha atingido a plataforma.', '', 'arthur-bisneto03.jpg', 1, 1),
(6, '04-11-2015', 'Deputado parabeniza jovens durante a abertura do Parlamento Jovem na Aleam', 'Hoje, durante a abertura do Parlamento Jovem, estive conversando com a Beatriz, 16 anos, a mais jovem, que coincidentemente, está comigo, é minha deputada e fiquei impressionado com o seu conteúdo e com suas opiniões. Ela tem uma opinião formada, ela sabe o que acontece, falamos até de Zona Franca rapidamente. Contei alguns casos pessoais políticos meus, ela me contou algumas questões que incomodam e nós vamos dessa forma construir uma relação. Portanto, parabéns aos jovens, aos suplentes, aos pais que estão muito felizes. A gente tem que entender a sociedade como um todo e a juventude tem um papel fundamental. Eu fui eleito vereador com 20 anos de idade, segundo mais jovem da história de Manaus, se não me engano. Fui eleito com 22 anos deputado estadual pela primeira vez, parece que o mais jovem da história desse parlamento, e eu confesso a Vossas Excelências que o tempo é muito bom e ensina muitas coisas, nos ensina a agir em certas situações com mais calma, mais tranquilidade, a juventude, às vezes, nos empurra a cometermos alguns atos, que com o tempo a gente vê que não são os melhores a serem tomados e nem feitos naquele momento. Por isso nós não podemos desperdiçar a nossa juventude, não podemos deixar o tempo passar, temos que lutar pelos nossos ideais, por um país melhor e digno para todos.', '', '870_arthur_virgilio_bisneto.jpg', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `salaimprensa`
--

INSERT INTO `salaimprensa` (`salaimprensa_id`, `data`, `nome`, `tipo_arquivo`, `arquivo`, `usuario_id`) VALUES
(1, '04-11-2015', 'Futuro comprometido', 'PDF', 'arthur-bisneto03.jpg', 1),
(2, '04-11-2015', 'Futuro comprometido', 'PDF', 'arthur-bisneto03.jpg', 1),
(3, '04-11-2015', 'Futuro comprometido', 'PDF', 'arthur-bisneto03.jpg', 1),
(4, '04-11-2015', 'Futuro comprometido', 'PDF', 'arthur-bisneto03.jpg', 1),
(5, '04-11-2015', 'Futuro comprometido', 'PDF', 'arthur-bisneto03.jpg', 1);

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
(1, 'Karol Oliveira', 'karol', '123', 1, 'jhudhaud', 0),
(2, 'Thiago Maneschy', 'thiago', '123', 1, 'udahduhaudhaud', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`videos_id`, `data_video`, `legenda`, `video`, `usuario_id`) VALUES
(1, '05-11-2015', 'Arthur Bisneto traça panorama negativo do cen', 'qg0Z-kmzP5Y', 1),
(2, '29-10-2015', 'Programa Artur Bisneto deputado federal – Bio', 'poqtLBP36Fw', 1),
(3, '28-10-2015', 'Artur Bisneto – Mais Amazonas, mais Brasil', 'DtHZ9y3O2Rk', 1),
(4, '28-10-2015', 'Programa Artur Bisneto deputado federal – Int', 'rVpd2eXxDo4', 1),
(5, '06-11-2015', 'Programa Artur Bisneto deputado federal – Jov', 'cZfTCvCeOMg', 1),
(6, '28-10-2015', 'Programa Artur Bisneto – Zona Franca', 'AuFY31UF6Ck', 1),
(7, '04-11-2015', 'Artur Bisneto – campanha Deputado Federal 201', 'ye378jVftSA', 1);

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
