-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Out-2019 às 15:37
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anuciar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrar`
--

DROP TABLE IF EXISTS `entrar`;
CREATE TABLE IF NOT EXISTS `entrar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `morada` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrar`
--

INSERT INTO `entrar` (`id`, `usuario`, `email`, `morada`, `senha`) VALUES
(22, '', 'isabelfeliciano@gmail.com', 'Km30', ''),
(23, 'Vilma', 'vilmafonteboa@gmail.com', 'Vila de Viana', 's'),
(35, NULL, NULL, NULL, NULL),
(36, '', '', '', ''),
(25, 'Isabel Calunjinji', 'isabelfelicianohg@gmail.com', 'California', 'calunjinji'),
(26, 'Fortunato Ricardo', 'FortunatoRicardomambo@gmail.com', 'Viana', 'Fortunato Ricardo'),
(32, 'w', 'martindala40@gmail.com', 'Angola', 'w'),
(37, '', '', '', ''),
(38, '', '', '', ''),
(34, 'Viuvo', 'viuvoviuva@gmail.com', 'Vila Sede', '12345678'),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, 'as', '', '', ''),
(43, 'Edacar', 'adssmin@admin.com', 'Angola', '12345678'),
(44, 'Samira', 'samira40@gmail.com', 'Cacuaco', '12345678'),
(45, 'Martec Angola', 'martecangola@gmail.com', 'Luanda/Vila de Viana', 'MartinhoDala'),
(46, 'Calunjinji', 'calunjinjiif@gmail.com', 'Cuanza-Sul', '12345678'),
(47, 'Vilma Fonte Boa', 'vilmafonteboa30@gmail.com', 'Congo', '12345678'),
(49, 'Barulho', 'martindala400@gmail.com', 'Luanda', '666666666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicar`
--

DROP TABLE IF EXISTS `publicar`;
CREATE TABLE IF NOT EXISTS `publicar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  `frase` varchar(500) DEFAULT NULL,
  `preco` varchar(50) DEFAULT NULL,
  `palavra` varchar(40) DEFAULT NULL,
  `pdata` varchar(40) DEFAULT NULL,
  `arquivo` varchar(40) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `visitas` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publicar`
--

INSERT INTO `publicar` (`id`, `titulo`, `categoria`, `local`, `frase`, `preco`, `palavra`, `pdata`, `arquivo`, `usuario`, `visitas`, `telefone`) VALUES
(7, 'Anel de Noivado', 'Joias', 'Luanda', 'Todo casamento precisa de um bom anel, compre', '2200000', 'Anel', '2019-10-30 05:48:30', '7149cfb923d85ec38f6e1cd8b9a0bc50.jpg', 'Samira', 14, 923367581),
(6, 'Brincos', 'Imoveis', 'Lunda Sul', 'Esse brinco de 4 equilateres', '20.000', 'Joias', '2019-10-30 05:47:20', '3cba14d4c0e07fc8af3a1a9ff89879eb.jpg', 'Samira', 20, 924466025),
(8, 'Colares', 'Joias', 'Cabinda', 'Colares de cabinda', '21000', 'Colares', '2019-10-30 05:49:31', '9d053c858ab89b7537f86176c94583ef.jpg', 'Samira', 10, 924466025),
(9, 'Colares da Escocia', 'Joias', 'Zaire', 'Colares fabricadas na escocia', '12000', 'Colares', '2019-10-30 05:50:29', 'e27d66a6aa60dfbd7777ff26992e1925.jpg', 'Samira', 20, 924466025),
(10, 'Produtos Informaticos', 'InformÃ¡tica', 'Cuanza Sul', 'Venha comprar diversos produtos inforrmaticos', '200000', 'Computador', '2019-10-30 05:53:07', '1dbf1aa34ea25c0e914badf3e477a400.jpg', 'Martec Angola', 12, 924466025),
(11, 'PC ASUS', 'InformÃ¡tica', 'Cuanza Norte', 'Compuador Pessoal ASUS, a sair no preÃ§o da igreja', '200000', 'Computador', '2019-10-30 05:54:19', '437978fed16984390ca4d8085228092d.jpg', 'Martec Angola', 33, 924466025),
(12, 'Curso-Como Hackear', 'InformÃ¡tica', 'BiÃ©', 'Venha fazer nosso curso de como ser um hacker', '2000', 'Hacker', '2019-10-30 05:55:25', '9555b0860081f4b39a96e3c86cdff2ac.jpg', 'Martec Angola', 2, 924466025),
(13, 'Digitamos Documentos Gratuittamente', 'InformÃ¡tica', 'Cabinda', 'Venha digitarr documentos gratuitamente', '20000', 'Digital', '2019-10-30 05:56:28', '05e27ca6a5e4d46e6c894cbbd68419a0.jpg', 'Martec Angola', 13, 924466025),
(14, 'CABOS VGA', 'Audio - vÃ­deo', 'Benguela', 'Cabos VGA, responsavel poor dar video no computador', '1000', 'Cabos', '2019-10-30 05:57:34', 'c954a8e90a8cf7aa1c2678af1de70bab.jpg', 'Martec Angola', 12, 924466025),
(15, 'Teclado Super HERIS', 'InformÃ¡tica', 'Cabinda', 'SÃ£o teclados da alemanha', '23000', 'Teclados', '2019-10-30 05:58:43', '46ad5da6b22c36b51810a416846d7dfb.jpg', 'Martec Angola', 12, 924466025),
(16, 'IPHONE 12', 'InformÃ¡tica', 'Cuanza Sul', 'Iphone 12, venha comprar', '230000', 'Telefone', '2019-10-30 05:59:58', 'd3c395f433906d23eb28c1e9f617ac19.jpg', 'Martec Angola', 23, 924466025),
(17, 'TELEMARTS PHONES', 'Telefonias', 'BiÃ©', 'Telefones da marca Telemarts, criada pela empresa martec', '23000', 'Telefone', '2019-10-30 06:01:58', '2aabedb9a0478ed2598113bb2fef3007.jpg', 'Martec Angola', 40, 924466025),
(18, 'ECONOMONEY 1.2', 'Audio - vÃ­deo', 'Cabinda', 'Aplicativo que vai te ensinar a poupar', '23000', 'Aplicativo', '2019-10-30 06:03:19', 'e1048ab60ae29593073ec69cbc66b35f.jpg', 'Martec Angola', 21000, 924466025),
(19, 'WORKS DESIGNERS', 'Audio - vÃ­deo', 'Benguela', 'Fazemos trabalhos graficos, venha entao', '22000', 'Designers', '2019-10-30 06:05:01', '6eee14838303e207cd24a18e62dd14af.jpg', 'Martec Angola', 20, 924466025),
(20, 'Casas 112', 'Casas', 'HuÃ­la', 'SÃ£o casas em venda e super legais', '10000', 'Casas', '2019-10-30 06:09:11', '103548f22a745939ebb18aa45054fb35.jpg', 'Calunjinji', 23, 924466025),
(21, 'Casa no Kilamba', 'Casas', 'Cuanza Sul', 'Vendo esta casa', '20000', 'Casa', '2019-10-30 08:53:32', '290a6800b874e503a16fe7fd193a4434.jpg', 'Vilma', 10, 924466025),
(23, 'Carro', 'Telefonias', 'Cabinda', 'carro a preÃ§o barato', '10000000', 'Carro', '2019-10-30 12:11:48', '3afc1a420f0679196c2d108d11269aca.jpg', 'Barulho', 9, 923367581);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
