-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 06:38 AM
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
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `berita_1` varchar(90) NOT NULL,
  `berita_2` varchar(250) NOT NULL,
  `berita_3` varchar(250) NOT NULL,
  `isi_berita` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `asal`, `berita_1`, `berita_2`, `berita_3`, `isi_berita`) VALUES
(5, 'A', 's', '6183fc42bf690.jpeg', '6183fc42bfa1f.jpeg', '6183fc42bfeda.jpeg', 'Pergantian Kepala SMKN 8 Malang yang ke-6 kalinya terjadi (tepatnya) per tanggal 01 September 2021. Drs. Cone Kustarto Arifin menjabat sebagai Kepala Sekolah selama kurang lebih 1 tahun, kemudian diganti dengan Kepala Sekolah yang baru yakni Drs. H. Moh. Guntur Sayekti, M.Pd. Kepala sekolah adalah seorang pemimpin yang memiliki tugas dan fungsi untuk mengatur agar sekolah dapat berjalan dengan baik dan maksimal. Ia harus mampu untuk melakukan terobosan dalam mengembangkan sekolah yang ia pimpin agar lebih baik dari sebelumnya sehingga visi dan misi sekolah yang telah dirumuskan dapat tercapai. Dalam menjalankan tugas dan fungsi kepemimpinan, kepala sekolah harus mempunyai kemampuan untuk menggerakkan, mengarahkan, membimbing, melindungi, membina, memberi teladan, memberi dorongan, dan memberi bantuan terhadap semua sumber daya manusia yang ada di suatu sekolah sehingga dapat didayagunakan secara maksimal untuk mencapai tujuan yang telah ditetapkan. Terimakasih Pak Cone, Selamat Datang '),
(6, 'w', 'kirja', '61840753b121d.png', '61840753b39fc.jpg', '61840753b3d86.jpg', '123123123'),
(7, 'w', 'kirja', '6184079a7398e.png', '6184079a73c7b.jpg', '6184079a73e94.jpg', 'sadasdasdasda'),
(8, 'w', 'kirja', '618407a0cd277.png', '618407a0cfc47.jpg', '618407a0d0070.jpg', 'sadasdasdasda'),
(9, 'A', 'sa', '618407d46d9aa.jpg', '618407d46f386.jpg', '618407d46f5e1.jpg', 'sdasaddsadsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
