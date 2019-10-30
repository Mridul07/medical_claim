-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 05:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi_claim`
--

-- --------------------------------------------------------

--
-- Table structure for table `recent_claims`
--

CREATE TABLE `recent_claims` (
  `claim_no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `claim_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_claims`
--

INSERT INTO `recent_claims` (`claim_no`, `username`, `amount`, `date`, `claim_status`) VALUES
(763648, 'Saurabh', 10000, '2018-10-21', 'APPROVED'),
(763649, 'Mridul', 62000, '2018-11-02', 'PENDING'),
(763650, 'Kewal', 30400, '2018-01-18', 'REJECTED'),
(763651, 'John', 186000, '2019-10-17', 'PENDING'),
(763652, 'Smith', 36200, '2019-02-16', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`) VALUES
(1, 'admin123', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recent_claims`
--
ALTER TABLE `recent_claims`
  ADD PRIMARY KEY (`claim_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recent_claims`
--
ALTER TABLE `recent_claims`
  MODIFY `claim_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=763653;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
