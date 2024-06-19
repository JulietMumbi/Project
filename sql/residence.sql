-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 12:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `residence`
--
CREATE DATABASE IF NOT EXISTS `residence` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `residence`;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `Fullname` varchar(50) NOT NULL,
  `employeeid` varchar(50) NOT NULL,
  `TelephoneNo` bigint(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Fullname`, `employeeid`, `TelephoneNo`, `email`) VALUES
('Jane Mwangi', '6123', 721875430, 'janemwangi3@gmail.com'),
('John Gitau', '6056', 723145687, 'johng@gmail.com'),
('Maina Njoroge', '6439', 725489065, 'njorogemai@gmail.com'),
('Nelson Nyatuka', '6570', 745632189, 'nyatuka5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE `employers` (
  `userid` bigint(11) NOT NULL,
  `Fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`userid`, `Fullname`, `email`, `password`) VALUES
(3456, 'Viviane Wangari', 'wangariv@gmail.com', '87621'),
(5674, 'Joy Mbote', 'joymbote@gmail.com', '57890'),
(7865, 'Juliet Mumbi', 'mumbijuliet5@gmail.com', '35420'),
(9851, 'Angel Muthoni', 'angel@gmail.com', '46892');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `studentid` varchar(11) NOT NULL,
  `schoolname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `roomname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `schoolname`, `password`, `roomname`) VALUES
('143576', 'Wilson University', '6734', '573'),
('166071', 'University of Nairobi', '6087', '876'),
('168051', 'Strathmore University', '6051', '329'),
('169081', 'Boma International ', '6104', '234'),
('169389', 'Riara University', '6075', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Fullname`),
  ADD UNIQUE KEY `employeeid` (`employeeid`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`),
  ADD UNIQUE KEY `schoolname` (`schoolname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
