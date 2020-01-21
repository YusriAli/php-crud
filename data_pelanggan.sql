-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 08:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(11) NOT NULL,
  `kodepelanggan` varchar(3) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text DEFAULT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `nama_sales` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `kodepelanggan`, `kategori`, `nama`, `alamat`, `hp`, `email`, `nama_sales`) VALUES
(1, '01', 'member', 'donoq', 'jl.simaja', '08983110324', 'ali.yusri96@gmail.co', 'sales'),
(2, '02', 'terdaftar', 'dqjhqjdq', 'jl.simaja', '089635165631', 'ali.yusri48@yahoo.co', 'dia'),
(3, '03', 'terdaftar', 'dani', 'jl.adaw', '0896317617', 'ali.gmail.com', 'anggi'),
(5, '04', 'member', 'cindy yupi', 'jl. fx sudirman', '0896445', 'ipuy2@gmail.com', 'sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hp` (`hp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
