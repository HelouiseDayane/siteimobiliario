-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2023 às 15:50
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

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
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id`, `nome`) VALUES
(2, 'Lagoa Nova'),
(3, 'Capim Macio'),
(5, 'Ponta Negra'),
(6, 'Novo Amarante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`) VALUES
(1, 'Natal'),
(2, 'Parnamirim'),
(3, 'Extremoz'),
(4, 'São Gonçalo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `nome_sistema` varchar(50) NOT NULL,
  `telefone_sistema` varchar(22) NOT NULL,
  `email_sistema` varchar(50) NOT NULL,
  `cnpj_sistema` varchar(60) DEFAULT NULL,
  `logo` varchar(30) DEFAULT NULL,
  `icone` varchar(30) DEFAULT NULL,
  `logo_rel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `nome_sistema`, `telefone_sistema`, `email_sistema`, `cnpj_sistema`, `logo`, `icone`, `logo_rel`) VALUES
(1, 'Site Imobiliario', '(84) 99953-3663', 'helouisedayane@gmail.com', NULL, 'logo.png', 'favicon.ico', 'logo.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `imoveis_id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `imoveis_id`, `foto`) VALUES
(1, 12, '16'),
(2, 12, '16'),
(3, 14, '29'),
(4, 12, '29'),
(5, 12, '29'),
(6, 12, '29'),
(7, 12, '29'),
(8, 8, '29'),
(9, 14, '29'),
(10, 14, '29-04-2023_15.47.00_14_1644d6624dff06.jpg');

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
  `ocasiao` varchar(80) DEFAULT NULL,
  `garagem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `titulo`, `imoveis_tipo`, `padrao`, `imoveis_bairro`, `valor`, `qtd_quartos`, `descricao`, `cidade_id`, `ocasiao`, `garagem`) VALUES
(8, 'Casa dos seus sonhos', 5, 'Alto', 2, '500.000,00', 4, 'pipipipopopo', 1, 'Venda', '1'),
(9, 'Minha casa minha divida', 5, 'Alto', 2, '120.000,00', 5, 'kcmoksdnvksd vsk sd vksd vkds vs', 1, 'Venda', '1'),
(10, 'Puxadinho', 5, 'Alto', 2, '500,00', 1, 'xscfsdvsdvd', 1, 'Venda', '1'),
(11, 'Quartos de aluguel', 5, 'Alto', 2, '800,00', 2, 'erfreferfer', 1, 'Venda', '1'),
(12, 'pokopopkpk', 5, 'Alto', 2, '700000', 1, 'iyvuyff67r76g8h9h89', 1, 'Venda', '1'),
(14, 'aaaaaaaaaaaaaaaaaaaaa', 5, 'Alto', 2, '20000', 1, 'z dlçc,sldmvlsdmvlds', 1, 'Venda', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `tipo_imoveis` text NOT NULL,
  `padrao_imoveis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `tipo_imoveis`, `padrao_imoveis`) VALUES
(5, 'Apartamento', ''),
(8, 'Kitnet', ''),
(9, 'Triplex', ''),
(10, 'Duplex', ''),
(11, 'pessoal', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `nivel`, `foto`) VALUES
(1, 'Helouise', 'helouisedayane@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrador', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
