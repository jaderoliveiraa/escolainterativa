-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Abr-2020 às 23:07
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
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `num` int(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(5) NOT NULL,
  `serie` varchar(25) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idUsuarios` int(12) NOT NULL,
  `situacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `dataNasc`, `sexo`, `telefone`, `email`, `senha`, `cep`, `rua`, `num`, `bairro`, `cidade`, `estado`, `serie`, `dataCadastro`, `idUsuarios`, `situacao`) VALUES
(1, 'menino teste', '2000-09-24', 'Masculino', '88 98841-5487', 'fulano@menino.com', '123456', '63034118', '25 de março', 321, 'Pirajá', 'Juazeiro', 'CE', 'Primeiro Ano', '2020-03-31 22:18:06', 14, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuarios` (`idUsuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_usuarios` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
