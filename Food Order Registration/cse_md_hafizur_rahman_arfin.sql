-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 07:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` int(11) NOT NULL,
  `first` varchar(1000) NOT NULL,
  `middle` varchar(1000) NOT NULL,
  `last` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `method` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`id`, `first`, `middle`, `last`, `address`, `email`, `contact`, `method`, `type`) VALUES
(1, 'asd', '', '', '', '', '', '', ''),
(2, 'asda', 'a', 'a', '', '', '', '', ''),
(3, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '', ''),
(4, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd'),
(5, '', '', '', '', '', '', 'saab', ''),
(6, 'Md. Hafizur', 'R', 'Arfin', 'Road No.02, House No.01, Block B, Noboday Housing Society.', 'arfin97@gmail.com', '0191347789', 'Bkash', 'Regular'),
(7, '', '', '', '', '', '', 'Bkash', 'Regular'),
(8, '', '', '', '', '', '', 'Bkash', 'Regular'),
(9, '', '', '', '', '', '', 'Bkash', 'Regular'),
(10, '232aa', '', '', '', '', '', 'Bkash', 'Regular'),
(11, '', '', '', '', '', '', 'Bkash', 'Regular'),
(12, '', '', '', '', '', '', 'Bkash', 'Regular'),
(13, 'asd123', '', '', '', '', '', 'Bkash', 'Regular'),
(14, 'asdf332', '', '', '', '', '', 'Bkash', 'Regular'),
(15, 'Md Hafizur', 'R', 'Arfin', 'Road No.02, House No.01, Block B, Noboday Housing Society.', 'arfin97@gmail.com', '199', 'Bkash', 'Regular'),
(16, 'Md Hafizur', 'R', 'Arfin', 'Road No.02, House No.01, Block B, Noboday Housing Society.', 'arfin97@gmail.com', '199', 'Bkash', 'Regular'),
(17, 'Md Hafizur', 'R', 'Arfin', 'Road No.02, House No.01, Block B, Noboday Housing Society.', 'arfin97@gmail.com', '199', 'Bkash', 'Regular'),
(18, 'Md Hafizur', 'R', 'Arfin', 'Road No.02, House No.01, Block B, Noboday Housing Society.', 'arfin97@gmail.com', '199', 'Bkash', 'Regular'),
(19, 'Md Hafizur', 'Rahman', 'Arfin', 'Road No.02, House No.01, Block B, Noboday Housing Society.', 'arfin97@gmail.com', '01716080436', 'Visa', 'Express');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
