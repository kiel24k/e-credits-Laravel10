-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 03:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamepassph`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('user','admin') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `email`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Mr.User', 'user@gmail.com', '$2y$12$aGofkmNcAUC61QIDWQs9JuEKRnmMCbVtJt6Y.LSNEBZKFBzKwdGpq', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(2, 'Mr.Admin', 'admin@gmail.com', '$2y$12$Xf2JF4S47BSXTFwb6.y6g.pqxhdxPday0asLEA2WMX/rj7KAwb.li', 'admin', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(3, 'Chet Shields', 'shemar.littel@example.net', '$2y$12$OQaDEjWo/N0MXAj1zVo9GeXAKNV5wXYwOO3Uw14S2FFv.MiSK6g4G', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(4, 'Ana Denesik', 'swaniawski.dallin@example.net', '$2y$12$EUDVBkFVe5yMIwH.XOyUvee4tz8H6pcKcIHN9acMC3c2JVJ.NJaA2', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(5, 'Dr. Muhammad Harber DVM', 'deanna27@example.com', '$2y$12$Xhj0N7akKwi0H2MBT7LcBuJ6.K.Gmu/u/Oi/ArxAUEshvjbsN9pTi', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(6, 'Alfonzo Larson', 'reinger.rod@example.com', '$2y$12$j3KaCaoehG4ckfY2A4UZtu0OOq.0BkzdFP.OKRan8vpNKb/IKoLS2', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(7, 'Garth Grady V', 'leonard81@example.com', '$2y$12$RBWVaxOvRa6Y6wU0TPfn1uriYPEAaYguG9FmJbeIgMadIOokL5Rse', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(8, 'Suzanne McCullough', 'akutch@example.net', '$2y$12$VOapTbCPP40C8jHM4LB.YOnthjFYKVDm93H7/cvQPeh4yKsQDD9Pa', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(9, 'Candice Sauer DVM', 'nlueilwitz@example.net', '$2y$12$g7BdFr9JYinX.6C0B2VS1OSp.wzMzX.l4ISFf9eWnFbEl9vbJ9mue', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56'),
(10, 'Prof. Jakob Cummings III', 'benjamin.renner@example.net', '$2y$12$QBJxNBXIrMysNhUJFscbReFrZt/NTkEbfZd1/q7nx/3.ta8OeAum2', 'user', '2024-01-19 10:15:56', '2024-01-19 10:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2023_12_05_073648_create_clients_table', 1),
(34, '2023_12_08_091127_create_product_table', 1),
(35, '2023_12_10_014757_create_admins_table', 1),
(36, '2024_01_14_181610_create_product_auths_table', 1),
(37, '2024_01_14_182429_remove_product_image_from_table', 1),
(38, '2024_01_14_185539_remove_product_quantity_from_table', 1),
(39, '2024_01_16_190125_create_cache_table', 1),
(40, '2024_01_19_173248_add_category_to_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` enum('new','popular') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_name`, `product_type`, `product_description`, `product_price`, `created_at`, `updated_at`, `category`) VALUES
(1, 'WDLT0LmQJ1r9P22wTC4gwHlW6DaF2XHBxcZ7S7eY.jpg', 'Mobile Legends', 'Diamonds', 'gegee', '20', '2024-01-19 10:17:52', '2024-01-19 10:44:56', 'popular'),
(2, 'eEFMrCjR2eyEcfblb8xOLmAtJO8JHZOaPCccL0Td.png', 'Valorant', 'Valo Points', 'Valorant is a free-to-play first-person tactical hero shooter developed and published by Riot Games', '50', '2024-01-19 10:30:59', '2024-01-19 10:46:09', 'new'),
(3, '0ulA18eXbbdo9atnQG6dN9jCjGngOydubC4sN2ol.jpg', 'Call Of Duty Mobile', 'COD credits', NULL, '50', '2024-01-19 10:46:29', '2024-01-19 10:46:29', 'popular'),
(4, 'Olx5Hs1W8kC8TZBzHkzfBh7VcpOx3VeslmkNLsGi.jpg', 'Core', 'coin/unknown', NULL, '100', '2024-01-19 10:47:00', '2024-01-19 10:47:00', 'new'),
(5, 'q0W9R2TJDdkDlsfOffJCYLiXJZKcF0xh9EbaHaep.jpg', 'Overwatch', 'coin/unknown', NULL, '12', '2024-01-19 10:47:20', '2024-01-19 10:47:20', 'new'),
(6, 'udN7XwgF9UtuM8V4uxdX1riWXSiHJAXe8zKZeVf9.jpg', 'Clash Of Clans', 'Gem', NULL, '50', '2024-01-19 10:48:16', '2024-01-19 10:48:16', 'popular'),
(7, '8QVZFJfRd4rFHlIIaLE2UQxzR2Bgtrzz4Cz3SJdn.jpg', 'Clash Of Clanss', 'Gem', NULL, '50', '2024-01-19 17:51:51', '2024-01-19 17:51:51', 'popular'),
(8, 'ZA60hGaSwCAQF1AvUiF7QaJgJPtfKn5UVKuXmeP9.jpg', 'Clash Of Clanss', 'Gem', NULL, '50', '2024-01-19 17:52:05', '2024-01-19 17:52:05', 'popular'),
(9, 'dD5NivnRPbjWSabNsKQAPDvCegOrZy0KTrz6gZJj.jpg', 'Clash Of Clansss', 'Gem', NULL, '50', '2024-01-19 17:52:26', '2024-01-19 17:52:26', 'popular'),
(10, 'bvTRZSo8Tib54t5sOJ0Pxmtip4PVvyUmt1TCNVhD.jpg', 'Clash Of Clansss', 'Gem', NULL, '50', '2024-01-19 18:04:04', '2024-01-19 18:04:47', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `product_auths`
--

CREATE TABLE `product_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_auths`
--

INSERT INTO `product_auths` (`id`, `owner`, `product_name`, `product_type`, `product_quantity`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 'user@gmail.com', 'Mobile Legends', 'Diamonds', 2, 100, NULL, NULL),
(2, 'user@gmail.com', 'Clash Of Clans', 'Gem', 7, 350, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_admin_email_unique` (`admin_email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_auths`
--
ALTER TABLE `product_auths`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_auths`
--
ALTER TABLE `product_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
