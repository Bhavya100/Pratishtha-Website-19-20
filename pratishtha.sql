-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2019 at 08:01 AM
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
-- Table structure for table `points_b`
--

CREATE TABLE `points_b` (
  `class` varchar(256) NOT NULL,
  `cricket` int(40) NOT NULL,
  `football` int(40) NOT NULL,
  `volleyball` int(40) NOT NULL,
  `tabletennis` int(40) NOT NULL,
  `badminton` int(40) NOT NULL,
  `kabaddi` int(40) NOT NULL,
  `tug_of_war` int(40) NOT NULL,
  `carrom` int(40) NOT NULL,
  `chess` int(40) NOT NULL,
  `athletics` int(40) NOT NULL,
  `basketball` int(40) NOT NULL,
  `total` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `points_g`
--

CREATE TABLE `points_g` (
  `class` varchar(256) NOT NULL,
  `tabletennis` int(40) NOT NULL,
  `badminton` int(40) NOT NULL,
  `tug_of_war` int(40) NOT NULL,
  `carrom` int(40) NOT NULL,
  `throwball` int(40) NOT NULL,
  `boxcricket` int(40) NOT NULL,
  `dodgeball` int(40) NOT NULL,
  `chess` int(40) NOT NULL,
  `athletics` int(40) NOT NULL,
  `basketball` int(40) NOT NULL,
  `total` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
