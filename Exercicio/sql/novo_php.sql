-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Jun-2021 às 18:14
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `novo_php`
--
CREATE DATABASE IF NOT EXISTS `novo_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `novo_php`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `meus_alunos`
--

DROP TABLE IF EXISTS `meus_alunos`;
CREATE TABLE IF NOT EXISTS `meus_alunos` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `Imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `meus_alunos`
--

INSERT INTO `meus_alunos` (`cod`, `nome`, `idade`, `fone`, `cidade`, `Imagem`) VALUES
(2, 'Leilane de Oliveria Almeida Leonidas', 34, '(61)99156-9170', 'Santa Maria', 'uploads/WhatsApp Image 2021-06-08 at 14.49.17.jpeg'),
(4, 'GILBERTO PEREIRA DE ALMEIDA', 60, '61992796305', 'BrasÃ­lia', ''),
(6, 'MARIA ANTONIA DE OLIVEIRA ALMEIDA', 63, '6133936387', 'BRASILIA', ''),
(7, 'Maria dos Anjos de Sousa', 60, '(61)9876-5432', 'Recanto das Emas', ''),
(8, 'JoÃ£o Carlos Almeida Leonidas', 1, '(61)93216-5478', 'Santa Maria', ''),
(9, 'Alice Almeida Rodrigues', 6, '(61)9852-3691', 'Santa Maria', ''),
(10, 'Maria do Carmo da Silva', 70, '(61)98745-5455', 'Taguatinga Norte', ''),
(11, 'Florentino Junio Araujo Leonidas', 30, '(61)98887-5524', 'Asa Sul', ''),
(12, 'Robson de Sousa Freire', 34, '(61)98887-6258', 'Ocidental', ''),
(13, 'Franklin Lima do Nascimento', 36, '(61)92950-5524', 'Setor O', ''),
(14, 'Carla Maria de Sousa', 34, '(61)99977-2581', 'ValparaÃ­so', ''),
(16, 'Lidiane de Oliveira Almeida Rodrigues', 34, '(61)92852-5574', 'SANTA MARIA', ''),
(18, 'LEILANE DE OLIVEIRA ALMEIDA ', 100, '6133936387', 'BrasÃ­lia', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `usuario`, `senha`, `permissao`) VALUES
(1, 'Administrador', 'Admin', '123456', 1),
(2, 'Carlos Henrique', 'henrike66@hotmail.com', '1259', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
