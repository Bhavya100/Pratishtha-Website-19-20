-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2019 at 10:02 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pratishtha`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(40) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `cname`, `type`) VALUES
(1, 'fe_c', 'b'),
(2, 'se_c', 'b'),
(3, 'te_c', 'b'),
(4, 'be_c', 'b'),
(5, 'fe_i', 'b'),
(6, 'se_i', 'b'),
(7, 'te_i', 'b'),
(8, 'be_i', 'b'),
(9, 'fe_ex', 'b'),
(10, 'se_ex', 'b'),
(11, 'te_ex', 'b'),
(12, 'be_ex', 'b'),
(13, 'fe_el', 'b'),
(14, 'se_el', 'b'),
(15, 'te_el', 'b'),
(16, 'be_el', 'b'),
(17, 'fe_c', 'g'),
(18, 'se_c', 'g'),
(19, 'te_c', 'g'),
(20, 'be_c', 'g'),
(21, 'fe_i', 'g'),
(22, 'se_i', 'g'),
(23, 'te_i', 'g'),
(24, 'be_i', 'g'),
(25, 'fe_ex', 'g'),
(26, 'se_ex', 'g'),
(27, 'te_ex', 'g'),
(28, 'be_ex', 'g'),
(29, 'fe_el', 'g'),
(30, 'se_el', 'g'),
(31, 'te_el', 'g'),
(32, 'be_el', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(40) NOT NULL,
  `s_id` int(40) NOT NULL,
  `c_id` int(40) NOT NULL,
  `status` varchar(256) NOT NULL,
  `points` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `s_id` int(40) NOT NULL,
  `sname` varchar(580) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`s_id`, `sname`, `type`) VALUES
(1, 'cricket', 'boys'),
(2, 'football', 'boys'),
(3, 'volleyball', 'boys'),
(4, 'tt', 'both'),
(5, 'badminton', 'both'),
(6, 'kabaddi', 'boys'),
(7, 'tug_of_war', 'both'),
(8, 'carrom', 'both'),
(9, 'throwball', 'girls'),
(10, 'box_cricket', 'girls'),
(11, 'dodgeball', 'girls'),
(12, 'chess', 'both'),
(13, 'athletics', 'both'),
(14, 'basketball', 'both');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `c_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `s_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
