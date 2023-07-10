-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 16.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shibavet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bookingdokter`
--

CREATE TABLE `tb_bookingdokter` (
  `id_bdokter` int(32) NOT NULL,
  `nama_bdokter` varchar(32) NOT NULL,
  `telp_bdokter` varchar(32) NOT NULL,
  `pildok` varchar(64) NOT NULL,
  `waktu_bdokter` varchar(32) NOT NULL,
  `total_bdokter` varchar(32) NOT NULL,
  `metode_pembayaran` varchar(32) NOT NULL,
  `status_bdokter` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bookingdokter`
--

INSERT INTO `tb_bookingdokter` (`id_bdokter`, `nama_bdokter`, `telp_bdokter`, `pildok`, `waktu_bdokter`, `total_bdokter`, `metode_pembayaran`, `status_bdokter`) VALUES
(1, 'Naufal', '87888057469', 'Dokter Abel - Spesialis Kandungan', '2022-07-29', '0', 'GOPAY', 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bookinginap`
--

CREATE TABLE `tb_bookinginap` (
  `id_inap` int(11) NOT NULL,
  `nama_inap` varchar(32) NOT NULL,
  `telp_inap` varchar(32) NOT NULL,
  `kapasitas_inap` varchar(32) NOT NULL,
  `jumlah_inap` varchar(32) NOT NULL,
  `waktu_inap` varchar(64) NOT NULL,
  `total_inap` varchar(32) NOT NULL,
  `metode_pembayaran` varchar(32) NOT NULL,
  `status_inap` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bookinginap`
--

INSERT INTO `tb_bookinginap` (`id_inap`, `nama_inap`, `telp_inap`, `kapasitas_inap`, `jumlah_inap`, `waktu_inap`, `total_inap`, `metode_pembayaran`, `status_inap`) VALUES
(1, 'Dina', '87897894660', '3 Kucing', '3 Hari', '07/19/2022 - 07/21/2022', 'Rp 180.000', 'MANDIRI', 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_grooming`
--

CREATE TABLE `tb_grooming` (
  `id_grooming` int(11) NOT NULL,
  `nama_grooming` varchar(32) NOT NULL,
  `telp_grooming` varchar(32) NOT NULL,
  `jumlah_grooming` varchar(32) NOT NULL,
  `jenis_grooming` varchar(32) NOT NULL,
  `waktu_grooming` varchar(32) NOT NULL,
  `total_grooming` varchar(32) NOT NULL,
  `metode_pembayaran` varchar(32) NOT NULL,
  `status_grooming` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_grooming`
--

INSERT INTO `tb_grooming` (`id_grooming`, `nama_grooming`, `telp_grooming`, `jumlah_grooming`, `jenis_grooming`, `waktu_grooming`, `total_grooming`, `metode_pembayaran`, `status_grooming`) VALUES
(1, 'Abel', '89650051943', '2 Kucing', 'Grooming Kutu', '2022-07-29', 'Rp 170.000', 'GOPAY', 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsulon`
--

CREATE TABLE `tb_konsulon` (
  `id_konsulon` int(32) NOT NULL,
  `nama_konsulon` varchar(32) NOT NULL,
  `telp_konsulon` varchar(32) NOT NULL,
  `pildok` varchar(32) NOT NULL,
  `keluhan` varchar(32) NOT NULL,
  `jenis_konsulon` varchar(32) NOT NULL,
  `total_konsulon` varchar(32) NOT NULL,
  `metode_pembayaran` varchar(32) NOT NULL,
  `status_konsulon` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konsulon`
--

INSERT INTO `tb_konsulon` (`id_konsulon`, `nama_konsulon`, `telp_konsulon`, `pildok`, `keluhan`, `jenis_konsulon`, `total_konsulon`, `metode_pembayaran`, `status_konsulon`) VALUES
(1, 'Ijul', '81413574358', 'Dokter Kandungan', 'Luar', 'Ras', 'Rp 40.000', 'GOPAY', 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mst_dokter`
--

CREATE TABLE `tb_mst_dokter` (
  `id_dokter` int(32) NOT NULL,
  `nama_dokter` varchar(32) NOT NULL,
  `keahlian_dokter` varchar(32) NOT NULL,
  `harga_dokter` varchar(64) NOT NULL,
  `keterangan_dokter` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mst_dokter`
--

INSERT INTO `tb_mst_dokter` (`id_dokter`, `nama_dokter`, `keahlian_dokter`, `harga_dokter`, `keterangan_dokter`) VALUES
(4, 'Denny', 'Umum', 'Rp 20000', 'Saya dokter dibidang perkucingan'),
(5, 'Abel', 'Spesialis Kandungan', 'Rp 50000', 'Saya dokter dibidang perkucingan'),
(6, 'Kiko', 'Spesialis Operasi', 'Rp 100000', 'Saya dokter dibidang perkucingan'),
(7, 'Jena', 'Spesialis Operasi', 'Rp 140000', 'Saya dokter spesialis operasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mst_jenisgrooming`
--

CREATE TABLE `tb_mst_jenisgrooming` (
  `id` int(11) NOT NULL,
  `jenisgrooming` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mst_jenisgrooming`
--

INSERT INTO `tb_mst_jenisgrooming` (`id`, `jenisgrooming`) VALUES
(2, 'Grooming Sehat'),
(3, 'Grooming Kutu'),
(4, 'Grooming Lengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'Dokter', 'dokter', 'dokter'),
(3, 'dokter1', 'dokter1', 'dokter');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bookingdokter`
--
ALTER TABLE `tb_bookingdokter`
  ADD PRIMARY KEY (`id_bdokter`);

--
-- Indeks untuk tabel `tb_bookinginap`
--
ALTER TABLE `tb_bookinginap`
  ADD PRIMARY KEY (`id_inap`);

--
-- Indeks untuk tabel `tb_grooming`
--
ALTER TABLE `tb_grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indeks untuk tabel `tb_konsulon`
--
ALTER TABLE `tb_konsulon`
  ADD PRIMARY KEY (`id_konsulon`);

--
-- Indeks untuk tabel `tb_mst_dokter`
--
ALTER TABLE `tb_mst_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_mst_jenisgrooming`
--
ALTER TABLE `tb_mst_jenisgrooming`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bookingdokter`
--
ALTER TABLE `tb_bookingdokter`
  MODIFY `id_bdokter` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_bookinginap`
--
ALTER TABLE `tb_bookinginap`
  MODIFY `id_inap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_grooming`
--
ALTER TABLE `tb_grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_konsulon`
--
ALTER TABLE `tb_konsulon`
  MODIFY `id_konsulon` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_mst_dokter`
--
ALTER TABLE `tb_mst_dokter`
  MODIFY `id_dokter` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_mst_jenisgrooming`
--
ALTER TABLE `tb_mst_jenisgrooming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
