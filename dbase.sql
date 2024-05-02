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


-- Table structure for table `classroom`


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
(null, 'A325', 'CSIE', '', 0, 0),
(null, 'A331', 'CSIE', '', 80, 0),
(null, 'A329', 'CSIE', '', 0, 0),
(null, 'A337', 'CSIE', '', 100, 0),
(null, 'B204', 'CSIE', '', 0, 1),
(null, 'B301', 'CSIE', '', 0, 1),
(null, 'B303', 'CSIE', '', 0, 2),
(null, 'B305', 'CSIE', '', 60, 1),
(null, 'C303', 'CSIE', '', 60, 0),
(null, 'C305', 'CSIE', '', 0, 0),
(null, 'C309', 'CSIE', '', 0, 0),
(null, 'E302', 'CSIE', '', 0, 0),
(null, 'E307', 'CSIE', '', 0, 0),
(null, 'D301', 'CSIE', '', 50, 1),
(null, 'D309', 'CSIE', '', 0, 1),
(null, 'E407', 'CSIE', '', 0, 0),
(null, 'B101', 'CSIE', '工二講堂', 0, 0),
(null, 'C101', 'CSIE', '工三講堂', 0, 0),
(null, 'A303', 'CSIE', '工四講堂', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`


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
  `teacher_department` varchar(255) NOT NULL,
  `userid` int DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 
-- Set the column 'teacher_name' to be unique
Alter Table teachers Add Unique( teacher_name ) ;

-- --
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherid`, `teacher_name`, `teacher_email`, `teacher_position`, `teacher_department`,`userid`) VALUES
(null, '張意政', 'ICChang@gms.ndhu.edu.tw', '教授 兼 系主任及理工學院副院長', 'CSIE',2),
(null, '林信鋒', 'david@gms.ndhu.edu.tw', '教授(IEE Fellow) 兼 副校長', 'CSIE',3),
(null, '黃武元', 'wyhwang@gms.ndhu.edu.tw', '教授 兼 理工學院院長', 'CSIE',4),
(null, '江政欽', 'ccchiang@gms.ndhu.edu.tw', '教授', 'CSIE',5),
(null, '蔡正雄', 'chtsai@gms.ndhu.edu.tw', '教授', 'CSIE',6),
(null, '吳秀陽', 'showyang@gms.ndhu.edu.tw', '教授', 'CSIE',7),
(null, '黃振榮', 'cjhuang@gms.ndhu.edu.tw', '教授', 'CSIE',8),
(null, '周世杰', 'scchou@gms.ndhu.edu.tw', '教授', 'CSIE',9),
(null, '楊慶隆', 'cnyang@gms.ndhu.edu.tw', '特聘教授 (IEE Fellow)', 'CSIE',10),
(null, '顏士淨', 'sjyen@gms.ndhu.edu.tw', '特聘教授', 'CSIE',11),
(null, '楊茂村', 'mtyang@gms.ndhu.edu.tw', '教授', 'CSIE',12),
(null, '高韓英', 'teresak@gms.ndhu.edu.tw', '教授 兼 副系主任', 'CSIE',13),
(null, '賴寶蓮', 'baolein@gms.ndhu.edu.tw', '教授', 'CSIE',14),
(null, '紀新洲', 'hcchi@gms.ndhu.edu.tw', '副教授', 'CSIE',15),
(null, '李官陵', 'guanling@gms.ndhu.edu.tw', '副教授', 'CSIE',16),
(null, '羅壽之', 'sclo@gms.ndhu.edu.tw', '副教授', 'CSIE',17),
(null, '陳旻秀', 'mxchen@gms.ndhu.edu.tw', '副教授', 'CSIE',18),
(null, '賴志宏', 'laich@gms.ndhu.edu.tw', '副教授', 'CSIE',19),
(null, '張道顧', 'tkchang@gms.ndhu.edu.tw', '副教授', 'CSIE',20),
(null, '雍忠', 'yung@gms.ndhu.edu.tw', '助理教授', 'CSIE',21),
(null, '簡暐哲', 'wcc@gms.ndhu.edu.tw', '助理教授', 'CSIE',22),
(null, '方文杰', 'wcfang@gms.ndhu.edu.tw', '助理教授', 'CSIE',23),
(null, '張紘睿', 'hjchang@gms.ndhu.edu.tw', '助理教授', 'CSIE',24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--



CREATE TABLE if not exists `users` (
  `userid` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL ,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;
-- Set the column 'account' to be unique
Alter Table users Add Unique( account ) ;
Alter Table users Add Unique( `name` ) ;

-- --
-- -- Dumping data for table `users`
-- --
INSERT INTO `users` (`userid`, `name`, `account`, `hash`, `department`) VALUES
(null, 'main', 'ADMIN', '$2y$10$h7wkUzhVWDnSGmKacADGV.QjEUk8ETh3.WQNn5flHx3M9oYf4xpkK', 'Admin'),
(null, '張意政', 'ICChang@gms.ndhu.edu.tw' , '$2y$10$MeOd2o6lm/FqNefwhOTfxeocDPfos7B7eeN8i.EMXtLCWAtIY6x2q', 'CSIE'),
(null, '林信鋒', 'david@gms.ndhu.edu.tw' , '$2y$10$tr94og6T77PXhFMto774Z.2NHlinnHjIx.6RvMa52I8O2SqwON5IK', 'CSIE'),
(null, '黃武元', 'wyhwang@gms.ndhu.edu.tw', '$2y$10$NWMa423YJtw5JdQ3uTAp1uSJnanGo/ie7HE01UNX00p/92Iv0g38m' , 'CSIE'),
(null, '江政欽', 'ccchiang@gms.ndhu.edu.tw' , '$2y$10$4VFhFmdZbLVMu32NHIJMaOKcUHnNtAKaMrc8S2DxMrOizRLgdF4M2', 'CSIE'),
(null, '蔡正雄', 'chtsai@gms.ndhu.edu.tw' , '$2y$10$Lj22EjIfUcAxkRRZFpz6cO7HPGi2ysSwChpW4fkq2Mtxn7yM.tMiG' , 'CSIE'),
(null, '吳秀陽', 'showyang@gms.ndhu.edu.tw' , '$2y$10$lRduBXPXdS9qiM6fqUUCM.tqkQKcX6MDCz3rbMPUMOfgrdmX1Rc0G' , 'CSIE'),
(null, '黃振榮', 'cjhuang@gms.ndhu.edu.tw' , '$2y$10$O2K9Q381W5EDCw6fBbDmwulLweLHLJFZ5Gs7E1XOcZCBKJEvKMC1O' , 'CSIE'),
(null, '周世杰', 'scchou@gms.ndhu.edu.tw' , '$2y$10$vxX7xzPpz66oQoqUtN967.7pqAiuvJvXt9..vBhW1asJnLvN3c/Q2' , 'CSIE'),
(null, '楊慶隆', 'cnyang@gms.ndhu.edu.tw' , '$2y$10$UTQ1Vt2Zi1moCk2zS4qpMeXpa6M5/Yr65fUsUUiDIG3wT.m0OUfrG' , 'CSIE'),
(null, '顏士淨', 'sjyen@gms.ndhu.edu.tw' , '$2y$10$bEwi9S4Qu6JRHawa8x.aOeN6d1KR7/h2yxQmL7Lmxq24ihbKNMcTq' , 'CSIE'),
(null, '楊茂村', 'mtyang@gms.ndhu.edu.tw' , '$2y$10$LGyTyhVhARKNR3e/4idtlOvxZqgtzBCFgIG.475HZejh.Xn99g5.i' , 'CSIE'),
(null, '高韓英', 'teresak@gms.ndhu.edu.tw' , '$2y$10$cAa623m604W/j.f/5h7gf.3LX/.nxqHT0jCgEkq5Y5J/MyQCOOlBq' , 'CSIE'),
(null, '賴寶蓮', 'baolein@gms.ndhu.edu.tw' , '$2y$10$d./olK0cKxJ6a3.7rIrmQuTM7Vf/r8pkns9mOjV/OoumRyiOa0ulS' , 'CSIE'),
(null, '紀新洲', 'hcchi@gms.ndhu.edu.tw', '$2y$10$ZpfLM.7CWAH186R324dmTuhtgoPN6pujPHrMXqy8EfIe10KT9Wv4G' , 'CSIE'),
(null, '李官陵', 'guanling@gms.ndhu.edu.tw' , '$2y$10$dZrlluB6aM.U.SeMFUXsiO6a/L.6LXzL.Lt80twpI4DH/p/C2cU.u' , 'CSIE'),
(null, '羅壽之', 'sclo@gms.ndhu.edu.tw' , '$2y$10$0/gfRm1hs8faf/OVPSd5Lep7FjXUNBgxBi/56gKRSQ4B.N1rjuyj6' , 'CSIE'),
(null, '陳旻秀', 'mxchen@gms.ndhu.edu.tw' , '$2y$10$tFpRgbr1zlHb.q1NWZasu..XVJWDw9bElrPg9zWREyezMsA9de932' , 'CSIE'),
(null, '賴志宏', 'laich@gms.ndhu.edu.tw' , '$2y$10$sGUkVAuRbcRo016DWrkRSu.Uh5xrNX.xVT0NCKM/Iz50HyU.ZDlY2' , 'CSIE'),
(null, '張道顧', 'tkchang@gms.ndhu.edu.tw' , '$2y$10$3j44trr2EMLeaVN3no7fUesNl8edi6u0I4ISS8ySvF4izevXN26mS' , 'CSIE'),
(null, '雍忠', 'yung@gms.ndhu.edu.tw' , '$2y$10$roKbAPbZzdMuctiry32DYeXtAQGmDCQOrZjVll79Hn0/8S6xxNad.' , 'CSIE'),
(null, '簡暐哲', 'wcc@gms.ndhu.edu.tw', '$2y$10$p2FbenD5Dt/9E1oLP5eldecgoFEcbxpAxF08cSC.sGpeMx5HEkGfu' , 'CSIE'),
(null, '方文杰', 'wcfang@gms.ndhu.edu.tw', '$2y$10$5H5HF.USeG7/peGPKH/o5u7nH09iStzK.LE0VsfF2x.T/Fy0l3OC6' , 'CSIE'),
(null, '張紘睿', 'hjchang@gms.ndhu.edu.tw' , '$2y$10$fZR0Xr1xcftFoS0lLfgx1OnplgP4/KVSmNSX5uEPv9.dEe.mh2Nh' , 'CSIE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE if not exists `course_selection` (
  `id` int PRIMARY KEY AUTO_INCREMENT, 
  `courseName` varchar(255) NOT NULL, 
  `courseNumber` varchar(255) NOT NULL, 
  `credit` varchar(255) NOT NULL, 
  `period` int NOT NULL, 
  `semester` varchar(255) NOT NULL, 
  `groupType` int NOT NULL, 
  `classType` int NOT NULL, 
  `remarks` varchar(255) NOT NULL, 
  `program` varchar(255) NOT NULL, 
  `classroomType` int NOT NULL, 
  `studentNumber` int NOT NULL,
  `teacherid` int NOT NULL,
  `time` varchar(255) NOT NULL,
  `priority` int NOT NULL,
  `classroom` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 

-- --------------------------------------------------------

--
-- Table structure for table `classroomschedule`
--

CREATE TABLE if not exists `classroomschedule` (
   `classroomid` int NOT NULL,
   `1-1` INT DEFAULT 0,`1-2` INT DEFAULT 0,`1-3` INT DEFAULT 0,`1-4` INT DEFAULT 0,`1-5` INT DEFAULT 0,`1-6` INT DEFAULT 0,`1-7` INT DEFAULT 0,
   `1-8` INT DEFAULT 0,`1-9` INT DEFAULT 0,`1-10` INT DEFAULT 0,`1-11` INT DEFAULT 0,`1-12` INT DEFAULT 0,`1-13` INT DEFAULT 0,`1-14` INT DEFAULT 0,
   `1-15` INT DEFAULT 0,`1-16` INT DEFAULT 0,`2-1` INT DEFAULT 0,`2-2` INT DEFAULT 0,`2-3` INT DEFAULT 0,`2-4` INT DEFAULT 0,`2-5` INT DEFAULT 0,
   `2-6` INT DEFAULT 0,`2-7` INT DEFAULT 0,`2-8` INT DEFAULT 0,`2-9` INT DEFAULT 0,`2-10` INT DEFAULT 0,`2-11` INT DEFAULT 0,`2-12` INT DEFAULT 0,
   `2-13` INT DEFAULT 0,`2-14` INT DEFAULT 0,`2-15` INT DEFAULT 0,`2-16` INT DEFAULT 0,`3-1` INT DEFAULT 0,`3-2` INT DEFAULT 0,`3-3` INT DEFAULT 0,
   `3-4` INT DEFAULT 0,`3-5` INT DEFAULT 0,`3-6` INT DEFAULT 0,`3-7` INT DEFAULT 0,`3-8` INT DEFAULT 0,`3-9` INT DEFAULT 0,`3-10` INT DEFAULT 0,
   `3-11` INT DEFAULT 0,`3-12` INT DEFAULT 0,`3-13` INT DEFAULT 0,`3-14` INT DEFAULT 0,`3-15` INT DEFAULT 0,`3-16` INT DEFAULT 0 ,`4-1` INT DEFAULT 0,
   `4-2` INT DEFAULT 0,`4-3` INT DEFAULT 0,`4-4` INT DEFAULT 0,`4-5` INT DEFAULT 0,`4-6` INT DEFAULT 0,`4-7` INT DEFAULT 0,`4-8` INT DEFAULT 0,
   `4-9` INT DEFAULT 0,`4-10` INT DEFAULT 0,`4-11` INT DEFAULT 0,`4-12` INT DEFAULT 0,`4-13` INT DEFAULT 0,`4-14` INT DEFAULT 0,`4-15` INT DEFAULT 0,
   `4-16` INT DEFAULT 0,`5-1` INT DEFAULT 0,`5-2` INT DEFAULT 0,`5-3` INT DEFAULT 0,`5-4` INT DEFAULT 0,`5-5` INT DEFAULT 0,`5-6` INT DEFAULT 0,
   `5-7` INT DEFAULT 0,`5-8` INT DEFAULT 0,`5-9` INT DEFAULT 0,`5-10` INT DEFAULT 0,`5-11` INT DEFAULT 0,`5-12` INT DEFAULT 0,`5-13` INT DEFAULT 0,
   `5-14` INT DEFAULT 0,`5-15` INT DEFAULT 0,`5-16` INT DEFAULT 0
 ) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 


--
-- Dumping data for table `subject`
--
  -- INSERT INTO classroomschedule VALUES ();
  -- INSERT INTO classroomschedule VALUES ();
  -- INSERT INTO classroomschedule VALUES ();
-- --------------------------------------------------------

--
-- Table structure for table `professorschedule`
--

CREATE TABLE if not exists `professorschedule` (
  `professorid` int NOT NULL,
  `1-1` INT DEFAULT 0,`1-2` INT DEFAULT 0,`1-3` INT DEFAULT 0,`1-4` INT DEFAULT 0,`1-5` INT DEFAULT 0,`1-6` INT DEFAULT 0,`1-7` INT DEFAULT 0,
  `1-8` INT DEFAULT 0,`1-9` INT DEFAULT 0,`1-10` INT DEFAULT 0,`1-11` INT DEFAULT 0,`1-12` INT DEFAULT 0,`1-13` INT DEFAULT 0,`1-14` INT DEFAULT 0,
  `1-15` INT DEFAULT 0,`1-16` INT DEFAULT 0,`2-1` INT DEFAULT 0,`2-2` INT DEFAULT 0,`2-3` INT DEFAULT 0,`2-4` INT DEFAULT 0,`2-5` INT DEFAULT 0,
  `2-6` INT DEFAULT 0,`2-7` INT DEFAULT 0,`2-8` INT DEFAULT 0,`2-9` INT DEFAULT 0,`2-10` INT DEFAULT 0,`2-11` INT DEFAULT 0,`2-12` INT DEFAULT 0,
  `2-13` INT DEFAULT 0,`2-14` INT DEFAULT 0,`2-15` INT DEFAULT 0,`2-16` INT DEFAULT 0,`3-1` INT DEFAULT 0,`3-2` INT DEFAULT 0,`3-3` INT DEFAULT 0,
  `3-4` INT DEFAULT 0,`3-5` INT DEFAULT 0,`3-6` INT DEFAULT 0,`3-7` INT DEFAULT 0,`3-8` INT DEFAULT 0,`3-9` INT DEFAULT 0,`3-10` INT DEFAULT 0,
  `3-11` INT DEFAULT 0,`3-12` INT DEFAULT 0,`3-13` INT DEFAULT 0,`3-14` INT DEFAULT 0,`3-15` INT DEFAULT 0,`3-16` INT DEFAULT 0 ,`4-1` INT DEFAULT 0,
  `4-2` INT DEFAULT 0,`4-3` INT DEFAULT 0,`4-4` INT DEFAULT 0,`4-5` INT DEFAULT 0,`4-6` INT DEFAULT 0,`4-7` INT DEFAULT 0,`4-8` INT DEFAULT 0,
  `4-9` INT DEFAULT 0,`4-10` INT DEFAULT 0,`4-11` INT DEFAULT 0,`4-12` INT DEFAULT 0,`4-13` INT DEFAULT 0,`4-14` INT DEFAULT 0,`4-15` INT DEFAULT 0,
  `4-16` INT DEFAULT 0,`5-1` INT DEFAULT 0,`5-2` INT DEFAULT 0,`5-3` INT DEFAULT 0,`5-4` INT DEFAULT 0,`5-5` INT DEFAULT 0,`5-6` INT DEFAULT 0,
  `5-7` INT DEFAULT 0,`5-8` INT DEFAULT 0,`5-9` INT DEFAULT 0,`5-10` INT DEFAULT 0,`5-11` INT DEFAULT 0,`5-12` INT DEFAULT 0,`5-13` INT DEFAULT 0,
  `5-14` INT DEFAULT 0,`5-15` INT DEFAULT 0,`5-16` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; 



--
-- Dumping data for table `subject`
--
-- INSERT INTO professorschedule VALUES ();

CREATE TABLE if not exists `pre1_csie` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre1_csie VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;

CREATE TABLE if not exists `pre2_csie` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre2_csie VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;

CREATE TABLE if not exists `pre3_csie` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre3_csie VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;

CREATE TABLE if not exists `pre4_csie` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre4_csie VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;

CREATE TABLE if not exists `pre1_international` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre1_international VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;

CREATE TABLE if not exists `pre2_international` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre2_international VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;


CREATE TABLE if not exists `pre3_international` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre3_international VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;


CREATE TABLE if not exists `pre4_international` (
  `grade` INT PRIMARY KEY,
  `1-1` INT DEFAULT -1,`1-2` INT DEFAULT -1,`1-3` INT DEFAULT -1,`1-4` INT DEFAULT -1,`1-5` INT DEFAULT -1,`1-6` INT DEFAULT -1,`1-7` INT DEFAULT -1,
  `1-8` INT DEFAULT -1,`1-9` INT DEFAULT -1,`1-10` INT DEFAULT -1,`1-11` INT DEFAULT -1,`1-12` INT DEFAULT -1,`1-13` INT DEFAULT -1,`1-14` INT DEFAULT -1,
  `1-15` INT DEFAULT -1,`1-16` INT DEFAULT -1,`2-1` INT DEFAULT -1,`2-2` INT DEFAULT -1,`2-3` INT DEFAULT -1,`2-4` INT DEFAULT -1,`2-5` INT DEFAULT -1,
  `2-6` INT DEFAULT -1,`2-7` INT DEFAULT -1,`2-8` INT DEFAULT -1,`2-9` INT DEFAULT -1,`2-10` INT DEFAULT -1,`2-11` INT DEFAULT -1,`2-12` INT DEFAULT -1,
  `2-13` INT DEFAULT -1,`2-14` INT DEFAULT -1,`2-15` INT DEFAULT -1,`2-16` INT DEFAULT -1,`3-1` INT DEFAULT -1,`3-2` INT DEFAULT -1,`3-3` INT DEFAULT -1,
  `3-4` INT DEFAULT -1,`3-5` INT DEFAULT -1,`3-6` INT DEFAULT -1,`3-7` INT DEFAULT -1,`3-8` INT DEFAULT -1,`3-9` INT DEFAULT -1,`3-10` INT DEFAULT -1,
  `3-11` INT DEFAULT -1,`3-12` INT DEFAULT -1,`3-13` INT DEFAULT -1,`3-14` INT DEFAULT -1,`3-15` INT DEFAULT -1,`3-16` INT DEFAULT -1 ,`4-1` INT DEFAULT -1,
  `4-2` INT DEFAULT -1,`4-3` INT DEFAULT -1,`4-4` INT DEFAULT -1,`4-5` INT DEFAULT -1,`4-6` INT DEFAULT -1,`4-7` INT DEFAULT -1,`4-8` INT DEFAULT -1,
  `4-9` INT DEFAULT -1,`4-10` INT DEFAULT -1,`4-11` INT DEFAULT -1,`4-12` INT DEFAULT -1,`4-13` INT DEFAULT -1,`4-14` INT DEFAULT -1,`4-15` INT DEFAULT -1,
  `4-16` INT DEFAULT -1,`5-1` INT DEFAULT -1,`5-2` INT DEFAULT -1,`5-3` INT DEFAULT -1,`5-4` INT DEFAULT -1,`5-5` INT DEFAULT -1,`5-6` INT DEFAULT -1,
  `5-7` INT DEFAULT -1,`5-8` INT DEFAULT -1,`5-9` INT DEFAULT -1,`5-10` INT DEFAULT -1,`5-11` INT DEFAULT -1,`5-12` INT DEFAULT -1,`5-13` INT DEFAULT -1,
  `5-14` INT DEFAULT -1,`5-15` INT DEFAULT -1,`5-16` INT DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO pre4_international VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;


CREATE TABLE if not exists `mapping_id`(
  `class_id` INT PRIMARY KEY, 
  `professor_id` INT,
  `classroom_id` INT,
  `pre1_classroom_id` INT,
  `pre2_classroom_id` INT,
  `pre3_classroom_id` INT,
  `pre4_classroom_id` INT

)ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;
 
-- ------------------------------------
-- CREATE AND INSERT INITIAL VALUES 
-- ------------------------------------

CREATE TABLE if not exists `normalschedule`(
  `grade` INT PRIMARY KEY,`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,
  `1-8` INT,`1-9` INT,`1-10` INT,`1-11` INT,`1-12` INT,`1-13` INT,`1-14` INT,`1-15` INT,
  `1-16` INT ,`2-1` INT,`2-2` INT,`2-3` INT,`2-4` INT,`2-5` INT,`2-6` INT,`2-7` INT,
  `2-8` INT,`2-9` INT,`2-10` INT,`2-11` INT,`2-12` INT,`2-13` INT,`2-14` INT,`2-15` INT,
  `2-16` INT,`3-1` INT,`3-2` INT,`3-3` INT,`3-4` INT,`3-5` INT,`3-6` INT,`3-7` INT,
  `3-8` INT,`3-9` INT,`3-10` INT,`3-11` INT,`3-12` INT,`3-13` INT,`3-14` INT,`3-15` INT,
  `3-16` INT ,`4-1` INT,`4-2` INT,`4-3` INT,`4-4` INT,`4-5` INT,`4-6` INT,`4-7` INT,`4-8` INT,
  `4-9` INT,`4-10` INT,`4-11` INT,`4-12` INT,`4-13` INT,`4-14` INT,`4-15` INT,`4-16` INT,
  `5-1` INT,`5-2` INT,`5-3` INT,`5-4` INT,`5-5` INT,`5-6` INT,`5-7` INT,`5-8` INT,`5-9` INT,
  `5-10` INT,`5-11` INT,`5-12` INT,`5-13` INT,`5-14` INT,`5-15` INT,`5-16` INT 
) ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

CREATE TABLE if not exists `internationalschedule`(
  `grade` INT PRIMARY KEY,`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,
  `1-8` INT,`1-9` INT,`1-10` INT,`1-11` INT,`1-12` INT,`1-13` INT,`1-14` INT,`1-15` INT,
  `1-16` INT ,`2-1` INT,`2-2` INT,`2-3` INT,`2-4` INT,`2-5` INT,`2-6` INT,`2-7` INT,
  `2-8` INT,`2-9` INT,`2-10` INT,`2-11` INT,`2-12` INT,`2-13` INT,`2-14` INT,`2-15` INT,
  `2-16` INT,`3-1` INT,`3-2` INT,`3-3` INT,`3-4` INT,`3-5` INT,`3-6` INT,`3-7` INT,
  `3-8` INT,`3-9` INT,`3-10` INT,`3-11` INT,`3-12` INT,`3-13` INT,`3-14` INT,`3-15` INT,
  `3-16` INT ,`4-1` INT,`4-2` INT,`4-3` INT,`4-4` INT,`4-5` INT,`4-6` INT,`4-7` INT,`4-8` INT,
  `4-9` INT,`4-10` INT,`4-11` INT,`4-12` INT,`4-13` INT,`4-14` INT,`4-15` INT,`4-16` INT,
  `5-1` INT,`5-2` INT,`5-3` INT,`5-4` INT,`5-5` INT,`5-6` INT,`5-7` INT,`5-8` INT,`5-9` INT,
  `5-10` INT,`5-11` INT,`5-12` INT,`5-13` INT,`5-14` INT,`5-15` INT,`5-16` INT 
)ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;

INSERT INTO `normalschedule`(
  `grade` , `1-1` , `1-2` ,`1-3`, `1-4` , `1-5` , `1-6` , `1-7` ,
  `1-8` , `1-9` , `1-10` , `1-11` , `1-12` , `1-13` , `1-14` , `1-15` ,
  `1-16` , `2-1` , `2-2` , `2-3` , `2-4` , `2-5` , `2-6` , `2-7` ,
  `2-8` , `2-9` , `2-10` , `2-11` , `2-12` , `2-13` , `2-14` , `2-15` ,
  `2-16` , `3-1` , `3-2` , `3-3` , `3-4` , `3-5` , `3-6` , `3-7` ,
  `3-8` , `3-9` , `3-10` , `3-11` , `3-12` , `3-13` , `3-14` , `3-15` ,
  `3-16` , `4-1` , `4-2` , `4-3` , `4-4` , `4-5` , `4-6` , `4-7`  , `4-8` ,
  `4-9` , `4-10` , `4-11` , `4-12` , `4-13` , `4-14` , `4-15` , `4-16` ,
  `5-1` , `5-2` , `5-3` , `5-4` , `5-5` , `5-6` , `5-7` , `5-8` , `5-9` ,
  `5-10` , `5-11` , `5-12` , `5-13` , `5-14` , `5-15` , `5-16`  
) VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;

INSERT INTO `internationalschedule`(
  `grade` , `1-1` , `1-2` ,`1-3`, `1-4` , `1-5` , `1-6` , `1-7` ,
  `1-8` , `1-9` , `1-10` , `1-11` , `1-12` , `1-13` , `1-14` , `1-15` ,
  `1-16` , `2-1` , `2-2` , `2-3` , `2-4` , `2-5` , `2-6` , `2-7` ,
  `2-8` , `2-9` , `2-10` , `2-11` , `2-12` , `2-13` , `2-14` , `2-15` ,
  `2-16` , `3-1` , `3-2` , `3-3` , `3-4` , `3-5` , `3-6` , `3-7` ,
  `3-8` , `3-9` , `3-10` , `3-11` , `3-12` , `3-13` , `3-14` , `3-15` ,
  `3-16` , `4-1` , `4-2` , `4-3` , `4-4` , `4-5` , `4-6` , `4-7`  , `4-8` ,
  `4-9` , `4-10` , `4-11` , `4-12` , `4-13` , `4-14` , `4-15` , `4-16` ,
  `5-1` , `5-2` , `5-3` , `5-4` , `5-5` , `5-6` , `5-7` , `5-8` , `5-9` ,
  `5-10` , `5-11` , `5-12` , `5-13` , `5-14` , `5-15` , `5-16`  
) VALUES ( 1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 2 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 3 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         ),
         ( 4 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 ,
              -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 
         )
;