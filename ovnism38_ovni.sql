-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 18/08/2019 às 08:08
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ovnism38_ovni`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `idade_clie` date NOT NULL,
  `tel_fixo_clie` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_celular_clie` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `complemento_clie` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estado_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cep_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `CPF_clie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `verify_clie` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`nome_clie`, `email_clie`, `idade_clie`, `tel_fixo_clie`, `tel_celular_clie`, `senha_clie`, `endereco_clie`, `complemento_clie`, `cidade_clie`, `estado_clie`, `cep_clie`, `CPF_clie`, `verify_clie`) VALUES
('Abnão Lindo', 'abner@gmail.com', '1998-04-21', '(38)5406-5168', '(54)31265-6013', '$2y$10$QvUUwSzj9rzVUKCXNW7QauamJNIhmv5HFdAtQ29oP/3apams5YO7C', 'rua das palmeiras coisadas', 'Nº 20', 'SP', 'São Paulo', '35654-613', '135.465.165-46', '0'),
('batata doce e frango ', 'jabuticaba@hotmail.com', '1111-11-11', '(11)5456-8752', '(11)99994-5565', '$2y$10$qiAo36lqI0/6OGx91nfhOeqQDrQYC80BgALKthynPt2IckQdkCise', 'rua do cha', '', 'sp', 'Roraima', '00548-942', '666.666.666-69', '0'),
('Emanuel William Faria de Oliveira', 'sp.emanuel@hotmail.com', '1999-08-09', '', '(31)97101-9923', '$2y$10$4nGOVVQPVsTLmNWaHm2Y/OjoyPVzyuMlLJj.cxnlqLRWCt3k1lU76', 'República PifPaf ', 'casa', 'Ouro Preto', 'Minas Gerais', '30720-350', '501.430.128-28', '1'),
('Diogo Misawa Shima Cliente', 'diogo.shima@gmail.com', '3132-12-15', '(39)2020-0100', '(55)48792-3575', '$2y$10$elxbHQS3lj8Rwy7dwSqRiu6mbNtZizJ8B2cJj0/FsOZDE5fSI3t2y', 'endereço legal Pá', 'Çerto N:º 20', 'Sèrtû', 'São Paulo', '18382-822', '123.141.241-51', '0'),
('amanda segura', 'amandaseguramo@gmail.com', '2003-05-06', '(62)5462-4655', '(54)34656-3566', '$2y$10$V5TeIJxBZEQKj3vSec8uQuP13cXm6GrFypPde9tB4zUN3DevzViZu', 'top top', 'top', 'sp', 'São Paulo', '54656-254', '233.245.465-34', '0'),
('Gustavo Lafant', 'gu_kiub@hotmail.com', '2019-08-25', '(11)9514-8301', '(11)-', '$2y$10$3vMg94AOugTTc15kxQoKqu0NSS/k5/rv4XC.IpVV5/2ADrrk7XfLS', 'Sassaki, 50.', 'ap 23', 'São Paulo', 'São Paulo', '04403-000', '481.766.208-58', '0'),
('Nicole emiri shima', 'nicole.emiri.shima@gmail.com', '2002-10-28', '(11)9942-3252', '(11)99423-2525', '$2y$10$5rZFWTYvyzpvb6SQx9v6keQtYObtMIGEeWE4atmYJ2e7vAP8W32Y6', 'Rua sassaki número', '50', 'São Paulo', 'São Paulo', '04403-000', '414.785.788-40', '1'),
('Youtube', 'youtube@hotmail.com', '1522-06-15', '(23)-1231', '(12)31-2312', '$2y$10$saIWSWSDs1klcFeOX0rszOo8nhKcS2n635b3PhSKjWsFT3k7yLMPy', '1d2s3fs1d523', '123123sdf13123', '23s1df23s1d23', 'São Paulo', '123-123', '123.123.132-12', '0'),
('jão da silva junior', 'teste@teste', '1522-12-15', '(11)1111-1111', '(11)11111-1111', '$2y$10$vNWt7uXBm42ajOJArRFDDu0djxW1VGy8I9A1ih/uUs9Z8pcl.nCtS', 'asdasdasd', 'asdasdas', 'asdasdasd', 'São Paulo', '21111-111', '122.222.222-22', '0'),
('andré rafael', 'reidogado@gmail.com', '2000-02-09', '(11)9854-6215', '(11)97542-3485', '$2y$10$3ZDqJzdXKI7ypAULmk.LweX6K8KFEJY1Xcm7b7CpRREIY/ABBiKIi', 'Avenida Paulista. 321', '', 'SP', 'São Paulo', '15468-421', '125.487.956-65', '0'),
('gatomia@hotmail.com', 'teste@alguem', '9999-01-25', '(21)5156-5021', '(51)20500-2512', '$2y$10$xMDvI.evnSGQd7FC.SV5OuL/ECqV3nx2/ISs2iGomtt5EMhur5n8u', '123456789, 123456789, 12345678', '123456789', '125325', 'São Paulo', '12345-125', '123.456.678-95', '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `CPF_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `complemento_func` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idade_func` date NOT NULL,
  `cidade_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estado_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `tel_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `instrumento` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `senha_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cep_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estilo_musical` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `desc_func` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `data_expirar` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `verify_func` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `funcionario`
--

INSERT INTO `funcionario` (`nome_func`, `CPF_func`, `endereco_func`, `complemento_func`, `idade_func`, `cidade_func`, `estado_func`, `tel_func`, `instrumento`, `senha_func`, `cep_func`, `email_func`, `estilo_musical`, `desc_func`, `data_expirar`, `verify_func`) VALUES
('Joao Silva ', '400.289.224-00', 'Rua do bom dia ', 'Nada', '2019-08-12', 'Bom dia e companhia ', 'São Paulo', '(11)40028-922', 'Guitarra', '$2y$10$Pm8hKNWz7N2JPSlBYXax0efyPXF0fPn591f8BrrC0thV74.jcWh.y', '40028-922', 'bomdia@hotmail.com', 'Folk', 'Sou gay e n gosto de ninguém ', '2019-09-12', '0'),
('GABRIEL VINCENZO BONANI', '416.149.478-56', 'Rua Domênico Fischietti', '', '2000-03-21', 'São Paulo', 'São Paulo', '(11)98789-9410', 'Violão', '$2y$10$CCQjS.P2EgOdrrfkvStv0ucUCraaUqulv4dIruQtgsl9BVnUEEfX.', '04439-010', 'lochsbot1@gmail.com', 'Rock', 'Pão', '2019-09-06', '0'),
('Adriano Fonseca de Lima', '423.516.848-77', 'Rua Emb. Dora de Vasconcelos', '341', '1998-05-28', 'SP', 'São Paulo', '(11)99321-6654', 'Piano', '$2y$10$lDemmDdzp7htBI1eBAJfxeB5iESdltOGJJtielsfU88xZIfEW82Cu', '04438-240', 'adrianofonsecade@icloud.con', 'Country', 'teste', '2019-09-09', '0'),
('Felipe Carreira dos Santos', '334.148.758-10', 'Rua José Neves, 50 - Vila São,', 'Bloco B, apt 83', '1999-05-02', 'SP', 'São Paulo', '(11)99201-7901', 'Violão', '$2y$10$bn8hKPrWQv/K4kG/SYuEzeb/11ntV/Zo2NPnxu.GQhoq2Qy8B2WQ2', '04650-140', 'felipe.carreira@hotmail.com', 'MPB', 'Eu toco bem !', '2019-09-03', '1'),
('Beta admin', '481.766.208-58', 'Rua Sassaki, 50', 'ap 23', '1999-01-25', 'sp', 'São Paulo', '(11)95148-3013', 'Acordeão', '$2y$10$EWXHAZWeGaSHaOClVx31yeFv3zcJFMs5Fa6yiJzd7LDTVanL2dp0a', '04403-000', 'gu_kiub@hotmail.com', 'Alternativa', 'Conta de teste', '2019-09-03', '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `realiza_pedido`
--

CREATE TABLE `realiza_pedido` (
  `data_evento` date NOT NULL,
  `hora_evento` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cep_evento` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_evento` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `endereço_evento` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estilo_musica_pedido` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `instrumento_desejado` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email_contato` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_contato` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `status_pedido` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `desc_pedido` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `CPF_clie_FK` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPF_func_FK` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_pedido_PK` int(220) NOT NULL,
  `nome_pedido` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor_pedido` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estado_pedido` varchar(220) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `realiza_pedido`
