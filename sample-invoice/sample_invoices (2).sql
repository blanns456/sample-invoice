-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 05:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_invoices`
--

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_from` datetime NOT NULL,
  `date_to` datetime NOT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `created_at`, `updated_at`, `date_created`, `date_from`, `date_to`, `restaurant_id`) VALUES
(1, '2023-12-01 19:36:47', '2023-12-01 19:36:47', '2023-12-02 03:36:47', '2023-12-20 00:00:00', '2023-12-26 00:00:00', 1),
(2, '2023-12-01 19:58:28', '2023-12-01 19:58:28', '2023-12-02 03:58:28', '2023-12-17 00:00:00', '2023-12-23 00:00:00', 1),
(3, '2023-12-01 19:58:28', '2023-12-01 19:58:28', '2023-12-02 03:58:28', '2023-12-17 00:00:00', '2023-12-23 00:00:00', 2),
(4, '2023-12-01 20:14:52', '2023-12-01 20:14:52', '2023-12-02 04:14:52', '2023-12-24 00:00:00', '2023-12-30 00:00:00', 1),
(5, '2023-12-01 20:14:52', '2023-12-01 20:14:52', '2023-12-02 04:14:52', '2023-12-24 00:00:00', '2023-12-30 00:00:00', 2),
(6, '2023-12-01 20:36:20', '2023-12-01 20:36:20', '2023-12-02 04:36:20', '2023-12-25 00:00:00', '2023-12-31 00:00:00', 1),
(7, '2023-12-01 20:36:20', '2023-12-01 20:36:20', '2023-12-02 04:36:20', '2023-12-25 00:00:00', '2023-12-31 00:00:00', 2),
(8, '2023-12-18 17:50:19', '2023-12-18 17:50:19', '2023-12-19 01:50:18', '2023-12-24 00:00:00', '2023-12-30 00:00:00', 1),
(9, '2023-12-18 17:50:19', '2023-12-18 17:50:19', '2023-12-19 01:50:19', '2023-12-24 00:00:00', '2023-12-30 00:00:00', 2),
(10, '2023-12-18 18:35:47', '2023-12-18 18:35:47', '2023-12-19 02:35:47', '2023-12-24 00:00:00', '2023-12-30 00:00:00', 1),
(11, '2023-12-18 18:35:47', '2023-12-18 18:35:47', '2023-12-19 02:35:47', '2023-12-24 00:00:00', '2023-12-30 00:00:00', 2);

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
(33, '2023_12_01_183435_create_invoices_table', 1),
(34, '2023_12_01_184513_create_orders_table', 1),
(35, '2023_12_01_185002_create_restaurants_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `cart` text NOT NULL,
  `date_delivered` datetime DEFAULT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `restaurant_id`, `date_created`, `cart`, `date_delivered`, `grand_total`) VALUES
(1, NULL, NULL, 1, '2023-05-04 21:02:50', '[{\"id\":\"kIkWcJqMowWYvbqwcgLF\",\"name\":\"nashburn\",\"description\":\"\",\"base_price\":195.0,\"totalprice\":585.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1677596929518?alt=media&token=1ad9b0d7-5745-4039-a0bb-15884cfa5006\",\"restaurant\":\"DKAMxvs737vtmzwptVV6\",\"qty\":3,\"options\":[]}]', '2023-05-04 21:02:50', 625),
(2, NULL, NULL, 1, '2023-12-05 21:10:21', '[{\"id\":\"kIkWcJqMowWYvbqwcgLF\",\"name\":\"nashburn\",\"description\":\"\",\"base_price\":195.0,\"totalprice\":585.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1677596929518?alt=media&token=1ad9b0d7-5745-4039-a0bb-15884cfa5006\",\"restaurant\":\"DKAMxvs737vtmzwptVV6\",\"qty\":3,\"options\":[]}]', '2023-12-05 21:10:21', 625),
(3, NULL, NULL, 2, '2023-06-27 08:23:31', '[{\"id\":\"fX8hEBpAefwakWlKos7H\",\"name\":\"Cheese Burger\",\"description\":\"\",\"base_price\":50.0,\"totalprice\":50.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1676882566070?alt=media&token=acea30df-074c-41b1-af90-086e1c7c77e9\",\"restaurant\":\"drgEiw8zpb0PoArGtbYi\",\"qty\":1,\"options\":[]}]', '2023-06-27 08:23:31', 625),
(4, NULL, NULL, 1, '2023-04-15 22:06:35', '[{\"id\":\"kIkWcJqMowWYvbqwcgLF\",\"name\":\"nashburn\",\"description\":\"\",\"base_price\":195.0,\"totalprice\":195.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1677596929518?alt=media&token=1ad9b0d7-5745-4039-a0bb-15884cfa5006\",\"restaurant\":\"DKAMxvs737vtmzwptVV6\",\"qty\":1,\"options\":[]}]', '2023-04-15 22:06:35', 625),
(5, NULL, NULL, 2, '2023-05-31 18:55:02', '[{\"id\":\"vwVkU4Oji6OSCCP8mArz\",\"name\":\"1-pc Chicken w/ Fries Small Meal\",\"description\":\"\",\"base_price\":120.0,\"totalprice\":135.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1673776069136?alt=media&token=8f3ab2c2-1019-4ccf-80ae-9f7d069bb696\",\"restaurant\":\"drgEiw8zpb0PoArGtbYi\",\"qty\":1,\"options\":[{\"index\":\"0\",\"text\":\"Side 1\",\"price\":\"0.00\"},{\"index\":\"1\",\"text\":\"Flavor Variant 2\",\"price\":\"15.00\"},[{\"index\":0,\"text\":\"\",\"price\":0,\"value\":false},{\"index\":1,\"text\":\"\",\"price\":0,\"value\":false}]]}]', '2023-05-31 18:55:02', 625),
(6, NULL, NULL, 1, '2023-06-27 08:03:59', '[{\"id\":\"kIkWcJqMowWYvbqwcgLF\",\"name\":\"nashburn\",\"description\":\"\",\"base_price\":195.0,\"totalprice\":195.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1677596929518?alt=media&token=1ad9b0d7-5745-4039-a0bb-15884cfa5006\",\"restaurant\":\"DKAMxvs737vtmzwptVV6\",\"qty\":1,\"options\":[]}]', '2023-06-27 08:03:59', 625),
(7, NULL, NULL, 1, '2023-06-27 08:03:59', '[{\"id\":\"kIkWcJqMowWYvbqwcgLF\",\"name\":\"nashburn\",\"description\":\"\",\"base_price\":195.0,\"totalprice\":195.0,\"image\":\"https://firebasestorage.googleapis.com/v0/b/foodtrip-app-a98ea.appspot.com/o/menu%2F1677596929518?alt=media&token=1ad9b0d7-5745-4039-a0bb-15884cfa5006\",\"restaurant\":\"DKAMxvs737vtmzwptVV6\",\"qty\":1,\"options\":[]}]', '2023-06-27 08:03:59', 625);

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
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `created_at`, `updated_at`, `name`, `district`, `barangay`, `city`, `address`) VALUES
(1, NULL, NULL, 'Blanns Resto', 'Bosco', 'Mangagoy', 'Bislig City', 'Gordonas'),
(2, NULL, NULL, 'Jessie Cakes', 'Castillo', 'Mangagoy', 'Bislig City', 'Purok 6');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
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
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
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
