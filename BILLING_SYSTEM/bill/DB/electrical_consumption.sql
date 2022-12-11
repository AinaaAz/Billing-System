-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 04:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrical_consumption`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `USERNAME` varchar(50) COLLATE utf16_bin NOT NULL,
  `PASSWORD` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`USERNAME`, `PASSWORD`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `current_reading` int(11) NOT NULL,
  `previous_reading` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `month`, `current_reading`, `previous_reading`, `amount`) VALUES
(46, 'jan21', 6946, 6641, '79.58'),
(48, 'aug21', 675, 345, '92.48'),
(49, 'feb22', 3785, 3446, '97.12'),
(50, 'jan22', 670, 204, '162.66'),
(51, 'apr21', 9493, 6970, '1224.07'),
(52, 'nov21', 72930, 71922, '442.33'),
(53, 'sep21', 67, 27, '8.72'),
(54, 'feb21', 578, 357, '50.61'),
(55, 'mac21', 7890, 4676, '1580.62'),
(56, 'apr21', 456, 265, '41.64'),
(57, 'jun21', 13408, 11345, '986.71'),
(58, 'jul21', 8989, 6689, '1109.00'),
(59, 'sep21', 797, 365, '145.11'),
(60, 'nov21', 3670, 2456, '548.62'),
(62, 'oct21', 64398, 63124, '579.58'),
(63, 'oct21', 128, 64, '13.95'),
(64, 'mac22', 5840, 5460, '118.28'),
(65, 'apr21', 6264, 6155, '23.76'),
(66, 'apr22', 9349, 8904, '151.82'),
(67, 'jun22', 1293, 1002, '73.99'),
(68, 'dec21', 4522, 4464, '12.64'),
(69, 'may21', 12044, 11400, '254.50'),
(70, 'may22', 7577, 5755, '862.35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
