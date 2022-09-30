-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2022 pada 17.52
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2022_b_203040083`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `tahun_penerbit` char(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penulis_buku`, `tahun_penerbit`, `stok`, `gambar`) VALUES
(1, '5 CM', 'Donny Dhirgantoro', '2005', 54, '5 cm.jpg'),
(2, 'Ayat Ayat Cinta ', 'Habiburrahman El Shirazy', '2004', 11, 'ayat-ayat cinta.jpg'),
(3, 'Kata', 'Nadhifa Allya Tsana ', '2018', 32, 'kata.jpg'),
(4, 'Katarsis', 'Anastasia Aemilia ', '2013', 12, 'katarsis.jpg'),
(5, 'Kkn Desa Penari ', 'Simpleman ', '2019', 32, 'kkn di desa penari.jpg'),
(6, 'Laskar Pelangi ', 'Andrea Hirata', '2005', 54, 'laskar pelangi.jpg'),
(7, 'Rentang Waktu ', 'Farah Via Rahmawati ', '2019', 23, 'Rentang Waktu.jpg'),
(8, 'Sabtu Bersama Bapak ', 'Adhitya Mulya ', '2015', 12, 'sabtu bersama bapak.jpg'),
(9, 'Sang Pemimpi', 'Andrea Hirata', '2006', 31, 'sang pemimpi.jpg'),
(10, 'Teluk Alaska ', 'Eka Aryani', '2019', 4, 'Teluk Alaska.jpg'),
(12, 'Tentang Kamu', 'Tereliye', '2022', 12, '11.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
