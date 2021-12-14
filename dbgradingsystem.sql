-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 04:46 PM
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
(1, 1234, 'Grade 12', 12, 'Senior High School'),
(2, 1235, 'Grade 11', 11, 'Senior High School');

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
(1, 1234, 'asdf', 'asdf'),
(2, 1235, 'asdf', 'asdf');

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
(1, 1235, 'asdf', 'qweg'),
(2, 1245, 'sadfadf', 'qradf');

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
(1, 'lance jacob', 'martija', 'lance_jacob_martija@dlsl.edu.ph', 'lance', '$2y$10$l3GCq56wiDjRmIoG8NNwg.lAAf2rq0u/I4ZYa.gFLWnljZCjFlnDq', 'student'),
(2, 'john', 'doe', 'johndoe@email.com', 'johndoe', '$2y$10$gId3Dy5eLbNxFw5KwoRRZOdPzJlRklkMo/a8YJh6w.wl10.Rtiht6', 'registrar'),
(3, 'jane', 'doe', 'jane.doe@email.com', 'janedoe', '$2y$10$vGbDozX0tWVXy64WScPwNunFH3OjoML.Ix1BsqvqnqilpBX2mlrAi', 'encoder'),
(4, 'Tom', 'McDonough', 'TomMD@email.com', 'tom', '$2y$10$5fEwstXRMQDeKhaFTMO5U.fhkGJcw46t1nIitkbSXVKCca9Hjv3Ju', 'administrator');

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
-- Indexes for table `tblrooms`
--
ALTER TABLE `tblrooms`
  ADD PRIMARY KEY (`room_id`);

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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrooms`
--
ALTER TABLE `tblrooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
