-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2019 pada 06.36
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rhulmukti@gmail.com', '$2y$10$OL0WTloJgNBHYxJ8pv9aBOQyJ3R8OQcAoj2/IoRisVAXn9.ZKFGEq', '2017-02-22 18:35:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `noisbn` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_pokok` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `ppn` int(3) DEFAULT NULL,
  `diskon` int(3) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `noisbn`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `ppn`, `diskon`, `gambar`) VALUES
(1, 'Prediksi UN matematika untuk SMK, kelompok teknologi, kesehatan, dan pertanian', '978-602-70855-4-1', 'Abdul Malik', 'Abda Publisher', 2014, 40, 50000, 55000, 10, 0, 'smkn.jpg'),
(3, 'Konsep matematika dasar', '978-979-8559-65-5', 'Dian Kusmaharti, Susi Hermin Rusminati, Via Yustitia', 'Adi Buana University Press (Universitas PGRI Adi Buana Surabaya)', 2016, 150, 60000, 66000, 10, 0, NULL),
(4, 'Bahasa Indonesia', '978-602-74435-2-1', 'Muhammad Nashrulloh', 'Abda Publisher', 2014, 885, 100000, 110000, 10, 0, 'none.jpg'),
(5, 'IPS', '987-135-16473-1-1', 'Mukti', 'Adi Buana University Press (Universitas PGRI Adi Buana Surabaya)', 2017, 100, 150000, 172500, 15, 0, 'none.jpg'),
(6, 'Matematika', '555-555-55-555', 'nasrul', 'Abda Publisher', 2014, 100, 100000, 115000, 15, 0, 'none.jpg'),
(8, 'asdsadsa', '978-602-55555-2-1', 'Muhammad Nashrulloh', 'Abda Publisher', 2017, 890, 100000, 105000, 10, 5, 'none.jpg'),
(9, 'Bahasa Indonesia VI', '555-555-666666', 'Muhammad Nashrulloh', 'Abda Publisher', 2012, 1000, 100000, 110000, 10, 0, 'none.jpg'),
(12, 'Bahasa Indonesia xc', '555-555-55-55555', 'Muhammad Nashrulloh', 'Abda Publisher', 2017, 1000, 100000, 105000, 10, 5, 'b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_penjualan`
--

CREATE TABLE `tb_detail_penjualan` (
  `id_detail` int(11) NOT NULL,
  `id_penjualan` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_penjualan`
--

INSERT INTO `tb_detail_penjualan` (`id_detail`, `id_penjualan`, `id_buku`, `harga_jual`, `jumlah`, `total`) VALUES
(2, 1, 3, 66000, 1, 66000),
(10, 15, 3, 66000, 50, 3300000),
(11, 15, 1, 55000, 2, 110000),
(13, 17, 3, 66000, 50, 3300000),
(14, 18, 3, 66000, 45, 2970000),
(15, 18, 1, 55000, 50, 2750000),
(16, 19, 4, 110000, 5, 550000),
(17, 19, 1, 55000, 5, 275000),
(19, 21, 4, 110000, 55, 6050000),
(20, 23, 8, 105000, 55, 5775000),
(21, 24, 8, 105000, 55, 5775000),
(22, 24, 1, 55000, 5, 275000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_distributor`
--

CREATE TABLE `tb_distributor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_distributor`
--

INSERT INTO `tb_distributor` (`id`, `nama`, `alamat`, `telepon`) VALUES
(8, 'PT. Nasrul', 'Jl. Maharmartanegara', '08997075255'),
(9, 'PT. Gramedia', 'Jl. Cigugur Tengah', '888765754'),
(14, 'Nasrul', 'tes', '0817626236');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(15) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text,
  `akses` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kasir`
--

INSERT INTO `tb_kasir` (`id`, `name`, `alamat`, `telepon`, `status`, `username`, `password`, `akses`) VALUES
(1, 'Muhammad Nashrulloh Mukti', NULL, NULL, NULL, 'nashrullohmukti', '$2y$10$FirC5rDe2ElpUtTJTr2zrOHXJJ7bea5auO35Mi9GbmFpq7Cd4YGIG', 'admin'),
(2, 'Kasir', NULL, NULL, NULL, 'kasirkasir', '$2y$10$clazZr4HctA7x5eNI3DG3uBSydbz8k/dxtdTC/UL8Z8uSUMCfsCqC', 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasok`
--

CREATE TABLE `tb_pasok` (
  `id` int(11) NOT NULL,
  `id_distributor` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasok`
--

INSERT INTO `tb_pasok` (`id`, `id_distributor`, `id_buku`, `jumlah`, `updated_at`, `created_at`) VALUES
(8, 8, 1, 1000, '2017-03-01 05:00:34', '2017-03-01 04:58:13');

--
-- Trigger `tb_pasok`
--
DELIMITER $$
CREATE TRIGGER `tg_pasok_upd` AFTER UPDATE ON `tb_pasok` FOR EACH ROW BEGIN
	UPDATE tb_buku SET stok = stok - OLD.jumlah
    WHERE id = OLD.id_buku;	
    UPDATE tb_buku SET stok = stok + NEW.jumlah
    WHERE id = NEW.id_buku;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_stok_add` AFTER INSERT ON `tb_pasok` FOR EACH ROW BEGIN
	UPDATE tb_buku SET stok = stok + NEW.jumlah
    WHERE id = NEW.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id` int(11) NOT NULL,
  `id_kasir` varchar(20) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id`, `id_kasir`, `total_harga`, `created_at`, `updated_at`) VALUES
(17, 'kasirkasir', 3300000, '2017-02-26 06:36:39', '2017-02-26 21:19:24'),
(18, 'kasirkasir', 5720000, '2017-02-26 21:18:49', '2017-02-26 21:19:13'),
(19, 'kasirkasir', 825000, '2017-03-01 22:34:48', '2017-03-01 22:53:52'),
(21, 'kasirkasir', 6050000, '2017-03-01 22:53:54', '2017-03-01 22:54:49'),
(22, 'kasirkasir', 0, '2017-03-01 23:00:53', '2017-03-01 23:00:53'),
(23, 'kasirkasir', 5775000, '2017-03-02 00:58:10', '2017-03-02 00:58:35'),
(24, 'kasirkasir', 6050000, '2017-03-07 08:14:27', '2017-03-07 08:14:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `userid`, `akses`) VALUES
(5, 'Muhammad Nashrulloh Mukti', 'rhulmukti@gmail.com', '$2y$10$xU2PgUz7Z4uBs81aP33hcu3aa.5.FiuupHvNhQCJjllFoGiXUkLGC', 'LVoBbWmcygfO6E3F7vlDcYzNzuLN3PEpSQ9exQIn62sG7y2wlHPjRaSCjwjV', '2017-02-22 20:03:53', '2017-02-22 20:03:53', 'nashrullohmukti', 'admin'),
(6, 'Kasir', 'kasir@gmail.com', '$2y$10$W7/LkICkVrSDQ0xIdLS/DevC1PQesjmP7i4pubhcAItc/R7tQAK5q', 'XXHwfPQtcTPGgIFJDkL9uPPkVrHwLiCRyNYlS8JOugBmTdnmxFTrtuuPXqLu', '2017-02-22 21:39:42', '2017-02-22 21:39:42', 'kasirkasir', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_pasok`
--
ALTER TABLE `tb_pasok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pasok`
--
ALTER TABLE `tb_pasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
