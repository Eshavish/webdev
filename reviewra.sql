-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 03:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reviewra`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `mobile` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `passwordagain` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`mobile`, `email`, `username`, `occupation`, `password`, `passwordagain`, `gender`) VALUES
('1234567891', 'kfc@gmail.com', 'kfc', 'kfc', 'pass123', 'pass123', 'F'),
('8103869666', 'lokesh', 'lokesh', 'AE', 'pass123', 'pass123', 'M'),
('9425150707', 'karanvishwakarma@yahoo.com', 'karan vishwakarma', 'Superintendent Engineer', 'pass', 'pass', 'Male'),
('9479758597', 'esha.vish@gmail.com', 'esha vishwakarma ', 'computer engineer', 'pass', 'pass', 'F'),
('980867865900', 'karan.vish17@gmail.com', 'rohan', 'teacher', 'pass', 'pass', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `registerride`
--

CREATE TABLE IF NOT EXISTS `registerride` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `place_from` varchar(30) NOT NULL,
  `place_to` varchar(30) NOT NULL,
  `time` int(10) NOT NULL,
  `people` int(20) NOT NULL,
  `journey` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerride`
--

INSERT INTO `registerride` (`id`, `name`, `place_from`, `place_to`, `time`, `people`, `journey`) VALUES
(30, 'esha vishwakarma', 'varanasi', 'jaipur', 8, 8, 'Iam going with my family...wanna join?'),
(31, 'ishan', 'rampur', 'sadar', 3, 3, 'I am travelling with my friends...contact soon if '),
(32, 'Aman', 'dwarka', 'gorakpur', 8, 4, 'Please do not come with pets. Contact soon'),
(33, 'Jayant', 'vijay nagar', 'gaziyabad', 2, 1, 'Im goin for trecking...If some wants to join..');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(32) NOT NULL,
  `time` int(10) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `location`, `time`, `mobile`) VALUES
(1, 'ana', 'bhopal', 3, '9425150707'),
(2, 'hjk', 'yig', 9, '795559865866'),
(3, 'hjk', 'yig', 9, '795559865866'),
(4, 'radhika', 'jhhkllkh', 7, '89697469847'),
(5, 'kjhl', 'hhlkh', 7, '8827719971'),
(6, 'hljhl', 'hkj', 8, '7'),
(7, 'kjhlj', 'hlij', 8, '7509459100'),
(8, 'esha', 'sdd', 4, '57554557'),
(9, 'eshs', 'jgjgkjg', 7, '8827719971'),
(10, 'jhlk', 'bkjbjb', 7, '9479758597');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`mobile`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registerride`
--
ALTER TABLE `registerride`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerride`
--
ALTER TABLE `registerride`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
