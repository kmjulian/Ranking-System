-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 11:01 AM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `guidance`
--

CREATE TABLE `guidance` (
  `guidance_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `guidance_fname` varchar(20) NOT NULL,
  `guidance_mname` varchar(20) NOT NULL,
  `guidance_lname` varchar(20) NOT NULL,
  `guidance_district` varchar(10) NOT NULL,
  `guidance_address` varchar(50) NOT NULL,
  `guidance_email` varchar(20) NOT NULL,
  `guidance_contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guidance`
--

INSERT INTO `guidance` (`guidance_id`, `user_id`, `school_id`, `guidance_fname`, `guidance_mname`, `guidance_lname`, `guidance_district`, `guidance_address`, `guidance_email`, `guidance_contact`) VALUES
(1, 7, 0, 'Virgilio', 'Clemente', 'Largosa', '3', 'Bangkal', 'virgilio@guidance', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `principal_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `school_id` int(11) NOT NULL,
  `principal_fname` varchar(20) NOT NULL,
  `principal_mname` varchar(20) NOT NULL,
  `principal_lname` varchar(20) NOT NULL,
  `principal_district` varchar(30) NOT NULL,
  `principal_address` varchar(50) NOT NULL,
  `principal_email` varchar(30) NOT NULL,
  `principal_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`principal_id`, `user_id`, `school_id`, `principal_fname`, `principal_mname`, `principal_lname`, `principal_district`, `principal_address`, `principal_email`, `principal_contact`) VALUES
(3, 5, 0, 'Lemuel', 'Bondoc', 'Carisaga', '3', 'Bangkal', 'lemuel@main', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `registrar_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `school_id` int(11) NOT NULL,
  `registrar_fname` varchar(20) NOT NULL,
  `registrar_mname` varchar(20) NOT NULL,
  `registrar_lname` varchar(20) NOT NULL,
  `registrar_district` varchar(30) NOT NULL,
  `registrar_address` varchar(40) NOT NULL,
  `registrar_email` varchar(30) NOT NULL,
  `registrar_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`registrar_id`, `user_id`, `school_id`, `registrar_fname`, `registrar_mname`, `registrar_lname`, `registrar_district`, `registrar_address`, `registrar_email`, `registrar_contact`) VALUES
(2, 6, 5, 'Wyatt', 'Zeus', 'Holgado', '3', 'Bangkal', 'wyatt@main', '2222222');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_contact` varchar(20) NOT NULL,
  `school_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_contact`, `school_address`) VALUES
(5, 'Bangkal Main Elementary School', '1111111', 'Malvar, Bangkal'),
(7, 'Bangkal Elementary School 2', '1111111', 'Lim, Bangkal');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `student_fname` varchar(20) NOT NULL,
  `student_mname` varchar(20) NOT NULL,
  `student_lname` varchar(20) NOT NULL,
  `student_district` varchar(20) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_email` varchar(20) NOT NULL,
  `student_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `user_id`, `school_id`, `student_fname`, `student_mname`, `student_lname`, `student_district`, `student_address`, `student_email`, `student_contact`) VALUES
(1, 9, 0, 'thom', 'ogena', 'llantos', '3', 'bangkal, makati city', 'thomllantos@gmail.co', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `teacher_fname` varchar(20) NOT NULL,
  `teacher_mname` varchar(20) NOT NULL,
  `teacher_lname` varchar(20) NOT NULL,
  `teacher_district` varchar(10) NOT NULL,
  `teacher_address` varchar(50) NOT NULL,
  `teacher_email` varchar(20) NOT NULL,
  `teacher_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `user_id`, `school_id`, `teacher_fname`, `teacher_mname`, `teacher_lname`, `teacher_district`, `teacher_address`, `teacher_email`, `teacher_contact`) VALUES
(1, 8, 0, 'Estrelita', 'Ponce', 'Padillo', '3', 'Cailles, Bangkal', 'esterelita@teacher', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_position`) VALUES
(1, 'district', 'pass', 'district'),
(5, 'main', 'pass', 'Principal'),
(6, 'mainregistrar', 'pass', 'Registrar'),
(7, 'mainguidance', 'pass', 'Guidance'),
(8, 'mainteacher', 'pass', 'Teacher'),
(9, 'mainstudent', 'pass', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`guidance_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`principal_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`registrar_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guidance`
--
ALTER TABLE `guidance`
  MODIFY `guidance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `principal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `registrar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guidance`
--
ALTER TABLE `guidance`
  ADD CONSTRAINT `guidance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `principal`
--
ALTER TABLE `principal`
  ADD CONSTRAINT `principal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `registrar`
--
ALTER TABLE `registrar`
  ADD CONSTRAINT `registrar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
