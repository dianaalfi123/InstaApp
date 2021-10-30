-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 09:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `qty`, `deskripsi`) VALUES
(1, 'Kipas', 15, 'ready'),
(7, 'kacamata biru', 10, 'not ready'),
(8, 'Kaca Bening', 15, 'ready'),
(10, 'Buku', 21, 'not ready'),
(20, 'kemeja', 6, 'ready'),
(21, 'kancing', 5, 'not ready'),
(22, 'kaus kaki', 7, 'ready'),
(23, 'cincin', 8, 'not ready'),
(24, 'gula', 19, 'ready'),
(25, 'madu', 4, 'ready'),
(26, 'sabuk', 14, 'ready'),
(27, 'sangkar', 9, 'ready'),
(28, 'gitar', 8, 'not ready'),
(29, 'suling', 5, 'ready'),
(30, 'rubik', 10, 'not ready'),
(31, 'gelang', 12, 'ready'),
(32, 'cat tembok', 17, 'ready'),
(33, 'mawar', 18, 'not ready'),
(34, 'melati', 19, 'ready'),
(35, 'anggrek', 25, 'ready');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
