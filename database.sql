-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: btlkcs6v7lejih2w75tj-mysql.services.clever-cloud.com:3306
-- Generation Time: Mar 16, 2021 at 02:31 PM
-- Server version: 8.0.15-5
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btlkcs6v7lejih2w75tj`
--

-- --------------------------------------------------------

--
-- Table structure for table `cable_services`
--

CREATE DATABASE IF NOT EXISTS `laravel`;

USE `laravel`;

CREATE TABLE `cable_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cable_services`
--

INSERT INTO `cable_services` (`id`, `name`, `price`) VALUES
(1, 'bronze', 29.99),
(2, 'silver', 39.99),
(3, 'platinum', 49.99);

-- --------------------------------------------------------

--
-- Table structure for table `change_requests`
--

CREATE TABLE `change_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `name`, `description`) VALUES
(1, 'FOX Sports', 'Your favorite sports channel'),
(2, 'ID Discovery', 'Crime and Mistery all in one channel'),
(3, 'NatGeo HD', 'discovering world'),
(4, 'ESPN', 'The world leader channel'),
(6, 'Warnner tv', 'All your favorite series in one channel'),
(7, 'Fox HD', 'Fox channel for family'),
(8, 'HBO', 'It\'s not TV, it\'s HBO');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internet_services`
--

CREATE TABLE `internet_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internet_services`
--

INSERT INTO `internet_services` (`id`, `name`, `speed`, `price`) VALUES
(1, 'Very slow', '7 mb/s', 5.30),
(2, 'medium', '10 mb/s', 9.20),
(3, 'fast', '20 mb/s', 17.99);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_11_224656_create_internet_services_table', 2),
(7, '2021_03_11_225529_create_phone_services_table', 3),
(8, '2021_03_12_042102_create_cable_services_table', 3),
(9, '2021_03_12_043117_create_channels_table', 4),
(10, '2021_03_12_045100_create_invoices_table', 5),
(12, '2021_03_12_052218_create_services_table', 6),
(14, '2021_03_12_054513_create_packages_table', 7),
(15, '2021_03_12_055636_create_programs_table', 8),
(16, '2021_03_12_154732_add_role_to_users_table', 9),
(18, '2021_03_13_013203_add_nullable_to_programs_table', 10),
(19, '2021_03_13_210944_add_service_name_to_services_table', 11),
(20, '2021_03_13_211124_delete_name_column_to_services_table', 12),
(21, '2021_03_14_010820_delect_price_column_to_channels_table', 13),
(22, '2021_03_15_030119_add_service_id_to_users_table', 14),
(23, '2021_03_15_192604_create_requests_table', 15),
(24, '2021_03_15_200111_drop_requests_table', 16),
(25, '2021_03_15_200252_create_change_requests_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cable_service_id` bigint(20) UNSIGNED NOT NULL,
  `channel_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `cable_service_id`, `channel_id`) VALUES
(4, 1, 1),
(5, 1, 2),
(8, 3, 1),
(9, 3, 2),
(10, 3, 3),
(11, 3, 4),
(12, 1, 1),
(14, 1, 6),
(15, 1, 1),
(16, 1, 2),
(22, 2, 1),
(23, 2, 4),
(24, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone_services`
--

