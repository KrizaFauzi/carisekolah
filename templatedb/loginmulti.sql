-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 08:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carisekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginmulti`
--

CREATE TABLE `loginmulti` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginmulti`
--

INSERT INTO `loginmulti` (`id`, `username`, `password`, `gmail`, `level`) VALUES
(15, '12', '123', '12', 'admin'),
(16, 'admin', '123', 'carisekolah12@gmail.com', 'admin'),
(18, 'f', 'f', 'f@gmail.com', 'admin'),
(19, 'developer', 'csdvlpr', 'carisekolah12@gmail.com', 'devoloper'),
(21, 'sy', 'yeye', 'kriznafiubadah55@gmail.com', 'admin'),
(22, 'sdsd', 'sd', 'sd@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginmulti`
--
ALTER TABLE `loginmulti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginmulti`
--
ALTER TABLE `loginmulti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
