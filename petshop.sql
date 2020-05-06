-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05/05/2020 às 23:11
-- Versão do servidor: 5.7.26
-- Versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `raca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `animals`
--

INSERT INTO `animals` (`id`, `raca`, `descricao`, `preco`, `status`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Hamster Anao Russo', 'Diferentemente de outras espécies, os hamsters são ideais para crianças.', 40.00, 1, '434004115hamster-anao-russo.jpg', '2020-05-05 20:47:02', '2020-05-05 20:47:02'),
(13, 'Maine Coon', 'Já pensou em ter um gato Gigante? Lindos Filhotes de Maine Coon disponíveis.', 3500.00, 1, '809401245maine-coon.jpg', '2020-05-05 20:46:18', '2020-05-05 20:46:18'),
(12, 'Gato Siames', 'Na Club também temos o gatinho mais famoso do mundo! Adquira seu filhotinho.', 199.90, 1, '1322338974gato-siames.jpg', '2020-05-05 20:45:29', '2020-05-05 20:45:29'),
(11, 'Mini Pig', 'Você prefere algo bem diferente? Que tal um mini pig de estimação?', 1500.00, 1, '26097012mini-pig.jpg', '2020-05-05 20:44:58', '2020-05-05 20:44:58'),
(10, 'Golden Retriever', 'Lindíssimos filhotes de Golden Retriever já vacinados e cheios de amor!', 1800.00, 1, '162964939golden-retriever.jpg', '2020-05-05 20:44:15', '2020-05-05 20:44:15'),
(9, 'Husky Siberiano', 'Lindos filhotes de husky siberiano disponíveis , já com a primeira dose da vacina importada.', 1550.00, 1, '1352199771husky-siberiano.jpg', '2020-05-05 20:43:14', '2020-05-05 20:43:14'),
(15, 'Dálmata', 'Essa é a oportunidade de adquirir um dos cãezinhos mais queridos do cinema!', 1600.00, 1, '580468537dalmata.jpg', '2020-05-05 20:47:37', '2020-05-05 20:52:26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_09_105423_create_produtos_table', 1),
(4, '2018_06_09_105711_create_servicos_table', 1),
(5, '2018_06_09_105748_create_animals_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Osso Natural Femur Bona Pet', 'Feito de forma 100% natural, o seu pet passará mais tempo distraído.', 10.00, '1105932977osso-natural-femur-bona-pet.jpg', 1, '2020-05-05 17:03:17', '2020-05-05 17:03:17'),
(2, 'Caminha Nuvem de Veludo Salmao / PP 40cm', 'Especialmente elaborada para trazer maior aconchego ao seu pet, a Caminha Nuvem é super macia e confortável.', 99.90, '1859768929caminha-nuvem-de-veludo-salmao/-p-p40cm.jpg', 1, '2020-05-05 17:07:15', '2020-05-05 17:19:40'),
(3, 'Shampoo Pet Clean Neutro Para Caes - 5 Litros', 'O Shampoo Pet Clean é um produto desenvolvido p/ cães e gatos de todas as raças, cores e comprimentos de pêlo.', 42.90, '2018971057shampoo-pet-clean-neutro-para-caes-5-litros.jpg', 1, '2020-05-05 17:10:45', '2020-05-05 17:20:58'),
(4, 'Limpador de Orelha Pet Clean - 120 ml', 'O Limpador de Orelha Pet Clean facilita a remoção de ceras e detritos que se alojam nas orelhas.', 9.90, '387480206limpador-de-orelha-pet-clean-120-ml.jpg', 1, '2020-05-05 17:43:05', '2020-05-05 17:43:05'),
(5, 'Rasqueadeira Profissional Stilber 3', 'Excelente para manter o seu animal com uma linda aparência e com pelos sedosos e desembaraçados.', 11.90, '317276663rasqueadeira-profissional-stilber3.jpg', 1, '2020-05-05 17:44:53', '2020-05-05 17:44:53'),
(6, 'Tapete Higienico Expet Tico Pads - 50 Unidades', 'Com dupla camada em gel, o tapete proporciona maior segurança através de sua capacidade de 24h de absorção.', 69.89, '2056438212tapete-higienico-expet-tico-pads-50-unidades.jpg', 1, '2020-05-05 17:47:40', '2020-05-05 17:47:40'),
(7, 'Pingente Pet (1 un.)', 'Fazemos pingentes Pet personalizados! Seu  amiguinho já sai de nossa loja com todo estilo!', 5.99, '2118699223pingente-pet(1-un.).jpg', 1, '2020-05-05 17:55:11', '2020-05-05 17:55:11'),
(8, 'Areia Sanitaria Alfa Pet Edukat Para Gatos', 'A Areia Sanitária Alfa Pet Edukat é indicada para animais de qualquer idade, é produzida e beneficiada com argila.', 3.99, '845547027areia-sanitaria-alfa-pet-edukat-para-gatos.jpg', 1, '2020-05-05 17:57:23', '2020-05-05 17:57:23'),
(9, 'Coleira Dugs Antipulgas E Carrapatos', 'A ColeiraDugs é indicada para cães de todas as raças no combate de parasitas como pulgas e carrapatos.', 13.70, '424926664coleira-dugs-antipulgas-e-carrapatos.jpg', 1, '2020-05-05 17:58:39', '2020-05-05 17:58:39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `preco`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Banho simples', 'Apenas um banho rápido pra manter a beleza? Nós temos o serviço ideal e acessível!', 42.00, 1, '1724713997banho-simples.jpg', '2020-05-05 18:17:05', '2020-05-05 18:17:05'),
(2, 'Corte de unhas', 'Seu pet dá trabalho muito para contar as unhas? Deixe esse trabalho com a gente!', 25.90, 1, '1191679470corte-de-unhas.jpg', '2020-05-05 18:27:50', '2020-05-05 18:31:36'),
(3, 'Tosa', 'Este serviço é especial para os donos que já deram banho nos bixinhos, mas não têm prática em tosar os pelos.', 35.90, 1, '91974696tosa.jpg', '2020-05-05 18:30:17', '2020-05-05 18:31:50'),
(4, 'Banho e tosa', 'Seu pet precisa daquele banho total e corte nos pelos pra sair bem na foto? É nossa especialidade!', 79.88, 1, '1414153509banho-e-tosa.jpg', '2020-05-05 18:34:04', '2020-05-05 18:34:04'),
(5, 'Dog Walk', 'Anda sem tempo de levar o amiguinho pra passear? Contrate nosso Dog Walk!', 29.90, 1, '812053816dog-walk.jpg', '2020-05-05 18:35:31', '2020-05-05 18:35:31'),
(6, 'Veterinário', 'Seu pet precisa de uma consulta de rotina com um especialista? Agende com nosso Vet.', 110.00, 1, '1028161583consulta-com-o-vet.jpg', '2020-05-05 18:37:42', '2020-05-05 20:54:28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@gmail.com', '$2y$10$fo7XrdhR1DSeEi9X6p93NO7q5u1xUWYEcFIh4Dq/exVLGhDc0r/Yq', 'QAk2dYqYhxljfzrKxoML8Np20AFUHQg8WLR5zFla5RGwtW9sGUAZ4tGhVkHS', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
