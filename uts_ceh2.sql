-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 05:19 PM
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
-- Database: `uts_ceh2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(13, 'sdfdv', '23324'),
(14, 'sdfdv', ''),
(15, 'sdfdv', 'halo gntng'),
(16, 'tjendry', 'a'),
(17, 'tjendry', 'a'),
(18, 'tjendry', 'a'),
(19, 'tjendry', 'a'),
(20, 'tjendry', 'a'),
(21, 'tjendry', 'a'),
(22, 'tjendry', 'asdasd'),
(23, 'vania', 'halo'),
(24, 'vania', 'a'),
(26, 'vania', 'flag'),
(27, 'vania', 'a'),
(28, 'vania', 'flag'),
(29, 'vania', 'flag boi'),
(32, 'hacker', 'asds'),
(35, 'hacker', '<a href=\"javascript:alert(document.cookie)\">asd</a>'),
(36, 'hacker', 'as'),
(38, 'hacker', '23'),
(39, 'hacker', '<a href=\"javascript:alert(document.cookie)\">asd</a>');

-- --------------------------------------------------------

--
-- Table structure for table `cupid_arrow`
--

CREATE TABLE `cupid_arrow` (
  `username` varchar(30) NOT NULL,
  `Partner` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cupid_arrow`
--

INSERT INTO `cupid_arrow` (`username`, `Partner`) VALUES
('FLAG', 'LOVERAPP{P4174H_45M4R4}');

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
(1, 'Steven Wijaya ', '21', 'L', 'Ku sedang mencari wanita yang bisa joget dititok dengan luwes', 'https://cdn02.indozone.id/re/content/2019/08/14/n0syj5/t_5d53a47868cda.jpg?w=700&q=85'),
(2, 'Madara', '0.5', 'P', 'Analisis kecepatan penjumlahan subarray menggunakan algoritma kadane', 'https://cdn02.indozone.id/re/content/2019/08/14/n0syj5/t_5d53a47868cda.jpg?w=700&q=85'),
(3, 'Va', '80', 'P', 'Pas liat dia langsung basah', 'https://cdn02.indozone.id/re/content/2019/08/14/n0syj5/t_5d53a47868cda.jpg?w=700&q=85');

-- --------------------------------------------------------

--
-- Table structure for table `suka_kamu`
--

CREATE TABLE `suka_kamu` (
  `suka_username` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suka_kamu`
--

INSERT INTO `suka_kamu` (`suka_username`, `username`, `alasan`, `foto`) VALUES
('kimi', 'tepen', 'tau ah pkonya sayang', ''),
('cindy', 'steve', 'ganteng beut', ''),
('vania', 'tjendry', 'LOVERAPP{4ku_svk4_7j3ndry}', 'https://pbs.twimg.com/profile_images/1021180840615657472/EDSxckyD_400x400.jpg'),
('tjendry', 'cindy', 'Kamu manis, lucu, perhatian, cantik lagi hehe', 'https://media-spiceee.net/uploads/content/image/1955689/large_7cecc7c8-1c66-4d96-bb34-092a9d3e18b0.jpg'),
('tjendry', 'vania', 'Hai cantik.. jalan yuk kapan kapan', 'https://pbs.twimg.com/profile_images/1021180840615657472/EDSxckyD_400x400.jpg'),
('tjendry', 'kimi ', 'boleh minta ID mobile legend kamu ? mabar yuk XD', 'https://cdn2.tstatic.net/jogja/foto/bank/images/youtuber-sekaligus-gamer-kimi-hime.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `SID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Username`, `Password`, `image`, `SID`) VALUES
('cindymitchelle@gmail.com', 'cindy', '7815696ecbf1c96e6894b779456d330e', 'wew.jpg', 'Y2luZHk='),
('kimi@gmail', 'kimi', 'aacfa66c7af573977f10b74a0d950c99', '', 'a2ltaQ=='),
('qwe@qwe', 'qwe', '76d80224611fc919a5d54f0ff9fba446', '1584783515033.jpg', 'cXdl'),
('qwe@qweq', 'qwe', '76d80224611fc919a5d54f0ff9fba446', '1584783515033.jpgqwe@qweq', 'cXdl'),
('qweqwe@qwe', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'qweqwe@qwe1584783515033.jpg', 'cXdl'),
('soqi@gmail.com', 'Soqi', 'aec5fc696fbcfebedd3de01028054b40', 'wew.jpg', 'c29xaQ=='),
('steven.wijaya2@student.umn.ac.id', 'hacker', '202cb962ac59075b964b07152d234b70', 'wew.jpg', 'aGFja2Vy'),
('steve_manumpil@gmail.com', 'qwerskui', '7815696ecbf1c96e6894b779456d330e', 'wew.jpg', 'cXdlcnNrdWk='),
('vania@gmail', 'vania', '081c2ce8528c443cc4be69d4096c9778', 'wew.jpg', 'dmFuaWE='),
('wew@wew', 'tjendry', '121bcca99ff5eef788e729a36bb98954', 'wew.jpg', 'dGplbmRyeQ==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
