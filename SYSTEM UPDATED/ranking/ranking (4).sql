-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 12:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranking`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_position` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_position`) VALUES
(1, 'admin', 'pass', 'admin'),
(2, 'teacher', 'pass', 'teacher'),
(3, 'division', 'pass', 'division'),
(4, 'regional', 'pass', 'regional'),
(5, 'school', 'pass', 'school'),
(6, 'student', 'pass', 'student'),
(8, 'thomas', 'pass', 'Regional'),
(9, 'kyla', 'pass', 'Regional'),
(10, 'kat', 'pass', 'Division'),
(11, 'jhenina', 'pass', 'Division'),
(12, 'marcla', 'pass', 'Division'),
(13, 'dane', 'sag', 'Division'),
(14, 'yesh', 'afa', 'Guidance'),
(15, 'mar', 'gsd', 'Teacher'),
(16, 'nena', 'adsfa', 'Student'),
(17, 'tho', 'gsg', 'Student'),
(18, 'ethyl', 'pass', 'Regional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
