-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2023 às 02:25
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meusite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `NoticiaID` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Subtitulo` varchar(255) NOT NULL,
  `Noticia` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`NoticiaID`, `Titulo`, `Subtitulo`, `Noticia`, `Imagem`) VALUES
(1, 'Artigo 1', 'Patrícia Marcante', 'O termo cegueira é usado para definir a condição de pessoas que apresentam total incapacidade de enxergar e também para aquelas com uma visão residual que, apesar de não ser a perda total da visão, dificulta-as de executar suas atividades diárias normalmente. Essa condição é chamada também de amaurose.\r\nA cegueira pode surgir desde o nascimento e, nesse caso, é chamada de cegueira congênita ou, ainda, ocorrer mais tarde, que é nomeada de cegueira adventícia ou adquirida.\r\nAlém disso, problemas como glaucoma, degeneração relacionada à idade, retinopatia diabética e opacidade corneada também podem ser citados como exemplos de causas.\r\n\r\nDe acordo com dados do CBO:\r\n\r\n- 90% dos casos de cegueira ocorrem nas áreas pobres do mundo;\r\n\r\n- 60% das cegueiras são evitáveis;\r\n\r\n- 40% das cegueiras têm conotação genética (são hereditárias);\r\n\r\n- 25% das cegueiras têm causa infecciosa;\r\n\r\n- 20% das cegueiras já instaladas são recuperáveis.\r\n', 'cego.jpg'),
(2, 'Artigo 2', 'Guilherme Henrique Gil', 'A cegueira é algo muito complicado para os deficientes, ainda mais com o acesso a internet. A cegueira dificulta muito o acesso à internet, e por isso é importante pensar em alternativas de acessibilidade para que os deficientes visuais possam usufruir da mesma forma que as outras pessoas. A acessibilidade para deficientes visuais é algo ainda precário, mas a tendência é que ao longo de alguns anos já se possa ter mais sites com mais alternativas de acessibilidade.  \r\n\r\nPor isso nosso grupo pensou em alternativas para o melhor uso de um site para cegos. Nosso objetivo é que esse site tenha o máximo de recursos acessíveis possíveis, e que ele possa ser usado por todos, ou seja, ser altamente funcional para todos e ser visualmente bonito (para pessoas sem deficiência usarem também). Isso poderá se tornar realidade daqui alguns anos, pois a exigência por recursos acessíveis está alta, e essas ferramentas poderão ser aplicadas em sites já existentes. \r\n\r\nUma solução que pensamos é o de descrever em voz alta uma imagem. É só passar o mouse por cima e assim terá a descrição em voz alta, e se quiser repetir é só clicar novamente na imagem. Outra coisa que pensamos é o uso da tecla TAB junto com as setinhas, para assim o cego poder se guiar por meio da leitura em voz alta. \r\n', 'cego.jpg'),
(3, 'Artigo 3', 'Patrícia Marcante', 'A acessibilidade na web é o que permite que haja a interação do “computador” com a pessoa com deficiência. Existem diversas deficiências, entretanto iremos trabalhar apenas com a cegueira, tendo foco de como tornar possível a utilização do site sem enxergar nada. \r\nUma das opções para tornar isso acessível é a utilização de Leitores de tela, que são programas que capturam toda e qualquer informação apresentada na forma de texto e a transforma em uma resposta falada através de um sintetizador de voz. \r\nPara que haja essa leitura, o site tem que estar programado de maneira clara, sem gambiarras e com códigos próprios para esse tipo de interação, um HTML bem feito facilita na leitura. A acessibilidade pode ser aplicada no código usando <alt> e colocando uma descrição na imagem explicando o que há nela, sendo bem organizado em seu visual para que leitor seja útil e não confunda mais a pessoa.  A implementação do tab index no código é extremamente importante para que o usuário navegue apenas com os teclado, sem precisar da utilização do mouse.\r\nSão coisas simples a serem acrescentadas mas que fazem total diferença.', 'cego.jpg'),
(4, 'Artigo 4', 'Thiago Schiedeck Dias da Silveira', 'Dentre tantas incapacitações, uma das mais prejudiciais e com maior potencial de exclusão, é a cegueira, tenha ela sido adquirida ao longo do tempo, ou, pior ainda, de nascença. Entretanto, isso não impossibilita ela de ser o problema que mais afeta pacientes ao redor do país, segundo dados do IBGE de 2010, 6,5 milhões de brasileiros apresentam alguma dificuldade na visão, sendo a deficiência mais comum, atingindo 3,5% da população do país, sendo as principais causas a catarata, glaucoma, retinopatia diabética, cegueira infantil e degeneração macular. \r\n\r\nVisto que, no primeiro levantamento global realizado pela OMS sobre o assunto, concluiu-se que mais de 2,2 bilhões de pessoas ao redor do mundo passam por problemas de visão ou cegueira, era de se esperar que houvesse uma maior comoção da sociedade em prol deste grande grupo, entretanto, não é exatamente o que acontece, e apesar de haver leis na constituição que incentivam a inclusão, muitas tendem a ser facilmente burláveis ou resolvidas com soluções que não tendem a solucionar muita coisa. Como por exemplo, a lei de nº 7.853 de 24 de outubro de 1989, porém é uma lei muito antiga, e não contempla todas as necessidades dessa parcela da população. \r\n\r\nAlém disso, com os avanços da medicina, felizmente foram encontradas saídas para tratar certos problemas ligado a visão, porém isso não muda o fato de que ainda assim muitos cidadãos são incapacitados de acessar diversos serviços devido a este problema, que, há de se convir, que com o tempo e a tecnologia dos dias de hoje poderia ser facilmente contornado. Sem contar os benefícios que isso podem trazer, tanto para as empresas que adotam estas medidas, quanto para, obviamente, os usuários que podem usufruir destes produtos. Uma evolução é necessária neste meio, e sabe-se que ela é sim possível, com o estímulo e a supervisão certa, essas pessoas não só podem como deverão ser incluídas. \r\n\r\nContudo, quando se fala sobre navegação na internet, realmente existem ferramentas cujo objetivo é o auxílio de pessoas cegas, entretanto, essas ferramentas tendem a ser apenas para tapar buraco e ser usado como desculpa para as empresas não precisarem planejar tal acessibilidade na raiz de seus produtos, como sites e apps. Por exemplo, o talk back, configuração de celular que permite que o dispositivo realize a leitura da tela conforme requisitado pelo usuário, ajuda, de fato, porém se não há uma preocupação, desde o começo, por parte dos desenvolvedores as chances deste tipo de ferramenta não se aplicarem aos seus produtos são altas, tornando algo que era pra facilitar a vida das pessoas, em uma dor de cabeça ainda maior. \r\n', 'cego.jpg'),
(7, 'oi', 'oi', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `imagem2` varchar(255) NOT NULL,
  `imagem3` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `secao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `nome`, `preco`, `imagem`, `imagem2`, `imagem3`, `descricao`, `secao`) VALUES
