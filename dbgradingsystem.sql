-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 04:55 PM
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
  `class_name` varchar(255) NOT NULL,
  `class_code` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `inst_code` int(11) NOT NULL,
  `subject_ay` varchar(255) NOT NULL,
  `class_time` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `class_section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `course_id` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_level` int(11) NOT NULL,
  `course_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`course_id`, `course_code`, `course_name`, `course_level`, `course_desc`) VALUES
(1, 1235, 'Grade 11', 11, 'Senior High School'),
(2, 1525, 'Grade 12', 12, 'Senior High School');

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
(2, 1152, 'Maya Willis Hawke', 'Manila, PH', 'Female', 'Single', 'hawke_maya17@email.com', 'Intern');

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
  `subj_unit` int(11) NOT NULL,
  `subj_ay` varchar(255) NOT NULL,
  `subj_sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`subj_id`, `subj_code`, `subj_name`, `subj_desc`, `subj_unit`, `subj_ay`, `subj_sem`) VALUES
(1, 1265, 'Eloquent English', 'Eloquent English 101', 3, '2021-2022', 'First Semester'),
(2, 6353, 'Advanced Math', 'Mathematics Made Easy', 3, '2021-2022', 'First Semester'),
(3, 6213, 'Algebra 101', 'Algebra Made Easy', 3, '2021-2022', 'Second Semster'),
(4, 3111, 'Hangul 101', 'Foreign Languages', 2, '2022-2023', 'Summer');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrooms`
--
ALTER TABLE `tblrooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
