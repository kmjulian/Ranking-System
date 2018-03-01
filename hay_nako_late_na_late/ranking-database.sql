-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 07:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- --------------------------------------------------------

--
-- Table structure for table `school_head`
--
CREATE DATABASE ranking_v2;
use ranking_v2;

CREATE TABLE `school_head` (
  `Head_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `Head_Fname` varchar(20) NOT NULL,
  `Head_Mname` varchar(25) NOT NULL,
  `Head_Lname` varchar(45) NOT NULL,
  `Head_Pnumber` varchar(45) NOT NULL,
  `Head_Gender` varchar(45) NOT NULL,
  `Head_Email` varchar(45) NOT NULL,
  `Head_Lot` varchar(45) NOT NULL,
  `Head_Barangay` varchar(45) NOT NULL,
  `Head_City` varchar(45) NOT NULL,
  `Head_Zip` varchar(45) NOT NULL,
  `Head_Province` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Student_Fname` varchar(20) NOT NULL,
  `Student_Mname` varchar(20) NOT NULL,
  `Student_Lname` varchar(20) NOT NULL,
  `Student_Pnumber` varchar(20) NOT NULL,
  `Student_Gender` varchar(6) NOT NULL,
  `Student_Email` varchar(20) NOT NULL,
  `Student_Lot` varchar(20) NOT NULL,
  `Student_Barangay` varchar(20) NOT NULL,
  `Student_City` varchar(20) NOT NULL,
  `Student_Zip` varchar(20) NOT NULL,
  `Student_Province` varchar(20) NOT NULL,
  `School` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_teacher`
--

CREATE TABLE `subject_teacher` (
  `Teacher_ID` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `Teacher_Fname` varchar(20) NOT NULL,
  `Teacher_Mname` varchar(25) NOT NULL,
  `Teacher_Lname` varchar(11) NOT NULL,
  `Teacher_Pnumber` varchar(10) NOT NULL,
  `Teacher_Gender` varchar(25) NOT NULL,
  `Teacher_Email` varchar(25) NOT NULL,
  `Teacher_Lot` varchar(20) NOT NULL,
  `Teacher_Barangay` varchar(50) NOT NULL,
  `Teacher_City` varchar(30) NOT NULL,
  `Teacher_Zip` varchar(10) NOT NULL,
  `Teacher_Province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_teacher`
--

INSERT INTO `subject_teacher` (`Teacher_ID`, `user_ID`, `Teacher_Fname`, `Teacher_Mname`, `Teacher_Lname`, `Teacher_Pnumber`, `Teacher_Gender`, `Teacher_Email`, `Teacher_Lot`, `Teacher_Barangay`, `Teacher_City`, `Teacher_Zip`, `Teacher_Province`) VALUES
(2, 37, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

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
(37, 'student', '1a1dc91c907325c69271ddf0c944bc72', 'student'),
(38, 'teacher', '1a1dc91c907325c69271ddf0c944bc72', 'teacher'),
(39, 'admin', '1a1dc91c907325c69271ddf0c944bc72', 'admin'),
(40, 'registrar', '1a1dc91c907325c69271ddf0c944bc72', 'registrar'),
(41, 'principal', '1a1dc91c907325c69271ddf0c944bc72', 'principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_head`
--
ALTER TABLE `school_head`
  ADD PRIMARY KEY (`Head_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `user_ID` (`user_id`);

--
-- Indexes for table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_head`
--
ALTER TABLE `school_head`
  MODIFY `Head_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  MODIFY `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `school_head`
--
ALTER TABLE `school_head`
  ADD CONSTRAINT `school_head_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD CONSTRAINT `subject_teacher_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
