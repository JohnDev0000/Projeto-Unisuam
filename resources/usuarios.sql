-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2024 at 01:16 AM
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

INSERT INTO `usuarios` (`id`, `nome`, `data_nascimento`, `sexo`, `nome_materno`, `cpf`, `telefone_celular`, `telefone_fixo`, `endereco`, `complemento`, `login`, `senha`, `created_at`, `is_master`) VALUES
(44, 'Anderson Silva Pereira', '2024-06-13', 'Masculino', 'Clarinete Silva Pereira', '11100022247', '123456789', '09765432', 'Av Das Pimbas', 'Apt. 204', 'anders', '$2y$10$mnHQeM6wDe60jaP7Dr/z3OZbFpZzvqmp6pka/nXeZO.kBj8Dkm/Ym', '2024-06-11 21:32:31', 0),
(46, 'PimbaNomeNomeNome', '2024-06-11', 'Feminino', 'Andressa Viera Costa', '13333333333333', '222222222222222', '111111111111111', 'Av Palmeiraaaaaaaa', 'Casa fundos 599', 'pimbal', '$2y$10$5da6ow0L0M3GbYwdy2XoZ.g6VOPfAymHB6g1h2omvNbm120atqgh6', '2024-06-12 22:39:16', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
