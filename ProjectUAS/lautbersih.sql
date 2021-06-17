-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 17.13
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lautbersih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dashboard`
--

CREATE TABLE `tbl_dashboard` (
  `id` int(11) NOT NULL,
  `nama_pantai` varchar(20) DEFAULT NULL,
  `pj_pantai` varchar(40) DEFAULT NULL,
  `luas_pantai` varchar(50) DEFAULT NULL,
  `kedalaman` varchar(255) DEFAULT NULL,
  `tanaman` varchar(15) DEFAULT NULL,
  `kondisi_tanaman` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dashboard`
--

INSERT INTO `tbl_dashboard` (`id`, `nama_pantai`, `pj_pantai`, `luas_pantai`, `kedalaman`, `tanaman`, `kondisi_tanaman`) VALUES
(1, 'Muncar', 'Imam Rudianto', '4.37 KM2', '10 m - 30 m', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ikan`
--

CREATE TABLE `tbl_ikan` (
  `id` int(11) NOT NULL,
  `nama_produksi` varchar(50) DEFAULT NULL,
  `jumlah_jam` int(11) DEFAULT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  `letak_produksi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ikan`
--

INSERT INTO `tbl_ikan` (`id`, `nama_produksi`, `jumlah_jam`, `penanggung_jawab`, `letak_produksi`) VALUES
(10, 'Produksi Kenyar Muncar', 9, 'Dra. SUPINAH', 'Jl. Pelabuhan No 1 Muncar, Kec. Muncar, Kab. Banyuwangi'),
(11, 'Produksi Tongkol Biru Muncar', 8, 'Ny. Supinah', 'Jl. Pelabuhan No 2 Muncar, Kec. Muncar, Kab. Banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama`, `username`, `password`) VALUES
(20, 'Abdul Rosyad', 'rosyad', '$2y$10$5ISS9Ep4VI8n9DIvqmY65.Nei4vo6zHfljgrdg9aU.Vv5QDggG8aC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sampah`
--

CREATE TABLE `t_sampah` (
  `id` int(11) NOT NULL,
  `jumlah_sampah` int(11) DEFAULT NULL,
  `jenis_sampah` varchar(20) DEFAULT NULL,
  `hari_pembersihan` varchar(20) DEFAULT NULL,
  `tanggal_pembersihan` varchar(20) DEFAULT NULL,
  `pngjawab` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sampah`
--

INSERT INTO `t_sampah` (`id`, `jumlah_sampah`, `jenis_sampah`, `hari_pembersihan`, `tanggal_pembersihan`, `pngjawab`) VALUES
(16, 6, 'Kering', 'Selasa', '2021-06-08', 'Sarman A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_trbkarang`
--

CREATE TABLE `t_trbkarang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kondisi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_trbkarang`
--

INSERT INTO `t_trbkarang` (`id`, `nama`, `jumlah`, `kondisi`) VALUES
(1, 'Acropora Acuminate', 34, 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ikan`
--
ALTER TABLE `tbl_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_sampah`
--
ALTER TABLE `t_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_trbkarang`
--
ALTER TABLE `t_trbkarang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_ikan`
--
ALTER TABLE `tbl_ikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `t_sampah`
--
ALTER TABLE `t_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `t_trbkarang`
--
ALTER TABLE `t_trbkarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
