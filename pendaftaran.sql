-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 12:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `no_telepon` char(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nilai_raport` float NOT NULL,
  `alamat` text NOT NULL,
  `sekolah_asal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `nik`, `tanggal_lahir`, `jenis_kelamin`, `no_telepon`, `email`, `agama`, `nilai_raport`, `alamat`, `sekolah_asal`) VALUES
(11, 'cassie', '111', '2023-05-09', 'P', '11111', 'cassie@gmail.com', 'ISLAM', 100, 'sby', 'sma 1'),
(12, 'steven', '112', '2023-05-10', 'L', '11112', 'steven@gmail.com', 'KRISTEN', 99, 'jatim', 'sma 2'),
(13, 'glenn', '113', '2004-01-01', 'L', '11113', 'glenn@gmail.com', 'KRISTEN', 89, 'bandung', 'sma 3'),
(14, 'raphael', '114', '2007-08-17', 'L', '11114', 'raphael@gmail.com', 'KATOLIK', 1000, 'jkt', 'sma 1'),
(15, 'bryan', '115', '2023-05-01', 'P', '11115', 'bryan@gmail.com', 'KONGHUCU', 23, 'malang', 'sma 3'),
(16, 'kezia', '116', '2023-01-31', 'P', '11116', 'kezia@gmail.com', 'ISLAM', 11, 'solo', 'sma 3'),
(17, 'michelle', '117', '2023-05-09', 'P', '11117', 'michelle@gmail.com', 'BUDDHA', 67, 'sgp', 'sma 2'),
(18, 'putu', '118', '2023-05-17', 'L', '11118', 'putu@gmail.com', 'HINDU', 11, 'bali', 'sma 4'),
(19, 'cristopher', '119', '2023-05-28', 'L', '', '', 'KATOLIK', 55, 'sby', 'sma 2'),
(20, 'nicholas', '120', '2023-05-26', 'L', '', '', 'ISLAM', 66, '', 'sma 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
