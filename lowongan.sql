-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 08:39 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`) VALUES
(1, 'Hafizh', 'hafizh@yahoo.com', '1234567'),
(2, 'Latifa', 'latifa@yahoo.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `lamar`
--

CREATE TABLE IF NOT EXISTS `lamar` (
  `id_lamar` int(10) unsigned NOT NULL,
  `id_pengguna` int(11) unsigned DEFAULT NULL,
  `id_lowongan` int(11) unsigned DEFAULT NULL,
  `tanggal_lamar` date NOT NULL DEFAULT '0000-00-00',
  `gaji_yang_diharapkan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id_lowongan` int(11) unsigned NOT NULL,
  `nama_lowongan` varchar(50) DEFAULT NULL,
  `id_perusahaan` int(11) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `persyaratan` text,
  `deskripsi` text,
  `tanggal_post` date NOT NULL,
  `tanggal_kedaluwarsa` date NOT NULL,
  `gaji_min` double DEFAULT NULL,
  `gaji_max` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_lowongan`, `id_perusahaan`, `id_provinsi`, `id_posisi`, `persyaratan`, `deskripsi`, `tanggal_post`, `tanggal_kedaluwarsa`, `gaji_min`, `gaji_max`) VALUES
(1, 'Programmer Web', NULL, 3, 1, NULL, 'PT. Mega Central Finance sedang membutuhkan SDM baru untuk mengembangkan sayap usaha di kota-kota besar. PT. Mega Central Finance adalah perusahaan pembiayaan kendaraan bermotor yang merupakan salah satu perusahaan dari kelompok usaha CT CORP yang memiliki beberapa perusahaan dalam sector bisnis lainya, seperti : Bank Mega, Trans TV, Trans 7,Trans Studio,Carrefour, Coffee Bean, Metro. kami membutuhkan karyawan untuk ditempatkan di posisi yang tersebar baik di Kantor Pusat Jakarta dan seluruh Kantor Cabang, dari posisi Staff hingga posisi Managerial. Saat ini kami membutuhkan karyawan untuk posisi sebagai berikut :', '0000-00-00', '0000-00-00', 3000000, 5000000),
(2, 'Programmer Android', NULL, 1, 2, NULL, NULL, '2016-01-26', '2016-02-26', 2500000, 3500000),
(3, 'Programmer Android', 1, 1, 1, NULL, 'PT. Mega Central Finance sedang membutuhkan SDM baru untuk mengembangkan sayap usaha di kota-kota besar. PT. Mega Central Finance adalah perusahaan pembiayaan kendaraan bermotor yang merupakan salah satu perusahaan dari kelompok usaha CT CORP yang memiliki beberapa perusahaan dalam sector bisnis lainya, seperti : Bank Mega, Trans TV, Trans 7,Trans Studio,Carrefour, Coffee Bean, Metro. kami membutuhkan karyawan untuk ditempatkan di posisi yang tersebar baik di Kantor Pusat Jakarta dan seluruh Kantor Cabang, dari posisi Staff hingga posisi Managerial. Saat ini kami membutuhkan karyawan untuk posisi sebagai berikut :', '2016-01-26', '2016-02-26', 1500000, 2500000),
(4, 'Programmer Web', 1, 3, 3, NULL, NULL, '2016-01-26', '2016-02-26', 2500000, 3500000),
(5, 'Admin Jaringan', 2, 3, 3, NULL, NULL, '2016-01-26', '2016-02-26', 4000000, 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) unsigned NOT NULL,
  `nama_pengguna` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `id_provinsi` int(11) DEFAULT NULL,
  `gaji_yang_diharapkan` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email`, `password`, `no_telp`, `alamat`, `id_provinsi`, `gaji_yang_diharapkan`) VALUES
(1, 'Aviroez', 'aviroez@yahoo.com', 'mo6ye4YFdMVx1L8CBS7YgPTpkkhTkr4FmZ85K6hv/pa4DUsXn/zRIytRyHWgL9XWZOIMavM3Ylo002C+S/vgLQ==', '085645858204', 'Jl Dewa', 1, 2000000),
(2, 'Nabila', 'nabila@gmail.com', '123456789', '081232375641', 'Jl. Akhsan', 1, 3000000),
(3, 'Hafizh', 'hafizh@gmail.com', '1nIkhjSWdYlqSmf2oUG9nQrPzgU7BehcLNZrkj4izgRpebV24aihNOxZzLExT+9FO+e5uQlFRHCV8KHjHDv2cQ==', '081342345678', 'Jl. Merak No 9', 1, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `nama_penanggung_jawab` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `id_provinsi` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `nama_penanggung_jawab`, `email`, `password`, `no_telp`, `alamat`, `id_provinsi`) VALUES
(1, 'PT Sejahtera', 'Aji Santoso', 'sejahtera@gmail.com', 'x0SGfTNbcEnVFqkm9csVguhwKIZfsFT9dCEVfKdFBfyFjqXyCJFtpbmqpc/m50FhzAiJYaH2n8EZxhQbih/rAA==', '02154586214', 'Jl. Sawo', 2),
(2, 'PT Sukses', 'Budi Hartono', 'sukses@yahoo.com', 'UsMbeqWwwL+36f1/TkQ1pEA1XNm/62JrY3pHay7jI1TS0ZEDdlfNZdtSU0U2QJ4LdmbNfIOP+u/JaLb70KLooQ==', '085489545623', 'Jl. Diponegoro', 3),
(3, 'PT Abi', 'Abdul Hafizh', 'hafizh@gmail.com', '123456789', '081232375641', 'Jl. Mutiara 12 A', 4),
(4, 'PT Batik', 'Eko Darmayanto', 'eko@gmail.com', '123456789', '089873746523', 'Jl. Cempaka', 3),
(5, 'PT Bunda', 'Joko Susilo', 'joko@gmail.com', '123456789', '081232375633', 'Jl. Pekan Baru', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `id_posisi` int(11) NOT NULL,
  `nama_posisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama_posisi`) VALUES
(2, 'Desainer'),
(3, 'Jaringan'),
(4, 'Manager'),
(1, 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'DI Aceh'),
(4, 'DI Yogyakarta'),
(3, 'DKI Jakarta'),
(2, 'Sumatera Utara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `nama_admin` (`nama_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lamar`
--
ALTER TABLE `lamar`
  ADD PRIMARY KEY (`id_lamar`),
  ADD KEY `FK_lamar_pengguna` (`id_pengguna`),
  ADD KEY `FK_lamar_lowongan` (`id_lowongan`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `FK_lowongan_perusahaan` (`id_perusahaan`),
  ADD KEY `FK_lowongan_provinsi` (`id_provinsi`),
  ADD KEY `FK_lowongan_posisi` (`id_posisi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FK_pengguna_provinsi` (`id_provinsi`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `nama_perusahaan` (`nama_perusahaan`),
  ADD KEY `FK_perusahaan_provinsi` (`id_provinsi`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`),
  ADD UNIQUE KEY `nama_posisi` (`nama_posisi`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`),
  ADD UNIQUE KEY `nama_provinsi` (`nama_provinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lamar`
--
ALTER TABLE `lamar`
  MODIFY `id_lamar` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamar`
--
ALTER TABLE `lamar`
  ADD CONSTRAINT `FK_lamar_lowongan` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_lamar_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `FK_lowongan_perusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_lowongan_posisi` FOREIGN KEY (`id_posisi`) REFERENCES `posisi` (`id_posisi`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_lowongan_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `FK_pengguna_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `FK_perusahaan_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
