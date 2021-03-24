-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/03/2021 às 21:41
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_carros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `ce_id_carros` int(100) NOT NULL,
  `modelo_carro` varchar(100) NOT NULL,
  `ano_carro` int(4) NOT NULL,
  `placa_carro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `carros`
--

INSERT INTO `carros` (`ce_id_carros`, `modelo_carro`, `ano_carro`, `placa_carro`) VALUES
(1, 'Gol', 2011, 'DEC2501'),
(1, 'UNO', 2015, 'HEL0512'),
(1, 'Prisma', 2019, 'MOR1005'),
(1, 'Argo', 2019, 'ALM3323'),
(1, 'Fiat Mobi', 2015, 'NFI2225');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `ce_id_cliente` int(100) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `idade` int(10) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `renda` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`ce_id_cliente`, `nome_cliente`, `cpf`, `idade`, `profissao`, `renda`) VALUES
(1, 'Karina', '11111111111', 28, 'Enfermeira', 2500),
(1, 'Maria', '22222222222', 40, 'Cozinheira', 4000);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `nome_usuario` varchar(500) NOT NULL,
  `email_usuario` varchar(500) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha`) VALUES
(1, 'João', 'joão@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD KEY `ce_id_carros` (`ce_id_carros`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD KEY `ce_id_cliente` (`ce_id_cliente`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carros`
--
ALTER TABLE `carros`
  ADD CONSTRAINT `ce_id_carros` FOREIGN KEY (`ce_id_carros`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `ce_id_cliente` FOREIGN KEY (`ce_id_cliente`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
