-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/06/2025 às 17:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `veiculos`
--
CREATE DATABASE IF NOT EXISTS `veiculos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `veiculos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL,
  `titulo_anuncio` varchar(255) NOT NULL,
  `descricao_anuncio` text NOT NULL,
  `data_publicacao` date NOT NULL,
  `marca_veiculo` varchar(255) NOT NULL,
  `modelo_veiculo` varchar(255) NOT NULL,
  `ano_veiculo` int(4) NOT NULL,
  `cor_veiculo` varchar(255) NOT NULL,
  `placa_veiculo` varchar(255) NOT NULL,
  `nome_proprietario` varchar(255) NOT NULL,
  `telefone_proprietario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `titulo_anuncio`, `descricao_anuncio`, `data_publicacao`, `marca_veiculo`, `modelo_veiculo`, `ano_veiculo`, `cor_veiculo`, `placa_veiculo`, `nome_proprietario`, `telefone_proprietario`) VALUES
(3, 'Mercedes-Benz C 300 AMG', 'Luxo, desempenho e conforto incomparáveis', '2025-06-25', 'Mercedes-Benz', 'C 300 AMG', 2023, 'Preto', '123GFT', 'Felipe', '1199876765'),
(4, 'BMW X5 xDrive 45e', 'SUV híbrido com tecnologia de ponta', '2025-05-20', 'BMW', 'X5 xDrive 45e', 2023, 'Cinza', '234FRD', 'Lucas', '1199876534'),
(5, 'Audi RS Q8', 'Potência de supercarro com elegância de SUV', '2025-06-24', 'Audi', 'RS Q8', 2023, 'Preto', '23F4G5', 'Alice', '1199765678'),
(6, 'Porsche 911 Carrera GTS', 'Design clássico com motor esportivo e acabamento refinado', '2025-05-28', 'Porsche', '911 Carrera GTS', 2022, 'Branco', '27TY45F', 'Luisa', '1198765094');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(2, 'Felipe ', '123'),
(3, 'Lucas', '467'),
(4, 'Alice', '670'),
(5, 'Luisa', '983');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
