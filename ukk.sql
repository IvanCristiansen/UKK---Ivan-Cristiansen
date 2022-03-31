-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 03:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkomentar`
--

CREATE TABLE `tbkomentar` (
  `id` int(100) NOT NULL,
  `komentar` text NOT NULL,
  `id_komentar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbpost`
--

CREATE TABLE `tbpost` (
  `id` int(100) NOT NULL,
  `hastag` int(100) NOT NULL,
  `text` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpost`
--

INSERT INTO `tbpost` (`id`, `hastag`, `text`, `comment`) VALUES
(23, 0, 'asadads', ''),
(24, 0, 'asda', ''),
(25, 0, 'asda', ''),
(26, 0, 'asda', ''),
(27, 0, 'asda', ''),
(28, 0, 'asda', ''),
(29, 0, 'asda', ''),
(30, 0, 'asda', ''),
(31, 0, 'asda', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbtag`
--

CREATE TABLE `tbtag` (
  `id` int(100) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbtag`
--

INSERT INTO `tbtag` (`id`, `tag`) VALUES
(3, 'cerah'),
(7, 'haloo'),
(8, 'Haloo'),
(9, 'lolll');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `bio`, `img`, `email`, `password`) VALUES
(8, 'Ivan', 'Hallo ,saya ivan', 'aset2.jpg', 'Ivan@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkomentar`
--
ALTER TABLE `tbkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpost`
--
ALTER TABLE `tbpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtag`
--
ALTER TABLE `tbtag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbkomentar`
--
ALTER TABLE `tbkomentar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbpost`
--
ALTER TABLE `tbpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbtag`
--
ALTER TABLE `tbtag`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
