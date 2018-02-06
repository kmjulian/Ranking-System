-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 10:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangayId` int(10) NOT NULL,
  `barangayName` varchar(50) NOT NULL,
  `cityId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangayId`, `barangayName`, `cityId`) VALUES
(1, 'Anos', 1),
(2, 'Bagong Silang', 1),
(3, 'Aplaya', 2),
(4, 'Dila', 2),
(5, 'Alapan', 3),
(6, 'Poblacion', 3),
(7, 'Burol', 4),
(8, 'Fatima', 4),
(9, 'Altura', 5),
(10, 'Batele', 5),
(11, 'Bulacan', 6),
(12, 'Anilao', 6),
(13, 'San Lorenzo', 7),
(14, 'San Pedro', 7),
(15, 'Cangrunaan', 8),
(16, 'San Julian', 8),
(17, 'Ayusan Norte', 9),
(18, 'Ayusan Sur', 9),
(19, 'Ayudante', 10),
(20, 'Bagar', 10),
(21, 'Baay', 11),
(22, 'Bantayan', 11),
(23, 'Alos', 12),
(24, 'Landoc', 12),
(25, 'Chanarian', 13),
(26, 'San Antonio', 13),
(27, 'Panatayan', 14),
(28, 'Uvoy', 14),
(29, 'Aurora', 15),
(30, 'Liwayway', 15),
(31, 'Abbag', 16),
(32, 'San Pedro', 16),
(33, 'Abra', 17),
(34, 'Batal', 17),
(35, 'Bagong Silang', 18),
(36, 'Bangag', 18);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityId` int(10) NOT NULL,
  `cityName` varchar(50) NOT NULL,
  `provinceId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityId`, `cityName`, `provinceId`) VALUES
(1, 'Los Banos', 1),
(2, 'Santa Rosa', 1),
(3, 'Imus', 2),
(4, 'Dasmarinas', 2),
(5, 'Tanauan', 3),
(6, 'Mabini', 3),
(7, 'Laoag', 4),
(8, 'Batac', 4),
(9, 'Vigan', 5),
(10, 'Candon', 5),
(11, 'Lingayen', 6),
(12, 'Alaminos', 6),
(13, 'Basco', 7),
(14, 'Mahatao', 7),
(15, 'Diffun', 8),
(16, 'Maddela', 8),
(17, 'Santiago', 9),
(18, 'Ilagan', 9);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(11) NOT NULL,
  `dept_head` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_head`) VALUES
(1, 'Math', 3),
(2, 'English', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dept_lecturers`
--

