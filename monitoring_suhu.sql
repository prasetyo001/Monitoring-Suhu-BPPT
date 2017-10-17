-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 03:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitoring_suhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `room1`
--

CREATE TABLE IF NOT EXISTS `room1` (
`id` int(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `kelembapan` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `room1`
--

INSERT INTO `room1` (`id`, `suhu`, `kelembapan`, `time`) VALUES
(1, '10', '10', '2017-10-03 07:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `room2`
--

CREATE TABLE IF NOT EXISTS `room2` (
`id` int(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `kelembapan` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room3`
--

CREATE TABLE IF NOT EXISTS `room3` (
`id` int(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `kelebapan` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room4`
--

CREATE TABLE IF NOT EXISTS `room4` (
`id` int(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `kelembapan` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room5`
--

CREATE TABLE IF NOT EXISTS `room5` (
`id` int(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `kelembapan` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room1`
--
ALTER TABLE `room1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room2`
--
ALTER TABLE `room2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room3`
--
ALTER TABLE `room3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room4`
--
ALTER TABLE `room4`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room5`
--
ALTER TABLE `room5`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room1`
--
ALTER TABLE `room1`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room2`
--
ALTER TABLE `room2`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room3`
--
ALTER TABLE `room3`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room4`
--
ALTER TABLE `room4`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room5`
--
ALTER TABLE `room5`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
