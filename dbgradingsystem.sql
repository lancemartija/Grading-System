-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 01:10 PM
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
(1, 1235, 'Grade 11', 11, 'Senior High School');

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
(1, 1112, 'CITE', 'College Department'),
(2, 1113, 'Lavoxa Publishing', 'College Department');

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
(1, 111, 'Jimmy Nickelson Cricket', 'Texas, USA', 'Male', 'Single', 'jimminy.cricket@email.com', 'Full-time'),
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
(2, 1242, 'Room 401', 'Movie Room'),
(3, 1253, 'Room 400', 'Science Room');

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
(1, 1234, 'Eloquent English', 'Eloquent English 101', 3, '2021-2022', 'First Semester'),
(2, 1235, 'Advanced Math', 'Mathematics Made Easy', 1, '2021-2022', 'First Semester');

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
(1, 'lance', 'martija', 'lance_jacob_martija@dlsl.edu.ph', 'lance', '$2y$10$0tJChunvoQfeTjM3qQiwAOKp.aZMGbStJJFpZwVsCmyDiy7mHKX7m', 'Student'),
(2, 'john', 'doe', 'johndoe@email.com', 'johndoe', '$2y$10$wLfQvh7osizhE2lh3MSCaupBaqrHLgesPNMamHTmkQ5/CZvQLSc6S', 'Administrator'),
(3, 'jane', 'doe', 'jane.doe@email.com', 'janedoe', '$2y$10$8exZgPMoCHdyXMZx97HcE.Ks.nGKNGvXaLh6oAa1W8qpT38OEMySS', 'Registrar'),
(4, 'Michael', 'Stallenhaag', 'stallenhaag.michael@email.com', 'Stallen72', '$2y$10$rxUhWXWVUddCzaklKRF.8u2.xx4XrsnYaVmsig5CLQscZcLYQbtaC', 'Administrator');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrooms`
--
ALTER TABLE `tblrooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