(1, 'Egernético Monster Java Programação', 158325, 'monsterjava.jpg', 'monsterjava2.jpg', 'monsterjava3.jpg', 'COFFEE DONE THE MONSTER WAY: No foam, extra hot, half-caf, no-whip, soy latte. Enough of the coffee house BS already. It’s time to get out of the line and step up to what’s next. Coffee done the Monster way, wide open, with a take no prisoners attitude and the experience and know-how to back it up KILLER FLAVOR: Mean Bean Java Monster premium coffee and cream, brewed up with a killer Vanilla Bean flavor, supercharged with the Monster energy blend and 188mg of caffeine per can. Monster Java Mean Bean, Coffee + Energy Drink, 15 Fl Oz.', 'OFERTAS'),
(2, 'Console de videogame Sony Playstation 5', 4999.99, 'ps5.jpg', 'ps52.jpg', 'ps53.jpg', 'Play Has No Limits Jogar Não Tem Limites PlayStation5 O console PS5 oferece novas possibilidades de jogabilidade que você nunca imaginou. Reproduza jogos para PS5 e PS4 em Blu-ray Disc. Além disso, você também pode baixar jogos digitais para PS5 e PS4 pela PlayStation Store. Experimente o carregamento extremamente rápido do SSD de ultra-velocidade, uma imersão mais profunda com suporte à resposta tátil, gatilhos adaptáveis e áudio 3D. Além de uma geração totalmente nova de jogos incríveis PlayStation.\r\n\r\nNa velocidade da luz Aproveite o carregamento extremamente rápido com o SSD de altíssima velocidade, uma imersão mais profunda com suporte a feedback tátil, gatilhos adaptáveis e áudio em 3D*, além de uma geração inédita de jogos incríveis para PlayStation. *Áudio 3D via alto-falantes integrados da TV ou fones de ouvido estéreo analógicos/USB. Configuração necessária.\r\nJogos deslumbrantes Maravilhe-se com os gráficos incríveis e experimente os recursos do novo PS5. Imersão de tirar o fôlego Descubra uma experiência de jogos ainda mais profunda com a ajuda da resposta tátil, dos gatilhos adaptáveis e da tecnologia de áudio 3D.\r\n\r\nExplore ambientes realistas com o Ray tracing. O Ray tracing traz novos níveis de realismo com sombras naturais e reflexos no suporte a jogos do PS5. Veja cores vibrantes. Com uma TV HDR, os jogos compatíveis do PS5 exibem uma incrível variedade de cores.\r\n\r\nMovimente-se pelos mundos dos jogos com um realismo incrível. Jogabilidade com taxa de quadros uniforme e fluída de até 120 fps em jogos compatíveis, com suporte para saída de 120 Hz em telas 4K. Experimente gráficos 4K nítidos. Com jogos compatíveis do PS5, cada pequeno detalhe ganha vida em uma TV 4K. Jogue mais de 4 mil jogos do PS4 em seu console PS5. Viva a nostalgia de jogar seus títulos favoritos do PS4 e do PS VR com a Retrocompatibilidade.', 'LANÇAMENTOS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secoes`
--

CREATE TABLE `secoes` (
  `SecaoID` int(11) NOT NULL,
  `secao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `secoes`
--

INSERT INTO `secoes` (`SecaoID`, `secao`) VALUES
(1, 'OFERTAS'),
(3, 'LANÇAMENTOS'),
(4, 'PC GAMER'),
(5, 'GIFT CARDS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioID` int(11) NOT NULL,
  `NomeCompleto` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`UsuarioID`, `NomeCompleto`, `Email`, `Senha`) VALUES
(1, 'Thiago ', 'thiago@gmail.com', '1234'),
(2, 'Black Oreo', 'black@gmail.com', 'blackoreo'),
(3, 'Batman da Silva', 'batman@gmail.com', 'batsenha'),
(5, 'Patrícia', 'patricia@gmail.com', '1234'),
(6, 'Aléxis', 'alexis@gmail.com', '1234'),
(7, 'Guilherme', 'guilherme@gmail.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`NoticiaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- Índices para tabela `secoes`
--
ALTER TABLE `secoes`
  ADD PRIMARY KEY (`SecaoID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `NoticiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `secoes`
--
ALTER TABLE `secoes`
  MODIFY `SecaoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
