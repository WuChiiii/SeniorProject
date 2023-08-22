-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 03:38 PM
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
-- Database: `undergraduate_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroomid` int(255) AUTO_INCREMENT PRIMARY KEY,
  `classroom_no` varchar(255) NOT NULL,
  `classroom_dept` varchar(255) NOT NULL,
  `classroom_desc` varchar(255) NOT NULL,
  `classroom_no_seat` int(255) NOT NULL,
  `classroom_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroomid`, `classroom_no`, `classroom_dept`, `classroom_desc`, `classroom_no_seat`, `classroom_type`) VALUES
(null, 'C305', 'CSIE', 'Introduction to Computer Science', 0, 0),
(null, 'A331', 'CSIE', 'Data Structures', 0, 0),
(null, 'A337', 'CSIE', 'Introductory Machine Learning', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(255) AUTO_INCREMENT PRIMARY KEY,
  `subject_code` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `subject_category` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject_no_student` int(255) NOT NULL,
  `subject_classroom_type` varchar(255) NOT NULL,
  `subject_hour` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subject_code`, `subject_title`, `subject_category`, `semester`, `subject_no_student`, `subject_classroom_type`, `subject_hour`) VALUES
(null, 'AM__10500', 'Calculus (I)', 'Required', '1A', 999, 'lecture', 3),
(null, 'AM__10800', 'Calculus (II)', 'Required', '1B', 0, '', 0),
(null, 'PHYS10000', 'General Physics (I)', 'Required', '1A', 0, '', 0),
(null, 'PHYS10100', 'General Physics Lab. (I)', 'Required', '1A', 0, '', 0),
(null, 'PHYS10200', 'General Physics (II)', 'Required', '1B', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherid` int(255) AUTO_INCREMENT PRIMARY KEY,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_position` varchar(255) NOT NULL,
  `teacher_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherid`, `teacher_name`, `teacher_email`, `teacher_position`, `teacher_department`) VALUES
(null, 'I-CHENG CHANG', 'ICChang@gms.ndhu.edu.tw', 'Chairman, Prof.', 'CSIE'),
(null, 'SHIN-FENG LIN', 'david@gms.ndhu.edu.tw', 'VP, Prof.', 'CSIE'),
(null, 'HWANG, WU-YUIN', 'wyhwang@gms.ndhu.edu.tw', 'Dean, Prof.', 'CSIE'),
(null, 'CHENG-CHIN CHIANG', 'ccchiang@gms.ndhu.edu.tw', 'Vice-Dean, Prof.', 'CSIE'),
(null, 'CHANG-HSIUNG TSAI', 'chtsai@gms.ndhu.edu.tw', 'Prof.', 'CSIE'),
(null, 'CHENN-JUNG HUANG', 'cjhuang@gms.ndhu.edu.tw', 'Prof.', 'CSIE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `department`, `username`, `password`) VALUES
(null, 'main', 'Admin', 'ADMIN', 'admin');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
