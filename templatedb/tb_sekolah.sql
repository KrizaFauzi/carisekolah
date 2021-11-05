-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:13 AM
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
  `jurusan` varchar(250) NOT NULL,
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

INSERT INTO `tb_sekolah` (`id`, `nama_sekolah`, `kategori`, `jurusan`, `no_sekolah`, `gambar_1`, `gambar_2`, `gambar_3`, `logo`, `email`, `ofc_web`, `deskripsi`, `alamat`, `maps`, `provinsi`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(61, 'SMKN 8 Malang', '', 'RPL,TKJ,Mekatronika,kesehatan dan Pekerjaan Sosial,Bisnis dan Manajemen,TKR,Kemaritiman,Pariwisata', '0812 1678 7339', '618343404014a.png', '6183434040571.jpeg', '61834340408b4.jpg', '6183434040b6e.png', 'carisekolah@gmail.com', 'https://www.smkn8malang.sch.id/', 'sad', 'perum bumi mondoroko', 'https://goo.gl/maps/bTb4eJehaBp8hZYA9', 'Jawa Timur', '12', '12', '12', '12', '12', '12', '12'),
(63, 'smpn 7 malang', 'SMA', 'RPL,TKJ,Mekatronika', '0812 1678 7339', '61839273a15ab.jpeg', '61839273a19d0.jpeg', '61839273a1c8c.jpeg', '61839273a1ee2.jpeg', 'kriz4@gmail.com', 'https://www.smkn8malang.sch.id/', 'sad', 'sda', 'sad', 'DI Yogyakarta', '12', 'q12', '1', '2', '12', '1', '12'),
(64, 'smpn 7 malang', 'SMK', 'RPL,TKJ,Mekatronika,Kesehatan dan Pekerjaan Sosial,Bisnis dan Manajemen,TKR,Kemaritiman,Pariwisata', '0812 1678 7339', '6183929cb44cb.jpeg', '6183929cb47c5.jpeg', '6183929cb49e0.jpeg', '6183929cb4bcf.jpeg', 'kriza@gmail.com', 'https://www.smkn8malang.sch.id/', '321', '132', '213', 'Jawa Tengah', '132', '123', '123', '123', '123', '123', '123'),
(65, 'SMAN 8 Malang', 'SMK', 'RPL,TKJ,Mekatronika,Kesehatan dan Pekerjaan Sosial,Bisnis dan Manajemen,TKR,Kemaritiman,Pariwisata', '0812 1678 7339', '618392c9ac91d.jpg', '618392c9acc42.jpg', '618392c9acebe.jpg', '618392c9ad113.png', 'admin@gmail.com', 'sad', 'dsa', 'perum bumi mondoroko', 'https://goo.gl/maps/bTb4eJehaBp8hZYA9', 'Bengkulu', '12', '12', '12', '12', '21', '12', '12');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
