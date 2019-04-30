-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2019 pada 06.37
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sparepart_catalog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_machines`
--

CREATE TABLE `tb_machines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `placement_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_machines`
--

INSERT INTO `tb_machines` (`id`, `name`, `created_at`, `updated_at`, `placement_id`) VALUES
(7, 'Wolf', '2018-03-01 02:53:37', '2018-03-01 03:07:44', '7'),
(8, 'Umum Utility', '2018-03-01 02:54:01', '2018-03-01 02:54:01', '1'),
(9, 'Mesin Tambahan', '2018-03-01 03:07:26', '2018-03-01 03:07:26', '1'),
(16, 'Percobaan 1', NULL, NULL, '3'),
(17, 'Percobaan 2', NULL, NULL, '2'),
(18, 'Percobaan 3', NULL, NULL, '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_migrations`
--

CREATE TABLE `tb_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_migrations`
--

INSERT INTO `tb_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_14_043535_placement', 1),
(4, '2018_02_14_043549_machine', 1),
(5, '2018_02_14_043602_sparepart', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_password_resets`
--

CREATE TABLE `tb_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_placements`
--

CREATE TABLE `tb_placements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_placements`
--

INSERT INTO `tb_placements` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dairy - Utility', NULL, NULL),
(2, 'Dairy - Fillpack', NULL, NULL),
(3, 'Dairy - Proses', NULL, NULL),
(4, 'Dairy - All Workcenter', NULL, NULL),
(5, 'NS - Utility', NULL, NULL),
(6, 'NS - Fillpack', NULL, NULL),
(7, 'NS - Proses', NULL, NULL),
(8, 'NS - All Workcenter', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spareparts`
--

CREATE TABLE `tb_spareparts` (
  `id` int(10) UNSIGNED NOT NULL,
  `oracle_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_stock` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_spareparts`
--

INSERT INTO `tb_spareparts` (`id`, `oracle_number`, `name`, `min_stock`, `unit`, `price`, `image`, `machine_id`, `created_at`, `updated_at`) VALUES
(22, 'SP1000000', 'Barang Baru', '100', 'pcs', '9000', '1519181858.jpg', '4', '2018-02-20 19:57:38', '2018-02-21 00:20:05'),
(23, 'SP1000001', 'Barang test 1', '100', 'PCS', '1000', '1519274088.jpg', '1', '2018-02-21 21:34:48', '2018-02-21 21:34:48'),
(24, 'SP1000002', 'Semangka', '12', 'PCS', '2341', '1519274133.jpg', '5', '2018-02-21 21:35:33', '2018-02-21 21:35:33'),
(25, 'SP1000003', 'Rambutan', '19', 'pcs', '19028', '1519274156.jpg', '3', '2018-02-21 21:35:56', '2018-02-21 21:35:56'),
(26, 'SP1001234', 'Sparepart Paling Baru', '7', 'PCK', '5000', '1519899398.jpg', '26', '2018-03-01 03:16:38', '2018-03-01 03:18:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Muhammad Nashrulloh Mukti', 'rhulmukti@gmail.com', 'nashrullohmukti', '$2y$10$nWyK5QkhIeMbTZA20JUhWuwOPq0pjtieO7R6.KlvDbh6FgvzyYSoS', 'd2gqviOuZW2d72WDDgGbmM2zVCllSKByNpoJv255lL7qoFlaIuAXseqhATr1', '2018-02-13 21:51:01', '2018-02-13 21:51:01', 1),
(2, 'teknisi_cibitung', 'teknisi_cibitung@example.com', 'teknisi_cibitung', '$2y$10$jis1r8/A7cfhyGzHlYkHuOnMLFfv893J5LVRyHwyHLG3H1HGIsI7W', 'Lyko2CE5dBR6gmsOwCA0F6pGNlJuZ5Xkl1acWhnr4l4XCwhjWKAyBJRMEwJu', '2018-02-13 21:52:20', '2018-02-13 21:52:20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_machines`
--
ALTER TABLE `tb_machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_migrations`
--
ALTER TABLE `tb_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_password_resets`
--
ALTER TABLE `tb_password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_placements`
--
ALTER TABLE `tb_placements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_spareparts`
--
ALTER TABLE `tb_spareparts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `spareparts_oracle_number_unique` (`oracle_number`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_machines`
--
ALTER TABLE `tb_machines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_migrations`
--
ALTER TABLE `tb_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_placements`
--
ALTER TABLE `tb_placements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_spareparts`
--
ALTER TABLE `tb_spareparts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