CREATE TABLE `dept_lecturers` (
  `dl_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_lecturers`
--

INSERT INTO `dept_lecturers` (`dl_id`, `dept_id`, `lecturer_id`) VALUES
(1, 1, 5),
(2, 1, 6),
(3, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `edu_stage`
--

CREATE TABLE `edu_stage` (
  `edu_stage_id` int(10) NOT NULL,
  `stage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_stage`
--

INSERT INTO `edu_stage` (`edu_stage_id`, `stage`) VALUES
(1, 'Primary Level'),
(2, 'Intermediate Level'),
(3, 'Junior High Level'),
(4, 'Senior High Level');

-- --------------------------------------------------------

--
-- Table structure for table `final_grade_id`
--

CREATE TABLE `final_grade_id` (
  `id` int(10) NOT NULL,
  `final_grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `grade_master`
--

CREATE TABLE `grade_master` (
  `id` int(10) NOT NULL,
  `item` varchar(25) NOT NULL,
  `grade` float NOT NULL,
  `subject` varchar(25) NOT NULL,
  `userId` int(10) NOT NULL,
  `final_grade_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(10) NOT NULL,
  `level` varchar(20) NOT NULL,
  `edu_stage_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `level`, `edu_stage_id`) VALUES
(1, 'Grade 1', 1),
(2, 'Grade 2', 1),
(3, 'Grade 3', 1),
(4, 'Grade 4', 1),
(5, 'Grade 5', 2),
(6, 'Grade 6', 2),
(7, 'Grade 7', 2),
(8, 'Grade 8', 3),
(9, 'Grade 9', 3),
(10, 'Grade 10', 3),
(11, 'Grade 11', 4),
(12, 'Grade 12', 4);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `provinceId` int(10) NOT NULL,
  `provinceName` varchar(50) NOT NULL,
  `regionId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`provinceId`, `provinceName`, `regionId`) VALUES
(1, 'Laguna', 1),
(2, 'Cavite', 1),
(3, 'Batangas', 1),
(4, 'Ilocos Norte', 2),
(5, 'Ilocos Sur', 2),
(6, 'Pangasinan', 2),
(7, 'Batanes', 3),
(8, 'Quirino', 3),
(9, 'Isabela', 3);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `regionId` int(10) NOT NULL,
  `regionName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`regionId`, `regionName`) VALUES
(1, 'Region 4b'),
(2, 'Region 1'),
(3, 'Region 2');

-- --------------------------------------------------------

--
-- Table structure for table `regkey`
--

CREATE TABLE `regkey` (
  `regkeyId` int(10) NOT NULL,
  `regkey` char(5) NOT NULL,
  `regkey_used` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `regkey`
--

INSERT INTO `regkey` (`regkeyId`, `regkey`, `regkey_used`) VALUES
(1, 'lu2OK', 'n'),
(2, '1Qiln', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleId` int(10) NOT NULL,
  `rolename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `rolename`) VALUES
(1, 'admin'),
(2, 'instructor'),
(3, 'student'),
(4, 'department head');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolId` int(10) NOT NULL,
  `schoolName` varchar(50) NOT NULL,
  `barangayId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolId`, `schoolName`, `barangayId`) VALUES
(1, 'Tuntungin-Putho National High School', 1),
(2, 'Los Banos Integrated School', 1),
(3, 'Los Banos National High School', 2),
(4, 'UP Rural High School', 2);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionId` int(10) NOT NULL,
  `sectionname` varchar(15) NOT NULL,
  `capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionId`, `sectionname`, `capacity`) VALUES
(1, 'Seperot', 15),
(2, 'Clawd', 20),
(3, 'Strife', 30),
(4, 'Tipa', 30);

-- --------------------------------------------------------

--
-- Table structure for table `section_adv`
--

CREATE TABLE `section_adv` (
  `sa_id` int(10) NOT NULL,
  `sectionId` int(10) NOT NULL,
  `adv_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_adv`
--

INSERT INTO `section_adv` (`sa_id`, `sectionId`, `adv_Id`) VALUES
(1, 1, 2),
(4, 3, 5),
(5, 2, 6),
(6, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `section_lecturers`
--

CREATE TABLE `section_lecturers` (
  `sl_id` int(10) NOT NULL,
  `sectionId` int(10) NOT NULL,
  `lecturerId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_lecturers`
--

INSERT INTO `section_lecturers` (`sl_id`, `sectionId`, `lecturerId`) VALUES
(2, 1, 5),
(3, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `section_levels`
--

CREATE TABLE `section_levels` (
  `sl_id` int(10) NOT NULL,
  `sectionId` int(10) NOT NULL,
  `level_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `section_levels`
--

INSERT INTO `section_levels` (`sl_id`, `sectionId`, `level_id`) VALUES
(1, 1, 7),
(2, 2, 7),
(3, 3, 7),
(4, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `section_students`
--

CREATE TABLE `section_students` (
  `ss_id` int(10) NOT NULL,
  `sectionId` int(10) NOT NULL,
  `studentId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_students`
--

INSERT INTO `section_students` (`ss_id`, `sectionId`, `studentId`) VALUES
(1, 1, 7),
(2, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(15) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `gender`, `address`, `city`, `province`, `zipcode`, `phone_number`, `email`) VALUES
(1, 'vsalfafara', 'pausebreak', 'Von', 'Sogocio', 'Alfafara', 'male', '', '', '', '', '', ''),
(2, 'mmlaureta', 'pausebreak', 'Letty', 'Nasaktan', 'Laureta', 'female', '1', '1', '1', '1', '1', '1'),
(3, 'abrera', 'pausebreak', 'Jenna', 'Oops', 'Abrera', 'female', '1', '1', '1', '1', '1', '1'),
(5, 'verano', 'pausebreak', 'RJ', 'Masyadongmagaling', 'Verano', 'male', '1', '1', '1', '1', '1', '1'),
(6, 'dummy', 'pausebreak', 'name', 'name', 'name', 'male', '1', '1', '1', '1', '1', '1'),
(7, 'phialabs', 'pausebreak', 'Phia', 'Mylabs', 'Alfafara', 'female', '1', '1', '1', '1', '1', '1'),
(8, 'jr', 'pausebreak', 'Josel Ruy', 'Masyadongmagaling', 'Onarev', 'female', '1', '1', '1', '1', '1', '1'),
(9, 'yukari', 'pausebreak', 'Yukari', 'Ririna', 'Nejima', 'male', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `ur_id` int(10) NOT NULL,
  `roleId` int(10) NOT NULL,
  `userId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`ur_id`, `roleId`, `userId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 4, 3),
(4, 2, 5),
(5, 2, 6),
(6, 3, 7),
(7, 3, 8),
(8, 2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangayId`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dept_lecturers`
--
ALTER TABLE `dept_lecturers`
  ADD PRIMARY KEY (`dl_id`);

--
-- Indexes for table `edu_stage`
--
ALTER TABLE `edu_stage`
  ADD PRIMARY KEY (`edu_stage_id`);

--
-- Indexes for table `final_grade_id`
--
ALTER TABLE `final_grade_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_master`
--
ALTER TABLE `grade_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`provinceId`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`regionId`);

--
-- Indexes for table `regkey`
--
ALTER TABLE `regkey`
  ADD PRIMARY KEY (`regkeyId`),
  ADD UNIQUE KEY `regkey` (`regkey`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolId`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionId`);

--
-- Indexes for table `section_adv`
--
ALTER TABLE `section_adv`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `section_lecturers`
--
ALTER TABLE `section_lecturers`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `section_levels`
--
ALTER TABLE `section_levels`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `section_students`
--
ALTER TABLE `section_students`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`ur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dept_lecturers`
--
ALTER TABLE `dept_lecturers`
  MODIFY `dl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `edu_stage`
--
ALTER TABLE `edu_stage`
  MODIFY `edu_stage_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `final_grade_id`
--
ALTER TABLE `final_grade_id`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grade_master`
--
ALTER TABLE `grade_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `regkey`
--
ALTER TABLE `regkey`
  MODIFY `regkeyId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section_adv`
--
ALTER TABLE `section_adv`
  MODIFY `sa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `section_lecturers`
--
ALTER TABLE `section_lecturers`
  MODIFY `sl_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section_levels`
--
ALTER TABLE `section_levels`
  MODIFY `sl_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section_students`
--
ALTER TABLE `section_students`
  MODIFY `ss_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `ur_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
