-- Importante: Este arquivo é um exemplo de um arquivo SQL gerado pelo phpMyAdmin.
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2024 at 11:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pimba`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` enum('Masculino','Feminino','Outro') NOT NULL,
  `nome_materno` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone_celular` varchar(15) NOT NULL,
  `telefone_fixo` varchar(15) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_master` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--
-- Todos os usuários desta tabelam foram inseridos através do form pela aplicação.
INSERT INTO `usuarios` (`id`, `nome`, `data_nascimento`, `sexo`, `nome_materno`, `cpf`, `telefone_celular`, `telefone_fixo`, `endereco`, `complemento`, `login`, `senha`, `created_at`, `is_master`) VALUES
(1, 'adfasfsa', '2024-06-05', 'Masculino', 'asdfasfsa', 'afdafas', 'a12313', '1231', 'adfasfsa', 'adfasf', 'fasdfasf', '$2y$10$nmOCpcJJJUMd4GoecF.G5.j.d0EBxraTirhjS9t7quajfIbB/TjpW', '2024-06-04 07:59:49', 0),
(32, 'peixe', '2024-06-03', 'Masculino', 'asda', 'dasda', 'asdad', 'dsadsa', 'dsadsa', 'asdad', 'pee', '$2y$10$sXAZHmBOIOrhBvjYBtRZT.KhJJSVZ0Q44wyIaQvOp78enjE/D9MuG', '2024-06-06 13:03:03', 0),
(33, 'reimbi', '2024-06-16', 'Masculino', 'sfad', 'fasdfas', 'adfsa', 'fasdfas', 'asdfsa', 'dasfasf', 'aba', '$2y$10$hp33mrI2J5CNhiN31ESkHeIz4rvdijnojp0lgG0ZPAXPZ.d7FuHa6', '2024-06-06 13:06:41', 0),
(34, 'akea', '2024-06-11', 'Masculino', 'asda', 'dsada', 'dasda', 'sdadsa', 'dsadada', 'sdasda', 'aqw', '$2y$10$BNZJ703LVU0Gn8058Gj5L.TfOWcNwinMns4Y./tiuZHHrHOOfCMty', '2024-06-06 13:14:37', 0),
(35, 'akas', '2024-06-09', 'Masculino', 'fsdaf', 'fdasfas', 'fdafas', 'fasdfsa', 'asdfas', 'asdfas', 'aka', '$2y$10$8J/nfYhX9qPnPKgnQmnC4OhQou93b44tL2/zZYCEKAcLvi22WfOsy', '2024-06-06 13:18:51', 0),
(36, 'aaa', '2024-06-03', 'Masculino', 'asda', 'dsada', 'asdad', 'asda', 'dasda', 'adsda', 'bbb', '$2y$10$rkjg6VzNyp..xSrL0ZY.re/5sgjk16oLRQW0SUPX1MaZpYlIy1gWe', '2024-06-06 17:32:25', 0),
(38, 'aaa', '2024-06-10', 'Masculino', 'asdada', '12345', 'asdads', 'adadfsaff', 'asdada', 'dasda', 'bbbc', '$2y$10$Rg4DkHrvAtM2pFTPkEO0NeYmBHKXmwW9/UNiVYe2DbiMwRYzgGo9y', '2024-06-06 17:34:48', 0),
(39, 'abc', '2024-06-11', 'Masculino', 'dsafaf', '12345', 'fadsfas', 'dfafas', 'adsfasf', 'asdfas', 'pimba', '$2y$10$Ac1UI5LaAWWdL1Roy1Dru.Y2muPZ2OxGknZLfE34nw3LyIkCtO2KC', '2024-06-06 17:36:43', 0),
(42, 'asdad', '2024-06-11', 'Masculino', 'fasdad', '12345', 'fasdfsa', 'asdfsa', 'sadfasf', 'asdfas', 'ata', '$2y$10$Kp500gkOoChFBsF8g.XcP.4GhZcS65vKaeqa5vJIvXkQx2cpEQZAS', '2024-06-07 14:01:59', 0),
(43, 'testenome', '2024-06-03', 'Feminino', 'dfasfa', '12345', 'dfasf', 'fdasfas', 'wqeq', 'dfafsa', 'testelogin', '$2y$10$brDfpDKlMahUl2xXzDQnM.4/bvCPxeinv7Q/n9B4jXxSNp.3VaHLW', '2024-06-07 16:13:03', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
