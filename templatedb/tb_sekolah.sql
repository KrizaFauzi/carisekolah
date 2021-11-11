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
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_sekolah` varchar(60) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `jurusan` varchar(1000) NOT NULL,
  `no_sekolah` varchar(25) NOT NULL,
  `gambar_1` varchar(250) NOT NULL,
  `gambar_2` varchar(250) NOT NULL,
  `gambar_3` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ofc_web` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `maps` varchar(250) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `senin` varchar(20) NOT NULL,
  `selasa` varchar(20) NOT NULL,
  `rabu` varchar(20) NOT NULL,
  `kamis` varchar(20) NOT NULL,
  `jumat` varchar(20) NOT NULL,
  `sabtu` varchar(20) NOT NULL,
  `minggu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `user_id`, `nama_sekolah`, `kategori`, `jurusan`, `no_sekolah`, `gambar_1`, `gambar_2`, `gambar_3`, `logo`, `email`, `ofc_web`, `deskripsi`, `alamat`, `maps`, `provinsi`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(94, 15, 'SMKN 8 Malang', '', 'Elin,RPL,TKJ,Mekatronika', '0812 1678 7339', '6189af0168fa8.png', '6189af01696f7.jpeg', '6189af0169971.jpg', '6189af0169c1a.png', 'kriz4nafis@gmail.com', 'https://www.smkn8malang.sch.id/', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\n', 'Jl teluk pacitan', 'https://www.google.com/maps/d/embed?mid=1vaQW9tRWbCdhzm8qJHAo2EsEMig&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=-7.932245%2C112.6581&amp;spn=0.025503%2C0.047121&amp;z=14&amp;output=embed', 'Jawa Timur', '12', '12', '12', '12', '12', '12', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD CONSTRAINT `tb_sekolah_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `loginmulti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
