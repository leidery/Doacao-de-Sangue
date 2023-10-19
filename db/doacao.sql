-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/10/2023 às 03:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doacao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cad` int(100) NOT NULL,
  `nome_cad` varchar(150) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `tipo_sanguineo` varchar(5) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `num_endereco` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `medicamento` varchar(3) NOT NULL,
  `info_saude` text NOT NULL,
  `notificacao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cad`, `nome_cad`, `data_nascimento`, `sexo`, `tipo_sanguineo`, `telefone`, `cep`, `endereco`, `num_endereco`, `email`, `senha`, `rg`, `cpf`, `medicamento`, `info_saude`, `notificacao`) VALUES
(11, 'pessoa sem nome', '2023-10-18', 'feminino', 'B+', '33333333333', '23222222', 'ffrffefef23232', '2222', 'eniladark@gmail.com', '$2y$10$R4AhasiS0Z2A6j3cwzKCY.h1KQxRLx2O80d0QOJaUU6lehQpNVunu', '125677658', '12345678900', 'sim', 'cocaina', 0),
(12, 'novoteste', '2023-10-04', 'feminino', 'B+', '33333333333', '23222222', 'ffrffefef23232', '2222', 'teste@gmail.com', '$2y$10$AaRz81CXEEvsJcV6McTbdeRNFj7wRACXEWah6FIGorGc/WqpRNq6S', '232343454', '12312312225', 'nao', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `email_log` varchar(100) NOT NULL,
  `senha_log` varchar(150) NOT NULL,
  `id_log` int(11) NOT NULL,
  `id_cadastro` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cad`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_log`),
  ADD UNIQUE KEY `idx_id_cadastro` (`id_cadastro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cad` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `idx_id_cadastro` FOREIGN KEY (`id_cadastro`) REFERENCES `cadastro` (`id_cad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
