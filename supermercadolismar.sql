-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2021 às 14:58
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `supermercadolismar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tickets`
--

CREATE TABLE `tickets` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` int(11) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tickets`
--

INSERT INTO `tickets` (`nome`, `email`, `telemovel`, `mensagem`) VALUES
('dsad', 'sds@sdada.com', 123123123, 'ddasdasdasd'),
('dsadDS', 'a20454l@gmail.com', 919302222, 'DSADSAD'),
('dsd', 'a20454l@gmail.com', 912939212, 'DSADASDASDA'),
('Luís Gomes', 'lfmg.2468@gmail.com', 919403217, 'dsadasdasd'),
('sdads', 'a20454l@gmail.com', 919302222, 'EU SOU O TALA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `email` varchar(32) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `apelido` varchar(32) NOT NULL,
  `palpasse` varchar(32) NOT NULL,
  `tipo` enum('1','2','3') NOT NULL DEFAULT '3',
  `tentativasrestantes` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`email`, `nome`, `apelido`, `palpasse`, `tipo`, `tentativasrestantes`) VALUES
('12345@gmail.com', 'Rafael', 'Pereira', '827ccb0eea8a706c4c34a16891f84e7b', '3', 5),
('admin@admin.com', 'Admin', 'ADMIN', '17b9b441b99ea2b90d80f5a8d81adba2', '3', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
