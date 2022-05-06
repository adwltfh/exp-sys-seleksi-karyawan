-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 05:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seleksi_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biografi`
--

CREATE TABLE `tb_biografi` (
  `id` int(3) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `biografi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biografi`
--

INSERT INTO `tb_biografi` (`id`, `kode`, `biografi`) VALUES
(1, 'BIO001', 'usia'),
(2, 'BIO002', 'domisili'),
(3, 'BIO003', 'ipk'),
(4, 'BIO004', 'pengalaman_kerja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecapakan`
--

CREATE TABLE `tb_kecapakan` (
  `id` int(3) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kecakapan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecapakan`
--

INSERT INTO `tb_kecapakan` (`id`, `kode`, `kecakapan`) VALUES
(1, 'KCP001', 'teori'),
(2, 'KCP002', 'praktik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_seleksi`
--

CREATE TABLE `tb_seleksi` (
  `id` int(3) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `seleksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_seleksi`
--

INSERT INTO `tb_seleksi` (`id`, `kode`, `seleksi`) VALUES
(1, 'KRIT001', 'kecakapan'),
(2, 'KRIT002', 'kepribadian'),
(3, 'KRIT003', 'biografi'),
(4, 'KRIT004', 'wawancara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biografi`
--
ALTER TABLE `tb_biografi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kecapakan`
--
ALTER TABLE `tb_kecapakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_seleksi`
--
ALTER TABLE `tb_seleksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biografi`
--
ALTER TABLE `tb_biografi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kecapakan`
--
ALTER TABLE `tb_kecapakan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_seleksi`
--
ALTER TABLE `tb_seleksi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
