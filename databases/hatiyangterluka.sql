-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2018 at 12:23 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hatiyangterluka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(99) COLLATE utf8_swedish_ci NOT NULL,
  `username` varchar(55) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(55) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'mimin.lelah', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `gejalaid` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `gejala` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`gejalaid`, `gejala`) VALUES
('G001', 'Mual'),
('G002', 'Muntah'),
('G003', 'Demam'),
('G004', 'Lemas'),
('G005', 'Feses/tai berwarna pucat '),
('G006', 'Mata dan kulit menjadi kekuningan'),
('G007', 'Nyeri perut'),
('G008', 'Berat badan berubah drastis'),
('G009', 'Perubahan warna urine'),
('G010', 'Kehilangan nafsu makan'),
('G011', 'Letih'),
('G012', 'Pembengkakan'),
('G013', 'Sesak nafas'),
('G014', 'Muntah darah'),
('G015', 'Gatal pada kulit'),
('G016', 'Menggigil'),
('G017', 'Diare'),
('G018', 'Sakit perut bagian kanan atas'),
('G019', 'Nyeri sendi'),
('G020', 'Sulit ereksi'),
('G021', 'Sering buang air kecil'),
('G022', 'Kulit menjadi gelap/permanen'),
('G023', 'Sering merasa haus'),
('G024', 'Napas pendek'),
('G025', 'Nyeri dada'),
('G026', 'Nyeri dada'),
('G027', 'Gagal hati'),
('G028', 'Denyut jantung tidak beraturan'),
('G029', 'Gagal Jantung'),
('G030', 'Penurunan gairah'),
('G031', 'Penyusutan testis');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `penyakitid` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `penyakit` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `penyebab` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `solusi` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`penyakitid`, `penyakit`, `penyebab`, `solusi`) VALUES
('P001', 'Sirosis', 'virus hepatitis B', 'Vaksinasi dan pencegahan'),
('P002', 'Hepatitis b', 'Kondisi auto imun pada tubuh', 'vaksinasi'),
('P003', 'Hemakrotosis', 'Hepcidin menghambat pengangkutan zat besi oleh fer', 'Vaksin'),
('P004', 'Kanker Hati', 'Kerusakan jaringan sel-sel hati', 'vaksinasi'),
('P005', 'Abses Hepar', 'Infeksi Bateri', 'Vaksin');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `rules` int(10) NOT NULL,
  `penyakitid` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `gejalaid` varchar(10) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`rules`, `penyakitid`, `gejalaid`) VALUES
(1, 'P003', 'G001'),
(2, 'P004', 'G001'),
(3, 'P005', 'G002'),
(4, 'P006', 'G002'),
(5, 'P005', 'G002'),
(6, 'P006', 'g003'),
(7, 'P003', 'G003'),
(8, 'P005', 'G003'),
(9, 'P002', 'G004'),
(10, 'P002', 'G005'),
(11, 'P002', 'G006'),
(12, 'P003', 'G006'),
(13, 'P001', 'G007'),
(14, 'P002', 'G007'),
(15, 'P002', 'G008'),
(16, 'P002', 'G008'),
(17, 'P003', 'G008'),
(18, 'P004', 'G008'),
(19, 'P005', 'G008'),
(20, 'P002', 'G009'),
(21, 'P003', 'G009'),
(22, 'P002', 'G010'),
(23, 'P003', 'G010'),
(24, 'P001', 'G011'),
(25, 'P003', 'G011'),
(26, 'P004', 'G011'),
(27, 'P002', 'G012'),
(28, 'P003', 'G012'),
(29, 'P003', 'G013'),
(30, 'P003', 'G014'),
(31, 'P003', 'G015'),
(32, 'P003', 'G016'),
(33, 'P005', 'G016'),
(34, 'P005', 'G017'),
(35, 'P005', 'G018'),
(36, 'P001', 'G019'),
(37, 'P001', 'G020'),
(38, 'P001', 'G021'),
(39, 'P001', 'G022'),
(40, 'P001', 'G023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
 ADD PRIMARY KEY (`gejalaid`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`penyakitid`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
 ADD PRIMARY KEY (`rules`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
