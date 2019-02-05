-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 02:41 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belibuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `tanggal_tambah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penulis_buku`, `harga_buku`, `tanggal_tambah`) VALUES
(8, 'Terlalu lama sendiris', 'Peterpan', 35000, '2019-01-20'),
(11, 'asdfasdfasd', 'asdfasdfasdfasdf', 234234, '2019-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `kelas_buku` varchar(100) DEFAULT NULL,
  `harga_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_buku`, `kelas_buku`, `harga_buku`) VALUES
(11, 'Al Islam', '1', 25000),
(12, 'Al Islam', '3', 23000),
(13, 'Al Islam', '3', 23000),
(14, 'Al Islam', '4', 25000),
(15, 'Al Islam', '6', 23000),
(16, 'Kemuhammadiyahan', '3', 15000),
(17, 'Kemuhammadiyahan', '4', 18000),
(18, 'Kemuhammadiyahan', '5', 20000),
(19, 'Kemuhammadiyahan', '6', 15000),
(20, 'Bahasa Arab', '4', 25000),
(21, 'Bahasa Arab', '5', 25000),
(22, 'Bahasa Arab', '6', 18000),
(23, 'PPI', '1', 16000),
(24, 'Fikih MI', '1', 10000),
(25, 'Fikih MI', '2', 15000),
(26, 'Fikih MI', '3', 15000),
(27, 'Fikih MI', '4', 12000),
(28, 'Fikih MI', '5', 15000),
(29, 'Fikih MI', '6', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `nama_kabupaten`, `provinsi`) VALUES
(1, 'Lombok Timur', 'Nusa Tenggara Barat'),
(2, 'Solo', 'Jawa Tengah'),
(3, 'Bandung', 'Jawa Barat'),
(4, 'Surabaya', 'Jawa Timur'),
(5, 'Jogja', 'Daerah Istimewa Jogjakarta'),
(6, 'sleman', 'Daerah Istimewa Jogjakarta'),
(7, 'bantul', 'Daerah Istimewa Jogjakarta'),
(8, 'imogiri', 'Daerah Istimewa Jogjakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `id_kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `id_kabupaten`) VALUES
(5, 'SD Muhammadiyah Sapen', 'Jalan Bimo Kurdo No.33, Demangan, Gondokusuman, Demangan, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', 5),
(6, 'SD Muhammadiyah Sokonandi 2', 'Jl. Notowinatan, Gunungketur, Pakualaman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 5),
(7, 'SMA 1 Selong', 'jln tegur umar ', 1),
(8, 'SMA Muhammadiyah 1', 'Petinggen Karangwaru Tegalrejo', 5),
(9, 'SMA Muhammadiyah 2', 'Jl. Kapas 7', 5),
(10, 'SMA Muhammadiyah 3', 'Jl. Kapt. Tendean 58', 5),
(11, 'SMA Muhammadiyah 4 	', 'Komplek Masjid Perak Kotagede', 5),
(12, 'SMA Muhammadiyah 5 	', 'Purwodiningratan NG I/902-A', 5),
(13, 'MTs./MA Muh. Gedongtengen', 'Jl. Dagen 82', 5),
(14, 'MA TARUNA AL QURAN', 'Jl Lempongsari 4A', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_sekolah`, `id_barang`, `total_harga`) VALUES
(39, 7, 11, 0),
(40, 7, 12, 0),
(41, 7, 16, 0),
(42, 7, 20, 0),
(43, 7, 23, 0),
(44, 7, 26, 0),
(45, 6, 11, 0),
(46, 6, 12, 0),
(47, 14, 11, 0),
(48, 14, 12, 0),
(49, 14, 13, 0),
(50, 14, 14, 0),
(51, 14, 15, 0),
(52, 14, 16, 0),
(53, 14, 17, 0),
(54, 14, 18, 0),
(55, 14, 19, 0),
(56, 14, 20, 0),
(57, 14, 21, 0),
(58, 14, 22, 0),
(59, 14, 23, 0),
(60, 14, 24, 0),
(61, 14, 25, 0),
(62, 14, 26, 0),
(63, 14, 27, 0),
(64, 14, 28, 0),
(65, 14, 29, 0),
(66, 8, 11, 0),
(67, 8, 16, 0),
(68, 8, 20, 0),
(69, 8, 23, 0),
(70, 8, 27, 0),
(71, 13, 11, 0),
(72, 13, 12, 0),
(73, 13, 29, 0),
(74, 5, 11, 0),
(75, 5, 12, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
