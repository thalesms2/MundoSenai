-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2014 às 10:16
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pontuacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `nm_user` varchar(12) NOT NULL,
  `vl_pontos` int(11) NOT NULL,
  `ds_dificuldade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `scores`
--

INSERT INTO `scores` (`nm_user`, `vl_pontos`, `ds_dificuldade`) VALUES
('Arthur', 22, 'Extreme'),
('Arthur Vitor', 83, 'Easy'),
('Arthur WW', 17, 'Medium');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
