-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2012 at 04:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `break-out`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_menu` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Food', '2012-01-10 07:47:30', '2012-01-10 07:47:30'),
(2, 'Drink', '2012-01-10 07:47:35', '2012-01-10 07:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` enum('admin','owner','kasir','waiter','meja','koki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'owner', NULL, NULL),
(3, 'kasir', NULL, NULL),
(4, 'waiter', NULL, NULL),
(5, 'meja', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ready','sold out') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama`, `harga`, `kategori`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Egg with Noddleeeeee', 12000, 2, 'd90195f90b11f810a26871a7eb0dc4e8.jpg', 'sold out', '2012-01-10 07:34:15', '2012-01-13 20:31:45'),
(2, 'Strawberry Milk', 8000, 2, '6b2c7c466c27b7857eebd885f60eec5f.jpg', 'ready', '2012-01-10 07:34:42', '2012-01-10 07:34:42'),
(3, 'Original Waffle', 10000, 1, '9a4c6f2f999e97b0d31ceb5fcbeb3ccd.jpg', 'ready', '2012-01-10 07:35:20', '2012-01-10 07:35:20'),
(4, 'Oatmilk Original', 15000, 1, '9a69613ca8e5097b8d0fda2befd85752.jpg', 'sold out', '2012-01-10 07:35:46', '2012-01-10 07:35:46'),
(7, 'Coffee Latte', 8000, 2, '8757f5a1e5967c47471156f3a6d6c8dc.jpg', 'sold out', '2012-01-10 07:38:08', '2012-01-10 07:38:08'),
(8, 'Strawberry Pancake', 12000, 1, 'dbad50d5731290961ae15ebf342229a8.jpg', 'ready', '2012-01-10 07:39:06', '2012-01-10 07:39:06'),
(9, 'Original Milk', 8000, 2, '9883d92a3fc99784248831b378ba1cc1.jpg', 'sold out', '2012-01-10 07:39:36', '2012-01-10 07:39:36'),
(10, 'Rose Tea', 11000, 2, '69223dfa21c411db7ff68f6f5cd01f4e.jpg', 'ready', '2012-01-10 07:40:01', '2012-01-10 07:40:01'),
(11, 'Egg with Waffle', 13000, 1, 'f20fbf903538cb979e82ee048bfbbb8f.jpg', 'ready', '2012-01-10 07:40:23', '2012-01-10 07:40:23'),
(12, 'Egg Bacoon', 20000, 1, '991448f11c28d5b9743621cd728e6d30.jpg', 'ready', '2012-01-10 07:44:19', '2012-01-10 07:45:43');

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
(1, '2012_01_09_172029_create_levels_table', 1),
(2, '2012_01_09_172228_create_kategoris_table', 1),
(3, '2012_01_09_172258_create_menus_table', 1),
(4, '2012_01_09_172405_create_detail_orders_table', 1),
(5, '2012_01_09_172430_create_orders_table', 1),
(6, '2012_01_09_172451_create_transaksis_table', 1),
(7, '2012_01_11_063737_create_testis_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('dipesan','belum dibayar','dibayar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_meja`, `keterangan`, `status`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 07:53:19', '2012-01-12 07:55:14'),
(2, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 07:53:40', '2012-01-12 07:55:07'),
(3, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 07:54:04', '2012-01-12 08:10:47'),
(4, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 08:13:03', '2012-01-12 08:23:28'),
(5, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 08:24:32', '2012-01-12 09:15:39'),
(6, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 08:24:43', '2012-01-12 08:43:03'),
(7, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 08:24:54', '2012-01-12 09:15:55'),
(8, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 08:43:18', '2012-01-12 08:59:50'),
(9, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 09:16:29', '2012-01-12 09:16:55'),
(10, 12, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 09:20:57', '2012-01-12 09:24:12'),
(11, 9, 18, NULL, 'dibayar', '2012-01-12', '2012-01-12 09:24:36', '2012-01-12 09:27:20'),
(12, 18, 19, NULL, 'dibayar', '2012-01-13', '2012-01-13 09:46:53', '2012-01-13 10:32:44'),
(13, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 09:47:22', '2012-01-13 10:29:20'),
(14, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 09:47:30', '2012-01-13 10:32:31'),
(15, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 10:08:13', '2012-01-13 10:29:01'),
(16, 18, 18, NULL, 'belum dibayar', '2012-01-13', '2012-01-13 10:12:06', '2012-01-13 10:33:55'),
(17, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 10:18:49', '2012-01-13 13:19:03'),
(18, 9, 19, NULL, 'dibayar', '2012-01-13', '2012-01-13 10:28:21', '2012-01-13 13:18:46'),
(19, 18, 18, NULL, 'belum dibayar', '2012-01-13', '2012-01-13 11:06:01', '2012-01-13 13:23:24'),
(20, 9, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 12:41:47', '2012-01-13 13:33:29'),
(21, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 13:11:15', '2012-01-13 13:32:41'),
(22, 18, 18, NULL, 'belum dibayar', '2012-01-13', '2012-01-13 13:13:25', '2012-01-13 13:38:49'),
(23, 9, 18, NULL, 'belum dibayar', '2012-01-13', '2012-01-13 13:23:05', '2012-01-13 13:38:52'),
(24, 9, 19, NULL, 'dibayar', '2012-01-13', '2012-01-13 13:36:20', '2012-01-13 13:39:07'),
(25, 18, 18, NULL, 'belum dibayar', '2012-01-13', '2012-01-13 13:41:09', '2012-01-13 13:41:47'),
(26, 18, 18, NULL, 'belum dibayar', '2012-01-13', '2012-01-13 13:54:57', '2012-01-13 14:23:19'),
(27, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:22:21', '2012-01-13 14:26:32'),
(28, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:22:30', '2012-01-13 19:51:55'),
(29, 12, 19, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:23:50', '2012-01-13 14:25:25'),
(30, 18, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:28:55', '2012-01-13 19:51:42'),
(31, 12, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:29:40', '2012-01-13 14:38:58'),
(32, 12, 19, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:40:37', '2012-01-13 19:13:40'),
(33, 12, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:41:30', '2012-01-13 19:13:26'),
(34, 12, 18, NULL, 'dibayar', '2012-01-13', '2012-01-13 14:42:10', '2012-01-13 14:47:27'),
(35, 18, 18, NULL, 'dibayar', '2012-01-14', '2012-01-13 19:10:13', '2012-01-13 19:13:03'),
(36, 18, 18, NULL, 'dibayar', '2012-01-14', '2012-01-13 19:11:47', '2012-01-13 19:32:06'),
(37, 18, 18, NULL, 'dibayar', '2012-01-14', '2012-01-13 19:20:38', '2012-01-13 19:31:49'),
(38, 12, 19, NULL, 'dipesan', '2012-01-14', '2012-01-13 19:27:25', '2012-01-13 19:27:25'),
(39, 18, 18, NULL, 'dibayar', '2012-01-14', '2012-01-13 19:37:16', '2012-01-13 19:38:55'),
(40, 9, 18, NULL, 'dipesan', '2012-01-14', '2012-01-13 19:50:24', '2012-01-13 19:50:24'),
(41, 9, 18, NULL, 'belum dibayar', '2012-01-14', '2012-01-13 19:55:31', '2012-01-13 20:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `testis`
--

CREATE TABLE `testis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testis`
--

INSERT INTO `testis` (`id`, `nama`, `testi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alya Zenita', 'This restauran it\'s so interesting place', 'ditampilkan', '2012-01-10 23:51:47', '2012-01-10 23:51:47'),
(2, 'Syifa Shalsabilla', 'Hi, I\'m Syifa. I\'m very happy for having my breakfast here', 'ditampilkan', '2012-01-11 00:04:46', '2012-01-11 01:49:42'),
(9, 'Jhon Doe', 'Love this restaurant. So comfortable place', 'ditampilkan', '2012-01-11 01:02:14', '2012-01-11 01:49:48'),
(11, 'Dinar Maharanisyah', 'This restaurant it\'s very good place for spent our breakfast time', 'ditampilkan', '2012-01-11 02:49:50', '2012-01-11 12:47:10'),
(12, 'gery', 'enakkk ya guys', 'ditampilkan', '2012-01-12 07:51:09', '2012-01-13 13:36:52'),
(15, 'Alya zenita', 'hem apaya', 'dikirim', '2012-01-13 14:22:55', '2012-01-13 14:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` enum('pending','dimasak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Admin', 'admin@gmail.com', '$2y$10$CKwLu6OQvIn/gQjg2mPCKOuOnqyo3T7.ICKSFma.uerofZQSpVUyy', 1, 'OHv4P84bzp7RtPU28TwKmkEc8vX9YWhZryZSBWcPk94BdJi9cBOFKBnJS09b', '2012-01-09 10:24:02', '2012-01-09 10:24:02'),
(10, 'Owner', 'owner@gmail.com', '$2y$10$45rEb5J8zSDG7lzyu1PX.e0Uo8mxD.LUBo989Yg1SzgjJJIZToFQG', 2, 'mkRKN2DzRcybtxo9damIwX7806HlqYPsEPN7wfxWQfM28WGPPGPTRNdbUA9r', '2012-01-09 10:25:02', '2012-01-09 10:25:02'),
(11, 'Kasir', 'kasir@gmail.com', '$2y$10$1qEf544.h2.wK.8ZrlEYhuTvZdGHItLMXYlHFYNLiluYmS76bUWRa', 3, 'uaQjr1WBU48YOnjjijNyjovX67HzbXhMUMcyMnoTUiIaE2BIWazs5fiLAOTy', '2012-01-09 10:29:34', '2012-01-09 10:29:44'),
(12, 'Waiter', 'waiter@gmail.com', '$2y$10$8aRROK4OlUQt0q2rVfx9Xet.XD/Mxzz0B2thYJmNtR3mAGOi9Nbd2', 4, 'lwPyrEVl8P8gKVmo4hbgwpgFVAfTxHFa2kvyPAIVNLxnxVuFnhxNDUDQWGka', '2012-01-09 10:30:06', '2012-01-09 10:30:06'),
(18, 'Table 1', 'meja@gmail.com', '$2y$10$xQZlTjV2cfGyvDzLOhosQuy8e.xrKOEk2T6EuDA/M8WL6BEsc1IvG', 5, 'TuWDTtvMotlye7XazS5cnGKgYHYpSoeXoQAih4pJitwlyEIoi6J18bK7I5GC', '2012-01-09 10:56:06', '2012-01-09 10:56:06'),
(19, 'Table 2', 'meja2@gmail.com', '$2y$10$nQIRyhwz.u1cimxUIoF6l.PoUs24kzYC5MFf.mZW56qaouLraMsPO', 5, NULL, '2012-01-11 14:24:09', '2012-01-11 14:28:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `testis`
--
ALTER TABLE `testis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `testis`
--
ALTER TABLE `testis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
