-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 05:43 AM
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
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(60) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `no_sekolah` varchar(25) NOT NULL,
  `gambar_1` varchar(250) NOT NULL,
  `gambar_2` varchar(250) NOT NULL,
  `gambar_3` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ofc_web` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `maps` varchar(250) NOT NULL,
  `provinsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `nama_sekolah`, `kategori`, `no_sekolah`, `gambar_1`, `gambar_2`, `gambar_3`, `logo`, `email`, `ofc_web`, `deskripsi`, `alamat`, `maps`, `provinsi`) VALUES
(30, 'smkn8', 'SMA', '0192012', '617b6c375f1ef.jpg', '617b6c375f6e4.jpg', '617b6c375fc52.jpg', '617b6c376031a.jpg', 'admin@gmail.com', 'https://www.smkn8malang.sch.id/', 'ads', 'jl tlogo joyo', 'https://www.google.com/maps/d/embed?mid=1vaQW9tRWbCdhzm8qJHAo2EsEMig&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=-7.932245%2C112.6581&amp;spn=0.025503%2C0.047121&amp;z=14&amp;output=embed', 'Jawa Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
