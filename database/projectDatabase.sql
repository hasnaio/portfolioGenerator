-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 10:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliogenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `avatarID` int(11) NOT NULL,
  `avatarName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`avatarID`, `avatarName`) VALUES
(1, 'icons/iconAphrodi.png'),
(2, 'icons/iconB2.png'),
(3, 'icons/iconL.png'),
(4, 'icons/iconShoto.png');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photoID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `photoName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photoID`, `userID`, `photoName`) VALUES
(26, 23, '69487623_p0.jpg'),
(27, 24, '69487623_p0.jpg'),
(39, 1, 'Konachan.com - 228511 sample.jpg'),
(40, 1, 'NGFh7uK.png'),
(41, 1, 'FROZ2_50.jpg'),
(42, 1, 'be0ed46bc864c1e2687698fd3309579e.jpg'),
(43, 2, 'betcha.png'),
(44, 2, 'lostInElysium.png'),
(45, 2, 'Orbit.png'),
(46, 3, 'etSweetScience.png'),
(47, 3, 'happy.png'),
(48, 3, '76c461b43bf781f487ddcb7578af23db.jpg'),
(49, 3, 'ac858d99656fdb4ab530a63c7c0605f3.jpg'),
(50, 4, 'EcX8jvPUcAAO3JQ.jpeg'),
(51, 4, 'EYEYG9AUEAAXD4R.jpeg'),
(52, 4, 'EbS13r5U0AAMNIR.jpeg'),
(53, 4, 'EbNEDdQUMAE9Scj.jpeg'),
(54, 4, 'EXaaW_iUEAQZTT7.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `professionID` int(11) NOT NULL,
  `professionName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`professionID`, `professionName`) VALUES
(1, 'Photographer'),
(2, 'Illustrator'),
(3, 'Graphics Designer'),
(4, 'Web Designer'),
(5, 'Artist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `displayname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `professionID` int(50) NOT NULL,
  `avatarID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `displayname`, `password`, `professionID`, `avatarID`) VALUES
(1, 'wyuklips', 'hasna', 'swandive', 5, 2),
(2, 'csawyou', 'sannya', 'p@$$word', 3, 4),
(3, 'aquabearer', 'aphrodite', 'aquaqua', 4, 1),
(4, 'wattson', 'natalie', 'cryptouwu', 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`avatarID`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photoID`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`professionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `avatarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `professionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
