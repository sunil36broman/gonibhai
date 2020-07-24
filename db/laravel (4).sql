-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 09:40 AM
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
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `refrence_id` varchar(100) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `mothers_name` varchar(50) NOT NULL,
  `date_of_joining` date NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `present_posting` varchar(50) DEFAULT NULL,
  `upload_joining_letter` varchar(50) NOT NULL,
  `scale` varchar(50) NOT NULL,
  `present_salary` varchar(100) NOT NULL,
  `pay_including_special_pay_of_any` varchar(50) NOT NULL,
  `marital_status` enum('single','married') NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `number_of_family_members` varchar(50) NOT NULL,
  `any_house` enum('himHer','spouse') NOT NULL,
  `legally_separated` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `upload_photo` varchar(50) NOT NULL,
  `loan` enum('yes','no') NOT NULL,
  `load_detail` text NOT NULL,
  `date_of_loan` varchar(100) NOT NULL,
  `loan2` enum('yes','no') DEFAULT NULL,
  `load_detail2` varchar(100) DEFAULT NULL,
  `date_of_loan2` varchar(100) DEFAULT NULL,
  `flat_allotted` enum('yes','no') NOT NULL,
  `accommodation_detail` text DEFAULT NULL,
  `areas_where_he_wants_to` varchar(50) NOT NULL,
  `ponty_as_date` date NOT NULL,
  `pontyAsDatenew` varchar(100) DEFAULT NULL,
  `executive_engineer` varchar(50) NOT NULL,
  `superintending_engineer` varchar(50) NOT NULL,
  `signature_upload` varchar(50) NOT NULL,
  `action_by` varchar(50) NOT NULL,
  `approved_sectional_officer` varchar(50) DEFAULT NULL,
  `approved_estate_officer` varchar(50) DEFAULT NULL,
  `approved_executive_engineer` varchar(50) DEFAULT NULL,
  `approved_superintendent_engineer` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `recommendation_sectional` varchar(100) DEFAULT NULL,
  `recommendation_estate` varchar(100) DEFAULT NULL,
  `recommendation_executive` varchar(100) DEFAULT NULL,
  `recommendation_superintendent` varchar(100) DEFAULT NULL,
  `recommendation_sectional_file` varchar(100) DEFAULT NULL,
  `recommendation_estate_file` varchar(100) DEFAULT NULL,
  `recommendation_executive_file` varchar(100) DEFAULT NULL,
  `recommendation_superintendent_file` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `refrence_id`, `designation`, `fathers_name`, `mothers_name`, `date_of_joining`, `department_name`, `present_posting`, `upload_joining_letter`, `scale`, `present_salary`, `pay_including_special_pay_of_any`, `marital_status`, `mobile_number`, `spouse_name`, `number_of_family_members`, `any_house`, `legally_separated`, `date`, `upload_photo`, `loan`, `load_detail`, `date_of_loan`, `loan2`, `load_detail2`, `date_of_loan2`, `flat_allotted`, `accommodation_detail`, `areas_where_he_wants_to`, `ponty_as_date`, `pontyAsDatenew`, `executive_engineer`, `superintending_engineer`, `signature_upload`, `action_by`, `approved_sectional_officer`, `approved_estate_officer`, `approved_executive_engineer`, `approved_superintendent_engineer`, `status`, `recommendation_sectional`, `recommendation_estate`, `recommendation_executive`, `recommendation_superintendent`, `recommendation_sectional_file`, `recommendation_estate_file`, `recommendation_executive_file`, `recommendation_superintendent_file`, `created_at`, `updated_at`) VALUES
