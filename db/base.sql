SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE doacao;

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(150) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `num_endereco` varchar(10) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `tipo_sanguineo` varchar(5) NOT NULL,
  `medicamento` varchar(3) NOT NULL,
  `info_saude` text NOT NULL,
  `notificacao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;