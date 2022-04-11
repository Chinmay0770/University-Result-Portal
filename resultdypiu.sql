-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 11:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultdypiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `2020btechcsesem1`
--

CREATE TABLE `2020btechcsesem1` (
  `email` varchar(50) DEFAULT NULL,
  `DAA` varchar(20) DEFAULT NULL,
  `DBMS` varchar(20) DEFAULT NULL,
  `IPR` varchar(20) DEFAULT NULL,
  `DS` varchar(20) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2020btechcsesem1`
--

INSERT INTO `2020btechcsesem1` (`email`, `DAA`, `DBMS`, `IPR`, `DS`, `IP`) VALUES
('﻿20200802082@dypiu.ac.in', 'A+', 'A+', 'A+', 'A+', 'A+'),
('c@dypiu.ac.in', 'A+', 'A+', 'A+', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'B', 'C', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `2020btechcsesem2`
--

CREATE TABLE `2020btechcsesem2` (
  `email` varchar(50) DEFAULT NULL,
  `DC` varchar(20) DEFAULT NULL,
  `DLD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2020btechcsesem2`
--

INSERT INTO `2020btechcsesem2` (`email`, `DC`, `DLD`) VALUES
('﻿20200802068@dypiu.ac.in', 'A+', 'A+'),
('c@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A'),
('20200802068@dypiu.ac.in', 'A+', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_avatar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `email`, `password`, `user_avatar`) VALUES
('Chinmay', 'chinmayfac@tst.com', '8cb2237d0679ca88db6464eac60da96345513964', ''),
('Chinmay Pimpalgaonkar', 'cfac@dypiu.ac.in', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/C.png'),
('Sfac', 'sfac@dypiu.ac.in', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/S.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_myprofile`
--

CREATE TABLE `faculty_myprofile` (
  `fullname` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_myprofile`
--

INSERT INTO `faculty_myprofile` (`fullname`, `qualification`, `email`, `phone`, `password`, `branch`) VALUES
('Chinmay Pimpalgaonkar', 'PHD', 'cfac@dypiu.ac.in', '9146795863', '1234', 'BTech CSE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dypiu_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `dypiu_id`, `password`, `user_avatar`) VALUES
('Chinmay Pimpalgaonkar', 'cp@dypiu.ac.in', '20200802082', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/C.png'),
('Shoaib Memon', 's@dypiu.ac.in', '4844', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', ''),
('ab', 'ab@dypiu.ac.in', '6456', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', ''),
('Chinmay Pimpalgaonkar', 'cd@dypiu.ac.in', '1544', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/C.png'),
('gd', 'gd@dypiu.ac.in', '656', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/1644229562.png'),
('as', 'as@dypiu.ac.in', '464', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/1644229727.png'),
('quickpark', 'quickpark@dypiu.ac.in', '26126', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/1644229995.png'),
('ad', 'ad@dypiu.ac.in', '2565', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/1644231265.png'),
('Ch', 'ch@dypiu.ac.in', '2514', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/1644231447.png'),
('Chinmay Pimpalgaonkar', 'c@dypiu.ac.in', '5161', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/C.png'),
('a', 'a@dypiu.ac.in', '166', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/A.png'),
('Chinmay Pimpalgaonkar', '20200802082@dypiu.ac.in', '20200802082', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/C.png'),
('ab', 'ab@dypiu.ac.in', '586949', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/A.png'),
('ab', 'ab@dypiu.ac.in', '586949', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'avatar/A.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_myprofile`
--

CREATE TABLE `student_myprofile` (
  `fullname` varchar(200) NOT NULL,
  `prn` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_myprofile`
--

INSERT INTO `student_myprofile` (`fullname`, `prn`, `email`, `phone`, `password`, `branch`) VALUES
('Shoaib Memon', '20200802068', 's@dypiu.ac.in', '9999999999', '1234', 'BTech CSE'),
('Chinmay Pimpalgaonkar', '20200802082', 'c@dypiu.ac.in', '999999999', '1234', 'B Tech CSE'),
('A', '20200802082', 'a@dypiu.ac.in', '9999999999', '1234', 'B Tech CSE'),
('Chinmay Pimpalgaonkar', '20200802082', '20200802082@dypiu.ac.in', '9146795863', '1234', 'B Tech CSE');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sno` int(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `subjectid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sno`, `course`, `semester`, `subjects`, `subjectid`) VALUES
(1, 'B.Tech CSE', 'Sem1', 'DAA', 'CSE - 101'),
(2, 'B.Tech CSE', 'Sem1', 'DBMS', 'CSE - 102'),
(3, 'B.Tech CSE', 'Sem1', 'IPR', 'CSE - 103'),
(4, 'B.Tech CSE', 'Sem1', 'DS', 'CSE - 104'),
(1, 'B.Tech CSE', 'Sem2', 'DC', 'CSE - 201'),
(2, 'B.Tech CSE', 'Sem2', 'DLD', 'CSE - 202'),
(5, 'B.Tech CSE', 'Sem1', 'IP', 'CSE - 105'),
(1, 'B.Tech CSE', 'Sem3', 'Design and Analysis of Algorithms', 'CSE - 301'),
(2, 'B.Tech CSE', 'Sem3', 'Intellectual Property Rights', 'CSE - 302'),
(3, 'B.Tech CSE', 'Sem3', 'Database Systems', 'CSE - 303'),
(1, 'B.Tech CSE', 'Sem4', 'a', 'CSE - 401'),
(2, 'B.Tech CSE', 'Sem4', 'b', 'CSE - 402'),
(3, 'B.Tech CSE', 'Sem4', 'c', 'CSE - 403');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `name`, `new_name`) VALUES
(7, 'test.php', '1602221644988256test.php'),
(8, 'test.php', '1602221644988315test.php'),
(9, 'test.php', '1602221644988473test.php'),
(10, '2020btechcsesem1.csv', '16022216450113222020btechcsesem1.csv'),
(11, '2020btechcsesem1.csv', '16022216450115052020btechcsesem1.csv'),
(12, '2020btechcsesem1.csv', '16022216450116992020btechcsesem1.csv'),
(13, '2020btechcsesem1.csv', '16022216450118512020btechcsesem1.csv'),
(14, '2020btechcsesem1.csv', '16022216450118752020btechcsesem1.csv'),
(15, '2020btechcsesem1.csv', '16022216450120952020btechcsesem1.csv'),
(16, '2020btechcsesem1.csv', '16022216450122012020btechcsesem1.csv'),
(17, '2020btechcsesem1.csv', '16022216450123502020btechcsesem1.csv'),
(18, '2020btechcsesem1.csv', '16022216450125262020btechcsesem1.csv'),
(19, '2020btechcsesem1.csv', '16022216450131412020btechcsesem1.csv'),
(20, '2020btechcsesem1.csv', '16022216450133222020btechcsesem1.csv'),
(21, '2020btechcsesem1.csv', '16022216450142402020btechcsesem1.csv'),
(22, '2020btechcsesem1.csv', '16022216450143002020btechcsesem1.csv'),
(23, '2020btechcsesem2.csv', '16022216450148902020btechcsesem2.csv'),
(24, '2020btechcsesem1.csv', '17022216450762502020btechcsesem1.csv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
