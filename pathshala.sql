-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 11:17 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pathshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_gen` varchar(10) NOT NULL,
  `e_course` varchar(10) NOT NULL,
  `e_city` varchar(20) NOT NULL,
  `e_pin` int(10) NOT NULL,
  `e_mob` int(10) NOT NULL,
  `e_email` varchar(30) NOT NULL,
  `e_add` varchar(100) NOT NULL,
  `e_feed` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`e_id`, `e_name`, `e_gen`, `e_course`, `e_city`, `e_pin`, `e_mob`, `e_email`, `e_add`, `e_feed`) VALUES
(1, 'Rohit', 'Male', 'BCA', 'Varanasi', 221005, 2147483647, 'rohit916151@gmail.com', 'Sunderpur Newada ', 'full details about course....');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `f_id` int(20) NOT NULL,
  `std_id` int(20) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_course` varchar(50) NOT NULL,
  `f_date` date NOT NULL,
  `f_fee` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`f_id`, `std_id`, `f_name`, `f_course`, `f_date`, `f_fee`) VALUES
(4, 12, 'Shreya srivastava ', 'Other', '2016-09-20', 2000),
(5, 10, 'saurabh srivastava', 'BCA', '2016-09-27', 10000),
(6, 13, 'harshita srivastava', 'BCA', '2016-09-14', 13200),
(7, 15, 'sagar  deshmukh', 'BCA', '2016-09-15', 10500),
(8, 10, 'saurabh srivastava', 'BCA', '2016-09-28', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `std_id` int(11) NOT NULL,
  `r_c_programming` int(10) NOT NULL,
  `r_c++_programming` int(10) NOT NULL,
  `r_java_programming` int(10) NOT NULL,
  `r_php` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_regi`
--

CREATE TABLE IF NOT EXISTS `student_regi` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_father` varchar(50) NOT NULL,
  `std_dob` date NOT NULL,
  `std_course` varchar(20) NOT NULL,
  `std_city` varchar(20) NOT NULL,
  `std_cfee` int(20) NOT NULL,
  `std_gender` varchar(10) NOT NULL,
  `std_mob` varchar(12) NOT NULL,
  `std_email` varchar(40) NOT NULL,
  `std_add` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_regi`
--

INSERT INTO `student_regi` (`std_id`, `std_name`, `std_father`, `std_dob`, `std_course`, `std_city`, `std_cfee`, `std_gender`, `std_mob`, `std_email`, `std_add`) VALUES
(10, 'saurabh srivastava', 'Anjani kumar srivastava', '1996-02-28', 'BCA', 'Varanasi', 0, 'Male', '9554195719', 'saurabh2409899@gmail.com', 'sunderpur BHU varanasi'),
(12, 'Shreya srivastava ', 'ajay kumar srivastava ', '2004-07-24', 'Other', 'Varanasi', 0, 'Female', '', '', 'N2/249 A sunderpur varanasi'),
(13, 'harshita srivastava', 'rajesh srivastava', '1998-01-09', 'BCA', 'Allahabad', 0, 'Female', '7376320424', '', ''),
(14, 'Nancy Youtham', 'John Wellington Youtham', '1996-09-26', 'BCA', 'Varanasi', 0, 'Female', '8423637901', 'nancy.youtham@gmail.com', 'naria bhu varanasi'),
(15, 'sagar  deshmukh', 'suhas m deshmukh', '1994-10-12', 'BCA', 'Varanasi', 0, 'Male', '8175908626', 'sagardeshmukh2013@gmail.com', 'brij enclave colony sunderpur varanasi'),
(16, 'Rohit Patel', 'Chandra Dev Patel', '1994-08-15', 'Other', 'Varanasi', 20000, 'Male', '9161514243', 'rohit916151@gmail.com', 'Sunderpur Newada Varanasi'),
(17, 'shubham', 'dhzvds,jkgh', '1996-12-07', 'BCA', 'Varanasi', 6666, 'Male', '1234567', 'sa@gmail.com', 'fsf');

-- --------------------------------------------------------

--
-- Table structure for table `web_con`
--

CREATE TABLE IF NOT EXISTS `web_con` (
  `web_id` int(11) NOT NULL,
  `web_course` varchar(50) NOT NULL,
  `web_lang` varchar(50) NOT NULL,
  `web_slider` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_con`
--

INSERT INTO `web_con` (`web_id`, `web_course`, `web_lang`, `web_slider`) VALUES
(5, 'BCA', 'C', '580841ff5c68eimg'),
(6, 'MCA', 'JAVA', '580842802b2a6img'),
(7, 'BBA', 'MySqul', '580842bb85d6aimg'),
(8, 'O-Level', 'HTML', '580842e813785img'),
(9, 'CCC', 'C++', '580843128f1c4img'),
(10, 'A-Level', 'PHP', '58084682a7afaimg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `student_regi`
--
ALTER TABLE `student_regi`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `web_con`
--
ALTER TABLE `web_con`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student_regi`
--
ALTER TABLE `student_regi`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `web_con`
--
ALTER TABLE `web_con`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
