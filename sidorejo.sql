-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2022 pada 16.40
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidorejo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(2) NOT NULL,
  `id_data` int(2) NOT NULL,
  `poto` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `pendapatan` int(2) NOT NULL,
  `jumlah_anak` int(2) NOT NULL,
  `pengeluaran` int(2) NOT NULL,
  `status_rumah` int(2) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `id_data`, `poto`, `alamat`, `pendapatan`, `jumlah_anak`, `pengeluaran`, `status_rumah`, `pekerjaan`) VALUES
(33, 59, '123.jpg', 'jl sei mencirim perumahan pesona nabila blok b no.20', 1, 4, 1, 1, 'TNI'),
(34, 61, '21351.jpg', 'Jl tuasan gg mulyo no38', 1, 4, 1, 1, 'PNS'),
(35, 64, '12.jpg', 'Jl tuasan gg mulyo no38', 1, 4, 3, 1, 'TNI'),
(36, 65, '111.jpg', 'Jl tuasan gg mulyo no38', 2, 4, 2, 2, 'gae'),
(37, 66, '77.jpg', 'jl sei mencirim perumahan pesona nabila blok b no.20', 3, 1, 2, 1, 'sadasd'),
(38, 67, '33.jpg', 'jl sei mencirim perumahan pesona nabila blok b no.20', 3, 7, 2, 3, 'PNS'),
(39, 68, '222.jpg', 'jl sei mencirim perumahan pesona nabila blok b no.20', 3, 1, 3, 2, 'PNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bank`
--

CREATE TABLE `data_bank` (
  `id_db` int(2) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `norek` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bank`
--

INSERT INTO `data_bank` (`id_db`, `nik`, `norek`) VALUES
(35, '123', 'Data tidak ditemukan'),
(36, '21351', 'Data tidak ditemukan'),
(45, '777', 'Data tidak ditemukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(6) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `no_kk` varchar(200) NOT NULL,
  `ttl` varchar(200) NOT NULL,
  `kelamin` varchar(200) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `status_nikah` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nik`, `nama`, `no_kk`, `ttl`, `kelamin`, `alamat`, `agama`, `status_nikah`, `pekerjaan`, `photo`) VALUES
(9, '127114070997002', 'Riyan Sanjaya', '16541694121648', 'Medan, 07 September 1997', 'laki laki', 'jl sei mencirim perumahan pesona nabila blok b no.20', 'ISLAM', 'kawin', 'PNS', '127114070997002.jpg'),
(12, '123', 'Karina Harahap', '123', 'Medan, 07 September 1997', 'Wanita', 'jl sei mencirim perumahan pesona nabila blok b no.20', 'ISLAM', 'Kawin', 'TNI', '123.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga`
--

CREATE TABLE `data_warga` (
  `id_data` int(2) NOT NULL,
  `id_warga` int(2) NOT NULL,
  `status_berkas` varchar(80) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_warga`
--

INSERT INTO `data_warga` (`id_data`, `id_warga`, `status_berkas`, `keterangan`) VALUES
(59, 35, 'Ditolak', 'Anda%20Tidak%20Berhak%20Mendapatkan%20Bansos'),
(60, 35, 'belum dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(61, 36, 'berhak', 'Anda%20Berhak%20Mendapatkan%20Bansos'),
(62, 37, 'belum dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(63, 38, 'belum dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(64, 40, 'Sudah dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(65, 41, 'Sudah dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(66, 42, 'Sudah dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(67, 43, 'Sudah dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(68, 44, 'Sudah dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'),
(69, 45, 'belum dilengkapi', 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` varchar(64) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `nama`, `password`, `level`) VALUES
('123', 'rey', '123', 2),
('21351', 'reysan', '123', 2),
('777', 'Riyan Sanjaya', '123', 2),
('admin', 'admin', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(2) NOT NULL,
  `nik` varchar(64) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `poto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `poto`) VALUES
(36, '21351', 'reysan', '21351.jpg'),
(45, '777', 'Riyan Sanjaya', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `data_bank`
--
ALTER TABLE `data_bank`
  ADD PRIMARY KEY (`id_db`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `data_bank`
--
ALTER TABLE `data_bank`
  MODIFY `id_db` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id_data` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
