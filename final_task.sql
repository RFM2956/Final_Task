-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2024 at 07:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ruslan Feyzullayev', 'ruslanfeyzullayev280@gmail.com', NULL, 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `img`, `created_at`, `updated_at`) VALUES
(5, 'storage/front/assets/image/2I18kCSgh4.jpg', '2023-12-09 08:42:48', '2024-01-18 06:24:08'),
(6, 'front/assets/image/qd3aPKdSqi.jpg', '2023-12-09 08:43:06', '2023-12-14 07:43:26'),
(7, 'front/assets/image/nOkQ2A5zjh.jpg', '2023-12-09 08:43:30', '2023-12-14 07:43:39'),
(8, 'front/assets/image/EXUvWETgxf.jpg', '2023-12-11 09:59:54', '2023-12-14 07:43:46'),
(9, 'front/assets/image/Ve09U5Bq34.jpg', '2023-12-14 08:03:52', '2023-12-14 08:03:52'),
(10, 'front/assets/image/L4fplZE755.jpg', '2023-12-14 08:04:16', '2023-12-14 08:10:56'),
(11, 'front/assets/image/6TW9A9SIsa.jpg', '2023-12-14 08:11:10', '2023-12-14 08:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `up_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `up_id`, `created_at`, `updated_at`) VALUES
(47, 'Romance', 'romance', 0, '2023-12-05 05:26:27', '2024-01-18 07:42:54'),
(94, 'Romance', 'romance', 47, '2024-01-18 06:16:31', '2024-01-18 07:43:17'),
(97, 'Poetry', 'poetry', 0, '2024-01-18 07:41:01', '2024-01-18 07:41:01'),
(98, 'Poetry', 'poetry', 97, '2024-01-18 07:41:12', '2024-01-18 07:41:12'),
(99, 'Science', 'science', 0, '2024-01-18 07:43:00', '2024-01-18 07:43:00'),
(100, 'Science', 'science', 99, '2024-01-18 07:43:07', '2024-01-18 07:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `img`, `created_at`, `updated_at`) VALUES
(14, 'storage/front/assets/image/7t2djJrVLZ.jpg', '2023-12-07 07:54:23', '2024-01-18 07:02:54'),
(22, 'storage/front/assets/image/fOLHrJw9ms.jpg', '2023-12-14 02:22:45', '2024-01-18 07:03:05'),
(24, 'storage/front/assets/image/IDRQvLtVw7.jpg', '2023-12-14 05:49:03', '2024-01-18 07:03:11'),
(27, 'storage/front/assets/image/Ud4pPcdIYv.jpg', '2024-01-18 05:40:48', '2024-01-18 07:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2023_11_23_113031_create_categories_table', 1),
(6, '2023_11_27_143453_create_posts_table', 2),
(7, '2023_12_02_101615_create_books_table', 3),
(8, '2023_12_02_101640_create_sub_books_table', 3),
(17, '2014_10_12_000000_create_users_table', 4),
(18, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(19, '2019_08_19_000000_create_failed_jobs_table', 4),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(21, '2023_12_05_120122_create_slides_table', 5),
(22, '2023_12_07_065804_create_imgs_table', 6),
(23, '2023_12_08_064946_create_products_table', 7),
(24, '2023_12_08_124841_destroy_title_id_from_products_img_table', 8),
(25, '2023_12_09_121713_create_brands_table', 9),
(26, '2023_12_11_143300_create_updated_table', 10),
(27, '2023_12_12_071245_update_products_table', 11),
(28, '2023_12_12_072816_insert_percent_field_to_product_imgs_table', 12),
(29, '2023_12_12_075821_update_slides_table', 13),
(30, '2023_12_14_101945_create_shopproducts_table', 14),
(31, '2023_12_26_062926_insert_category_id_into_products_imgs_table', 15),
(32, '2023_12_27_082925_create_admin_users_table', 16),
(33, '2023_12_28_065310_update_users_table', 17),
(34, '2023_12_28_091222_create_orders_table', 18),
(35, '2023_12_28_100734_create_carts_table', 19),
(36, '2024_01_06_131023_create_order_items_table', 20),
(37, '2024_01_23_085555_create_product_details_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_imgs`
--

CREATE TABLE `products_imgs` (
  `id` bigint UNSIGNED NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `percent` decimal(8,2) NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_imgs`
--

INSERT INTO `products_imgs` (`id`, `author`, `title`, `img`, `price`, `created_at`, `updated_at`, `percent`, `category_id`) VALUES
(1, 'John Vaillant', 'Fire Weather: A True Story From a Hotter World', 'storage/front/assets/image/V5qEtiguAg.jpg', '49.99', '2023-12-08 09:31:58', '2024-01-18 07:32:18', '10.00', 47),
(4, 'Karl Marx', 'Kapital', 'storage/front/assets/image/CbBtfp1YwT.jpeg', '60.50', '2023-12-08 10:18:42', '2024-01-18 07:43:34', '20.00', 99),
(10, 'Sy Montgomery', 'Of Time and Turtles: Mending the World, Shell by Shattered Shell by', 'storage/front/assets/image/NVL0BxDAZC.jpg', '33.00', '2023-12-14 03:23:31', '2024-01-18 07:43:50', '20.00', 99),
(11, 'Ben Goldfarb', 'Crossings: How Road Ecology is Shaping the Future of Our Planet', 'storage/front/assets/image/raIWy8MrLv.jpg', '70.00', '2023-12-14 06:01:21', '2024-01-18 07:44:01', '5.00', 99),
(27, 'Roberto Trotta', 'Starborn: How the Stars Made Us (and Who We Would Be Without Them)', 'storage/front/assets/image/XMnKryigis.jpg', '79.00', '2023-12-26 07:27:08', '2024-01-18 07:44:16', '20.00', 99),
(28, 'Jane Austen ,  Anna Quindlen', 'Pride and Prejudice', 'storage/front/assets/image/OuJlH0QSbw.jpg', '69.00', '2023-12-26 07:31:54', '2024-01-18 07:44:34', '31.00', 47),
(29, 'Emily Henry', 'Beach Read', 'storage/front/assets/image/0kpPFxImOd.jpg', '99.00', '2023-12-26 07:32:56', '2024-01-18 07:44:48', '15.00', 47),
(30, 'Casey McQuiston', 'Red, White & Royal Blue', 'storage/front/assets/image/7ZuLfioOiM.jpg', '65.00', '2023-12-26 07:49:16', '2024-01-18 07:45:02', '20.00', 47),
(32, 'Colleen Hoover', 'It Ends with Us', 'storage/front/assets/image/E1RONZG8oG.jpg', '94.00', '2023-12-26 07:51:27', '2024-01-18 07:45:23', '26.00', 97),
(33, 'Emily Dickinson', 'The Complete Poems of Emily Dickinson', 'storage/front/assets/image/klX69XGS3a.jpg', '23.00', '2023-12-26 07:52:26', '2024-01-18 07:41:30', '14.00', 97),
(34, 'Daniel Çidiak', 'Ariel', 'storage/front/assets/image/wx6YimPO0h.jpg', '80.00', '2023-12-26 07:53:28', '2024-01-18 07:42:29', '20.00', 97);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopproducts`
--

CREATE TABLE `shopproducts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `head` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `image_path`, `created_at`, `updated_at`, `head`) VALUES
(9, 'Karl Marx', 'storage/front/assets/image/1cijmk1pyu.jpeg', '2023-12-13 10:41:21', '2024-01-18 05:21:47', 'Kapital'),
(14, 'Sigmund Freyd', 'storage/front/assets/image/EhlCnnxyQQ.jpeg', '2023-12-14 05:46:37', '2024-01-18 05:22:36', 'The Interpretation of Dreams');

-- --------------------------------------------------------

--
-- Table structure for table `updated`
--

CREATE TABLE `updated` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` bigint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_status`) VALUES
(26, 'Ruslan', 'sanchousklimenkov@gmail.com', NULL, '$2y$12$KD7Rm38t851/QdnTHZszfeQLcLXjHdDYZcyBYopGguT2GNms29Cpi', NULL, '2023-12-22 09:46:53', '2023-12-22 09:46:53', 0),
(28, 'Ruslan', 'john@examplegmail.com', NULL, '1212\r\n', NULL, '2023-12-22 09:46:53', '2023-12-22 09:46:53', 0),
(29, 'Ruslan Feyzullayev', 'ruslanfeyzullayev280@gmail.com', NULL, '$2y$12$rCttGUGr5lgNaZBef7QF7.iBkh3qh4I27lgapiAkSPMS31v8D3zDO', NULL, NULL, NULL, 1),
(30, '111', '111@11', NULL, '$2y$12$yTNQj1I1ufb0.OEqKPRszu6BhTklQvX05ndj5eCFdjE1tUuDuqVCS', NULL, '2024-01-18 06:41:29', '2024-01-18 06:41:29', 0),
(31, 'Ruslan', 'admin@admin.com', NULL, '$2y$12$4fEDdm6MUMZ9u6kjcbbeR.hs/Ofxtj6/BOf7g.yyMV/PEk63xR24C', NULL, '2024-01-18 06:42:22', '2024-01-18 06:42:22', 0),
(32, '666', '666@gmail.com', NULL, '$2y$12$PFXhZdDOpILHtBa4UV8yHehiDk6t8M7B.vA6sMI7QtEQK5pVe8ZXa', NULL, '2024-01-23 03:31:05', '2024-01-23 03:31:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_imgs`
--
ALTER TABLE `products_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopproducts`
--
ALTER TABLE `shopproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updated`
--
ALTER TABLE `updated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_imgs`
--
ALTER TABLE `products_imgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopproducts`
--
ALTER TABLE `shopproducts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `updated`
--
ALTER TABLE `updated`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
