-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 09:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgradingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `class_id` int(11) NOT NULL,
  `class_code` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_desc` varchar(255) NOT NULL,
  `inst_code` int(11) NOT NULL,
  `class_inst` varchar(255) NOT NULL,
  `class_level` varchar(255) NOT NULL,
  `class_ay` varchar(255) NOT NULL,
  `class_day` varchar(255) NOT NULL,
  `class_time` varchar(255) NOT NULL,
  `class_room` varchar(255) NOT NULL,
  `class_section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`class_id`, `class_code`, `class_name`, `class_desc`, `inst_code`, `class_inst`, `class_level`, `class_ay`, `class_day`, `class_time`, `class_room`, `class_section`) VALUES
(7, 12345, 'Advanced Math', 'Mathematics Made Easy', 111, 'Jimmy Nickelson Cricket', 'Grade 12', '2021-2022', '', '', '', ''),
(8, 42345, 'Eloquent English', 'Eloquent English 101', 111, 'Jimmy Nickelson Cricket', 'Grade 11', '2022-2023', '', '', '', ''),
(19, 133576, 'Hiragana 101', 'Foreign Languages 1', 1152, 'Maya Willis Hawke', 'Grade  10', '2021-2022', '', '', '', ''),
(20, 133575, 'Hangul 101', 'Foreign Languages 1', 1152, 'Maya Willis Hawke', 'Grade 11', '2021-2022', '', '', '', ''),
(21, 5135, 'JavaScript Essentials', 'Web Development 101', 36256, 'Henry Gesault Fabien', 'Grade 12', '2021-2022', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `course_id` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`course_id`, `course_code`, `course_name`, `course_desc`) VALUES
(1, 1234, 'Grade 12', 'Senior High School'),
(2, 2351, 'Grade 11', 'Senior High School'),
(3, 3264, 'Grade  10', 'Junior High School'),
(4, 765345, 'Grade 9', 'Junior High School'),
(5, 53425, 'Grade 8', 'Junior High School'),
(6, 3673, 'Grade 7', 'Junior High School');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `dept_id` int(11) NOT NULL,
  `dept_code` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`dept_id`, `dept_code`, `dept_name`, `dept_desc`) VALUES
(1, 1112, 'CITE Department', 'College Department'),
(2, 1113, 'Lavoxa Publishing', 'College Department'),
(3, 3136, 'CEAS Department', 'College Department');

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructor`
--

CREATE TABLE `tblinstructor` (
  `inst_id` int(11) NOT NULL,
  `inst_code` int(11) NOT NULL,
  `inst_name` varchar(255) NOT NULL,
  `inst_address` varchar(255) NOT NULL,
  `inst_gender` varchar(255) NOT NULL,
  `inst_status` varchar(255) NOT NULL,
  `inst_email` varchar(255) NOT NULL,
  `inst_empstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinstructor`
--

INSERT INTO `tblinstructor` (`inst_id`, `inst_code`, `inst_name`, `inst_address`, `inst_gender`, `inst_status`, `inst_email`, `inst_empstatus`) VALUES
(1, 111, 'Jimmy Nickelson Cricket', 'Alberta, Canada', 'Male', 'Single', 'jimminy.cricket@email.com', 'Contract'),
(2, 1152, 'Maya Willis Hawke', 'Manila, PH', 'Female', 'Single', 'hawke_maya17@email.com', 'Intern'),
(3, 36256, 'Henry Gesault Fabien', 'Paris, France', 'Male', 'Married', 'henry.g.fabien@email.com', 'Part-time');

-- --------------------------------------------------------

--
-- Table structure for table `tblrooms`
--

CREATE TABLE `tblrooms` (
  `room_id` int(11) NOT NULL,
  `room_code` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrooms`
--

INSERT INTO `tblrooms` (`room_id`, `room_code`, `room_name`, `room_desc`) VALUES
(1, 1235, 'Room 404', 'Not Found'),
(2, 1242, 'Room 402', 'Movie Room'),
(3, 1253, 'Room 400', 'Science Room'),
(4, 1265, 'Room 102', 'Principal&#39;s Office'),
(5, 1263, 'Room 107', 'Section A');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `subj_id` int(11) NOT NULL,
  `subj_code` int(11) NOT NULL,
  `subj_name` varchar(255) NOT NULL,
  `subj_desc` varchar(255) DEFAULT NULL,
  `subj_level` varchar(255) NOT NULL,
  `subj_unit` int(11) NOT NULL,
  `subj_ay` varchar(255) NOT NULL,
  `subj_sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`subj_id`, `subj_code`, `subj_name`, `subj_desc`, `subj_level`, `subj_unit`, `subj_ay`, `subj_sem`) VALUES
(1, 12345, 'Advanced Math', 'Mathematics Made Easy', 'Grade 12', 3, '2021-2022', 'First Semester'),
(2, 42345, 'Eloquent English', 'Eloquent English 101', 'Grade 11', 3, '2022-2023', 'First Semester'),
(3, 133575, 'Hangul 101', 'Foreign Languages 1', 'Grade 11', 2, '2021-2022', 'Second Semester'),
(4, 133576, 'Hiragana 101', 'Foreign Languages 1', 'Grade  10', 2, '2021-2022', 'First Semester'),
(5, 5135, 'JavaScript Essentials', 'Web Development 101', 'Grade 12', 3, '2021-2022', 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccounts`
--

CREATE TABLE `tbluseraccounts` (
  `account_id` int(11) NOT NULL,
  `account_firstname` varchar(255) NOT NULL,
  `account_lastname` varchar(255) NOT NULL,
  `account_email` varchar(255) NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` text NOT NULL,
  `account_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccounts`
--

INSERT INTO `tbluseraccounts` (`account_id`, `account_firstname`, `account_lastname`, `account_email`, `account_username`, `account_password`, `account_type`) VALUES
(1, 'john', 'doe', 'johndoe@email.com', 'johndoe', '$2y$10$wLfQvh7osizhE2lh3MSCaupBaqrHLgesPNMamHTmkQ5/CZvQLSc6S', 'Administrator'),
(2, 'jane', 'doe', 'jane.doe@email.com', 'janedoe', '$2y$10$8exZgPMoCHdyXMZx97HcE.Ks.nGKNGvXaLh6oAa1W8qpT38OEMySS', 'Registrar'),
(3, 'Michael', 'Stallenhaag', 'stallenhaag.michael@email.com', 'Stallen72', '$2y$10$j3N1Jt4khfkjPJOhO239feXuvValyqz0FXb1YUTiuNxsJI9ol2Qzm', 'Course In-charge'),
(4, 'test', 'test', 'test@email.com', 'test', '$2y$10$L2R1hdWowC5VfE553i2UsO//KWSBJLOHKTz93IgK.90dT7mTBrp/2', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tblyear`
--

CREATE TABLE `tblyear` (
  `ay_id` int(11) NOT NULL,
  `ay_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblyear`
--

INSERT INTO `tblyear` (`ay_id`, `ay_name`) VALUES
(1, '2021-2022'),
(2, '2022-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  ADD PRIMARY KEY (`inst_id`);

--
-- Indexes for table `tblrooms`
--
ALTER TABLE `tblrooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`subj_id`);

--
-- Indexes for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tblyear`
--
ALTER TABLE `tblyear`
  ADD PRIMARY KEY (`ay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblrooms`
--
ALTER TABLE `tblrooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblyear`
--
ALTER TABLE `tblyear`
  MODIFY `ay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
