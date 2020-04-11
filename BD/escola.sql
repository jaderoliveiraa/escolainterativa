-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Abr-2020 às 22:21
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `situacao` int(1) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `email`, `senha`, `dataCadastro`, `situacao`, `tipo`) VALUES
(1, 'Carlos jader da silva oliveira', '88988420622', 'jaderoliveiraa@gmail.com', '21548721', '2020-03-23 03:00:00', 1, 1),
(14, 'admin', '0000000000000', 'admin@admin.com', '123456', '2020-03-30 19:43:24', 1, 1),
(15, 'Professor', '88 88888-8888', 'professor@professor.com', '123456', '2020-03-31 22:58:00', 1, 2),
(16, 'responsavel', '88988765432', 'responsavel@responsavel.com', '123456', '2020-04-10 13:20:15', 1, 3),
(17, 'aluno', '88988888888', 'aluno@aluno.com', '123456', '2020-04-10 13:22:44', 1, 4),
(18, 'inativo', '88988888888', 'inativo@inativo.com', '123456', '2020-04-10 13:23:18', 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
