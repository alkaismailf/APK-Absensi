-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 03:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_15_161042_create_tb_karyawan_table', 1),
(5, '2021_07_17_111817_create_tb_absensi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absen` int(10) UNSIGNED NOT NULL,
  `nip` bigint(20) UNSIGNED NOT NULL,
  `tgl_absensi` date NOT NULL,
  `hadir` tinyint(1) NOT NULL,
  `sakit` tinyint(1) NOT NULL,
  `izin` tinyint(1) NOT NULL,
  `alpa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absen`, `nip`, `tgl_absensi`, `hadir`, `sakit`, `izin`, `alpa`, `created_at`, `updated_at`) VALUES
(1, 12010041, '2021-06-03', 1, 0, 0, 0, NULL, NULL),
(2, 12010041, '2021-06-04', 1, 0, 0, 0, NULL, NULL),
(3, 12010041, '2021-06-07', 0, 0, 0, 1, NULL, NULL),
(4, 12010041, '2021-06-08', 0, 1, 0, 0, NULL, NULL),
(5, 12010041, '2021-06-09', 0, 1, 0, 0, NULL, NULL),
(6, 12010041, '2021-06-10', 1, 0, 0, 0, NULL, NULL),
(7, 12010041, '2021-06-11', 1, 0, 0, 0, NULL, NULL),
(8, 12010041, '2021-06-14', 1, 0, 0, 0, NULL, NULL),
(9, 12010041, '2021-06-15', 1, 0, 0, 0, NULL, NULL),
(10, 12010041, '2021-06-16', 0, 0, 1, 0, NULL, NULL),
(11, 12010041, '2021-06-17', 1, 0, 0, 0, NULL, NULL),
(12, 12010041, '2021-06-18', 1, 0, 0, 0, NULL, NULL),
(13, 12010041, '2021-06-21', 0, 0, 0, 1, NULL, NULL),
(14, 12010041, '2021-06-22', 1, 0, 0, 0, NULL, NULL),
(15, 12010041, '2021-06-23', 0, 0, 1, 0, NULL, NULL),
(16, 12010041, '2021-06-24', 0, 0, 1, 0, NULL, NULL),
(17, 12010041, '2021-06-25', 1, 0, 0, 0, NULL, NULL),
(18, 12010041, '2021-06-28', 1, 0, 0, 0, NULL, NULL),
(19, 12010041, '2021-06-29', 1, 0, 0, 0, NULL, NULL),
(20, 12010041, '2021-06-30', 1, 0, 0, 0, NULL, NULL),
(21, 12020042, '2021-06-03', 1, 0, 0, 0, NULL, NULL),
(22, 12020042, '2021-06-04', 1, 0, 0, 0, NULL, NULL),
(23, 12020042, '2021-06-07', 1, 0, 0, 0, NULL, NULL),
(24, 12020042, '2021-06-08', 1, 0, 0, 0, NULL, NULL),
(25, 12020042, '2021-06-09', 0, 1, 0, 0, NULL, NULL),
(26, 12020042, '2021-06-10', 0, 1, 0, 0, NULL, NULL),
(27, 12020042, '2021-06-11', 0, 1, 0, 0, NULL, NULL),
(28, 12020042, '2021-06-14', 0, 1, 0, 0, NULL, NULL),
(29, 12020042, '2021-06-15', 1, 0, 0, 0, NULL, NULL),
(30, 12020042, '2021-06-16', 1, 0, 0, 0, NULL, NULL),
(31, 12020042, '2021-06-17', 1, 0, 0, 0, NULL, NULL),
(32, 12020042, '2021-06-18', 1, 0, 0, 0, NULL, NULL),
(33, 12020042, '2021-06-21', 0, 0, 1, 0, NULL, NULL),
(34, 12020042, '2021-06-22', 1, 0, 0, 0, NULL, NULL),
(35, 12020042, '2021-06-23', 0, 0, 1, 0, NULL, NULL),
(36, 12020042, '2021-06-24', 0, 0, 1, 0, NULL, NULL),
(37, 12020042, '2021-06-25', 1, 0, 0, 0, NULL, NULL),
(38, 12020042, '2021-06-28', 1, 0, 0, 0, NULL, NULL),
(39, 12020042, '2021-06-29', 0, 0, 0, 1, NULL, NULL),
(40, 12020042, '2021-06-30', 1, 0, 0, 0, NULL, NULL),
(41, 13030052, '2021-06-03', 0, 0, 1, 0, NULL, NULL),
(42, 13030052, '2021-06-04', 0, 0, 1, 0, NULL, NULL),
(43, 13030052, '2021-06-07', 0, 0, 1, 0, NULL, NULL),
(44, 13030052, '2021-06-08', 1, 0, 0, 0, NULL, NULL),
(45, 13030052, '2021-06-09', 1, 0, 0, 0, NULL, NULL),
(46, 13030052, '2021-06-10', 1, 0, 0, 0, NULL, NULL),
(47, 13030052, '2021-06-11', 1, 0, 0, 0, NULL, NULL),
(48, 13030052, '2021-06-14', 1, 0, 0, 0, NULL, NULL),
(49, 13030052, '2021-06-15', 1, 0, 0, 0, NULL, NULL),
(50, 13030052, '2021-06-16', 1, 0, 0, 0, NULL, NULL),
(51, 13030052, '2021-06-17', 1, 0, 0, 0, NULL, NULL),
(52, 13030052, '2021-06-18', 0, 0, 0, 1, NULL, NULL),
(53, 13030052, '2021-06-21', 0, 1, 0, 0, NULL, NULL),
(54, 13030052, '2021-06-22', 0, 1, 0, 0, NULL, NULL),
(55, 13030052, '2021-06-23', 1, 0, 0, 0, NULL, NULL),
(56, 13030052, '2021-06-24', 1, 0, 0, 0, NULL, NULL),
(57, 13030052, '2021-06-25', 1, 0, 0, 0, NULL, NULL),
(58, 13030052, '2021-06-28', 1, 0, 0, 0, NULL, NULL),
(59, 13030052, '2021-06-29', 0, 0, 1, 0, NULL, NULL),
(60, 13030052, '2021-06-30', 0, 0, 1, 0, NULL, NULL),
(61, 13010051, '2021-11-18', 0, 1, 0, 0, '2021-11-18 06:45:03', '2021-11-18 06:45:03'),
(62, 13010050, '2021-11-18', 1, 0, 0, 0, '2021-11-18 06:47:39', '2021-11-18 06:47:39'),
(63, 12020042, '2021-11-18', 0, 0, 1, 0, '2021-11-18 06:54:21', '2021-11-18 06:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struktural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nip`, `nama_pegawai`, `fungsional`, `struktural`, `created_at`, `updated_at`) VALUES
(1, 12010041, 'Budi', 'Engineer', 'Manager', NULL, NULL),
(2, 12020042, 'Wati', 'Administrasi', 'Manager', NULL, NULL),
(3, 12020043, 'Iwan', 'Administrasi', 'Staff', NULL, NULL),
(4, 13020046, 'Yudi', 'Administrasi', 'Staff', NULL, NULL),
(5, 12010043, 'Ari', 'Engineer', 'Team Leader', NULL, NULL),
(6, 12010044, 'Susi', 'Engineer', 'Team Leader', NULL, NULL),
(7, 13010049, 'Ari', 'Engineer', 'Staff', NULL, NULL),
(8, 13010050, 'Medi', 'Engineer', 'Staff', NULL, NULL),
(9, 13010051, 'Susan', 'Engineer', 'Staff', NULL, NULL),
(10, 13030052, 'Andi', 'Support', 'Staff', NULL, NULL),
(11, 13010053, 'Hasan', 'Engineer', 'Staff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Andi', 'andi@gmail.com', '2021-07-20 02:07:35', '$2y$10$vYW/C1Dm15Ou7k/1g4PBeubYGzGY7EU.E2VJioZJOGytVK2fwJcV6', NULL, '2021-07-20 02:07:36', '2021-07-20 02:07:36');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `tb_absensi_nip_foreign` (`nip`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_karyawan_nip_unique` (`nip`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `tb_karyawan` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
