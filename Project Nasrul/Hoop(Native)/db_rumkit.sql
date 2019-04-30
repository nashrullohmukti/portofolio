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
-- Database: `db_rumkit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL,
  `id_rumkit` int(11) DEFAULT NULL,
  `nama_gedung` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id`, `id_rumkit`, `nama_gedung`) VALUES
(3, 3, 'Paviliun Parahyangan'),
(6, 2, 'Gedung A'),
(8, 2, 'Gedung B'),
(9, 2, 'Gedung C'),
(10, 2, 'Gedung D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `id_rumkit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `id_rumkit`) VALUES
(1, 'VVIP', 3),
(2, 'VIP', 1),
(4, 'Reguler', 2),
(5, 'VIP', 2),
(6, 'VVIP', 2),
(9, 'VVVIP', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `NIP` varchar(11) NOT NULL,
  `id_rumkit` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`NIP`, `id_rumkit`, `username`, `password`) VALUES
('32455567685', 0, 'Jajamih', '1234'),
('P00001', 3, 'ujang', 'ujang'),
('P00004', 2, 'Asep', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `id_gedung` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jumlah_kasur` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah_kosong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `id_gedung`, `nama`, `jumlah_kasur`, `id_kelas`, `harga`, `jumlah_kosong`) VALUES
(2, 3, 'Mawar', 7, 1, 200000, 3),
(5, 3, 'Melati', 2, 1, 400000, 1),
(6, 6, 'Anggrek', 10, 4, 200000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumkit`
--

CREATE TABLE `rumkit` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `alamat` text,
  `status` varchar(100) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumkit`
--

INSERT INTO `rumkit` (`id`, `nama`, `lat`, `lng`, `alamat`, `status`, `foto`) VALUES
(2, 'RS. Dustira, Baros, Kota Cimahi, Jawa Barat, Indonesia', '-6.886769246772636', '107.5361967086792', 'Jalan Dr. Dustira No. 1', 'negeri', 'RumahSakitDustira.jpg'),
(3, 'RSUP Dr. Hasan Sadikin Bandung, Pasteur, Kota Bandung, Jawa Barat, Indonesia', '-6.897313544083025', '107.5986760854721', 'Jl. Pasteur No. 38', 'negeri', '83498811.jpg'),
(4, 'RSUD Dr. Soetomo, Airlangga, Kota Surabaya, Jawa Timur, Indonesia', '-7.267288802725637', '112.758629322052', 'Jl. Mayjend Prof. Dr. Moestopo No. 6 - 8 Kota Surabaya', 'negeri', 'sutom.jpg'),
(5, 'Rumah Sakit Al Islam Bandung, Rancasari, Bandung, Jawa Barat', '-6.9403769', '107.6668512', 'Jl. Soekarno-Hatta No. 644, RT. 001 RW. 001, Kel. Manjahlega', 'negeri', 'sutom.jpg'),
(6, 'RS Bersalin Astana Anyar, Astanaanyar, Kota Bandung, Jawa Barat', '-6.9292027', '107.5984024', 'Jl. Astana Anyar No.224', 'negeri', '83498811.jpg'),
(7, 'RS Bersalin Emma Poeradiredja, Sumur Bandung, Jawa Barat', '-6.9132686', '107.6114561', 'Jl. Sumatera No. 46-48, Merdeka', 'swasta', '83498811.jpg'),
(8, 'RS Santo Borromeus, Bandung, Jawa Barat', '-6.8943615', '107.6113157', 'Jl. Ir. Haji Juanda No. 100', 'negeri', 'sutom.jpg'),
(9, 'RS Bhayangkara Sartika Asih, Regol, Bandung, Jawa Barat', '-6.9566384', '107.6105863', 'Jl. Moch. Toha No.369, Ciseureuh, Regol, Kota Bandung, Jawa Barat', 'swasta', 'RumahSakitDustira.jpg'),
(10, 'RS Immanuel, Bojongloa Kidul, Bandung, Jawa Barat', '-6.935791', '107.5941407', 'Jl. Raya Kopo No.161, Situsaeur, Bojongloa Kidul, Kota Bandung, Jawa Barat', NULL, 'RumahSakitDustira.jpg'),
(11, 'Rumah Sakit Umum Daerah Cibabat, Cimahi Utara, Cimahi, Jawa Barat', '-6.8792557', '107.5485203', 'Jl. Jend. H. Amir Machmud No.140, Cibabat, Cimahi Utara, Cimahi, Jawa Barat', NULL, '83498811.jpg'),
(12, 'Rumah Sakit Mitra Kasih, Cimahi Tengah, Kota Cimahi, Jawa Barat', '-6.8843195', '107.5505524', 'Cigugur Tengah, Cimahi Tengah, Kota Cimahi, Jawa Barat', NULL, 'sutom.jpg'),
(13, 'RSB. Adi Guna, Tambaksari, Surabaya, Jawa Timur', '-7.2492757', '112.7634893', 'JL. Alon-Alon Rangkah, Rangkah, Tambaksari, Surabaya, Jawa Timur', NULL, 'sutom.jpg'),
(14, 'RS Pelabuhan, Tanjung Perak, Surabaya, Jawa Timur', '-7.2094659', '112.7336405', 'Jalan Prapat Kurung Selatan No.1, Tanjung Perak, Surabaya, Jawa Timur', NULL, 'sutom.jpg'),
(15, 'RSUD Muh. Soewandi, Simokerto, Surabaya, Jawa Timur', '-7.245883', '112.7558402', 'Jl. Tambakrejo No. 45 - 47, Tambakrejo, Simokerto, Surabaya, Jawa Timur', NULL, 'RumahSakitDustira.jpg'),
(16, 'RSB St Melania, Ploso, Surabaya, Jawa Timur', '-7.2498472', '112.7534979', 'JL. Tambaksari No. 7, Ploso, Tambaksari, Surabaya, Jawa Timur', NULL, 'RumahSakitDustira.jpg'),
(17, 'RS Gotong Royong, Rumah Sakit (RS) Berkah Husada', '-7.3078614', '112.7854435', 'Jalan Medokan Semampir Indah Stieus No.97, Medokan Semampir, Sukolilo, Surabaya, Jawa Timur', NULL, '83498811.jpg'),
(19, 'RS Katolik St Vincentius A Paulo, Wonokromo, Surabaya, Jawa Timur', '-7.2911413', '112.733886', 'Jl. Diponegoro No. 51, Darmo, Wonokromo, Surabaya, Jawa Timur', NULL, '83498811.jpg'),
(20, 'RS Mitra Keluarga, Suko Manunggal, Kota SBY, Jawa Timur', '-7.2666376', '112.6890283', 'Jl. Satelit Indah II, Tanjungsari, Suko Manunggal, Surabaya, Jawa Timur', NULL, 'sutom.jpg'),
(21, 'RS Marinir Gunung Sari, Dukuh Pakis, Surabaya, Jawa Timur', '-7.3046926', '112.7058546', 'Jl. Golf No.3, Gunungsari, Dukuh Pakis, Surabaya, Jawa Timur', NULL, NULL),
(22, 'its', '-7.275086138667135', '112.79358386993408', 'JALAN RAYA ITS', 'negeri', '1.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesialis`
--

CREATE TABLE `spesialis` (
  `id` int(11) NOT NULL,
  `id_rumkit` int(11) DEFAULT NULL,
  `spesialis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spesialis`
--

INSERT INTO `spesialis` (`id`, `id_rumkit`, `spesialis`) VALUES
(1, 4, 'Jantung'),
(2, 4, 'Mata'),
(3, 4, 'THT'),
(4, 3, 'Jantung'),
(5, 2, 'Jantung'),
(6, 2, 'THT'),
(7, 5, 'Anak'),
(8, 5, 'Mata'),
(9, 6, 'Anak'),
(10, 6, 'Jantung'),
(11, 6, 'Bedah'),
(12, 7, 'Tulang'),
(13, 7, 'Anak'),
(14, 8, 'THT'),
(15, 8, 'Jantung'),
(16, 8, 'Anak'),
(17, 8, 'Bedah'),
(18, 8, 'Operasi'),
(19, 8, 'Ginjal'),
(20, 9, 'Jantung'),
(21, 9, 'Dalam'),
(22, 10, 'Jantung'),
(23, 11, 'Mata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `id_rumkit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `id_rumkit`) VALUES
(1, 'Nashrulloh', 'nasrul', 'nasrul', 'superadmin', 0),
(2, 'Rifka', 'rifka', 'rifka', 'admin', 2),
(4, 'Fathara Annisa', 'fath', 'fath', 'admin', 3),
(6, 'Annisa', 'annisa', 'annisa', 'admin', 4),
(8, 'Muhammad Nashrulloh Mukti', 'mukti', 'mukti', 'admin', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumkit`
--
ALTER TABLE `rumkit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rumkit`
--
ALTER TABLE `rumkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
