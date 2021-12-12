-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 05:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstudentgrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccounts`
--

CREATE TABLE `tbluseraccounts` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_email` varchar(255) NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` text NOT NULL,
  `account_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccounts`
--

INSERT INTO `tbluseraccounts` (`account_id`, `account_name`, `account_email`, `account_username`, `account_password`, `account_type`) VALUES
(1, 'test', 'test@test.com', 'test', '$2y$10$a4335R5fbBuanNsD7G59EeAp.4OJ5y2lFvX.aHBYKg3TxysJn0Npy', 'test'),
(2, 'john doe', 'johndoe@email.com', 'johndoe', '$2y$10$pwyonzUNXuwDhUCpwh7Z5Ot5F0tvZnUlfCaNPbf7u0d9xVjHyHJBO', 'administrator');

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
