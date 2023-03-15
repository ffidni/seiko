-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 05:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seiko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `about_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `type` enum('admin','superadmin') NOT NULL,
  `cabang_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `type`, `cabang_id`, `username`, `email`, `password`) VALUES
(1, 'superadmin', 1, 'ikal', 'realityinaship@gmail.com', 'haikal23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `artikel_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`artikel_id`, `title`, `thumbnail_url`, `description`, `link`, `date`) VALUES
(1, 'Mau Kerja di Jepang? Ini Syarat, Cara, Biaya Hidup', 'cara-kerja-di-jepang.jpg.webp', '<p>test</p>', 'mau-kerja-di-jepang-ini-syarat-cara-biaya-hidup', '2023-03-14 09:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cabang`
--

CREATE TABLE `tb_cabang` (
  `cabang_id` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `alamat_cabang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cabang`
--

INSERT INTO `tb_cabang` (`cabang_id`, `nama_cabang`, `kode_cabang`, `alamat_cabang`) VALUES
(1, 'Tasikmalaya', '001', 'Tasikmalaya'),
(2, 'Banjar', '002', 'Banjar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel`
--

CREATE TABLE `tb_carousel` (
  `carousel_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cover_url` varchar(255) NOT NULL,
  `sub_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_carousel`
--

INSERT INTO `tb_carousel` (`carousel_id`, `title`, `cover_url`, `sub_title`) VALUES
(1, 'Gimana sih caranya kalau mau kerja di Jepang?', '/assets/images/home1.jpg', 'Yuk MinSei bantu lewat seiko kerja di Jepang mudah sekali nihhh simak ya syaratnya. Mulai tertarik buat cari-cari info seputaran kerja di Jepang? Siniiii, MinSei bantu~ Kamu cukup link'),
(2, 'Rasakan langsung prinsip dan pengalaman kerja di Jepang', '/assets/images/home2.jpg', 'Dibutuhkan segera dengan syarat sudah berpengalaman di bidang tersebut di Jepang! Biaya keberangkatan GRATIS!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `contact_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `course_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `thumbnail_url` text NOT NULL,
  `harga` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_instructor`
--

CREATE TABLE `tb_instructor` (
  `insctructor_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `instagram` varchar(100) NOT NULL DEFAULT 'https://instagram.com',
  `facebook` varchar(100) DEFAULT 'https://facebook.com/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_instructor`
--

INSERT INTO `tb_instructor` (`insctructor_id`, `image_url`, `nama`, `jabatan`, `instagram`, `facebook`) VALUES
(1, '/assets/images/laras.jpeg', 'Laras Retno Ayuprastiwi', 'Pengajar Bahasa Jepang', 'https://www.instagram.com/larasrayup/', 'https://facebook.com'),
(2, '/assets/images/ryan.jpeg', 'Ryan Maulana Ismail', 'Pengajar Bahasa Jepang', 'https://instagram.com', 'https://facebook.com/'),
(3, '/assets/images/bubun.png', 'Bubun Hermawan', 'Pengajar Bahasa Jepang', 'https://instagram.com', 'https://facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `paket_id` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `destinasi` varchar(100) NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`paket_id`, `nama_paket`, `harga_paket`, `destinasi`, `durasi`) VALUES
(1, 'Bahasa Jepang ', 1000000, 'Tasikmalaya', 50),
(2, 'Bahasa Korea', 1000000, 'Korea', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `rekening_id` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `atas_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `service_id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `siswa_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `golongan` enum('A','B','O','AB','Tidak Ada') NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `no_whatsapp` varchar(50) NOT NULL,
  `cabang_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`siswa_id`, `nama`, `nik`, `email`, `golongan`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `umur`, `no_whatsapp`, `cabang_id`, `paket_id`, `username`, `password`) VALUES
(1, 'Muhammad Haikal', '123456789', 'ikal@gmail.com', 'A', 'Laki - Laki', 156, 40, 18, '082130089012', 1, 1, 'indiff', 'haikal23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `tb_cabang`
--
ALTER TABLE `tb_cabang`
  ADD PRIMARY KEY (`cabang_id`);

--
-- Indexes for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tb_instructor`
--
ALTER TABLE `tb_instructor`
  ADD PRIMARY KEY (`insctructor_id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`siswa_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cabang`
--
ALTER TABLE `tb_cabang`
  MODIFY `cabang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_instructor`
--
ALTER TABLE `tb_instructor`
  MODIFY `insctructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
