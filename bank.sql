-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 11:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `balance` int(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`sno`, `name`, `email`, `balance`, `other`, `dt`) VALUES
(1, 'cz', 'safsd@gmail.com', 653213, 'fsd\r\n\r\n', '2022-01-14 13:48:43'),
(2, 'cz', 'safsd@gmail.com', 653213, 'fsd\r\n\r\n', '2022-01-14 13:50:37'),
(3, 'cz', 'safsd@gmail.com', 653213, 'fsd\r\n\r\n', '2022-01-14 13:51:30'),
(4, 'cz', 'safsd@gmail.com', 653213, 'fsd\r\n\r\n', '2022-01-14 15:18:22'),
(5, 'cz', 'safsd@gmail.com', 653213, 'fsd\r\n\r\n', '2022-01-14 15:19:26'),
(8, 'sdas', 'cds@gmail.com', 65413, 'dadasd', '2022-01-14 15:32:44'),
(9, 'sdas', 'cds@gmail.com', 65413, 'dadasd', '2022-01-14 15:33:42'),
(15, '', '', 0, '', '2022-01-14 15:38:26'),
(16, '', '', 0, '', '2022-01-14 15:42:12'),
(17, '', '', 0, '', '2022-01-14 15:42:31'),
(18, 'Arooj', 'arooj@gmail.com', 53416351, 'Awesome', '2022-01-14 15:47:53'),
(19, 'Arooj', 'arooj@gmail.com', 53416351, 'Awesome', '2022-01-14 15:52:59'),
(20, 'Arooj', 'arooj@gmail.com', 53416351, 'Awesome', '2022-01-14 15:53:22'),
(21, 'Aryaan', 'aryaan@gmail.com', 15313, 'Good', '2022-01-14 15:59:37'),
(22, 'arooj', 'arooj@gmail.com', 4521241, 'fdd', '2022-01-14 16:06:47'),
(23, 'arooj', 'arooj@gmail.com', 4521241, 'fdd', '2022-01-14 16:06:56'),
(24, 'arooj', 'arooj@gmail.com', 4521241, 'fdd', '2022-01-14 16:08:06'),
(25, 'arooj', 'arooj@gmail.com', 4521241, 'fdd', '2022-01-14 16:08:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
