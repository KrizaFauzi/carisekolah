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
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `user_id`, `deskripsi`, `gambar`) VALUES
(3, 16, 'adasdasda', '618c95a06f09e.jpg'),
(5, 22, 'ini namanya percobaan', '618c9ce96f97b.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD CONSTRAINT `tb_profil_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `loginmulti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
