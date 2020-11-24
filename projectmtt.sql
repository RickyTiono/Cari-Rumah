-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 05:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmtt`
--

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE `properti` (
  `lokasi` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `notlp` int(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`lokasi`, `harga`, `deskripsi`, `notlp`, `foto`) VALUES
('Rungkut, Surabaya, Jawa Timur', 880000000, 'Luas Tanah: 160 m2 | Luas Rumah: 140 m2 | Kamar Tidur: 3 | Kamar Mandi: 3', 812345678, ''),
('Manyar, Surabaya, Jawa Timur', 400000000, 'Luas Tanah: 104 m2 | Luas Rumah: 54 m2 | Kamar Tidur: 2 | Kamar Mandi: 1', 898765432, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`) VALUES
('ricky', '$2y$10$G15HV6.wnUVWVMEgxsvfqelHvIsKybCWmC1TJuTs2Nspm6yYK.2K2'),
('test', '$2y$10$E4hHI5bvr/wXFZrbyF7djuffmL6vM06J0.Cn/m0NWHdS4omzKCNVm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`notlp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `notlp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898765433;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
