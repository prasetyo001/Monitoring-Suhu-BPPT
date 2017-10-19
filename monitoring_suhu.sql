-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 09:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_suhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `room1`
--

CREATE TABLE `room1` (
  `id` int(100) NOT NULL,
  `kd_room` char(5) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `kelembapan` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room1`
--

INSERT INTO `room1` (`id`, `kd_room`, `suhu`, `kelembapan`, `time`) VALUES
(1, '2', '10', '10', '2017-10-19 06:59:32'),
(2, '1', '23', '56', '2017-10-19 06:59:32'),
(3, '3', '22', '57', '2017-10-19 06:59:33'),
(4, '4', '20', '56', '2017-10-19 07:04:41'),
(5, '5', '23', '56', '2017-10-19 07:04:41'),
(6, '3', '21', '58', '2017-10-19 07:04:41'),
(7, '1', '23', '59', '2017-10-19 07:04:41'),
(8, '2', '21', '59', '2017-10-19 07:04:41'),
(9, '5', '23', '55', '2017-10-19 07:04:41'),
(10, '3', '24', '58', '2017-10-19 07:04:41'),
(11, '2', '24', '60', '2017-10-19 07:04:41'),
(12, '5', '23', '59', '2017-10-19 07:04:41'),
(13, '2', '23', '67', '2017-10-19 07:04:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room1`
--
ALTER TABLE `room1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room1`
--
ALTER TABLE `room1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
