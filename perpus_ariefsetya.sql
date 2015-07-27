-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2013 at 10:17 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `perpus_ariefsetya`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE IF NOT EXISTS `daftar_buku` (
  `kode_buku` varchar(100) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`kode_buku`, `nama_buku`, `pengarang`, `kategori`) VALUES
('AST', 'arie', 'arief', 'fiksi'),
('AS', 'arief', 'arief', 'fiksi'),
('ddd', 'sas', 'sas', 'sas');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjam` bigint(100) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(100) NOT NULL,
  `alamat_peminjam` varchar(100) NOT NULL,
  `kode_buku` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `status_member` varchar(100) NOT NULL,
  `tanggal_pinjam` varchar(100) NOT NULL,
  `tanggal_kembali` varchar(100) NOT NULL,
  `buku_kembali` varchar(100) NOT NULL,
  `denda` varchar(100) NOT NULL,
  `status_peminjaman` varchar(100) NOT NULL,
  PRIMARY KEY (`id_peminjam`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjam`, `nama_peminjam`, `alamat_peminjam`, `kode_buku`, `jumlah`, `status_member`, `tanggal_pinjam`, `tanggal_kembali`, `buku_kembali`, `denda`, `status_peminjaman`) VALUES
(34, 'lasdk', 'alskd', 'AST', 12, '1', '2013-05-12', '2013-05-16', '2013-05-30', '14000', 'sudah'),
(33, 'asd', 'aksd', 'AST', 12, '1', '2013-05-17', '2013-05-30', '2013-05-30', '', 'sudah'),
(32, 'rizi', 'jl.condet', 'AS', 1, '0', '9999-09-10', '20122-09-10', '2013-05-30', '', 'sudah'),
(31, 'hgfhgf', 'fdfgd', 'AST', 5, '0', '2013-05-17', '2013-05-16', '2013-05-29', '13000', 'sudah'),
(30, 'aa', 'ff', 'AST', 1, '1', '2013-12-30', '2014-01-01', '2013-06-05', '', 'sudah'),
(29, 'ARIEFDARM', 'jakarta', 'AST', 30, '1', '2013-05-05', '2013-05-16', '2013-05-29', '13000', 'sudah'),
(28, 'arie', 'as', 'AST', 10, '1', '2013-05-23', '2013-05-24', '2013-06-05', '12000', 'sudah'),
(27, 'arie', 'as', 'AST', 20, '1', '2013-04-30', '2013-05-01', '2013-05-23', '22000', 'sudah'),
(26, 'arie', 'as', 'AST', 90, '1', '2013-05-17', '2013-05-18', '2013-05-23', '5000', 'sudah'),
(25, 'arie', 'as', 'AST', 90, '1', '2013-05-17', '2013-05-18', '2013-05-23', '5000', 'sudah'),
(24, 'ar', '100', 'AST', 20, '1', '2013-05-16', '2013-05-18', '2013-05-23', '5000', 'sudah'),
(23, 'arie', 'as', 'AST', 10, '1', '2013-05-23', '2013-05-24', '2013-05-23', '', 'sudah'),
(35, 'asdkj', 'ksajd', 'AST', 10, '1', '2013-05-31', '2013-06-01', '2013-06-01', '', 'sudah'),
(36, 'laskdl', 'lkasdl', 'AST', 10, '1', '2013-12-31', '2013-12-31', '2013-06-01', '', 'sudah'),
(37, 'alskd', 'askd', 'AST', 1, '1', '2013-12-31', '2013-12-31', '2013-06-05', '', 'sudah'),
(38, 'j', 'hg', 'AST', 56, '1', '2013-05-17', '2013-05-18', '2013-06-01', '14000', 'sudah'),
(39, 'jhg', 'jh', 'AST', 20, '1', '2013-06-03', '2013-06-04', '2013-06-05', '1000', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `stok_buku`
--

CREATE TABLE IF NOT EXISTS `stok_buku` (
  `kode_buku` varchar(100) NOT NULL,
  `nomor_rak` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_buku`
--

INSERT INTO `stok_buku` (`kode_buku`, `nomor_rak`, `jumlah`) VALUES
('AST', '25', 3012),
('AS', '2', 90),
('ddd', '9', 900);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `akses`) VALUES
('admin', 'admin', 1),
('user', 'user', 2),
('admin2', 'admin2', 1),
('operator', 'operator', 2);
