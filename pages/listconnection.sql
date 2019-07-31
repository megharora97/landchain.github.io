-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 02:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `list` (
  `client_name` varchar(50) NOT NULL,
  `land_title` varchar(50) NOT NULL,
  `title_type` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `timestamp` timestamp(2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `land_area` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `list` (`client_name`, `land_title`, `title_type`, `address`, `country`, `transaction_id`, `timestamp`, `status`, `land_area`) VALUES
('megha', 'title', 'title', 'address', 'india', 3, '00:00', 'available', 'area');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `list`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
