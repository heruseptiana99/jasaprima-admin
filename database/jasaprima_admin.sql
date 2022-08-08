-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2022 pada 07.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasaprima_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `no_handphone_admin` varchar(15) NOT NULL,
  `password_admin` varchar(30) NOT NULL,
  `id_kantor` int(11) NOT NULL,
  `id_status_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nama_area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor`
--

CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL,
  `jenis_kantor` varchar(6) NOT NULL,
  `lokasi_kanto` varchar(30) NOT NULL,
  `kode_kantor` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(10) NOT NULL,
  `sisa_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurusan`
--

CREATE TABLE `pengurusan` (
  `id_pengurusan` int(11) NOT NULL,
  `nama_pengurusan` varchar(30) NOT NULL,
  `harga_pengurusan` int(10) NOT NULL,
  `waktu_pengurusan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_admin`
--

CREATE TABLE `status_admin` (
  `id_status_admin` int(11) NOT NULL,
  `nama_status_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_wp` int(11) NOT NULL,
  `no_bon` varchar(15) NOT NULL,
  `nopol` varchar(11) NOT NULL,
  `id_pengurusan` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `harga_jasa` int(11) NOT NULL,
  `harga_pajak` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `status_transaksi` varchar(10) NOT NULL,
  `keterangan_transaksi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp`
--

CREATE TABLE `wp` (
  `id_wp` int(11) NOT NULL,
  `nama_wp` varchar(30) NOT NULL,
  `no_handphone_wp` varchar(15) NOT NULL,
  `alamat_wp` varchar(255) NOT NULL,
  `id_kantor` int(11) NOT NULL,
  `tanggal_terdaftar_wp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indeks untuk tabel `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pengurusan`
--
ALTER TABLE `pengurusan`
  ADD PRIMARY KEY (`id_pengurusan`);

--
-- Indeks untuk tabel `status_admin`
--
ALTER TABLE `status_admin`
  ADD PRIMARY KEY (`id_status_admin`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `wp`
--
ALTER TABLE `wp`
  ADD PRIMARY KEY (`id_wp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengurusan`
--
ALTER TABLE `pengurusan`
  MODIFY `id_pengurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_admin`
--
ALTER TABLE `status_admin`
  MODIFY `id_status_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wp`
--
ALTER TABLE `wp`
  MODIFY `id_wp` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
