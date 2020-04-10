-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 04:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `departmental_lv`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_bill` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cus_name`, `cus_email`, `cus_products`, `cus_bill`, `created_at`, `updated_at`) VALUES
(1, 'Mohit Roy', 'mohit@gmail.com', 'Lux Soap 1 pack, Tata Salt 1L', '135.00', '2020-03-31 03:16:30', '2020-03-31 03:16:30'),
(2, 'Rohit Kumar', 'rohit@gmail.com', 'Aashirvaad Atta 10Kg', '490.00', '2020-03-31 05:00:52', '2020-03-31 05:00:52'),
(3, 'Vishal Kumar', 'vishalK@gmail.com', 'Rexona Soap 1 pack', '95.00', '2020-03-31 06:29:25', '2020-03-31 06:43:53'),
(5, 'Sumit Garg', 'sumit@gmail.com', 'Nirma Salt 1Kg', '21.00', '2020-03-31 09:18:21', '2020-03-31 09:18:21'),
(6, 'Nikhil Kumar', 'nikhil@gmail.com', 'Saffola Gold 1L', '110.00', '2020-03-31 09:19:20', '2020-03-31 09:19:20'),
(7, 'Anuj Verma', 'anuj@gmail.com', 'Aashirvaad Atta 5Kg', '280.00', '2020-03-31 09:20:14', '2020-03-31 09:20:14'),
(8, 'Akhil Gupta', 'akhil@gmail.com', 'Tata Salt 1L', '25.00', '2020-03-31 09:21:05', '2020-03-31 09:21:05'),
(10, 'Manoj Tiwary', 'manoj@gmail.com', 'India Gate Basmati Rice 5Kg', '250.00', '2020-03-31 10:03:19', '2020-03-31 10:03:19'),
(11, 'Arun Goyal', 'arun@gmail.com', 'Dalda Oil 1L', '95.00', '2020-03-31 10:04:29', '2020-03-31 10:04:29'),
(12, 'Vicky Kumar', 'vicky@gmail.com', 'Dawat Basmati Rice 5Kg', '230.00', '2020-03-31 10:05:16', '2020-03-31 10:05:16');

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
(4, '2020_03_26_045254_create_products_table', 1),
(5, '2020_03_31_075022_create_customers', 2),
(6, '2020_03_31_080602_create_customers', 3);

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
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(1) NOT NULL,
  `product` varchar(255) NOT NULL,
  `umber` varchar(25) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `product`, `umber`, `Price`) VALUES
(2, 'bb Royal', 'Wheat Flour', 80),
(3, 'Fortune', 'Oil', 560),
(10, 'bb Royal', 'Wheat Flour', 80);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_name`, `company_name`, `product_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Wheat', 'Aashirvaad', 'Aashirvaad aata 10Kg', '495.00', '2020-03-26 01:35:29', '2020-04-06 01:46:43'),
(2, 'Wheat', 'Aashirvaad', 'Aashirvaad aata 5Kg', '280.00', '2020-03-26 05:38:31', '2020-03-26 05:38:31'),
(5, 'Salt', 'Nirma', 'Nirma Salt 1Kg', '21.00', '2020-03-26 05:42:44', '2020-03-26 05:43:03'),
(6, 'Salt', 'Tata', 'Tata Salt 1Kg', '25.00', '2020-03-26 05:47:04', '2020-03-26 05:47:04'),
(7, 'Oil', 'Saffola', 'Saffola Gold 1L', '110.00', '2020-03-26 05:48:35', '2020-03-26 05:48:35'),
(8, 'Oil', 'Dalda', 'Dalda Oil 1L', '95.00', '2020-03-26 05:49:06', '2020-03-26 05:49:06'),
(9, 'Soap', 'Lux', 'Lux Soap 1 pack', '110.00', '2020-03-30 23:50:04', '2020-03-30 23:50:04'),
(10, 'Soap', 'Rexona', 'Rexona Soap 1 pack', '95.00', '2020-03-31 00:19:56', '2020-03-31 00:19:56'),
(12, 'Rice', 'India Gate', 'India Gate Basmati Rice 5Kg', '250.00', '2020-03-31 10:01:21', '2020-03-31 10:01:21'),
(13, 'Rice', 'Dawat', 'Dawat Basmati Rice 5Kg', '230.00', '2020-03-31 10:02:21', '2020-03-31 10:02:21');

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
(34, 'Yash', 'yashdigwal777@gmail.com', NULL, '$2y$10$ISwaDtFbkKGGbv3nPKvnceyYMeqliwGEDbWLTGaAdf8UDPO5ov.se', NULL, '2020-04-10 08:47:47', '2020-04-10 08:47:47'),
(35, 'Yash Digwal', 'yashdigwal66@gmail.com', NULL, '$2y$10$icStZwEtIER50T6O3i5pNei6UAXcRnZLRh.mDOKaO1M2/X4fHYIjK', NULL, '2020-04-10 08:49:16', '2020-04-10 08:49:16'),
(36, 'Yash Digwal', 'suraj456@gmail.com', NULL, '$2y$10$L9gQGGG6ejx/XuPBSJYXZudEhJRzM00N3ESaqL0nl6V2jc2ZuCgme', NULL, '2020-04-10 08:51:38', '2020-04-10 08:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