CREATE TABLE `phone_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_limit` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_services`
--

INSERT INTO `phone_services` (`id`, `name`, `plan_limit`, `price`) VALUES
(1, 'personal', '90 min', 9.99),
(2, 'business', '300 min', 19.99),
(3, 'Connected people', '180 min', 14.99);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `channel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `program_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts_at` time NOT NULL,
  `ends_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `channel_id`, `date`, `program_name`, `starts_at`, `ends_at`) VALUES
(7, 1, '2021-03-23', 'Real Madrid vs Atalanta', '15:00:00', '16:50:00'),
(8, 3, '2021-03-21', 'Cosmos', '11:30:00', '13:30:00'),
(9, 6, '2021-03-24', 'Doctor House', '08:00:00', '09:00:00'),
(10, 2, '2021-03-22', 'Dark', '14:30:00', '15:45:00'),
(11, 8, '2021-03-24', 'Outsider', '22:00:00', '22:50:00'),
(12, 8, '2021-03-22', 'Game of Thrones', '21:10:00', '22:30:00'),
(13, 4, '2021-03-25', 'Liverpool vs Manchester United', '09:45:00', '11:40:00'),
(14, NULL, '2021-03-26', 'Naruto Shipudden', '15:00:00', '15:30:00'),
(15, 6, '2021-03-24', 'Seinfield', '23:30:00', '00:00:00'),
(16, 6, '2021-03-22', 'Chicago Fire', '07:30:00', '08:30:00'),
(17, 8, '2021-03-25', 'Queens Gambit', '13:00:00', '14:00:00'),
(18, 7, '2021-03-22', 'Modern Family', '08:30:00', '09:30:00'),
(19, NULL, '2021-03-26', 'The Simpsons', '09:30:00', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `internet_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cable_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `service_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `internet_service_id`, `phone_service_id`, `cable_service_id`, `price`, `service_name`) VALUES
(11, 2, 3, 2, 64.18, 'stay at home'),
(14, 2, 1, 1, 49.18, 'Basic'),
(15, 3, 2, 3, 87.97, 'entreprise');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `service_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `service_id`) VALUES
(9, 'Marcel Molina', 'profesor@email.com', NULL, '$2y$10$Fp.SGXrh0k/YVqADFtY1veNB6PbuDVoh0MIDuaPpGeefSLvFOUhRW', NULL, '2021-03-16 13:59:29', '2021-03-16 13:59:29', 1, NULL),
(10, 'Marcel Molina', 'profesor_usuario@email.com', NULL, '$2y$10$ni00kicHc0oFqJguTMZivOYIOXbHFsrKJbv.HQF4Qp.RAZlffV.w.', NULL, '2021-03-16 14:05:12', '2021-03-16 14:05:12', 0, NULL),
(11, 'Joseph Montilla', 'joseph@email.com', NULL, '$2y$10$xrX7Dakv2EtzvXa2vgqH5OTLTXw6tCM3eRBMkQoLi7AsiJ9.VHR42', NULL, '2021-03-16 14:27:21', '2021-03-16 14:27:21', 0, NULL),
(12, 'Jefferson Montilla', 'jefferson@email.com', NULL, '$2y$10$ENpKfdUHRd.m7lSzKCM/meRWWNRbTrRUfKR4QYzFDkWy7iN8DwHLK', NULL, '2021-03-16 14:28:34', '2021-03-16 14:29:28', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cable_services`
--
ALTER TABLE `cable_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cable_services_name_unique` (`name`);

--
-- Indexes for table `change_requests`
--
ALTER TABLE `change_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `change_requests_user_id_foreign` (`user_id`),
  ADD KEY `change_requests_service_id_foreign` (`service_id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `internet_services`
--
ALTER TABLE `internet_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `internet_services_name_unique` (`name`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packages_cable_service_id_foreign` (`cable_service_id`),
  ADD KEY `packages_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phone_services`
--
ALTER TABLE `phone_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_services_name_unique` (`name`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_internet_service_id_foreign` (`internet_service_id`),
  ADD KEY `services_phone_service_id_foreign` (`phone_service_id`),
  ADD KEY `services_cable_service_id_foreign` (`cable_service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_service_id_foreign` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cable_services`
--
ALTER TABLE `cable_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `change_requests`
--
ALTER TABLE `change_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internet_services`
--
ALTER TABLE `internet_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phone_services`
--
ALTER TABLE `phone_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `change_requests`
--
ALTER TABLE `change_requests`
  ADD CONSTRAINT `change_requests_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `change_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_cable_service_id_foreign` FOREIGN KEY (`cable_service_id`) REFERENCES `cable_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `packages_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_cable_service_id_foreign` FOREIGN KEY (`cable_service_id`) REFERENCES `cable_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_internet_service_id_foreign` FOREIGN KEY (`internet_service_id`) REFERENCES `internet_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_phone_service_id_foreign` FOREIGN KEY (`phone_service_id`) REFERENCES `phone_services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
