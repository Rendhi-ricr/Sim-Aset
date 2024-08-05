-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2024 at 11:07 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_gedung`
--

CREATE TABLE `t_gedung` (
  `kode_gedung` char(8) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gedung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `keterangan` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_gedung`
--

INSERT INTO `t_gedung` (`kode_gedung`, `nama_gedung`, `keterangan`) VALUES
('GBL100', 'Gedung Belakang', 'auysgdasdg'),
('MAP100', 'Gedung Pasca Sarjana', 'ausdgadsgaksud'),
('REK100', 'Gedung Rektorat', 'uasdgvauvausvdas'),
('SAP100', 'Gedung Fakultas Ilmu Administrasi', 'adasdasdad'),
('SHH100', 'Gedung Fakultas Ilmu Hukum', 'ahsgdagdhas'),
('SIK100', 'Gedung Fakultas Ilmu Komunikasi', 'asdgasd'),
('SKM100', 'Gedung Fakultas Ilmu Komputer', 'akhdbakd'),
('SPD100', 'Gedung Fakultas Keguruan dan Ilmu Pendidikan ', 'aysgdausgdy'),
('SPP100', 'Gedung Fakultas Pertanian', 'asgdashdg');

-- --------------------------------------------------------

--
-- Table structure for table `t_item`
--

CREATE TABLE `t_item` (
  `kode_item` char(8) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_item` text COLLATE utf8mb4_general_ci,
  `keterangan` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_item`
--

INSERT INTO `t_item` (`kode_item`, `id_kategori`, `nama_item`, `keterangan`) VALUES
('AST0001', 1, 'opuoadiauh', 'aiugdlaisaiusgdaisgdasidgaskdj\r\nausydgasudy'),
('AST0002', 1, 'aysgdaus', 'iasogdasidg');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Peralatan Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `t_ruangan`
--

CREATE TABLE `t_ruangan` (
  `kode_ruangan` char(8) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_gedung` char(8) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ruangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `lantai` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_ruangan`
--

INSERT INTO `t_ruangan` (`kode_ruangan`, `kode_gedung`, `nama_ruangan`, `lantai`, `keterangan`) VALUES
('GBL101', 'GBL100', 'adad', '1', 'adasda'),
('REK101', 'REK100', 'Perpustakaan', '1', 'asduygasdu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_gedung`
--
ALTER TABLE `t_gedung`
  ADD PRIMARY KEY (`kode_gedung`);

--
-- Indexes for table `t_item`
--
ALTER TABLE `t_item`
  ADD PRIMARY KEY (`kode_item`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_ruangan`
--
ALTER TABLE `t_ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
