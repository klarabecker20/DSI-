-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Ago-2023 às 13:36
-- Versão do servidor: 8.0.30
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bichochique`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `tipos_amimais_id` int NOT NULL,
  `racas_id` int NOT NULL,
  PRIMARY KEY (`id`,`tipos_amimais_id`,`racas_id`),
  KEY `fk_animais_tipos_amimais_idx` (`tipos_amimais_id`),
  KEY `fk_animais_racas1_idx` (`racas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais_has_proprietarios`
--

DROP TABLE IF EXISTS `animais_has_proprietarios`;
CREATE TABLE IF NOT EXISTS `animais_has_proprietarios` (
  `animais_id` int NOT NULL,
  `proprietarios_id` int NOT NULL,
  PRIMARY KEY (`animais_id`,`proprietarios_id`),
  KEY `fk_animais_has_proprietarios_proprietarios1_idx` (`proprietarios_id`),
  KEY `fk_animais_has_proprietarios_animais1_idx` (`animais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

DROP TABLE IF EXISTS `proprietarios`;
CREATE TABLE IF NOT EXISTS `proprietarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `fone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `proprietarios`
--

INSERT INTO `proprietarios` (`id`, `nome`, `endereco`, `fone`) VALUES
(1, 'Amanda CorrÃªa', 'Rua Um', '5594687239'),
(2, 'Eduardo Marafiga', 'Rua Dois', '5597878787'),
(3, 'Elizabeth Favarin', 'Rua TrÃªs', '5184275594'),
(4, 'Marcos Souza', 'Rua Quatro', '5196820034'),
(5, 'Ana Amaral', 'Rua Cinco', '5581667479'),
(6, 'Laura Gomes', 'Rua Seis', '5133021147'),
(7, 'Cristiano Ferreira', 'Rua Sete', '5597878787'),
(8, 'Thalita Santana', 'Rua Oito', '5433076982'),
(9, 'Rafael Lopes', 'Rua Nove', '5491223024'),
(10, 'Eliza dos Santos', 'Rua Dez', '5530476768');

-- --------------------------------------------------------

--
-- Estrutura da tabela `racas`
--

DROP TABLE IF EXISTS `racas`;
CREATE TABLE IF NOT EXISTS `racas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `descricao` longtext,
  `faixa_peso` varchar(20) DEFAULT NULL,
  `faixa_preco` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `racas`
--

INSERT INTO `racas` (`id`, `nome`, `descricao`, `faixa_peso`, `faixa_preco`) VALUES
(1, 'Akita', 'Os cÃ£es da raÃ§a possuem uma aparÃªncia de lobo, sendo fÃªmeas mais baixas, e os machos maiores.', 'Entre 34 e 50kg', 'de R$1200,00 Ã  R$18'),
(2, 'Labrador', 'Possuem muita e energia, logo necessitam de muita atividade fÃ­sica.', 'Entre 35 e 43kg', 'de R$500,00 Ã  R$120'),
(3, 'Pinscher', 'O pinscher miniatura Ã© uma raÃ§a de cÃ£o de porte pequeno, esbelta, com pelagem curta e densa.', 'Entre 3 e 6kg', 'de R$150,00 Ã  R$500'),
(4, 'Bulldog', 'Sua estrutura fÃ­sica tem a musculatura bem desenvolvida a cabeÃ§a Ã© grande e redonda.', 'Entre 6,5 e 8kg', 'de R$800,00 Ã¡ R$200'),
(5, 'Spitz', 'O Spitz alemÃ£o anÃ£o ou pequeno, Ã© uma raÃ§a de cÃ£es antiga, descendendes de cÃ£es puxadores de trenÃ³s.', 'Entre 1,5 e 5kg', 'de R$600,00 Ã  R$150'),
(6, 'Yorkshire Terrier', 'Este lindo animal costuma ter o pelo longo, de cor castanho claro do focinho atÃ© a cauda.', 'Entre 2,3 e 6kg', 'de R$500,00 Ã  R$150'),
(7, 'Beagle', 'Os beagles sÃ£o ativos, gostam de brincar e apresentam-se quase sempre alegres.', 'Entre 15 a 23 kg', 'de R$300,00 Ã  R$ 10'),
(8, 'Bulldog InglÃªs', 'Bulldogs sÃ£o muito amigÃ¡veis e brincalhÃµes, enquanto tambÃ©m sÃ£o teimosos e protetivos.', 'Entre 18 e 22 kg', 'de R$1000,00 Ã  R$ 3'),
(9, 'MaltÃªs', 'O MaltÃªs Ã© uma pequena raÃ§a de cÃ£es que nÃ£o troca de pÃªlos.', 'Entre 2 e 4kg', 'de R$ 400,00 Ã  R$ 1'),
(10, 'Chow-chow', 'O Chow Chow Ã© um cÃ£o robusto com uma cabeÃ§a larga e orelhas pequenas e arrendondadas.', 'Entre 20 e 32kg', 'de R$ 450,00 Ã  R$ 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_amimais`
--

DROP TABLE IF EXISTS `tipos_amimais`;
CREATE TABLE IF NOT EXISTS `tipos_amimais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `fk_animais_racas1` FOREIGN KEY (`racas_id`) REFERENCES `racas` (`id`),
  ADD CONSTRAINT `fk_animais_tipos_amimais` FOREIGN KEY (`tipos_amimais_id`) REFERENCES `tipos_amimais` (`id`);

--
-- Limitadores para a tabela `animais_has_proprietarios`
--
ALTER TABLE `animais_has_proprietarios`
  ADD CONSTRAINT `fk_animais_has_proprietarios_animais1` FOREIGN KEY (`animais_id`) REFERENCES `animais` (`id`),
  ADD CONSTRAINT `fk_animais_has_proprietarios_proprietarios1` FOREIGN KEY (`proprietarios_id`) REFERENCES `proprietarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
