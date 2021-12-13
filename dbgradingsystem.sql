-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 11:18 AM
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
(1, 'test', 'test', 'test@test.com', 'test', '$2y$10$a4335R5fbBuanNsD7G59EeAp.4OJ5y2lFvX.aHBYKg3TxysJn0Npy', 'test'),
(2, 'john', 'doe', 'johndoe@email.com', 'johndoe', '$2y$10$pwyonzUNXuwDhUCpwh7Z5Ot5F0tvZnUlfCaNPbf7u0d9xVjHyHJBO', 'administrator'),
(3, 'lance jacob', 'martija', 'lance_jacob_martija@dlsl.edu.ph', 'lance', '$2y$10$R61mCGaaaTWDo7JIJlEsjuE/uhKPGYW3SHBemuM4UIMp6ZKSTqWp2', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