(1, 'www', '8518215680', 'wwww', 'www', 'www', '2020-07-23', 'fff', 'ffff', '1595441717.jpg', 'fff', '4444', 'fff', 'married', 'fff', 'ff', 'fff', 'spouse', 'fff', '2020-07-23', '1595441717.png', 'no', 'gggg', '2020/07/23', 'yes', NULL, '2020/07/23', 'no', NULL, 'Badda, Dhaka', '2020-07-23', NULL, '1595441717.png', '1595441717.jpg', '1595441717.jpg', '1', '1', '1', NULL, NULL, '3', '', '', '', '', '', NULL, NULL, NULL, '2020-06-30 02:59:24', '2020-07-24 12:43:50'),
(2, 'sdfs', '8518215620', 'sdfsdf', 'sdf', 'sdfsdf', '2020-07-22', 'sdfsdf', 'sdfsdf', '1595440419.png', 'sdfsf', '', 'sdfsdf', 'married', 'sdf', 'sdfsf', 'sdfsdf', 'spouse', 'sdfsdf', '2020-07-22', '1595440419.png', 'no', 'fghfgh', '', 'yes', '', '', 'no', 'fghfgh', '1', '2020-07-22', NULL, '1595440419.png', '1595440419.png', '1595440419.jpg', '1', '1', NULL, NULL, NULL, '2', '', '', '', '', '', NULL, NULL, NULL, '2020-06-30 06:31:18', '2020-07-23 04:41:47'),
(3, 'rrr', '8518215630', 'rrr', 'rrr', 'rrr', '2020-07-15', 'rrr', 'rrr', '1594633179.jpg', 'rr', '', 'rrrr', 'married', '1750637792', 'rr', 'rrr', 'spouse', 'rrr', '2020-07-15', '1594633179.jpg', 'no', 'rrrr', '', 'yes', '', '', 'no', 'rrrr', '3', '2020-07-09', NULL, '1594633179.png', '1594633179.png', '1594633179.png', '2', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, '2020-07-13 03:39:39', '2020-07-21 21:40:27'),
(4, 'qwqwq', '8518215631', 'qwqwqw', 'qwqwqw', 'qwqwqwqw', '2020-07-31', 'qwqwqw', 'qwqwqw', '1594670788.jpg', 'ffffff', '', 'qwqw', 'married', '1750637792', 'qwqw', 'qwqw', 'spouse', 'qwqw', '2020-07-22', '1594670788.jpg', 'no', 'qwqw', '', 'yes', '', '', 'no', 'qwqw', '3', '2020-07-23', NULL, '1594670788.jpg', '1594670788.jpg', '1594670788.jpg', '1', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, '2020-07-13 14:06:28', '2020-07-21 21:40:17'),
(5, 'aaaaddd', '8518215632', 'ddddd', 'sdfsdf', 'sdfsdf', '2020-07-30', 'sdfsdf', 'sdfsdfdsf', '1595359403.jpg', 'sfsdf', '', 'sdfsdf', 'married', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'spouse', 'sdfsdf', '2020-07-16', '1595359403.png', 'no', 'sdfsdf', '', 'yes', '', '', 'no', 'sdfsdf', '3', '2020-07-30', NULL, '1595359403.png', '1595359403.png', '1595359403.png', '3', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 02:23:23', '2020-07-22 02:23:23'),
(6, 'sdfsdf', '8518215633', 'sdfsdfsdf', 'sdfsdf', 'sdfsdf', '2020-07-31', 'sdfs', 'sdfsdf', '1595359779.png', 'sdfsdf', '', 'sdfsdf', 'married', 'sdfsdf', 'sdf', 'sdfsd', 'spouse', 'sdfsdf', '2020-07-30', '1595359779.png', 'no', 'sdfsdf', '', 'yes', '', '', 'no', 'sdfsdf', '2', '2020-07-22', NULL, '1595359779.png', '1595359779.jpg', '1595359779.jpg', '4', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 02:29:39', '2020-07-22 02:29:39'),
(7, 'backupwordpress', '8518215634', 'sdfsdfs', 'dfgdf', 'gdfgdfg', '2020-07-30', 'dfgdfg', 'sdfsdfdsf', '1595360007.jpg', 'dfgdfg', '', 'dfgdfg', 'married', 'dfgdfg', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-21', '1595360007.png', 'no', 'dfgdfg', '', 'yes', '', '', 'no', 'dfgdfg', '3', '2020-07-29', NULL, '1595360007.png', '1595360007.png', '1595360007.jpg', '5', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 02:33:27', '2020-07-22 02:33:27'),
(10, 'sdfsdf', '8518215636', 'sdfsdf', 'dgdfg', 'dfgdfg', '2020-07-21', 'dfg', 'dfgdfg', '1595367579.png', 'dfgdfg', '', 'dfgdfg', 'married', 'sdfsdf', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-30', '1595367579.png', 'no', 'dfgdfg', '', 'yes', '', '', 'no', 'dfgdfg', '2', '2020-07-30', NULL, '1595367579.jpg', '1595367579.png', '1595367579.png', '8', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 04:39:39', '2020-07-22 04:39:39'),
(12, 'abirn', '4227818501', 'abirde', 'abirf', 'abirm', '2020-07-23', 'abird', 'abirp', '1595562489.jpg', '4', '33333', 'dfgdfg', 'married', '6555', 'hhhh', 'nnnn', 'spouse', 'llll', '2020-07-24', '1595562489.jpg', 'no', '777', '2020/07/24', 'no', '666', '2020/07/24', 'no', 'gggg', 'Badda, Dhaka', '2020-07-25', 'hghg', '1595562489.jpg', '1595562489.jpg', '1595562489.jpg', '12', '1', '1', '1', '1', '4', 'thik ase', 'weeee', 'yyyyy', 'gggg', '', '', '', '', '2020-07-24 10:48:09', '2020-07-24 11:20:31'),
(13, 'sdfsdf', '2783537537', 'dfgdfgdfg', 'dfg', 'dfgdfg', '2020-07-23', 'dfg', 'dfg', '1595564560.jpg', '4', 'dfg', 'dfgdfg', 'married', 'dfgdfg', 'dfg', 'dfg', 'spouse', 'dfgdfg', '2020-07-15', '1595564560.jpg', 'no', 'dfgdfg', '2020/07/23', 'no', 'dfg', '2020/07/23', 'no', 'dfgdfg', 'Kuril, Dhaka', '2020-07-23', 'dfgdfgdfg', '1595564560.jpg', '1595564560.jpg', '1595564560.exe', '13', '1', '1', '1', '1', '4', 'this is section command', 'ess recc', 'excuuu', 'suu', '1595565284.jpg', '1595565946.jpg', '1595566031.jpg', '1595566052.jpg', '2020-07-24 11:22:40', '2020-07-24 11:47:32'),
(14, 'wwww', '9462017154', 'sdfsdf', 'wwwwff', 'wwwm', '2020-07-23', 'sdfs', 'abirp', '1595567532.jpg', 'sdfsdf', 'dfg', 'dfgdfg', 'married', '6555', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-23', '1595567532.jpg', 'no', '456456', '2020/07/23', 'no', 'dfg', '2020/07/23', 'no', 'dfgdfg', 'Kuril, Dhaka', '2020-07-16', 'dfgdfg', '1595567532.jpg', '1595567532.png', '1595567532.png', '14', '1', '1', '1', '1', '4', 'sectoipon', 'esss', 'exxxxxxx', 'suuuuu', '1595567583.jpg', '1595567633.png', '1595567666.png', '1595567702.jpg', '2020-07-24 12:12:12', '2020-07-24 12:15:02'),
(15, 'aaaa', '7706327038', 'sdfsdfdsf', 'sssss', 'sssss', '2020-07-23', 'ssss', '4444', '1595568299.png', '444', '444', '444', 'married', '5555', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-23', '1595568299.png', 'no', 'dfgfg', '2020/07/23', 'no', 'dfgdfg', '2020/07/23', 'no', 'dfgdfg', 'Badda Dhaka', '2020-07-24', 'hghg', '1595568299.png', '1595568299.jpg', '1595568299.png', '15', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-24 12:24:59', '2020-07-24 12:24:59');

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
(2, 'App\\User', 15),
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
(1, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$10$PBuhCq6KvJpdh0miTNrXOOYEmkw0Xrdra634rc2kdC07U2g3yAZ1.', 'NeNWmim7kfc6z778RvoUE1pPnbkV8IQWbpC1gT4VIEwv72RhXz9t0KiZ6gul', '2020-06-26 20:36:43', '2020-06-26 20:36:43'),
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
(15, 'aaaa', 'admin25@gmail.com', NULL, '$2y$10$NQzTHnhx6bj2t5fexhP91O1Gt.RO79NKJLJ7YNygK/sMCjUpVq5cC', NULL, '2020-07-24 12:24:59', '2020-07-24 12:24:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
