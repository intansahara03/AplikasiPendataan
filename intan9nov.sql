-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2022 pada 07.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intan9nov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `intan9nov`
--

CREATE TABLE `intan9nov` (
  `id` int(10) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `jenis_ruang` enum('laboratorium','kantin','ruangkelas','mushola','aula') NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `intan9nov`
--

INSERT INTO `intan9nov` (`id`, `nama_ruang`, `jenis_ruang`, `kondisi`) VALUES
(8, 'perpus', 'laboratorium', 'aman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `intan9nov`
--
ALTER TABLE `intan9nov`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `intan9nov`
--
ALTER TABLE `intan9nov`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
