-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2021 г., 14:37
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uranshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'veniam sint', 'veniam-sint', '2021-02-04 09:36:19', '2021-02-04 09:36:19'),
(2, 'distinctio earum', 'distinctio-earum', '2021-02-04 09:36:19', '2021-02-04 09:36:19'),
(3, 'voluptatem molestias', 'voluptatem-molestias', '2021-02-04 09:36:19', '2021-02-04 09:36:19'),
(4, 'at quia', 'at-quia', '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(5, 'est rerum', 'est-rerum', '2021-02-04 09:36:20', '2021-02-04 09:36:20');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_02_04_074533_create_categories_table', 1),
(15, '2021_02_04_074632_create_products_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `img`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'aut recusandae qui', 'aut-recusandae-qui', NULL, 'veritatis at modi illum voluptatem fugit quod voluptatum quibusdam voluptas', 2, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(2, 'alias quisquam sed', 'alias-quisquam-sed', 'https://loremflickr.com/320/240?lock=3306', 'occaecati vero optio eum voluptas eos est est qui sequi', 4, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(3, 'voluptatem odio officia', 'voluptatem-odio-officia', NULL, 'magni facere adipisci nihil autem illo aut delectus quasi ea', 1, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(4, 'asperiores repudiandae modi', 'asperiores-repudiandae-modi', 'https://loremflickr.com/320/240?lock=3306', 'quia aut nam aperiam quasi ut similique deleniti rerum minima', 1, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(5, 'repudiandae et eum', 'repudiandae-et-eum', 'https://loremflickr.com/320/240?lock=3306', 'possimus dolor autem quae eos quia incidunt non hic amet', 4, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(6, 'sequi qui ut', 'sequi-qui-ut', NULL, 'pariatur sapiente voluptas molestiae sit ducimus accusamus eius molestiae ut', 3, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(7, 'debitis est accusantium', 'debitis-est-accusantium', 'https://loremflickr.com/320/240?lock=3306', 'autem aut quam praesentium sed molestiae distinctio voluptas nihil et', 2, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(8, 'tenetur et vel', 'tenetur-et-vel', 'https://loremflickr.com/320/240?lock=3306', 'explicabo illo ut mollitia et qui iusto qui enim et', 2, '2021-02-04 09:36:20', '2021-02-04 09:36:20'),
(9, 'sequi accusamus qui', 'sequi-accusamus-qui', 'https://loremflickr.com/320/240?lock=3306', 'a natus perferendis aspernatur dolorem aut occaecati autem est impedit', 2, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(10, 'voluptas accusantium sequi', 'voluptas-accusantium-sequi', 'https://loremflickr.com/320/240?lock=3306', 'cumque omnis quaerat minus sed eius est rerum quis nesciunt', 5, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(11, 'molestiae sit dolor', 'molestiae-sit-dolor', NULL, 'rerum sapiente cumque amet aut dolores tempora rerum est autem', 4, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(12, 'voluptatum asperiores est', 'voluptatum-asperiores-est', 'https://loremflickr.com/320/240?lock=3306', 'quis hic illo sapiente officia repellat autem et quae aut', 5, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(13, 'eum facere voluptatem', 'eum-facere-voluptatem', 'https://loremflickr.com/320/240?lock=3306', 'qui natus labore excepturi molestiae blanditiis id nihil possimus molestias', 2, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(14, 'quam minus sed', 'quam-minus-sed', NULL, 'aut molestiae explicabo et sapiente nihil enim eius et commodi', 4, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(15, 'incidunt expedita et', 'incidunt-expedita-et', 'https://loremflickr.com/320/240?lock=3306', 'temporibus expedita accusamus esse debitis repellendus consequatur eos consectetur voluptas', 1, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(16, 'amet voluptatum impedit', 'amet-voluptatum-impedit', 'https://loremflickr.com/320/240?lock=3306', 'qui enim vel repellat officiis rerum ipsam et doloribus deserunt', 4, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(17, 'aut aut vitae', 'aut-aut-vitae', NULL, 'itaque nihil corrupti quam non et ut eius non repellat', 5, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(18, 'eum mollitia aut', 'eum-mollitia-aut', 'https://loremflickr.com/320/240?lock=3306', 'nihil rerum saepe dicta laudantium tenetur fugiat sit voluptatem fugit', 5, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(19, 'nisi omnis eius', 'nisi-omnis-eius', 'https://loremflickr.com/320/240?lock=3306', 'assumenda nostrum ut officia perspiciatis qui qui consequatur voluptas eaque', 4, '2021-02-04 09:36:21', '2021-02-04 09:36:21'),
(20, 'est et ut', 'est-et-ut', 'https://loremflickr.com/320/240?lock=3306', 'veniam sint harum eligendi eaque et eum quia facere ratione', 2, '2021-02-04 09:36:22', '2021-02-04 09:36:22');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
