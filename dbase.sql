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

CREATE TABLE if not exists `classroom` (
  `classroomid` int AUTO_INCREMENT PRIMARY KEY,
  `classroom_no` varchar(255) NOT NULL,
  `classroom_dept` varchar(255) NOT NULL,
  `classroom_desc` varchar(255) NOT NULL,
  `classroom_no_seat` int NOT NULL,
  `classroom_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 
-- Set the column 'classroom_no' to be unique
Alter Table classroom Add Unique( classroom_no ) ;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroomid`, `classroom_no`, `classroom_dept`, `classroom_desc`, `classroom_no_seat`, `classroom_type`) VALUES
(null, 'B305', 'CSIE', 'Introduction to Computer Science', 0, 1),
(null, 'A331', 'CSIE', 'Data Structures', 0, 0),
(null, 'A337', 'CSIE', 'Introductory Machine Learning', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE if not exists `subject` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,  
  `number` varchar(255) NOT NULL,
  `credit` varchar(255),
  `period` int NOT NULL,
  `semester` varchar(255) NOT NULL,
  `groupType` varchar(255),
  `classType` varchar(255),
  `remarks` varchar(255),
  `program` varchar(255)
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 


--
-- Dumping data for table `subject`
--
INSERT INTO `subject` (`id`, `number`, `name`, `classType`, `semester` , `remarks`, `period`, `groupType`, `credit`) VALUES
(null, 'AM__10500', 'Calculus (I)', '1', '1A', 'lecture', 3 , 0 , 1),
(null, 'AM__10800', 'Calculus (II)', '1', '1B','', 3 , 1 , 2),
(null, 'PHYS10000', 'General Physics (I)', '1', '1A','', 3 , 3 , 3),
(null, 'PHYS10100', 'General Physics Lab. (I)', '1', '1A', '', 0 ,1, 2),
(null, 'PHYS10200', 'General Physics (II)', '0', '1B', '', 3, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE if not exists `teachers` (
  `teacherid` int AUTO_INCREMENT PRIMARY KEY,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_position` varchar(255) NOT NULL,
  `teacher_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 
-- Set the column 'teacher_name' to be unique
Alter Table teachers Add Unique( teacher_name ) ;

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

CREATE TABLE if not exists `users` (
  `userid` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;
-- Set the column 'account' to be unique
Alter Table users Add Unique( account ) ;

--
-- Dumping data for table `users`
--
INSERT INTO `users` (`userid`, `name`, `department`, `account`, `hash`) VALUES
(null, 'main', 'Admin', 'ADMIN', '$2y$10$h7wkUzhVWDnSGmKacADGV.QjEUk8ETh3.WQNn5flHx3M9oYf4xpkK');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE if not exists `course_selection` (
  `id` int PRIMARY KEY AUTO_INCREMENT, 
  `courseName` varchar(255) NOT NULL, 
  `courseNumber` varchar(255) NOT NULL, 
  `credit` varchar(255) NOT NULL, 
  `period` varchar(255) NOT NULL, 
  `semester` varchar(255) NOT NULL, 
  `groupType` varchar(255) NOT NULL, 
  `classType` varchar(255) NOT NULL, 
  `remarks` varchar(255) NOT NULL, 
  `program` varchar(255) NOT NULL, 
  `classroomType` varchar(255) NOT NULL, 
  `studentNumber` varchar(255) NOT NULL,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 

