-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 04:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '687f6ebecf24cc6a32d0b79c50ef32b7', '2021-05-26 00:24:29'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '37c5ab85a491824058542196432e455e', '2021-05-26 00:33:20'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '687f6ebecf24cc6a32d0b79c50ef32b7', '2021-05-26 00:35:55'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '8c267a03806228ac99e6d9efe91d9e70', '2021-05-26 00:36:08'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '01ee1f68ce88ea2a0d8b8c70a3958987', '2021-05-26 00:40:36'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '50651d8f5647d3ea2a14691f366dc438', '2021-05-26 01:04:35'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '0004f335f710f1e662fddaae6ac6dab2', '2021-05-26 01:20:28'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'ed97f0c81e5c6958642e42565d60e977', '2021-05-26 01:22:39'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2cb11e6c098db296b7da8c253951f525', '2021-05-26 01:24:22'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2cb11e6c098db296b7da8c253951f525', '2021-05-26 01:24:28'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2cb11e6c098db296b7da8c253951f525', '2021-05-26 01:25:45'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '3dca744519c8f6affe8f445c43253557', '2021-05-26 01:28:22'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '5bea9a5da60b4bb27128d8fd5507fb7c', '2021-05-28 05:07:32'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '3a7255f8b7362df15e73c051dc49d28a', '2021-05-28 05:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-22 13:59:35', 1),
(2, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-22 13:59:48', 1),
(3, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 04:00:02', 1),
(4, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 05:06:14', 1),
(5, '::1', 'fernando', NULL, '2021-05-23 05:11:41', 0),
(6, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 05:11:55', 1),
(7, '::1', 'fchai69@gmail.com', 2, '2021-05-23 05:43:47', 1),
(8, '::1', 'aceng', NULL, '2021-05-23 05:50:04', 0),
(9, '::1', 'fchai69@gmail.com', 2, '2021-05-23 05:50:10', 1),
(10, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 05:51:26', 1),
(11, '::1', 'fchai69@gmail.com', 2, '2021-05-23 05:52:10', 1),
(12, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 06:25:04', 1),
(13, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 06:26:08', 1),
(14, '::1', 'fernando', NULL, '2021-05-23 08:23:22', 0),
(15, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 08:23:26', 1),
(16, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-23 12:06:39', 1),
(17, '::1', 'nana', NULL, '2021-05-23 13:21:48', 0),
(18, '::1', 'fchai69@gmail.com', 2, '2021-05-23 13:22:07', 1),
(19, '::1', 'f@gmail.com', 3, '2021-05-23 14:45:07', 1),
(20, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-24 00:21:35', 1),
(21, '::1', 'fchai69@gmail.com', 2, '2021-05-24 01:56:11', 1),
(22, '::1', 'fchai69@gmail.com', 2, '2021-05-24 08:24:05', 1),
(23, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-25 02:23:19', 1),
(24, '::1', 'fchai69@gmail.com', 2, '2021-05-25 04:17:37', 1),
(25, '::1', 'fernando.chai112@gmail.com', NULL, '2021-05-25 12:44:35', 0),
(26, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-25 12:44:40', 1),
(27, '::1', 'fernando.chai76@gmail.com', 9, '2021-05-26 01:04:56', 0),
(28, '::1', 'fernando.chai76@gmail.com', 12, '2021-05-26 01:20:35', 1),
(29, '::1', 'keke', 13, '2021-05-26 01:22:22', 0),
(30, '::1', 'fernando.chai76@gmail.com', 13, '2021-05-26 01:22:46', 1),
(31, '::1', 'fernando.chai76@gmail.com', NULL, '2021-05-26 01:29:24', 0),
(32, '::1', 'fernando.chai76@gmail.com', 15, '2021-05-26 01:29:34', 1),
(33, '::1', 'fchai69@gmail.com', 2, '2021-05-26 04:44:10', 1),
(34, '::1', 'fernando.chai112@gmail.com', NULL, '2021-05-26 10:38:16', 0),
(35, '::1', 'fernando.chai112@gmail.com', NULL, '2021-05-26 10:38:24', 0),
(36, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-26 10:38:31', 1),
(37, '::1', 'fchai69@gmail.com', NULL, '2021-05-26 10:53:26', 0),
(38, '::1', 'fchai69@gmail.com', NULL, '2021-05-26 10:53:35', 0),
(39, '::1', 'fchai69@gmail.com', 2, '2021-05-26 10:53:44', 1),
(40, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-26 10:54:23', 1),
(41, '::1', 'meme', NULL, '2021-05-26 11:02:22', 0),
(42, '::1', 'fernando.chai76@gmail.com', 15, '2021-05-26 11:02:28', 1),
(43, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-26 11:03:21', 1),
(44, '::1', 'nana', NULL, '2021-05-26 11:41:16', 0),
(45, '::1', 'fchai69@gmail.com', 2, '2021-05-26 11:41:21', 1),
(46, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-26 11:44:47', 1),
(47, '::1', 'nana', NULL, '2021-05-26 12:11:56', 0),
(48, '::1', 'fchai69@gmail.com', 2, '2021-05-26 12:12:01', 1),
(49, '::1', 'fernando.chai112@gmail.com', NULL, '2021-05-26 12:17:36', 0),
(50, '::1', 'fernando.chai112@gmail.com', NULL, '2021-05-26 12:17:40', 0),
(51, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-26 12:17:46', 1),
(52, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-27 06:44:38', 1),
(53, '::1', 'fchai69@gmail.com', 2, '2021-05-27 08:05:06', 1),
(54, '::1', 'fernando.chai76@gmail.com', 16, '2021-05-28 05:04:42', 0),
(55, '::1', 'fernando.chai76@gmail.com', 16, '2021-05-28 05:07:40', 1),
(56, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-28 05:09:00', 1),
(57, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-28 05:12:01', 1),
(58, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-28 05:12:35', 1),
(59, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-28 05:12:46', 1),
(60, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-28 05:13:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'fernando.chai76@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2a7c662a3cef3ad8feedc038c12b7e1e', '2021-05-26 01:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `serviceId` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `status`, `address`, `paymentMethod`, `userId`, `serviceId`, `created_at`, `updated_at`) VALUES
(1, 5, 'bumi', 'Cash', 2, 1, '2021-05-25 06:40:04', '2021-05-27 10:00:30'),
(2, 3, 'eefef', 'Cash', 2, 1, '2021-05-25 06:40:57', '2021-05-26 12:20:27'),
(3, 3, 'mars', 'Cash', 2, 1, '2021-05-25 07:24:31', '2021-05-26 12:20:22'),
(5, 3, 'Jl. masuka darat gang aneka 2 nomor 5', 'Cash', 2, 1, '2021-05-25 12:08:59', '2021-05-26 12:20:25'),
(7, 5, 'jalan patimura nomor 5 ', 'Cash', 17, 1, '2021-05-28 05:11:40', '2021-05-28 05:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `bookingstatus`
--

CREATE TABLE `bookingstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingstatus`
--

INSERT INTO `bookingstatus` (`id`, `status`) VALUES
(1, 'On Progress'),
(2, 'Success'),
(3, 'Canceled/Failed'),
(4, 'Waiting for confirmation'),
(5, 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryValue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryValue`) VALUES
(1, 'Choose...'),
(2, 'Chef'),
(3, 'Electronic Service'),
(4, 'House Keeper');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `locationValue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `locationValue`) VALUES
(1, 'Choose...'),
(2, 'Jakarta Barat'),
(3, 'Jakarta Timur'),
(4, 'Jakarta Utara'),
(5, 'Jakarta Selatan'),
(6, 'Jakarta Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1621704739, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewId` int(11) NOT NULL,
  `reviewRate` int(11) NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `serviceId` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewId`, `reviewRate`, `userId`, `serviceId`, `comment`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 14, 'pelayanan kurang memuaskan', NULL, NULL),
(3, 4, 2, 1, 'mantap', NULL, NULL),
(6, 5, 2, 1, 'wowowkfwofwk enak', '2021-05-27 10:00:30', '2021-05-27 10:00:30'),
(8, 6, 17, 1, 'enak bangett', '2021-05-28 05:27:19', '2021-05-28 05:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviewrate`
--

CREATE TABLE `reviewrate` (
  `rateId` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewrate`
--

INSERT INTO `reviewrate` (`rateId`, `rate`) VALUES
(1, 0),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `description` text NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `serviceStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `category`, `location`, `price`, `created_at`, `updated_at`, `description`, `userId`, `serviceStatus`) VALUES
(1, 2, 2, 200000, '0000-00-00 00:00:00', '2021-05-27 06:45:12', 'Di sini, saya akan menyediakan menu makanan berupa:\r\n-salad\r\n-bebek peking\r\n- ice cream', 1, 0),
(14, 4, 5, 200000, '2021-05-25 10:35:15', '2021-05-27 10:23:32', 'tukang kebun', 2, 0),
(16, 2, 2, 500000, '2021-05-28 05:10:55', '2021-05-28 05:10:55', 'saya adalah mantan master chef 2016. saya dapat membawakan anda menu-menu nusantara seperti rendang, sate dan lontong sayur.', 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'profile.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `name`, `slug`, `dob`, `gender`, `address`, `picture`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fernando.chai112@gmail.com', 'fernando', 'atong ganteng', 'atong-ganteng', '2021-05-01', 'Male', 'bumi', '1621839277_05995e09d4cee1c4ad00.jpg', '$2y$10$iQRtCbwTbluz/h1oetaIf.9od11woilba1aKhJOzW6Mp4D.qPJsxO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-22 13:59:28', '2021-05-25 02:37:20', NULL),
(2, 'fchai69@gmail.com', 'nana', 'nano', 'nano', '2021-05-08', 'Male', 'sukarta', 'profile.png', '$2y$10$tFy5OfABiKjJA2Rg/9XzQul3DVKEPTen44IMOS0lfe4gz0IChQ33G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-23 05:43:42', '2021-05-23 14:11:48', NULL),
(17, 'fernando.chai76@gmail.com', 'ahae', 'ace', 'ace', '2007-06-13', 'Male', 'jalan patimura nomor 5 ', '1622196600_e61f6d2ae01ee07671e5.jpg', '$2y$10$3NFtW7za.5rNGAUpjcSWMO1GF4IqiAbdxMOTLCRmn.I5zw73Sq28y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-28 05:08:32', '2021-05-28 05:10:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `serviceId` (`serviceId`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `serviceId` (`serviceId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `reviewRate` (`reviewRate`);

--
-- Indexes for table `reviewrate`
--
ALTER TABLE `reviewrate`
  ADD PRIMARY KEY (`rateId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `category` (`category`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviewrate`
--
ALTER TABLE `reviewrate`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`serviceId`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`status`) REFERENCES `bookingstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`serviceId`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`reviewRate`) REFERENCES `reviewrate` (`rateId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_3` FOREIGN KEY (`location`) REFERENCES `location` (`locationId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
