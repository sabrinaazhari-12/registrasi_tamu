-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 04:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `tanggal`, `asal`, `tujuan`, `email`, `no_hp`) VALUES
(1, 'sabrina', '2024-08-29', 'padangpanjang', 'bbbbbbbbbbbb', 'sabrina@gmail.com', 2147483647),
(2, 'attaqiyya', '2024-08-29', 'jakarta', 'lllllllll', 'attaqqiya@gmail.com', 9999),
(3, 'dirga', '2024-08-29', 'padang', 'bbbbbbbbbbbb', 'dirga@gmail.com', 55555),
(4, 'syifa', '2024-08-30', 'Padang Panjang, Sumatera Barat', 'ppppp', 'syifa@gmail.com', 3333333),
(5, 'rio', '2024-09-04', 'solok', 'ssssss', 'rio@gmail.com', 22222),
(6, 'syifa', '2024-09-11', 'papua', 'penelitian', 'syifa@gmail.com', 3333),
(7, 'sabrina', '2024-09-03', 'padang', 'ppppp', 'sabrina@gmail.com', 11111),
(8, 'khalisa', '2024-09-06', 'padang', 'ppppp', 'sabrina@gmail.com', 222222),
(9, 'sarah', '2024-09-06', 'bukittinggi', 'bbbbbbbbbbbb', 'sarah@gmail.com', 44444);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Aplikasi', 'admin@admin.com', NULL, '$2y$10$9d1piNW2cmlowl1SqvrtIemT.XkBxiwz4qOF9F/ywhiM5uX0nQgE6', 'zapw1XoottWPWTHRGrWhjTi16Tpm2yRwXHBYQvU6E35sRvCixfcGmPBvgFEa', '2024-09-03 07:20:56', '2024-09-03 07:20:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
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
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
