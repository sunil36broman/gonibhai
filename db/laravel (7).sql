-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 09:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_24_140748_create_permission_tables', 1),
(5, '2020_01_24_140910_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 15),
(1, 'App\\User', 16),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 12),
(2, 'App\\User', 13),
(2, 'App\\User', 14),
(2, 'App\\User', 17),
(2, 'App\\User', 18),
(2, 'App\\User', 19),
(2, 'App\\User', 20),
(2, 'App\\User', 21),
(2, 'App\\User', 22),
(2, 'App\\User', 23),
(2, 'App\\User', 24),
(2, 'App\\User', 25),
(2, 'App\\User', 26),
(2, 'App\\User', 27),
(2, 'App\\User', 28),
(2, 'App\\User', 29),
(2, 'App\\User', 30),
(2, 'App\\User', 31),
(3, 'App\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-06-26 20:36:06', '2020-06-26 20:36:06'),
(2, 'role-create', 'web', '2020-06-26 20:36:06', '2020-06-26 20:36:06'),
(3, 'role-edit', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(4, 'role-delete', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(5, 'product-list', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(6, 'product-create', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(7, 'product-edit', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(8, 'product-delete', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(9, 'application-list', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(10, 'application-create', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(11, 'application-edit', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(12, 'application-delete', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(13, 'application-pending', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(14, 'application-investigation', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(15, 'application-approved', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(16, 'application-handover', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07'),
(17, 'application-rejected', 'web', '2020-06-26 20:36:07', '2020-06-26 20:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'mobile', 'this is good mobile', '2020-06-26 20:40:59', '2020-06-26 20:40:59'),
(2, 'teliphone', 'teliphone is good', '2020-06-26 20:41:22', '2020-06-26 20:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-06-26 20:36:43', '2020-06-26 20:36:43'),
(2, 'User', 'web', '2020-06-26 20:43:15', '2020-06-26 20:43:15'),
(3, 'Investigation', 'web', '2020-07-23 04:38:00', '2020-07-23 04:38:00'),
(4, 'Pending', 'web', '2020-07-23 04:59:17', '2020-07-23 04:59:17'),
(5, 'Approved', 'web', '2020-07-23 04:59:36', '2020-07-23 04:59:36'),
(6, 'Handover', 'web', '2020-07-23 04:59:54', '2020-07-23 04:59:54'),
(7, 'Rejected', 'web', '2020-07-23 05:00:13', '2020-07-23 05:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(15, 1),
(15, 2),
(15, 5),
(16, 1),
(16, 2),
(16, 6),
(17, 1),
(17, 2),
(17, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$10$PBuhCq6KvJpdh0miTNrXOOYEmkw0Xrdra634rc2kdC07U2g3yAZ1.', 'ooxzALy1fcDQM3j46zlVefWNLbzC9H68bucLml5uRCWfILdapAuQR4iPdgTC', '2020-06-26 20:36:43', '2020-06-26 20:36:43'),
(2, 'rony', 'rony@gmail.com', NULL, '$2y$10$Z4JIevlWP5/nFuAFVn.ok.XGS0gubAPICwgnueMlOmdDtGe2tHaxK', NULL, '2020-06-26 20:43:41', '2020-06-26 20:43:41'),
(3, 'aaaaddd', 'admin1@gmail.com', NULL, '$2y$10$5My4pQLk5PkZf.sptEB3oOOqRntmmJiwVL7XxS9Ro0WPn2Imw5/Qm', NULL, '2020-07-22 02:23:23', '2020-07-22 02:23:23'),
(4, 'sdfsdf', 'admin2@gmail.com', NULL, '$2y$10$AWF/JMS84wPHxtGWfFPegOwHprsJ4J5JD5z6Lqab7JkQqYv8mkzVO', NULL, '2020-07-22 02:29:39', '2020-07-22 02:29:39'),
(5, 'backupwordpress', 'admin32@gmail.com', NULL, '$2y$10$SI85.9sIvckrlUFmFp2fleVDQNdy7hl0jAASvH8rlv/UpiJlVoPGy', NULL, '2020-07-22 02:33:27', '2020-07-22 02:33:27'),
(6, 'sdfsdf', 'admin6@gmail.com', NULL, '$2y$10$2HnWrDg9q0inU0quLuQIU.50ClJicqFtJBfc0iGkGOtvkB5sip2ta', NULL, '2020-07-22 02:35:06', '2020-07-22 02:35:06'),
(7, 'sdfsdf', 'admin7@gmail.com', NULL, '$2y$10$qrhNa8iwK2yqtrc5CZ.ikuj76SziKWAFxJnyDiR66yAOfaCvVHGf.', NULL, '2020-07-22 02:37:16', '2020-07-22 02:37:16'),
(8, 'sdfsdf', 'admin11@gmail.com', NULL, '$2y$10$ELnzHpJ4G9fjYHkYyg1GPumY0WJWd1BlZYmOj1vL58EMJJsOlzcPm', NULL, '2020-07-22 04:39:39', '2020-07-22 04:39:39'),
(9, 'dhiman', 'dhiman@gmail.com', NULL, '$2y$10$2AvUFUKkc0pq4lMLjgPOB.AlSh8jPfKmOLM.0aKbKa/SuOpdOXn.G', NULL, '2020-07-23 03:57:03', '2020-07-23 03:57:03'),
(10, 'ffff', 'admin12@gmail.com', NULL, '$2y$10$ra1NlDRSAohx8jH3KryCmuKKa80szJcPKcGZqQ1Ovz/Tz2gB7BMsC', NULL, '2020-07-23 04:27:20', '2020-07-23 04:27:20'),
(11, 'dfg', 'admin133@gmail.com', NULL, '$2y$10$20KHGXn8DJn4j/bkPlMGL.ndqJnZj8N1ZGVRybMouG2oMuokxmEGW', NULL, '2020-07-23 04:29:33', '2020-07-23 04:40:27'),
(12, 'abirn', 'abir@gmail.com', NULL, '$2y$10$tGhnNFJRa1ZGLctkCMH6AeTZ7E0DKXqhDQ2pTvj1t/56YlS9uBhIm', NULL, '2020-07-24 10:48:09', '2020-07-24 10:48:09'),
(13, 'sdfsdf', 'admin20@gmail.com', NULL, '$2y$10$GqDsfZE4McFayROpCxTGh.CbVI.o5HjSsD7UYiMGU/KQLyDfhBO0q', NULL, '2020-07-24 11:22:40', '2020-07-24 11:22:40'),
(14, 'wwww', 'admin21@gmail.com', NULL, '$2y$10$w3bl0dOX8n46o3tnzvVriuxp4N77ZSL9fy6CpaST78pLBV8sL65MG', NULL, '2020-07-24 12:12:12', '2020-07-24 12:12:12'),
(15, 'aaaa', 'admin25@gmail.com', NULL, '$2y$10$yphnCQvJQYrDB5SPcut5tudzSaC7jaXFExnbs6/gZTUWKgdXWJTYO', NULL, '2020-07-24 12:24:59', '2020-08-11 13:41:46'),
(16, 'anika', 'anika@gmail.com', NULL, '$2y$10$CwPfDeEu8ws4sBuWue8M/uJeE2wM8HMpAqa0kIpbpZwOX4XwhqjuW', NULL, '2020-08-11 13:11:49', '2020-08-11 13:41:01'),
(17, 'varati', 'varati@gmail.com', NULL, '$2y$10$BWbjyYOO8YF4aMjyzraAAOYZz0aF595XvZrqtC73ClW/dbgytiX/C', NULL, '2020-08-12 03:22:15', '2020-08-12 03:22:15'),
(18, 'animarany', 'animarany@gmail.com', NULL, '$2y$10$fB.dhN5s1ek8HFs9xf0YG.5kb0sqg.nvgAhqY5EfiQQ2KlIQGFRZW', NULL, '2020-08-12 03:33:22', '2020-08-12 03:33:22'),
(19, 'wearefine', 'wearefine@gmail.com', NULL, '$2y$10$UWCkkys0KE6IlgtIAgjuMurNXzF5PDDvfqncdNvY0FfunCoygk48y', NULL, '2020-08-12 03:35:36', '2020-08-12 03:35:36'),
(20, 'abirkhan', 'abirkhan@gmail.com', NULL, '$2y$10$x4udl76s.y2vObRV8P9ld.W0o/HVFVdhM7GlRS7RyKmtD91aouFaK', NULL, '2020-08-12 22:16:24', '2020-08-12 22:16:24'),
(21, 'bachcha', 'bachcha@gmail.com', NULL, '$2y$10$B3OMPtSZdqxX0DjGWPFsdeiH2YHKCneoUJGR9j1Qc5DGfnGEbJH5K', NULL, '2020-08-12 22:32:54', '2020-08-12 22:32:54'),
(22, 'bachchakhan', 'bachchakhan@gmail.com', NULL, '$2y$10$gIM3ZhJsYJFKY535hBhlne6LtZtw3ZIovFYd4i/Lv9B/1aB5rDinm', NULL, '2020-08-12 22:34:19', '2020-08-12 22:34:19'),
(23, 'suman', 'suman@gmail.com', NULL, '$2y$10$xbvEvyQKd1k7zbkzt1j4huDkBmAkFjqJ3H4we.qRpt5RRJj6NaR.S', NULL, '2020-08-13 00:19:42', '2020-08-13 00:19:42'),
(24, 'pakhi', 'pakhi@gmail.com', NULL, '$2y$10$Wi4f9nFvcj9rgTy3s5XDW.2faEyliGv4d81Or4DHDURgWz8rUI3iW', NULL, '2020-08-13 00:22:52', '2020-08-13 00:22:52'),
(25, 'deletehobe', 'deletehobe@gmail.com', NULL, '$2y$10$5zTrhrtfdVXpczjdPdy07eeJvtI9ztujkOXKnbeyd1reLlM3trfUy', NULL, '2020-08-13 08:52:59', '2020-08-13 08:52:59'),
(26, 'bampmas', 'bampmas@gmail.com', NULL, '$2y$10$VfQxlxigjO6F9efpvqxho.ngvv.IXyF8Dwd9cOG4H/7kFWn4Wkpem', NULL, '2020-08-13 09:18:52', '2020-08-13 09:18:52'),
(27, 'newdate', 'newdate@gmail.com', NULL, '$2y$10$UJ2qwziERunlhIn6iX.oGu.iW3KgcGU8CTrYNKLS7jAsPJusxWACO', NULL, '2020-08-13 09:38:12', '2020-08-13 09:38:12'),
(28, 'khanfamily', 'khanfamily@gmail.com', NULL, '$2y$10$yyykNmRDUkvaWFKpbG.CX.0nJTlTJam3OesS6kGKNzWY95qNp35T2', NULL, '2020-08-13 09:47:32', '2020-08-13 09:47:32'),
(29, 'testcorona', 'testcorona@gmail.com', NULL, '$2y$10$6Vfegp1u.6jwaESkL/0s.e58JbhYxYNXxo5MPOemzFUhYQwOp7RI6', NULL, '2020-08-30 12:50:18', '2020-08-30 12:50:18'),
(30, 'coronatwo', 'coronatwo@gmail.com', NULL, '$2y$10$iTisJHAZvxaP8CujMGPOjOvFDiguJbjjg5e6jYXN.UfldWCCbF086', NULL, '2020-08-30 13:04:29', '2020-08-30 13:04:29'),
(31, 'coronathree', 'coronathree@gmail.com', NULL, '$2y$10$RTch9z.DFL14Io9Hro3qSOI5xDisl4Saz9UrH4eTv3cs0V9Tn2BfC', NULL, '2020-08-30 13:41:49', '2020-08-30 13:41:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