--

INSERT INTO `realiza_pedido` (`data_evento`, `hora_evento`, `cep_evento`, `cidade_evento`, `endereço_evento`, `estilo_musica_pedido`, `instrumento_desejado`, `email_contato`, `telefone_contato`, `status_pedido`, `desc_pedido`, `CPF_clie_FK`, `CPF_func_FK`, `ID_pedido_PK`, `nome_pedido`, `valor_pedido`, `estado_pedido`) VALUES
('2020-04-21', '12:33', '00548-942', 'sp', 'rua do cha', 'Rock', 'Violino', 'jabuticaba@hotmail.com', '(11)99994-5565', '0', 'é isso ae', '666.666.666-69', '', 62, 'batata doce e frango ', 'R$ 5000', 'São paulo'),
('2545-03-04', '12:41', '12312-314', 'Pindamonhangaba', 'Baron Nashor Street, Numero 0,', 'Alternativa', 'Acordeão', 'acdhp@yahoo.com.br', '(55)48792-3575', '0', 'sd9 8s b98 hspiouv b43 m', '123.141.241-51', '', 60, 'Diogo Misawa Shima Cliente', 'R$ 5555', 'jessy'),
('2200-06-15', '51:56', '56156-156', '15156156156', 'bdjsb', 'Alternativa', 'Acordeão', 'teste@teste', '(11)11111-1111', '0', '56156156156', '122.222.222-22', '', 61, 'jão da silva junior', 'R$ 1561', 'algum lugar'),
('2019-08-17', '23:00', '65165-106', 'algum lugar', 'rua sassak', 'Hip-Hop', 'Instrumentos (DJ)', 'abner@gmail.com', '(54)31265-6013', '0', 'balada no jardim da casa, até as 6 da manhã seguinte', '135.465.165-46', NULL, 203, 'Abnão Lindo', 'R$ 300', '..'),
('3333-02-23', '12:20', '04403-000', 'São Paulo', 'Rua Sassaki, 23', 'Alternativa', 'Acordeão', 'gatomia123@hotmail.com', '(51)20500-2512', '0', 'guas7utast', '123.456.678-95', NULL, 204, 'alguma coisa', 'R$ 5000', 'macapá'),
('2020-01-25', '12:22', '12312-313', '12132sdf123s1', 'dfsdfsd', 'Alternativa', 'Acordeão', 'gu_kiub@hotmail.com', '(11)95148-3013', '0', '123sdf123s1df23sd', '481.766.208-58', '', 52, 'Beta admin', 'R$ 2222', 'Ceara'),
('2020-02-10', '02:02', '20302-300', '2302302303202023', 'asdasdasd', 'Alternativa', 'Acordeão', 'gu_kiub@hotmail.com', '(11)95148-3013', '0', '1561sd56f1s5d6f', '481.766.208-58', '', 50, 'Beta admin', 'R$ 0232', 'Rio de janeiro'),
('2222-02-12', '12:33', '21231', '5156156asd', 'teste', 'Alternativa', 'Acordeão', 'gu_kiub@hotmail.com', '(11)95148-3013', '0', 'asdasdasd', '481.766.208-58', NULL, 205, 'Beta admin', 'R$ 2121', 'São Paulo');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF_clie`),
  ADD UNIQUE KEY `email_clie` (`email_clie`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`CPF_func`),
  ADD UNIQUE KEY `email_func` (`email_func`);

--
-- Índices de tabela `realiza_pedido`
--
ALTER TABLE `realiza_pedido`
  ADD PRIMARY KEY (`ID_pedido_PK`),
  ADD KEY `CPF_clie_FK` (`CPF_clie_FK`),
  ADD KEY `CPF_func_FK` (`CPF_func_FK`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `realiza_pedido`
--
ALTER TABLE `realiza_pedido`
  MODIFY `ID_pedido_PK` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
