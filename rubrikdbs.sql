-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2015 pada 07.09
-- Versi Server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rubrikdbs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `nama_belakang` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `kelamin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `foto_profil` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `aktif` char(1) DEFAULT 'Y',
  `profil_singkat` text,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `password`, `kelamin`, `tgl_lahir`, `agama`, `foto_profil`, `status`, `alamat`, `level`, `aktif`, `profil_singkat`) VALUES
(1, 'Radhifan', 'Hidayat', 'radhifan.hidayat@gmail.com', '12345', 'Pria', '1994-06-01', 'Islam', 'default.jpg', NULL, NULL, NULL, 'Y', NULL),
(2, 'Asdasdad', 'Asdasdasd', 'asdadasdasd@sdasd.com', '123456', 'Pria', '2015-03-28', NULL, 'default.jpg', NULL, NULL, 'MEMBER', 'Y', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
