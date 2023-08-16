-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 05:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroomid` int(255) NOT NULL,
  `classroom_no` varchar(255) NOT NULL,
  `classroom_dept` varchar(255) NOT NULL,
  `classroom_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroomid`, `classroom_no`, `classroom_dept`, `classroom_desc`) VALUES
(1, 'C305', 'CSIE', 'Introduction to Computer Science'),
(2, 'A331', 'CSIE', 'Data Structures'),
(3, 'A337', 'CSIE', 'Introductory Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `subject_category` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subject_code`, `subject_title`, `subject_category`, `semester`) VALUES
(6, 'AM__10500', 'Calculus (I)', 'Required', '1A'),
(7, 'AM__10800', 'Calculus (II)', 'Required', '1B'),
(8, 'PHYS10000', 'General Physics (I)', 'Required', '1A'),
(10, 'PHYS10100', 'General Physics Lab. (I)', 'Required', '1A'),
(11, 'PHYS10200', 'General Physics (II)', 'Required', '1B');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherid` int(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_position` varchar(255) NOT NULL,
  `teacher_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherid`, `teacher_name`, `teacher_email`, `teacher_position`, `teacher_department`) VALUES
(1, 'I-CHENG CHANG', 'ICChang@gms.ndhu.edu.tw', 'Chairman, Prof.', 'CSIE'),
(2, 'SHIN-FENG LIN', 'david@gms.ndhu.edu.tw', 'VP, Prof.', 'CSIE'),
(3, 'HWANG, WU-YUIN', 'wyhwang@gms.ndhu.edu.tw', 'Dean, Prof.', 'CSIE'),
(4, 'CHENG-CHIN CHIANG', 'ccchiang@gms.ndhu.edu.tw', 'Vice-Dean, Prof.', 'CSIE'),
(5, 'CHANG-HSIUNG TSAI', 'chtsai@gms.ndhu.edu.tw', 'Prof.', 'CSIE'),
(6, 'CHENN-JUNG HUANG', 'cjhuang@gms.ndhu.edu.tw', 'Prof.', 'CSIE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `department`, `username`, `password`) VALUES
(1, 'main', 'Admin', 'ADMIN', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classroomid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `classroomid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
