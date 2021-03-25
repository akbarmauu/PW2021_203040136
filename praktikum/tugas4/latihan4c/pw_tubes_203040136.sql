-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 15.39
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
-- Database: `pw_tubes_203040136`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Spesifikai` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Tahun` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `Foto`, `Nama`, `Status`, `Spesifikai`, `Harga`, `Tahun`) VALUES
(1, 'airpods.jpg', 'Apple Airpods', 'New', 'Wireless', 'Rp. 2,109,000', '2021'),
(2, 'applewatch.jpg', 'Iwatch', 'Second', 'Step, BPM, Mmhg, Sport', 'Rp. 3,190,000', '2019'),
(3, 'ipad.jpg', 'iPad', 'New', '32GB/128GB-10,2inch-8MP', 'Rp. 5,349,000', '2021'),
(4, 'iphone 12.jpg', 'Iphone 12', 'New', '6,1 inch-64/128/256GB-12MP', 'Rp. 18,550,000', '2021'),
(5, 'iphone6plus.jpg', 'Iphone 6', 'Second', '5,4 inch-4GB-8MP', 'Rp. 2,250,000', '2018'),
(6, 'iphone7-black.png', 'Iphone 7', 'Second', 'black-dualsim-32GB', 'Rp. 4,299,000', '2019'),
(7, 'iphone8.jpg', 'Iphone 8', 'New', '64GB-8/12MP', 'Rp. 4,750,000', '2020'),
(8, 'iphone11.jpg', 'Iphone 11', 'New', '128GB-12MP', 'Rp. 12,100,000', '2020'),
(9, 'iphonex.jpg', 'Iphone X', 'Second', '64GB-12MP', 'Rp. 5,650,000', '2020'),
(10, 'macbookk.jpg', 'macBook', 'New', 'IOS', 'Rp. 5,570,000', '2020');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
