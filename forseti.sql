-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Abr-2022 às 14:08
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forseti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nivel` smallint(6) NOT NULL DEFAULT 0,
  `id_grup` int(11) NOT NULL DEFAULT 0,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `rg_ie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cpf_cnpj` int(11) NOT NULL DEFAULT 0,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `esta_ibge` int(11) NOT NULL DEFAULT 0,
  `muni_ibge` int(11) NOT NULL DEFAULT 0,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `id_fone` int(11) NOT NULL DEFAULT 0,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `data_nasc` date NOT NULL DEFAULT '2022-03-22',
  `pessoa_tp` enum('F','J') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F',
  `fornecedor` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_fornece` int(11) NOT NULL DEFAULT 0,
  `vendedor` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_vende` int(11) NOT NULL DEFAULT 0,
  `funcionario` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_funciona` int(11) NOT NULL DEFAULT 0,
  `associado` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_associa` int(11) NOT NULL DEFAULT 0,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `obs` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_03_18_000000_create_pessoas_table', 1),
(6, '2021_05_04_180842_create_admins_table', 1),
(7, '2021_05_14_210600_create_peticoes_table', 1),
(8, '2021_06_06_110834_create_textos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

CREATE TABLE `textos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_arquivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `id_gru` int(11) NOT NULL DEFAULT 0,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `tamanho` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `textos`
--

INSERT INTO `textos` (`id`, `nm_arquivo`, `id_gru`, `descricao`, `created_at`, `updated_at`, `status`, `tamanho`) VALUES
(156, 'https://www.gov.br/compras/pt-br/acesso-a-informacao/noticias/instabilidade-do-sistema-compras-gov.br', 0, 'Instabilidade do sistema Compras.gov.br</a>\n          </h2>\n\n          \n\n          \n\n        </div>\n\n        \n        <span class=\"documentByLine\">\n            \n            \n            \n            \n            \n                \n                    <spa', '2022-04-06 15:40:04', '2022-04-06 15:40:07', 0, 0),
(157, 'https://www.gov.br/compras/pt-br/acesso-a-informacao/noticias/instabilidade-do-sistema-compras-gov.br', 0, 'Instabilidade do sistema Compras.gov.br</a>\n          </h2>\n\n          \n\n          \n\n        </div>\n\n        \n        <span class=\"documentByLine\">\n            \n            \n            \n            \n            \n                \n                    <spa', '2022-04-06 16:37:06', '2022-04-06 16:37:08', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` smallint(6) NOT NULL DEFAULT 0,
  `id_gru` int(11) NOT NULL DEFAULT 0,
  `status` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`, `password`, `remember_token`, `nivel`, `id_gru`, `status`) VALUES
(2, 'Admnisttrador', 'edjo90@yahoo.com', '2022-03-22 20:27:58', '2022-04-05 20:27:58', '$2y$10$OQuHavztOiMWjsldbyOg1eHYbfMnpB/YoOMlMEjewHW.wbG7/mBMG', NULL, 0, 0, 0),
(3, 'Forseti Soluções', 'usuario@forseti.com.br', '2022-04-05 20:21:12', '2022-04-05 20:21:12', '$2y$10$AcaPLhRNtUv3uTrju/9CROcHFhmOYe5XrBjdt7Gd3YfEDKIwdOeVu', NULL, 0, 0, 0),
(4, 'Forseti 2 Soluções', 'solucoes@forseti.com.br', '2022-04-05 20:21:12', '2022-04-05 20:21:12', '$2y$10$T5GCJye8w5/XaGbj0h4yveU/PeLtU/t/laARDGOdmUw5cVpTXkcFy', NULL, 0, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `textos`
--
ALTER TABLE `textos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
