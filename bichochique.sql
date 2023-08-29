-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Ago-2023 às 14:37
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
  `tipos_animais_id` int NOT NULL,
  `racas_id` int NOT NULL,
  PRIMARY KEY (`id`,`tipos_animais_id`,`racas_id`),
  KEY `fk_animais_tipos_animais_idx` (`tipos_animais_id`),
  KEY `fk_animais_racas1_idx` (`racas_id`)
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
(1, 'Amanda Corrêa', 'Rua Um', '5594687239'),
(2, 'Eduardo Marafiga', 'Rua Dois', '5597878787'),
(3, 'Elizabeth Favarin', 'Rua Três', '5184275594'),
(4, 'Marcos Souza', 'Rua Quatro', '5196820034'),
(5, 'Ana Amaral', 'Rua Cinco', '5581667479'),
(6, 'Laura Gomes', 'Rua Seis', '5133021147'),
(7, 'Cristiano Ferreira', 'Rua Sete', '5597878787'),
(8, 'Thalita Santana', 'Rua Oito', '5433076982'),
(9, 'Rafael Lopes', 'Rua Nove', '5491223024'),
(10, 'Eliza dos Santos', 'Rua Dez', '5530476768');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios_has_animais`
--

DROP TABLE IF EXISTS `proprietarios_has_animais`;
CREATE TABLE IF NOT EXISTS `proprietarios_has_animais` (
  `proprietarios_id` int NOT NULL,
  `animais_id` int NOT NULL,
  PRIMARY KEY (`proprietarios_id`,`animais_id`),
  KEY `fk_proprietarios_has_animais_animais1_idx` (`animais_id`),
  KEY `fk_proprietarios_has_animais_proprietarios1_idx` (`proprietarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_animais`
--

DROP TABLE IF EXISTS `tipos_animais`;
CREATE TABLE IF NOT EXISTS `tipos_animais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuários`
--

DROP TABLE IF EXISTS `usuários`;
CREATE TABLE IF NOT EXISTS `usuários` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
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
  ADD CONSTRAINT `fk_animais_tipos_animais` FOREIGN KEY (`tipos_animais_id`) REFERENCES `tipos_animais` (`id`);

--
-- Limitadores para a tabela `proprietarios_has_animais`
--
ALTER TABLE `proprietarios_has_animais`
  ADD CONSTRAINT `fk_proprietarios_has_animais_animais1` FOREIGN KEY (`animais_id`) REFERENCES `animais` (`id`),
  ADD CONSTRAINT `fk_proprietarios_has_animais_proprietarios1` FOREIGN KEY (`proprietarios_id`) REFERENCES `proprietarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
