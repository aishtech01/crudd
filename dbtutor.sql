-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2017 pada 16.35
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtutor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
`id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('user','administrator') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `password`, `level`) VALUES
(8, 'Bagas Topati', 'Ujicoba', 'administrator'),
(9, 'Putri Mutia', 'Pumut13', 'user'),
(10, 'M Rizadly Fadli Aulia', 'MRFA8', 'user'),
(11, 'Clark', 'cloaking', 'user'),
(12, 'Rakhe Fajar Muntahar', 'RFM13', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
