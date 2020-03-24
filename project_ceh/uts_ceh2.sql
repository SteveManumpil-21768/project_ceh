-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 08:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_ceh2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`username`, `comment`) VALUES
('Steven Wijaya', 'Tolong cari kan saya pasangan hidup dong :(');

-- --------------------------------------------------------

--
-- Table structure for table `jodoh`
--

CREATE TABLE `jodoh` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jodoh`
--

INSERT INTO `jodoh` (`id`, `Name`, `Age`, `Gender`, `Description`, `foto`) VALUES
(1, 'Steven Wijaya ', '21', 'Lelaki tak sejati', 'Ku sedang mencari wanita yang bisa joget dititok dengan luwes', 'steven.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Username`, `Password`) VALUES
('djasen@student.umn.ac.id', 'asd', 'asd'),
('wew@wew', 'tjendry', 'tjendry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jodoh`
--
ALTER TABLE `jodoh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jodoh`
--
ALTER TABLE `jodoh`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
