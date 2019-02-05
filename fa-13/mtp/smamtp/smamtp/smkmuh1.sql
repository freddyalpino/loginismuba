-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 12:59 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smkmuh1`
--

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `kategori`, `content`, `gambar`, `tanggal`) VALUES
(1, 'Ini Coba Judul Ya', 'Informasi', '<p>Ini apa sih</p>\r\n\r\n<p><strong>gakk tau kok tebel yaaa</strong></p>\r\n\r\n<p><em>apalagi ini miring&nbsp;<strong>ini malah tebal miring</strong></em></p>\r\n\r\n<ol>\r\n	<li>nomor satu</li>\r\n	<li>dua</li>\r\n	<li>tiga</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>atau ini??</li>\r\n	<li>iya kah</li>\r\n</ul>\r\n\r\n<p>hahahaha</p>\r\n', '1503723939422.jpg', '2018-03-22'),
(2, 'Ini coba gada gambarnya', 'Berita', '<p>kdjskjdkasjdasdasd&nbsp;<strong>osidjsaijdsoaijdosadijao</strong>hahhah</p>', 'no_foto.png', '2018-03-22'),
(3, 'Ini Judul Ketiga', 'Berita', '<p>kjdkfcjdadlfalskdjalsdfaf</p>\r\n', 'no_foto.png', '2018-03-22'),
(4, 'Ini Judul Keempat', 'Berita', '<p>lkadfjdslkfajdlfdsfdsf</p>\r\n', 'no_foto.png', '2018-03-22'),
(5, 'Ini Judul Kelima', 'Berita', '<p>lkajalkdjaslkdjasd</p>\r\n', 'no_foto.png', '2018-03-22'),
(6, 'Ini Judul Keenam', 'Berita', '<p>dlfkjdaflkaf</p>\r\n', 'no_foto.png', '2018-03-22'),
(7, 'Ini judul ketujuh', 'Berita', '<p>sdkfjdsfljdkafjdlkf</p>\r\n', '73728.jpg', '2018-03-22'),
(8, 'Ini judul kedelapan', 'Berita', '<p>adlfkjdaflkadjflasf</p>\r\n', 'Ct1PCNyWEAEM01Y.jpg', '2018-03-22'),
(9, 'Ini Judul Kesembilan', 'Berita', '<p>alfkalfadf</p>\r\n', 'no_foto.png', '2018-03-22'),
(10, 'Ini judul kesepuluh', 'Berita', '<p>afclajaskd</p>\r\n', 'QiFPVPE.jpg', '2018-03-22'),
(11, 'ini coba kesebelas', 'Informasi', '<p>jkkjhkjhkjhkjh</p>\r\n', 'Logo-Mobile-Legend-Bang-Bang.png', '2018-03-22'),
(12, '', 'Berita', '<p>jhgjhgjhg</p><p>mhkjh<strong>kjhkjhkjh</strong></p><ol>	<li><strong>kjk</strong></li>	<li><strong>bhg</strong></li>	<li><strong>hhg</strong></li>	<li>&nbsp;</li></ol>', 'no_foto.png', '2018-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Maverick', 'maverick', '55f9c405bd87ba23896f34011ffce8da'),
(3, 'Eka Bagus', 'exbaz', '010e29d472df5d55b4f000c240e7b2cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
