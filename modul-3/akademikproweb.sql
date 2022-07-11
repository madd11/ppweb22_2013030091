-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2022 at 03:52 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademikproweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

DROP TABLE IF EXISTS `krs`;
CREATE TABLE IF NOT EXISTS `krs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mhs_npm` varchar(20) NOT NULL,
  `mk_kode` varchar(20) NOT NULL,
  `sem` enum('GANJIL','GENAP') NOT NULL,
  `ta_id` varchar(20) NOT NULL,
  `nilai` int NOT NULL,
  PRIMARY KEY (`mhs_npm`,`mk_kode`,`sem`,`ta_id`) USING BTREE,
  UNIQUE KEY `id` (`id`),
  KEY `mhs_npm` (`mhs_npm`),
  KEY `mk_kode` (`mk_kode`),
  KEY `ta_id` (`ta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `mhs_npm`, `mk_kode`, `sem`, `ta_id`, `nilai`) VALUES
(1, '2013030001', 'SI002', 'GANJIL', '1001', 89),
(2, '2013030002', 'SI001', 'GANJIL', '1001', 83);

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

DROP TABLE IF EXISTS `mhs`;
CREATE TABLE IF NOT EXISTS `mhs` (
  `npm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `alamat`) VALUES
('2013030001', 'Rahmat Fitra', 'Nganjuk'),
('2013030002', 'Afdholul', 'Kediri'),
('2013030003', 'Alexander', 'Papar'),
('2013030004', 'Andhika', 'Ngronggo');

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

DROP TABLE IF EXISTS `mk`;
CREATE TABLE IF NOT EXISTS `mk` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`kode`, `nama`) VALUES
('SI001', 'Pemograman Web'),
('SI002', 'Basis Data'),
('SI003', 'Etika Profesi');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

DROP TABLE IF EXISTS `ta`;
CREATE TABLE IF NOT EXISTS `ta` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id`, `nama`) VALUES
('1001', '2019/2020'),
('1002', '2020/2021'),
('1003', '2022/2023');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`mhs_npm`) REFERENCES `mhs` (`npm`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`mk_kode`) REFERENCES `mk` (`kode`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_3` FOREIGN KEY (`ta_id`) REFERENCES `ta` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
