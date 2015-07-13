-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2015 pada 07.35
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) DEFAULT NULL,
  `nama_team` varchar(200) NOT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `lapangan` varchar(100) DEFAULT NULL,
  `tgl_booking` date NOT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_transaksi` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_konfirmasi`),
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama_member`, `nama_team`, `lokasi`, `lapangan`, `tgl_booking`, `jam`, `harga`, `gambar`, `id_transaksi`) VALUES
(3, 'ismail adima', 'black team', 'soccer', 'Lapangan B', '2015-02-19', '20.00', '120000', 'konfirmasi1.jpg', 2),
(4, 'ismail adima', 'black team', 'soccer', 'Lapangan B', '2015-02-28', '20.00', '120000', 'konfirmasi11.jpg', 3),
(8, 'ismail adima', 'black team', 'komsi', 'lapangan 1', '2015-02-25', '08.00', '100000', 'konfirmasi15.jpg', 7),
(9, 'yuda hermawan', 'G82', 'soccer', 'lapangan A', '2015-06-20', '07.00', '90000', 'Koala.jpg', 12),
(10, 'yuda hermawan', 'G82', 'Neo', 'Lapangan A', '2015-06-21', '07.00', '100000', 'konfirmasi16.jpg', 14),
(14, 'yuda hermawan', 'G82', 'Goldengoal ', 'Lapangan A', '2015-06-24', '08.00', '100000', 'anu.jpg', 18),
(15, 'rizal wildan', 'footer', 'Goldengoal ', 'Lapangan A', '2015-06-24', '09.00', '100000', 'anu1.jpg', 19),
(16, 'rizal wildan', 'footer', 'Goldengoal ', 'Lapangan A', '2015-06-25', '07.00', '100000', 'anu2.jpg', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `id_lap` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lap` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `pagi` int(100) DEFAULT NULL,
  `siang` int(100) DEFAULT NULL,
  `malam` int(100) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_futsal` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_lap`),
  KEY `id_futsal` (`id_futsal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lap`, `nama_lap`, `deskripsi`, `pagi`, `siang`, `malam`, `gambar`, `id_futsal`) VALUES
