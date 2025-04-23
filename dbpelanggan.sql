-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 02:24 AM
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
-- Database: `dbpelanggan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggannn`
--

CREATE TABLE `tbpelanggannn` (
  `noAntrean` int(30) NOT NULL,
  `layanan` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `noTelepon` varchar(20) NOT NULL,
  `berat` int(50) NOT NULL,
  `paket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpelanggannn`
--

INSERT INTO `tbpelanggannn` (`noAntrean`, `layanan`, `nama`, `alamat`, `noTelepon`, `berat`, `paket`) VALUES
(9, 'Express', 'Mufid', 'Padang, Pisang', '0892312314123', 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpelanggannn`
--
ALTER TABLE `tbpelanggannn`
  ADD PRIMARY KEY (`noAntrean`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpelanggannn`
--
ALTER TABLE `tbpelanggannn`
  MODIFY `noAntrean` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
