-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jan-2018 às 23:12
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toque_divino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `loja` varchar(100) NOT NULL,
  `ref` varchar(20) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `tamanho` varchar(3) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_custo` float NOT NULL,
  `valor_venda` float NOT NULL,
  `saida` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `loja`, `ref`, `descricao`, `tamanho`, `quantidade`, `valor_custo`, `valor_venda`, `saida`) VALUES
(9, 'aaa', 'aaa', 'aaa', '21', 223, 21, 21, 0),
(10, 'aaaaaaaaa', 'aaa', 'aaaaaaaaaaa', '2', 32, 32, 222, 0),
(11, 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaa', 'aaa', 'aaa', 12, 12, 3, 0),
(12, 'g', 's', 'd', '12', 3, 3, 3, 0),
(13, 'asd', 'asd', 'asd', 'asd', 12, 12, 12, 0),
(14, '598', '5984859', '489', '4', 894, 894, 89, 0),
(15, '4', '984', '894', '89', 489, 4, 894, 0),
(16, '59+', '59+', '5', '9+', 5, 489, 498, 0),
(17, '123', '2322', '2323', '22', 223, 23132, 1323, 0),
(19, '123123', '123', '123', '123', 123123, 213132, 13123100, 0),
(20, '123', '123', '1233333333333333333332', '321', 2147483647, 323123, 3123, 0),
(21, '213123', '123123', '123', '23', 2321, 31231, 3213, 0),
(22, '1222', '22', '32', '322', 32, 123123, 123, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `#` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`#`, `username`, `password`) VALUES
(1, 'toquedivino', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`#`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
