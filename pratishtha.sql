-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 10:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

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
-- Table structure for table `olympus_points_b`
--

CREATE TABLE `olympus_points_b` (
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

--
-- Dumping data for table `olympus_points_b`
--

INSERT INTO `olympus_points_b` (`class`, `cricket`, `football`, `volleyball`, `tabletennis`, `badminton`, `kabaddi`, `tug_of_war`, `carrom`, `chess`, `athletics`, `basketball`, `total`) VALUES
('BE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('council', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `olympus_points_g`
--

CREATE TABLE `olympus_points_g` (
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

--
-- Dumping data for table `olympus_points_g`
--

INSERT INTO `olympus_points_g` (`class`, `tabletennis`, `badminton`, `tug_of_war`, `carrom`, `throwball`, `boxcricket`, `dodgeball`, `chess`, `athletics`, `basketball`, `total`) VALUES
('BE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('council', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('FE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('SE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_CM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_ETC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_EX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TE_IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `olympus_winners`
--

CREATE TABLE `olympus_winners` (
  `sports` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winner_boys` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `runnerup_boys` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winner_girls` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `runnerup_girls` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `olympus_winners`
--

INSERT INTO `olympus_winners` (`sports`, `winner_boys`, `runnerup_boys`, `winner_girls`, `runnerup_girls`) VALUES
('athletics', '', '', '', ''),
('badminton', '', '', '', ''),
('basket_ball', '', '', '', ''),
('box_cricket', '', '', '', ''),
('carrom', '', '', '', ''),
('chess', '', '', '', ''),
('cricket', '', '', '', ''),
('dodge_ball', '', '', '', ''),
('football', '', '', '', ''),
('kabaddi', '', '', '', ''),
('tabletennis', '', '', '', ''),
('throw_ball', '', '', '', ''),
('tug_of_war', '', '', '', ''),
('volleyball', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `olympus_points_b`
--
ALTER TABLE `olympus_points_b`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `olympus_points_g`
--
ALTER TABLE `olympus_points_g`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `olympus_winners`
--
ALTER TABLE `olympus_winners`
  ADD PRIMARY KEY (`sports`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
