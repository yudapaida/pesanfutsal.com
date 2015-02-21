-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2015 at 03:46 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `lapangan` varchar(100) DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_transaksi` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_konfirmasi`),
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama_member`, `lokasi`, `lapangan`, `jam`, `harga`, `gambar`, `id_transaksi`) VALUES
(10, 'yuda yuda', 'Centaur', 'lapangan 1', '07.00', '75000', '5.jpg', 3),
(11, 'yuda yuda', 'Akasha', 'lapangan 1', '07.00', '80000', '4.jpg', 4),
(12, 'yuda yuda', 'Centaur', 'lapangan 1', '08.00', '75000', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `id_lap` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lap` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `pagi` int(100) DEFAULT NULL,
  `siang` int(100) DEFAULT NULL,
  `malam` int(100) DEFAULT NULL,
  `id_futsal` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_lap`),
  KEY `id_futsal` (`id_futsal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lap`, `nama_lap`, `deskripsi`, `pagi`, `siang`, `malam`, `id_futsal`) VALUES
(1, 'lapangan 1', 'rumput sintetis', 80000, 90000, 100000, 11),
(2, 'lapangan 2', 'rumput sintetis', 80000, 90000, 100000, 11),
(3, 'lapangan 1', 'rumput sintetis', 75000, 80000, 90000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Babarsari'),
(2, 'Baciro'),
(3, 'Bener'),
(4, 'Blimbingsari'),
(5, 'Bugisan'),
(6, 'Bulaksumur'),
(7, 'Caturtunggal'),
(8, 'Condongcatur'),
(9, 'Condongsari'),
(10, 'Danurejan'),
(11, 'Demangan'),
(12, 'Depok'),
(13, 'Gambiran'),
(14, 'Gamping'),
(15, 'Gedongtengen'),
(16, 'Gejayan'),
(17, 'Glagahsari'),
(18, 'Godean'),
(19, 'Gondokusuman'),
(20, 'Jakal'),
(21, 'Janti'),
(22, 'Jetis'),
(23, 'Jogokariyan'),
(24, 'Jombor'),
(25, 'Kalibayem'),
(26, 'Karang malang'),
(27, 'Karangwaru'),
(28, 'Kauman'),
(29, 'Kepuh'),
(30, 'Kota Gede'),
(31, 'Kraton'),
(32, 'Kricak'),
(33, 'Kusumanegara'),
(34, 'Kutu'),
(35, 'Maguwoharjo'),
(36, 'Mantrijeron'),
(37, 'Mergangsan'),
(38, 'Minomartani'),
(39, 'Monjali'),
(40, 'Ngaglik'),
(41, 'Ngampilan'),
(42, 'Ngestiharjo'),
(43, 'Nologaten'),
(44, 'Pakualaman'),
(45, 'Palagan'),
(46, 'Seturan'),
(47, 'Tegalrejo'),
(48, 'Terban'),
(49, 'Timoho'),
(50, 'Umbulharjo'),
(51, 'Wirobrajan'),
(52, 'Wonocatur');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `id_card` varchar(100) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `team_name` varchar(100) DEFAULT NULL,
  `address` text,
  `phone` varchar(20) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_member`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `first_name`, `last_name`, `id_card`, `ttl`, `team_name`, `address`, `phone`, `id_user`) VALUES
(1, 'yuda', 'yuda', 'yuad', '1993-08-15', 'yuda', 'yuda', 'yuda', 10),
(2, 'Ismail', 'Adima', '1231312', '1994-05-15', 'Ismail', 'Ismail', '0123901391', 12);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_futsal` int(10) NOT NULL AUTO_INCREMENT,
  `nama_futsal` varchar(100) DEFAULT NULL,
  `alamat` text,
  `kota` varchar(200) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('unconfirmed','confirmed') NOT NULL DEFAULT 'unconfirmed',
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_futsal`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_futsal`, `nama_futsal`, `alamat`, `kota`, `deskripsi`, `gambar`, `status`, `id_user`) VALUES
(11, 'Akasha', 'Akasha', 'Babarsari', 'Akasha', 'Akasha1.jpg', 'confirmed', 8),
(12, 'Centaur', 'Centaur', 'Baciro', 'Centaur', 'Centaur1.jpg', 'confirmed', 9),
(13, 'soccer', 'soccer', 'Babarsari', 'soccer', 'Ancient_Apparition.jpg', 'confirmed', 11),
(14, 'jakal', 'jakal', 'Baciro', 'jakal', NULL, 'confirmed', 13),
(15, 'codet', 'codet', '', 'codet', NULL, 'confirmed', 14),
(16, 'adi', 'adi', '', 'adi', NULL, 'confirmed', 15),
(17, 'adi', 'adi', '', 'adi', NULL, 'confirmed', 16),
(18, 'rio', 'rio', '', 'rio', NULL, 'confirmed', 17),
(19, 'ajis', 'ajis', '', 'ajis', NULL, 'confirmed', 18);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `id_futsal` int(10) DEFAULT NULL,
  `id_lapangan` int(10) DEFAULT NULL,
  `id_member` int(10) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `harga` int(10) NOT NULL,
  `status` enum('waiting','booked') NOT NULL DEFAULT 'waiting',
  `nama_team` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_futsal` (`id_futsal`),
  KEY `id_lapangan` (`id_lapangan`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_futsal`, `id_lapangan`, `id_member`, `tgl_booking`, `jam`, `harga`, `status`, `nama_team`) VALUES
(3, 12, 3, 1, '2015-02-16', '07.00', 75000, 'booked', 'yuda'),
(4, 11, 1, 1, '2015-02-17', '07.00', 80000, 'booked', 'yuda'),
(5, 12, 3, 1, '2015-02-17', '08.00', 75000, 'waiting', 'yuda'),
(6, 12, 3, 1, '2015-02-17', '09.00', 75000, 'waiting', 'yuda'),
(7, 12, 3, 1, '2015-02-17', '20.00', 75000, 'waiting', 'yuda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','operator','user') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'superadmin', '37a5b2d8e26b07f0aca7fe5bff9eec01', 'admin'),
(8, 'akasha', '5d7a2ce0e837d6dc0382520a0f0c4f2d', 'operator'),
(9, 'centaur', '47aeba35bb9d1ad72adfd802fab8a7c0', 'operator'),
(10, 'yuda', 'ac9053a8bd7632586c3eb663a6cf15e4', 'user'),
(11, 'soccer', 'da443a0ad979d5530df38ca1a74e4f80', 'operator'),
(12, 'ismail', 'f3b32717d5322d7ba7c505c230785468', 'user'),
(13, 'jakal', '46ee350cd0a08748c755d026648470cf', 'operator'),
(14, 'codet', '61bcf60d56ac3f6351acdd957849c20b', 'operator'),
(15, 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'operator'),
(16, 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'operator'),
(17, 'rio', 'd5ed38fdbf28bc4e58be142cf5a17cf5', 'operator'),
(18, 'ajis', '8fbd9a9b73736dac170c41f46b13ec6f', 'operator');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE;

--
-- Constraints for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `operator` (`id_futsal`) ON DELETE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `operator` (`id_futsal`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangan` (`id_lap`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