(1, 'lapangan A', 'rumput sintetis', 90000, 100000, 120000, 'lap_soccer.jpg', 1),
(6, 'Lapangan B', 'rumput sintetis', 90000, 100000, 120000, 'lap_soccer2.jpg', 1),
(7, 'lapangan 1', 'rumput sintetis', 100000, 110000, 120000, 'lap_soccer21.jpg', 4),
(8, 'Lapangan A', 'Rumput Sintetis', 100000, 120000, 150000, '0.jpg', 6),
(9, 'Lapangan B', 'Rumput Sintetis', 100000, 120000, 150000, '1.jpg', 6),
(13, 'lapangan 1', 'Rumput Sintetis', 100000, 200000, 300000, '11.jpg', 3),
(14, 'Lapangan 2', 'Rumput Sintetis', 100000, 200000, 300000, '2.jpg', 3),
(15, 'Lapangan A', 'Rumput Sintetis', 100000, 200000, 300000, '6.jpg', 7),
(16, 'Lapangan 1', 'Rumput Sintetis', 100000, 200000, 300000, '22.jpg', 2),
(17, 'Lapangan 3', 'Rumput Sintetis', 100000, 200000, 300000, '23.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_lokasi`),
  UNIQUE KEY `nama_lokasi_2` (`nama_lokasi`),
  UNIQUE KEY `nama_lokasi_3` (`nama_lokasi`),
  UNIQUE KEY `nama_lokasi_4` (`nama_lokasi`),
  KEY `id_kota` (`id_lokasi`),
  KEY `nama_lokasi` (`nama_lokasi`),
  KEY `id_kota_2` (`id_lokasi`),
  KEY `id_kota_3` (`id_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data untuk tabel `lokasi`
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
-- Struktur dari tabel `member`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `first_name`, `last_name`, `id_card`, `ttl`, `team_name`, `address`, `phone`, `id_user`) VALUES
(1, 'yuda', 'hermawan', '12/336932/SV/01885', '1992-11-28', 'G82', 'sendowo G82 Sleman', '+6285747586186', 2),
(2, 'ismail', 'adima', '12/336909/SV/01871', '1994-05-15', 'black team', 'sendowo G82 Sleman', '+628156706780', 3),
(3, 'rizal', 'wildan', '12/336932/SV/01885', '1995-06-30', 'footer', 'sendowo g82', '085747586186', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_futsal` int(10) NOT NULL AUTO_INCREMENT,
  `nama_futsal` varchar(100) DEFAULT NULL,
  `alamat` text,
  `id_kota` int(10) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `no_rek` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('unconfirmed','confirmed') NOT NULL DEFAULT 'unconfirmed',
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_futsal`),
  KEY `id_user` (`id_user`),
  KEY `id_kota` (`id_kota`),
  KEY `id_kota_2` (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_futsal`, `nama_futsal`, `alamat`, `id_kota`, `latitude`, `longitude`, `no_rek`, `phone`, `deskripsi`, `gambar`, `status`, `id_user`) VALUES
(1, 'soccer', 'Jl Kaliurang km 6', 0, '-7.743821243966949', '110.36261806347659', '1234567', '0274113333', 'Buka dari jam 07.00 - 22.00', 'soccer.jpg', 'confirmed', 4),
(2, 'jakal 7', 'Jl kaliurang km 7', 20, '-7.7492642775907', '110.38536319592288', '12345', '0274111333', 'Buka dari jam 07.00 - 22.00', 'jakal7.jpg', 'confirmed', 5),
(3, 'djuragan', 'Jl Pandega Martha no.55', 46, '-7.755812834160202', '110.3783250794678', '12345', '0274111444', 'Buka dari jam 07.00 - 22.00', 'djuragan.jpg', 'confirmed', 6),
(4, 'komsi', 'Komsi', 12, '', '', '0808080808', '08080808080', 'Komsi', 'komsi.jpg', 'confirmed', 7),
(6, 'Neo', 'JL. C. Simanjuntak, No. 91, Daerah Istimewa Yogyakarta, Indonesia', 20, '-7.77808885664791', '110.37323424675753', '12345', '0274543476', 'Buka dari jam 07.00 - 23.00', 'neo.jpg', 'confirmed', 10),
(7, 'Goldengoal ', 'JL. Pogung Raya, pandega marta, Pogung Baru', 20, '-7.754367057709006', '110.38160810330203', '1234567', '02746550505', 'Buka dari jam 08.00 - 23.00', 'goldengoal.jpg', 'confirmed', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `id_futsal` int(10) DEFAULT NULL,
  `id_lapangan` int(10) DEFAULT NULL,
  `id_member` int(10) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `waktu_booking` varchar(255) NOT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `harga` int(10) NOT NULL,
  `status` enum('waiting','booked','cancel') NOT NULL DEFAULT 'waiting',
  `nama_team` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_futsal` (`id_futsal`),
  KEY `id_lapangan` (`id_lapangan`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_futsal`, `id_lapangan`, `id_member`, `tgl_booking`, `waktu_booking`, `jam`, `harga`, `status`, `nama_team`) VALUES
(2, 1, 6, 2, '2015-02-19', '', '20.00', 120000, 'booked', 'black team'),
(3, 1, 6, 2, '2015-02-28', '', '20.00', 120000, 'booked', 'black team'),
(7, 4, 7, 2, '2015-02-25', '', '08.00', 100000, 'booked', 'black team'),
(12, 1, 1, 1, '2015-06-20', '14:03:20', '07.00', 90000, 'booked', 'G82'),
(14, 6, 8, 1, '2015-06-21', '14:20:09', '07.00', 100000, 'waiting', 'G82'),
(15, 6, 9, 1, '2015-06-24', '14:23:33', '07.00', 100000, 'cancel', 'G82'),
(16, 3, 14, 1, '2015-06-22', '14:25:47', '07.00', 100000, 'waiting', 'G82'),
(18, 7, 15, 1, '2015-06-24', '23:13:06', '08.00', 100000, 'booked', 'G82'),
(19, 7, 15, 3, '2015-06-24', '23:20:42', '09.00', 100000, 'booked', 'footer'),
(20, 7, 15, 3, '2015-06-25', '04:17:43', '07.00', 100000, 'booked', 'footer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','operator','user') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'superadmin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'yuda.hermawan@mail.ugm.ac.id', 'ac9053a8bd7632586c3eb663a6cf15e4', 'user'),
(3, 'ismail.adima@mail.ugm.ac.id', 'f3b32717d5322d7ba7c505c230785468', 'user'),
(4, 'soccer@gmail.com', 'da443a0ad979d5530df38ca1a74e4f80', 'operator'),
(5, 'jakal7@gmail.com', 'e47ca3f126b8167245542455c9034804', 'operator'),
(6, 'djuragan@gmail.com', '5c75760a7a8815e24f99525891f48883', 'operator'),
(7, 'komsi', 'dc2ddf74718e7f2764de53a13d892200', 'operator'),
(8, 'map', '1d78dc8ed51214e518b5114fe24490ae', 'operator'),
(10, 'neo@gmail.com', 'cb59608fced567a14b13a6e5c5c8a1d2', 'operator'),
(11, 'golden@gmail.com', 'c773fdef3889bdadbe809f1e8aaeea46', 'operator'),
(12, 'rizal@getfooter.co', '150fb021c56c33f82eef99253eb36ee1', 'user');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `operator` (`id_futsal`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `operator` (`id_futsal`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangan` (`id_lap`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
