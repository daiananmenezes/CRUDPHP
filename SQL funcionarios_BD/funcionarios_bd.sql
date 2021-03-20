-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2020 às 23:31
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `funcionarios_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios_tb`
--

CREATE TABLE `funcionarios_tb` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `funcionarios_tb`
--

INSERT INTO `funcionarios_tb` (`id_funcionario`, `nome`, `cargo`, `email`) VALUES
(4, 'Alisson', 'Gerente', 'alisson.artigas@gmail.com'),
(6, 'teste', 'Arquiteto de Sistemas', 'teste@com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'jow', '1234', 'jow@gmail.com'),
(6, 'teste', '123', 'teste@email.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `funcionarios_tb`
--
ALTER TABLE `funcionarios_tb`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios_tb`
--
ALTER TABLE `funcionarios_tb`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
