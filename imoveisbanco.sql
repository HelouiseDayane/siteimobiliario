-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Fev-2023 às 13:40
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `siteimobiliario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `imoveis_tipo` int(10) NOT NULL,
  `padrao` varchar(50) NOT NULL,
  `imoveis_bairro` int(11) NOT NULL,
  `valor` text NOT NULL,
  `qtd_quartos` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `ocasiao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `titulo`, `imoveis_tipo`, `padrao`, `imoveis_bairro`, `valor`, `qtd_quartos`, `descricao`, `cidade_id`, `ocasiao`) VALUES
(1, 'teste', 5, 'Básico', 2, '800,00', 3, ',o,po,p´,p´moiunuybhinioo', 0, NULL),
(7, 'Apartamento no San Diego', 6, 'Médio', 2, '128.000,00', 2, 'Apartamento do lado da sombra, no 5º piso, os dois quartos sendo suite', 1, NULL),
(8, 'Casa dos seus sonhos', 0, 'Alto', 0, '500.000,00', 4, 'pipipipopopo', 0, 'Venda'),
(9, 'Minha casa minha divida', 0, 'Alto', 0, '120.000,00', 2, 'kcmoksdnvksd vsk sd vksd vkds vs', 0, 'Temporada'),
(10, 'Puxadinho', 0, 'Alto', 0, '500,00', 1, 'xscfsdvsdvd', 0, 'Aluguel'),
(11, 'Quartos de aluguel', 0, 'Alto', 2, '800,00', 2, 'erfreferfer', 1, 'Aluguel'),
(12, 'Puxadinho 1', 8, 'Básico', 2, '700.00', 2, 'sacascascasczxz', 1, 'Aluguel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
