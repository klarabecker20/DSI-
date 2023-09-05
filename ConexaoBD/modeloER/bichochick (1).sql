-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Nov-2018 às 13:54
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bichochick`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachorro`
--

DROP TABLE IF EXISTS `cachorro`;
CREATE TABLE IF NOT EXISTS `cachorro` (
  `idCao` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(30) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `raca_id` int(11) NOT NULL,
  PRIMARY KEY (`idCao`,`raca_id`),
  KEY `fk_cachorro_raca_idx` (`raca_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cachorro`
--

INSERT INTO `cachorro` (`idCao`, `nome`, `sexo`, `peso`, `raca_id`) VALUES
(1, 'Max', NULL, 30, 0),
(2, 'Molly', NULL, 8, 0),
(3, 'Daltro', NULL, 70, 0),
(4, 'Lilly', NULL, 5.2, 0),
(5, 'Alex', NULL, 9.3, 0),
(6, 'Meg', NULL, 3.1, 0),
(7, 'Fred', NULL, 4.7, 0),
(8, 'Ghost', NULL, 2.6, 0),
(9, 'Will', NULL, 8.4, 0),
(10, 'Flora', NULL, 6.8, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachorro_has_proprietario`
--

DROP TABLE IF EXISTS `cachorro_has_proprietario`;
CREATE TABLE IF NOT EXISTS `cachorro_has_proprietario` (
  `cachorro_id` int(11) NOT NULL,
  `proprietario_id` int(11) NOT NULL,
  PRIMARY KEY (`cachorro_id`,`proprietario_id`),
  KEY `fk_cachorro_has_proprietario_proprietario1_idx` (`proprietario_id`),
  KEY `fk_cachorro_has_proprietario_cachorro1_idx` (`cachorro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietario`
--

DROP TABLE IF EXISTS `proprietario`;
CREATE TABLE IF NOT EXISTS `proprietario` (
  `idProp` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(60) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `fone` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idProp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `proprietario`
--

INSERT INTO `proprietario` (`idProp`, `nome`, `endereco`, `fone`, `email`, `senha`) VALUES
(1, 'Amanda Corrêa', 'Rua Um', '5594687239', NULL, NULL),
(2, 'Eduardo Marafiga', 'Rua Dois', '5597878787', NULL, NULL),
(3, 'Elizabeth Favarin', 'Rua Três', '5184275594', NULL, NULL),
(4, 'Marcos Souza', 'Rua Quatro', '5196820034', NULL, NULL),
(5, 'Ana Amaral', 'Rua Cinco', '5581667479', NULL, NULL),
(6, 'Laura Gomes', 'Rua Seis', '5133021147', NULL, NULL),
(7, 'Cristiano Ferreira', 'Rua Sete', '5597878787', NULL, NULL),
(8, 'Thalita Santana', 'Rua Oito', '5433076982', NULL, NULL),
(9, 'Rafael Lopes', 'Rua Nove', '5491223024', NULL, NULL),
(10, 'Eliza dos Santos', 'Rua Dez', '5530476768', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `raca`
--

DROP TABLE IF EXISTS `raca`;
CREATE TABLE IF NOT EXISTS `raca` (
  `idRaca` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(20) DEFAULT NULL,
  `descricao` longtext,
  `faixaPeso` varchar(20) DEFAULT NULL,
  `faixaPreco` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idRaca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `raca`
--

INSERT INTO `raca` (`idRaca`, `nome`, `descricao`, `faixaPeso`, `faixaPreco`) VALUES
(1, 'Akita', 'Os cães da raça possuem uma aparência de lobo, sendo fêmeas mais baixas, e os machos maiores.', 'Entre 34 e 50kg', 'de R$1200,00 à R$180'),
(2, 'Labrador', 'Possuem muita e energia, logo necessitam de muita atividade física.', 'Entre 35 e 43kg', 'de R$500,00 à R$1200'),
(3, 'Pinscher', 'O pinscher miniatura é uma raça de cão de porte pequeno, esbelta, com pelagem curta e densa.', 'Entre 3 e 6kg', 'de R$150,00 à R$500,'),
(4, 'Bulldog', 'Sua estrutura física tem a musculatura bem desenvolvida a cabeça é grande e redonda.', 'Entre 6,5 e 8kg', 'de R$800,00 á R$2000'),
(5, 'Spitz', 'O Spitz alemão anão ou pequeno, é uma raça de cães antiga, descendendes de cães puxadores de trenós.', 'Entre 1,5 e 5kg', 'de R$600,00 à R$1500'),
(6, 'Yorkshire Terrier', 'Este lindo animal costuma ter o pelo longo, de cor castanho claro do focinho até a cauda.', 'Entre 2,3 e 6kg', 'de R$500,00 à R$1500'),
(7, 'Beagle', 'Os beagles são ativos, gostam de brincar e apresentam-se quase sempre alegres.', 'Entre 15 a 23 kg', 'de R$300,00 à R$ 100'),
(8, 'Bulldog Inglês', 'Bulldogs são muito amigáveis e brincalhões, enquanto também são teimosos e protetivos.', 'Entre 18 e 22 kg', 'de R$1000,00 à R$ 30'),
(9, 'Maltês', 'O Maltês é uma pequena raça de cães que não troca de pêlos.', 'Entre 2 e 4kg', 'de R$ 400,00 à R$ 15'),
(10, 'Chow-chow', 'O Chow Chow é um cão robusto com uma cabeça larga e orelhas pequenas e arrendondadas.', 'Entre 20 e 32kg', 'de R$ 450,00 à R$ 15');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cachorro`
--
ALTER TABLE `cachorro`
  ADD CONSTRAINT `fk_cachorro_raca` FOREIGN KEY (`raca_id`) REFERENCES `raca` (`idRaca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cachorro_has_proprietario`
--
ALTER TABLE `cachorro_has_proprietario`
  ADD CONSTRAINT `fk_cachorro_has_proprietario_cachorro1` FOREIGN KEY (`cachorro_id`) REFERENCES `cachorro` (`idCao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cachorro_has_proprietario_proprietario1` FOREIGN KEY (`proprietario_id`) REFERENCES `proprietario` (`idProp`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
