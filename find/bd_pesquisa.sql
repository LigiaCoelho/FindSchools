-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2017 às 18:58
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pesquisa`
--

CREATE TABLE `tb_pesquisa` (
  `id` int(11) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `ano_letivo` int(8) NOT NULL,
  `turno` enum('vespertino','matutino','noturno') NOT NULL,
  `escola` varchar(60) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `vagas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pesquisa`
--

INSERT INTO `tb_pesquisa` (`id`, `cidade`, `ano_letivo`, `turno`, `escola`, `endereco`, `telefone`, `vagas`) VALUES
(1, 'Sobradinho', 1, 'matutino', 'Escola Classe 15', 'Area Especial, Qd 03 Sobradinho, CEP 73030-030', '6139999999', 100),
(2, 'Aguas Claras', 2, 'vespertino', 'Centro Educacional Aguas Claras', 'Av. Araucarias 203', '3340-2021', 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id_pessoa` int(4) NOT NULL,
  `nome_resp` text NOT NULL,
  `cpf_resp` varchar(20) NOT NULL,
  `dn_resp` varchar(11) NOT NULL,
  `tel_resp` int(12) NOT NULL,
  `end_resp` varchar(60) NOT NULL,
  `email_resp` varchar(20) NOT NULL,
  `nome_aluno` text NOT NULL,
  `cpf_aluno` int(11) NOT NULL,
  `dn_aluno` varchar(12) NOT NULL,
  `grau` text NOT NULL,
  `protocolo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id_pessoa`, `nome_resp`, `cpf_resp`, `dn_resp`, `tel_resp`, `end_resp`, `email_resp`, `nome_aluno`, `cpf_aluno`, `dn_aluno`, `grau`, `protocolo`) VALUES
(1, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joao Francisco', 788987, '26/11/2007', '', '0'),
(2, '', '0', '', 0, '', '', '', 0, '', '', '0'),
(3, '', '0', '', 0, '', '', '', 0, '', '', '0'),
(4, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joao Francisco', 788987, '26/11/2007', '', '0'),
(5, 'Eduardo Selistre', '2147483647', '14/07/1986', 2147483647, 'vicente pires', 'gostoso@gmail.com', 'Ian', 696969696, '28/11/2017', '', '0'),
(6, 'Eduardo Selistre', '2147483647', '14/07/1986', 2147483647, 'vicente pires', 'gostoso@gmail.com', 'Ian', 696969696, '28/11/2017', '', '0'),
(7, 'Eduardo Selistre', '2147483647', '14/07/1986', 2147483647, 'vicente pires', 'gostoso@gmail.com', 'Ian', 696969696, '28/11/2017', '', '0'),
(8, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 999999999, '5555555', '', '0'),
(9, 'Nayane Costa Guedes', '0', '14/05/1991', 981056607, 'SCRN 716 BLOCO F', 'nay.cguedes@gmail.co', 'Joaozin', 999999999, '5555555', '', '0'),
(10, 'Alisson', '33333', '333333', 333333, 'sobradinho', 'nay.cguedes@gmail.co', 'joaozao', 777777, '22222', '', '0'),
(11, 'Ligia', '888444', '18/09/1987', 989898989, 'Taguatinga', 'ligia@gmail.com', 'Marcos', 303903, '27/12/2001', '', '0'),
(12, '', '0', '', 0, '', '', '', 0, '', '', '0'),
(13, '', '0', '', 0, '', '', '', 0, '', '', '0'),
(14, '', '0', '', 0, '', '', '', 0, '', '', '0'),
(15, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(16, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(17, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(18, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(19, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(20, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(21, 'Roberto', '666666', '20/01/1901', 7777, 'Lago Sul', 'roberto@gmail.com', 'Lazarento', 999999, '16/07/2013', '', '0'),
(22, '', '0', '', 0, '', '', '', 0, '', '', '0'),
(23, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 2147483647, '45677', 'filho', '0'),
(24, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 2147483647, '45677', 'filho', '0'),
(25, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 2147483647, '45677', 'filho', '0'),
(26, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 2147483647, '45677', 'filho', '0'),
(27, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 2147483647, '45677', 'filho', '0'),
(28, 'Nayane Costa Guedes', '37781', '14/05/1991', 981056607, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joaozin', 2147483647, '45677', 'filho', '0'),
(29, 'Nayane Ribeiro', '69696969696', '56464646', 64545373, 'Paranoa', 'nayane@gmail.com', 'pablo', 7777777, '33333', 'filho', ''),
(30, 'Nayane Costa Guedes', '037.781.091-62', '14/05/1991', 333333, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'ROBSON', 87655, '7363533', 'neto', ''),
(31, 'Nayane Costa Guedes', '037.781.091-62', '14/05/1991', 333333, 'SCRN 716 BLOCO F APTO 401', 'nay.cguedes@gmail.co', 'Joao Francisco', 0, '16/07/2013', 'filho', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pesquisa`
--
ALTER TABLE `tb_pesquisa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pesquisa`
--
ALTER TABLE `tb_pesquisa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id_pessoa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
