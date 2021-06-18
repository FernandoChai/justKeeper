-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:22 PM
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
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '3a7255f8b7362df15e73c051dc49d28a', '2021-05-28 05:08:49'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '448321ef8bf14c9b92ced8664b60e700', '2021-06-10 08:45:13'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', '52a1c7ce921cc4454467266595c687ff', '2021-06-16 08:41:56'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', '31361043827b87c05fd564e4b0499290', '2021-06-16 09:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

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

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 20),
(2, 1),
(2, 2),
(2, 18);

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
(60, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-28 05:13:05', 1),
(61, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-31 09:59:31', 1),
(62, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-31 10:04:00', 1),
(63, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-31 10:05:35', 1),
(64, '::1', 'fernando.chai76@gmail.com', NULL, '2021-05-31 10:34:46', 0),
(65, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-31 10:35:01', 1),
(66, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-31 10:35:45', 1),
(67, '::1', 'fernando.chai76@gmail.com', NULL, '2021-05-31 10:59:13', 0),
(68, '::1', 'fchai69@gmail.com', 2, '2021-05-31 10:59:27', 1),
(69, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-31 11:00:24', 1),
(70, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-31 11:02:17', 1),
(71, '::1', 'fchai69@gmail.com', 2, '2021-05-31 11:02:40', 1),
(72, '::1', 'fernando.chai76@gmail.com', 17, '2021-05-31 11:02:59', 1),
(73, '::1', 'fernando.chai112@gmail.com', 1, '2021-05-31 11:03:16', 1),
(74, '::1', 'fchai69@gmail.com', 2, '2021-05-31 11:03:49', 1),
(75, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-05 05:39:40', 1),
(76, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-05 05:48:23', 1),
(77, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-05 05:48:35', 1),
(78, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-05 05:48:50', 1),
(79, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-05 05:49:21', 1),
(80, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 08:44:55', 0),
(81, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 08:45:31', 1),
(82, '::1', 'fchai69@gmail.com', NULL, '2021-06-10 08:47:54', 0),
(83, '::1', 'fchai69@gmail.com', 2, '2021-06-10 08:47:59', 1),
(84, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 08:48:24', 1),
(85, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-10 08:53:05', 0),
(86, '::1', 'fchai69@gmail.com', 2, '2021-06-10 08:53:12', 1),
(87, '::1', 'fchai69@gmail.com', NULL, '2021-06-10 08:53:37', 0),
(88, '::1', 'fchai69@gmail.com', 2, '2021-06-10 08:53:42', 1),
(89, '::1', 'fchai69@gmail.com', 2, '2021-06-10 08:56:09', 1),
(90, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 08:56:26', 1),
(91, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 08:59:53', 1),
(92, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 09:03:19', 1),
(93, '::1', 'fchai69@gmail.com', 2, '2021-06-10 13:18:59', 1),
(94, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-10 13:19:29', 0),
(95, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-10 13:19:34', 0),
(96, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 13:19:39', 1),
(97, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-10 13:20:09', 1),
(98, '::1', 'fchai69@gmail.com', 2, '2021-06-10 13:20:22', 1),
(99, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-10 13:20:37', 0),
(100, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 13:20:41', 1),
(101, '::1', 'fchai69@gmail.com', 2, '2021-06-10 13:21:20', 1),
(102, '::1', 'fchai69@gmail.com', 2, '2021-06-10 13:22:14', 1),
(103, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-10 13:22:28', 1),
(104, '::1', 'fchai69@gmail.com', 2, '2021-06-11 07:13:58', 1),
(105, '::1', 'fchai69@gmail.com', 2, '2021-06-11 07:14:00', 1),
(106, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 07:20:31', 1),
(107, '::1', 'fchai69@gmail.com', 2, '2021-06-11 07:20:59', 1),
(108, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-11 07:21:09', 1),
(109, '::1', 'fchai69@gmail.com', 2, '2021-06-11 07:21:30', 1),
(110, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-11 07:23:13', 0),
(111, '::1', 'fchai69@gmail.com', 2, '2021-06-11 07:23:19', 1),
(112, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 07:23:35', 1),
(113, '::1', 'fchai69@gmail.com', NULL, '2021-06-11 07:28:43', 0),
(114, '::1', 'fchai69@gmail.com', 2, '2021-06-11 07:28:48', 1),
(115, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-11 10:17:15', 0),
(116, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 10:17:27', 1),
(117, '::1', 'fchai69@gmail.com', 2, '2021-06-11 10:17:35', 1),
(118, '::1', 'fchai69@gmail.com', 2, '2021-06-11 10:18:41', 1),
(119, '::1', 'fchai69@gmail.com', NULL, '2021-06-11 10:19:11', 0),
(120, '::1', 'fchai69@gmail.com', 2, '2021-06-11 10:19:17', 1),
(121, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 10:27:13', 1),
(122, '::1', 'fchai69@gmail.com', 2, '2021-06-11 10:27:41', 1),
(123, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 10:27:57', 1),
(124, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-11 11:31:16', 0),
(125, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-11 11:31:23', 1),
(126, '::1', 'fchai69@gmail.com', 2, '2021-06-11 11:31:44', 1),
(127, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-11 11:31:57', 1),
(128, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 13:10:40', 1),
(129, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-11 13:11:00', 1),
(130, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-11 13:11:28', 1),
(131, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-13 04:06:44', 1),
(132, '::1', 'fchai69@gmail.com', 2, '2021-06-15 09:14:52', 1),
(133, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:02:03', 1),
(134, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-15 14:02:16', 0),
(135, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-15 14:02:21', 1),
(136, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-15 14:02:31', 1),
(137, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:03:00', 1),
(138, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-15 14:12:26', 0),
(139, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-15 14:12:31', 1),
(140, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:12:42', 1),
(141, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-15 14:21:50', 0),
(142, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-15 14:21:57', 1),
(143, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:22:11', 1),
(144, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-15 14:22:21', 1),
(145, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:22:39', 1),
(146, '::1', 'fchai69@gmail.com', NULL, '2021-06-15 14:23:10', 0),
(147, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:23:15', 1),
(148, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-15 14:24:18', 1),
(149, '::1', 'fchai69@gmail.com', 2, '2021-06-15 14:25:14', 1),
(150, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-15 14:25:40', 1),
(151, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-16 06:56:57', 0),
(152, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-16 06:57:02', 1),
(153, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-16 06:58:44', 0),
(154, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-16 06:58:49', 1),
(155, '::1', 'instagramfernando1@gmail.com', 19, '2021-06-16 08:42:11', 1),
(156, '::1', 'fchai69@gmail.com', 2, '2021-06-16 08:42:53', 1),
(157, '::1', 'instagramfernando1@gmail.com', 19, '2021-06-16 08:46:07', 1),
(158, '::1', 'fchai69@gmail.com', NULL, '2021-06-16 08:49:33', 0),
(159, '::1', 'fchai69@gmail.com', 2, '2021-06-16 08:49:38', 1),
(160, '::1', 'fchai69@gmail.com', 2, '2021-06-16 08:50:04', 1),
(161, '::1', 'instagramfernando1@gmail.com', 19, '2021-06-16 08:50:36', 1),
(162, '::1', 'fchai69@gmail.com', NULL, '2021-06-16 09:18:22', 0),
(163, '::1', 'fchai69@gmail.com', 2, '2021-06-16 09:18:27', 1),
(164, '::1', 'instagramfernando1@gmail.com', NULL, '2021-06-16 09:18:48', 0),
(165, '::1', 'instagramfernando1@gmail.com', NULL, '2021-06-16 09:19:00', 0),
(166, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 09:22:55', 1),
(167, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-16 09:29:23', 1),
(168, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 09:33:41', 1),
(169, '::1', 'fchai69@gmail.com', NULL, '2021-06-16 09:36:46', 0),
(170, '::1', 'fchai69@gmail.com', 2, '2021-06-16 09:36:52', 1),
(171, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 09:37:21', 1),
(172, '::1', 'instagramfernando1@gmail.com', NULL, '2021-06-16 10:57:37', 0),
(173, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 10:57:43', 1),
(174, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 11:01:34', 1),
(175, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-16 11:13:16', 1),
(176, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 11:13:37', 1),
(177, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 11:32:16', 1),
(178, '::1', 'fchai69@gmail.com', 2, '2021-06-16 11:33:47', 1),
(179, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 11:36:52', 1),
(180, '::1', 'fchai69@gmail.com', 2, '2021-06-16 11:41:37', 1),
(181, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 11:47:03', 1),
(182, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 12:08:06', 1),
(183, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 12:17:19', 1),
(184, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 12:17:47', 1),
(185, '::1', 'fchai69@gmail.com', 2, '2021-06-16 12:19:54', 1),
(186, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 12:20:07', 1),
(187, '::1', 'fchai69@gmail.com', 2, '2021-06-16 12:22:58', 1),
(188, '::1', 'fchai69@gmail.com', 2, '2021-06-16 12:23:15', 1),
(189, '::1', 'fchai69@gmail.com', 2, '2021-06-16 12:26:19', 1),
(190, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 12:27:13', 1),
(191, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 13:36:23', 1),
(192, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 13:37:08', 1),
(193, '::1', 'fchai69@gmail.com', NULL, '2021-06-16 13:41:10', 0),
(194, '::1', 'fchai69@gmail.com', 2, '2021-06-16 13:41:15', 1),
(195, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 13:41:26', 1),
(196, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-16 13:58:07', 1),
(197, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-16 13:58:34', 1),
(198, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 01:46:14', 1),
(199, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 02:26:51', 0),
(200, '::1', 'fchai69@gmail.com', 2, '2021-06-17 02:26:55', 1),
(201, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 02:29:29', 1),
(202, '::1', 'fchai69@gmail.com', 2, '2021-06-17 02:30:59', 1),
(203, '::1', 'instagramfernando1@gmail.com', NULL, '2021-06-17 02:33:12', 0),
(204, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 02:33:17', 1),
(205, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 03:23:58', 0),
(206, '::1', 'fchai69@gmail.com', 2, '2021-06-17 03:24:03', 1),
(207, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-17 03:28:19', 1),
(208, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-17 03:31:56', 1),
(209, '::1', 'fchai69@gmail.com', 2, '2021-06-17 03:34:43', 1),
(210, '::1', 'fchai69@gmail.com', 2, '2021-06-17 03:36:23', 1),
(211, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-17 03:36:34', 1),
(212, '::1', 'fchai69@gmail.com', 2, '2021-06-17 03:38:12', 1),
(213, '::1', 'fernando chai', NULL, '2021-06-17 03:40:22', 0),
(214, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 03:40:26', 1),
(215, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 03:49:50', 0),
(216, '::1', 'fchai69@gmail.com', 2, '2021-06-17 03:49:55', 1),
(217, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-17 03:50:23', 1),
(218, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 03:50:40', 1),
(219, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 08:25:30', 1),
(220, '::1', 'fchai69@gmail.com', 2, '2021-06-17 08:30:17', 1),
(221, '::1', 'fchai69@gmail.com', 2, '2021-06-17 08:31:30', 1),
(222, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 08:32:32', 1),
(223, '::1', 'fchai69@gmail.com', 2, '2021-06-17 11:12:11', 1),
(224, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 11:12:23', 1),
(225, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 11:17:18', 1),
(226, '::1', 'fchai69@gmail.com', 2, '2021-06-17 12:33:22', 1),
(227, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 12:34:06', 1),
(228, '::1', 'fchai69@gmail.com', 2, '2021-06-17 12:37:25', 1),
(229, '::1', 'fernando chai', NULL, '2021-06-17 12:42:24', 0),
(230, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 12:42:29', 1),
(231, '::1', 'fchai69@gmail.com', 2, '2021-06-17 12:46:13', 1),
(232, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 12:47:07', 1),
(233, '::1', 'fchai69@gmail.com', 2, '2021-06-17 12:47:36', 1),
(234, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 13:02:26', 1),
(235, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 13:07:53', 0),
(236, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:07:57', 1),
(237, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 13:09:09', 1),
(238, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 13:11:41', 0),
(239, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:11:46', 1),
(240, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 13:13:47', 1),
(241, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:14:41', 1),
(242, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 13:15:15', 1),
(243, '::1', 'fernando.chai112@gmail.com', NULL, '2021-06-17 13:19:49', 0),
(244, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-17 13:19:56', 1),
(245, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:26:09', 1),
(246, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-17 13:45:55', 1),
(247, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:49:02', 1),
(248, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 13:53:00', 0),
(249, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:53:05', 1),
(250, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 13:57:11', 0),
(251, '::1', 'fchai69@gmail.com', NULL, '2021-06-17 13:57:16', 0),
(252, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:57:22', 1),
(253, '::1', 'fchai69@gmail.com', 2, '2021-06-17 13:59:26', 1),
(254, '::1', 'instagramfernando1@gmail.com', NULL, '2021-06-17 13:59:45', 0),
(255, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 13:59:51', 1),
(256, '::1', 'fchai69@gmail.com', 2, '2021-06-17 14:00:05', 1),
(257, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-17 14:05:16', 1),
(258, '::1', 'fchai69@gmail.com', 2, '2021-06-17 14:05:32', 1),
(259, '::1', 'fchai69@gmail.com', 2, '2021-06-18 05:28:08', 1),
(260, '::1', 'fchai69@gmail.com', 2, '2021-06-18 05:30:30', 1),
(261, '::1', 'fchai69@gmail.com', 2, '2021-06-18 06:14:53', 1),
(262, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-18 06:34:55', 1),
(263, '::1', 'fchai69@gmail.com', 2, '2021-06-18 06:59:30', 1),
(264, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-18 07:00:06', 1),
(265, '::1', 'fchai69@gmail.com', 2, '2021-06-18 07:03:42', 1),
(266, '::1', 'fernando.chai76@gmail.com', NULL, '2021-06-18 07:03:54', 0),
(267, '::1', 'fernando.chai76@gmail.com', 18, '2021-06-18 07:03:59', 1),
(268, '::1', 'fernando.chai112@gmail.com', 1, '2021-06-18 07:04:11', 1),
(269, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-18 07:04:27', 1),
(270, '::1', 'fchai69@gmail.com', 2, '2021-06-18 07:04:51', 1),
(271, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-18 07:10:50', 1),
(272, '::1', 'instagramfernando1@gmail.com', 20, '2021-06-18 07:16:15', 1),
(273, '::1', 'fchai69@gmail.com', 2, '2021-06-18 07:21:14', 1);

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
(1, 'fernando.chai76@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2a7c662a3cef3ad8feedc038c12b7e1e', '2021-05-26 01:29:08'),
(2, 'fernando.chai76@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '4c572f2e4ee162f2add912dc31d16a1c', '2021-06-10 08:59:47');

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
(21, 5, 'jalan suka maju', 'Cash', 18, 17, '2021-06-11 13:10:51', '2021-06-11 13:11:37'),
(22, 5, 'jalan kebon jeruk nomor 5', 'Cash', 2, 20, '2021-06-15 14:01:32', '2021-06-15 14:22:52'),
(23, 5, 'tarumanegara', 'Cash', 2, 17, '2021-06-15 14:12:18', '2021-06-15 14:23:26'),
(27, 5, 'jalan manggis no 5', 'Cash', 2, 20, '2021-06-17 03:35:53', '2021-06-17 03:39:08'),
(28, 5, 'jalan kebon jeruk gang kecil nomor 3', 'Cash', 2, 20, '2021-06-17 13:45:34', '2021-06-17 13:51:13'),
(29, 1, 'jalan merpati gang manggis nomor 5 rt 9/rw 12', 'Cash', 2, 17, '2021-06-18 06:59:58', '2021-06-18 07:04:18');

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
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `filterId` int(11) NOT NULL,
  `filterName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`filterId`, `filterName`) VALUES
(1, 'Newly'),
(2, 'Cheap to expensive'),
(3, 'Expensive to cheap');

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
(16, 3, 18, 17, 'kurang memuaskan', '2021-06-11 13:11:37', '2021-06-11 13:11:37'),
(17, 5, 2, 20, 'sangat menarik ', '2021-06-15 14:22:52', '2021-06-15 14:22:52'),
(18, 6, 2, 17, 'wow sangat enak sekali', '2021-06-15 14:23:26', '2021-06-15 14:23:26'),
(21, 6, 2, 20, 'Wow Mantap jiwa', '2021-06-17 03:39:08', '2021-06-17 03:39:08'),
(22, 3, 2, 20, 'saya kecewa, pelayanan yang diberikan kurang ramah', '2021-06-17 13:51:13', '2021-06-17 13:51:13');

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
(17, 2, 2, 6000000, '2021-06-05 06:08:41', '2021-06-17 03:31:23', 'Saya merupakan finalis master chef s6. Di sini, saya akan membawakan beberapa menu makanan berupa:\r\n- Fruid salad\r\n- Lontong sayur\r\n- Wine\r\n- Wagyu A5 premium', 1, 1),
(20, 2, 2, 5500000, '2021-06-13 10:00:02', '2021-06-17 03:34:28', 'Saya lulusan Le Cordon Bleu sebagai seorang chef profesional. Saya akan membawakan beberapa menu makanan seperti:\r\n- Banana cake\r\n- Pudding jelly\r\n- Special ramen\r\n- Dim Sum\r\n- Tom Yum', 18, 1),
(23, 2, 2, 50000000, '2021-06-18 06:20:14', '2021-06-18 06:20:44', 'saya adalah seorang chef yang mahir dalam membuat aneka menu makanan nusantara. Berikut merupakan beberapa makanan yang akan saya sajikan kepada anda: - tahu mercon -rujak cingur - es nona - rendang - pudding - soto babat', 2, 1);

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
(1, 'fernando.chai112@gmail.com', 'fernando', 'Fernando Mandoroso', 'fernando-mandoroso', '2021-05-01', 'Male', 'Jalan mt haryono no 44', '1623954354_04aa26d80587616bf236.jpg', '$2y$10$iQRtCbwTbluz/h1oetaIf.9od11woilba1aKhJOzW6Mp4D.qPJsxO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-22 13:59:28', '2021-06-17 13:25:54', NULL),
(2, 'fchai69@gmail.com', 'nane', 'nano nano', 'nano-nano', '2021-05-08', 'Female', 'sukarta', 'profile.png', '$2y$10$tFy5OfABiKjJA2Rg/9XzQul3DVKEPTen44IMOS0lfe4gz0IChQ33G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-23 05:43:42', '2021-06-16 11:42:53', NULL),
(18, 'fernando.chai76@gmail.com', 'aceng', 'ace', 'ace', '2021-06-16', 'Male', 'jalan patimura nomor 5 ', '1623333514_344d378f7eaa82c778fc.jpg', '$2y$10$wqkQMEgMBetQ5CCse1tpsenY0jqV9Zxi6ow95PfKvPrKi9rbqh6.y', NULL, '2021-06-10 08:59:48', NULL, NULL, NULL, NULL, 1, 0, '2021-06-10 08:44:41', '2021-06-10 08:59:48', NULL),
(20, 'instagramfernando1@gmail.com', 'Fernando Chai', 'Fernando Chai', 'fernando-chai', '2021-06-17', 'Male', 'Jalan ponogoro nomor 77', '1623948010_d465dc73e8d194bd439d.jpg', '$2y$10$BsOQLIFDJRBNCtvxKKqJHOiCncLEevavlsr1qTrpAUCKP8j5hDr8K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-16 09:22:29', '2021-06-17 12:36:10', NULL);

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
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`filterId`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `filterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviewrate`
--
ALTER TABLE `reviewrate`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
