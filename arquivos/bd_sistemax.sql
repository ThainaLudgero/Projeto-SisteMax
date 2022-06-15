-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04/05/2022 às 09:33
-- Versão do servidor: 8.0.29-0ubuntu0.20.04.2
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_sistemax`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_agendamentos`
--

CREATE TABLE `tb_agendamentos` (
  `id_agenda` int NOT NULL,
  `cliente_agenda` varchar(25) NOT NULL,
  `profissonal_agenda` varchar(25) NOT NULL,
  `data_agenda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_anuncios`
--

CREATE TABLE `tb_anuncios` (
  `id_anuncio` int NOT NULL,
  `nome_anuncio` varchar(15) NOT NULL,
  `tempo_anuncio` int NOT NULL,
  `ordem_anuncio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id_cadastro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_dispositivos`
--

CREATE TABLE `tb_dispositivos` (
  `id_dispo` int NOT NULL,
  `nome_dispo` varchar(15) NOT NULL,
  `marca_dispo` varchar(15) NOT NULL,
  `resp_dispo` varchar(15) NOT NULL,
  `andar_dispo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Índices de tabela `tb_anuncios`
--
ALTER TABLE `tb_anuncios`
  ADD PRIMARY KEY (`id_anuncio`);

--
-- Índices de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- Índices de tabela `tb_dispositivos`
--
ALTER TABLE `tb_dispositivos`
  ADD PRIMARY KEY (`id_dispo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  MODIFY `id_agenda` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_anuncios`
--
ALTER TABLE `tb_anuncios`
  MODIFY `id_anuncio` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id_cadastro` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_dispositivos`
--
ALTER TABLE `tb_dispositivos`
  MODIFY `id_dispo` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
