-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 15.30
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'erik', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart`
--

CREATE TABLE `chart` (
  `kode` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `cookie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_order` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pesanan` text NOT NULL,
  `totalharga` int(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `cookie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_order`, `nama`, `no_hp`, `pesanan`, `totalharga`, `tanggal`, `cookie`) VALUES
(31, 'Ebod', '123', '                        \r\n*Cabay : 1Kg (20000)\r\n*Kol : 3Kg (60000)                        ', 80000, '18/12/2020', '1661716381-18-12-2020145940'),
(32, 'erik julios', '22', '                        \r\n*Cabay : 1Kg (20000)                        ', 20000, '18/12/2020', '1661716381-18-12-2020145940'),
(33, 'erik julios', '22', '                        \r\n*Cabay : 1Kg (20000)                        ', 20000, '18/12/2020', '1661716381-18-12-2020145940');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vegetable`
--

CREATE TABLE `vegetable` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vegetable`
--

INSERT INTO `vegetable` (`id`, `nama`, `harga`, `gambar`) VALUES
(1, 'Kentang', 30000, '10122020111209kentang.jpg'),
(2, 'Cabay', 20000, '10122020114141cabai.jpeg'),
(3, 'Kol', 20000, '10122020114214kol.jpg'),
(4, 'Bawang Merah', 40000, '13122020133337bawangmerah.jpg'),
(5, 'Tomat', 20000, '13122020133433tomat.jpg'),
(6, 'Ubi', 20000, '13122020133446ubi.jpg'),
(7, 'Wortel', 20000, '13122020133458wortel.jpg'),
(8, 'Cabe Setan', 20000, '13122020133515cabesetan.JPG'),
(9, 'Jagung', 20000, '13122020133526jagung.jpg'),
(10, 'Timun', 20000, '13122020133538timun.jpg'),
(11, 'Sawi Putih', 20000, '13122020133549sawiputih.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `vegetable`
--
ALTER TABLE `vegetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `chart`
--
ALTER TABLE `chart`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `vegetable`
--
ALTER TABLE `vegetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
