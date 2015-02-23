-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2015 pada 16.54
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama_member`, `nama_team`, `lokasi`, `lapangan`, `tgl_booking`, `jam`, `harga`, `gambar`, `id_transaksi`) VALUES
(3, 'ismail adima', 'black team', 'soccer', 'Lapangan B', '2015-02-19', '20.00', '120000', 'konfirmasi1.jpg', 2),
(4, 'ismail adima', 'black team', 'soccer', 'Lapangan B', '2015-02-28', '20.00', '120000', 'konfirmasi11.jpg', 3),
(5, 'yuda hermawan', 'G82', 'djuragan', 'Lapangan 1', '2015-02-19', '07.00', '100000', 'konfirmasi12.jpg', 4),
(6, 'yuda hermawan', 'G82', 'jakal 7', 'Lapangan 3', '2015-02-25', '21.00', '140000', 'konfirmasi13.jpg', 5),
(7, 'yuda hermawan', 'G82', 'djuragan', 'Lapangan 1', '2015-02-24', '17.00', '110000', 'konfirmasi14.jpg', 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lap`, `nama_lap`, `deskripsi`, `pagi`, `siang`, `malam`, `gambar`, `id_futsal`) VALUES
(1, 'lapangan A', 'rumput sintetis', 90000, 100000, 120000, 'lap_soccer.jpg', 1),
(2, 'Lapangan 1', 'rumput sintetis', 80000, 90000, 110000, 'lap_jakal.jpg', 2),
(3, 'Lapangan 2', 'rumput sintetis', 80000, 90000, 120000, 'lap_jakal2.jpg', 2),
(4, 'Lapangan 3', 'AVA Court', 100000, 120000, 140000, 'lap_jakal3.jpg', 2),
(5, 'Lapangan 1', 'rumput sintetis', 100000, 110000, 120000, 'lap_djuragan.jpg', 3),
(6, 'Lapangan B', 'rumput sintetis', 90000, 100000, 120000, 'lap_soccer2.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `first_name`, `last_name`, `id_card`, `ttl`, `team_name`, `address`, `phone`, `id_user`) VALUES
(1, 'yuda', 'hermawan', '12/336932/SV/01885', '1992-11-28', 'G82', 'sendowo G82 Sleman', '+6285747586186', 2),
(2, 'ismail', 'adima', '12/336909/SV/01871', '1994-05-15', 'black team', 'sendowo G82 Sleman', '+628156706780', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_futsal` int(10) NOT NULL AUTO_INCREMENT,
  `nama_futsal` varchar(100) DEFAULT NULL,
  `alamat` text,
  `id_kota` int(10) NOT NULL,
  `no_rek` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('unconfirmed','confirmed') NOT NULL DEFAULT 'unconfirmed',
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_futsal`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_futsal`, `nama_futsal`, `alamat`, `id_kota`, `no_rek`, `phone`, `deskripsi`, `gambar`, `status`, `id_user`) VALUES
(1, 'soccer', 'Jl Kaliurang km 6', 8, '12345', '0274111222', 'Buka dari jam 07.00 - 22.00', 'soccer.jpg', 'confirmed', 4),
(2, 'jakal 7', 'Jl kaliurang km 7', 20, '12345', '0274111333', 'Buka dari jam 07.00 - 22.00', 'jakal7.jpg', 'confirmed', 5),
(3, 'djuragan', 'Jl Pandega Martha no.55', 46, '12345', '0274111444', 'Buka dari jam 07.00 - 22.00', 'djuragan.jpg', 'confirmed', 6);

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
  `jam` varchar(100) DEFAULT NULL,
  `harga` int(10) NOT NULL,
  `status` enum('waiting','booked') NOT NULL DEFAULT 'waiting',
  `nama_team` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_futsal` (`id_futsal`),
  KEY `id_lapangan` (`id_lapangan`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_futsal`, `id_lapangan`, `id_member`, `tgl_booking`, `jam`, `harga`, `status`, `nama_team`) VALUES
(2, 1, 6, 2, '2015-02-19', '20.00', 120000, 'booked', 'black team'),
(3, 1, 6, 2, '2015-02-28', '20.00', 120000, 'booked', 'black team'),
(4, 3, 5, 1, '2015-02-19', '07.00', 100000, 'booked', 'G82'),
(5, 2, 4, 1, '2015-02-25', '21.00', 140000, 'waiting', 'G82'),
(6, 3, 5, 1, '2015-02-24', '17.00', 110000, 'waiting', 'G82');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'superadmin', '37a5b2d8e26b07f0aca7fe5bff9eec01', 'admin'),
(2, 'yuda.hermawan@mail.ugm.ac.id', 'ac9053a8bd7632586c3eb663a6cf15e4', 'user'),
(3, 'ismail.adima@mail.ugm.ac.id', 'f3b32717d5322d7ba7c505c230785468', 'user'),
(4, 'soccer@gmail.com', 'da443a0ad979d5530df38ca1a74e4f80', 'operator'),
(5, 'jakal7@gmail.com', 'e47ca3f126b8167245542455c9034804', 'operator'),
(6, 'djuragan@gmail.com', '5c75760a7a8815e24f99525891f48883', 'operator');

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
