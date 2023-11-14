-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2023 às 00:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `socialmedia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `amizades`
--

CREATE TABLE `amizades` (
  `id` int(11) NOT NULL,
  `enviou` int(11) NOT NULL,
  `recebeu` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `amizades`
--

INSERT INTO `amizades` (`id`, `enviou`, `recebeu`, `status`) VALUES
(4, 6, 3, 1),
(6, 3, 5, 1),
(7, 7, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `usuario_id`, `post`, `date`) VALUES
(15, 7, 'Olá', '2023-11-11 20:14:25'),
(18, 3, '<p>Olá mundo<p/>', '2023-11-12 01:32:24'),
(20, 3, '<p>opa<p/>', '2023-11-12 01:35:45'),
(24, 3, '<p>asoiubduoas </p>img src\"https://l3software.com.br/wp-content/uploads/2019/03/jscrambler.jpg\" />', '2023-11-12 01:39:31'),
(25, 3, '<p>asd<p/>', '2023-11-13 19:03:21'),
(30, 3, '<p>qljweyjba </p<img src=\"https://s2-techtudo.glbimg.com/JsE244mucjKWLYtNgeiDyfVYlJQ=/0x129:1024x952/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/7/i/ME2AxRRoygUyFPCDe0jQ/3.png\" />', '2023-11-13 19:57:16'),
(31, 3, '<p>oiiiiii </p<img src=\"https://s2-techtudo.glbimg.com/JsE244mucjKWLYtNgeiDyfVYlJQ=/0x129:1024x952/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/7/i/ME2AxRRoygUyFPCDe0jQ/3.png\" />', '2023-11-13 19:57:54'),
(32, 3, '<p>teste 1030012 </p<img src=\"https://postgrain.com/wp-content/uploads/2017/04/adult-blur-boy-853406-768x512.jpg\" />', '2023-11-13 20:03:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `ultimo_post` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `ultimo_post`) VALUES
(3, 'Lucas Emanuel Pereira Ribeiro', 'lucasemanuelribeiro@hotmail.com', '$2a$08$ODM2NzgyNTU5NjU0YTljOOqaWVXyXV1R5uouZtUzeSggEw3jzhpsK', '2023-11-13 20:03:22'),
(4, 'Lucas teste gmail', 'lucasemanuelribeiro@gmail.com', '$2a$08$MTg0NjI5MTI5MjY1NGNmYeKQFlId3dWWCEsrKHiZqcS6w0VujeOJ.', '2023-11-11 19:07:07'),
(5, 'Atahur Neto Gordaum', 'atahurneto@hotmail.com', '$2a$08$MTQyNDUxNzYyOTY1NGNmYeR2brPl7HhAchpQfm4y4NdB7uk88vqWa', '2023-11-11 19:07:07'),
(6, 'Jeff', 'lucasemanuelribeiro1@hotmail.com', '$2a$08$Njc4MTc3MTg1NjU0ZWU4ZOcS0bLZvgAlr7bOwwJXvXqlA78Ppm0li', '2023-11-11 19:07:07'),
(7, 'Luana Kol', 'luanatkol@gmail.com', '$2a$08$NjkwMjU2MTU2NjU1MDBhN.I7Z6fct2LDoPLiuD/v/sGEpoWhXD12W', '2023-11-13 19:13:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `amizades`
--
ALTER TABLE `amizades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `amizades`
--
ALTER TABLE `amizades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
