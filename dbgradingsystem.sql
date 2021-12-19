-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 11:49 AM
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
(19, 133576, 'Hiragana 101', 'Foreign Languages 1', 1152, 'Maya Willis Hawke', 'Grade  10', '2021-2022', 'MWF', '7:30am-8:30am', 'Room 404', 'Section B'),
(20, 133575, 'Hangul 101', 'Foreign Languages 1', 1152, 'Maya Willis Hawke', 'Grade 11', '2021-2022', '', '', '', ''),
(21, 5135, 'JavaScript Essentials', 'Web Development 101', 36256, 'Henry Gesault Fabien', 'Grade 12', '2021-2022', '', '', '', ''),
(23, 42345, 'Eloquent English', 'Eloquent English 101', 111, 'Jimmy Nickelson Cricket', 'Grade 11', '2022-2023', 'TTH', '4:30pm-5:30pm', 'Room 404', ''),
(25, 234324, 'PHP Essentials', 'Programming Class 1', 36256, 'Henry Gesault Fabien', 'Grade 12', '2022-2023', '', '', '', ''),
(27, 12345, 'Advanced Math', 'Mathematics Made Easy', 111, 'Jimmy Nickelson Cricket', 'Grade 12', '2021-2022', '', '', '', '');

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
-- Table structure for table `tblgrades`
--

CREATE TABLE `tblgrades` (
  `grade_id` int(11) NOT NULL,
  `student_number` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  `subj_code` int(11) NOT NULL,
  `grade_first` int(11) NOT NULL,
  `grade_second` int(11) NOT NULL,
  `grade_third` int(11) NOT NULL,
  `grade_fourth` int(11) NOT NULL,
  `grade_avg` int(11) NOT NULL,
  `grade_remark` varchar(255) NOT NULL,
  `grade_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgrades`
--

INSERT INTO `tblgrades` (`grade_id`, `student_number`, `sy_id`, `subj_code`, `grade_first`, `grade_second`, `grade_third`, `grade_fourth`, `grade_avg`, `grade_remark`, `grade_comment`) VALUES
(1, 234324, 4, 133576, 0, 0, 0, 0, 0, 'test', 'test');

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
-- Table structure for table `tblschoolyear`
--

CREATE TABLE `tblschoolyear` (
  `sy_id` int(11) NOT NULL,
  `sy_ay` varchar(255) NOT NULL,
  `sy_level` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_number` int(11) NOT NULL,
  `sy_category` varchar(255) NOT NULL,
  `sy_enrolldate` date NOT NULL,
  `sy_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblschoolyear`
--

INSERT INTO `tblschoolyear` (`sy_id`, `sy_ay`, `sy_level`, `class_id`, `student_number`, `sy_category`, `sy_enrolldate`, `sy_status`) VALUES
(4, '2021-2022', 'Grade 7', 0, 235324, 'ENROLLED', '2021-12-14', 'Continuing'),
(5, '2022-2023', 'Grade 12', 0, 1234125, 'ENROLLED', '2021-12-22', 'Transferee'),
(6, '2022-2023', 'Grade 11', 0, 1234125, 'ENROLLED', '2021-12-14', 'Transferee'),
(10, '2022-2023', 'Grade 12', 0, 234324, 'ENROLLED', '2021-12-16', 'Transferee'),
(13, '2021-2022', 'Grade  10', 0, 234324, 'ENROLLED', '2021-12-08', 'New Student');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `student_id` int(11) NOT NULL,
  `student_number` int(11) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_mname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_bday` date NOT NULL,
  `student_status` varchar(255) NOT NULL,
  `student_age` int(11) NOT NULL,
  `student_nationality` varchar(255) NOT NULL,
  `student_religion` varchar(255) NOT NULL,
  `student_contact` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_address1` varchar(255) NOT NULL,
  `student_address2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`student_id`, `student_number`, `student_fname`, `student_mname`, `student_lname`, `student_gender`, `student_bday`, `student_status`, `student_age`, `student_nationality`, `student_religion`, `student_contact`, `student_email`, `student_address1`, `student_address2`) VALUES
(1, 1234125, 'Adam', 'Douglas', 'Driver', 'Male', '0000-00-00', 'Married', 38, 'American', 'Christian', '09874587787', 'adam.driver@email.com', 'Los Angeles', 'California, USA'),
(2, 123513, 'Thomas', 'Hendrick', 'Wales', 'Male', '2000-01-01', 'Single', 21, 'British', 'Orthodox Christian', '09558794861', 'thomas_wales93@email.com', 'Brighton', 'England'),
(4, 235324, 'George', 'Trinidad', 'Martinez', 'Male', '2016-12-01', 'Single', 5, 'Mexican', 'Catholic', '09785554872', 'martinez.george@email.com', 'Yucatan, Mexico', ''),
(11, 234324, 'test', 'test', 'test', 'Others', '2021-12-08', 'Single', 3, 'test', 'test', '09987654321', 'test@email.com', 'test', '');

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
(5, 5135, 'JavaScript Essentials', 'Web Development 101', 'Grade 12', 3, '2021-2022', 'Second Semester'),
(6, 234324, 'PHP Essentials', 'Programming Class 1', 'Grade 12', 3, '2022-2023', 'Second Semester');

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
(3, '2022-2023'),
(5, '2023-2024');

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
-- Indexes for table `tblgrades`
--
ALTER TABLE `tblgrades`
  ADD PRIMARY KEY (`grade_id`);

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
-- Indexes for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`student_id`);

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
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
-- AUTO_INCREMENT for table `tblgrades`
--
ALTER TABLE `tblgrades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblyear`
--
ALTER TABLE `tblyear`
  MODIFY `ay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
