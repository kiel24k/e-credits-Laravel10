-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 10:27 AM
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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
(6, 'admin@gmail.com', '$2y$12$F36NgI1PQ8t8Zlne1A..m.kzZq4pIi/9wQkyVDt/CPhAeAhwy.NPO', '2024-01-14 12:29:56', '2024-01-14 12:29:56');

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
(20, 'hahhaa', 'user@gmail.com', '$2y$12$NjDpfIvW9M3bSDwfXyBCiud89i/iruU4mheTpqzBV9NIujzHTdi2K', 'user', '2024-01-14 12:26:15', '2024-01-14 12:26:15'),
(21, 'admin', 'admin@gmail.com', '$2y$12$TRBD2KjA.mSb.xzj23Auhubl.noaeIht6dBQVMoeXr/7BGe0.bCli', 'admin', '2024-01-14 12:29:56', '2024-01-14 12:29:56'),
(22, 'yusername', 'yusername0123@gmail.com', '$2y$12$EHNWUGlJJMbIx9lfDuag0u5uDniCNr.j0aeHdZvcBcc0sVLwa3bQK', 'user', '2024-01-16 01:13:27', '2024-01-16 01:13:27');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_05_073648_create_clients_table', 1),
(7, '2023_12_08_091127_create_product_table', 2),
(10, '2023_12_10_014757_create_admins_table', 3),
(11, '2024_01_14_181610_create_product_auths_table', 4),
(12, '2024_01_14_182429_remove_product_image_from_table', 5),
(14, '2024_01_14_185539_remove_product_quantity_from_table', 6);

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
  `product_description` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_name`, `product_type`, `product_description`, `product_price`, `created_at`, `updated_at`) VALUES
(17, 'llnGFUH7GSYsNT1Lf3tyLSbBirskBDNnbjGBix1A.jpg', 'Bermudez, Kiel A.', 'Bermudez, Kiel A.', '12', '12', '2023-12-12 20:01:23', '2024-01-14 11:02:27'),
(23, 'JeWC3uKGFtUKfTLdiCCE4obHAEfnLAAUanrpUm11.jpg', 'MobileLegends', 'fbsdfgdsuf', 'HINDI  NABIBILI NGPAGMAMAHAL HINDI  NABIBILI NGPAGMAMAHAL HINDI  NABIBILI NGPAGMAMAHALvHINDI  NABIBILI NGPAGMAMAHALHINDI  NABIBILI NGPAGMAMAHAL', '12', '2024-01-14 10:08:51', '2024-01-16 00:19:26'),
(24, 'M6Qib486WxmDGtBnPSXGiRGEznja5svHsbcxhQQE.jpg', 'Bermudez, Kiel A.dsdds', 'dsddsd', 'Alfonso', '45', '2024-01-14 11:09:54', '2024-01-14 11:09:54'),
(25, 'JaxJDserQn8N9BEqr0LJKNUzhWAKhwySg5r3hJFB.jpg', 'Genshin Impact', 'COINT', 'BILI NA KAYOGAGAA', '45', '2024-01-15 23:52:23', '2024-01-15 23:52:23'),
(26, '4sp1ISZalc3GVyhrNa1mD8yJ037eGkKrWFMFjiUv.jpg', 'Genshin Impact', 'COINT', 'BILI NA KAYOGAGAA', '45', '2024-01-16 00:03:39', '2024-01-16 00:03:39'),
(27, '4uXyNYBbGXuwhUFu5We0LvLs55vsoeUBZxBcNIEG.jpg', 'Genshin Impacts', 'COINT', 'BILI NA KAYOGAGAA', '45', '2024-01-16 01:19:10', '2024-01-16 01:19:10'),
(28, 'wpjpU2BGQRGIWeRKWfM9R3ZMAqmLk6cxgz5zxirk.jpg', 'Genshin Impacts', 'COINT', 'BILI NA KAYOGAGAA', '45', '2024-01-16 01:22:40', '2024-01-16 01:22:40');

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
(72, 'yusername0123@gmail.com', 'Genshin Impact', 'COINT', 2, 90, NULL, NULL),
(73, 'yusername0123@gmail.com', 'Genshin Impact', 'COINT', 2, 90, NULL, NULL),
(74, 'yusername0123@gmail.com', 'MobileLegends', 'fbsdfgdsuf', 1, 12, NULL, NULL),
(76, 'user@gmail.com', 'Genshin Impact', 'COINT', 2, 90, NULL, NULL),
(77, 'user@gmail.com', 'Genshin Impact', 'COINT', 2, 90, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_auths`
--
ALTER TABLE `product_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
