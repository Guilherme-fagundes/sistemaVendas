-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sistemavendas
CREATE DATABASE IF NOT EXISTS `sistemavendas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sistemavendas`;

-- Copiando estrutura para tabela sistemavendas.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forn_nome` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistemavendas.fornecedores: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`id`, `forn_nome`, `created_at`, `updated_at`) VALUES
	(1, 'Multilaser', '2021-05-01 20:44:14', NULL),
	(2, 'Samsung', '2021-05-01 20:44:53', NULL),
	(3, 'HP', '2021-05-01 20:45:18', NULL),
	(4, 'ACER', '2021-05-01 21:43:19', '2021-05-01 21:43:52');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemavendas.prevenda
CREATE TABLE IF NOT EXISTS `prevenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `forn_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistemavendas.prevenda: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `prevenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `prevenda` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemavendas.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `preco` float unsigned NOT NULL,
  `forn_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistemavendas.produtos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `nome`, `ref`, `preco`, `forn_id`, `created_at`, `updated_at`) VALUES
	(1, 'Computador', 'REF441', 1250, 1, '2021-05-01 21:00:45', '2021-05-02 20:21:14'),
	(2, 'Impressora multicional', 'REF445', 550, 3, '2021-05-01 21:05:55', '2021-05-02 20:21:46'),
	(3, 'Celular Galaxy', 'REF552', 700, 2, '2021-05-01 21:07:41', '2021-05-02 20:22:25'),
	(4, 'Notebook ', 'REF245', 4500, 4, '2021-05-01 21:10:25', '2021-05-02 20:22:51'),
	(5, 'Tablet', 'REF45', 670, 2, '2021-05-01 21:16:12', '2021-05-02 20:22:58'),
	(6, 'Notebook', 'REF222', 3420, 4, '2021-05-01 21:44:47', '2021-05-02 20:23:09'),
	(7, 'Teclado', 'REF789', 39.9, 1, '2021-05-02 15:34:56', '2021-05-03 11:10:19');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemavendas.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistemavendas.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `lastname`, `email`, `pass`, `created_at`, `updated_at`) VALUES
	(1, 'Usuário', 'teste', 'usuario@teste.com.br', '$2y$10$ncawuzJXC0V/0I4IYSYJ4u6eZ1nVsv.widkksiqScPV268nrYeG9G', '2021-05-01 23:37:55', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemavendas.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float DEFAULT NULL,
  `Item` varchar(255) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistemavendas.vendas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
