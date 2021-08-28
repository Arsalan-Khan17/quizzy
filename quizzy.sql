-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 12:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzy`
--
CREATE DATABASE IF NOT EXISTS `quizzy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quizzy`;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `quiz_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `option_a` varchar(50) NOT NULL,
  `option_b` varchar(50) NOT NULL,
  `option_c` varchar(50) NOT NULL,
  `option_d` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quiz_id`, `question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct`) VALUES
(3, 1, 'Q1', 'op1', 'op1', 'op2', 'op3', 'op3'),
(3, 2, 'q1', 'op1', 'op1', 'op2', 'op3', 'op2'),
(4, 12, 'Q1', 'op1', 'op1', 'op2', 'op3', 'op1'),
(4, 13, 'Q2', 'op1', 'op1', 'op2', 'op3', 'op2'),
(4, 14, 'Q3', 'op1', 'op1', 'op2', 'op3', 'op3'),
(4, 15, 'ergeg', 'rggerg', 'rggerg', 'regereg', 'gerg', 'gerg'),
(4, 16, 'gsgsegsgs', 'gsegsg', 'gsegsg', 'sgsg', 'egsgseg', 'sgsg'),
(18, 18, 'Our country name', 'Turkey', 'Afghanistan', 'Pakistan', 'India', 'Pakistan'),
(18, 19, 'How many soobas in pakistan', '2', '5', '3', '4', '4'),
(18, 20, 'Capital of pakistan', 'islamabad', 'tahkal', 'peshawar', 'lahore', 'islamabad'),
(18, 21, 'Who invented law of gravity', 'Arsalan', 'Newton', 'Hamza', 'Zaffar', 'Newton'),
(108, 22, 'zzZz', 'DFD', 'FDSFSD', 'GDSGDS', 'XCZXC', 'DFD'),
(108, 23, 'WEWQE', 'DFDWRERR', 'FDSFSEWRD', 'GDRERSGDS', 'RERXCZXC', 'GDRERSGDS'),
(114, 24, 'sdfsfsdfs', 'dfsdfsd', 'sdssds', 'dfdsfds', 'dsfdsfdsf', 'dfdsfds'),
(114, 25, 'sdfsfsdfswrwer', 'dfsdfsddfdsf', 'sdssdsdfsdf', 'dfdsfdsdfsf', 'dsfdsfdsfrewrwe', 'dfsdfsddfdsf'),
(115, 26, 'asdasdas', 'asdasdsa', 'adsadwewe', 'qwewqewq', 'rqwrwr', 'asdasdsa'),
(115, 27, 'asdasdas', 'asdasdsa', 'adsadwewe', 'qwewqewq', 'rqwrwr', 'qwewqewq'),
(118, 28, 'asdas', 'sadsa', 'sadsa', 'sadsa', 'dadsada', 'sadsa'),
(118, 29, 'sadasd', 'sad', 'adasd', 'asdasd', 'adasd', 'adasd'),
(128, 30, 'asdasdas', 'sadas', 'ad', 'adasd', 'asdasd', 'adasd'),
(128, 31, 'asdasd', 'asda', 'asdas', 'adasd', 'asdasd', 'asda'),
(128, 32, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdsad', 'asdasd'),
(129, 33, 'asasassssssssssssssssssssssssssss', 'asdasdsa', 'sadasdas', 'sadasdasd', 'asdasdasd', 'sadasdasd'),
(129, 34, 'asdasdasda', 'adasdasd', 'adasdasd', 'sadasdas', 'asdasdasd', 'sadasdas'),
(129, 35, 'adasd', 'adas', 'asdsad', 'adasd', 'adsad', 'adsad'),
(129, 36, 'adasssssssssss', 'assssssssssssssss', 'asssssssssssss', 'sad', 'dssssssssssssssss', 'dssssssssssssssss'),
(129, 37, 'asdasd', 'asdasss', 'asds', 'sdadaa', 'sadasdasds', 'asds'),
(129, 38, 'asddddddddddddddddddd', 'dsssssssssssss', 'dsssssssssssssss', 'asssssssss', 'assssssssss', 'dsssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `quizz_info`
--

DROP TABLE IF EXISTS `quizz_info`;
CREATE TABLE `quizz_info` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(100) NOT NULL,
  `quiz_code` int(11) NOT NULL,
  `num_of_quest` int(11) NOT NULL,
  `quiz_time` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizz_info`
--

INSERT INTO `quizz_info` (`quiz_id`, `quiz_name`, `quiz_code`, `num_of_quest`, `quiz_time`, `teacher_id`) VALUES
(1, 'test', 4894040, 10, 15, 18),
(3, 'test2', 2266036, 15, 20, 18),
(4, 'Demo', 4442621, 3, 10, 18),
(18, 'final', 2185751, 4, 10, 18),
(107, 'SAS', 3834771, 3, 12, 18),
(108, 'QWEWQ', 3973829, 2, 4, 20),
(109, 'wewe', 6829522, 1, 10, 18),
(111, 'Quiz3', 4128313, 2, 10, 18),
(112, 'asdasdsadsa', 4372765, 2, 20, 18),
(113, 'dwqewqe', 4302686, 2, 20, 18),
(114, 'Quiz5', 6328777, 2, 10, 22),
(115, 'wwewew', 7597863, 2, 20, 22),
(116, 'qwqe', 6434445, 2, 12, 18),
(117, 'ewe', 3245504, 2, 10, 18),
(118, 'ewew', 6525518, 2, 12, 18),
(125, 'asa', 151571, 2, 10, 18),
(126, 'qwqwqwqwq', 9068021, 2, 10, 18),
(128, 'adassadasdasgasgasfasdasdsadsa', 3403196, 2, 10, 18),
(129, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2347135, 2, 10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `email`, `password`) VALUES
(1, 'musadaq', 'musadaq@gmail.com', '12345678\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(3, 'coursera-bootstrap', 'arsalankhan4014@gmail.com', 'w232324\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(4, 'sasa', 'ali@gmail.com', 'wqwwqw\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(9, 'sasa', 'asas@gmail.com', '5d41402abc4b2a76b971\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(12, 'ali', 'ali22@gmail.com', '12345\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(13, 'ds', 'ds@gmail.com', '5d41402abc4b2a76b971\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(15, 'sasa', 'abc@gmail.com', '81dc9bdb52d04dc20036\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(17, 'ds', 'aldsai@gmail.com', '7110eda4d09e062aa5e4\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(18, 'Arsalan', 'arsalan@gmail.com', '12345'),
(20, 'asasas', 'asasdasd@gmail.com', '12345'),
(22, 'Riaz Afridi', 'riazafridi420@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quizz_info`
--
ALTER TABLE `quizz_info`
  ADD PRIMARY KEY (`quiz_id`),
  ADD UNIQUE KEY `quiz_name` (`quiz_name`),
  ADD KEY `teacher_id_fk` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `quizz_info`
--
ALTER TABLE `quizz_info`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quizz_info`
--
ALTER TABLE `quizz_info`
  ADD CONSTRAINT `teacher_id_fk` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
