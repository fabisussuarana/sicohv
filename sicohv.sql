-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 18:01
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sicohv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ipi3`
--

CREATE TABLE `ipi3` (
  `hora` varchar(5) NOT NULL,
  `seg` int(11) DEFAULT NULL,
  `ter` int(11) DEFAULT NULL,
  `qua` int(11) DEFAULT NULL,
  `qui` int(11) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `sab` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ipi3`
--

INSERT INTO `ipi3` (`hora`, `seg`, `ter`, `qua`, `qui`, `sex`, `sab`) VALUES
('07:00', 1, 2, 12, 3, 5, 0),
('07:50', 1, 2, 12, 3, 5, 0),
('08:40', 3, 13, 6, 7, 9, 0),
('09:50', 3, 13, 6, 7, 10, 0),
('10:40', 4, 8, 11, 4, 10, 0),
('11:30', 4, 8, 11, 4, 2, 0),
('14:20', 5, 0, 3, 0, 0, 0),
('15:10', 5, 0, 3, 0, 0, 0),
('16:20', 0, 0, 4, 0, 0, 0),
('17:10', 0, 0, 4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `materia`) VALUES
(0, 'Livre'),
(1, 'Empreendedorismo'),
(2, 'Língua Portuguesa'),
(3, 'Matemática'),
(4, 'Física'),
(5, 'Química'),
(6, 'Biologia'),
(7, 'História1'),
(8, 'Geografia'),
(9, 'Filosofia'),
(10, 'Sociologia'),
(11, 'Facultativa (Espanhol/Francês)'),
(12, 'Prática em Programação WEB'),
(13, 'Segurança de Aplicação WEB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profs`
--

CREATE TABLE `profs` (
  `id` int(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `matricula` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ipi3`
--
ALTER TABLE `ipi3`
  ADD PRIMARY KEY (`hora`),
  ADD KEY `seg` (`seg`),
  ADD KEY `ter` (`ter`),
  ADD KEY `qua` (`qua`),
  ADD KEY `qui` (`qui`),
  ADD KEY `sex` (`sex`),
  ADD KEY `sab` (`sab`);

--
-- Índices para tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ipi3`
--
ALTER TABLE `ipi3`
  ADD CONSTRAINT `ipi3_ibfk_1` FOREIGN KEY (`seg`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_2` FOREIGN KEY (`ter`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_3` FOREIGN KEY (`qua`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_4` FOREIGN KEY (`qui`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_5` FOREIGN KEY (`sex`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_6` FOREIGN KEY (`sab`) REFERENCES `materias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
