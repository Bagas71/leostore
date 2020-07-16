-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 03.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leostore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `no_admin` enum('0852-4283-2590') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coba`
--

INSERT INTO `coba` (`id`, `no_admin`) VALUES
(19, '0852-4283-2590');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$oTfBGxxCOSamwYga.lBdqOLT1kf4LUVWGtquNcu62iGSrVDnjbEzO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah_barang` varchar(15) DEFAULT NULL,
  `harga_barang` varchar(10) DEFAULT NULL,
  `stock_barang` varchar(25) DEFAULT NULL,
  `staus_barang` enum('Ready','Pre Order') DEFAULT NULL,
  `jenis_barang` varchar(15) DEFAULT NULL,
  `gender` enum('-','Pria','Wanita') DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id`, `nama_barang`, `jumlah_barang`, `harga_barang`, `stock_barang`, `staus_barang`, `jenis_barang`, `gender`, `keterangan`, `gambar`) VALUES
(23, 'jam tangan', '4', '2000000', '7', 'Ready', '8', 'Pria', 'masih baru dan original', '5d1dde0eb5961.jpg'),
(24, 'kemeja lengan panjang', '9', '50000', '4', 'Ready', '7', '-', 'menggunakan bahan yang nyaman', '5d18c49497e1d.jpg'),
(25, 'kemeja hitam', '10', '70000', '5', 'Pre Order', '7', 'Pria', 'nyaman dan dingin', '5d18c4e64694f.jpg'),
(26, 'kemeja putih', '5', '100000', '3', 'Ready', '7', 'Pria', 'kemeja putih', '5d18c5387d89a.jpg'),
(27, 'baju wanita', '2', '100000', '4', 'Ready', '7', 'Wanita', 'bahan halus dan lembut', '5d18d451ef272.jpg'),
(28, 'sepatu', '2', '120000', '4', 'Pre Order', '9', 'Pria', 'masih baru dan original', '5d1ddb1d07e8a.jpg'),
(29, 'jam tangan', '2', '120000', '4', 'Ready', '8', 'Wanita', 'masih baru dan original', '5d1ea734c05ba.jpg'),
(30, 'baju wanita', '2', '120000', '4', 'Pre Order', '7', 'Wanita', 'masih baru dan original', '5d1ea7c736f3e.jpg'),
(31, 'baju wanita', '4', '120000', '4', 'Ready', '7', 'Wanita', 'masih baru dan original', '5d1ea7f12c8b0.jpg'),
(32, 'sepatu wanita', '2', '2000000', '4', 'Ready', '9', 'Wanita', 'masih baru dan original', '5d1ea825e4ede.jpg'),
(33, 'baju pria', '2', '120000', '4', 'Ready', '7', 'Pria', 'masih baru dan original', '5d1eacb35827d.jpg'),
(34, 'baju wanita', '2', '120000', '4', 'Ready', '7', 'Wanita', 'masih baru dan original', '5d1eace750dfd.jpg'),
(35, 'pencuci muka', '2', '50000', '4', 'Ready', '10', 'Pria', 'bersih dan cerah', '5d1f2de651c96.jpg'),
(36, 'pencuci muka', '4', '50000', '4', 'Ready', '10', 'Pria', 'bersih dan cerah', '5d1f2e1397b1a.jpg'),
(37, 'pencuci muka', '2', '50000', '4', 'Ready', '10', 'Pria', 'bersih dan cerah', '5d1f2e39e6abd.jpg'),
(38, 'pencuci muka', '2', '50000', '4', 'Pre Order', '10', 'Pria', 'bersih dan cerah', '5d1f2e5d7b8a1.jpg'),
(39, 'Make Up', '2', '120000', '4', 'Pre Order', '11', 'Wanita', 'bersih dan cerah', '5d1f3665850de.jpg'),
(40, 'Make Up', '2', '120000', '4', 'Ready', '11', 'Wanita', 'bersih dan cerah', '5d1f3694ae73b.jpg'),
(41, 'Skin Care', '2', '120000', '4', 'Ready', '10', 'Wanita', 'bersih dan cerah', '5d1f36dc3d2b4.jpg'),
(42, 'Skin Care', '2', '120000', '4', 'Ready', '10', 'Wanita', 'bersih dan cerah', '5d1f3729e6f77.jpg'),
(43, 'snack', '2', '30000', '4', 'Ready', '13', '-', 'sehat &amp; bergizi', '5d22ef7e654fa.png'),
(44, 'snack', '2', '30000', '4', 'Ready', '13', '-', 'sehat &amp; bergizi', '5d22f05b54b68.png'),
(45, 'souvenir', '2', '50000', '4', 'Ready', '12', '-', 'menarik dan unik', '5d22f4367f9be.jpg'),
(46, 's', 'sasa', 'dsa', 'sda', 'Ready', '7', 'Pria', 'ads', '5d7d073d32741.mpeg'),
(48, 'fd', 'fgd', 'gfd', 'gf', 'Ready', '7', 'Pria', 'dg', '5d7e5bc3c03bb.mpeg'),
(49, 'asd', 'das', 'asd', 'dsa', 'Ready', '7', 'Pria', 'das', '5d7e5d0e39a89.mpeg'),
(50, 'fds', 'dfs', 'fd', 'fd', 'Pre Order', '9', 'Pria', 'sda', '5d7e5e3e65de9.mpeg'),
(51, 'asd', 'asd', '30000', 'asd', 'Pre Order', '8', 'Pria', 'asd', '5ed0796157c95.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_checkout`
--

CREATE TABLE `tabel_checkout` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kode_pos` char(5) DEFAULT NULL,
  `telpon` varchar(13) DEFAULT NULL,
  `catatan` varchar(250) DEFAULT NULL,
  `nama_barang` varchar(20) DEFAULT NULL,
  `harga_barang` varchar(20) DEFAULT NULL,
  `jenis_barang` varchar(20) DEFAULT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_checkout`
--

INSERT INTO `tabel_checkout` (`id`, `nama_pembeli`, `email`, `alamat`, `kode_pos`, `telpon`, `catatan`, `nama_barang`, `harga_barang`, `jenis_barang`, `tanggal_pembelian`) VALUES
(2, 'agung', 'agung@gmail.com', 'maros', '94567', '082199390993', 'haha', 'kemeja hitam', '70000', '7', '0000-00-00'),
(3, 'suci', 'suci@gmail', 'palopo', '94567', '085246633378', 'satu', 'baju wanita', '100000', '7', '0000-00-00'),
(9, 'doni renaldi', 'doni@gmail.com', 'palopo', '94567', '082199390993', 'enak', 'snack', '30000', '13', '2019-07-11'),
(10, 'doni renaldi', 'doni@gmail.com', 'palopo', '94567', '082199390993', 'ok gan', 'snack', '30000', '13', '2019-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis_barang`
--

CREATE TABLE `tabel_jenis_barang` (
  `id` int(11) NOT NULL,
  `jenis_barang` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jenis_barang`
--

INSERT INTO `tabel_jenis_barang` (`id`, `jenis_barang`) VALUES
(7, 'Clothing'),
(8, 'Accessories'),
(9, 'Footwear'),
(10, 'Skin Care'),
(11, 'Make Up'),
(12, 'Gift'),
(13, 'Snack');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_checkout`
--
ALTER TABLE `tabel_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_jenis_barang`
--
ALTER TABLE `tabel_jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tabel_checkout`
--
ALTER TABLE `tabel_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_jenis_barang`
--
ALTER TABLE `tabel_jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
