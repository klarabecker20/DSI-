-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Out-2023 às 01:57
-- Versão do servidor: 8.0.34
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `netflix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

DROP TABLE IF EXISTS `obras`;
CREATE TABLE IF NOT EXISTS `obras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `serie_ou_filme` char(1) NOT NULL,
  `lancamento` date NOT NULL,
  `categorias_id` int NOT NULL,
  `link` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`categorias_id`),
  KEY `fk_filmes_categorias1_idx` (`categorias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras_has_perfis`
--

DROP TABLE IF EXISTS `obras_has_perfis`;
CREATE TABLE IF NOT EXISTS `obras_has_perfis` (
  `obras_id` int NOT NULL,
  `perfis_id` int NOT NULL,
  PRIMARY KEY (`obras_id`,`perfis_id`),
  KEY `fk_obras_has_perfis_perfis1_idx` (`perfis_id`),
  KEY `fk_obras_has_perfis_obras1_idx` (`obras_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

DROP TABLE IF EXISTS `perfis`;
CREATE TABLE IF NOT EXISTS `perfis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `kids_ou_nao` char(1) NOT NULL,
  `usuarios_id` int NOT NULL,
  PRIMARY KEY (`id`,`usuarios_id`),
  KEY `fk_perfis_usuários_idx` (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `senha_UNIQUE` (`senha`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`) VALUES
(4, 'ADM@ADM', 'eusouadm', 'ADM');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `obras`
--
ALTER TABLE `obras`
  ADD CONSTRAINT `fk_filmes_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`);

--
-- Limitadores para a tabela `obras_has_perfis`
--
ALTER TABLE `obras_has_perfis`
  ADD CONSTRAINT `fk_obras_has_perfis_obras1` FOREIGN KEY (`obras_id`) REFERENCES `obras` (`id`),
  ADD CONSTRAINT `fk_obras_has_perfis_perfis1` FOREIGN KEY (`perfis_id`) REFERENCES `perfis` (`id`);

--
-- Limitadores para a tabela `perfis`
--
ALTER TABLE `perfis`
  ADD CONSTRAINT `fk_perfis_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
