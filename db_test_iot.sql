-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 07:07 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_graph`
--

CREATE TABLE `tbl_graph` (
  `id_graph` int(5) NOT NULL,
  `suhu` int(3) NOT NULL,
  `kelembapan` int(3) NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_graph`
--

INSERT INTO `tbl_graph` (`id_graph`, `suhu`, `kelembapan`, `day`) VALUES
(4001, 20, 50, 'SENIN'),
(4002, 22, 75, 'SELASA'),
(4003, 25, 65, 'RABU'),
(4004, 26, 70, 'KAMIS'),
(4005, 28, 60, 'JUMAT'),
(4006, 26, 80, 'SABTU'),
(4007, 27, 65, 'MINGGU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gudang`
--

CREATE TABLE `tbl_gudang` (
  `id_gudang` int(5) NOT NULL,
  `nama_device` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `massage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gudang`
--

INSERT INTO `tbl_gudang` (`id_gudang`, `nama_device`, `status`, `massage`) VALUES
(3003, 'GARASI', 'OPEN', 'Terbuka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruang1`
--

CREATE TABLE `tbl_ruang1` (
  `id_ruang1` int(5) NOT NULL,
  `nama_device` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `massage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruang1`
--

INSERT INTO `tbl_ruang1` (`id_ruang1`, `nama_device`, `status`, `massage`) VALUES
(1001, 'LAMPU', 'ON1', 'Menyala1'),
(1002, 'KIPAS', 'ON2', 'Menyala2'),
(1003, 'TV', 'ON3', 'Menyala3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruang2`
--

CREATE TABLE `tbl_ruang2` (
  `id_ruang2` int(5) NOT NULL,
  `nama_device` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `massage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruang2`
--

INSERT INTO `tbl_ruang2` (`id_ruang2`, `nama_device`, `status`, `massage`) VALUES
(2001, 'LAMPU', 'ON1', 'Menyala1'),
(2002, 'KIPAS', 'ON2', 'Menyala2'),
(2003, 'TV', 'ON3', 'Menyala3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1001, 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `test_led`
--

CREATE TABLE `test_led` (
  `id_led` int(5) NOT NULL,
  `name_led` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `massage_device` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_led`
--

INSERT INTO `test_led` (`id_led`, `name_led`, `status`, `massage_device`) VALUES
(1001, 'MERAH', 'OFF1', 'Mati1'),
(1002, 'HIJAU', 'OFF2', 'Mati2'),
(1003, 'KUNING', 'OFF3', 'Mati3'),
(1004, 'BIRU', 'OFF4', 'Mati4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_graph`
--
ALTER TABLE `tbl_graph`
  ADD PRIMARY KEY (`id_graph`);

--
-- Indexes for table `tbl_gudang`
--
ALTER TABLE `tbl_gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `tbl_ruang1`
--
ALTER TABLE `tbl_ruang1`
  ADD PRIMARY KEY (`id_ruang1`);

--
-- Indexes for table `tbl_ruang2`
--
ALTER TABLE `tbl_ruang2`
  ADD PRIMARY KEY (`id_ruang2`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `test_led`
--
ALTER TABLE `test_led`
  ADD PRIMARY KEY (`id_led`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_led`
--
ALTER TABLE `test_led`
  MODIFY `id_led` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
